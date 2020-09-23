<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Proceso de datos desde un form</h1>

<?php
    $nombre = $_POST['nombre'];
    echo 'Tu nombre es: ', $nombre;
?>

</body>
</html>