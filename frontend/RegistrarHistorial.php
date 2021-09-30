<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/styleHistorial.css">
  <title>Registrar Histrial Clinico</title>
</head>
<body>
  <section class="form-register container-form">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
    <div>
    <h4>Registrar Historial Clinico</h4>
    <input class="controls" type="text" name="codigo" id="1" placeholder="Ingrese código ">
    <input class="controls" type="text" name="nombre" id="2" placeholder="Ingrese nombre">
    <input class="controls" type="text" name="carnet" id="3" placeholder="Ingrese carnet">
    <input class="controls" type="text" name="tratamiento" id="4" placeholder="Ingrese tratamiento">
    <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
    </div>
    <?php if(!empty($error)): ?>
        <div class="mensaje">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    <div> 
    <button class="botons" type="submit" value="Registrar">Registrar</button>
    </div> 
    </form>
    <p class="botons1"><a  href="principal1.php"><button class="botons">REGRESAR</button></a></p>
  </section>

</body>
</html>