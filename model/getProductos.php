<?php

    class Productos extends Conectar 
    {
        public function getProducto($IdProd)
        {
            $conecta = parent::Conexion();
            parent::set_names();

            $query = "SELECT productos.Nombre, productos.Precio, productos.Disponible, productos.Descripcion, 
                             productos.Ciudad, productos.calle, productos.ImgProducto FROM productos
                             INNER JOIN comprod 
                             ON productos.CodArt = comprod.CodArt
                             INNER JOIN usuarios
                             ON comprod.IdUsu = usuarios.Id
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

            $query = "SELECT productos.CodArt, productos.Nombre, productos.Precio, productos.Disponible, productos.Descripcion, 
                             productos.Ciudad, productos.calle, productos.ImgProducto FROM productos
                             INNER JOIN comprod 
                             ON productos.CodArt = comprod.CodArt
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
                        Descripcion='$des',
                        Ciudad='$ciu',
                        calle='$cal'
                      WHERE CodArt='$idProd'";

            $sentencia=$conecta->prepare($query);
            $sentencia->execute();

            $sentencia->closeCursor();

            $conecta = null;
        }

        public function updateImagen($idProd, $imgName, $borra=true)
        {
            if($borra)
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

        public function insertProducto($idUsu,$prodNom,$prodDesc,$prodPrec,$prodCat,$prodCiud,$prodCall)
        {
            //INSERTAR PRODUCTO NUEVO

            //Generar valor string para el producto
            $prodStr = substr($prodCat,0,1).strtoupper(substr($prodNom,0,2));
            $prodKey = $prodStr.$this->generateProdID();

            //Insertar datos en los productos
            $conecta = parent::Conexion();
            parent::set_names();

            $query = "INSERT INTO productos (CodArt,Categoria,Nombre,Precio,Disponible,Descripcion,Ciudad,calle)
                      VALUES ('$prodKey','$prodCat','$prodNom',$prodPrec,'si','$prodDesc','$prodCiud','$prodCall')";

            $sentencia=$conecta->prepare($query);
            $sentencia->execute();

            $sentencia->closeCursor();

            //Vincular producto y usuario
            $query = "INSERT INTO comprod (IdUsu,CodArt) VALUES ($idUsu,'$prodKey')";

            $sentencia=$conecta->prepare($query);
            $sentencia->execute();

            $sentencia->closeCursor();

            $conecta = null;

            //devolver id del producto generado para subir la imagen adecuadamente
            return $prodKey;
        }

        private function generateProdID()
        {
            //Obtener ID de productos existentes
            $conecta = parent::Conexion();
            parent::set_names();

            $query = "SELECT CodArt FROM comprod";
            
            $sentencia=$conecta->prepare($query);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            $conecta = null;

            //Generar valor numerico para el producto
            $num = 0;
            $counter = 0;

            do{
                $val = $resultado[$counter]['CodArt'];
                $num = rand(1000,9999);
                $counter++;
            }while($num == substr($val,2));

            //Devolver id numerico generado
            return $num;
            
        }

        
        
    }


    

?>