<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AppNet Developer - Soluciones IA, IoT y Automatización Empresarial</title>

    <link rel="shortcut icon" href="assets/img/logo/titile.png" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css"> <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick-slider.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/mobile-menu.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="assets/js/jquery-3-7-1.min.js"></script>

    <style>
      #cookie-consent {
        display: none;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: #333;
        color: #fff;
        padding: 15px; /* Aumentado padding */
        text-align: center;
        z-index: 1050; /* Asegurar que esté sobre otros elementos */
        font-size: 14px;
      }
      #cookie-consent button {
        background-color: #007bff; /* Color primario (ajustar a tu tema) */
        color: white;
        border: none;
        padding: 8px 15px;
        margin-left: 10px;
        cursor: pointer;
        border-radius: 4px;
        font-size: 14px;
      }
      #cookie-consent button:hover {
        background-color: #0056b3;
      }
      .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        z-index: 1000;
        padding: 20px;
        overflow-y: auto;
      }
      .modal-content-box {
        background: #fff;
        padding: 30px; /* Aumentado padding */
        border-radius: 8px; /* Esquinas más redondeadas */
        max-width: 700px; /* Un poco más ancho */
        margin: 50px auto; /* Margen superior/inferior */
        position: relative;
        color: #333; /* Color de texto oscuro para legibilidad */
        line-height: 1.6; /* Mejor espaciado de línea */
      }
      .modal-content-box h2 {
        margin-top: 0;
        margin-bottom: 20px;
        color: #1a202c; /* Color de título oscuro */
      }
       .modal-content-box h3 {
        margin-top: 25px;
        margin-bottom: 10px;
        color: #2d3748; /* Color de subtítulo */
      }
       .modal-content-box p, .modal-content-box ul {
        margin-bottom: 15px;
      }
       .modal-content-box ul {
        padding-left: 20px;
      }
       .modal-content-box li {
        margin-bottom: 8px;
      }
      .modal-close-button {
        position: absolute;
        top: 15px;
        right: 15px;
        background: none;
        border: none;
        font-size: 24px; /* Más grande */
        cursor: pointer;
        color: #aaa; /* Color gris */
        line-height: 1;
      }
      .modal-close-button:hover {
          color: #333; /* Más oscuro al pasar el ratón */
      }
      .modal-content-box a {
          color: #007bff; /* Enlaces azules */
          text-decoration: none;
      }
       .modal-content-box a:hover {
          text-decoration: underline;
      }
      /* Estilos adicionales para previsualización de blog si se usan */
      .blog-post-preview img {
          max-width: 100%;
          height: auto;
          margin-bottom: 15px;
          border-radius: 4px;
      }
      .blog-post-preview h4 a {
          color: #333; /* O el color de título que uses */
          text-decoration: none;
      }
      .blog-post-preview h4 a:hover {
          color: #007bff; /* O el color de hover que uses */
      }
      .blog-excerpt {
          font-size: 0.9em;
          color: #666;
      }
      .learn-more-link {
          font-size: 0.9em;
          font-weight: bold;
          text-decoration: none;
      }
    </style>
