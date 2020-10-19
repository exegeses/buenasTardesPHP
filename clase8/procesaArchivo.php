<?php

    $prdImagen = $_FILES['prdImagen'];

    ################################
    ### ver qué hay en $_FILES[]
    //ver el nombre del archivo
    //echo $prdImagen['name'];
    echo $_FILES['prdImagen']['name'];

    echo '<br>';
    //ver peso del archivo en bytes
    echo $_FILES['prdImagen']['size'];

    echo '<pre>';
    print_r($prdImagen);
    echo '</pre>';

    ################################

