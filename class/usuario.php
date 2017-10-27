<?php

class Usuario {

private $nombre;
private $apellido;
private $username;
private $password;
private $email;
private $genero;
private $edad;
private $id;

    public function __construct($nombre, $apellido, $username, $password, $email, $genero, $edad, $id = null) {
        if ($id == null) {
            // Viene por POST
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        } else {
            // Viene de la base
            $this->password = $password;
        }

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->username = $username;
        $this->email = $email;
        $this->genero = $genero;
        $this->edad = $edad;
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }


    public function getedad() {
        return $this->edad;
    }

    public function setedad($edad) {
        $this->edad = $edad;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function toArray() {
        return [
            "id" => $this->id,
            "first_name" => $this->nombre,
            "last_name" => $this->apellido,
            "username" => $this->username,
            "password" => $this->password,
            "email" => $this->email,
            "genero" => $this->genero,
            "edad" => $this->edad,
        ];
    }













}

?>
