<?php include("../controladores/conBd.php");?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/Pagprin.css">
    <link rel="stylesheet" href="../estilos/footer.css">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>ComercioMas Inicio</title>
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
                <?php
                if (!isset($_SESSION['id'])) {?>
                 <a href="FormIn.php">Iniciar Sesion</a>
                 <a href="FormReg.php">Registrarse</a>
                <?php } ?>                
                
                
                
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
</section>

<section class="cabe">
    <div class="textos">
        <h1>Comercio<span>Mas</span></h1>
        <h2>Encuentra el negocio que necesitas de manera sencilla y rapida</h2>
    </div>
</section>

<div class="cuerpos">

    <div class="tit">
        <h1>Locales <span>Recomendados</span></h1>
    </div>
    
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
      

    <div class="cont_pub">
    <div class="publecidad">
            <div class="tt-pub">
                <h1><span>Registrate</span> Gratis</h1>
            </div>
            <div class="cont-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quis odio culpa, similique est magnam delectus a perferendis, earum, nisi eos distinctio veniam aliquid repudiandae quo nulla libero atque iste.</p>
            </div>
        </div>
        <div class="publecidad">
            <div class="tt-pub">
                <h1><span>Registrate</span> Gratis</h1>
            </div>
            <div class="cont-text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quis odio culpa, similique est magnam delectus a perferendis, earum, nisi eos distinctio veniam aliquid repudiandae quo nulla libero atque iste.</p>
            </div>
        </div>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa?</p>
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

