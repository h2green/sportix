<!-- <?php //include 'backend/connection.php'; if(!isset($_SESSION['token'])){header('Location: login.php');}
        ?> -->

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
    <link href="https://fonts.googleapis.com/css2?family=Croissant+One&family=Playfair+Display:wght@500&family=Poppins:wght@300&family=Roboto&family=Roboto+Condensed&display=swap" rel="stylesheet">
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
    <?php require('LAYOUT/article.php'); ?>
    <?php require('LAYOUT/footer.php'); ?>

</body>

</html>