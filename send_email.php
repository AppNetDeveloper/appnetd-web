<?php
// Asegúrate de ajustar la ruta según la ubicación de los archivos PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefono = htmlspecialchars($_POST['telefono']);
    $asunto = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp-pulse.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'liviudiaconu@appnet.dev'; // Usuario
        $mail->Password = 'mYpYMieSGrJ'; // Contraseña
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Cambia a PHPMailer::ENCRYPTION_SMTPS si usas SSL
        $mail->Port = 2525; // Puerto SMTP

        // Remitente y destinatario
        $mail->setFrom('liviudiaconu@appnet.dev', 'AppNet Developer');
        $mail->addAddress('liviudiaconu@appnet.dev', 'AppNet Developer');

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = "Nuevo mensaje de contacto: $asunto";
        $mail->Body    = "Nombre: $nombre $apellido<br>Correo: $email<br>Teléfono: $telefono<br><br>Mensaje:<br>$mensaje";

        $mail->send();
        echo 'Correo enviado exitosamente.';
    } catch (Exception $e) {
        echo "Hubo un error al enviar el correo: {$mail->ErrorInfo}";
    }
}
?>
