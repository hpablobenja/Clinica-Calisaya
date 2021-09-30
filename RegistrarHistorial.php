<?php session_start();

    if(isset($_SESSION['usuario'])) {
        
    }else{
        header ('location: login.php');
    }

    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $carnet = $_POST['carnet'];
        $tratamiento = $_POST['tratamiento'];
        
        $error = '';
        
        if (empty($codigo) or empty($nombre) or empty($carnet) or empty($tratamiento)){
            
            $error .= '<i>Favor de rellenar todos los campos</i>';
        }else{
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=login', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
            
            $statement = $conexion->prepare('SELECT * FROM historial WHERE codigo = :codigo LIMIT 1');
            $statement->execute(array(':codigo' => $codigo));
            $resultado = $statement->fetch();
            
                        
            if ($resultado != false){
                $error .= '<i>Este usuario ya existe</i>';
            }
            
            
        }
        //asdfdsaf
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO historial (id, codigo, nombre, carnet, tratamiento) VALUES (null, :codigo, :nombre, :carnet, :tratamiento)');
            $statement->execute(array(
                
                ':codigo' => $codigo,
                ':nombre' => $nombre,
                ':carnet' => $carnet,
                ':tratamiento' => $tratamiento
                
            ));
            
            $error .= '<i style="color: white;">Historial registrado exitosamente</i>';
        }
    }
    require 'frontend/RegistrarHistorial.php';
?>