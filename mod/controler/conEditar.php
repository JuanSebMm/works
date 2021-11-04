<?php

include("../conexion/conexion.php");

if(isset($_POST['enviar'])){
    $id=$_POST['id'];
    $Nm_neg=$_POST['Nm_Ng'];
    $Des_neg=$_POST['Des_ng'];
    $Direccion=$_POST['Direc'];
    $Municipio=$_POST['Muni'];
    $Telefono=$_POST['Tel'];
    $Red=$_POST['Red'];

    $sql="UPDATE `negocios` SET `Nm_Ng`=$Nm_neg,`Des_neg`=$Des_neg,`Direccion`=$Direccion,`Municipio`=$Municipio,`Telefono`=$Telefono,`Social`=$Red where id='".$id."'";

    $resultado=mysqli_query($conex,$sql);

    if($resultado){
        echo "<script language='JavaScript'>
        alert('Los datos fueron actualizados correctamente');
        location.assign('indexCrud.php');
        </script>";


    }else{
        echo "<script language='JavaScript'>
        alert('ERROR: Los datos NO fueron actualizados correctamente');
        location.assign('indexCrud.php');
        </script>";

    }
    mysqli_close($conex);


}else{
    $id=$_GET['id']; 
    $sql="select * from negocios where id='".$id."'";
    $resultado=mysqli_query($conex,$sql);

    $fila=mysqli_fetch_assoc($resultado);
    $id=$fila['id'];
    $Nm_neg=$fila['Nm_Ng'];
    $Des_neg=$fila['Des_neg'];
    $Direccion=$fila['Direccion'];
    $Municipio=$fila['Municipio'];
    $Telefono=$fila['Telefono'];
    $Red=$fila['Social'];


    mysqli_close($conex);

}
?>