<!DOCTYPE html>
<html>
<head>
	<title>Consultorio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width", user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/Login.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    
</head>
<body>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-6 col-md-6 form-container">
        <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
            <div class="heading mb-4">
                <h2>Ingresa a tu cuenta</h2>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
                <div class="form-input">
                    <span><i class="fa fa-envelope"></i></span>
                    <label></label><input type = "text" name = "usuario" class = "box" placeholder="Usuario" required="required" /><br /><br />
                </div>
            
                <div class="form-input">
                    <span><i class="fa fa-lock"></i></span>
                    <label></label><input type = "password" name = "clave" class = "box"  placeholder="Contraseña" required="required" /><br/><br />
                </div>
            
                <div class="row mb-3">
                    <div class="col-6 d-flex">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="cb1"/>
                            <label class="custom-control-label text-white" htmlFor="cb1">No cerrar sesion</label>
                        </div>
                    </div>
                    
                    <div class="col-6 text-right">
                        <a href="forget.html" class="forget-link">Recordar contraseña</a>
                    </div>
                </div>
                
                <div class="text-left mb-3">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
                <div class="text-white">No tienes una cuenta?
                    <a href="./SignUp" class="register-link"> Registrese aqui</a>
                </div>
            </form>
            <a type="button" class="botonPrincipal btn btn-dark" href="./index.php">Regresar Pagina Principal</a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
</div>
</div>
<script src="../../recursos/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="../../recursos/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>