<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include language configuration first
require_once __DIR__ . '/languages/config.php';

// Include header after setting up translations and variables
require_once __DIR__ . '/header.php';

// Load the appropriate language file
$lang_file = __DIR__ . '/languages/' . $current_lang . '.php';
if (file_exists($lang_file)) {
    require_once $lang_file;
} else {
    // Fallback to default language if current language file doesn't exist
    require_once __DIR__ . '/languages/' . $default_language . '.php';
}

// Function to translate text
if (!function_exists('__')) {
    function __($key, $default = '') {
        global $lang;
        return isset($lang[$key]) ? $lang[$key] : ($default ?: $key);
    }
}

// Set default timezone
date_default_timezone_set('Europe/Madrid');

// Load environment variables
$envFile = __DIR__ . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);
        if (!array_key_exists($name, $_ENV)) {
            $_ENV[$name] = $value;
        }
        if (!array_key_exists($name, $_SERVER)) {
            $_SERVER[$name] = $value;
        }
        putenv("$name=$value");
    }
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Set page title and CSS
$page_title = __('contact_page_title', 'Contact Us');
$additional_css = 'assets/css/contact.css';
$meta_description = __('contact_meta_description', 'Contact us for any inquiries or support. We are here to help you with your needs.');
$meta_keywords = 'contact, support, help, inquiry, ' . $available_languages[$current_lang]['site_name'];

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $nombre = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre']), ENT_QUOTES, 'UTF-8') : '';
    $apellido = isset($_POST['apellido']) ? htmlspecialchars(trim($_POST['apellido']), ENT_QUOTES, 'UTF-8') : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $telefono = isset($_POST['telefono']) ? htmlspecialchars(trim($_POST['telefono']), ENT_QUOTES, 'UTF-8') : '';
    $asunto = isset($_POST['asunto']) ? htmlspecialchars(trim($_POST['asunto']), ENT_QUOTES, 'UTF-8') : '';
    $mensaje = isset($_POST['mensaje']) ? htmlspecialchars(trim($_POST['mensaje']), ENT_QUOTES, 'UTF-8') : '';
    $captcha = isset($_POST['captcha']) ? trim($_POST['captcha']) : '';

    // Validate required fields
    if (empty($nombre) || empty($email) || empty($asunto) || empty($mensaje)) {
        $message = __('contact_error_required_fields', 'Please fill in all required fields.');
        echo "<script>alert('$message'); window.location.href='contact.php';</script>";
        exit;
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = __('contact_error_invalid_email', 'Please enter a valid email address.');
        echo "<script>alert('$message'); window.location.href='contact.php';</script>";
        exit;
    }

    // Verify CAPTCHA
    $valid_answers = [
        'security_question_1' => 'paris',
        'security_question_2' => 'spain',
        'security_question_3' => 'blue',
        'security_question_4' => 'yes',
        'security_question_5' => 'no'
    ];
    
    $question_id = $_POST['question_id'] ?? '';
    $user_answer = strtolower(trim($captcha));
    
    if (!isset($valid_answers[$question_id]) || $valid_answers[$question_id] !== $user_answer) {
        $message = __('contact_captcha_error');
        echo "<script>alert('$message'); window.location.href='contact.php';</script>";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP desde variables de entorno
        $mail->isSMTP();
        $mail->Host = getenv('SMTP_HOST') ?: 'smtp-pulse.com';
        $mail->SMTPAuth = true;
        $mail->Username = getenv('SMTP_USERNAME') ?: ''; // Configurar en .env
        $mail->Password = getenv('SMTP_PASSWORD') ?: ''; // Configurar en .env
        $mail->SMTPSecure = getenv('SMTP_SECURE') === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = (int)(getenv('SMTP_PORT') ?: 2525);

        // Habilitar el modo de depuración
       // $mail->SMTPDebug = 2; // Cambia a 3 para más detalles
        //$mail->Debugoutput = 'html';

        // Remitente y destinatario
        $fromEmail = getenv('SMTP_FROM_EMAIL') ?: 'contacto@' . $_SERVER['HTTP_HOST'];
        $fromName = getenv('SMTP_FROM_NAME') ?: 'Appnet';
        // Set email content with translations
        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($fromEmail, $fromName);
        $mail->addReplyTo($email, "$nombre $apellido");
        
        // Set email subject and body with translations
        $mail->isHTML(true);
        $mail->Subject = __('contact_email_subject') . ": " . html_entity_decode($asunto);
        
        // Build HTML email body with proper escaping
        $emailBody = "<html><body style='font-family: Arial, sans-serif; line-height: 1.6;'>";
        $emailBody .= "<h2>" . __('contact_form_new_message', 'New Contact Form Submission') . "</h2>";
        $emailBody .= "<p><strong>" . __('contact_form_name', 'Name') . ":</strong> " . nl2br(htmlspecialchars($nombre . ' ' . $apellido)) . "</p>";
        $emailBody .= "<p><strong>" . __('contact_form_email', 'Email') . ":</strong> " . htmlspecialchars($email) . "</p>";
        
        if (!empty($telefono)) {
            $emailBody .= "<p><strong>" . __('contact_form_phone', 'Phone') . ":</strong> " . htmlspecialchars($telefono) . "</p>";
        }
        
        $emailBody .= "<p><strong>" . __('contact_form_subject', 'Subject') . ":</strong> " . htmlspecialchars($asunto) . "</p>";
        $emailBody .= "<p><strong>" . __('contact_form_message', 'Message') . ":</strong></p>";
        $emailBody .= "<p>" . nl2br(htmlspecialchars($mensaje)) . "</p>";
        $emailBody .= "<p>--<br>" . __('contact_email_sent_from', 'This email was sent from the contact form at') . " " . htmlspecialchars($_SERVER['HTTP_HOST']) . "</p>";
        $emailBody .= "</body></html>";
        
        $mail->Body = $emailBody;
        
        // Send plain text version as well
        $mail->AltBody = strip_tags(str_replace(["<br>", "</p>", "<p>"], ["\n", "\n\n", ""], $emailBody));

        // Send the email
        if ($mail->send()) {
            $message = __('contact_success_message');
            // Clear form on success
            $nombre = $apellido = $email = $telefono = $asunto = $mensaje = '';
        } else {
            throw new Exception($mail->ErrorInfo);
        }
    } catch (Exception $e) {
        error_log('Email sending failed: ' . $e->getMessage());
        $message = __('contact_error_message') . (getenv('APP_DEBUG') ? ': ' . $e->getMessage() : '');
    }
}
?>

    <!-- Muestra el mensaje después de enviar el formulario -->
    <script>
        <?php if ($message): ?>
            alert("<?php echo addslashes($message); ?>");
        <?php endif; ?>
    </script>

                        <!--=====HERO AREA START=======-->
                        <div class="common-hero">
                          <div class="container">
                            <div class="row align-items-center text-center">
                              <div class="col-lg-8 m-auto">
                                <div class="main-heading">
                                  <h1><?php echo __('contact_page_title'); ?></h1>
                                  <div class="space16"></div>
                                  <nav class="breadcrumb-nav">
                                    <a href="index.php" class="breadcrumb-item">
                                      <i class="fa-solid fa-house"></i>
                                      <?php echo __('home'); ?>
                                    </a>
                                    <span class="breadcrumb-separator">
                                      <i class="fa-solid fa-chevron-right"></i>
                                    </span>
                                    <span class="breadcrumb-item active">
                                      <?php echo __('contact_page_title'); ?>
                                    </span>
                                  </nav>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                
                        <!--=====HERO AREA END=======-->
                
                        <section class="hero10-benar">
                          <div class="container-fluid p-0">
                            <div class="row">
                              <div class="col-12">
                                <div class="marquee-wrap marquee-wrap-inner">
                                  <div class="marquee-text">
                  
                                    <div class="brand-single-box">
                                    <img src="assets/img/logo/slider-logo1.png" alt="">
                                  </div>
                  
                                  <div class="brand-single-box">
                                      <img src="assets/img/logo/slider-logo2.png" alt="">
                                  </div>
                  
                                  <div class="brand-single-box">
                                      <img src="assets/img/logo/slider-logo3.png" alt="">
                                  </div>
                  
                                  <div class="brand-single-box">
                                      <img src="assets/img/logo/slider-logo4.png" alt="">
                                  </div>
                  
                                  <div class="brand-single-box">
                                      <img src="assets/img/logo/slider-logo5.png" alt="">
                                  </div>
                  
                                  <div class="brand-single-box">
                                      <img src="assets/img/logo/slider-logo6.png" alt="">
                                  </div>
                  
                                  <div class="brand-single-box">
                                      <img src="assets/img/logo/slider-logo7.png" alt="">
                                  </div>
                
                                  <div class="brand-single-box">
                                      <img src="assets/img/logo/slider-logo1.png" alt="">
                                    </div>
                    
                                    <div class="brand-single-box">
                                        <img src="assets/img/logo/slider-logo2.png" alt="">
                                    </div>
                    
                                    <div class="brand-single-box">
                                        <img src="assets/img/logo/slider-logo3.png" alt="">
                                    </div>
                    
                                    <div class="brand-single-box">
                                        <img src="assets/img/logo/slider-logo4.png" alt="">
                                    </div>
                    
                                    <div class="brand-single-box">
                                        <img src="assets/img/logo/slider-logo5.png" alt="">
                                    </div>
                    
                                    <div class="brand-single-box">
                                        <img src="assets/img/logo/slider-logo6.png" alt="">
                                    </div>
                    
                                    <div class="brand-single-box">
                                        <img src="assets/img/logo/slider-logo7.png" alt="">
                                    </div>
                
                                    <div class="brand-single-box">
                                      <img src="assets/img/logo/slider-logo4.png" alt="">
                                  </div>
                  
                                  <div class="brand-single-box">
                                      <img src="assets/img/logo/slider-logo5.png" alt="">
                                  </div>
                  
                                  <div class="brand-single-box">
                                      <img src="assets/img/logo/slider-logo6.png" alt="">
                                  </div>
                  
                                  <div class="brand-single-box">
                                      <img src="assets/img/logo/slider-logo7.png" alt="">
                                  </div>
                
                                  <div class="brand-single-box">
                                      <img src="assets/img/logo/slider-logo1.png" alt="">
                                    </div>
                    
                                    <div class="brand-single-box">
                                        <img src="assets/img/logo/slider-logo2.png" alt="">
                                    </div>
                    
                                    <div class="brand-single-box">
                                        <img src="assets/img/logo/slider-logo3.png" alt="">
                                    </div>
                    
                                    <div class="brand-single-box">
                                        <img src="assets/img/logo/slider-logo4.png" alt="">
                                    </div>
                    
                                    <div class="brand-single-box">
                                        <img src="assets/img/logo/slider-logo5.png" alt="">
                                    </div>
                    
                                    <div class="brand-single-box">
                                        <img src="assets/img/logo/slider-logo6.png" alt="">
                                    </div>
                    
                                    <div class="brand-single-box">
                                        <img src="assets/img/logo/slider-logo7.png" alt="">
                                    </div>
                
                  
                                  </div>
                                </div>
                              </div>
                            </div>
                  
                            <div class="slider-after"></div>
                          </div>
                        </section>

                        <div class="space100"></div>
        

        <!--=====CONTACT AREA START=======-->

        <div class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-boxs">
                            <div class="heading1">
                                <h2><?php echo __('contact_information_title', 'Información de Contacto'); ?></h2>
                                <div class="space16"></div>
                                <p><?php echo __('contact_information_description', 'Si tienes alguna pregunta o necesitas más información, no dudes en contactarnos.'); ?></p>
                            </div>
                            <div class="contact-info">
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h4><?php echo __('contact_location_title', 'Ubicación'); ?></h4>
                                        <p><?php echo __('contact_location_address', 'Murcia, España'); ?></p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="fa-solid fa-phone-volume"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h4><?php echo __('contact_phone_title', 'Llámanos'); ?></h4>
                                        <p><a href="tel:+34600000000"><?php echo getenv('CONTACT_PHONE') ?: '+34 600 000 000'; ?></a></p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="contact-text">
                                        <h4><?php echo __('contact_email_title', 'Email'); ?></h4>
                                        <p><a href="mailto:<?php echo getenv('CONTACT_EMAIL') ?: 'info@appnetdeveloper.com'; ?>"><?php echo getenv('CONTACT_EMAIL') ?: 'info@appnetdeveloper.com'; ?></a></p>
                                    </div>
                                </div>
                            </div>
                            <h3><?php echo __('contact_hours_title', 'Horario de atención'); ?></h3>
                            <p><?php echo __('contact_hours_weekdays', 'Lunes - Viernes'); ?>: 9:00 - 18:00<br><?php echo __('contact_hours_saturday', 'Sábado'); ?>: 10:00 - 14:00<br><?php echo __('contact_hours_sunday', 'Domingo'); ?>: <?php echo __('contact_hours_closed', 'Cerrado'); ?></p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-form-details">
                            <?php if (!empty($message)): ?>
                                <div class="alert alert-<?php echo strpos($message, 'Error') !== false ? 'danger' : 'success'; ?>">
                                    <?php echo $message; ?>
                                </div>
                            <?php endif; ?>
                            <form action="contact.php" method="post" id="contactForm">
                                <h2><?php echo __('contact_form_title', 'Contáctanos'); ?></h2>
                                <p><?php echo __('contact_form_description', 'Rellena el formulario y nos pondremos en contacto contigo lo antes posible.'); ?></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nombre"><?php echo __('contact_form_first_name', 'Nombre'); ?></label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="apellido"><?php echo __('contact_form_last_name', 'Apellido'); ?></label>
                                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email"><?php echo __('contact_form_email', 'Correo electrónico'); ?></label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="telefono"><?php echo __('contact_form_phone', 'Teléfono'); ?></label>
                                            <input type="tel" class="form-control" id="telefono" name="telefono" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="asunto"><?php echo __('contact_form_subject', 'Asunto'); ?></label>
                                            <input type="text" class="form-control" id="asunto" name="asunto" required>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="mensaje"><?php echo __('contact_form_message', 'Mensaje'); ?></label>
                                            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <?php
                                            // Generate a random security question
                                            $security_questions = [
                                                'security_question_1' => __('security_question_1', '¿Cuál es la capital de Francia?'),
                                                'security_question_2' => __('security_question_2', '¿En qué país se encuentra Barcelona?'),
                                                'security_question_3' => __('security_question_3', '¿De qué color es el cielo despejado?'),
                                                'security_question_4' => __('security_question_4', '¿Es el agua mojada? (sí/no)'),
                                                'security_question_5' => __('security_question_5', '¿Es el fuego frío? (sí/no)')
                                            ];
                                            $question_id = array_rand($security_questions);
                                            $question = $security_questions[$question_id];
                                            ?>
                                            <input type="hidden" name="question_id" value="<?php echo $question_id; ?>">
                                            <label for="captcha"><?php echo $question; ?></label>
                                            <input type="text" class="form-control" id="captcha" name="captcha" required>
                                            <small class="form-text text-muted"><?php echo __('contact_captcha_help', 'Responde en minúsculas y sin acentos'); ?></small>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary" id="submitBtn">
                                            <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                            <?php echo __('contact_form_submit', 'Enviar Mensaje'); ?>
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=====CONACT AREA END=======-->
        <div class="space100"></div>

        <div class="contact-map-page">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3189.1234567890123!2d-1.1361234567890123!3d37.7981234567890123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDQ3JzU5LjMiTiAxwrAwNycxMy4yIlc!5e0!3m2!1ses!2ses!4v1673751720794!5m2!1ses!2ses&z=10" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        <!--=====CTA AREA START=======-->

        <div class="cta">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <div class="heading1-w">
                  <h2>En AppNet Developer, Estamos Comprometidos con los Negocios</h2>
                  <div class="space16"></div>
                  <p>Da el primer paso hacia el logro de tus objetivos empresariales contactándonos hoy. Programa una consulta con uno de nuestros especialistas en TI para discutir tus objetivos y explorar cómo nuestras soluciones innovadoras pueden impulsar tu negocio.</p>
                </div>
              </div>

              <div class="col-lg-5">
                <div class="buttons">
                  <a class="cta-btn1" href="service.php">Solicitar una Consulta <span><i class="fa-solid fa-arrow-right"></i></span></a>
                  <a class="cta-btn2" href="service.php">Explorar Soluciones <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--=====CTA AREA END=======-->

        <script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const spinner = submitBtn.querySelector('.spinner-border');
        
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Show loading state
                submitBtn.disabled = true;
                spinner.classList.remove('d-none');
                
                // Simple form validation
                let isValid = true;
                const requiredFields = contactForm.querySelectorAll('[required]');
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });
                
                // CAPTCHA validation
                const captchaField = contactForm.querySelector('[name="captcha"]');
                if (captchaField && captchaField.value.trim() !== '6') {
                    captchaField.classList.add('is-invalid');
                    captchaField.nextElementSibling.textContent = '<?php echo __("contact_captcha_error"); ?>';
                    isValid = false;
                } else if (captchaField) {
                    captchaField.classList.remove('is-invalid');
                }
                
                if (!isValid) {
                    submitBtn.disabled = false;
                    spinner.classList.add('d-none');
                    return;
                }
                
                // If all validations pass, submit the form
                this.submit();
            });
            
            // Remove error class when user starts typing
            const formInputs = contactForm.querySelectorAll('input, textarea');
            formInputs.forEach(input => {
                input.addEventListener('input', function() {
                    if (this.value.trim()) {
                        this.classList.remove('is-invalid');
                    }
                });
            });
        }
    });
    </script>
    
    <?php include "footer.php"; ?>







