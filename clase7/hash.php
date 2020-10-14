<?php

    $clave = 'admin';
    $hash = password_hash( $clave, PASSWORD_DEFAULT );

    echo $hash;