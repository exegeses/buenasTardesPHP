<?php

    require 'funciones/conexion.php';
    require 'funciones/usuarios.php';
    $usuario = verUsuarioPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de un usuario</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">
            <form action="modificarUsuario.php" method="post">
                Nombre: <br>
                <input type="text" name="usuNombre"
                       value="<?= $usuario['usuNombre'] ?>"
                       class="form-control" required>
                <br>
                Apellido: <br>
                <input type="text" name="usuApellido"
                       value="<?= $usuario['usuApellido'] ?>"
                       class="form-control" required>
                <br>
                Email: <br>
                <input type="email" name="usuEmail"
                       value="<?= $usuario['usuEmail'] ?>"
                       class="form-control" required>
                <br>
                Contraseña: <br>
                <input type="password" name="usuPass"
                       value="<?= $usuario['usuPass'] ?>"
                       class="form-control" required>
                <br>
                <input type="hidden" name="idUsuario" value="<?= $usuario['idUsuario'] ?>">
                <button class="btn btn-dark mr-3 px-4">Modificar usuario</button>
                <a href="adminUsuarios.php" class="btn btn-outline-secondary">
                    Volver a panel
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>