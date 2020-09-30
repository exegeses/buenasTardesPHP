<?php
    $colores = [
                    'amarillo', 'azul', 'magenta',
                    'rojo', 'lila', 'violeta',
                    'naranja', 'verde', 'cyan'
               ];
    $codigos = [
                    '#ff0', '#02a', '#f0f',
                    '#d00', '#9f65a5', '#929',
                    '#f60', '#0a2', '#0ff'
               ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <style>
        #muestras{
            width: 300px;
            border: 1px solid #ccc;
            padding: 11px 0px 30px 30px;
        }
            #muestras span{
                display: inline-block;
                width: 32px;
                height: 32px;
                border: 1px solid #929292;
                position: relative;
                top: 11px;
                margin-right: 10px;
            }
    </style>
</head>
<body>
    <h1>Muestra de colores</h1>

    <section id="muestras">
        
        <span style="background-color: #ccc;"></span> nombre color <br>

    </section>

</body>
</html>