<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["email"];
    $mensaje = $_POST["message"];

    $para = "erikgb11@outlook.com"; // Reemplaza esto con tu dirección de correo
    $asunto = "Nuevo mensaje del formulario de contacto";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Correo: $correo\n";
    $contenido .= "Mensaje:\n$mensaje";

    // Puedes usar la función mail() de PHP para enviar el correo
    mail($para, $asunto, $contenido);

    // Redirigir al usuario a una página de confirmación o mostrar un mensaje de éxito
    header("Location: gracias.html"); // Reemplaza "gracias.html" con la página que desees mostrar después del envío del formulario
    exit();
}
?>