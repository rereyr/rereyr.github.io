<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $comentarios = $_POST["comentarios"];

    $destinatario = "vm17056@ues.edu.sv"; // Reemplaza con tu dirección de correo
    $asunto = "Mensaje del formulario de contacto";

    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Teléfono: $telefono\n";
    $mensaje .= "Correo: $email\n";
    $mensaje .= "Comentarios:\n$comentarios";

    // Puedes personalizar el encabezado del correo según tus necesidades
    $headers = "From: $email";

    // Enviar el correo
    mail($destinatario, $asunto, $mensaje, $headers);

    // Redirigir al usuario a una página de confirmación
    header("Location: confirmacion.html");
} else {
    // Si se accede al script directamente sin un formulario POST, redirigir a la página de contacto
    header("Location: tu-pagina-de-contacto.html");
}
?>
