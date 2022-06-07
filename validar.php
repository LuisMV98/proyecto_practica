<?php
	include("conexion.php");
	$user = $_REQUEST['user'];
	$pass = $_REQUEST['pass'];

	$link = Conectar();

	$query = "SELECT correo, contraseña, nombre, edad, nacimiento, tipo FROM usuario WHERE correo = '" . $user . "'";
	
	$consulta = mysqli_query($link,$query);

	$datos = mysqli_num_rows($consulta);

	if ($datos == 1)
	{
		while($fila = mysqli_fetch_row($consulta))
		{
			if($fila[1] == $pass)
			{
				session_start();
				$_SESSION['corr'] = $fila[0];
				$_SESSION['nomb'] = $fila[2];
				$_SESSION['edad'] = $fila[3];
				$_SESSION['naci'] = $fila[4];
				$_SESSION['tipo'] = $fila[5];

				header("location: usuario.php");
			}
			else
			{
				header("location: pagina3.php?err=0");
			}			
		}
	}
	elseif ($datos > 1) {
		print("Error al consultar la base de datos, contactar al Administrador");
	}
	elseif ($datos == 0){
		$query = "SELECT correo, contraseña, nombre, edad, nacimiento, tipo, id FROM admin WHERE correo = '" . $user . "'";
	
		$consulta = mysqli_query($link,$query);
	
		$datos = mysqli_num_rows($consulta);
	
		if ($datos == 1)
		{
			while($fila = mysqli_fetch_row($consulta))
			{
				//print("Acceso Autorizado");
				if($fila[1] == $pass)
				{
					session_start();
					$_SESSION['corr'] = $fila[0];
					$_SESSION['nomb'] = $fila[2];
					$_SESSION['edad'] = $fila[3];
					$_SESSION['naci'] = $fila[4];
					$_SESSION['tipo'] = $fila[5];
	
					header("location: admin.php");
				}
				else
				{
					header("location: pagina3.php?err=0");
				}			
			}
		}
		elseif ($datos > 1) {
			print("Error al consultar la base de datos, contactar al Administrador");
		}
		elseif ($datos == 0){
			//print("El Usuaio no Existe");
			header("location: pagina3.php?err=1");
		}
	}
    
?>