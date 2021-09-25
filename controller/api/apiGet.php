<?php
    require_once("../../config/conexion.php");
    require_once("../../model/getProductos.php");

    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        $nombreUsuario = $_GET['usu'];
        
        $person = new Productos();

        $products = $person->getProductosUsuario($nombreUsuario);
        $products[] = $nombreUsuario;

        echo json_encode($products);
    }
        
    


?>