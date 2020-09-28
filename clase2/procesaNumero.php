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
        echo '<img src="imagenes/ok.png">';
    }
    else{
        echo '<img src="imagenes/error.png">';
    }
?>
    </div>

    <div class="objeto">
<?php
    $numero = $_POST['numero'];
    if( $numero < 100 ){
        $img = 'ok.png';
    }
    else{
        $img = 'error.png';
    }
?>
        <img src="imagenes/<?php echo $img; ?>">
    </div>

    <div class="objeto">
<?php
        $numero = $_POST['numero'];
        //valor predeterminado
        $img = 'error';
        if( $numero < 100 ){
            $img = 'ok';
        }
?>
        <img src="imagenes/<?php echo $img; ?>.png">
    </div>

    <a href="enviaNumero.html" class="boton">volver</a>

</body>
</html>