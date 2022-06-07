<?php
	session_start();
    if(!isset($_REQUEST['conf'])){
        $nombr = $_REQUEST['nombre'];
        $eda = $_REQUEST['edad'];
        $nacim = $_REQUEST['nacimiento'];
        $corre = $_REQUEST['correo'];
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
    <br><br>  <!-- OPCIONES -->
    <?php
        require('opciones.php');
    ?>

    <!-- Login -->
    <div class="row" id="edit">
        <div class="col s12 l6 offset-l3 m8 offset-m2">
            <div class="card">
                <?php
                    if(isset($_REQUEST['conf']))
                    {
                        print("<div class='card-action green darken-2 white-text'>");
                        $conf = $_REQUEST['conf'];
                        if($conf==1)
                        {
                            print("<h3>Cambios guardados.</h3>");
                        }
                        print("</div>");
                    }else{
                ?>
                <div class="card-action blue darken-2 white-text">
                <?php
                    if(isset($_REQUEST['tipo'])){
                        $tip = $_REQUEST['tipo'];
                        if($tip==1){
                    ?>
                    <h3>Editar Usuario:</h3>
                </div>
                <div class="card-content">
                    <form action="actualizar.php?tipo=1" method="post">    <!-- Formulario usuario -->
                    <?php
                        }else{
                    ?>
                    <h3>Editar Admin:</h3>
                </div>
                <div class="card-content">
                    <form action="actualizar.php?tipo=2" method="post">    <!-- Formulario admin -->
                    <?php
                        }
                    }
                    ?>
                        <div class="form-field">
                            <label for="nombre">NOMBRE</label>
                            <?php print("<input type='text' name='nombre' value='$nombr'><br><br>"); ?>
                        </div><br>
                        <div class="form-field">
                            <label for="edad">EDAD</label>
                            <?php print("<input type='text' name='edad' value='$eda'><br><br>"); ?>
                        </div><br>
                        <div class="form-field">
                            <label for="nacimiento">FECHA DE NACIMIENTO</label>
                            <?php print("<input type='text' name='nacimiento' value='$nacim'><br><br>"); ?>
                        </div>
                        <div class="form-field">
                            <?php print("<input type='hidden' name='correo' value='$corre'><br><br>"); ?>
                        </div>
                        <div class="form-field center-align">
                        <button type="submit" class="btn-large green waves-effect waves-dark" style="width:50%;">Guardar cambios</button>
                        </div><br>	
                    </form>
                    <?php
                        }
                    ?>
                </div>
            </div><br>
            <?php
                if(isset($_REQUEST['conf']))
                {
                    $conf = $_REQUEST['conf'];
                    if($conf==1)
                    {
                        print("<br><div class='center-align col s12 l6 offset-l3 m8 offset-m2'>");
                        print("<a href='admin.php'><button type='submit' class='btn-large blue waves-effect waves-dark' style='width:50%;'>VOLVER A INICIO</button></a>");
                        print("</div>");
                    }
                }
            ?>
        </div>
    </div>

    <div id="perf">
    </div>

    <div id="crea">
    </div>

    <div class="row">   <!-- VER USUARIOS -->
        <div id="res">
        </div>
    </div>

    <div class="row">   <!-- VER ADMINS -->
        <div id="resAdmin">
        </div>
    </div>
    
    <!-- FOOTER -->
    <br><br><br>
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
    <script src="javascript/ajax.js"></script>
    <script src="javascript/ajax2.js"></script>
</body>


</html>