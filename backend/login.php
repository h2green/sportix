<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username   = $_POST["username"];
    $password   = $_POST["password"];

    try {
        require_once 'includes/dbconn.inc.php';
        require_once 'login_control.php';
        require_once 'login_model.php';

        // Manejadores de Errores
        $errors = [];

        if (is_input_empty($username, $password)) {
            $errors[] = "Es necesario especificar el nombre de usuario y la contraseña.";
        } 
        
        // Obtenemos los datos del usuario de la Base de Datos
        $result = get_user($mysqli, $username);

        // Verificamos si el usuario existe
        if (is_username_wrong($result)) {
            $errors[] = "Nombre de usuario o contraseña incorrectos.";
        } else {
            $hashPassword = $result["password"];
            if (is_password_wrong($password, $hashPassword)) {
                $errors[] = "Nombre de usuario o contraseña incorrectos.";
            } 
        }

        require_once 'includes/config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_login"] = $errors;

            header("Location: ../login.php");
            die();
        }

        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["username"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regeneration"] = time();
        header("Location: ../index.php?login=success");
        $mysqli = null;
        $stmt = null;
        die();
    } catch(mysqli_sql_exception $e) {
        die("Query failed: " . $e->getMessage());
    }

}
else {
    header("Location: ../login.php");
    die();
}