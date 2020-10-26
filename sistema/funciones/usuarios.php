<?php

    ######### CRUD de usuarios #########

    function listarUsuarios()
    {
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail
                    FROM usuarios
                    WHERE usuEstado = 1";
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function agregarUsuario()
    {
        $usuNombre = $_POST['usuNombre'];
        $usuApellido = $_POST['usuApellido'];
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql = "INSERT INTO usuarios
                        ( usuNombre, 
                          usuApellido, 
                          usuEmail, 
                          usuPass, 
                          usuEstado ) 
                    VALUES 
                        ( '".$usuNombre."', 
                          '".$usuApellido."',
                          '".$usuEmail."',
                          '".$usuPass."', 
                          1 )";
        $resultado = mysqli_query( $link, $sql)
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function verUsuarioPorID()
    {
        $idUsuario = $_GET['idUsuario'];
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail, usuPass 
                    FROM usuarios 
                    WHERE idUsuario =".$idUsuario;
        $resultado = mysqli_query($link, $sql)
                            or die (mysqli_error($link));
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }

    function modificarUsuario()
    {
        $idUsuario      =   $_POST['idUsuario'];
        $usuNombre      =   $_POST['usuNombre'];
        $usuApellido    =   $_POST['usuApellido'];
        $usuEmail       =   $_POST['usuEmail'];
        $usuPass        =   $_POST['usuPass'];

        $link = conectar();
        $sql = "UPDATE  usuarios
                    SET  usuNombre     = '".$usuNombre."',
                         usuApellido   = '".$usuApellido."',
                         usuEmail      = '".$usuEmail."',
                         usuPass       = '".$usuPass."' 
                    WHERE idUsuario =".$idUsuario;

        $resultado = mysqli_query( $link,$sql) or die( mysqli_error($link));
        return  $resultado;

    }

    /*
     * listarUsuarios()
     * verUsuarioPorID()
     * agregarUsuario()
     * modificarUsuario()
     * eliminarUsuario()
     * */
