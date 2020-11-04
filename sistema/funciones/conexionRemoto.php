<?php

    const SERVER    = 'localhost';
    const USUARIO   = 'id15317613_php43568';
    const CLAVE     = 'K5M\iE29ZA(vucoI';
    const BASE      = 'id15317613_catalogo';

    function conectar()
    {
        $link = mysqli_connect(
                SERVER,
                USUARIO,
                CLAVE,
                BASE
        );
        return $link;
    }