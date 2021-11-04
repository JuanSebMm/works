<!-- Conexion con la base de datos -->
<?php require_once("../controler/conBD.php");?>


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

<!-- Ventana modal politicas -->


<header>
		<div class="textos">
			
			<a href="#" id="abrir"></a>
		</div>
	</header>
	<div id="miModal" class="modal">
		<div class="flex" id="flex">
			<div class="contenido-modal">
				<div class="modal-header flex">
					<h2>Comercio Mas</h2>
					<span class="close" id="close"></span>
				</div>

				<div class="modal-body">
					<p>El uso de este sitio wed implica al dar aceptar sin reserva alguna de los terminos y condiciones de uso provistas mas adelante por el hecho del registro por favor lea detenidamente nuestras politicas de calidad</p>			
				</div>
				<div class="modal-header flex">
					
					<span class="acep" id="acep">Aceptar</span>
					<a href="politicas.php" class="acep" style="font-size: 20px;">Ver Politicas</a>
				</div>
			</div>
		</div>
	</div>
	

<php mysqli_close($conex);?>
    
</body>
<script src="../projs/main.js"></script>
</html>