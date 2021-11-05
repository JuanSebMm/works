<?php
require '../../conexion/conexion.php';
session_start();

$usuario=$_POST['user'];
$telefono=$_POST['tel'];


$q="SELECT COUNT(*) as contar from negocios where Nm_ng='$usuario' and Telefono='$telefono'";
$consult=mysqli_query($conex,$q);
$array = mysqli_fetch_array($consult);


if ($array['contar']>0) {
    $_SESSION['username']=$usuario;
    header("location: ../../modelos/indexCrud.php");
} else {
    echo"Datos incorrectos";
}



?>