<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>REGISTRO DE USUARIO</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  </head>
  <body>

    <?php require('templates/header.php'); ?>

<div class="main-form">
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Nombre</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Apellido</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="password" type="password" class="validate">
            <label for="password">Contraseña</label>
          </div>
          <div class="input-field col s6">
            <input id="password" type="password" class="validate">
            <label for="password">Confirmar Contraseña</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Confirmar Email</label>
          </div>
        </div>

        <div class="row">
              <p style="color: #a7a7a7"> Cual es tu sexo? </p>
              <form action="col s12">
                <p>
                  <input name="group1" type="radio" id="genero_masculino" value="0" class="with-gap">
                  <label for="genero_masculino">Hombre</label>
                </p>
                <p>
                  <input name="group1" type="radio" id="genero_femenino" value="1" class="with-gap">
                  <label for="genero_femenino">Mujer</label>
                </p>
                <p>
                  <input name="group1" type="radio" id="genero_otros" value="2" class="with-gap">
                  <label for="genero_otros">Otro</label>
                </p>
              </form>
        </div>

        <div id="button-confirm" class="row right">
          <a href="index.php" id="download-button" class="col s12 btn btn-large waves-effect indigo">Confirmar</a>
        </div>
        <div class="row right">
          <a href="index.php" id="download-button" class="col s12 btn btn-large waves-effect indigo">Volver</a>
        </div>
      </form>
    </div>
</div>

<?php require('templates/footer.php'); ?>


  </body>
</html>
