<?php
declare(strict_types=1);

/**
 * Función que comprueba si hay errores de inicio de sesión y los muestra en pantalla.
 * Si hay errores, los muestra en pantalla y los elimina de la sesión.
 * Los frontend-devs pueden editar la estructura HTML de la lista de errores.
 * 
 * @return void
 */

function check_login_errors() 
{
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        echo "<br>";

        foreach ($errors as $error) {
            echo "" . $error . "<br>";
        }

        unset($_SESSION["errors_login"]);
    }
}

?>