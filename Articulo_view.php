<?php
require_once 'backend/includes/config_session.inc.php';
require_once 'backend/includes/dbconn.inc.php';
require_once 'backend/index_view.php';
require_once 'backend/Articulo_controller.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $article = getArticle($mysqli, $id);
} else {
    header('Location: ../index');
    exit;
}

if(isset($_POST['submit']))
{
    $prod = $article['id'];
    $user = $_SESSION['user_id'];
    
    $query = "INSERT into carrito(producto, usuario) values ('$prod', '$user');";
    
    $result = mysqli_query($mysqli, $query);
}
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

    <link rel="stylesheet" href="STYLE/prod.css">
</head>

<body>
    <?php require('LAYOUT/header.php'); ?>

    <main>
        <div class="container-producto">
            <div class="container-img">
                <img src='IMG/<?= $article["tipo"] ?>/<?= $article['imgFront'] ?>' id='articulo-0' alt=''>
                <img src='IMG/<?= $article["tipo"] ?>/<?= $article['imgBack'] ?>' id='articulo-1' alt=''>
                <img src='IMG/<?= $article["tipo"] ?>/<?= $article['imgModelo'] ?>' id='articulo-2' alt=''>
                <section></section>
            </div>

            <div class="container-descripcion">
                <h2><?= $article['nombre'] ?></h2>
                <p>Color: <?= $article['color'] ?></p>
                <p>Talle: <?= $article['talle'] ?></p>
                <form method="post">
                    <div class="container-boton">
                        <button type="submit" name="submit">
                            Añadir carrito
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php require('LAYOUT/footer.php'); ?>
</body>

</html>