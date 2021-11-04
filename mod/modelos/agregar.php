<?php include("../controler/ContAg.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" class="form-register" >
        <h1>Agregar Aprendiz</h1>
        <label>Nombre del Negocio: </label>
        <input type="text" name="Nm_Ng" class="controls">
        <br>
        <br>
        <label>Descripcion ("Describa su local")</label>
        <input type="text" name="Des_ng"  class="controls">
        <br>
        <br>
        <label>Direccion</label>
        <input type="text" name="Direc" class="controls" >
        <br>
        <br>
        <label>Municipio</label>
        <input type="text" name="Muni" class="controls" >
        <br>
        <br>
        <label>Telefono</label>
        <input type="text" name="Tel" class="controls" >
        <br>
        <br>
        <label>Redes sociales</label>
        <input type="text" name="Red" class="controls" >

        <input type="submit" name="enviar" value="AGREGAR"  class="controls">
        <center><a href="../modelos/indexCrud.php">REGRESAR</a></center>    
    </form>
</body>
</html>