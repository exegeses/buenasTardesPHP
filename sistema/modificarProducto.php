<?php  

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $resultado = modificarProducto();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de un Producto</h1>

<?php
        $clase = 'danger';
        $mensaje = 'No se pudo modificar el producto.';
        if( $resultado ){
            $clase = 'success';
            $mensaje = 'Producto modificado correctamente.';
?>
            <div class="alert alert-<?= $clase; ?> p-3">
                <?= $mensaje; ?>
                <br>
                <a href="adminProductos.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>