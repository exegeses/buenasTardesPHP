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

        $diaSemana = date('D');

        $diaMes = date('d');
        $mes = date('m');
        $anio = date('Y');

        switch ($diaSemana){
            case 'Sun':
                $diaSemana = 'Domingo';
                break;
            case 'Mon':
                $diaSemana = 'Lunes';
                break;
            case 'Tue':
                $diaSemana = 'Martes';
                break;
            case 'Wed':
                $diaSemana = 'Miércoles';
                break;
            case 'Thu':
                $diaSemana = 'Jueves';
                break;
            case 'Fri':
                $diaSemana = 'Viernes';
                break;
            default:
                $diaSemana = 'Sábado';
                break;
        }

        echo $diaSemana, ' ', $diaMes, '/', $mes, '/', $anio;
?>
    </div>

</body>
</html>