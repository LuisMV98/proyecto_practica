<?php
	session_start();
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
      <!-- OPCIONES -->
    <?php
        require('opciones.php');
    ?>

    <!-- Login -->
    <br>
    <div class="row" id="crea">
        <div class="col s12 l6 offset-l3 m8 offset-m2">
            <div class="card">
                <?php
                    if(isset($_REQUEST['conf']))
                    {
                        print("<div class='card-action green darken-2 white-text'>");
                        $conf = $_REQUEST['conf'];
                        if($conf==1)
                        {
                            print("<h3>Nuevo Usuario Registrado.</h3>");
                            print("</div>");
                        }else{
                            print("<h3>Nuevo Admin Registrado.</h3>");
                            print("</div>");
                        }
                    }else{
                ?>
                <div class="card-action blue darken-2 white-text">
                    <?php
                    if(isset($_REQUEST['tipo'])){
                        $tip = $_REQUEST['tipo'];
                        if($tip==1){
                    ?>
                    <h3>Nuevo Usuario:</h3>
                </div>
                <div class="card-content">
                    <form action="registrar.php?tipo=1" method="post">    <!-- Formulario usuario -->
                    <?php
                        }else{
                    ?>
                    <h3>Nuevo Admin:</h3>
                </div>
                <div class="card-content">
                    <form action="registrar.php?tipo=2" method="post">    <!-- Formulario admin -->
                    <?php
                        }
                    }
                    ?>
                        <div class="form-field">
                            <label for="nombre">NOMBRE</label>
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre...">
                        </div><br>
                        <div class="form-field">
                            <label for="edad">EDAD</label>
                            <input type="text" name="edad" id="edad" placeholder="Edad...">
                        </div><br>
                        <div class="form-field">
                            <label for="nacimiento">FECHA DE NACIMIENTO</label>
                            <input type="text" name="nacimiento" id="nacimiento" placeholder="00/00/0000">
                        </div><br>
                        <div class="form-field">
                            <label for="username">CORREO</label>
                            <input type="email" name="user" id="user" placeholder="Correo">
                        </div><br>
                        <div class="form-field">
                            <label for="password">CONTRASEÑA</label>
                            <input type="password" name="pass" id="pass" placeholder="Contraseña">
                        </div><br>
                        <div class="form-field center-align">
                            <button type="submit" class="btn-large green waves-effect waves-dark" style="width:50%;">AGREGAR</button>
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
                    if($conf==1){
                        print("<br><div class='center-align col s12 l6 offset-l3 m8 offset-m2'>");
                        print("<a href='admin.php'><button  class='btn-large orange waves-effect waves-dark' style='width:40%;'>VOLVER A INICIO</button></a>");
                        print("<a href='crear_nuevo.php?tipo=1'><button  class='btn-large blue waves-effect waves-dark' style='width:40%;'>AGREGAR NUEVO USUARIO</button></a>");
                        print("</div>");
                    }else{
                        print("<br><div class='center-align col s12 l6 offset-l3 m8 offset-m2'>");
                        print("<a href='admin.php'><button  class='btn-large orange waves-effect waves-dark' style='width:40%;'>VOLVER A INICIO</button></a>");
                        print("<a href='crear_nuevo.php?tipo=2'><button  class='btn-large blue waves-effect waves-dark' style='width:40%;'>AGREGAR NUEVO ADMIN</button></a>");
                        print("</div>");
                    }
                }
            ?>
        </div>
    </div>

    <div id="perf">
    </div>

    <div id="edit">
    </div>

    <div class="row">   <!-- VER USUARIOS -->
        <div id="res">
        </div>
    </div>

    <div class="row">   <!-- VER ADMINS -->
        <div id="resAdmin">
        </div>
    </div>

    <br>
    
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
    <script src="javascript/ajax.js"></script>
    <script src="javascript/ajax2.js"></script>
</body>

</html>