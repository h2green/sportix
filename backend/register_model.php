<?php
declare(strict_types=1);

require_once '..\vendor\autoload.php';

use Symfony\Component\Mailer\Transport\Smtp\EsmtpTransport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

/**
 * Función que verifica si un nombre de usuario ya existe en la base de datos.
 *
 * @param mysqli $mysqli Objeto mysqli que representa la conexión a la base de datos.
 * @param string $username Nombre de usuario a verificar.
 * @return int Retorna el número de filas que coinciden con la consulta.
 */
function get_username(mysqli $mysqli, string $username) 
{
    $user_check_query = mysqli_query($mysqli, "SELECT username FROM users WHERE username='{$username}'");
    $row = mysqli_num_rows($user_check_query);

    return $row;
}

/**
 * Función que verifica si un correo electrónico ya existe en la base de datos.
 *
 * @param mysqli $mysqli Objeto mysqli que representa la conexión a la base de datos.
 * @param string $email Correo electrónico a verificar.
 * @return int Retorna el número de filas que coinciden con la consulta.
 */
function get_email(mysqli $mysqli, string $email) 
{
    $email_check_query = mysqli_query($mysqli, "SELECT email FROM users WHERE email='{$email}'");
    $row = mysqli_num_rows($email_check_query);

    return $row;
}

/**
 * Función que inserta un nuevo usuario en la base de datos.
 *
 * @param mysqli $mysqli Objeto mysqli que representa la conexión a la base de datos.
 * @param string $username Nombre de usuario del nuevo usuario.
 * @param string $password Contraseña del nuevo usuario.
 * @param string $email Correo electrónico del nuevo usuario.
 * @return void
 */
function set_user(mysqli $mysqli, string $username, string $password, string $email)
{
    $query = "INSERT INTO users (username, password, email, token, active) VALUES (?, ?, ?, ?, 0)";
    $stmt = mysqli_stmt_init($mysqli);
    $stmt = mysqli_prepare($mysqli, $query);

    $options = [
        'cost' => 12
    ];
    $password = password_hash($password, PASSWORD_DEFAULT, $options);
    $token = md5(rand().time());
    mysqli_stmt_bind_param($stmt, "ssss", $username, $password, $email, $token);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

/**
 * Función que obtiene el token de un usuario.
 *
 * @param mysqli $mysqli Objeto mysqli que representa la conexión a la base de datos.
 * @param string $username Nombre de usuario del usuario.
 * @return string Retorna el token del usuario.
 */
function get_token(mysqli $mysqli, string $username)
{
    $stmt = mysqli_prepare($mysqli, "SELECT token FROM users WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $token);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    return $token;
}

/**
 * Función que envía un correo electrónico de confirmación de registro.
 *
 * @param mysqli $mysqli Objeto mysqli que representa la conexión a la base de datos.
 * @param string $email Correo electrónico del usuario.
 * @param string $username Nombre de usuario del usuario.
 * @return void
 */
function send_email_confirmation(mysqli $mysqli, string $email, string $username)
{
    $token = get_token($mysqli, $username);
    $msg = 'Hola, ' . $username . ': <br><br> Gracias por registrarte en Sportix. <br><br> Para confirmar tu cuenta, haz click en el siguiente enlace: <br><br> <a href="http://localhost/backend/confirm.php?token=' . $token . '">VERIFICAR CORREO ELECTRONICO</a>';

    $transport = new EsmtpTransport('smtp.gmail.com', 587);
    $transport->setUsername('sportixchic@gmail.com');
    $transport->setPassword('svby egsp wslj gpqe');

    $mailer = new Mailer($transport);

    $message = (new Email())
        ->from('sportixchic@gmail.com')
        ->to($email)
        ->subject('Verifica tu correo electronico de sportix')
        ->html($msg, 'text/html');

    $mailer->send($message);
}
?>