<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $resultado = modificarMarca();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de una marca</h1>

<?php
        $clase = 'danger';
        $mensaje = 'No se pudo modificar la marca.';
        if( $resultado ){
            $clase = 'success';
            $mensaje = 'Marca modificada corectamente.';
?>
            <div class="alert alert-<?= $clase; ?> p-3">
                <?= $mensaje; ?>
                <br>
                <a href="adminMarcas.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>