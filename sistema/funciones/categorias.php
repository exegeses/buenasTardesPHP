<?php

    ########################
    #### CRUD DE categorías ####

    function listarCategorias()
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                    FROM categorias";
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }

    function agregarCategoria(){
        $catNombre = $_POST['catNombre'];
        $link = conectar();
        $sql = "INSERT INTO categorias
                        ( catNombre )
                    VALUE 
                        ( '".$catNombre."' )";
        $resultado = mysqli_query( $link, $sql );
        return $resultado;
    }

    /*
     * listarCategorias()
     * verCategoriaPorID()
     * agregarCategoria()
     * modificarCategoria()
     * eliminarCategoria()
     * */