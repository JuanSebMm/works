<?php 

    class conexion{
        private $host="localhost";
        private $user="root";
        private $password="";
        private $BD="comerciomas";
        private $conect;

        public function __construct(){
            $connectionString="mysql:hos=".$this->host.";dbname".$this->BD.";charset=utf8";

            try {
                $this->conect = new PDO($connectionString,$this->user,$this->password);
                $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo"Conexion exitosa";

            } catch (Exception $e) {
                $this->conect='Error de conexion';
                echo "ERROR". $e->getMessage();
            }
        }

        public function connect(){
            return $this->conect;
        }

    }




?>