<!-- Conexion con la base de datos -->
<?php require_once("../controler/conBD.php");

session_start();
$usuario=$_SESSION['username'];
?>


<!-- Inicio de la pagina -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/politicas.css">
    <title>Document</title>
</head>
<body>
<section>
    <?php
            if (!isset($usuario)) {header("location: SesIn.php");}else{echo $usuario;}
            echo"<a href='../controler/Sesion/ClSes.php'>Salir</a>";
    ?>
</section>

<?php
$nombres=[];
    while($filas=mysqli_fetch_assoc($resultado)){
        array_push($nombres,$filas['Nm_Ng']);
?>
    <?php echo "<a href='comvis.php?id=".$filas['id']."'>"?>
            <div class="cont-tarjeta">
                <div class="cont-tarjeta__logo">
                    <img src="img/logo-yt.jpeg" alt="">
                    <h1><?php echo $filas['Nm_Ng'];?></h1>
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



<php mysqli_close($conex);?>
    
</body>
</html>