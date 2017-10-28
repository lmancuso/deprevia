<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>DePrevia - Mi Perfil</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <?php require('templates/headerLogin.php') ?>
  </head>
  <body>

<?php
require_once("soporte.php");

$title = 'Mi Perfil';

  if (!$auth->estaLogueado()) {
    header("Location:register.php");exit;
  }

  $usuario = $auth->obtenerUsuarioLogueado($db);
    $data = $usuario->getUsername();

 ?>

<div class="row" style="text-align: center">

  <h5>Bienvenido <?=$data?></h5>
  <p><img src='images/<?=$data?>.png' style="width: 50%"></p>
</div>


<?php require("templates/footer.php") ?>
  </body>
</html>
