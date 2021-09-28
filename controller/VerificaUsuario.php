<?php
    require_once("../config/conexion.php");
    require_once("../model/verificaUsuario.php");

    $userName = $_POST['usuario'];
    $userPass = $_POST['contra'];

    $usuario = new Usuarios();
    $userData = $usuario->VerificaUser($userName, $userPass);

    
    if( empty($userData) )
    {
        echo "<script> alert('Usuario incorrecto'); </script>";
        header("location:../view/login.html");
    }
    else
    {
        if(!isset($_SESSION['userName']))
            session_start();

        $_SESSION['userName'] = ["usuNom" => $userName, "usuId" => $userData['Id']];
        
        header("location:../view/userProductos.php");
    }

?>