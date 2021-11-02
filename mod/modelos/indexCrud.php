<!-- Conexion con la base de datos -->
<?php require_once("../controler/conBD.php");?>


<!-- Inicio de la pagina -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/est.css">
    <title>Document</title>
</head>
<body>


<?php
$nombres=[];
while($filas=mysqli_fetch_assoc($resultado)){
    array_push($nombres,$filas['nombre']);
?>
    <?php echo "<a href='comvis.php?id=".$filas['id']."'>"?>
            <div class="cont-tarjeta">
                <div class="cont-tarjeta__logo">
                    <img src="img/logo-yt.jpeg" alt="">
                    <h1><?php echo $filas['nombre'];?></h1>
                    <p>Calification</p>
                </div>

                <article>
                    <?php echo "<a href='../controler/eliminar.php?id=".$filas['id']."'  onclick='return confirmar()'>ELIMINAR</a>"?>

                    <br>

                    <?php echo "<a href='editar.php?id=".$filas['id']."'>EDITAR</a>"?>

                    <br>

                    <a href="agregar.php">Añadir</a>
                </article>
            </div>
    <?php echo "</a>"?>
<?php
}
?>

<a href="../modelos/agregar.php">Añadir</a>

<php mysqli_close($conex);?>
    
</body>
</html>