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
            <div class="section"></div>
  <main class="center-align">
    
      <img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />
      <div class="section"></div>

      <h5 class="indigo-text">Inicia sesión con tu cuenta</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Ingresa tu Email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Ingresa tu Password</label>
              </div>
              
              <div class="row">
              <label style='float: center;'>
                Recordar
              </label>
              <!-- Switch -->
                <div class="switch">
                  <label>
                    Off
                    <input type="checkbox">
                    <span class="lever"></span>
                    On
                  </label>
                </div>
                <label style='float: center;'>
                <br>
                <a class='pink-text' href='#!'><b>Perdí mi clave</b></a>
                </label>
              </div>

            </div>

            
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            
          </form>
        </div>
      </div>
      <a href="register.php">Crear cuenta</a>

    <div class="section"></div>
    <div class="section"></div>
  </main>
</div>
<?php require('templates/footer.php'); ?>
</body>
</html>