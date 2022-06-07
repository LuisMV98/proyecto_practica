<?php
    session_start();
    if(!isset($_SESSION['corr'])){
        header("Location: cerrar_sesion.php");
    }else{
        $nom = $_SESSION['nomb'];
        $eda = $_SESSION['edad'];
        $nac = $_SESSION['naci'];
        $cor = $_SESSION['corr'];
        $tip = $_SESSION['tipo'];
    }
?>

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web</title>

    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/Estilos.css">
</head>


<body>

    <!-- Nav bar -->
    <?php
        require('navbar2.html');
    ?>

    <!-- Contenido -->
    <br><br>
    <div class="row">
        <div class="col s12 l6 offset-l3 m8 offset-m2">
            <div class="card">
                <div class="card-content">
                    <span class="card-title center-align blue darken-2 white-text"><h4>PERFIL</h4></span>
                    <h6>
                    <p><b>Nombre:</b> <?php echo $nom ?></p>
                    <p><b>Edad:</b> <?php echo $eda ?> años</p>
                    <p><b>Fecha de nacimiento:</b> <?php echo $nac ?></p>
                    <p><b>Correo:</b> <?php echo $cor ?></p>
                    <p><b>Tipo:</b> <?php echo $tip ?></p>
                    </h6>
                </div>
            </div>
            <br><br><br><br>
            <h4 class="green-text center-align">¡BIENVENIDO!</h4>
        </div>
    </div>

    <!-- Footer -->
    <?php
        require('foot.html');
    ?>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        M.AutoInit();
    });
    </script>
</body>


</html>