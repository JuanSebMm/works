<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crud</title>
    <link rel="stylesheet" href="est.css">
    <script>
        function confirmar(){
            return confirm('A continuacion se eliminaran los datos seleccionados ¿desea continuar?')

        }

    </script>
</head>
<body>
    <?php
        include("conexion.php");
        $sql="select * from usuarios";
        $resultado=mysqli_query($conex,$sql);
    ?>
    <div class="nav-bar">

     <ul class="Nav">
     <h1 class="heading"> Cr<span>ud </span>  </h1>
        <nav class="navbar">
            <a href="../vista/index.php">Inicio</a>
        </nav>
     </ul> 
</div>
<br>
<br>
        


<?php
$nombres=[];
while($filas=mysqli_fetch_assoc($resultado)){
    array_push($nombres,$filas['nombre']);

?>
    <main>
        <?php echo "<a href='comercios.php?id=".$filas['id']."'>"?>
            <div class="cont-tarjeta">
                <div class="cont-tarjeta__logo">
                    <img src="img/logo-yt.jpeg" alt="">
                    <h1><?php echo $filas['nombre'];?></h1>
                    <p>Calification</p>
                </div>

                <article>
                    <?php echo "<a href='eliminar.php?id=".$filas['id']."'  onclick='return confirmar()'>ELIMINAR</a>"?>

                    <br>

                    <?php echo "<a href='editar.php?id=".$filas['id']."'>EDITAR</a>"?>

                    <br>

                    <a href="agregar.php">Añadir</a>
                </article>
            </div>
            <?php echo "</a>"?>
    </main>
    
    


<?php
}
?>



    

    <php mysqli_close($conex);?>

</body>
</html>