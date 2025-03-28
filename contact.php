<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefono = htmlspecialchars($_POST['telefono']);
    $asunto = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    $captcha = htmlspecialchars($_POST['captcha']);

    // Verificación de CAPTCHA
    if ($captcha != '6') { // 3 + 3 = 6
        $message = "Respuesta incorrecta. Por favor, intenta de nuevo.";
        echo "<script>alert('$message'); window.location.href='contact.php';</script>";
        return; // Detener el envío del correo
    }

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'mail.appnet.dev';
        $mail->SMTPAuth = true;
        $mail->Username = 'liviudiaconu@appnet.dev'; // Usuario
        $mail->Password = 'lss281613858715'; // Contraseña
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Cambia a PHPMailer::ENCRYPTION_SMTPS si usas SSL
        $mail->Port = 25; // Puerto SMTP

        // Habilitar el modo de depuración
       // $mail->SMTPDebug = 2; // Cambia a 3 para más detalles
        //$mail->Debugoutput = 'html';

        // Remitente y destinatario
        $mail->setFrom('liviudiaconu@appnet.dev', 'AppNet Developer');
        $mail->addAddress('liviudiaconu@appnet.dev', 'AppNet Developer');
        $mail->addAddress($email, $nombre);
        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = "Nuevo mensaje de contacto: $asunto";
        $mail->Body    = "Nombre: $nombre $apellido<br>Correo: $email<br>Teléfono: $telefono<br><br>Mensaje:<br>$mensaje";

        $mail->send();
        $message = 'Correo enviado exitosamente.';
    } catch (Exception $e) {
        $message = "Hubo un error al enviar el correo: {$mail->ErrorInfo}";
    }
}
?>

    <?php include "header.php"; ?>

    <!-- Muestra el mensaje después de enviar el formulario -->
    <script>
        <?php if ($message): ?>
            alert("<?php echo $message; ?>");
        <?php endif; ?>
    </script>

                        <!--=====HERO AREA START=======-->

                        <div class="common-hero">
                          <div class="container">
                            <div class="row align-items-center text-center">
                              <div class="col-lg-8 m-auto">
                                <div class="main-heading">
                                  <h1>Contáctanos</h1>
                                    <div class="space16"></div>
                                    <span class="span"><img src="assets/img/icons/span1.png" alt=""> <a href="index.php">Inicio</a> <span class="arrow"><i class="fa-regular fa-angle-right"></i></span> Contáctanos</span>
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
                                <h2>Información de Contacto</h2>
                                <div class="space16"></div>
                                <p>Hemos crecido con la revolución de internet, y sabemos cómo aprovecharla para ofrecer resultados.</p>
                            </div>
                            <div class="contact-box">
                                <div class="icon">
                                    <img src="assets/img/icons/contact-page-icon1.png" alt="">
                                </div>
                                <div class="heading">
                                    <h5>Contáctanos</h5>
                                    <a href="tel:+34619929305" class="text">+34 619929305</a>
                                </div>
                            </div>

                            <div class="contact-box">
                                <div class="icon">
                                    <img src="assets/img/icons/contact-page-icon2.png" alt="">
                                </div>
                                <div class="heading">
                                    <h5>Envíanos un Correo</h5>
                                    <a href="mailto:info@appnet.dev" class="text">info@appnet.dev</a>
                                </div>
                            </div>

                            <div class="contact-box">
                                <div class="icon">
                                    <img src="assets/img/icons/contact-page-icon3.png" alt="">
                                </div>
                                <div class="heading">
                                    <h5>Donde Estamos</h5>
                                    <a class="text">España, Murcia Corvera 30153</a>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-form-details">
                            <form action="contact.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <input type="text" name="nombre" placeholder="Nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <input type="text" name="apellido" placeholder="Apellido" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <input type="email" name="email" placeholder="Correo Electrónico" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="single-input">
                                            <input type="number" name="telefono" placeholder="Teléfono" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-input">
                                            <input type="text" name="asunto" placeholder="Asunto" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="single-input">
                                            <textarea name="mensaje" cols="30" rows="5" placeholder="Mensaje" required></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="single-input">
                                            <input type="text" name="captcha" placeholder="¿Cuánto es 3 + 3?" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="theme-btn1">Enviar <span><i class="fa-solid fa-arrow-right"></i></span></button>
                                    </div>

                                </div>
                            </form>
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

        <?php include "footer.php"; ?>







