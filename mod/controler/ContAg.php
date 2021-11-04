<?php
  include("../conexion/conexion.php");
  if(isset($_POST['enviar'])){
      $Nm_neg=$_POST['Nm_Ng'];
      $Des_neg=$_POST['Des_ng'];
      $Direccion=$_POST['Direc'];
      $Municipio=$_POST['Muni'];
      $Telefono=$_POST['Tel'];
      $Red=$_POST['Red'];


      
      $sql="INSERT INTO negocios(Nm_Ng, Des_neg, Direccion, Municipio, Telefono, Social) VALUES ($Nm_neg,$Des_neg,$Direccion,$Municipio,$Telefono,$Red)";

      $resultado=mysqli_query($conex,$sql);

     

      
      mysqli_close($conex);
  }