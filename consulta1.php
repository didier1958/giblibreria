<?php
$codigo= $_POST['codigo'];
include 'conexion2.php';
$myQuery =$conexion2 -> query ("select * from inventario where codigo=$codigo");
//echo($myQuery);
$consulta1= ($myQuery);
$valores = mysqli_fetch_array($consulta1);
// DB reading to variable
//$codigo 

$titulo           = $valores[1];
$autor            = $valores[2];
$genero           = $valores[3];
$editorial        = $valores[4];
$cantidad         = $valores[5];
$fecha_publicacion = $valores[6];
$edicion          = $valores[7];


include 'formu_consulta.php';


?>
