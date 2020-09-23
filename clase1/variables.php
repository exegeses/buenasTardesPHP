<?php

    $numero = 50;
    const NOMBRE = 'Marcos';
    const APELLIDO = 'Pinardi';

    echo 'El número es: ', $numero;
    $numero = 100;
?>
<br>
<?php
    echo 'El número es: ', $numero;
?>
<br>
<?php
    echo 'Mi nombre es: ', NOMBRE, ' ', APELLIDO;
?>
<hr>
<?php
    for ( $i=1; $i < 15; $i++ ){
        echo $i;
        echo '<br>';
    }
?>
<hr>
<?php
    echo "El número es: ", $numero;
?>

