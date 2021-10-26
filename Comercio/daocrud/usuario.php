<?php
 require_once("autoload.php");

 class usuario extends conexion{
    private $Nombre;
    private $Apellido;
    private $Nom_Us;
    private $Email;
    private $Num_tel;
    private $conBD;

    public function __construct(){
        $this->conBD =new conexion();
        $this->conBD =$this->conBD->connect();
    }

    public function insertUs(string $usuario, string $subname, string $profNam, string $correo, int $tel){
        
        $this->Nombre=$usuario;
        $this->Apellido=$subname;
        $this->Nom_Us=$profNam;
        $this->Email=$correo;
        $this->Num_tel=$tel;

        $sql="INSERT INTO `users`( `nombre`, `apellido`, `nombre_us`, `email`, `num_tel`) VALUES (?,?,?,?,?)";

        $insert = $this->conBD->prepare($sql);

        $arrData=array($this->Nombre,$this->Apellido,$this->Nom_Us,$this->Email,$this->Num_tel);

        $reInsert=$insert->execute($arrData);
        $idinsert=$this->conBD->lastInsertId();
        return $idinsert;

    }
 }



?>