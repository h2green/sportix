<?php

declare(strict_types=1);

function register_inputs()
{

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
    
    echo '<div class="input-container">';
    echo '<input type="password" name="password" placeholder="Contraseña">';
    echo '</div>';
    echo '<div class="input-container">';
    echo '<input type="password" name="confPass" placeholder="Repita Contraseña">';
    echo '</div>';

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