<?php
  
  if(isset($_POST['enviar'])){
      $nombre=$_POST['nombre'];
      $nombreFicha=$_POST['NombreFicha'];
      $numeroFicha=$_POST['NumeroFicha'];

      include("../conexion/conexion.php");
      $sql="insert into usuarios (nombre, nombreFicha, numeroFicha)
      values('".$nombre."','".$nombreFicha."','".$numeroFicha."')";

      $resultado=mysqli_query($conex,$sql);

      if($resultado){
          echo "<script language='JavaScript'>
          alert('Los datos fueron ingresados correctamente a la bd');
          location.assign('indexCrud.php');
          </script>";


      }else{
          echo "<script language='JavaScript'>
          alert('ERROR: Los datos NO fueron ingresados correctamente a la bd');
          location.assign('indexCrud.php');
          </script>";

      }
      mysqli_close($conex);
  }