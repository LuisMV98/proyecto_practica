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
    <div class="row">   <!-- OPCIONES -->
        <div class="col s12 l6 offset-l3 m8 offset-m2">
            <a href="admin.php" class="waves-effect waves-light btn">Inicio</a>
            <a href="crear_nuevo.php?tipo=1" class="waves-effect waves-light btn">Nuevo Usuario</a>
            <a href="crear_nuevo.php?tipo=2" class="waves-effect waves-light btn">Nuevo Admin</a>
            <a class="waves-effect waves-light btn" id="boton">Ver usuarios</a>
            <a class="waves-effect waves-light btn" id="botonAdmin">Ver admins</a>
        </div>
    </div>
</body>


</html>