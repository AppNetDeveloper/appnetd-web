<?php
/**
 * Script de envío de emails con seguridad mejorada
 * Incluye validación, sanitización y rate limiting
 */

// Iniciar sesión para rate limiting
session_start();

// Incluir configuración de email (archivo separado no versionado)
require_once __DIR__ . '/includes/email_config.php';

// Incluir PHPMailer
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Respuesta por defecto
$response = ['success' => false, 'message' => ''];

// Verificar método POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $response['message'] = 'Método no permitido';
    http_response_code(405);
    echo json_encode($response);
    exit;
}

// Rate limiting por IP
if (ENABLE_RATE_LIMIT) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $last_submit_key = 'last_email_submit_' . md5($ip);

    if (isset($_SESSION[$last_submit_key])) {
        $time_diff = time() - $_SESSION[$last_submit_key];
        if ($time_diff < (RATE_LIMIT_MINUTES * 60)) {
            $wait_time = (RATE_LIMIT_MINUTES * 60) - $time_diff;
            $response['message'] = "Por favor espera " . ceil($wait_time / 60) . " minuto(s) antes de enviar otro mensaje.";
            http_response_code(429);
            echo json_encode($response);
            exit;
        }
    }
}

// Validar y sanitizar datos de entrada
$nombre = isset($_POST['nombre']) ? trim(htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8')) : '';
$apellido = isset($_POST['apellido']) ? trim(htmlspecialchars($_POST['apellido'], ENT_QUOTES, 'UTF-8')) : '';
$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL) : '';
$telefono = isset($_POST['telefono']) ? trim(htmlspecialchars($_POST['telefono'], ENT_QUOTES, 'UTF-8')) : '';
$asunto = isset($_POST['asunto']) ? trim(htmlspecialchars($_POST['asunto'], ENT_QUOTES, 'UTF-8')) : '';
$mensaje = isset($_POST['mensaje']) ? trim(htmlspecialchars($_POST['mensaje'], ENT_QUOTES, 'UTF-8')) : '';

// Validaciones
$errors = [];

if (empty($nombre) || strlen($nombre) < 2) {
    $errors[] = 'El nombre es requerido y debe tener al menos 2 caracteres';
}

if (empty($apellido) || strlen($apellido) < 2) {
    $errors[] = 'El apellido es requerido y debe tener al menos 2 caracteres';
}

if (!$email) {
    $errors[] = 'El email no es válido';
}

if (empty($mensaje) || strlen($mensaje) < 10) {
    $errors[] = 'El mensaje es requerido y debe tener al menos 10 caracteres';
}

if (strlen($mensaje) > MAX_MESSAGE_LENGTH) {
    $errors[] = 'El mensaje es demasiado largo (máximo ' . MAX_MESSAGE_LENGTH . ' caracteres)';
}

// Validación simple de spam (honeypot)
if (isset($_POST['website']) && !empty($_POST['website'])) {
    $errors[] = 'Solicitud inválida';
}

// CSRF Protection
if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    $errors[] = 'Token CSRF inválido.';
}

// Captcha Validation
if (isset($_SESSION['captcha_answer']) && isset($_POST['captcha'])) {
    $user_answer = strtolower(trim($_POST['captcha']));
    $correct_answer = strtolower(trim($_SESSION['captcha_answer']));
    if ($user_answer !== $correct_answer) {
        $errors[] = 'Respuesta CAPTCHA incorrecta.';
    }
} else {
    $errors[] = 'CAPTCHA no proporcionado o sesión expirada.';
}

// Si hay errores, devolver
if (!empty($errors)) {
    $response['message'] = implode('. ', $errors);
    http_response_code(400);
    echo json_encode($response);
    exit;
}

// Regenerate CSRF token after successful validation to prevent reuse
unset($_SESSION['csrf_token']);
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

// Unset captcha answer after successful validation
unset($_SESSION['captcha_answer']);

// Crear instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USERNAME;
    $mail->Password = SMTP_PASSWORD;
    $mail->SMTPSecure = SMTP_ENCRYPTION === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = SMTP_PORT;
    $mail->CharSet = 'UTF-8';

    // Remitente y destinatario
    $mail->setFrom(EMAIL_FROM, EMAIL_FROM_NAME);
    $mail->addAddress(EMAIL_TO, EMAIL_TO_NAME);
    $mail->addReplyTo($email, "$nombre $apellido");

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = "Nuevo mensaje de contacto: $asunto";

    // Cuerpo del mensaje con mejor formato
    $body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #f4f4f4; padding: 15px; border-radius: 5px; margin-bottom: 20px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #555; }
            .value { color: #333; }
            .message-box { background-color: #f9f9f9; padding: 15px; border-left: 4px solid #007bff; margin-top: 20px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Nuevo mensaje del formulario de contacto</h2>
            </div>
            <div class='field'>
                <span class='label'>Nombre:</span>
                <span class='value'>$nombre $apellido</span>
            </div>
            <div class='field'>
                <span class='label'>Correo electrónico:</span>
                <span class='value'><a href='mailto:$email'>$email</a></span>
            </div>
            <div class='field'>
                <span class='label'>Teléfono:</span>
                <span class='value'>$telefono</span>
            </div>
            <div class='field'>
                <span class='label'>Asunto:</span>
                <span class='value'>$asunto</span>
            </div>
            <div class='message-box'>
                <div class='label'>Mensaje:</div>
                <p class='value'>" . nl2br($mensaje) . "</p>
            </div>
            <hr style='margin-top: 30px; border: none; border-top: 1px solid #ddd;'>
            <p style='font-size: 12px; color: #999;'>
                Este correo fue enviado desde el formulario de contacto de AppNet Developer<br>
                IP: " . $_SERVER['REMOTE_ADDR'] . "<br>
                Fecha: " . date('d/m/Y H:i:s') . "
            </p>
        </div>
    </body>
    </html>
    ";

    $mail->Body = $body;

    // Versión texto plano
    $mail->AltBody = "Nombre: $nombre $apellido\nCorreo: $email\nTeléfono: $telefono\nAsunto: $asunto\n\nMensaje:\n$mensaje";

    // Enviar
    $mail->send();

    // Guardar timestamp del último envío
    if (ENABLE_RATE_LIMIT) {
        $_SESSION[$last_submit_key] = time();
    }

    $response['success'] = true;
    $response['message'] = 'Correo enviado exitosamente. Nos pondremos en contacto contigo pronto.';
    http_response_code(200);

} catch (Exception $e) {
    $response['message'] = 'Error al enviar el correo. Por favor intenta nuevamente más tarde.';
    // Log del error (no mostrar detalles técnicos al usuario)
    error_log("Error PHPMailer: {$mail->ErrorInfo}");
    http_response_code(500);
}

// Devolver respuesta en JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
