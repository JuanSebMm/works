<?php
require('../conexion/conexion.php');
session_start();

if ($_POST) {
    $User=$_POST['nombre'];
    $password=$_POST['password'];


    $sql="SELECT * FROM usuarios WHERE usuarios.usuario='$User'";
    $resultado=$conexion->query($sql);
    $num=$resultado->num_rows;


    if ($num>0) {
        $row=$resultado->fetch_assoc();
        $password_bd=$row['contra'];

        $pass_c= $password;

        if ($password_bd==$pass_c ) {
            // Datos de usuarios
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre']=$row['nombre'];
            $_SESSION['apellido']=$row['apellido'];
            $_SESSION['usuario']=$row['usuario'];
            $_SESSION['email']=$row['email'];
            $_SESSION['contra']=$row['contra'];
            $_SESSION['id_cargo']=$row['id_cargo'];

            //   Datos de comerciantes
            

            header("location: ../vistas/Comercios.php");

        } else {
            echo"La contaseña no coincide";
        }
        
    } else {
        echo"No existe el usuario";
    }
    
}



?>