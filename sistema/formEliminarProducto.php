<?php  

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $producto = verProductoPorID();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>baja de un producto</h1>

        <div class="alert bg-light p-4 col-6 mx-auto border border-danger shadow-sm">
            <div class="row">
                <div class="col">
                    <img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail">
                </div>
                <div class="col text-danger">
                    <h2><?= $producto['prdNombre'] ?></h2>
                    Marca: <?= $producto['mkNombre'] ?><br>
                    Categoría: <?= $producto['catNombre'] ?><br>
                    Precio: <?= $producto['prdPrecio'] ?><br>
                    Presentación: <?= $producto['prdPresentacion'] ?><br>

                    <form action="eliminarProducto.php" method="post">
                        <input type="hidden" name="idProducto"
                               value="<?= $producto['idProducto'] ?>">
                        <button class="btn btn-danger btn-block my-2">
                            Confirmar baja
                        </button>
                        <a href="" class="btn btn-outline-secondary btn-block">
                            Volver a panel
                        </a>
                    </form>

                </div>
            </div>
        </div>

        <script>
            Swal.fire({
                title: 'Arvertencia',
                text: "Esta acción no se puede deshacer.",
                type: 'error',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#999',
                confirmButtonText: 'Si, quiero eliminarlo',
                cancelButtonText: 'NO, no quiero eliminarlo'
            }).then((result) => {
                if (!result.value) {
                    //redirección a panel productos
                    window.location = 'adminProductos.php';
                }
            })
        </script>

    </main>

<?php  include 'includes/footer.php';  ?>