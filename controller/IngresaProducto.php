<?php

    require_once("../config/conexion.php");
    require_once("../model/getProductos.php");

    //Instancia de clase con la que se trabajara
    $producto = new Productos();

    //Datos del formulario
    $idUsu = $_GET['idUsu'];

    $prodNombre = $_POST['nom'];
    $prodDesc = $_POST['des'];
    $prodPrec = $_POST['pre'];
    $prodCat = $_POST['cat'];
    $prodCiud = $_POST['ciu'];
    $prodCall = $_POST['cal'];
    
    //Subir Registro nuevo
    $registrado = $producto->insertProducto($idUsu,$prodNombre,$prodDesc,$prodPrec,$prodCat,$prodCiud,$prodCall);

    //Subir imagen nueva
    $nombreImagen = $_FILES['imagen']['name'];

    $producto->updateImagen($registrado, $nombreImagen, false);
    
    $rutaDestino = dirname(__DIR__) . "\img\products\\";
    
    move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino.$nombreImagen);

    header("location:../view/userProductos.php");

?>