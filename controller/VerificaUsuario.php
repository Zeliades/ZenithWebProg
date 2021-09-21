<?php
    require_once("../config/conexion.php");
    require_once("../model/verificaUsuario.php");

    $userName = $_POST['usuario'];
    $userPass = $_POST['contra'];

    $usuario = new Usuarios();
    
    if( empty($usuario->VerificaUser($userName, $userPass)) )
    {
        header("location:../index.html");
    }
    else
    {
        header("location:../view/inicio.php");
    }

?>