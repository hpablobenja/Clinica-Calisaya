<?php 

	$conexion=mysqli_connect('localhost','root','','login');

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dando estilo a tablas</title>

	<link rel="stylesheet" href="css/tabla.css">
</head>
<body>
	<div id="main-container">

		<table>
			<thead>
			<td>id</td>
			<td>nombre</td>
			<td>apellido</td>
			<td>email</td>
			<td>telefono</td>	
			</thead>
		
			<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<?php 
	}
	 ?>
		</table>
		<button><a href="cerrar.php">Ingresar a sesion</a></button>
	</div>
</body>
</html>