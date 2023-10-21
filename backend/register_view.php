<?php
declare(strict_types=1);

/**
 * Esta función genera los campos de entrada para el formulario de registro.
 * Si hay datos de registro previos almacenados en la sesión, los campos se rellenan con esos datos.
 * Si hay un error de "username_taken", se muestra un mensaje de error debajo del campo de nombre de usuario.
 * Si no hay datos de registro previos almacenados en la sesión, los campos se muestran vacíos.
 * Los frontend-devs pueden editar el HTML generado dentro de los echo statements.
 */
function register_inputs()
{
    // Generar campo de entrada para el nombre de usuario
    if (isset($_SESSION["reg_data"]["username"]) && !isset($_SESSION["errors_register"]["username_taken"])) 
    {
        echo '<div class="input-container">';
        echo '<input type="text" name="username" placeholder="Nombre" value="' . $_SESSION["reg_data"]["username"] . '">';
        echo '</div>';
    } else {
        echo '<div class="input-container">';
        echo '<input type="text" name="username" placeholder="Nombre">';
        echo '</div>';
    }
    
    // Generar campo de entrada para la contraseña
    echo '<div class="input-container">';
    echo '<input type="password" name="password" placeholder="Contraseña">';
    echo '</div>';
    
    // Generar campo de entrada para confirmar la contraseña
    echo '<div class="input-container">';
    echo '<input type="password" name="confPass" placeholder="Repita Contraseña">';
    echo '</div>';

    // Generar campo de entrada para el correo electrónico
    if (isset($_SESSION["reg_data"]["email"]) && !isset($_SESSION["errors_register"]["email_registered"]) && !isset($_SESSION["errors_register"]["invalid_email"])) 
    {
        echo '<div class="input-container">';
        echo '<input type="email" name="email" placeholder="Email" value="' . $_SESSION["reg_data"]["email"] . '">';
        echo '</div>';
    } else {
        echo '<div class="input-container">';
        echo '<input type="email" name="email" placeholder="Email">';
        echo '</div>';
    }
}

/**
 * Esta función comprueba si hay errores de registro almacenados en la sesión.
 * Si hay errores, los muestra debajo de los campos de entrada.
 * Los desarrolladores frontend no necesitan editar esta función.
 */
function check_register_errors() 
{
    if (isset($_SESSION["errors_register"])) 
    {
        $errors = $_SESSION["errors_register"];

        echo "<br>";

        foreach ($errors as $error) 
        {
            echo "" . $error . "<br>";
        }

        unset($_SESSION["errors_register"]);
    }
}

?>