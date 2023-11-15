<?php
require_once 'backend/includes/config_session.inc.php';
?>

<header>
    <div class="logo"><a href="index"><img src="IMG/Logo-Sportix.png"></a></div>
    <div id="items">
        <div class="flight"><a href="cart"><img src="IMG/ITEMS/cart-outline.svg">
                <p>Carrito</p>
            </a>
        </div>
        <div class="help"><a href="help">
                <img src="IMG/ITEMS/help-outline.svg">
                <p>Ayuda</p>
            </a>
        </div>
        <?php
        check_user_loggedin();
        ?>
    </div>

    <input type="checkbox" id="active">
    <label for="active" class="menu-btn"><i class="fas fa-bars"></i></label>
    <div class="wrapper">
        <ul>
            <li><a href="index">Home</a></li>
            <li><a href="cart">Carrito</a></li>
            <li><a href="help">Ayuda</a></li>
            <?php
            if (isset($_SESSION['user_id'])) {
                //echo '<li><a href="backend/logout.php">Cerrar Sesion</a></li>';
                if (isset($_SESSION['username'])) {
                    echo '<li><a href="backend/logout.php">' . $_SESSION['username'] . '</a></li>';
                } else {
                    echo '<li><a href="login">Usuario</a></li>';
                }
            }
            ?>
        </ul>
    </div>
</header