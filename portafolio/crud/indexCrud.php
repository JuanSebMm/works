<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crud</title>
    <script>
        function confirmar(){
            return confirm('A continuacion se eliminaran los datos seleccionados ¿desea continuar?')
        }
    </script>
    <link rel="stylesheet" href="../estilos/tablas.css">
    <link rel="stylesheet" href="../estilos/manUs.css">
</head>
<body>

   <div id="inicio" class="nav-bar">
       <ul class="Nav">
         <div class="titulo">Manuales <span>Tecnicos</span></div>
        <li><a href="#inicio" class=" button type1">Inicio</a></li>
        <li><a href="../vista/trabJs/trab.php" class=" button type1">Trabajos</a></li>
        <li><a href="../vista/perfil.php" class=" button type1">Portafolio</a></li>
        <li><a href="#" class=" button type1">Mas Informacion</a></li>
      </ul> 
   </div> 



<div id="main-container">
    <?php
        include("conexion.php");
        $sql="select * from usuarios";
        $resultado=mysqli_query($conex,$sql);
    ?>
    <h1>C.R.U.D (Creat Read Update Delete)</h1>
    <a class="tablas" href="agregar.php">Agregar Registro</a>
    <br>
    <br>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>nombre de ficha</th>
                <th>numero de ficha</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
               while($filas=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td><?php echo $filas['id']?></td>
                <td><?php echo $filas['nombre']?></td>
                <td><?php echo $filas['nombreFicha']?></td>
                <td><?php echo $filas['numeroFicha']?></td>
                <td>
                    <?php echo "<a href='editar.php?id=".$filas['id']."'>EDITAR</a>"?>
                </td>
                
                <td><?php echo "<a href='eliminar.php?id=".$filas['id']."'  onclick='return confirmar()'>ELIMINAR</a>"?></td>
            </tr>
            <?php
               }
            ?>

        </tbody>
    </table>
   
    <php mysqli_close($conex);?>

</div>

</body>
</html>