<?php

    ########################
    #### CRUD DE marcas ####

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function agregarMarca(){
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas
                            ( mkNombre )
                        VALUE 
                            ( '".$mkNombre."' )";
        $resultado = mysqli_query( $link, $sql )
        or die( mysqli_error($link) );
        return $resultado;
    }

    /*
     * listarMarcas()
     * verMarcaPorID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     * */