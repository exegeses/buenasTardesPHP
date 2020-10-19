<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $resultado = agregarMarca();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva marca</h1>

<?php
        $clase = 'danger';
        $mensaje = 'No se pudo agregar la marca.';
        if( $resultado ){
            $clase = 'success';
            $mensaje = 'Marca agregada corectamente.';
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