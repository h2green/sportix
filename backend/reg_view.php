<?php

declare(strict_types=1);

function check_register_errors() 
{
    if (isset($_SESSION("errors_register"))) 
    {
        $errors = $_SESSION("errors_register");

        echo "<br>";

        foreach ($errors as $error) 
        {
            echo "" . $error . "<br>";
        }

        unset($_SESSION("errors_register"));
    }
}

?>