<?php  

    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $resultado = agregarCategoria();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva categoría</h1>

<?php
        $clase = 'danger';
        $mensaje = 'No se pudo agregar la categoría.';
        if( $resultado ){
            $clase = 'success';
            $mensaje = 'Categoría agregada corectamente.';
?>
            <div class="alert alert-<?= $clase; ?> p-3">
                <?= $mensaje; ?>
                <br>
                <a href="adminCategorias.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>