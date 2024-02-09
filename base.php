<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $comentarios = $_POST["comentarios"];
    $legal = $_POST["legal"];

    // Conexión a la base de datos (reemplaza con tus propios datos)
    $servername = "localhost";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $dbname = "tu_base_de_datos";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión a la base de datos fallida: " . $conn->connect_error);
    }
    
    // Consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO tu_tabla (nombre, telefono, email, comentarios, legal) VALUES ('$nombre', '$telefono', '$email', '$comentarios', '$legal')";
    
    if ($conn->query($sql) === TRUE) {
        echo "¡Gracias! Tu mensaje ha sido enviado y almacenado en la base de datos.";
    } else {
        echo "Hubo un problema al enviar el mensaje y almacenar los datos en la base de datos. Por favor, inténtalo de nuevo más tarde.";
    }
    
    // Cierra la conexión a la base de datos
    $conn->close();
    
    // Envía el correo electrónico
    $to = "tu_direccion_de_correo@example.com"; // Cambia esto por tu dirección de correo
    $subject = "Nuevo mensaje desde el formulario de contacto";
    $message = "Nombre: $nombre\nTeléfono: $telefono\nEmail: $email\nComentarios: $comentarios\nAcepta Publicidad: $legal";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) { 
        echo "¡Gracias! Tu mensaje ha sido enviado.";
    } else {
        echo "Acceso denegado.";
    }
}
?>


