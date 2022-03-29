<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="style2.css">

</head>
	<body>
	<form action="este1.php" method="post">
	<select name="nombre">
            
			<?php
				include 'conexion2.php';
				$consulta = $conexion2 -> query ("SELECT titulo,codigo FROM inventario ORDER BY titulo ASC") or die ("Ha fallado la conexión");
					while ( $registro = $consulta -> fetch_assoc()) {
						echo'<option>'.$registro['titulo'].'</option>';
					}
			?>
		</select>
			
		
    <br><br>
	
	<button id="boton" type="submit">Borrar</button>
            <button id="boton"><a href="Libreria.html"> Regresar </a></button>	
				</div>

	</body>
	</form>
</html>