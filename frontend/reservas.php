<?php 

	$conexion=mysqli_connect('localhost','root','','login');

 ?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sider Menu Bar CSS</title>
    <link rel="stylesheet" href="css/side.css">
    <link rel="stylesheet" href="css/tablaRegistros.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
          <i class="fas fa-bars" id="btn"></i>
          <i class="fas fa-times" id="cancel"></i>
    </label>
      <div class="sidebar">
          <header>Proyecto</header>
          <ul>
          <li><a href="#"><i class="fas fa-link"></i>Reservas</a></li>
          <li><a href="principal1.php"><i class="fas fa-stream"></i>Historial Clinico</a></li>
          <li><a href="register.php"><i class="fas fa-address-book"></i>Registrar Usuario</a></li>
          <li><a href="cerrar.php">Cerrar Sesion</a></li>
          </ul>
    </div>
   <section id="main-container">
     <section class="h1"><h1>REGISTRO DE RESERVAS</h1></section>
   <div class="content">
      <table>
			<thead>
			<td>#</td>
			<td>NOMBRE</td>
			<td>CORREO</td>
			<td>HORA</td>
			<td>FECHA</td>	
			</thead>
			<?php 
				$sql="SELECT * from reservas";
				$result=mysqli_query($conexion,$sql);

				while($mostrar=mysqli_fetch_array($result)){
		 	?>
			<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['correo'] ?></td>
			<td><?php echo $mostrar['hora'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
		</tr>
		<?php 
	}
	 ?>
		</table>
      </div>
   </section>
  </body>
</html>