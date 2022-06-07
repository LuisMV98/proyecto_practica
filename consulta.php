<?php
    session_start();
	include("conexion.php");

    $link = Conectar();
    
    if(isset($_REQUEST['tipo'])){
        $tip = $_REQUEST['tipo'];
        if($tip==1){
            $query = "SELECT nombre, edad, nacimiento, correo, tipo FROM usuario"; 
        }elseif($tip==2){
            $query = "SELECT nombre, edad, nacimiento, correo, tipo FROM admin"; 
        }
    }
    
    $consulta = mysqli_query($link,$query);
    $datos = array();
    while($fila = mysqli_fetch_assoc($consulta))
    {
        $datos[] = $fila;			
    }

   echo json_encode($datos);
   exit();

    //header("Location: crea_usuario.php?conf=1");
?>