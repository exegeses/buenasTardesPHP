<?php

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $marcas = listarMarcas();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Listado de marcas</h1>
    <div class="objeto">
        <?php
            while( $marca = mysqli_fetch_assoc($marcas) ){
                echo $marca['idMarca'], ' ';
                echo $marca['mkNombre'], '<br>';
            }
        ?>
    </div>

</body>
</html>