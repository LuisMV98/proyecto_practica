<?php
	session_start();
	session_destroy();
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
        require('navbar1.html');
    ?>

    <div class="row">
        <div class="col s12 l4 offset-l4 m8 offset-m2 red accent-1 center-align">
            <?php
	            if(isset($_REQUEST['err'])){
                    $err = $_REQUEST['err'];
                    if($err == 0){
                        print("La contraseña es incorrecta");
                        print("<p>** Verificar por Favor **</p>");
                    }
                    elseif ($err == 1){
                        print("El usuario no existe");
                        print("<p>** Verificar por Favor **</p>");
                    }
                }
            ?>
        </div>
    </div>

    <!-- Login -->
    <div class="row">
        <div class="col s12 l4 offset-l4 m8 offset-m2">
            <div class="card">
                <div class="card-action blue darken-2 white-text">
                    <h3>Iniciar Sesión</h3>
                </div>
                <div class="card-content">
                    <div class="form-field center-align">
                        <i class="large material-icons">account_circle</i>
                    </div><br>
                    <form action="validar.php" method="post">    <!-- Formulario -->
                        <div class="form-field">
                            <label for="username"><i class="tiny material-icons">assignment_ind</i>&#32;CORREO</label>
                            <input type="email" name="user" id="username" placeholder="Correo">
                        </div><br>
                        <div class="form-field">
                            <label for="password"><i class="tiny material-icons">vpn_key</i>&#32;CONTRASEÑA</label>
                            <input type="password" name="pass" id="password" placeholder="Contraseña">
                        </div><br>
                        <div class="form-field center-align">
                            <button type="submit" class="btn-large green waves-effect waves-dark" style="width:50%;">INGRESAR</button>
                        </div><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FOOTER -->
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