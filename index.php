<!-- <?php //include 'backend/connection.php'; if(!isset($_SESSION['token'])){header('Location: login.php');}?> -->

<?php
require_once 'backend/includes/config_session.inc.php';
require_once 'backend/index_view.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="IMG/Logo-Sportix.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!--Fonts Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Playfair+Display:wght@500&family=Poppins:wght@300&family=Roboto&family=Roboto+Condensed&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Martian+Mono:wght@300&family=Playfair+Display:wght@500&family=Poppins:wght@300&family=Roboto&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <!---->

    <title>Sportix</title>

    <link rel="stylesheet" href="STYLE/home.css">
    
    //<?php
    //check_login_success();
    //check_register_success();
    //?>
    

</head>

<body>
    <header>
        <div class="logo"><a href="index.php"><img src="IMG/Logo-Sportix.png"></a></div>
        <div id="items">
            <div class="flight"><a href="#"><img src="IMG/ITEMS/cart-outline.svg">
                    <p>Carrito</p>
                </a>
            </div>
            <div class="help"><a href="help.html">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Carrito</a></li>
                <li><a href="help.html">Ayuda</a></li>
                <?php
                if (isset($_SESSION['user_id'])) {
                    echo '<li><a href="backend/logout.php">Cerrar Sesion</a></li>';
                    echo $_SESSION['username'];
                } else {
                    echo '<li><a href="login.php">Usuario</a></li>';
                }
                ?>
            </ul>
        </div>
    </header>

    <h2 class="bienvenida">Bienvenido a Sportix, el mejor lugar para Sporty Chic</h2>

    <aside>
        <div class="container-publicidad">
            <a href="">
                <img src="IMG/publicidad-Ins.png">
                <p>Averigua lo que publica el centro de estudiantes</p>
            </a>
            <a href="">
                <img src="IMG/publicidad-Face.png">
                <p>Investiga lo que publica la escuela</p>
            </a>
            <a href="">
                <img src="IMG/publicidad-Escuela.png">
                <p>Informate la pagina web oficial de la escuela J.F.K</p>
            </a>
        </div>
    </aside>

    <main>
        <div class="item">
            <img src="IMG/CAMPERAS/camperaGAP-00.png">
            <!--Chequer descripcion 
            https://articulo.mercadolibre.com.ar/MLA-645281368-campera-gap-nena-original-varios-colores-_JM#position=25&search_layout=grid&type=item&tracking_id=52e6ea6f-8092-49b6-908d-2fb71d43f6a5-->
            <p>Campera GAP</p>
            <h3>$30.000</h3>
        </div>
        <div class="item">
            <img src="IMG/PANTALON/pantalonSinMod-00.png">
            <!--Chequear descripcion
            https://articulo.mercadolibre.com.ar/MLA-1504516530-jean-gap-slim-taper-fit-denim-premium-importado-usa-34x32-_JM#position=1&search_layout=grid&type=item&tracking_id=df535416-fbb2-49f5-ad5e-1ef8a7624c7a-->
            <p>Jean adulto</p>
            <h4><span class="tachado">$55.500</span></h4>
            <h3>$45.000</h3>
        </div>
        <div class="item">
            <img src="IMG/CAMPERAS/buzoVOGUE-00.png">
            <!--Chequear descripcion
            https://shop.vogue.de/products/vogue-sweatshirt-schwarz-mit-heller-logo-stickerei-->
            <p>Buzo Vogue</p>
            <h3>$48.000</h3>
        </div>
        <div class="item">
            <img src="IMG/PANTALON/panCortoVOGUE-00.png">
            <!--Chequear descripcion
            https://shop.vogue.de/products/vogue-shorts-creme-mit-tonaler-logo-stickerei-->
            <p>Short Vogue para mujeres</p>
            <h4><span class="tachado">$35.000</span></h4>
            <h3>$20.000</h3>
        </div>
        <div class="item">
            <img src="IMG/ZAPATILLAS/ZapatillaADIDAS-00.png">
            <!--Chequear descripcion
            https://www.adidas.com.ar/zapatillas-nmd_s1/FZ5707.html-->
            <p>Zapatillas Adidas</p>
            <h3>$100.000</h3>
        </div>
        <div class="item">
            <img src="IMG/GORRAS/GorraADIDAS-00.png">
            <!--Chequear descripcion
            https://www.adidas.com.ar/gorro-pescador-classic-algodon/HT2029.html-->
            <p>Gorra Adidas</p>
            <h3>$17.000</h3>
        </div>
        <div class="item">div 7</div>
    </main>

    <footer>
        <img src="IMG/Logo-Sportix.png">

        <small>	Copyright &#169; 2023 <b>Sportix</b> - Todos los Derechos Reservados</small>

        <div class="follow">
            <a href="#">
                <img src="IMG/ITEMS/facebook.svg">
            </a>
            <a href="https://www.instagram.com/sporttix_store/">
                <img src="IMG/ITEMS/instagram.svg">
            </a>
        </div>
    </footer>

    
</body>

</html>