<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate CSRF token if not already set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// PHPMailer related code commented out for debugging purposes
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

// Set page title and CSS
$page_title = __('contact_page_title', 'Contact Us');
$additional_css = 'assets/css/contact.css';
$meta_description = __('contact_meta_description', 'Contact us for any inquiries or support. We are here to help you with your needs.');
$meta_keywords = 'contact, support, help, inquiry, ' . $available_languages[$current_lang]['site_name'];

$message = '';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Validate and sanitize form inputs
//     $nombre = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre']), ENT_QUOTES, 'UTF-8') : '';
//     $apellido = isset($_POST['apellido']) ? htmlspecialchars(trim($_POST['apellido']), ENT_QUOTES, 'UTF-8') : '';
//     $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
//     $telefono = isset($_POST['telefono']) ? htmlspecialchars(trim($_POST['telefono']), ENT_QUOTES, 'UTF-8') : '';
//     $asunto = isset($_POST['asunto']) ? htmlspecialchars(trim($_POST['asunto']), ENT_QUOTES, 'UTF-8') : '';
//     $mensaje = isset($_POST['mensaje']) ? htmlspecialchars(trim($_POST['mensaje']), ENT_QUOTES, 'UTF-8') : '';

//     // Validate required fields
//     if (empty($nombre) || empty($email) || empty($asunto) || empty($mensaje)) {
//         $message = __('contact_error_required_fields', 'Please fill in all required fields.');
//         echo "<script>alert('$message'); window.location.href='contact.php';</script>";
//         exit;
//     }

//     // Validate email
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $message = __('contact_error_invalid_email', 'Please enter a valid email address.');
//         echo "<script>alert('$message'); window.location.href='contact.php';</script>";
//         exit;
//     }

//     $mail = new PHPMailer(true);

//     try {
//         // Configuración del servidor SMTP desde variables de entorno
//         $mail->isSMTP();
//         $mail->Host = getenv('SMTP_HOST') ?: 'smtp-pulse.com';
//         $mail->SMTPAuth = true;
//         $mail->Username = getenv('SMTP_USERNAME') ?: ''; // Configurar en .env
//         $mail->Password = getenv('SMTP_PASSWORD') ?: ''; // Configurar en .env
//         $mail->SMTPSecure = getenv('SMTP_SECURE') === 'ssl' ? PHPMailer::ENCRYPTION_SMTPS : PHPMailer::ENCRYPTION_STARTTLS;
//         $mail->Port = (int)(getenv('SMTP_PORT') ?: 2525);

//         // Habilitar el modo de depuración
//        // $mail->SMTPDebug = 2; // Cambia a 3 para más detalles
//         //$mail->Debugoutput = 'html';

//         // Remitente y destinatario
//         $fromEmail = getenv('SMTP_FROM_EMAIL') ?: 'contacto@' . $_SERVER['HTTP_HOST'];
//         $fromName = getenv('SMTP_FROM_NAME') ?: 'Appnet';
//         // Set email content with translations
//         $mail->setFrom($fromEmail, $fromName);
//         $mail->addAddress($fromEmail, $fromName);
//         $mail->addReplyTo($email, "$nombre $apellido");
        
//         // Set email subject and body with translations
//         $mail->isHTML(true);
//         $mail->Subject = __('contact_email_subject') . ": " . html_entity_decode($asunto);
        
//         // Build HTML email body with proper escaping
//         $emailBody = "<html><body style='font-family: Arial, sans-serif; line-height: 1.6;'>";
//         $emailBody .= "<h2>" . __('contact_form_new_message', 'New Contact Form Submission') . "</h2>";
//         $emailBody .= "<p><strong>" . __('contact_form_name', 'Name') . ":</strong> " . nl2br(htmlspecialchars($nombre . ' ' . $apellido)) . "</p>";
//         $emailBody .= "<p><strong>" . __('contact_form_email', 'Email') . ":</strong> " . htmlspecialchars($email) . "</p>";
        
//         if (!empty($telefono)) {
//             $emailBody .= "<p><strong>" . __('contact_form_phone', 'Phone') . ":</strong> " . htmlspecialchars($telefono) . "</p>";
//         }
        
//         $emailBody .= "<p><strong>" . __('contact_form_subject', 'Subject') . ":</strong> " . htmlspecialchars($asunto) . "</p>";
//         $emailBody .= "<p><strong>" . __('contact_form_message', 'Message') . ":</strong></p>";
//         $emailBody .= "<p>" . nl2br(htmlspecialchars($mensaje)) . "</p>";
//         $emailBody .= "<p>--<br>" . __('contact_email_sent_from', 'This email was sent from the contact form at') . " " . htmlspecialchars($_SERVER['HTTP_HOST']) . "</p>";
//         $emailBody .= "</body></html>";
        
