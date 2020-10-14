<?php  

    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $resultado = agregarUsuario();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo usuario</h1>

<?php
        $clase = 'danger';
        $mensaje = 'No se pudo agregar el usuario.';
        if( $resultado ){
            $clase = 'success';
            $mensaje = 'Usuario agregado corectamente.';
?>
            <div class="alert alert-<?= $clase; ?> p-3">
                <?= $mensaje; ?>
                <br>
                <a href="adminUsuarios.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>