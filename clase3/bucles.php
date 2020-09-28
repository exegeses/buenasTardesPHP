<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Bucles en PHP</h1>
<?php
    $italianos = [
                    'Fiat', 'Ferrari',
                    'Alfa Romeo', 'Bugatti',
                    'Lamborghini', 'Maseratti',
                    'Pagani', 'Lancia'
                 ];
    $n = 0;
    $cantidad = count($italianos);
    while ( $n < $cantidad ) {
        echo $italianos[$n],'<br>';
        $n++;
    }
?>
    <div class="objeto">
        <ul>
            <li>Marca</li>
        </ul>
    </div>


</body>
</html>