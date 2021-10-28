<?php 

    class conexion{
        private $dsn="mysql:host=localhost;dbname=comerciomas";
        private $user="root";
        private $password="";
        private $conect;

        public function __construct(){
            // $this->conect="mysql:hos=".$this->host.";dbname".$this->BD.";charset=utf8";

            try {
                $this->conect = new PDO($this->dsn,$this->user,$this->password);
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