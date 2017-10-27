<?php

require_once("DB.php");

class Validator {
    public function validarLogin(DB $db){
        $arrayDeErrores = [];

        if($_POST['email'] == ""){
            $arrayDeErrores = 'El email es incorrecto';
        }
        elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
            $arrayDeErrores = 'El formato del email esta mal';
        }
        elseif ($db->traerPorEmail($_POST['email']) == null) {
            $arrayDeErrores['email'] = 'El mail con el que quiere ingresar no esta registrado';
        }
        else {
            if(strlen($_POST['password']) < 8){
                $arrayDeErrores['password'] = 'La contraseña debe tener al menos 8 caracteres';
            }
            else {
                //El mail existe!!
                $usuario = $db->traerPorEmail($_POST["email"]);

                if (password_verify($_POST["password"], $usuario->getPassword()) == false) {
                    $arrayDeErrores["password"] = "La contraseña no verifica";
                }
            }
        }
        return $arrayDeErrores;
    }

    public function validarInformacion(DB $db){
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
        else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
            $arrayDeErrores["email"] = 'El formato del mail esta mal';
        }
        else if ($db->traerPorEmail($_POST["email"]) != NULL) {
            $arrayDeErrores["email"] = "El mail ya existe";
        }
        else if ($_POST['email'] != $_POST['emailConfirm']) {
            $arrayDeErrores["email"] = "Los correos no coinciden";
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
}

?>
