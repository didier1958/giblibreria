<?php
$codigo= $_POST['codigo'];
include 'conexion2.php';
$myQuery =$conexion2 ->  query("SELECT `cantidad` FROM inventario WHERE codigo  = '{$_POST['codigo']}'") or die ("Ha fallado");



$myQuery =$conexion2 ->  query ("UPDATE inventario SET cantidad =  '{$_POST['cantidad']}'  WHERE codigo = '{$_POST['codigo']}' ") or die ("Ha fallado la conexión");
$conexion2 = null;


$conexion2=null;
echo 'Todo correcto';




?>
<link rel="stylesheet" href="style3.css">
<a id="boton" href= "Libreria.html"> Regresar </a>

