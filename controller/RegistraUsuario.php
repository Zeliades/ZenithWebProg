<?php
    require_once("../config/conexion.php");
    require_once("../model/verificaUsuario.php");

    $usuario = new Usuarios();

    $userName = $_POST['usuario'];
    $userPass = $_POST['contra'];
    $userMail = $_POST['correo'];

    if($usuario->RegistraUser($userName,$userPass,$userName))
    {
        echo "<script>alert('Usuario creado correctamente');</script>";
        header("location:../index.html");
    }
    else
    {
        echo "<script>alert('Nombre de usuario ya existente, intente otro');</script>";
        header("location:../view/creaCuenta.html");
    }

?>