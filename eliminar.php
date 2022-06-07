<?php
	include("conexion.php");
    session_start();

	$corre = $_REQUEST['correo'];

    $link = Conectar();

    if(isset($_REQUEST['tipo'])){
        $tip = $_REQUEST['tipo'];
        if($tip==1){
            $query = "DELETE FROM usuario WHERE correo='$corre'"; 
            $consulta = mysqli_query($link,$query);
            mysqli_query($link,$query);
            echo'<script type="text/javascript">
                alert("Usuario eiminado");
                window.location.href="admin.php";
                </script>';
        }elseif($tip==2){
            $query = "DELETE FROM admin WHERE correo='$corre'"; 
            mysqli_query($link,$query);

            if($_SESSION['corr']==$corre){
                echo'<script type="text/javascript">
                alert("Su cuenta de admin ha sido eliminada!!, Su sesión será cerrada.");
                window.location.href="cerrar_sesion.php";
                </script>';
            }else{
                echo'<script type="text/javascript">
                alert("Admin eiminado");
                window.location.href="admin.php";
                </script>';
            }
        }
    }
?>