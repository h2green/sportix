<?php
declare(strict_types=1);

/**
 * Verifica si alguno de los campos de entrada está vacío.
 *
 * @param string $username Nombre de usuario.
 * @param string $password Contraseña.
 * @param string $cpassword Confirmación de contraseña.
 * @param string $email Correo electrónico.
 * @return bool Retorna true si alguno de los campos está vacío, de lo contrario retorna false.
 */
function is_input_empty($username, $password, $cpassword, $email) 
{
    if (empty($username) || empty($password) || empty($cpassword) || empty($email)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Verifica si el correo electrónico es inválido.
 *
 * @param string $email Correo electrónico.
 * @return bool Retorna true si el correo electrónico es inválido, de lo contrario retorna false.
 */
function is_email_invalid($email) 
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Verifica si el nombre de usuario ya está en uso.
 *
 * @param mysqli $mysqli Objeto mysqli.
 * @param string $username Nombre de usuario.
 * @return bool Retorna true si el nombre de usuario ya está en uso, de lo contrario retorna false.
 */
function is_username_taken(mysqli $mysqli, string $username) 
{
    if (get_username($mysqli, $username)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Verifica si el correo electrónico ya está registrado.
 *
 * @param mysqli $mysqli Objeto mysqli.
 * @param string $email Correo electrónico.
 * @return bool Retorna true si el correo electrónico ya está registrado, de lo contrario retorna false.
 */
function is_email_registered(mysqli $mysqli, string $email)
{
    if (get_email($mysqli, $email)) {
        return true;
    } else {
        return false;
    }
}

/**
 * Crea un nuevo usuario.
 *
 * @param mysqli $mysqli Objeto mysqli.
 * @param string $username Nombre de usuario.
 * @param string $password Contraseña.
 * @param string $email Correo electrónico.
 */
function create_user(mysqli $mysqli, string $username, string $password, string $email)
{
    set_user($mysqli, $username, $password, $email);
}

/**
 * Envía un correo electrónico de confirmación.
 *
 * @param mysqli $mysqli Objeto mysqli.
 * @param string $email Correo electrónico.
 * @param string $username Nombre de usuario.
 */
function send_email(mysqli $mysqli, string $email, string $username)
{
    send_email_confirmation($mysqli, $email, $username);
}
?>