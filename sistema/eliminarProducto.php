<?php  

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $resultado = eliminarProducto();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo producto</h1>

<?php
        $clase = 'danger';
        $mensaje = 'No se pudo eliminar el producto.';
        if( $resultado ){
            $clase = 'success';
            $mensaje = 'Producto eliminado corectamente.';
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