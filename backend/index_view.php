<?php
declare(strict_types=1);

function check_user_loggedin() 
{
    if (isset($_SESSION['user_id'])) {
        echo '<div class="user"><a href="backend/logout.php">';
        echo '<img src="IMG/ITEMS/user.svg">';
        echo '<p>Cerrar Sesion</p>';
        echo $_SESSION['username'];
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
function check_register_success() 
{
    if (isset($_GET["register"]) && $_GET["register"] === "success") {
        echo '<script type="text/javascript">alert("Registro exitoso!");</script>';
    }
}

function check_login_success()
{
    if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo '<script type="text/javascript">alert("Iniciaste Sesion exitosamente!");</script>';
    }
}

?>