<?php
session_start();
session_destroy();

header("location: ../../modelos/SesIn.php");
exit();



?>