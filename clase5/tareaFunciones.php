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
        if( is_numeric($dividendo) && is_numeric($divisor) ){
            //ambos son números
            if( $divisor != 0 ){
                $resultado = $dividendo / $divisor;
                return $resultado;
            }
            return 'El divisor no puede ser 0';
        }
        return 'Ambos deben ser números';

    }
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
        <?= dividir(34, 'numero') ?>
    </div>
    <div class="objeto">
        <?= dividir(19, 0) ?>
    </div>
    <div class="objeto">
        <?= dividir(26, 4) ?>
    </div>

</body>
</html>