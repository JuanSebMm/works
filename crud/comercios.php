
<?php
include("conexion.php")
?>

<?php
        if(isset($_POST['enviar'])){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $nombreFicha=$_POST['NombreFicha'];
            $numeroFicha=$_POST['NumeroFicha'];

            $sql="update usuarios set nombre='".$nombre."'  ,nombreFicha='".$nombreFicha."' ,numeroFicha='".$numeroFicha."' where id='".$id."'";

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
            $sql="select * from usuarios where id='".$id."'";
            $resultado=mysqli_query($conex,$sql);
    
            $fila=mysqli_fetch_assoc($resultado);
            $nombre=$fila["nombre"];
            $nombreFicha=$fila["nombreFicha"];
            $numeroFicha=$fila["numeroFicha"];
    
      
            mysqli_close($conex);
    ?>

    <section>
    <h1>Editar Aprendiz</h1>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $nombre; ?></title>
    </head>
    <body>
        
    </body>
    </html>
            
            <?php echo $nombreFicha; ?>
            <?php echo $numeroFicha; ?>
    </section>
    <?php
        }
    ?>