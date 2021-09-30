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
    
    switch($prodCat)
    {
        case "Ves":
            $prodCat = "V100";
        break;
        case "Tec":
            $prodCat = "T200";
        break;
        case "Hog":
            $prodCat = "H300";
        break;
        case "Coc":
            $prodCat = "C400";
        break;
        case "Dep":
            $prodCat = "D500";
        break;
    }


    //Subir Registro nuevo
    $registrado = $producto->insertProducto($idUsu,$prodNombre,$prodDesc,$prodPrec,$prodCat,$prodCiud,$prodCall);

    //Subir imagen nueva
    $nombreImagen = $_FILES['imagen']['name'];

    $producto->updateImagen($registrado, $nombreImagen, false);
    
    $rutaDestino = dirname(__DIR__) . "\img\products\\";
    
    move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino.$nombreImagen);

    header("location:../view/userProductos.php");

?>