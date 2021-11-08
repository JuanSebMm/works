<!-- Confirmacon de inicio de sesion -->
<?php 
require('../controladores/Sesiones.php');

if (!isset($_SESSION['id'])) {
    header('location: FormIn.php');
}
?>
<?php include("../controladores/conBd.php");?>

<!-- Cuerpo de comercios -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/PagPrin.css">
    <link rel="stylesheet" href="../estilos/footer.css">
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
            <a href="index.php">Inicio</a>
            <a href="vistasAdmin/index.php">Mi Perfil</a>
            <a href="perfil.php"><?php echo "$nombre";?></a>
                <?php if ($tipo_user == 1) {?>
                    <a href="vistasAdmin/index.php">Registros</a>
                    <a href="vistasAdmin/index.php">Comercios</a>
                
                <?php } ?>
                <a href="../controladores/cerrarSes.php">Cerrar Sesion</a>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
</section>

<div class="comercios_cuer">
<div class="cuerpo">
        <?php $nombre=[]; while($filas=mysqli_fetch_assoc($resultado)){ ?>
                <div class="con_tar">
                <?php echo "<a href='comvis.php?id=".$filas['id_com']."'>"?>
                    <div class="Tar_pres">
                        <div class="card">
                            <img src="<?php echo $filas['drfoto'];?>" alt="">
                            <h4><?php echo $filas['nombres'];?></h4>
                            <p></p>
                            <a href="">Leer Mas</a>             
                        </div>
                    </div>
                    <?php echo "</a>"?>
                </div>
        <?php }?>
        <?php mysqli_close($conexion);?>

    </div>
</div>

<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="#">
                    <img src="" alt="Logo de Comercio Mas">
                </a>
            </figure>
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Publicidad de Manera Gratuita y de manera segura</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2021 <b>Comercio Mas</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>
    
</body>
</html>