<?php
    require_once("../config/conexion.php");
    require_once("../model/getProductos.php");

    $producto = new Productos();
        
    $idenUsu = $_GET['idUsua'];
    $idenArt = $_GET['idProdu'];

    if($producto->delProducto($idenArt, $idenUsu))
    {
        echo "<script>alert('Producto Borrado exitosamente');</script>";
        header("location:../view/userProductos.php");
    }
    else
    {
        echo "<script>alert('Ha ocurrido un error al borrar el producto');</script>";
        header("location:../view/userProductos.php");
    }

    
    
?>