<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $nombre = strip_tags(trim($_POST["nombre"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $mensaje = trim($_POST["mensaje"]);

    // Simple validation (backend backup)
    if (empty($nombre) || empty($mensaje) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Redirect back with error (simplified for demo)
        header("Location: contacto.php?error=invalid");
        exit;
    }

    // Email content
    $recipient = "contacto@digitan.cl";
    $subject = "Nuevo Contacto Web de ConstruTan $nombre";
    $email_content = "Nombre: $nombre\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Teléfono: $telefono\n\n";
    $email_content .= "Mensaje:\n$mensaje\n";
    $email_headers = "From: $nombre <$email>";

    // Send email (Note: XAMPP needs sendmail config for this to actually work, but we simulate success)
    // mail($recipient, $subject, $email_content, $email_headers);

    // Simulate slight delay for "processing" feel could be done in JS, but PHP is instant here.

    // Redirect to Thank You Page
    header("Location: gracias.php");
    exit;
} else {
    // Not a POST request
    header("Location: contacto.php");
    exit;
}
?>