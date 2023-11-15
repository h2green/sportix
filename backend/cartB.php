<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/dbconn.inc.php';

    $user = $_SESSION['username'];
    $query = "SELECT * from carrito inner join users on carrito.usuario = users.id inner join productos on productos.id = carrito.producto where users.username = '$user';";
    $prod_call = $mysqli->query($query);
    $rowCount = mysqli_num_rows($prod_call);
    
    if($rowCount == 0)
    {
        echo "<p id='nothing'>Tu carrito está vacio.</p>";
    }
    else
    {
        while($col = $prod_call->fetch_array())
        {
            $cartId_query = "SELECT carrito.id from carrito inner join users on carrito.usuario = users.id inner join productos on productos.id = carrito.producto where users.username = '$user' and productos.id = ".$col['id'].";";
            $cartId_connection = $mysqli->query($cartId_query);
            $cartId = $cartId_connection->fetch_array();

            echo "<div class='prod'>
                <img src='../IMG/".$col['tipo']."/".$col['imgFront']."' alt=''>
                <h1 class='name'>".$col['nombre']."</h1>
                <div class='prod_data'>        
                    <p class='price'>$".$col['precio']."</p>
                    <p class='waist'>Talle:".$col['talle']."</p>
                    <p class='color'>Color:".$col['color']."</p>
                    <p class='stock'>Stock: ".$col['stock']."</p>
                    <p class='desc'>".$col['descripcion']."</p>
                </div>
                <form method='post'>
                <button type='submit' class='delete' name='delete'><a href='cart.php?deleteid=".$cartId['id']."'>Eliminar</button></a>
                </form>
                </div>";
        }
    }

?>