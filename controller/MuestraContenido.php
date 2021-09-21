<?php
    require_once("../config/conexion.php");
    require_once("../model/getProductos.php");

    $producto = new Productos();

    $categoria = $_GET['categoria'];
    $idCat = "";

    switch($categoria)
    {
        case "ves":
            $idCat = "V100";
        break;

        case "tec":
            $idCat = "T200";
        break;

        case "hog":
            $idCat = "H300";
        break;
        
        case "coc":
            $idCat = "C400";
        break;

        case "dep":
            $idCat = "D500";
        break;
    }

    $arrProductos = $producto->getProducto($idCat);

    if(session_status() !== PHP_SESSION_ACTIVE)
        session_start();
    
    
    $_SESSION['productos'] = $arrProductos;

    header('location:../view/productos.php');

?>