<?php 

	$conexion=mysqli_connect('localhost','root','','login');

 ?>
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Clinica Calisaya</title>
      <link rel="stylesheet" href="css/navbar.css">
      <link rel="stylesheet" href="css/tablaHistorial.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <nav>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a href="#">Historial Clinico</a></li>
            <li><a href="principal.php">Registro Reservas</a></li>
            <li><a href="RegistrarHistorial.php">Registrar Historial</a></li>
            <li><a href="register.php">Nuevo Usuario</a></li>
            <li><a href="cerrar.php">Cerrar Sesion</a></li>
         </ul>
      </nav>
      <section id="main-container">
      <section class="h1"><h3>HISTORIAL MEDICO</h3></section>
      <table>
			<thead>
			<td>#</td>
			<td>CODIGO</td>
			<td>NOMBRE</td>
			<td>CARNET</td>
			<td>TRATAMIENTO</td>	
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
      </section>
   </body>
</html>