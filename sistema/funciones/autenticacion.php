<?php

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT usuNombre, usuApellido
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'
                      AND usuPass  = '".$usuPass."'";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        //cantidad de coincidencias
        $cantidad = mysqli_num_rows($resultado);
        if( $cantidad == 0 ){
            //redirección a formLogin
            header('location: formLogin.php?error=1');
        }
        else{
            ### AUTENTICACION
            $_SESSION['login'] = 1;
            $usuario = mysqli_fetch_assoc($resultado);
            $_SESSION['usuNombre'] = $usuario['usuNombre'];
            $_SESSION['usuApellido'] = $usuario['usuApellido'];
            //redirección a admin
            header('location: admin.php');
        }

    }
    function logout()
    {
        //session_unset();
        session_destroy();
        header('refresh:3;url=index.php');
    }

    /**
    * Función para chequear token de sesión
     */
    function autenticar()
    {
        if( !isset($_SESSION['login']) ){
            header('location: formLogin.php?error=2');
        }
    }