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

    <link rel="stylesheet" href="STYLE/prod.css">
</head>

<body>
    <?php require('LAYOUT/header.php'); ?>

    <main>
        <div class="container-img">
            <img src="IMG/CAMPERAS/camperaGAP-00.png" id="articulo-0">
            <img src="IMG/CAMPERAS/camperaGAP-espalda-00.png" id="articulo-1">
            <img src="IMG/CAMPERAS/camperaGAP-modelo-00.png" id="articulo-2">
        </div>

        <div class="container-descripcion">
            <h2>Campera GAP</h2>
            <p>Buzo Gap color rojo talle M unisex</p>
            <button class="cta">
                <span class="hover-underline-animation">Añadir carrito</span>
                <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                    <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                        data-name="Path 10" id="Path_10"></path>
                </svg>
            </button>
        </div>
    </main>

    <?php require('LAYOUT/footer.php'); ?>
    <script src="JS/"></script>
</body>

</html>