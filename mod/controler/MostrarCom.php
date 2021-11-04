
<?php
include("../conexion/conexion.php")
?>

<?php
       
    $id=$_GET['id']; 
    $sql="select * from negocios where id='".$id."'";
    $resultado=mysqli_query($conex,$sql);

    $fila=mysqli_fetch_assoc($resultado);
    $nombre=$fila["nombre"];
    $nombreFicha=$fila["nombreFicha"];
    $numeroFicha=$fila["numeroFicha"];

 
    mysqli_close($conex);
       
        
?>