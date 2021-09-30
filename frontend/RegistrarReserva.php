<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar reserva</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    
<div class="container-form">
        <div class="header">
            <div class="menu">
                <a href="index.php"><li class="module-login">Principal</li></a>
                <a href="RegistraReserva.php"><li class="module-register active">Registrar</li></a>
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
            <div class="welcome-form"><h1>FORMULARIO DE REGISTRO</h1></div>
            
            <div class="user line-input">
                <label class="lnr lnr-envelope"><b></b></label>
                <input type="text" placeholder="Ingrese Correo" name="correo">
            </div>
            <div class="user line-input">
                <label class="lnr lnr-envelope"><b></b> </label>
                <input type="text" name="nombre" placeholder="Ingrese Nombre">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"><b>Hora: </b></label>
                <input type="time" name="hora" placeholder="hora">
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"><b>Fecha: </b></label>
                <input type="date" name="fecha" placeholder="Fecha">
            </div>
            
            <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit">Registrarse<label class="lnr lnr-chevron-right"></label></button>
               
    </form>
    </div>

    
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>