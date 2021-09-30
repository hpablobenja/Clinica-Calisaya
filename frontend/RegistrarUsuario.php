<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/styleRegistro.css">
  <title>Registrar Nuevo Usuario</title>
</head>
<body>
  <section class="form-register container-form">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
    <div>
    <h4>Registrar Nuevo Usuario</h4>
    <input class="controls" type="text" name="correo" id="1" placeholder="Ingrese su correo">
    <input class="controls" type="text" name="usuario" id="2" placeholder="Ingrese su nombre">
    <input class="controls" type="password" name="clave" id="3" placeholder="Ingrese su contraseña">
    <input class="controls" type="password" name="clave2" id="4" placeholder="Reescriba su contraseña">
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
    
  </section>

</body>
</html>