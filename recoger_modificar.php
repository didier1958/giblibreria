<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>



<?php

$codigo= $_POST['codigo'];

include 'conexion2.php';
	
$myQuery =$conexion2 -> query ("SELECT * FROM inventario ") or die ("Ha fallado la conexión");

    $consulta1= ($myQuery);
$valores = mysqli_fetch_array($consulta1);

$titulo           = $valores[1];
$autor            = $valores[2];
$genero           = $valores[3];
$editorial        = $valores[4];
$cantidad         = $valores[5];
$fecha_publicacion = $valores[6];
$edicion          = $valores[7];

					
include "formu_modificar2.php";

//echo('Aja'.$myQuery);
?>
