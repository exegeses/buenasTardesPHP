<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>tomophp</title>
</head>
<body>

<h3 class="lead text-center">Datos Enviados</h3>

<div class="container text-center my-5">
    <?php

    $nombre = $_POST ['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    echo 'Nombre de usuario: ',$nombre,'<br>','Correo: ',$email,'<br>','Consulta: ',$mensaje;

    ?>
</div>

<div class="text-center">
    <a href="index.html" class="btn btn-info ">Regresar</a>
</div>

</body>
</html>
