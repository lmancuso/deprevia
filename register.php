<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>DePrevia - Registro</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


  </head>
  <body>

<?php
require_once("soporte.php");

$meses = [
    1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio",
    7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
];

$nombre = $_POST['first_name'] ?? null;
$apellido = $_POST['last_name'] ?? null;
$usuario = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;
$passwordConfirm = $_POST['passwordConfirm'] ?? null;
$email = $_POST['email'] ?? null;
$genero = $_POST["genero"] ?? null;
$emailConfirm = $_POST['emailConfirm'] ?? null;
$edad = $_POST['edad'] ?? null;


if($_POST){

    $arrayDeErrores = $validator->validarInformacion($db);

    if(count($arrayDeErrores) == 0) {

      $usuario =new Usuario($_POST['first_name'],$_POST['last_name'],$_POST['username'], $_POST['password'],$_POST['email'], $_POST["genero"],$_POST["edad"]);
      $db->guardarUsuario($usuario);


      $archivo = $_FILES["avatar"]["tmp_name"];
      $nombreDelArchivo = $_FILES["avatar"]["name"];
      $extension = pathinfo($nombreDelArchivo,PATHINFO_EXTENSION);

      $nombre = dirname(__FILE__) . "/images/" . $_POST["username"] . ".$extension";

      move_uploaded_file($archivo, $nombre);

      header("Location:login.php");exit;
    }
}

 ?>
<?php require('templates/header.php'); ?>
 <div class="row">
     <?php if(count($arrayDeErrores) != 0 ) : ?>
         <ul class="errores">
             <?php foreach($arrayDeErrores as $error) : ?>
                 <li>
                     <?=$error?>
                 </li>
             <?php endforeach;?>
         </ul>
     <?php endif; ?>

<div class="container">
  <div class="section"></div>
  <main class="center-align">

      <div class="section"></div>

      <h5 class="indigo-text">Registro</h5>
      <div class="section"></div>

<div class="container">
<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

      <form class="col s12" role="form" action="register.php" method="post" enctype="multipart/form-data" >
        <div class="row">
          <div class="input-field col s6">
            <label for="first_name">Nombre</label>
            <input id="first_name" type="text" class="validate" name="first_name" value="<?php echo $nombre; ?>">
          </div>
          <div class="input-field col s6">
            <label for="last_name">Apellido</label>
            <input id="last_name" type="text" class="validate" name="last_name" value="<?php echo $apellido; ?>">
          </div>
        <div class="input-field col s12">
          <label for="username">Nombre de usuario</label>
          <input id="username" type="text" class="validate" name="username" value="<?php echo $usuario; ?>">
        </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <label for="password">Contraseña</label>
            <input id="password" type="password" class="validate" name="password">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <label for="password">Confirmar Contraseña</label>
            <input id="passwordConfirm" type="password" class="validate" name="passwordConfirm">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <label for="email">Email</label>
            <input id="email" type="email" class="validate" name="email" value="<?php echo $email; ?>">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <label for="email">Confirmar Email</label>
            <input id="emailConfirm" type="email" class="validate" name="emailConfirm" value="<?php echo $email; ?>">
          </div>
           <div class="input-field col s12">
             <label for="edad">Cual es tu edad?</label>
             <input id="edad" type="text" class="validate" name="edad" value="<?php echo $edad; ?>">
           </div>
        <div class="file-field input-field col s12">
          <div class="btn-large waves-effect indigo">
            <span>IMG</span>
            <input type="file" name="avatar" class="" >
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <p  class="col s12" style="color: #9e9e9e"> Cual es tu sexo? </p>
        <div class="row">
                  <div action="col s12">

                  <input name="genero" type="radio" id="genero_masculino" value="0" class="with-gap">
                  <label for="genero_masculino">Hombre</label>


                  <input name="genero" type="radio" id="genero_femenino" value="1" class="with-gap">
                  <label for="genero_femenino">Mujer</label>


                  <input name="genero" type="radio" id="genero_otros" value="2" class="with-gap">
                  <label for="genero_otros">Otro</label>

              </div>

        </div>

        <div class="row col s12">
          <input type="checkbox" id="chk-terminos" name="terminos" class="with-gap">
          <label for="chk-terminos">Acepto los términos y condiciones</label>
          <input type="submit" name="btn_submit" class="col s12 btn btn-large waves-effect indigo" value="Registrarme">
        </div>
        <div class="row col s12">
          <a href="index.php" id="download-button" class="col s12 btn btn-large waves-effect indigo">Volver</a>
        </div>
      </form>

  </div>
</div>

    <div class="section"></div>
    <div class="section"></div>
  </main>
</div>

<?php require('templates/footer.php'); ?>

<script type="text/javascript">
$(document).ready(function() {
  $('select').material_select();
});
</script>

  </body>
</html>
