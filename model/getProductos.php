<?php

    class Productos extends Conectar 
    {
        public function getProducto($IdProd)
        {
            $conecta = parent::Conexion();
            parent::set_names();

            $query = "SELECT productos.Nombre, productos.Precio, productos.Disponible, productos.Descripcion, 
                      ubicaciones.Ciudad, ubicaciones.calle, productos.ImgProducto FROM ubicaciones
                      INNER JOIN comprod 
                      ON ubicaciones.IdCom = comprod.IdCom
                      INNER JOIN productos
                      ON comprod.CodArt = productos.CodArt
                      WHERE productos.Categoria='$IdProd'";

            $sentencia=$conecta->prepare($query);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            $conecta = null;

            return $resultado;
        }
    }


    //Consulta para productos segun usuario
    /*
    Intercambiar index de actual (login) a inicio.php

    Al ingresar a login, verificar nombre de usuario y pass, enviar datos a
    pagina personal para mostrar productos personales y editarlos


    SELECT productos.Nombre, productos.Precio, productos.Disponible, productos.Descripcion, 
                      ubicaciones.Ciudad, ubicaciones.calle, productos.ImgProducto FROM ubicaciones
                      INNER JOIN comprod 
                      ON ubicaciones.IdCom = comprod.IdCom
                      INNER JOIN productos
                      ON comprod.CodArt = productos.CodArt
                      INNER JOIN comerciantes
                      ON comprod.IdCom = comerciantes.IdCom
                      INNER JOIN usuarios
                      ON comerciantes.Usuario = usuarios.Id
                      WHERE usuarios.NombreU = 'Maria';

    */

?>