</head>
<body class="body tg-heading-subheading animation-style3">

  <div class="paginacontainer">
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
      </svg>
    </div>
  </div>
  <section>
    <div id="preloader">
      <div id="ctn-preloader" class="ctn-preloader ctn-preloader1">
        <div class="animation-preloader">
          <div class="spinner"></div>
          <div class="txt-loading">
            <span data-text-preloader="A" class="letters-loading">A</span>
            <span data-text-preloader="p" class="letters-loading">p</span>
            <span data-text-preloader="p" class="letters-loading">p</span>
            <span data-text-preloader="N" class="letters-loading">N</span>
            <span data-text-preloader="e" class="letters-loading">e</span>
            <span data-text-preloader="t" class="letters-loading">t</span>
            <span data-text-preloader="D" class="letters-loading">D</span>
            <span data-text-preloader="e" class="letters-loading">e</span>
            <span data-text-preloader="v" class="letters-loading">v</span>
            <span data-text-preloader="e" class="letters-loading">e</span>
            <span data-text-preloader="l" class="letters-loading">l</span>
            <span data-text-preloader="o" class="letters-loading">o</span>
            <span data-text-preloader="p" class="letters-loading">p</span>
            <span data-text-preloader="e" class="letters-loading">e</span>
            <span data-text-preloader="r" class="letters-loading">r</span>
          </div>
        </div>
        <div class="loader-section-left loader-section section-left"></div>
        <div class="loader-section-right loader-section section-right"></div>
      </div>
    </div>
  </section>

  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="pera">
            <p><img src="assets/img/icons/header-top-span.png" alt="" style="vertical-align: middle; margin-right: 5px;"> Impulsando la transformación digital con IA, IoT y automatización avanzada.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <header>
    <div class="header-area header-area1 header-area-all d-none d-lg-block" id="header">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="index.php">
                  <img src="assets/img/logo/header-logo1.png" alt="Logo AppNet Developer">
                </a>
              </div>

              <div class="main-menu-ex main-menu-ex1">
                <ul>
                  <li><a href="index.php">Inicio</a></li>
                  <li><a href="about.php">Sobre Nosotros</a></li>
                  <li class="dropdown-menu-parrent"><a href="#">Soluciones IA y IoT <i class="fa-solid fa-angle-down"></i></a>
                    <div class="mega-menu-all">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="mega-menu-single">
                            <h3>Inteligencia Artificial</h3>
                            <ul>
                              <li><a href="servicio-reconocimiento-facial.php">Reconocimiento Facial</a></li>
                              <li><a href="servicio-llm-personalizado.php">Modelos LLM Personalizados</a></li>
                              <li><a href="servicio-chat-ia.php">Chat IA Propio (Sin Filtros)</a></li>
                              <li><a href="servicio-ia-marketing.php">IA para Marketing y Redes Sociales</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mega-menu-single">
                            <h3>Automatización y Gestión</h3>
                            <ul>
                              <li><a href="servicio-gestion-personal.php">Gestión de Personal con IA</a></li>
                              <li><a href="servicio-control-horario.php">Control Horario Inteligente</a></li>
                              <li><a href="servicio-gestion-documental.php">Firma y Gestión Documental</a></li>
                              <li><a href="servicio-control-gastos.php">Control de Gastos Automatizado</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mega-menu-single">
                            <h3>IoT y Comunicaciones</h3>
                            <ul>
                              <li><a href="servicio-iot-industrial.php">Sistemas IoT Industriales</a></li>
                              <li><a href="servicio-geolocalizacion.php">Geolocalización Avanzada</a></li>
                              <li><a href="servicio-servidores-locales.php">Servidores Locales (WhatsApp, SMS)</a></li>
                              <li><a href="servicios.php">Ver Todas las Soluciones</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><a href="project.php">Proyectos</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="contact.php">Contacto</a></li>
                </ul>
              </div>
              <div class="header1-buttons">
                <div class="contact-btn">
                  <div class="icon">
                    <img src="assets/img/icons/header1-icon.png" alt="Icono Teléfono">
                  </div>
                  <div class="headding">
                    <p>Haz una Llamada</p>
                    <a href="tel:+34619929305">+34 619 929 305</a>
                  </div>
                </div>
                <div class="button">
                  <a class="theme-btn1" href="contact.php">Obtén un Presupuesto <span><i class="fa-solid fa-arrow-right"></i></span></a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="mobile-header d-block d-lg-none ">
    <div class="container-fluid">
      <div class="col-12">
        <div class="mobile-header-elements">
          <div class="mobile-logo">
             <a href="index.php"><img src="assets/img/logo/header-logo1.png" alt="Logo AppNet Developer"></a>
          </div>
          <div class="mobile-nav-icon">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mobile-sidebar d-block d-lg-none">
    <div class="logo-m">
       <a href="index.php"><img src="assets/img/logo/header3-logo.png" alt="Logo AppNet Developer"></a>
    </div>
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="about.php">Sobre Nosotros</a></li>
        <li class="has-dropdown"><a href="#">Soluciones IA y IoT</a>
          <ul class="sub-menu">
             <li><a href="servicio-reconocimiento-facial.php">Reconocimiento Facial</a></li>
             <li><a href="servicio-llm-personalizado.php">Modelos LLM Personalizados</a></li>
             <li><a href="servicio-chat-ia.php">Chat IA Propio</a></li>
             <li><a href="servicio-ia-marketing.php">IA para Marketing</a></li>
             <li><a href="servicio-gestion-personal.php">Gestión de Personal IA</a></li>
             <li><a href="servicio-control-horario.php">Control Horario Inteligente</a></li>
             <li><a href="servicio-gestion-documental.php">Gestión Documental</a></li>
             <li><a href="servicio-control-gastos.php">Control de Gastos</a></li>
             <li><a href="servicio-iot-industrial.php">Sistemas IoT Industriales</a></li>
             <li><a href="servicio-geolocalizacion.php">Geolocalización Avanzada</a></li>
             <li><a href="servicio-servidores-locales.php">Servidores Locales</a></li>
             <li><a href="servicios.php">Ver Todas las Soluciones</a></li>
          </ul>
        </li>
        <li><a href="project.php">Proyectos</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="contact.php">Contacto</a></li>
      </ul>

      <div class="mobile-button">
        <a class="menu-btn2" href="contact.php">Contactar <span><i class="fa-solid fa-arrow-right"></i></span></a>
      </div>

      <div class="single-footer-items">
         <h3>Contáctanos</h3>
         <div class="contact-box">
           <div class="icon"><img src="assets/img/icons/footer1-icon1.png" alt="Icono teléfono"></div>
           <div class="pera"><a href="tel:+34619929305">+34 619 929 305</a></div>
         </div>
         <div class="contact-box">
           <div class="icon"><img src="assets/img/icons/footer1-icon3.png" alt="Icono email"></div>
           <div class="pera"><a href="mailto:info@appnet.dev">info@appnet.dev</a></div>
         </div>
         <div class="contact-box">
           <div class="icon"><img src="assets/img/icons/footer1-icon4.png" alt="Icono web"></div>
           <div class="pera"><a href="https://appnet.dev">www.appnet.dev</a></div>
         </div>
      </div>
      <div class="contact-infos">
         <h3>Síguenos</h3>
         <ul class="social-icon">
           <li><a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>
           <li><a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
           <li><a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a></li>
           <li><a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
         </ul>
       </div>
    </div>
  </div>
  <div class="hero1" style="background-image: url(assets/img/bg/hero1-bg.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="main-headding">
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> AppNet Developer - Innovación Inteligente</span>
            <h1 class="title tg-element-title">Automatización Inteligente: IA, IoT y Software a Medida para Tu Negocio</h1>
            <div class="space16"></div>
            <p data-aos="fade-right" data-aos-duration="700">Desarrollamos soluciones avanzadas con IA como reconocimiento facial y LLMs propios, integramos IoT, automatizamos RRHH y creamos comunicaciones personalizadas (WhatsApp, SMS) en servidores locales seguros. Transforma tu operativa con AppNet Developer.</p>
            <div class="space30"></div>
            <div class="buttons">
              <a class="theme-btn1" href="servicios.php">Nuestras Soluciones <span><i class="fa-solid fa-arrow-right"></i></span></a>
              <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=kcfs1-ryKWE"><span><i class="fa-regular fa-play"></i></span> Ver Video Demo</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero1-all-images">
            <div class="image1 ">
              <img src="assets/img/hero/hero1-image1.png" alt="Ilustración tecnológica 1">
            </div>
            <div class="image2 reveal">
              <img src="assets/img/hero/AppNetDeveloper-1.webp" alt="Ilustración tecnológica 2">
            </div>
            <div class="image3 shape-animaiton3">
              <img src="assets/img/hero/hero1-image3.png" alt="Elemento decorativo 1">
            </div>
            <div class="image4 shape-animaiton3">
               <img src="assets/img/hero/AppNetDeveloper-2.webp" alt="Elemento decorativo 2">
            </div>
            <div class="shape1"><img src="assets/img/shapes/header1-shape1.png" alt=""></div>
            <div class="shape2"><img src="assets/img/shapes/header1-shape2.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="feature-section sp-top">
    <div class="container">
      <div class="row hero-bottom-area">
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="single-box h-100">
            <div class="icon">
              <img src="assets/img/icons/hero-bottom-icon1.png" alt="Icono Alojamiento ARM">
            </div>
            <div class="headding">
              <h5>Reconocimiento Facial IA</h5>
              <p>Identificación segura y control de acceso avanzado.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="single-box h-100">
            <div class="icon">
              <img src="assets/img/icons/hero-bottom-icon2.png" alt="Icono Servidores Juego">
            </div>
            <div class="headding">
              <h5>LLMs y Chat IA Propios</h5>
              <p>Modelos de lenguaje adaptados y chat sin filtrado de datos.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <div class="single-box h-100">
            <div class="icon">
              <img src="assets/img/icons/hero-bottom-icon3.png" alt="Icono Proxy">
            </div>
            <div class="headding">
              <h5>Automatización RRHH</h5>
              <p>Control horario, gastos y gestión de personal con IA.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-box h-100">
            <div class="icon">
              <img src="assets/img/icons/hero-bottom-icon4.png" alt="Icono Soporte 24/7">
            </div>
            <div class="headding">
              <h5>Comunicaciones Seguras</h5>
              <p>Servidores locales para WhatsApp, Telegram y SMS.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about1 sp">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-image">
             <div class="image1 reveal">
              <img src="assets/img/about/about1-img1.png" alt="Imagen Sobre Nosotros 1">
            </div>
            <div class="image2 reveal image-anime">
              <img src="assets/img/about/about1-img2.png" alt="Imagen Sobre Nosotros 2">
            </div>
            <div class="icon-box">
              <img src="assets/img/icons/about1-shape-icon.png" alt="Icono Soporte 24/7">
              <h4>Innovación Constante</h4>
              <p>Desarrollando el futuro de la automatización empresarial.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="heading1">
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> Sobre AppNet Developer</span>
            <h2 class="title tg-element-title">Pioneros en Soluciones Inteligentes y Personalizadas</h2>
            <div class="space16"></div>
            <p data-aos="fade-left" data-aos-duration="800">Somos expertos en fusionar Inteligencia Artificial, IoT y desarrollo a medida para crear soluciones que realmente transforman negocios. Desde optimizar la gestión de personal con IA hasta asegurar comunicaciones críticas en servidores locales, nuestro enfoque es entregar tecnología avanzada, eficiente y adaptada a tus necesidades específicas.</p>
            <ul class="list" data-aos="fade-left" data-aos-duration="1100">
              <li><span><i class="fa-solid fa-check"></i></span> Desarrollo de IA y LLMs personalizados in-house.</li>
              <li><span><i class="fa-solid fa-check"></i></span> Soluciones IoT para control y eficiencia operativa.</li>
              <li><span><i class="fa-solid fa-check"></i></span> Automatización integral de procesos de RRHH y gestión.</li>
              <li><span><i class="fa-solid fa-check"></i></span> Plataforma segura para comunicaciones empresariales.</li>
            </ul>
            <div class="space30"></div>
            <div class="" data-aos="fade-left" data-aos-duration="900">
              <a class="theme-btn1" href="about.php">Conoce Nuestra Historia <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="service sp" style="background-color: #f8f9fa;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto text-center">
          <div class="heading1">
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> Nuestras Soluciones Clave</span>
            <h2 class="title tg-element-title">Tecnología Inteligente Adaptada a Tus Necesidades</h2>
          </div>
        </div>
      </div>
      <div class="space30"></div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in-up" data-aos-duration="700">
          <div class="single-box h-100">
            <div class="icon">
              <img src="assets/img/icons/service-icon1.png" alt="Icono Soluciones Cloud">
            </div>
            <div class="heading1">
              <h4><a href="servicio-reconocimiento-facial.php">Reconocimiento Facial y Control de Acceso</a></h4>
              <div class="space16"></div>
              <p>Implementa sistemas biométricos con IA para una seguridad y gestión de accesos sin precedentes, con entrenamiento personalizado en local.</p>
              <div class="space16"></div>
              <a href="servicio-reconocimiento-facial.php" class="learn">Aprende Más <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in-up" data-aos-duration="900">
          <div class="single-box h-100">
            <div class="icon">
               <img src="assets/img/icons/service-icon2.png" alt="Icono Análisis Datos">
            </div>
            <div class="heading1">
              <h4><a href="servicio-llm-personalizado.php">Modelos LLM y Chatbots IA Propios</a></h4>
              <div class="space16"></div>
              <p>Desarrollamos modelos de lenguaje grandes (LLMs) a medida y chatbots que operan con tus datos, sin filtraciones externas.</p>
              <div class="space16"></div>
              <a href="servicio-llm-personalizado.php" class="learn">Aprende Más <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in-up" data-aos-duration="1100">
          <div class="single-box h-100">
            <div class="icon">
               <img src="assets/img/icons/service-icon3.png" alt="Icono Ciberseguridad">
            </div>
            <div class="heading1">
              <h4><a href="servicio-gestion-personal.php">Plataforma Inteligente de RRHH</a></h4>
              <div class="space16"></div>
              <p>Automatiza el control horario, gestión de personal, firma de documentos y control de gastos, todo potenciado por IA.</p>
              <div class="space16"></div>
              <a href="servicio-gestion-personal.php" class="learn">Aprende Más <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in-up" data-aos-duration="700">
          <div class="single-box h-100">
            <div class="icon">
               <img src="assets/img/icons/service-icon4.png" alt="Icono Desarrollo Software">
            </div>
            <div class="heading1">
              <h4><a href="servicio-comunicacion-automatizada.php">Comunicación Automatizada Segura</a></h4>
              <div class="space16"></div>
              <p>Interactúa con empleados (fichajes, tickets) y clientes (marketing) vía WhatsApp, SMS, Telegram y Email desde servidores locales.</p>
              <div class="space16"></div>
              <a href="servicio-comunicacion-automatizada.php" class="learn">Aprende Más <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in-up" data-aos-duration="900">
          <div class="single-box h-100">
            <div class="icon">
               <img src="assets/img/icons/service-icon5.png" alt="Icono Consultoría IT">
            </div>
            <div class="heading1">
              <h4><a href="servicio-iot-industrial.php">Soluciones IoT Industriales</a></h4>
              <div class="space16"></div>
              <p>Conectamos y monitorizamos maquinaria, optimizamos producción y gestionamos instalaciones con sistemas IoT inteligentes.</p>
              <div class="space16"></div>
              <a href="servicio-iot-industrial.php" class="learn">Aprende Más <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in-up" data-aos-duration="1100">
          <div class="single-box h-100">
            <div class="icon">
               <img src="assets/img/icons/service-page-icon3.png" alt="Icono Genérico Servicio 6">
            </div>
            <div class="heading1">
              <h4><a href="servicio-desarrollo-medida.php">Desarrollo de Software a Medida</a></h4>
              <div class="space16"></div>
              <p>Creamos aplicaciones y plataformas únicas, integrando IA y IoT para resolver tus desafíos empresariales específicos.</p>
              <div class="space16"></div>
              <a href="servicio-desarrollo-medida.php" class="learn">Aprende Más <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="work sp">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="heading1">
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> Nuestro Enfoque</span>
            <h2 class="title tg-element-title">Integración Inteligente para Resultados Reales</h2>
            <div class="space16"></div>
            <p data-aos="fade-right" data-aos-duration="700">Combinamos hardware y software avanzado con IA para ofrecer soluciones completas. Desde la captura de datos con IoT hasta el análisis y acción con IA, nuestro proceso está diseñado para maximizar tu eficiencia y seguridad.</p>

            <div class="single-items" data-aos="fade-right" data-aos-duration="700">
              <div class="icon">
                 <img src="assets/img/icons/work-iocn1.png" alt="Icono Proceso 1">
              </div>
              <div>
                <h4><a href="#">Captura y Conexión de Datos (IoT)</a></h4>
                <div class="space10"></div>
                <p>Integramos sensores y dispositivos para recoger información vital de tu operativa en tiempo real.</p>
              </div>
            </div>
            <div class="single-items" data-aos="fade-right" data-aos-duration="900">
              <div class="icon">
                 <img src="assets/img/icons/work-iocn2.png" alt="Icono Proceso 2">
              </div>
              <div>
                <h4><a href="#">Análisis y Procesamiento con IA</a></h4>
                <div class="space10"></div>
                <p>Nuestros algoritmos y LLMs procesan los datos para identificar patrones, automatizar tareas y generar insights.</p>
              </div>
            </div>
            <div class="single-items" data-aos="fade-right" data-aos-duration="1100">
              <div class="icon">
                 <img src="assets/img/icons/work-iocn3.png" alt="Icono Proceso 3">
              </div>
              <div>
                <h4><a href="#">Acción y Automatización Inteligente</a></h4>
                <div class="space10"></div>
                <p>Activamos respuestas automáticas, desde comunicaciones personalizadas hasta control de maquinaria o gestión de personal.</p>
              </div>
            </div>
            <div class="space30"></div>
            <div class="" data-aos="fade-right" data-aos-duration="800">
              <a class="theme-btn1" href="servicios.php">Explora las Posibilidades <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-side">
            <img src="assets/img/hero/hero2-main-img2.png" alt="Ilustración Proceso de Trabajo">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pricing sp">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto text-center">
          <div class="heading1">
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> Planes Flexibles</span>
            <h2 class="title tg-element-title">Soluciones Escalables para Cada Necesidad</h2>
            <p class="mt-3">Ofrecemos planes base y soluciones totalmente personalizadas. Contáctanos para un presupuesto adaptado.</p>
          </div>
        </div>
      </div>
      <div class="space30"></div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="700">
          <div class="single-pricing-box h-100">
            <p class="title">Módulo Esencial</p>
            <h2>Desde 49€<span>/ mes</span></h2>
            <p class="pera">Ideal para empezar con automatización básica y control horario.</p>
            <div class="border"></div>
            <h4>Características Principales:</h4>
            <ul class="list">
              <li><span><i class="fa-solid fa-check"></i></span> Control Horario Básico</li>
              <li><span><i class="fa-solid fa-check"></i></span> Geolocalización Empleados</li>
              <li><span><i class="fa-solid fa-check"></i></span> Notificaciones Básicas</li>
              <li><span><i class="fa-solid fa-times"></i></span> Reconocimiento Facial</li>
              <li><span><i class="fa-solid fa-times"></i></span> Servidores Locales</li>
            </ul>
            <div class="space30"></div>
            <div class="button">
              <a class="theme-btn1" href="contact.php">Solicitar Info <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1100">
          <div class="single-pricing-box active h-100">
            <p class="title">Plan Avanzado IA</p>
            <h2>Desde 99€<span>/ mes</span></h2>
            <p class="pera">Para empresas que buscan integrar IA en RRHH y comunicaciones.</p>
            <div class="border"></div>
            <h4>Características Principales:</h4>
            <ul class="list">
               <li><span><i class="fa-solid fa-check"></i></span> Todo lo de Esencial +</li>
               <li><span><i class="fa-solid fa-check"></i></span> Reconocimiento Facial (Opcional)</li>
               <li><span><i class="fa-solid fa-check"></i></span> Automatización RRHH (Tickets, Fichajes)</li>
               <li><span><i class="fa-solid fa-check"></i></span> Comunicación WhatsApp/SMS</li>
               <li><span><i class="fa-solid fa-times"></i></span> LLM Personalizado</li>
            </ul>
            <div class="space30"></div>
            <div class="button">
              <a class="theme-btn1" href="contact.php">Solicitar Info <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="900">
          <div class="single-pricing-box h-100">
            <p class="title">Solución Personalizada</p>
            <h2>A Medida<span></span></h2>
            <p class="pera">Diseñamos una solución completa con tus requisitos específicos (LLMs, IoT, etc.).</p>
            <div class="border"></div>
            <h4>Características Incluidas:</h4>
            <ul class="list">
              <li><span><i class="fa-solid fa-check"></i></span> Análisis de Necesidades</li>
              <li><span><i class="fa-solid fa-check"></i></span> Desarrollo a Medida (IA, IoT, App)</li>
              <li><span><i class="fa-solid fa-check"></i></span> Servidores Locales Dedicados</li>
              <li><span><i class="fa-solid fa-check"></i></span> Integraciones Avanzadas</li>
              <li><span><i class="fa-solid fa-check"></i></span> Soporte Prioritario</li>
            </ul>
            <div class="space30"></div>
            <div class="button">
              <a class="theme-btn1" href="contact.php">Contactar <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="testimonial sp">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto text-center">
          <div class="heading1">
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> Aplicaciones Reales</span>
            <h2 class="title tg-element-title">Vea Cómo Nuestras Soluciones Marcan la Diferencia</h2>
          </div>
        </div>
      </div>
      <div class="row _relative">
        <div class="tes1-slider" data-aos="fade-up" data-aos-duration="800">
          <div class="tes1-single-slider">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <div class="right-side">
                  <h4>Gestión de Personal Eficiente con IA</h4>
                  <p>"Implementamos el control horario con geolocalización y notificaciones automáticas por WhatsApp. Redujimos el absentismo y simplificamos la gestión de fichajes drásticamente."</p>
                  <div class="author-info mt-3">
                      <strong>- Cliente Sector Logística</strong>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="left-side">
                  <img src="assets/img/control-horario.webp" alt="Control horario y geolocalización">
                </div>
              </div>
            </div>
          </div>
          <div class="tes1-single-slider">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <div class="right-side">
                  <h4>Seguridad Mejorada con Reconocimiento Facial</h4>
                   <p>"El sistema de reconocimiento facial para el control de acceso a nuestras instalaciones ha mejorado la seguridad y eliminado la necesidad de tarjetas físicas. El entrenamiento local fue clave."</p>
                   <div class="author-info mt-3">
                      <strong>- Cliente Sector Industrial</strong>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="left-side">
                   <img src="assets/img/rec-matriculas.webp" alt="Reconocimiento de matrículas">
                </div>
              </div>
            </div>
          </div>
           <div class="tes1-single-slider">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <div class="right-side">
                  <h4>Optimización de Producción con IoT</h4>
                   <p>"Conectar nuestra maquinaria al sistema IoT de AppNet nos dio visibilidad en tiempo real del rendimiento y permitió identificar cuellos de botella, optimizando la producción."</p>
                   <div class="author-info mt-3">
                      <strong>- Cliente Sector Manufactura</strong>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="left-side">
                   <img src="assets/img/gestion-iot.webp" alt="Gestión IoT industrial">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tes1-arrows">
          <button class="testimonial-prev-arrow" aria-label="Anterior"><i class="fa-solid fa-arrow-left"></i></button>
          <button class="testimonial-next-arrow" aria-label="Siguiente"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
      </div>
    </div>
  </div>
  <div class="service-highlight sp" id="blog-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto text-center">
          <div class="heading1">
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> Blog y Noticias</span>
            <h2 class="title tg-element-title">Mantente al Día con las Últimas Tendencias en IA e IoT</h2>
          </div>
        </div>
      </div>
      <div class="space30"></div>
      <div class="row">
         <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-box blog-post-preview" data-aos="zoom-in-up" data-aos-duration="1100">
            <div class="icon mb-3"> <img src="assets/img/icons/service-icon1.png" alt="Icono Servicio 1">
            </div>
            <h4><a href="blog-post-1.php">Control Horario y Producción en Tiempo Real</a></h4>
            <p class="blog-excerpt">Cómo conectar maquinaria a sistemas inteligentes optimiza la supervisión y eficiencia...</p>
            <a href="blog-post-1.php" class="learn-more-link">Leer Más <i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-box blog-post-preview" data-aos="zoom-in-up" data-aos-duration="900">
            <div class="icon mb-3">
               <img src="assets/img/icons/service-icon2.png" alt="Icono Servicio 2">
            </div>
            <h4><a href="blog-post-2.php">Integración de Maquinaria Industrial con IoT</a></h4>
            <p class="blog-excerpt">Conectando básculas, medidores y más para una visión completa de tus procesos...</p>
             <a href="blog-post-2.php" class="learn-more-link">Leer Más <i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-box blog-post-preview" data-aos="zoom-in-up" data-aos-duration="700">
            <div class="icon mb-3">
               <img src="assets/img/icons/service-icon3.png" alt="Icono Servicio 3">
            </div>
            <h4><a href="blog-post-3.php">El Poder de las Cámaras con IA</a></h4>
            <p class="blog-excerpt">Más allá de la vigilancia: reconocimiento de matrículas y análisis inteligente...</p>
             <a href="blog-post-3.php" class="learn-more-link">Leer Más <i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-box blog-post-preview" data-aos="zoom-in-up" data-aos-duration="1100">
            <div class="icon mb-3">
               <img src="assets/img/icons/service-icon4.png" alt="Icono Servicio 4">
            </div>
            <h4><a href="blog-post-4.php">Geolocalización Inteligente para Recursos</a></h4>
            <p class="blog-excerpt">Optimiza rutas, seguimiento de activos y seguridad del personal con precisión...</p>
             <a href="blog-post-4.php" class="learn-more-link">Leer Más <i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-box blog-post-preview" data-aos="zoom-in-up" data-aos-duration="900">
            <div class="icon mb-3">
               <img src="assets/img/icons/service-icon5.png" alt="Icono Servicio 5">
            </div>
            <h4><a href="blog-post-5.php">Estrategias de Ciberseguridad en la Era IA</a></h4>
            <p class="blog-excerpt">Protegiendo tus datos y sistemas inteligentes contra las nuevas amenazas...</p>
             <a href="blog-post-5.php" class="learn-more-link">Leer Más <i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-box blog-post-preview" data-aos="zoom-in-up" data-aos-duration="700">
            <div class="icon mb-3">
               <img src="assets/img/icons/service-icon4.png" alt="Icono Servicio 6">
            </div>
            <h4><a href="blog-post-6.php">Servidores Locales vs Cloud: ¿Qué Elegir?</a></h4>
            <p class="blog-excerpt">Analizamos las ventajas de cada opción para alojar tus aplicaciones críticas...</p>
             <a href="blog-post-6.php" class="learn-more-link">Leer Más <i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
      </div>
       <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="blog.php" class="theme-btn1">Ver Todas las Entradas <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
  </div>
  <div class="cta">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="heading1-w">
            <h2 class="title tg-element-title">¿Listo para Transformar Tu Negocio con IA e IoT?</h2>
            <div class="space16"></div>
            <p data-aos="fade-right" data-aos-duration="700">Contacta con nuestros especialistas para discutir tus desafíos y descubrir cómo nuestras soluciones personalizadas de IA, IoT y automatización pueden impulsar tu crecimiento y eficiencia.</p>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="buttons text-lg-end">
            <a class="cta-btn1 mb-2 mb-lg-0" href="contact.php">Solicitar Consulta Gratuita <span><i class="fa-solid fa-arrow-right"></i></span></a>
            <a class="cta-btn2" href="servicios.php">Explorar Soluciones <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer1 _relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
          <div class="single-footer-items footer-logo-area">
            <div class="footer-logo">
               <a href="index.php"><img src="assets/img/logo/footer-logo1.png" alt="Logo AppNet Developer Footer"></a>
            </div>
            <div class="space20"></div>
            <div class="heading1">
              <p>AppNet Developer: Liderando la innovación con soluciones personalizadas de IA, IoT, reconocimiento facial, LLMs propios y automatización integral para empresas.</p>
            </div>
             <ul class="social-icon mt-3">
              <li><a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a></li>
              <li><a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
              <li><a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a></li>
              <li><a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg col-md-6 col-12 mb-4 mb-lg-0">
          <div class="single-footer-items">
            <h3>Soluciones Destacadas</h3>
            <ul class="menu-list">
              <li><a href="servicio-reconocimiento-facial.php">Reconocimiento Facial IA</a></li>
              <li><a href="servicio-llm-personalizado.php">LLMs y Chat IA Propios</a></li>
              <li><a href="servicio-gestion-personal.php">Gestión de Personal con IA</a></li>
              <li><a href="servicio-comunicacion-automatizada.php">Comunicaciones Seguras</a></li>
              <li><a href="servicio-iot-industrial.php">Soluciones IoT Industrial</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg col-md-6 col-12 mb-4 mb-lg-0">
          <div class="single-footer-items">
            <h3>Enlaces Útiles</h3>
            <ul class="menu-list">
              <li><a href="about.php">Sobre Nosotros</a></li>
              <li><a href="servicios.php">Todas las Soluciones</a></li>
              <li><a href="project.php">Proyectos</a></li>
              <li><a href="blog.php">Blog & Noticias</a></li>
              <li><a href="contact.php">Contacto</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="single-footer-items">
            <h3>Contáctenos</h3>
            <div class="contact-box">
               <div class="icon"><img src="assets/img/icons/footer1-icon1.png" alt="Icono teléfono"></div>
               <div class="pera"><a href="tel:+34619929305">+34 619 929 305</a></div>
             </div>
             <div class="contact-box">
               <div class="icon"><img src="assets/img/icons/footer1-icon3.png" alt="Icono email"></div>
               <div class="pera"><a href="mailto:info@appnet.dev">info@appnet.dev</a></div>
             </div>
             <div class="contact-box">
               <div class="icon"><img src="assets/img/icons/footer1-icon4.png" alt="Icono web"></div>
               <div class="pera"><a href="https://appnet.dev">www.appnet.dev</a></div>
             </div>
          </div>
        </div>
      </div>
      <div class="space40"></div>
    </div>

    <div class="copyright-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
            <div class="coppyright">
              <p>Copyright @<span id="copyright-year"></span> AppNet Developer. Todos los derechos reservados</p>
            </div>
          </div>
          <div class="col-md-6 text-center text-md-end">
            <div class="coppyright right-area">
              <a href="#" id="terms-link">Términos y Condiciones</a>
              <a href="#" id="privacy-link">Política de Privacidad</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script src="assets/js/mobile-menu.js"></script>
  <script src="assets/js/jquery.magnific-popup.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/gsap.min.js"></script>
  <script src="assets/js/ScrollTrigger.min.js"></script>
  <script src="assets/js/Splitetext.js"></script>
  <script src="assets/js/text-animation.js"></script>
  <script src="assets/js/SmoothScroll.js"></script>
  <script src="assets/js/jquery.lineProgressbar.js"></script>
  <script src="assets/js/ripple-btn.js"></script>
  <script src="assets/js/main.js"></script>

  <div id="cookie-consent">
    Este sitio web utiliza cookies para mejorar su experiencia. Al continuar navegando, aceptas nuestro uso de cookies.
    <button id="accept-cookies">Aceptar</button>
    <a href="#" id="privacy-link-cookie" style="color: #ccc; margin-left: 10px; text-decoration: underline;">Política de Privacidad</a>
  </div>

  <div id="terms-modal" class="modal-overlay">
    <div class="modal-content-box">
      <button id="close-terms-modal" class="modal-close-button" aria-label="Cerrar">×</button>
      <h2>Términos y Condiciones</h2>
      <p>Última actualización: <span class="dynamic-date"></span></p>
      <p>Bienvenido a AppNet Developer. Estos términos y condiciones describen las reglas y regulaciones para el uso del sitio web de AppNet Developer, ubicado en www.appnet.dev.</p>
      <p>Al acceder a este sitio web, asumimos que aceptas estos términos y condiciones. No continúes usando AppNet Developer si no aceptas todos los términos y condiciones establecidos en esta página.</p>
      <h3>Licencia de Uso</h3>
      <p>A menos que se indique lo contrario, AppNet Developer y/o sus licenciantes poseen los derechos de propiedad intelectual de todo el material en este sitio web. Todos los derechos de propiedad intelectual están reservados. Puedes acceder desde AppNet Developer para tu uso personal sujeto a las restricciones establecidas en estos términos y condiciones.</p>
      <p>No debes:</p>
      <ul>
        <li>Reproducir, duplicar o copiar material de AppNet Developer.</li>
        <li>Vender, alquilar o sublicenciar material del sitio web.</li>
        <li>Redistribuir contenido de AppNet Developer.</li>
      </ul>
      <h3>Comentarios y Contenido de Usuarios</h3>
      <p>Este sitio web permite a los usuarios publicar y compartir contenido, incluidos comentarios y reseñas. AppNet Developer se reserva el derecho de revisar todo contenido antes de su publicación y eliminar cualquier contenido considerado inapropiado, ofensivo o en violación de estos términos.</p>
      <p>Al enviar contenido a este sitio web, otorgas a AppNet Developer una licencia no exclusiva para usar, reproducir, y modificar tu contenido en todas sus formas.</p>
      <h3>Limitación de Responsabilidad</h3>
      <p>AppNet Developer no será responsable de ningún daño que surja o esté relacionado con el uso de nuestro sitio web, incluido, sin limitación, cualquier pérdida directa, indirecta o consecuente.</p>
      <h3>Modificaciones de los Términos</h3>
      <p>Nos reservamos el derecho de modificar estos términos en cualquier momento. Es tu responsabilidad revisar estos términos periódicamente. El uso continuado del sitio después de cualquier cambio constituye la aceptación de los nuevos términos.</p>
      <h3>Ley Aplicable</h3>
      <p>Estos términos se regirán e interpretarán de acuerdo con las leyes de España, y te sometes irrevocablemente a la jurisdicción exclusiva de los tribunales en esa localidad.</p>
    </div>
  </div>

  <div id="privacy-modal" class="modal-overlay">
    <div class="modal-content-box">
      <button id="close-privacy-modal" class="modal-close-button" aria-label="Cerrar">×</button>
      <h2>Política de Privacidad</h2>
      <p>Última actualización: <span class="dynamic-date"></span></p>
      <p>En AppNet Developer, accesible desde www.appnet.dev, uno de nuestros principales objetivos es la privacidad de nuestros visitantes. Esta Política de Privacidad detalla los tipos de información que recopilamos y cómo la utilizamos.</p>
      <h3>Información que Recopilamos</h3>
      <p>Al utilizar nuestro sitio web, podemos recopilar la siguiente información:</p>
      <ul>
        <li><strong>Datos Personales:</strong> nombre, correo electrónico, dirección, número de teléfono u otra información similar que proporcionas voluntariamente al utilizar nuestros formularios de contacto, solicitar presupuestos o suscribirte a nuestro boletín.</li>
        <li><strong>Datos de Navegación:</strong> cuando visitas nuestro sitio web, podemos recopilar información automáticamente como la dirección IP (anonimizada), tipo de navegador, sistema operativo, tiempo de permanencia en el sitio y las páginas visitadas, a través de cookies y tecnologías similares.</li>
         <li><strong>Datos de Servicios:</strong> Si utilizas nuestras aplicaciones o servicios (p.ej., control horario, reconocimiento facial), recopilaremos los datos necesarios para el funcionamiento de dicho servicio, conforme a los acuerdos específicos de servicio.</li>
      </ul>
      <h3>Uso de la Información</h3>
      <p>Usamos la información recopilada para varios fines, incluidos:</p>
      <ul>
        <li>Proporcionar, operar y mantener nuestros servicios.</li>
        <li>Mejorar, personalizar y expandir nuestro sitio web y servicios.</li>
        <li>Entender y analizar cómo utilizas nuestro sitio web y servicios.</li>
        <li>Desarrollar nuevos productos, servicios, características y funcionalidades.</li>
        <li>Comunicarnos contigo, directamente o a través de uno de nuestros socios, incluido para atención al cliente, para proporcionarte actualizaciones y otra información relacionada con el sitio web, y para fines de marketing y promoción (si has dado tu consentimiento).</li>
        <li>Procesar tus transacciones.</li>
        <li>Enviar correos electrónicos periódicos.</li>
        <li>Encontrar y prevenir fraudes.</li>
        <li>Cumplir con requisitos legales y proteger nuestros derechos.</li>
      </ul>
      <h3>Cookies</h3>
      <p>Utilizamos cookies y tecnologías similares para analizar tendencias, administrar el sitio web, rastrear los movimientos de los usuarios por el sitio web y recopilar información demográfica sobre nuestra base de usuarios en su conjunto. Puedes controlar el uso de cookies a nivel de navegador individual mediante nuestro banner de consentimiento y la configuración de tu navegador.</p>
      <h3>Compartición de Información</h3>
      <p>AppNet Developer no venderá, alquilará ni compartirá tu información personal con terceros, excepto en las siguientes circunstancias:</p>
      <ul>
         <li>Con proveedores de servicios que realizan funciones en nuestro nombre (p.ej., procesamiento de pagos, alojamiento web, análisis de datos), quienes están obligados contractualmente a proteger tu información.</li>
        <li>Para cumplir con la ley, regulaciones, procesos legales o solicitudes gubernamentales aplicables.</li>
        <li>Para hacer cumplir nuestros Términos de Servicio, incluida la investigación de posibles violaciones.</li>
        <li>Para detectar, prevenir o abordar de otra manera el fraude, la seguridad o problemas técnicos.</li>
        <li>Para proteger contra daños los derechos, la propiedad o la seguridad de AppNet Developer, nuestros usuarios o el público según lo requiera o permita la ley.</li>
         <li>Con tu consentimiento explícito.</li>
      </ul>
      <h3>Seguridad de los Datos</h3>
      <p>Implementamos medidas de seguridad técnicas y organizativas apropiadas para proteger tu información personal contra el acceso no autorizado, la alteración, la divulgación o la destrucción. Sin embargo, ningún método de transmisión por Internet o de almacenamiento electrónico es 100% seguro.</p>
      <h3>Tus Derechos (RGPD)</h3>
      <p>De acuerdo con el Reglamento General de Protección de Datos (RGPD), tienes derecho a:</p>
      <ul>
        <li>Acceder a tus datos personales.</li>
        <li>Rectificar datos inexactos o incompletos.</li>
        <li>Solicitar la supresión de tus datos ('derecho al olvido').</li>
        <li>Solicitar la limitación del tratamiento de tus datos.</li>
        <li>Oponerte al tratamiento de tus datos.</li>
        <li>Solicitar la portabilidad de tus datos.</li>
        <li>Retirar el consentimiento en cualquier momento, sin que ello afecte a la licitud del tratamiento basado en el consentimiento previo a su retirada.</li>
         <li>Presentar una reclamación ante la Agencia Española de Protección de Datos (www.aepd.es) si consideras que el tratamiento no se ajusta a la normativa vigente.</li>
      </ul>
      <p>Si deseas ejercer alguno de estos derechos, por favor contáctanos a través del correo <a href="mailto:info@appnet.dev">info@appnet.dev</a>.</p>
      <h3>Cambios en la Política de Privacidad</h3>
      <p>Nos reservamos el derecho de actualizar esta Política de Privacidad en cualquier momento. Te notificaremos cualquier cambio publicando la nueva Política de Privacidad en esta página y actualizando la fecha de "Última actualización".</p>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // --- Cookie Consent ---
      const cookieConsent = document.getElementById("cookie-consent");
      const acceptCookiesButton = document.getElementById("accept-cookies");
      const privacyLinkCookie = document.getElementById("privacy-link-cookie");

      if (!localStorage.getItem("cookiesAccepted")) {
        cookieConsent.style.display = "block";
      }

      acceptCookiesButton.onclick = function() {
        localStorage.setItem("cookiesAccepted", "true");
        cookieConsent.style.display = "none";
      };

       if (privacyLinkCookie) {
         privacyLinkCookie.addEventListener('click', function(event) {
           event.preventDefault();
           document.getElementById("privacy-modal").style.display = "block";
         });
       }

      // --- Modales ---
      const termsModal = document.getElementById("terms-modal");
      const privacyModal = document.getElementById("privacy-modal");
      const termsLink = document.getElementById("terms-link");
      const privacyLink = document.getElementById("privacy-link");
      const closeTermsButton = document.getElementById("close-terms-modal");
      const closePrivacyButton = document.getElementById("close-privacy-modal");

      if (termsLink) {
        termsLink.addEventListener('click', function(event) {
          event.preventDefault();
          termsModal.style.display = "block";
        });
      }
      if (privacyLink) {
        privacyLink.addEventListener('click', function(event) {
          event.preventDefault();
          privacyModal.style.display = "block";
        });
      }

      if (closeTermsButton) {
        closeTermsButton.onclick = function() {
          termsModal.style.display = "none";
        };
      }
      if (closePrivacyButton) {
        closePrivacyButton.onclick = function() {
          privacyModal.style.display = "none";
        };
      }

      window.onclick = function(event) {
        if (event.target == termsModal) {
          termsModal.style.display = "none";
        }
        if (event.target == privacyModal) {
          privacyModal.style.display = "none";
        }
      };

      // --- Fechas Dinámicas ---
      const currentYear = new Date().getFullYear();
      const currentDate = new Date().toLocaleDateString('es-ES', { day: '2-digit', month: '2-digit', year: 'numeric' });

      const yearSpan = document.getElementById("copyright-year");
      if (yearSpan) {
        yearSpan.textContent = currentYear;
      }

      const dateSpans = document.querySelectorAll(".dynamic-date");
      dateSpans.forEach(span => {
        span.textContent = currentDate;
      });

       // --- Inicializar AOS ---
       AOS.init({
           duration: 800,
           once: true
       });

       // --- Inicializar Popup Video (Magnific Popup) ---
        $('.popup-youtube').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

        // --- Inicializar Sliders (Slick/Owl) ---
        if ($('.tes1-slider').length) {
            $('.tes1-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: '.testimonial-prev-arrow',
                nextArrow: '.testimonial-next-arrow',
                dots: false,
                autoplay: true,
                autoplaySpeed: 5000,
                fade: true
            });
        }
        // Añade aquí inicializaciones para otros sliders si los tienes

    });
  </script>

</body>
</html>
