<?php
    require_once("../config/conexion.php");
    require_once("../model/verificaUsuario.php");

    $userName = $_POST['usuario'];
    $userPass = $_POST['contra'];

    $usuario = new Usuarios();
    
    if( empty($usuario->VerificaUser($userName, $userPass)) )
    {
        echo "<script> alert('Usuario incorrecto'); </script>";
        header("location:../view/login.html");
    }
    else
    {
        if(!isset($_SESSION['userName']))
            session_start();

        $_SESSION['userName'] = $userName;
        
        header("location:../view/userProductos.php");
    }

?>