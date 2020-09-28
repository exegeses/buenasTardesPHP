<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Trabajo con fecha en PHP</h1>
    <p>
        Para este ejercicio nos apoyaremos en
        el manual oficial de PHP: http://www.php.net
    </p>

    <div class="objeto">
<?php

        $diaSemana = date('w');
        $semana = [
                    'Domingo', 'Lunes', 'Martes', 'Miércoles',
                    'Jueves', 'Viernes', 'Sábado'
                  ];

        $diaMes = date('d');
        $mes = date('m');
        $anio = date('Y');

        echo $semana[$diaSemana], ' ', $diaMes, '/', $mes, '/', $anio;
?>
    </div>

</body>
</html>