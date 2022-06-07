<?php
    session_start();
	include("conexion.php");

	$nom = $_REQUEST['nombre'];
	$eda = $_REQUEST['edad'];
	$nac = $_REQUEST['nacimiento'];
	$cor = $_REQUEST['user'];
	$con = $_REQUEST['pass'];

    if($nom != null && $eda != null && $nac != null && $cor != null && $con != null){
        $link = Conectar();

        if(isset($_REQUEST['tipo'])){
            $tip = $_REQUEST['tipo'];
            if($tip==1){
                $query = "INSERT INTO usuario VALUES (NULL, '$nom', '$eda', '$nac', '$cor', '$con', 'usuario')";
                mysqli_query($link,$query);
                header("Location: crear_nuevo.php?conf=1");
            }elseif($tip==2){
                $query = "INSERT INTO admin VALUES (NULL, '$nom', '$eda', '$nac', '$cor', '$con', 'admin')";
                mysqli_query($link,$query);
                header("Location: crear_nuevo.php?conf=2");
            }
        }
        
    }else{
        if(isset($_REQUEST['tipo'])){
            $tip = $_REQUEST['tipo'];
            if($tip==1){
                header("Location: crear_nuevo.php?tipo=1");
            }elseif($tip==2){
                header("Location: crear_nuevo.php?tipo=2");
            }
        }
    }
?>