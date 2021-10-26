<?php
 $sentecia = $bd->query("SELECT * FROM users;");
 $usuario= $sentecia->fetchAll(PDO::FETCH_OBJ);
 //print_r($usuario);

?>