//         $mail->Body = $emailBody;
        
//         // Send plain text version as well
//         $mail->AltBody = strip_tags(str_replace(["<br>", "</p>", "<p>"], ["\n", "\n\n", ""], $emailBody));

//         // Send the email
//         if ($mail->send()) {
//             $message = __('contact_success_message');
//             // Clear form on success
//             $nombre = $apellido = $email = $telefono = $asunto = $mensaje = '';
//         } else {
//             throw new Exception($mail->ErrorInfo);
//         }
//     } catch (Exception $e) {
//         error_log('Email sending failed: ' . $e->getMessage());
//         $message = __('contact_error_message') . (getenv('APP_DEBUG') ? ': ' . $e->getMessage() : '');
//     }
// }

include "includes/header.php";
?>

    <!-- Muestra el mensaje después de enviar el formulario -->
    <script>
        <?php if ($message): ?>
            alert("<?php echo addslashes($message); ?>");
        <?php endif; ?>
    </script>

    <!-- Hero Section Modernizada -->
    <section class="hero-modern" id="hero">
      <div class="hero-background">
        <div class="hero-gradient"></div>
        <div class="hero-particles"></div>
      </div>
      <div class="container">
        <div class="row align-items-center min-vh-100">
          <div class="col-lg-12 hero-content text-center">
            <div class="hero-badge" data-aos="fade-down" data-aos-duration="800">
              <span class="badge-icon"><i class="fas fa-envelope"></i></span>
              <span><?php echo __('contact_hero_subtitle', 'Get in Touch'); ?></span>
            </div>
            <h1 class="hero-title" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
              <?php echo __('contact_page_title'); ?>
            </h1>
            <p class="hero-description" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
              <?php echo __('contact_hero_description', 'We are here to help you with your technology needs. Reach out to us and let\'s create something amazing together.'); ?>
            </p>
            <div class="hero-actions" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">
              <a href="#contact-form" class="btn btn-primary btn-modern me-3 ripple-effect hover-lift">
                <span><?php echo __('contact_form_button', 'Send Message'); ?></span>
                <i class="fas fa-paper-plane ms-2"></i>
              </a>
              <a href="tel:+34619929305" class="btn btn-outline-light btn-modern ripple-effect hover-lift">
                <i class="fas fa-phone me-2"></i>
                <span><?php echo __('call_now', 'Call Now'); ?></span>
              </a>
            </div>
            
            <div class="hero-stats" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
              <div class="stat-item">
                <div class="stat-number">24/7</div>
                <div class="stat-label"><?php echo __('support_available'); ?></div>
              </div>
              <div class="stat-item">
                <div class="stat-number">< 1h</div>
                <div class="stat-label"><?php echo __('response_time', 'Response Time'); ?></div>
              </div>
              <div class="stat-item">
                <div class="stat-number">100%</div>
                <div class="stat-label"><?php echo __('client_satisfaction'); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección de Contacto Modernizada -->
    <section class="contact-modern py-5" id="contact-form">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
            <div class="section-header">
              <div class="section-badge">
                <span><?php echo __('contact_section_title', 'Contact Us'); ?></span>
              </div>
              <h2 class="section-title"><?php echo __('contact_main_title', 'Let\'s Work Together'); ?></h2>
              <p class="section-description"><?php echo __('contact_main_description', 'Have a project in mind? We\'d love to hear about it. Send us a message and we\'ll respond as soon as possible.'); ?></p>
            </div>
          </div>
        </div>
        
        <div class="row g-4">
          <!-- Información de Contacto -->
          <div class="col-lg-4" data-aos="fade-right" data-aos-duration="800">
            <div class="contact-info-modern parallax-element gentle-float">
              <div class="contact-info-header">
                <div class="contact-info-icon">
                  <i class="fas fa-info-circle"></i>
                </div>
                <h3><?php echo __('contact_information_title', 'Contact Information'); ?></h3>
              </div>
              
              <div class="contact-info-body">
                <div class="contact-info-item hover-lift">
                  <div class="info-icon">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                  <div class="info-content">
                    <h4><?php echo __('contact_location_title', 'Location'); ?></h4>
                    <p><?php echo __('contact_location_address', 'Murcia, Spain'); ?></p>
                  </div>
                </div>
                
                <div class="contact-info-item hover-lift">
                  <div class="info-icon">
                    <i class="fas fa-phone-alt"></i>
                  </div>
                  <div class="info-content">
                    <h4><?php echo __('contact_phone_title', 'Phone'); ?></h4>
                    <p><a href="tel:+34619929305"><?php echo getenv('CONTACT_PHONE') ?: '+34 619 929 305'; ?></a></p>
                  </div>
                </div>
                
                <div class="contact-info-item hover-lift">
                  <div class="info-icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                  <div class="info-content">
                    <h4><?php echo __('contact_email_title', 'Email'); ?></h4>
                    <p><a href="mailto:<?php echo getenv('CONTACT_EMAIL') ?: 'info@appnet.dev'; ?>"><?php echo getenv('CONTACT_EMAIL') ?: 'info@appnet.dev'; ?></a></p>
                  </div>
                </div>
                
                <div class="contact-info-item hover-lift">
                  <div class="info-icon">
                    <i class="fas fa-clock"></i>
                  </div>
                  <div class="info-content">
                    <h4><?php echo __('contact_hours_title', 'Business Hours'); ?></h4>
                    <p><?php echo __('contact_hours_weekdays', 'Monday - Friday'); ?>: 9:00 - 18:00<br>
                       <?php echo __('contact_hours_saturday', 'Saturday'); ?>: 10:00 - 14:00<br>
                       <?php echo __('contact_hours_sunday', 'Sunday'); ?>: <?php echo __('contact_hours_closed', 'Closed'); ?></p>
                  </div>
                </div>
              </div>
              
              <!-- Botones de WhatsApp y Telegram -->
              <div class="contact-social-buttons">
                <a href="https://wa.me/34619929305" class="social-button whatsapp ripple-effect hover-lift" target="_blank" rel="noopener">
                  <i class="fab fa-whatsapp"></i>
                  <span>WhatsApp</span>
                </a>
                <a href="https://t.me/+34619929305" class="social-button telegram ripple-effect hover-lift" target="_blank" rel="noopener">
                  <i class="fab fa-telegram-plane"></i>
                  <span>Telegram</span>
                </a>
              </div>
            </div>
          </div>
          
          <!-- Formulario de Contacto -->
          <div class="col-lg-8" data-aos="fade-left" data-aos-duration="800">
            <div class="contact-form-modern">
              <?php if (!empty($message)): ?>
                <div class="alert alert-<?php echo strpos($message, 'Error') !== false ? 'danger' : 'success'; ?> alert-modern">
                  <?php echo $message; ?>
                </div>
              <?php endif; ?>
              
              <form action="contact.php" method="post" id="contactForm" class="contact-form">
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-group-modern">
                      <label for="nombre" class="form-label"><?php echo __('contact_form_first_name', 'First Name'); ?></label>
                      <div class="input-group">
                        <span class="input-icon"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control typing-effect" id="nombre" name="nombre" required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group-modern">
                      <label for="apellido" class="form-label"><?php echo __('contact_form_last_name', 'Last Name'); ?></label>
                      <div class="input-group">
                        <span class="input-icon"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control typing-effect" id="apellido" name="apellido" required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group-modern">
                      <label for="email" class="form-label"><?php echo __('contact_form_email', 'Email'); ?></label>
                      <div class="input-group">
                        <span class="input-icon"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control typing-effect" id="email" name="email" required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group-modern">
                      <label for="telefono" class="form-label"><?php echo __('contact_form_phone', 'Phone'); ?></label>
                      <div class="input-group">
                        <span class="input-icon"><i class="fas fa-phone"></i></span>
                        <input type="tel" class="form-control typing-effect" id="telefono" name="telefono">
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div class="form-group-modern">
                      <label for="asunto" class="form-label"><?php echo __('contact_form_subject', 'Subject'); ?></label>
                      <div class="input-group">
                        <span class="input-icon"><i class="fas fa-heading"></i></span>
                        <input type="text" class="form-control typing-effect" id="asunto" name="asunto" required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div class="form-group-modern">
                      <label for="mensaje" class="form-label"><?php echo __('contact_form_message', 'Message'); ?></label>
                      <div class="input-group">
                        <span class="input-icon"><i class="fas fa-comment-alt"></i></span>
                        <textarea class="form-control typing-effect" id="mensaje" name="mensaje" rows="5" required></textarea>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <div class="form-group-modern">
                      <?php
                      // Generate a random security question
                      $security_questions = [
                          'security_question_1' => __('security_question_1', 'What is the capital of France?'),
                          'security_question_2' => __('security_question_2', 'In which country is Barcelona?'),
                          'security_question_3' => __('security_question_3', 'What color is a clear sky?'),
                          'security_question_4' => __('security_question_4', 'Is water wet? (yes/no)'),
                          'security_question_5' => __('security_question_5', 'Is fire cold? (yes/no)')
                      ];
                      $question_id = array_rand($security_questions);
                      $question = $security_questions[$question_id];
                      ?>
                      <input type="hidden" name="question_id" value="<?php echo $question_id; ?>">
                      <label for="captcha" class="form-label"><?php echo $question; ?></label>
                      <div class="input-group">
                        <span class="input-icon"><i class="fas fa-shield-alt"></i></span>
                        <input type="text" class="form-control typing-effect" id="captcha" name="captcha" required>
                      </div>
                      <small class="form-text text-muted"><?php echo __('contact_captcha_help', 'Answer in lowercase and without accents'); ?></small>
                    </div>
                  </div>
                  
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-modern btn-lg w-100 ripple-effect hover-lift subtle-pulse" id="submitBtn">
                      <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                      <span class="btn-text"><?php echo __('contact_form_submit', 'Send Message'); ?></span>
                      <i class="fas fa-paper-plane ms-2"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección del Mapa Modernizada -->
    <section class="map-modern">
      <div class="map-container">
        <div class="map-header" data-aos="fade-up" data-aos-duration="800">
          <h2><?php echo __('find_us_title', 'Find Us'); ?></h2>
          <p><?php echo __('find_us_description', 'Visit our office in Murcia, Spain. We\'d be happy to meet you in person.'); ?></p>
        </div>
        <div class="map-wrapper" data-aos="fade-up" data-aos-duration="900">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3189.1234567890123!2d-1.1361234567890123!3d37.7981234567890123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDQ3JzU5LjMiTiAxwrAwNycxMy4yIlc!5e0!3m2!1ses!2ses!4v1673751720794!5m2!1ses!2ses&z=10" 
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            class="map-iframe">
          </iframe>
        </div>
      </div>
    </section>

    <!-- Sección CTA Modernizada -->
    <section class="cta-modern py-5">
      <div class="container">
        <div class="cta-content" data-aos="fade-up" data-aos-duration="800">
          <div class="cta-text">
            <h2><?php echo __('contact_cta_title', 'Ready to Start Your Project?'); ?></h2>
            <p><?php echo __('contact_cta_description', 'Let\'s discuss how we can help transform your business with innovative technology solutions.'); ?></p>
          </div>
          <div class="cta-actions">
            <a href="service.php" class="btn btn-primary btn-modern btn-lg me-3 ripple-effect hover-lift">
              <span><?php echo __('explore_solutions', 'Explore Solutions'); ?></span>
              <i class="fas fa-arrow-right ms-2"></i>
            </a>
            <a href="tel:+34619929305" class="btn btn-outline-light btn-modern btn-lg ripple-effect hover-lift">
              <i class="fas fa-phone me-2"></i>
              <span><?php echo __('call_now', 'Call Now'); ?></span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Estilos CSS Modernos -->
    <style>
    /* Variables de color modernas */
    :root {
      --primary-color: #4e54c8;
      --primary-dark: #3a41a0;
      --primary-light: #6b71d8;
      --secondary-color: #8f94fb;
      --accent-color: #ff6b6b;
      --success-color: #28a745;
      --danger-color: #dc3545;
      --text-dark: #2c3e50;
      --text-light: #6c757d;
      --bg-light: #f8f9fa;
      --bg-white: #ffffff;
      --border-color: #e9ecef;
      --shadow-sm: 0 2px 10px rgba(0, 0, 0, 0.08);
      --shadow-md: 0 5px 20px rgba(0, 0, 0, 0.1);
      --shadow-lg: 0 10px 40px rgba(0, 0, 0, 0.15);
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Efectos de paralaje */
    .parallax-element {
      transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    /* Microinteracciones mejoradas */
    .hover-lift {
      transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
    }

    .hover-lift:hover {
      transform: translateY(-8px) scale(1.02);
    }

    /* Efecto de ripple en botones */
    .ripple-effect {
      position: relative;
      overflow: hidden;
    }

    .ripple-effect:before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.5);
      transform: translate(-50%, -50%);
      transition: width 0.6s, height 0.6s;
    }

    .ripple-effect:active:before {
      width: 300px;
      height: 300px;
    }

    /* Efecto de typing en inputs */
    .typing-effect {
      position: relative;
    }

    .typing-effect:after {
      content: '';
      position: absolute;
      bottom: 15px;
      left: 45px;
      width: 2px;
      height: 20px;
      background: var(--primary-color);
      animation: blink 1s infinite;
      opacity: 0;
    }

    .typing-effect:focus:after {
      opacity: 1;
    }

    @keyframes blink {
      0%, 50% { opacity: 1; }
      51%, 100% { opacity: 0; }
    }

    /* Efecto de float suave */
    @keyframes gentle-float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
    }

    .gentle-float {
      animation: gentle-float 4s ease-in-out infinite;
    }

    /* Efecto de pulse sutil */
    @keyframes subtle-pulse {
      0% { box-shadow: 0 0 0 0 rgba(78, 84, 200, 0.4); }
      70% { box-shadow: 0 0 0 10px rgba(78, 84, 200, 0); }
      100% { box-shadow: 0 0 0 0 rgba(78, 84, 200, 0); }
    }

    .subtle-pulse:hover {
      animation: subtle-pulse 2s infinite;
    }

    /* Efecto de shimmer */
    @keyframes shimmer {
      0% { background-position: -1000px 0; }
      100% { background-position: 1000px 0; }
    }

    .shimmer-effect {
      background: linear-gradient(90deg, transparent 0%, rgba(255,255,255,0.3) 50%, transparent 100%);
      background-size: 1000px 100%;
      animation: shimmer 2s infinite;
    }

    /* Hero Section Moderna */
    .hero-modern {
      position: relative;
      min-height: 80vh;
      display: flex;
      align-items: center;
      overflow: hidden;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .hero-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
    }

    .hero-gradient {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(78, 84, 200, 0.9) 0%, rgba(143, 148, 251, 0.9) 100%);
      z-index: 2;
    }

    .hero-particles {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="white" opacity="0.3"/><circle cx="80" cy="40" r="1" fill="white" opacity="0.5"/><circle cx="40" cy="80" r="1.5" fill="white" opacity="0.4"/><circle cx="60" cy="10" r="1" fill="white" opacity="0.6"/><circle cx="10" cy="60" r="2" fill="white" opacity="0.3"/></svg>');
      background-size: 200px 200px;
      animation: float 20s infinite linear;
      z-index: 3;
    }

    @keyframes float {
      0% { transform: translate(0, 0) rotate(0deg); }
      50% { transform: translate(-20px, -20px) rotate(180deg); }
      100% { transform: translate(0, 0) rotate(360deg); }
    }

    .hero-content {
      position: relative;
      z-index: 10;
      color: white;
    }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 50px;
      padding: 8px 20px;
      margin-bottom: 20px;
      font-size: 14px;
      font-weight: 500;
    }

    .badge-icon {
      margin-right: 8px;
      color: #ffd700;
    }

    .hero-title {
      font-size: 3.5rem;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 25px;
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .hero-description {
      font-size: 1.25rem;
      line-height: 1.6;
      margin-bottom: 35px;
      opacity: 0.9;
      max-width: 800px;
      margin-left: auto;
      margin-right: auto;
    }

    .hero-actions {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 50px;
    }

    .btn-modern {
      display: inline-flex;
      align-items: center;
      padding: 12px 30px;
      border-radius: 50px;
      font-weight: 600;
      text-decoration: none;
      transition: var(--transition);
      border: 2px solid transparent;
      position: relative;
      overflow: hidden;
    }

    .btn-modern:before {
      content: '';
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
      transition: left 0.5s;
    }

    .btn-modern:hover:before {
      left: 100%;
    }

    .btn-primary {
      background: var(--primary-color);
      color: white;
      border-color: var(--primary-color);
    }

    .btn-primary:hover {
      background: var(--primary-dark);
      border-color: var(--primary-dark);
      transform: translateY(-3px);
      box-shadow: var(--shadow-lg);
      color: white;
    }

    .btn-outline-light {
      background: transparent;
      color: white;
      border-color: rgba(255, 255, 255, 0.3);
    }

    .btn-outline-light:hover {
      background: rgba(255, 255, 255, 0.1);
      border-color: white;
      transform: translateY(-3px);
      box-shadow: var(--shadow-md);
      color: white;
    }

    .hero-stats {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin-top: 30px;
    }

    .stat-item {
      text-align: center;
    }

    .stat-number {
      font-size: 2.5rem;
      font-weight: 700;
      color: #ffd700;
      line-height: 1;
      margin-bottom: 5px;
    }

    .stat-label {
      font-size: 0.9rem;
      opacity: 0.8;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    /* Section Headers */
    .section-header {
      text-align: center;
      margin-bottom: 50px;
    }

    .section-badge {
      display: inline-flex;
      align-items: center;
      background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
      color: white;
      padding: 8px 20px;
      border-radius: 50px;
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 20px;
    }

    .section-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 20px;
      line-height: 1.2;
    }

    .section-description {
      font-size: 1.1rem;
      color: var(--text-light);
      max-width: 700px;
      margin: 0 auto;
      line-height: 1.6;
    }

    /* Contact Section Moderna */
    .contact-modern {
      background: var(--bg-white);
      position: relative;
      z-index: 20;
      margin-top: -80px;
      border-radius: 30px 30px 0 0;
      padding-top: 80px !important;
    }

    .contact-info-modern {
      background: var(--bg-white);
      border-radius: 20px;
      padding: 30px;
      box-shadow: var(--shadow-md);
      height: 100%;
      border: 1px solid var(--border-color);
      transition: var(--transition);
    }

    .contact-info-modern:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-lg);
    }

    .contact-info-header {
      text-align: center;
      margin-bottom: 30px;
      padding-bottom: 20px;
      border-bottom: 1px solid var(--border-color);
    }

    .contact-info-icon {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
      font-size: 32px;
      color: white;
    }

    .contact-info-header h3 {
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--text-dark);
      margin: 0;
    }

    .contact-info-item {
      display: flex;
      align-items: flex-start;
      margin-bottom: 25px;
      padding: 15px;
      background: var(--bg-light);
      border-radius: 15px;
      transition: var(--transition);
    }

    .contact-info-item:hover {
      transform: translateX(5px);
      box-shadow: var(--shadow-sm);
    }

    .info-icon {
      width: 50px;
      height: 50px;
      border-radius: 12px;
      background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      color: white;
      margin-right: 15px;
      flex-shrink: 0;
    }

    .info-content h4 {
      font-size: 1.1rem;
      font-weight: 600;
      margin-bottom: 5px;
      color: var(--text-dark);
    }

    .info-content p {
      color: var(--text-light);
      margin: 0;
      line-height: 1.5;
    }

    .info-content a {
      color: var(--primary-color);
      text-decoration: none;
      transition: var(--transition);
    }

    .info-content a:hover {
      color: var(--primary-dark);
      text-decoration: underline;
    }

    .contact-social-buttons {
      display: flex;
      gap: 15px;
      margin-top: 30px;
    }

    .social-button {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 12px 20px;
      border-radius: 50px;
      color: white;
      text-decoration: none;
      font-weight: 600;
      transition: var(--transition);
      flex: 1;
      gap: 8px;
    }

    .social-button.whatsapp {
      background: #25d366;
    }

    .social-button.whatsapp:hover {
      background: #128c7e;
      transform: translateY(-3px);
      box-shadow: var(--shadow-md);
    }

    .social-button.telegram {
      background: #0088cc;
    }

    .social-button.telegram:hover {
      background: #006699;
      transform: translateY(-3px);
      box-shadow: var(--shadow-md);
    }

    /* Formulario de Contacto Moderno */
    .contact-form-modern {
      background: var(--bg-white);
      border-radius: 20px;
      padding: 40px;
      box-shadow: var(--shadow-md);
      border: 1px solid var(--border-color);
    }

    .form-group-modern {
      margin-bottom: 25px;
    }

    .form-label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: var(--text-dark);
    }

    .input-group {
      position: relative;
      display: flex;
      align-items: stretch;
    }

    .input-icon {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      color: var(--text-light);
      z-index: 10;
      font-size: 16px;
    }

    .form-control {
      width: 100%;
      padding: 12px 15px 12px 45px;
      border: 2px solid var(--border-color);
      border-radius: 10px;
      font-size: 16px;
      transition: var(--transition);
      background: var(--bg-white);
    }

    .form-control:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 0.2rem rgba(78, 84, 200, 0.25);
      outline: none;
    }

    .form-control.is-invalid {
      border-color: var(--danger-color);
    }

    .form-text {
      font-size: 0.875rem;
      margin-top: 5px;
    }

    .alert-modern {
      border-radius: 10px;
      padding: 15px 20px;
      margin-bottom: 25px;
      border: none;
      font-weight: 500;
    }

    .alert-modern.alert-success {
      background: rgba(40, 167, 69, 0.1);
      color: var(--success-color);
    }

    .alert-modern.alert-danger {
      background: rgba(220, 53, 69, 0.1);
      color: var(--danger-color);
    }

    /* Mapa Moderno */
    .map-modern {
      background: var(--bg-light);
      padding: 80px 0;
    }

    .map-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .map-header {
      text-align: center;
      margin-bottom: 40px;
    }

    .map-header h2 {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 20px;
    }

    .map-header p {
      font-size: 1.1rem;
      color: var(--text-light);
      max-width: 600px;
      margin: 0 auto;
    }

    .map-wrapper {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: var(--shadow-lg);
      position: relative;
    }

    .map-wrapper:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(135deg, rgba(78, 84, 200, 0.1) 0%, rgba(143, 148, 251, 0.1) 100%);
      z-index: 1;
      pointer-events: none;
    }

    .map-iframe {
      width: 100%;
      height: 450px;
      border: none;
      position: relative;
      z-index: 0;
    }

    /* CTA Section Moderna */
    .cta-modern {
      background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
      color: white;
      position: relative;
      overflow: hidden;
    }

    .cta-modern:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="white" opacity="0.1"/><circle cx="80" cy="40" r="1" fill="white" opacity="0.2"/><circle cx="40" cy="80" r="1.5" fill="white" opacity="0.15"/><circle cx="60" cy="10" r="1" fill="white" opacity="0.25"/><circle cx="10" cy="60" r="2" fill="white" opacity="0.1"/></svg>');
      background-size: 200px 200px;
      animation: float 20s infinite linear;
    }

    .cta-content {
      position: relative;
      z-index: 10;
      text-align: center;
      padding: 80px 0;
    }

    .cta-text h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 20px;
    }

    .cta-text p {
      font-size: 1.2rem;
      margin-bottom: 40px;
      opacity: 0.9;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    .cta-actions {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .btn-lg {
      padding: 15px 40px;
      font-size: 1.1rem;
    }

    /* Responsive Design */
    @media (max-width: 991px) {
      .hero-title {
        font-size: 2.5rem;
      }
      
      .hero-description {
        font-size: 1.1rem;
      }
      
      .hero-stats {
        gap: 20px;
      }
      
      .stat-number {
        font-size: 2rem;
      }
      
      .section-title {
        font-size: 2rem;
      }
      
      .contact-info-modern {
        margin-bottom: 30px;
      }
      
      .cta-text h2 {
        font-size: 2rem;
      }
      
      .cta-actions {
        flex-direction: column;
        align-items: center;
      }
      
      .cta-actions .btn {
        width: 100%;
        max-width: 300px;
      }
    }

    @media (max-width: 767px) {
      .hero-title {
        font-size: 2rem;
      }
      
      .hero-description {
        font-size: 1rem;
      }
      
      .hero-actions {
        flex-direction: column;
        align-items: center;
      }
      
      .hero-stats {
        flex-direction: column;
        gap: 15px;
      }
      
      .section-title {
        font-size: 1.8rem;
      }
      
      .section-description {
        font-size: 1rem;
      }
      
      .contact-form-modern {
        padding: 25px;
      }
      
      .contact-info-modern {
        padding: 20px;
      }
      
      .cta-text h2 {
        font-size: 1.8rem;
      }
      
      .cta-text p {
        font-size: 1rem;
      }
      
      .map-iframe {
        height: 300px;
      }
    }
    </style>

    <!-- JavaScript para las funcionalidades modernas -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const spinner = submitBtn.querySelector('.spinner-border');
        const btnText = submitBtn.querySelector('.btn-text');
        
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Show loading state
                submitBtn.disabled = true;
                spinner.classList.remove('d-none');
                btnText.textContent = '<?php echo __('sending_message', 'Sending...'); ?>';
                
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
                
                // Email validation
                const emailField = contactForm.querySelector('[name="email"]');
                if (emailField && emailField.value.trim()) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(emailField.value.trim())) {
                        emailField.classList.add('is-invalid');
                        isValid = false;
                    }
                }
                
                if (!isValid) {
                    submitBtn.disabled = false;
                    spinner.classList.add('d-none');
                    btnText.textContent = '<?php echo __('contact_form_submit', 'Send Message'); ?>';
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
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
    
    // JavaScript mejorado para efectos de paralaje y microinteracciones
    document.addEventListener('DOMContentLoaded', function() {
        // Efecto de paralaje suave
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax-element');
            
            parallaxElements.forEach(element => {
                const speed = element.dataset.speed || 0.5;
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
        });
        
        // Efecto de ripple mejorado
        document.querySelectorAll('.ripple-effect').forEach(button => {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });
        
        // Efecto de typing mejorado para inputs
        document.querySelectorAll('.typing-effect').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('input-focused');
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('input-focused');
            });
        });
        
        // Animación de entrada para elementos
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.contact-info-item, .contact-form-modern, .map-wrapper, .cta-content').forEach(el => {
            observer.observe(el);
        });
        
        // Sistema de autocompletado para el formulario
        const commonSubjects = [
            '<?php echo __('contact_subject_quote', 'Request a Quote'); ?>',
            '<?php echo __('contact_subject_support', 'Technical Support'); ?>',
            '<?php echo __('contact_subject_partnership', 'Partnership Inquiry'); ?>',
            '<?php echo __('contact_subject_general', 'General Question'); ?>'
        ];
        
        const subjectInput = document.getElementById('asunto');
        if (subjectInput) {
            const datalist = document.createElement('datalist');
            datalist.id = 'subject-suggestions';
            
            commonSubjects.forEach(subject => {
                const option = document.createElement('option');
                option.value = subject;
                datalist.appendChild(option);
            });
            
            document.body.appendChild(datalist);
            subjectInput.setAttribute('list', 'subject-suggestions');
        }
        
        // Indicador de progreso en el envío del formulario
        const progressBar = document.createElement('div');
        progressBar.className = 'progress-bar-container';
        progressBar.innerHTML = '<div class="progress-bar"></div>';
        progressBar.style.display = 'none';
        
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.appendChild(progressBar);
            
            contactForm.addEventListener('submit', function(e) {
                if (!this.classList.contains('validated')) {
                    e.preventDefault();
                    
                    // Mostrar barra de progreso
                    progressBar.style.display = 'block';
                    const progressBarInner = progressBar.querySelector('.progress-bar');
                    progressBarInner.style.width = '0%';
                    
                    // Simular progreso
                    let progress = 0;
                    const interval = setInterval(() => {
                        progress += 10;
                        progressBarInner.style.width = progress + '%';
                        
                        if (progress >= 100) {
                            clearInterval(interval);
                            this.classList.add('validated');
                            this.submit();
                        }
                    }, 100);
                }
            });
        }
        
        // Mejora de accesibilidad con atributos ARIA
        document.querySelectorAll('.form-control').forEach(input => {
            input.setAttribute('aria-required', input.hasAttribute('required'));
            input.setAttribute('aria-invalid', 'false');
            
            input.addEventListener('invalid', function() {
                this.setAttribute('aria-invalid', 'true');
                const errorMsg = document.createElement('div');
                errorMsg.className = 'invalid-feedback';
                errorMsg.textContent = this.validationMessage;
                errorMsg.id = this.id + '-error';
                this.setAttribute('aria-describedby', errorMsg.id);
                this.parentElement.appendChild(errorMsg);
            });
            
            input.addEventListener('input', function() {
                if (this.validity.valid) {
                    this.setAttribute('aria-invalid', 'false');
                    const errorMsg = document.getElementById(this.id + '-error');
                    if (errorMsg) {
                        errorMsg.remove();
                        this.removeAttribute('aria-describedby');
                    }
                }
            });
        });
        
        // Optimización de rendimiento con lazy loading para imágenes
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });
            
            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        } else {
            // Fallback para navegadores que no soportan IntersectionObserver
            document.querySelectorAll('img[data-src]').forEach(img => {
                img.src = img.dataset.src;
                img.classList.remove('lazy');
            });
        }
    });
    </script>
    
    <!-- Estilos adicionales para las nuevas funcionalidades -->
    <style>
    /* Estilos para el efecto de ripple */
    .ripple {
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.7);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }
    
    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    /* Estilos para el efecto de typing */
    .input-focused .input-icon {
        color: var(--primary-color);
        transform: scale(1.1);
    }
    
    /* Estilos para la animación de entrada */
    .animate-in {
        animation: fadeInUp 0.6s ease-out forwards;
        opacity: 0;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Estilos para la barra de progreso */
    .progress-bar-container {
        width: 100%;
        height: 4px;
        background-color: var(--border-color);
        border-radius: 2px;
        margin-top: 20px;
        overflow: hidden;
    }
    
    .progress-bar {
        height: 100%;
        background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        width: 0;
        transition: width 0.1s ease;
    }
    
    /* Estilos para los mensajes de error */
    .invalid-feedback {
        display: block;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 0.875em;
        color: var(--danger-color);
    }
    
    /* Estilos para el lazy loading */
    .lazy {
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .lazy.loaded {
        opacity: 1;
    }
    </style>
    
    <?php include "includes/footer.php"; ?>
