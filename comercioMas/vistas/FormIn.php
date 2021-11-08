<?php  
require('../controladores/ValidarDt.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/forms.css">
    <title>Document</title>
</head>
<body>
<section class="form-register">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <h4>Inicio de Sesion</h4>
        <input class="controls" type="text" name="nombre" id="nombres" placeholder="Ingrese Nombre de Usuario">

        <input class="controls" type="password" name="password" id="correo" placeholder="Ingrese su Contraseña">


        <input class="botons" type="submit" value="Ingresar">
        <p><a href="FormReg.php">Registrate</a></p>
        <p><a href="forCom.php">Registre su Negocio</a></p>
    </form>
    

  </section>
    
</body>
</html>