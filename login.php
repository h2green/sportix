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
    <img src="IMG/Logo-Sportix.png">

    <h2>Inicia Sesión</h2>

    <div class="input-container">
      <input type="text" name="username" placeholder="Nombre">
    </div>
    <div class="input-container">
      <input type="password" name="password" placeholder="Contraseña">
    </div>

    <input name="send" type="submit" class="btn" value="Enviar">

    <h4>No tenes una cuenta? <a href="register.php">Registrate ahora!!</a></h4>
  </form>

  <?php
  check_login_errors();
  ?>
</body>

</html>