<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<?php require('templates/header.php'); ?>

  <div class="container">
    <div class="section">

      <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita mollitia facilis deserunt placeat nesciunt itaque velit, consequatur consectetur, dolorem aliquid voluptas! Quia excepturi odio pariatur ipsam sapiente ea. Excepturi, deleniti!</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita mollitia facilis deserunt placeat nesciunt itaque velit, consequatur consectetur, dolorem aliquid voluptas! Quia excepturi odio pariatur ipsam sapiente ea. Excepturi, deleniti!</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita mollitia facilis deserunt placeat nesciunt itaque velit, consequatur consectetur, dolorem aliquid voluptas! Quia excepturi odio pariatur ipsam sapiente ea. Excepturi, deleniti!</span></div>
    </li>
  </ul>

    </div>
    <br><br>
  </div>

<?php require('templates/footer.php'); ?>

  </body>
</html>