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
			<?php 
				$sql="SELECT * from tabla";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
		 	?>
			<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
		</tr>
		<?php 
	}
	 ?>
		</table>
		<button><a href="cerrar.php">Ingresar a sesion</a></button>
	</div>
</body>
</html>