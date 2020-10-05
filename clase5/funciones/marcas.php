<?php

    ########################
    #### CRUD DE marcas ####

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas";
        $marcas = mysqli_query($link, $sql);
        return $marcas;
    }

    /*
    * verMarcaPorID()
    * agregarMarca()
    * modificarMarca()
    * eliminarMarca()
    * */