<?php
//  require_once("autoload.php");

include("../conexion/conexion.php");

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

    public function insertUs(string $users, string $subname, string $profNam, string $correo, int $tel){
        
        try {
            if ($this->) {
                # code...
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        // $sql="INSERT INTO `users`( `nombre`, `apellido`, `NombreUs`, `email`, `NumTel` VALUES (?,?,?,?,?)";

        // $insert = $this->conBD->prepare($sql);

        // $arrData=array($this->Nombre,$this->Apellido,$this->Nom_Us,$this->Email,$this->Num_tel);

        // $reInsert=$insert->execute($arrData);
        // $idinsert=$this->conBD->lastInsertId();
        // return $idinsert;

    }
 }



?>