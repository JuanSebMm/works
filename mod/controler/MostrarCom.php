
<?php
include("../conexion/conexion.php")
?>

<?php
       
    $id=$_GET['id']; 
    $sql="select * from negocios where id='".$id."'";
    $resultado=mysqli_query($conex,$sql);

      $fila=mysqli_fetch_assoc($resultado);
      $Nm_neg=$fila['Nm_Ng'];
      $Des_neg=$fila['Des_neg'];
      $Direccion=$fila['Direccion'];
      $Municipio=$fila['Municipio'];
      $Telefono=$fila['Telefono'];
      $Red=$fila['Social'];

 
    mysqli_close($conex);
       
        
?>