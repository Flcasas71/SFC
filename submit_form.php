<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Aquí puedes agregar código para guardar la información del formulario en tu base de datos o enviar un correo electrónico.

    // Por ejemplo:
    // $to = "tu_correo@example.com";
    // $subject = "Nuevo mensaje de Sinfonía Creativa";
    // $body = "Nombre: $name\nCorreo Electrónico: $email\nMensaje: $message";
    // mail($to, $subject, $body);

    echo "¡Gracias por ponerte en contacto con nosotros, $name! Tu mensaje ha sido recibido.";
}
?>
