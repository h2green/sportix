<?php
// Sistema de Registro de Usuario

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $username   = $_POST["username"];
    $password   = $_POST["password"];
    $confpass   = $_POST["confPass"];
    $email      = $_POST["email"];

    try {
        require_once 'includes/dbconn.inc.php';
        require_once 'reg_model.php';
        require_once 'reg_control.php';

        // Manejadores de Errores
        $errors = [];

        if (is_input_empty($username, $password, $confPass, $email)) {
            $errors["empty_input"] = "Llena todos los campos!";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "Email invalido!";
        }
        if (is_username_taken($mysqli, $username)) {
            $errors["username_taken"] = "Nombre de usuario ya existe!";
        }
        if (is_email_registered($mysqli, $email)) {
            $errors["email_registered"] = "Email ya registrado!";
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_register"] = $errors;
            header("location ../index.php");
        }

        
    } catch (mysqli_sql_exception $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("location: ../index.php");
    die();
}

?>