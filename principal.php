<?php session_start();
    if(isset($_SESSION['usuario'])){
        require 'frontend/reservas.php';
    }else{
        header ('location: login.php');
    }
        
?>