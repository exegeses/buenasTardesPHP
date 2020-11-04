<?php
    require 'config/config.php';

    ### capturamos datos enviados por el form
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentarios = $_POST['comentarios'];
    ### configuramos datos de email a enviar
    $destinatario = 'marcospinardi@gmail.com';
    $asunto = 'Email enviado desde mi sitio';
    $cuerpo = '<div style="background-color: #a5dc86;padding:20px;font-family: sans-serif;">';
    $cuerpo .= 'Nombre: '.$nombre.'<br>';
    $cuerpo .= 'Email: '.$email.'<br>';
    $cuerpo .= 'Comentarios: '.$comentarios.'<br>';
    $cuerpo .= '</div>';
    $headers = 'From: El Señor de las Tinieblas <satan@hell.com>' . "\r\n";
    $headers .= 'MIME-Version: 1.0';
    $headers .= 'Content-type: text/html; charset=utf-8';

    ### enviamos el email
    mail($destinatario, $asunto, $cuerpo, $headers);

	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Contacto</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow-sm">
            Gracias <?= $nombre ?> por contactarnos.
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>