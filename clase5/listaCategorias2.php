<?php

    require 'funciones/conexion.php';
    require 'funciones/categorias.php';

    $categorias = listarCategorias();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Listado de categorías</h1>
    <div class="objeto">
        <?php
            while( $categoria = mysqli_fetch_assoc($categorias) ){
                echo $categoria['idCategoria'], ' ';
                echo $categoria['catNombre'], '<br>';
            }
        ?>
    </div>

</body>
</html>