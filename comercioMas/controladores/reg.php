<?php

include('../conexion/conexion.php');

$name = $_POST["ob1"];
$apellido = $_POST["ob2"];
$usuario = $_POST["ob3"];
$correo = $_POST["ob4"];
$contra = $_POST["ob5"];
$cargo=2;
$fechareg=date("y-m-d H:i:s");

$consulta = "INSERT INTO `usuarios`( `nombres`, `apellidos`, `usuario`, `email`, `contra`, `FechaReg`, `id_cargo`) VALUES ('$name','$apellido','$usuario','$correo','$contra','$fechareg','$cargo')";
$resultado = mysqli_query($conexion,$consulta);

if (!$resultado) {
    echo"error de insercion";
} else {
    header("location:../vistas/FormIn.php");
}

mysqli_close($conexion);

?>


