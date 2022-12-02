<?php
session_start();
$user = $_POST['usuario'];
$posw = $_POST['password'];

if(isset($_SESSION['usuario'])){
    printf("Remandado Sesion <br>");
    printf("Bienvenido de nuevo" .$_SESSION['usuario']);

}else{
    $_SESSION['usuario'] = $user;
    printf("Nueva sesion <br>");
    printf("Bienvenido %s",$user);
}

