<?php
declare(strict_types=1);

/**
 * Función que verifica si el usuario ha iniciado sesión y muestra el botón de cerrar sesión o el botón de inicio de sesión.
 * Los frontend-devs pueden editar la estructura HTML de los botones en la función.
 */
function check_user_loggedin() 
{
    if (isset($_SESSION['user_id'])) {
        echo '<div class="user"><a href="backend/logout.php">';
        echo '<img src="IMG/ITEMS/user.svg">';
        echo '<p>Cerrar Sesion</p>';
        echo '<p class="nom-usuario">' . $_SESSION['username'] . '</p>';
        echo '</a>';
        echo '</div>';
    } else {
        echo '<div class="user"><a href="login.php">';
        echo '<img src="IMG/ITEMS/user.svg">';
        echo '<p>Usuario</p>';
        echo '</a>';
        echo '</div>';
    }
}

/**
 * Función que verifica si el registro del usuario ha sido exitoso y muestra una alerta.
 * Los frontend-devs pueden editar el echo para que se vea mas bonita la alerta.
 */
function check_register_success() 
{
    if (isset($_GET["register"]) && $_GET["register"] === "success") {

        echo '<div id="notification">';
        echo '<div id="notification__body">';
        echo 'Verifica tu email';
        echo '</div>';
        echo '<div id="notification__progress"></div>';
        echo '</div>';
    }
    else if(isset($_SESSION['user_id']))
    {
        echo '<div id="notification">';
        echo '<div id="notification__body">';
        echo 'Inicio de sesion completado! &#128640;';
        echo '</div>';
        echo '<div id="notification__progress"></div>';
        echo '</div>';
    }
}

/**
 * Función que verifica si la confirmación de la cuenta del usuario ha sido exitosa y muestra una alerta.
 * Los frontend-devs pueden editar el echo para que se vea mas bonita la alerta.
 */
function check_confirm()
{
    if (isset($_GET["confirm"]) && $_GET["confirm"] === "success") {
        echo '<script type="text/javascript">alert("Cuenta confirmada exitosamente!");</script>';
    }
}

?>