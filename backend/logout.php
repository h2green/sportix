<?php

/**
 * Este archivo de PHP se encarga de cerrar la sesión del usuario actual.
 * Primero inicia la sesión, luego elimina todas las variables de sesión y finalmente destruye la sesión.
 * Luego redirige al usuario a la página de inicio.
 */

session_start();
session_unset();
session_destroy();

header("Location: ../index.php");
die();

?>