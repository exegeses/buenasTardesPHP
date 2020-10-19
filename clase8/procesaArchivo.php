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
    ################################
    ### mover archivo a directorio ./productos

    $tmp = $_FILES['prdImagen']['tmp_name'];
    $path = 'productos/';
        //nombre original
        $destino = $path.$_FILES['prdImagen']['name'];
        //renombrar time().extension
        //$destino = time().'.'.pathinfo( $_FILES['prdImagen']['name'], PATHINFO_EXTENSION);

    move_uploaded_file($tmp, $destino);