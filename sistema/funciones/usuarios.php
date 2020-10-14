<?php

    ######### CRUD de usuarios #########

    function listarUsuarios()
    {
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail
                    FROM usuarios
                    WHERE usuEstado = 1";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }


    /*
     * listarUsuarios()
     * verUsuarioPorID()
     * agregarUsuario()
     * modificarUsuario()
     * eliminarUsuario()
     * */
