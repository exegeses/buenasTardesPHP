<?php
//tarea:
/*
 * crear una funcion que divida dos números
 *
 * 1. ambos deben ser números
 * 2. el divisor no puede ser 0
 * 3. retornar resultado
 *  (si se cumplen las dos anteriores)
 *
 *
 * NOTA: no poner un echo dentro de la función
 * */

    function dividir($dividendo, $divisor)
    {
        $resultado = 'Ambos deben ser números';
        if( is_numeric($dividendo) && is_numeric($divisor) ){
            //ambos son números
            $resultado = 'El divisor no puede ser 0';
            if( $divisor != 0 ){
                $resultado = $dividendo / $divisor;
            }
        }
        return $resultado;

    }

    $dividendo = $_POST['dividendo'];
    $divisor = $_POST['divisor'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Tarea funciones - resolución</h1>
    <div class="objeto">
        <?= dividir($dividendo, $divisor) ?>
    </div>

</body>
</html>