<?php
include "connection.php";

if(isset($_POST["form"]))
{
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $color = $_POST['color'];

    $sql = "INSERT INTO 'clothes' ('name', 'desc', 'size', 'price', 'color') VALUES ('$name', '$desc', '$size', '$price', '$color')";

    $CreateQuery = $conn->query($sql);

    if ($CreateQuery == TRUE) {
        echo "Item agregado correctamente!";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>