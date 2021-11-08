<?php
include("../conexion/conexion.php");
$ql="SELECT * FROM comerciantes";
$resultado=mysqli_query($conexion,$ql);
?>