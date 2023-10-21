<?php
// Sistema de Registro de Usuario

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username   = $_POST["username"];
    $password   = $_POST["password"];
    $confPass   = $_POST["confPass"];
    $email      = $_POST["email"];

    try {
        require_once 'includes/dbconn.inc.php';
        require_once 'register_model.php';
        require_once 'register_control.php';

        // Manejadores de Errores
        $errors = [];

        if (is_input_empty($username, $password, $confPass, $email)) {
            $errors["empty_input"] = "Llena todos los campos!";
        } 
        if (is_email_invalid($email)) 
        {
            $errors["invalid_email"] = "Email invalido!";
        } 
        if (is_username_taken($mysqli, $username)) 
        {
            $errors["username_taken"] = "Nombre de usuario ya existe!";
        }
        if (is_email_registered($mysqli, $email)) {
            $errors["email_registered"] = "Email ya usado!";
        }
        if ($password !== $confPass) {
            $errors["password_mismatch"] = "Contraseñas no coinciden!";
        }

        require_once 'includes/config_session.inc.php';

        $username = mysqli_real_escape_string($mysqli, $username);
        $password = mysqli_real_escape_string($mysqli, $password);
        $confPass = mysqli_real_escape_string($mysqli, $confPass);
        $email    = mysqli_real_escape_string($mysqli, $email);

        if ($errors) {
            $_SESSION["errors_register"] = $errors;

            $regData = [
                "username" => $username,
                "password" => $password,
                "confPass" => $confPass,
                "email"    => $email
            ];
            $_SESSION["reg_data"] = $regData;

            header("Location: ../register.php");
            die();
        }

        // Registro de Usuario

        create_user($mysqli, $username, $password, $email);
        header("Location: ../index.php?register=success");

        $mysqli = null;
        $stmt = null;

        die();
    } catch (mysqli_sql_exception $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../register.php");
    die();
}

?>