<?php
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['password'];

if (($usuario == 'cristina') && ($password == '123456')) {
    //Contraseña correcta
    //Volvemos a la página principal
    $_SESSION['usuario'] = $usuario;
    header("Location: index.php");
} else{
    //contraseña incorrecta
    //Volvemos al formulario de login
    $_SESSION['error'] = "Usuario o contraseña incorrecto.
    Vuelva a intentarlo";
    header("Location: login-form.php");

}