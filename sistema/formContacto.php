<?php

    require 'config/config.php';
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Formulario de contacto</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">
            <form action="contacto.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"
                           class="form-control" id="nombre" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email"
                           class="form-control" id="email" required>
                </div>

                <div class="form-group">
                    <label for="comentarios">Comentarios</label>
                    <textarea name="comentarios"
                              class="form-control"
                              id="comentarios"></textarea>
                </div>

                <button class="btn btn-block btn-dark">
                    Enviar comentarios
                </button>

            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>