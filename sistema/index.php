<?php  

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Catálogo de productos</h1>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
<?php
        while ( $producto = mysqli_fetch_assoc($productos) ) {
?>
            <div class="card col p-2">
                <img src="productos/<?= $producto['prdImagen'] ?>" class="card-img-top img-thumbnail">
                <h2><?= $producto['prdNombre'] ?></h2>
                <?= $producto['catNombre'] ?> - <?= $producto['mkNombre'] ?>
                <br>
                $<?= $producto['prdPrecio'] ?>
                <a href="" class="btn btn-outline-info">
                    ver detalle
                </a>
            </div>
<?php
        }
?>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>