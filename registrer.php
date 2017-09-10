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
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <input id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
          <div class="input-field col s6">
            <input id="password" type="password" class="validate">
            <label for="password">Confirm your Password</label>
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
            <label for="email">Confirm your Email</label>
          </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
              <label> What is your gender? </label><br>
              <form action="#">
                <p>
                  <input name="group1" type="radio" id="genero_masculino" value="0" class="with-gap">
                  <label for="genero_masculino">Male</label>
                </p>
                <p>
                  <input name="group1" type="radio" id="genero_femenino" value="1" class="with-gap">
                  <label for="genero_femenino">Female</label>
                </p>
                <p>
                  <input name="group1" type="radio" id="genero_otros" value="2" class="with-gap">
                  <label for="genero_otros">Other</label>
                </p>
              </form>
            </div>
        </div>

        <div id="button-confirm" class="row right">
          <a href="index.php" id="download-button" class="btn-large waves-effect waves-light orange">Confirm</a>
        </div>
        <div class="row right">
          <a href="index.php" id="download-button" class="btn-large waves-effect waves-light orange">Back</a>
        </div>
      </form>
    </div>
</div>

<?php require('templates/footer.php'); ?>


  </body>
</html>
