<?php

session_start();
if(!estaLogueado() && isset($_COOKIE['usuarioLogueado'])){
  loguear($_COOKIE['usuarioLogueado']);
}

function validarLogin(){
  $arrayDeErrores = [];

  if($_POST['email'] == ""){
    $arrayDeErrores = 'El email es incorrecto';
  }
  elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
    $arrayDeErrores = 'El formato del email esta mal';
  }
  elseif (traerPorEmail($_POST['email']) == null) {
    $arrayDeErrores['email'] = 'El mail con el que quiere ingresar no esta registrado';
  }
  else {
      if(strlen($_POST['password']) < 8){
        $arrayDeErrores['password'] = 'La contraseña debe tener al menos 8 caracteres';
      }
      else{
        $usuario = traerPorEmail($_POST['email']);

          if(password_verify($_POST['password'],$usuario['password']) == false){
            $arrayDeErrores[] = 'Las contraseñas no coinciden';
            }
          }
  }
  return $arrayDeErrores;
}




function validarInformacion(){
  $arrayDeErrores = [];

    $nombreDelArchivo = $_FILES['avatar']['name'];
    $extension = pathinfo($nombreDelArchivo, PATHINFO_EXTENSION);

    if($_FILES['avatar']['error'] != UPLOAD_ERR_OK){
      $arrayDeErrores = 'Hubo un problema al subir el archivo';
    }
    elseif ($extension != "jpg" && $extension != "jpeg" && $extension != "gif" && $extension !=  "png") {
      $arrayDeErrores["avatar"] = "Necesitamos que el avatar sea una foto";
    }

    if($_POST['first_name'] ==""){
      $arrayDeErrores['first_name'] = 'El campo nombre esta vacio';
    }

    if ($_POST['last_name'] == "") {
      $arrayDeErrores['last_name'] = 'El campo apellido esta vacio';
    }

    if($_POST['email'] == ""){
      $arrayDeErrores['email'] = 'El campo del mail esta vacio';
    }
    elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
      $arrayDeErrores["email"] = 'El formato del mail esta mal';
    }

    if(strlen($_POST['password']) < 8){
      $arrayDeErrores['password'] = 'La contraseña debe tener al menos 8 caracteres';
    }
    elseif (preg_match('/[A-Z]/', $_POST["password"]) == false) {
      $arrayDeErrores["password"] = "La contraseña debe tener al menos una mayuscula";
    }
    elseif ($_POST["password"] != $_POST["passwordConfirm"]){
      $arrayDeErrores["password"] = "Las dos contraseñas no verifican";
    }

  return $arrayDeErrores;
  }

function armarUsuario($datos){
  return [
  "first_name" => $datos["first_name"],
  "last_name" => $datos["last_name"],
  "username" => $datos["username"],
  "password" => $datos["password"],
  "email" => $datos["email"],
  "password" => password_hash($datos["password"], PASSWORD_DEFAULT),
  "genero" => $datos["genero"],
  "f_nac" => $datos["fnac_dia"] . "-" . $datos["fnac_mes"] . "-" . $datos["fnac_anio"],
  ];
}

function guardarUsuario($usuario){
  $json = json_encode($usuario);
  file_put_contents("templates/usuarios.json", $json . PHP_EOL, FILE_APPEND);
}

function traerTodos() {
  $usuarios = [];

  $recurso = fopen("templates/usuarios.json", "r");
  $linea = fgets($recurso);
  while ($linea != false) {
    $usuarios[] = json_decode($linea, true);
    $linea = fgets($recurso);
  }
  fclose($recurso);

  return $usuarios;
}

function traerPorEmail($email) {
  $recurso = fopen("templates/usuarios.json", "r");
  $linea = fgets($recurso);
  while ($linea != false) {
    $usuario = json_decode($linea, true);

    if ($usuario["email"] == $email) {
      return $usuario;
    }

    $linea = fgets($recurso);
  }
  fclose($recurso);

  return null;
}

function loguear($email) {
  $_SESSION["usuarioLogueado"] = $email;
}

function logout() {
  session_destroy();
  setcookie("usuarioLogueado", "", -1);
}

function estaLogueado() {
  if (isset($_SESSION["usuarioLogueado"])) {
    return true;
  }
  else {
    return false;
  }
}

function getUsuarioLogueado() {
  if (estaLogueado()) {
    return traerPorEmail($_SESSION["usuarioLogueado"]);
  }
  else {
    return NULL;
  }
}

function recordar($email) {
  setcookie("usuarioLogueado", $email, time()+3600);
}
 ?>
