  
<?php


$Nombre=$_POST['inputs_1'];
$Edad=$_POST['inputs_2'];
$programa=$_POST['inputs_3'];


class constructor{
    private $nombre;
    private $programa;
    private $edad;

    //Constructor de nombre 

    function saludar(){
        echo "Hola, soy $this->nombre un aprendiz muy alegre de la ficha $this->programa y tengo $this->edad años de edad <br>";
    }

    function setNombre($nombre,$programa,$edad){
        $this->nombre=$nombre;
        $this->programa=$programa;
        $this->edad=$edad;
    }

    function getNombre(){
        return $this->nombre;
        return $this->programa;
        return $this->edad;
        
    }



    // constructor de programa
}


$const1=new constructor();
$const1->setNombre($Nombre,$programa,$Edad);
$const1->saludar();

?>