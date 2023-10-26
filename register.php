<?php
require_once 'backend/includes/config_session.inc.php';
require_once 'backend/register_view.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="IMG/Logo-Sportix.png" type="image/x-icon">
  <title>Sportix</title>

  <link rel="stylesheet" href="STYLE/register.css">
</head>

<body>
  <form action="backend/register.php" method="post" autocomplete="off">
    <img src="IMG/Logo-Sportix.png">
    <h2>Registro</h2>
    <?php
    register_inputs();
    ?>
    <div class="content">
      <label class="checkBox">
        <input type="checkbox" id="ch1">
        <div class="transition"></div>
      </label>
    </div>
    <h3>Terminos y condiciones</h3>
    <input name="send" type="submit" class="btn" value="Enviar">
  </form>

  <?php
  check_register_errors();
  ?>
</body>

</html>