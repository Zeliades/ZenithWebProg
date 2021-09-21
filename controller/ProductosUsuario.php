<?php
    require_once("../config/conexion.php");
    require_once("../model/getProductos.php");

    $nombreUsuario = $_GET['user'];

    $person = new Productos();

    $products = $person->getProductosUsuario($nombreUsuario);

    if(!isset($_SESSION['personalProducts']))
        session_start();

    $_SESSION['personalProducts'] = $products;

    header('location:../view/userProductos.php');

?>