<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportix</title>
    <link rel="shortcut icon" href="IMG/Logo-Sportix.png" type="image/x-icon">
    <link rel="stylesheet" href="STYLE/crud.css">
</head>

<body>

    <form method="post" autocomplete="off">

        <img src="IMG/Logo-Sportix.png">

        <div class="input-container">
            <input type="text" name="name" placeholder="Producto">
        </div>

        <div class="input-container">
            <input type="text" name="price" placeholder="Precio">
        </div>

        <div class="input-container">
            <input list="colors" name="color" placeholder="Color">
            <datalist id="colors">
                <option value="Negro">
                <option value="Blanco">
                <option value="Azul">
                <option value="Rojo">
                <option value="Rosa">
                <option value="Marron">
                <option value="Verde">
            </datalist>
        </div>

        <div class="input-container">
            <input list="size" name="size" placeholder="Talla">
            <datalist id="size">
                <option value="XS">
                <option value="S">
                <option value="M">
                <option value="L">
                <option value="XL">
            </datalist>
        </div>

        <div class="input-container">
            <input type="text" name="description" placeholder="Descripcion">
        </div>

        <div class="input-container">
            <input type="image" src="" alt="">
        </div>

        <input name="send" type="submit" class="btn" value="Enviar">

    </form>
</body>

</html>