<?php
    require_once 'backend/includes/config_session.inc.php';
    require_once 'backend/includes/dbconn.inc.php';
    
    if(isset($_GET['deleteid']))
    {
        $id = $_GET['deleteid'];
        $delete_query = "DELETE from carrito where carrito.id = ".$id.";";
        $cartProd_delete = mysqli_query($mysqli, $delete_query);
    }
?>

<!DOCTYPE html>
<html>

    <?php
        require_once 'backend/includes/config_session.inc.php';
        require_once 'backend/index_view.php';
    ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="IMG/Logo-Sportix.png" type="image/x-icon">
        <link rel="stylesheet" href="STYLE/cart.css">
        <title>Carrito</title>
    </head>

    <body>
        <?php
            require('LAYOUT/header.php');
        ?>
        
        <seccion class="prods_container">
            <?php
            include 'backend/cartB.php';
            ?>
        </seccion>

        <div class="container-submit">
            <button class="btn">
                <a href="#">Volver arriba</a>
            </button>
        </div>
    </body>
</html>