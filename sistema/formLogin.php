<?php  
	require 'config/config.php';
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Ingreso a sistema</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">

            <form action="login.php" method="post">
                Usuario:
                <input type="text" name="usuEmail" class="form-control">
                <br>
                Contraseña:
                <input type="password" name="usuPass" class="form-control">
                <br>
                <button class="btn btn-dark btn-block">Ingresar</button>

            </form>

        </div>
<?php
          if( isset( $_GET['error'] ) ){
              if ($_GET['error'] == 1) {
                  $msj = 'Nombre de usuario y/o clave incorrecto';
              } else if  ($_GET['error'] == 2) {
                  $msj = 'Debe loguearse para ingresar';
              }
?>
              <script>
                  Swal.fire(
                      'Advertencia',
                      '<?= $msj; ?>',
                      'error'
                  )
              </script>
<?php
          }
?>

    </main>

<?php  include 'includes/footer.php';  ?>