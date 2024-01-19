<?php
if (isset($_POST['email'])) {
    // Datos de la empresa
    $email_to = "comercial@difarlib.com.pe";
    $email_subject = "Contacto desde el sitio web de DIFARLIB";
    // Datos ingresados por el usuario
    if (
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])
    ) {
        echo '<script>alert("ERROR: Su mensaje no pudo ser enviado. Por favor, vuelva a intentarlo."); window.location.href = "./../contacto.html";</script>';
        die();
    }
    $email_from = ($_POST['email']);
    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombres y apellidos: " . $_POST['name'] . "\n";
    $email_message .= "Correo electrónico: " . $_POST['email'] . "\n";
    $email_message .= "Asunto: " . $_POST['subject'] . "\n";
    $email_message .= "Mensaje: " . $_POST['message'] . "\n\n";
    // Envio
    $headers = 'From: ' . $email_from . "\r\n" .
        'Reply-To: ' . $email_from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    echo '<script>alert("Gracias. Su mensaje fue enviado. Será atendido lo antes posible."); window.location.href = "./../index.html";</script>';
}
