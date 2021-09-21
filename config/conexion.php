<?php
    class Conectar{

        protected $dbCon;

        protected function Conexion()
        {
            try
            {
                $conectar = $this->dbh = new PDO("mysql:local=localhost;port=3308;dbname=proyectofinal","root","");

                return $conectar;
            }
            catch(Exception $e)
            {
                print "Error en la conexion a la BD: " . $e->getMessage();
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    
    }


?>