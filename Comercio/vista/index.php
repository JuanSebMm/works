<?php

require_once('../daocrud/autoload.php');


$objUsuario= new usuario();

$insert=$objUsuario->insertUs("juan","peroo","ramirez","hotmail",31225486);
echo $insert;


?>