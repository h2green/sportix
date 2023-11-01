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
    <div class="container-img">
      <img src="IMG/Logo-Sportix.png">
    </div>
    <h2>Registro</h2>
    <?php
    check_register_errors();
    ?>
    <?php
    register_inputs();
    ?>
    <div class="content">
      <label class="checkBox">
        <input type="checkbox" id="ch1">
        <div class="transition"></div>
      </label>
    </div>
    <h3><a href="https://www.termsandconditionsgenerator.com/live.php?token=pxtrKRxOOnCbz0Q8laV45VzaVQTQ2Mt1">Terminos y
        condiciones</a></h3>
    <div class="container-submit">
      <input name="send" type="submit" class="btn" value="Enviar">
    </div>
  </form>
</body>

</html>