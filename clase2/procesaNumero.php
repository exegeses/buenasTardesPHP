<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Condicional capturando un dato desde form</h1>

    <div class="objeto">
<?php
    $numero = $_POST['numero'];
    //echo $numero;
    if( $numero < 100 ){
        echo 'el número es menor';
    }
    else{
        echo 'el número NO es menor';
    }
?>        

    </div>


    <a href="enviaNumero.html" class="boton">volver</a>

</body>
</html>