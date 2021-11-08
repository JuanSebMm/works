<?php 
require("../../conexion/conexion.php");
require('../../controladores/Sesiones.php');

if (!isset($_SESSION['id'])) {
    header('location: ../FormIn.php');
}

$sql="SELECT * FROM comerciantes";
    $resultado=mysqli_query($conexion,$sql);
?>

<?php if($_SESSION['id_cargo'] == 1) {?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../estilos/PagIn.css">
    <link rel="stylesheet" href="../../estilos/footer.css">
    <title>Document</title>
</head>
<body>
<header class="header">
		<div class="container">
            <div class="btn-menu">
                <label for="btn-menu">☰</label>
            </div>
			<nav class="menu">
				<a href="#">Inicio</a>
				<a href="#">Nosotros</a>
				<a href="#">Blog</a>
				<a href="#">Contacto</a>
			</nav>
		</div>
</header>
	<div class="capa"></div>
<section>
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="#">Portafolio</a>
                <a href="#">Servicios</a>
                <a href="#">Suscribirse</a>
                <a href="#">Facebook</a>
                <a href="#">Youtube</a>
                <a href="../../controladores/cerrarSes.php">Cerrar Sesion</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
</section>

<div class="cuerpo">
<?php
while ($row = $resultado->fetch_assoc()) { ?>

    <div class="con_tar">
        <div class="Tar_pres">
            <div class="card">
            <img src="<?php echo $row['drfoto'];?>" alt="">
            <h4><?php echo $row['nombres'];?></h4>
            <p></p>
            <a href="">Leer Mas</a>             
            </div>
        </div>
    </div>

<?php } ?>
<?php } else{ header("location: ../Comercios.php");} ?>
</div>
</body>
</html>