<?php
include_once 'includes/dbconn.inc.php';
declare(strict_types=1);

/**
 * Este archivo se encarga de confirmar la cuenta de usuario a través del token enviado por correo electrónico.
 * Si el token es válido, se actualiza el estado de la cuenta a activa en la base de datos.
 * Luego, se redirige al usuario a la página de inicio con un mensaje de confirmación exitosa.
 */

if (isset($_GET["token"])) {
    $token = $_GET["token"];
    $query = "UPDATE users SET active = 1 WHERE token = ?";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "s", $token);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../index.php?confirm=success");
    die();
}

?>