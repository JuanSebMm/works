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
    <link rel="stylesheet" href="../../estilos/PagPrin.css">
    <link rel="stylesheet" href="../../estilos/footer.css">
    <link rel="stylesheet" href="../../estilos/tablas.css">
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

<?php
while ($row = $resultado->fetch_assoc()) { ?>

<div id="main-container">

    <table>
        <thead>
            <tr>
                <th>Id Comercio</th>
                <th>Id Tienda</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Link de Fotos</th>
                <th>Genero</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Nombre de Usuario</th>
                <th>Descripcion</th>

            </tr>
        </thead>

        <tr>
            <td><?php echo $row['id_com'];?></td>
            <td><?php echo $row['id_tienda'];?></td>
            <td><?php echo $row['nombres'];?></td>
            <td><?php echo $row['apellidos'];?></td>
            <td><?php echo $row['drfotos'];?></td>
            <td><?php echo $row['genero'];?></td>
            <td><?php echo $row['correo'];?></td>
            <td><?php echo $row['telefono'];?></td>
            <td><?php echo $row['nom_us'];?></td>
            <td><?php echo $row['descripcion'];?></td>
        </tr>
    </table>
</div>

<?php } ?>
<?php } else{ header("location: ../Comercios.php");} ?>

</body>
</html>