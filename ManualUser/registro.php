<?php

include("con_bd.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $consulta = "INSERT INTO `rapida`(`nombre`, `correo`) VALUES ('$name','$email')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	echo "<h1> esta ok</h1>";
	    }
    }   
}

?>