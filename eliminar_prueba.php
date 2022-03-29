<?php
$codigo 			= $_POST['codigo'];
include 'conexion2.php';
$myQuery  = "DELETE FROM inventario where codigo='$codigo' ";
$consulta = $conexion2->query($myQuery);
echo($consulta);
echo($myQuery);
?>


<link rel="stylesheet" href="style3.css">
<a href="Libreria.html"> Regresar </a>