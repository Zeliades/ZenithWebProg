<?php
    class Usuarios extends Conectar
    {
        public function VerificaUser($name, $pass)
        {
            $conecta = parent::conexion();
            parent::set_names();

            $query = "SELECT NombreU, Pass FROM usuarios WHERE NombreU = '$name' AND Pass = '$pass'";

            $sentencia=$conecta->prepare($query);
            $sentencia->execute(array());
            $resultado=$sentencia->fetch(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            $conecta = null;

            return $resultado;
        }

        public function RegistraUser($name, $pass, $mail)
        {
            //Conexion BD
            $conecta = parent::conexion();
            parent::set_names();

            //Consulta a BD
            $query = "SELECT Id,NombreU FROM usuarios";

            //Ejecucion de consulta y guardado de resultados
            $sentencia=$conecta->prepare($query);
            $sentencia->execute(array());
            $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
            $sentencia->closeCursor();

            //Verificar usuario unico
            $uniqueUser = true;
            $newId;

            foreach($resultado as $usuario)
            {
                $newID = $usuario['Id'];
                if($usuario['NombreU'] == $name)
                    $uniqueUser = false;
            }


            //Subir usuario unico
            if($uniqueUser)
            {
                $newID++;
                $query = "INSERT INTO usuarios VALUES($newID, '$name', '$pass', '$mail')";

                $sentencia=$conecta->prepare($query);
                $sentencia->execute();
                $sentencia->closeCursor();
            }
            

            $conecta = null;

            return $uniqueUser;
            
        }
    }
?>