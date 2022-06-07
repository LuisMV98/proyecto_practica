<?php
	include("conexion.php");
	session_start();
	
	$nombr = $_REQUEST['nombre'];
	$eda = $_REQUEST['edad'];
	$nacim = $_REQUEST['nacimiento'];
	$corre = $_REQUEST['correo'];

	if($nombr != null && $eda != null && $nacim != null && $corre != null){
		$link = Conectar();

		if(isset($_REQUEST['tipo'])){
            $tip = $_REQUEST['tipo'];
            if($tip==1){
				$query = "UPDATE usuario SET nombre='$nombr',edad='$eda',nacimiento='$nacim' WHERE correo='$corre'";
				mysqli_query($link,$query);
				header("Location: editar.php?conf=1");
			}elseif($tip==2){
				$query = "UPDATE admin SET nombre='$nombr',edad='$eda',nacimiento='$nacim' WHERE correo='$corre'";
				mysqli_query($link,$query);
				if($_SESSION['corr']==$corre){
					$_SESSION['nomb'] = $nombr;
					$_SESSION['edad'] = $eda;
					$_SESSION['naci'] = $nacim;
					header("Location: admin.php");
				}else{
					header("Location: editar.php?conf=1");
				}
			}
		}else{
			header("Location: editar.php");
		}
    }else{
        header("Location: editar.php");
    }

?>