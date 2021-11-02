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
        <h1>Agrgar Aprendiz</h1>
        <label>Nombre: </label>
        <input type="text" name="nombre" class="controls">
        <br>
        <br>
        <label>Nombre de Ficha:</label>
        <input type="text" name="NombreFicha"  class="controls">
        <br>
        <br>
        <label>Numero de Ficha:</label>
        <input type="text" name="NumeroFicha" class="controls" >
        <br>
        <br>
        <input type="submit" name="enviar" value="AGREGAR"  class="controls">
        <center><a href="../modelos/indexCrud.php">REGRESAR</a></center>    
    </form>
</body>
</html>