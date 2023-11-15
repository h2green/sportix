<?php
require_once 'backend/includes/config_session.inc.php';
require_once 'backend/login_view.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="IMG/Logo-Sportix.png" type="image/x-icon">
  <title>Sportix</title>

  <link rel="stylesheet" href="STYLE/login.css">
</head>

<body>
  <form action="backend/login.php" method="post" autocomplete="off">
    <div class="container-img">
      <a href="index">
        <img src="IMG/Logo-Sportix.png">
      </a>
    </div>

    <h2>Inicia Sesión</h2>

    <?php
    check_login_errors();
    ?>

    <div class="input-container">
      <input type="text" name="username" placeholder="Nombre">
    </div>
    <div class="input-container">
      <input type="password" name="password" placeholder="Contraseña">
    </div>
    <div class="container-submit">
      <input name="send" type="submit" class="btn" value="Enviar">
    </div>
    <h4>No tenes una cuenta? <a href="register">Registrate ahora!!</a></h4>
  </form>
</body>

</html>