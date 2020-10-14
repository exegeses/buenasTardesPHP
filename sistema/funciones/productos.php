<?php

    #############################
    ##### CRUD DE Productos #####

    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT 
                        p.idProducto, p.prdNombre, p.prdPrecio, 
                        m.mkNombre, c.catNombre, 
                        p.prdPresentacion, p.prdImagen 
                    FROM productos p 
                    INNER JOIN marcas m ON p.idMarca = m.idMarca 
                    INNER JOIN categorias c ON p.idCategoria = c.idCategoria";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $resultado;
    }