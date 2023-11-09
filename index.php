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
    <!---->

    <title>Sportix</title>

    <link rel="stylesheet" href="STYLE/home.css">
</head>

<body>
    <?php
    check_register_success();
    require('LAYOUT/header.php');
    ?>

    <?php require('LAYOUT/aside.php'); ?>

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
        <div class="item">
            <img src="IMG/ZAPATILLAS/ZapatillaNIKE-01.png">
            <!--Chequear descripcion
            https://www.nike.com.ar/air-jordan-13-retro-414571-062/p-->
            <p>Zapatillas Nike</p>
            <h4><span class="tachado">$186.999</span></h4>
            <h3>$150.000</h3>
        </div>
        <div class="item">
            <img src="IMG/REMERAS/VOGUE-frente.png">
            <!--Chequear descripcion
            https://shop.vogue.de/products/vogue-t-shirt-schwarz-mit-glitzernder-logo-stickerei-->
            <p>Remera Vogue para mujeres</p>
            <h4><span class="tachado">$35.000</span></h4>
            <h3>$26.000</h3>
        </div>
        <div class="item">
            <img src="IMG/REMERAS/chombaVOGUE-frente.png">
            <!--Chequear descripcion
            https://shop.vogue.de/products/vogue-polo-shirt-ivory-mit-schwarzer-logo-stickerei-->
            <p>Chomba Vogue para mujeres</p>
            <h3>$26.000</h3>
        </div>
    </main>

    <?php require('LAYOUT/footer.php'); ?>
</body>

</html>