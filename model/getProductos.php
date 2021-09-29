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
                             ON ubicaciones.IdUsu = comprod.IdUsu
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

        public function getProductosUsuario($user)
        {
            $conecta = parent::Conexion();
            parent::set_names();

            $query = "SELECT productos.CodArt, productos.Nombre, productos.Precio, productos.Disponible, 
                             productos.Descripcion,ubicaciones.Ciudad, ubicaciones.calle, 
                             productos.ImgProducto FROM ubicaciones
                             INNER JOIN comprod 
                             ON ubicaciones.IdUsu = comprod.IdUsu
                             INNER JOIN productos
                             ON comprod.CodArt = productos.CodArt
                             INNER JOIN usuarios
                             ON comprod.IdUsu = usuarios.Id
                             WHERE usuarios.NombreU = '$user'";

            $sentencia=$conecta->prepare($query);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            $conecta = null;

            return $resultado;
        }

        public function delProducto($idProd, $idUser)
        {
            $resultado = true;

            try {
                $conecta = parent::Conexion();
                parent::set_names();

                $query = "DELETE FROM comprod WHERE IdUsu=$idUser AND CodArt='$idProd'";

                $sentencia=$conecta->prepare($query);
                $sentencia->execute();

                $sentencia->closeCursor();

                $this->borraImagen($idProd);

                $query = "DELETE FROM productos WHERE CodArt='$idProd'";

                $sentencia=$conecta->prepare($query);
                $sentencia->execute();

                $sentencia->closeCursor();

                $conecta = null;
            } 
            catch (Exception $e) {
                $resultado = false;
            }

            return $resultado;
        }

        private function borraImagen($idProd)
        {
            $conecta = parent::Conexion();
            parent::set_names();

            $query = "SELECT ImgProducto FROM productos WHERE CodArt='$idProd'";

            $sentencia=$conecta->prepare($query);
            $sentencia->execute(array());
            $resultado=$sentencia->fetch(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            $conecta = null;

            $direccion = dirname(__DIR__) . "\img\products\\". $resultado['ImgProducto'];

            unlink($direccion);
        }

        public function updateProducto($idUsu,$idProd,$nom,$pre,$dis,$des,$ciu,$cal)
        {
            $conecta = parent::Conexion();
            parent::set_names();

            $query = "UPDATE productos SET 
                        Nombre='$nom',
                        Precio=$pre,
                        Disponible='$dis',
                        Descripcion='$des'
                      WHERE CodArt='$idProd'";

            $sentencia=$conecta->prepare($query);
            $sentencia->execute();

            $sentencia->closeCursor();

            $this->updateUbicacion($idUsu,$ciu,$cal);

            $conecta = null;
        }

        private function updateUbicacion($idUsu, $ciu, $cal)
        {
            $conecta = parent::Conexion();
            parent::set_names();

            $query = "UPDATE ubicaciones SET
                        ciudad='$ciu',
                        calle='$cal'
                      WHERE IdUsu='$idUsu'";
            
            $sentencia=$conecta->prepare($query);
            $sentencia->execute();

            $sentencia->closeCursor();

            $conecta = null;
        }

        public function updateImagen($idProd, $imgName)
        {
            $this->borraImagen($idProd);

            $conecta = parent::Conexion();
            parent::set_names();

            $query = "UPDATE productos SET ImgProducto='$imgName'
                      WHERE CodArt='$idProd'";

            $sentencia=$conecta->prepare($query);
            $sentencia->execute();

            $sentencia->closeCursor();

            $conecta = null;
        }
    }


    

?>