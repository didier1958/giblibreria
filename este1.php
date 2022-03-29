<html>
	<head>
		<title>DELETE</title>
		<meta charset="UTF-8" />
		<link href="styles.css" rel="stylesheet" type="text/css">
	
	</head>
	<body>
		<?php
			include 'conexion2.php';
			$consulta = $conexion2 -> query ("DELETE FROM inventario WHERE titulo = '{$_POST['nombre']}'") or die ("Ha fallado la conexión");
			$conexion = null;
		
		?>
	</body>
</html>

<link rel="stylesheet" href="style3.css">
<a href="Libreria.html"> Regresar </a>