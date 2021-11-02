<?php
        include("../conexion/conexion.php");
        $sql="select * from usuarios";
        $resultado=mysqli_query($conex,$sql);
    ?>