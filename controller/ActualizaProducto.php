<?php
    require_once("../config/conexion.php");
    require_once("../model/getProductos.php");
    
    //Instancia de clase con la que se trabajara
    $producto = new Productos();

    //Datos del formulario
    $idProd = $_POST['idProd'];
    $idUsu = $_POST['idUsu'];

    $prodNombre = $_POST['nom'];
    $prodDesc = $_POST['des'];
    $prodPrec = $_POST['pre'];
    $prodCiud = $_POST['ciu'];
    $prodCall = $_POST['cal'];
    $prodDispon = $_POST['dis'];

    //Actualizar datos nuevos
    $producto->updateProducto($idUsu,$idProd,$prodNombre,$prodPrec,$prodDispon,$prodDesc,$prodCiud,$prodCall);

    //Procesar la imagen en caso de recibir una
    if($_FILES['patata']['size']>0){
        $nombreImagen = $_FILES['patata']['name'];

        $producto->updateImagen($idProd, $nombreImagen);

        $rutaDestino = dirname(__DIR__) . "\img\products\\";

        move_uploaded_file($_FILES['patata']['tmp_name'], $rutaDestino.$nombreImagen);
    }

    header("location:../view/userProductos.php");


   

    


?>