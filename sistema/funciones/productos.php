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

    function verProductoPorID()
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql = "SELECT 
                            p.idProducto, p.prdNombre, p.prdPrecio, 
                            p.idMarca, m.mkNombre, 
                            p.idCategoria, c.catNombre, 
                            p.prdPresentacion, p.prdStock, p.prdImagen 
                        FROM productos p 
                        INNER JOIN marcas m ON p.idMarca = m.idMarca 
                        INNER JOIN categorias c ON p.idCategoria = c.idCategoria
                    WHERE p.idProducto = ".$idProducto;
/*
        $sql = "SELECT 
                            p.idProducto, p.prdNombre, p.prdPrecio, 
                            p.idMarca, m.mkNombre, 
                            p.idCategoria, c.catNombre, 
                            p.prdPresentacion, p.prdStock, p.prdImagen 
                        FROM productos p, marcas m, categorias c 
                        WHERE p.idMarca = m.idMarca 
                          AND p.idCategoria = c.idCategoria
                          AND p.idProducto = ".$idProducto;
*/

        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        $producto = mysqli_fetch_assoc($resultado);
        return $producto;
    }



    /**
     * función para subir una imagen si fue enviada
     * @return string $prdImagen
     */
    function subirImagen()
    {
        // si no enviaron nada
        $prdImagen = 'noDisponible.jpg';

        if( $_FILES['prdImagen']['error'] == 0 ) {
            $tmp = $_FILES['prdImagen']['tmp_name'];
            $prdImagen = $_FILES['prdImagen']['name'];
            $path = 'productos/';
            //ruta a directorio productos
            $destino = $path.$prdImagen;
            //subir archivo
            move_uploaded_file($tmp, $destino);
        }
        return $prdImagen;
    }

    function agregarProducto()
    {
        //capturamos campos del form
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirImagen();
        //nos conectamos
        $link = conectar();
        //mensaje sql
        $sql = "INSERT INTO productos
                    VALUES
                        ( 
                            DEFAULT, 
                            '".$prdNombre."',
                            ".$prdPrecio.",
                            ".$idMarca.", 
                            ".$idCategoria.", 
                            '".$prdPresentacion."',
                            ".$prdStock.",
                            '".$prdImagen."'
                        )";
        $resultado = mysqli_query( $link, $sql )
                                or die( mysqli_error($link) );
        return $resultado;
    }

