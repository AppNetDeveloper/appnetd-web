<!DOCTYPE html>
<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';
?>
<html lang="<?php echo $current_lang; ?>" dir="<?php echo isset($available_languages[$current_lang]['rtl']) && $available_languages[$current_lang]['rtl'] ? 'rtl' : 'ltr'; ?>">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>AppNet Developer</title>

     <!--=====FAB ICON=======-->
     <link rel="shortcut icon" href="assets/img/logo/titile.png" type="image/x-icon">


     <!--=====CSS=======-->
     <?php
     // Obtener la URL base del sitio
     $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
     ?>
     <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/fontawesome.css">
     <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/magnific-popup.css">
     <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/nice-select.css">
     <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/slick-slider.css">
     <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/owl.carousel.min.css">
     <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/aos.css">
     <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/mobile-menu.css">
     <link rel="stylesheet" href="<?php echo $base_url; ?>/assets/css/main.css">
     <?php if(isset($additional_css)): ?>
     <link rel="stylesheet" href="<?php echo $base_url . '/' . ltrim($additional_css, '/'); ?>">
     <?php endif; ?>

     <!--=====JQUERY=======-->
     <script src="assets/js/jquery-3-7-1.min.js"></script>
     
     <!-- Estilos para selectores de precios -->
     <style>
     /* Estilos para el toggle de precios */
     .pricing-options {
         position: relative;
         min-height: 300px;
         margin-bottom: 15px;
     }
     
     .pricing-options h3 {
         font-size: 1.1rem;
         margin-bottom: 5px;
         color: #4e54c8;
         font-weight: 600;
     }
     
     .pricing-option {
         display: none;
         transition: all 0.3s ease;
     }
     
     .pricing-option.active {
         display: block;
         animation: fadeIn 0.5s;
     }
     
     .billing-toggle {
         display: flex;
         align-items: center;
         justify-content: center;
         margin: 15px 0;
     }
     
     .billing-toggle span {
         margin: 0 10px;
         font-weight: 500;
         color: #666;
         transition: all 0.3s ease;
     }
     
     .billing-toggle span.active {
         color: #4e54c8;
         font-weight: 600;
     }
     
     /* Switch toggle */
     .switch {
         position: relative;
         display: inline-block;
         width: 50px;
         height: 24px;
     }
     
     .switch input { 
         opacity: 0;
         width: 0;
         height: 0;
     }
     
     .slider {
         position: absolute;
         cursor: pointer;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background-color: #ccc;
         transition: .4s;
         border-radius: 24px;
     }
     
     .slider:before {
         position: absolute;
         content: "";
         height: 16px;
         width: 16px;
         left: 4px;
         bottom: 4px;
         background-color: white;
         transition: .4s;
         border-radius: 50%;
     }
     
     input:checked + .slider {
         background-color: #4e54c8;
     }
     
     input:focus + .slider {
         box-shadow: 0 0 1px #4e54c8;
     }
     
     input:checked + .slider:before {
         transform: translateX(26px);
     }
     
     /* Badge de descuento */
     .discount-badge {
         display: block;
         background: #4e54c8;
         color: white;
         padding: 5px 10px;
         border-radius: 4px;
         font-size: 14px;
         font-weight: 600;
         margin: 10px 0;
         text-align: center;
     }
     
     /* Especificaciones del servidor */
     .server-specs {
         background: #f8f9ff;
         border-radius: 8px;
         padding: 15px;
         margin: 15px 0;
         border: 1px solid #e0e4ff;
     }
     
     .server-specs p {
         font-weight: 600;
         margin-bottom: 10px;
         color: #4e54c8;
     }
     
     .server-specs ul {
         padding-left: 20px;
         margin: 0;
     }
     
     .server-specs li {
         margin-bottom: 8px;
         font-size: 0.9rem;
         position: relative;
         padding-left: 25px;
     }
     
     .server-specs li i {
         position: absolute;
         left: 0;
         color: #4e54c8;
         width: 20px;
         text-align: center;
     }
     
     /* Mejoras para los precios */
     .single-pricing-box h2 {
         font-size: 2rem;
         margin: 10px 0;
     }
     
     .single-pricing-box h2 small {
         font-size: 1.2rem;
         color: #666;
         font-weight: 500;
     }
     
     @keyframes fadeIn {
         from { opacity: 0; transform: translateY(10px); }
         to { opacity: 1; transform: translateY(0); }
     }
     
     /* Estilos para el selector de idiomas */
     .language-selector {
         position: relative;
         margin-right: 15px;
     }
     
     .current-language {
         background: transparent;
         color: #fff;
         border: 1px solid rgba(255, 255, 255, 0.2);
         border-radius: 4px;
         padding: 8px 12px;
         cursor: pointer;
         display: flex;
         align-items: center;
         gap: 8px;
         transition: all 0.3s ease;
     }
     
     .current-language:hover {
         background: rgba(255, 255, 255, 0.1);
     }
     
     .language-flag {
         font-size: 1.2em;
     }
     
     .language-code {
         font-weight: 600;
     }
     
     .language-dropdown {
         position: absolute;
         top: 100%;
         right: 0;
         background: #fff;
         border-radius: 4px;
         box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
         min-width: 180px;
         margin-top: 5px;
         opacity: 0;
         visibility: hidden;
         transform: translateY(10px);
         transition: all 0.3s ease;
         z-index: 1000;
     }
     
     .language-selector:hover .language-dropdown {
         opacity: 1;
         visibility: visible;
         transform: translateY(0);
     }
     
     .language-dropdown li {
         list-style: none;
     }
     
     .language-option {
         display: flex;
         align-items: center;
         padding: 10px 15px;
         color: #333;
         text-decoration: none;
         transition: all 0.2s ease;
     }
     
     .language-option:hover {
         background: #f5f5f5;
     }
     
     .language-option .language-flag {
         margin-right: 10px;
     }
     
     .language-option .language-name {
         font-size: 0.9em;
     }
     
     /* Estilos para el popup de bienvenida */
     .language-popup {
         display: none;
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: rgba(0, 0, 0, 0.7);
         z-index: 9999;
         justify-content: center;
         align-items: center;
     }
     
     .language-popup-content {
         background: #fff;
         padding: 30px;
         border-radius: 8px;
         text-align: center;
         max-width: 500px;
         width: 90%;
         animation: fadeIn 0.3s ease;
     }
     
     .language-popup h2 {
         margin-bottom: 20px;
         color: #333;
     }
     
     .language-options {
         display: grid;
         grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
         gap: 15px;
         margin-top: 20px;
     }
     
     .language-option-btn {
         padding: 10px;
         border: 1px solid #ddd;
         border-radius: 4px;
         background: #fff;
         cursor: pointer;
         transition: all 0.3s ease;
         display: flex;
         flex-direction: column;
         align-items: center;
     }
     
     .language-option-btn:hover {
         background: #f5f5f5;
         border-color: #4e54c8;
     }
     
     .language-option-btn .flag {
         font-size: 2em;
         margin-bottom: 5px;
     }
     
     /* Estilos para RTL */
     [dir="rtl"] .language-selector {
         margin-right: 0;
         margin-left: 15px;
     }
     
     [dir="rtl"] .language-dropdown {
         right: auto;
         left: 0;
     }
     
     [dir="rtl"] .language-option .language-flag {
         margin-right: 0;
         margin-left: 10px;
     }
     </style>
</head>
<body class="body tg-heading-subheading animation-style3">


  <!--=====progress END=======-->

<div class="paginacontainer"> 

  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
  </div>

  </div> 

<!--=====progress END=======-->

    <!-- JavaScript para los toggles de precios -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Función para manejar el cambio en los toggles
        function handlePricingToggle(checkbox, planId) {
            const container = checkbox.closest('.single-pricing-box').querySelector('.pricing-options');
            const monthlyOption = container.querySelector('[data-period="monthly"]');
            const yearlyOption = container.querySelector('[data-period="yearly"]');
            const monthlyText = container.closest('.single-pricing-box').querySelector('.monthly');
            const yearlyText = container.closest('.single-pricing-box').querySelector('.yearly');
            
            if (checkbox.checked) {
                // Cambiar a pago único
                if (monthlyOption) monthlyOption.classList.remove('active');
                if (yearlyOption) yearlyOption.classList.add('active');
                if (monthlyText) monthlyText.classList.remove('active');
                if (yearlyText) yearlyText.classList.add('active');
            } else {
                // Cambiar a pago mensual
                if (monthlyOption) monthlyOption.classList.add('active');
                if (yearlyOption) yearlyOption.classList.remove('active');
                if (monthlyText) monthlyText.classList.add('active');
                if (yearlyText) yearlyText.classList.remove('active');
            }
        }
        
        // Inicializar los toggles
        const esencialToggle = document.getElementById('esencial-toggle');
        const avanzadoToggle = document.getElementById('avanzado-toggle');
        
        // Configurar evento para el toggle de Esencial
        if (esencialToggle) {
            esencialToggle.addEventListener('change', function() {
                handlePricingToggle(this, 'esencial');
            });
        }
        
        // Configurar evento para el toggle de Avanzado
        if (avanzadoToggle) {
            avanzadoToggle.addEventListener('change', function() {
                handlePricingToggle(this, 'avanzado');
            });
        }
        
        // Inicializar el estado de los toggles
        function initToggles() {
            // Asegurar que solo se muestre la opción mensual por defecto
            document.querySelectorAll('.pricing-options').forEach(container => {
                const monthlyOption = container.querySelector('[data-period="monthly"]');
                const yearlyOption = container.querySelector('[data-period="yearly"]');
                
                if (monthlyOption) monthlyOption.classList.add('active');
                if (yearlyOption) yearlyOption.classList.remove('active');
            });
            
            // Asegurar que los textos estén en el estado correcto
            document.querySelectorAll('.billing-toggle').forEach(toggle => {
                const monthlyText = toggle.querySelector('.monthly');
                const yearlyText = toggle.querySelector('.yearly');
                const checkbox = toggle.querySelector('input[type="checkbox"]');
                
                if (checkbox && checkbox.checked) {
                    if (monthlyText) monthlyText.classList.remove('active');
                    if (yearlyText) yearlyText.classList.add('active');
                } else {
                    if (monthlyText) monthlyText.classList.add('active');
                    if (yearlyText) yearlyText.classList.remove('active');
                }
            });
        }
        
        // Inicializar al cargar la página
        initToggles();
    });
    </script>

    <!-- Preloader -->
    <section>
      <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader ctn-preloader1">
          <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
              <span data-text-preloader="A" class="letters-loading">
                A
              </span>
              <span data-text-preloader="p" class="letters-loading">
                p
              </span>
              <span data-text-preloader="p" class="letters-loading">
                p
              </span>
              <span data-text-preloader="N" class="letters-loading">
                N
              </span>
              <span data-text-preloader="e" class="letters-loading">
                e
              </span>
              <span data-text-preloader="t" class="letters-loading">
                t
              </span>
              <span data-text-preloader="D" class="letters-loading">
                D
              </span>
              <span data-text-preloader="e" class="letters-loading">
                e
              </span>
              <span data-text-preloader="v" class="letters-loading">
                v
              </span>
              <span data-text-preloader="e" class="letters-loading">
                e
              </span>
              <span data-text-preloader="l" class="letters-loading">
                l
              </span>
              <span data-text-preloader="p" class="letters-loading">
                o
              </span>
              <span data-text-preloader="p" class="letters-loading">
                p
              </span>
              <span data-text-preloader="e" class="letters-loading">
                e
              </span>
              <span data-text-preloader="r" class="letters-loading">
                r
              </span>
            </div>
          </div>	
          <div class="loader-section-left loader-section section-left"></div>
          <div class="loader-section-right loader-section section-right"></div>
        </div>
      </div>
    </section>


<!--=====HEADER START=======-->

    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="pera">
              <p><img src="assets/img/icons/header-top-span.png" alt=""> Una empresa profesional de tecnología y soluciones informáticas que ofrece presencia mundial</p>
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
                  <img src="assets/img/logo/header-logo1.png" alt="">
                 </a>
               </div>


               <div class="main-menu-ex main-menu-ex1">
                <ul>
                  
                  <li><a href="index.php">Inicio</a></li>

                  <li class="dropdown-menu-parrent"><a href="#">Sobre Nosotros <i class="fa-solid fa-angle-down"></i></a>
                    <ul>
                     <li><a href="about.php">Sobre Nosotros</a></li>
                    </ul>
                  </li>

                  <li class="dropdown-menu-parrent"><a href="#" class="main1">Ofrecemos<i class="fa-solid fa-angle-down"></i></a>
                    <div class="mega-menu-all">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="mega-menu-single dis1">
                            <h3>Nuestros Servicios</h3>
                            <ul>
                              <li><a href="service.php">Servicio</a></li>
                            </ul>
                          </div>
                        </div>
                  
                        <div class="col-md-3">
                          <div class="mega-menu-single">
                            <h3>Boletín de Noticias</h3>
                            <ul>
                              <li><a href="blog.php">Blog</a></li>
                            </ul>
                          </div>
                        </div>
                  
                        <div class="col-md-3">
                          <div class="mega-menu-single">
                            <h3>Páginas</h3>
                            <ul>
                              <li><a href="about.php">Acerca de Nosotros</a></li>
                              <li><a href="contact.php">Contacto</a></li>
                              <li><a href="team.php">Nuestro Equipo</a></li>
                              <li><a href="testimonial.php">Testimonios</a></li>
                              <li></li>
                            </ul>
                          </div>
                        </div>
                  
                        <div class="col-md-3">
                          <div class="mega-menu-single">
                            <h3>Nuestros Proyectos</h3>
                            <ul>
                              <li><a href="proyectos.php ">Proyectos</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>

                  <li class="dropdown-menu-parrent"><a href="#">Blog <i class="fa-solid fa-angle-down"></i></a>
                   <ul>
                   <li><a href="blog.php">Blog</a></li>
                   </ul>
                 </li>

                 <li class="dropdown-menu-parrent"><a href="#">Project <i class="fa-solid fa-angle-down"></i></a>
                  <ul>
                   <li><a href="proyectos.php ">Project</a></li>

                  </ul>
                  <li class="dropdown-menu-parrent"><a href="#">Contacto <i class="fa-solid fa-angle-down"></i></a>
                    <ul>
                     <li><a href="contact.php">Contacta con Nosotros</a></li>
                    </ul>
                  </li>
                </li>
                    
                </ul>

               </div>



               <div class="header1-buttons">
                    <!-- Selector de idiomas -->
                    <div class="language-selector">
                        <button class="current-language" type="button">
                            <span class="language-flag"><?php echo $available_languages[$current_lang]['flag']; ?></span>
                            <span class="language-code"><?php echo strtoupper($current_lang); ?></span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </button>
                        <ul class="language-dropdown">
                            <?php foreach ($available_languages as $code => $language): ?>
                                <?php if ($code !== $current_lang): ?>
                                    <li>
                                        <a href="?lang=<?php echo $code; ?>" class="language-option" data-lang="<?php echo $code; ?>">
                                            <span class="language-flag"><?php echo $language['flag']; ?></span>
                                            <span class="language-name"><?php echo $language['name']; ?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <div class="contact-btn">
                      <div class="icon">
                        <img src="assets/img/icons/header1-icon.png" alt="">
                      </div>
                      <div class="headding">
                        <p>Haz una Llamada</p>
                        <a href="tel:+34619929305">+34 619 929 305</a>
                      </div>
                    </div>
                    <div class="button">
                      <a class="theme-btn1" href="contact.php"><?php echo __('get_quote'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
               </div>

             </div>
           </div>
         </div>
       </div>
     </div>
   </header>
    <!--=====HEADER END=======-->
    
        <!--=====Mobile header start=======-->
        <div class="mobile-header d-block d-lg-none">
          <div class="container-fluid">
            <div class="col-12">
              <div class="mobile-header-elements">
                <div class="mobile-logo">
                  <a href="index.php"><img src="assets/img/logo/header-logo1.png" alt="AppNet Developer"></a>
                </div>
                <div class="mobile-nav-icon">
                  <i class="fa-duotone fa-bars-staggered"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="mobile-sidebar d-block d-lg-none">
          <div class="logo-m">
            <a href="index.php"><img src="assets/img/logo/header-logo1.png" alt="AppNet Developer"></a>
          </div>
          <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
          </div>
          <div class="mobile-nav">
            <ul>
              <li><a href="index.php">Inicio</a></li>
              
              <li class="has-dropdown"><a href="#">Sobre Nosotros <i class="fa-solid fa-angle-down"></i></a>
                <ul class="sub-menu">
                  <li><a href="about.php">Sobre Nosotros</a></li>
                </ul>
              </li>

              <li class="has-dropdown"><a href="#">Ofrecemos <i class="fa-solid fa-angle-down"></i></a>
                <ul class="sub-menu">
                  <li><a href="service.php">Nuestros Servicios</a></li>
                  <li><a href="blog.php">Blog</a></li>
                  <li><a href="about.php">Acerca de Nosotros</a></li>
                  <li><a href="team.php">Nuestro Equipo</a></li>
                  <li><a href="testimonial.php">Testimonios</a></li>
                  <li><a href="proyectos.php">Nuestros Proyectos</a></li>
                </ul>
              </li>

              <li class="has-dropdown"><a href="#">Blog <i class="fa-solid fa-angle-down"></i></a>
                <ul class="sub-menu">
                  <li><a href="blog.php">Blog</a></li>
                </ul>
              </li>

              <li class="has-dropdown"><a href="#">Proyectos <i class="fa-solid fa-angle-down"></i></a>
                <ul class="sub-menu">
                  <li><a href="proyectos.php">Proyectos</a></li>
                </ul>
              </li>

              <li><a href="contact.php">Contacto</a></li>
            </ul>
            
            <div class="mobile-button">
              <a class="theme-btn1" href="contact.php">Obtén un Presupuesto <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>

            <div class="single-footer-items">
              <h3>Contáctanos</h3>

              <div class="contact-box">
                <div class="icon">
                  <img src="assets/img/icons/header1-icon.png" alt="Teléfono">
                </div>
                <div class="pera">
                  <p>Haz una Llamada</p>
                  <a href="tel:+34619929305">+34 619 929 305</a>
                </div>
              </div>

              <div class="contact-box">
                <div class="icon">
                  <img src="assets/img/icons/footer1-icon3.png" alt="Email">
                </div>
                <div class="pera">
                  <p>Envíanos un Email</p>
                  <a href="mailto:info@appnet.dev">info@appnet.dev</a>
                </div>
              </div>

              <div class="contact-box">
                <div class="icon">
                  <img src="assets/img/icons/footer1-icon4.png" alt="Web">
                </div>
                <div class="pera">
                  <p>Visítanos en</p>
                  <a href="https://appnet.dev">www.appnet.dev</a>
                </div>
              </div>

         </div>

            <div class="contact-infos">
              <h3>Nuestra Ubicación</h3>
              <ul class="social-icon">
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
           </ul>
            </div>

          </div>
        </div>

        <!--=====Mobile header end=======-->

    <!-- Popup de selección de idioma -->
    <?php if ($first_visit): ?>
    <div id="language-popup" class="language-popup" style="display: flex;">
        <div class="language-popup-content">
            <h2><?php echo __('welcome'); ?></h2>
            <p><?php echo __('select_language'); ?></p>
            <div class="language-options">
                <?php foreach ($available_languages as $code => $language): ?>
                    <a href="?lang=<?php echo $code; ?>" class="language-option-btn" data-lang="<?php echo $code; ?>">
                        <span class="flag"><?php echo $language['flag']; ?></span>
                        <span class="name"><?php echo $language['name']; ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!--=====JS=======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/mobile-menu.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
    // Cerrar popup al hacer clic fuera del contenido
    document.addEventListener('DOMContentLoaded', function() {
        const languagePopup = document.getElementById('language-popup');
        
        if (languagePopup) {
            languagePopup.addEventListener('click', function(e) {
                if (e.target === languagePopup) {
                    languagePopup.style.display = 'none';
                }
            });
            
            // Cerrar popup al seleccionar un idioma
            const languageButtons = document.querySelectorAll('.language-option-btn');
            languageButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const lang = this.getAttribute('data-lang');
                    setLanguage(lang);
                });
            });
        }
        
        // Función para cambiar el idioma
        function setLanguage(lang) {
            // Establecer la cookie de idioma
            document.cookie = `appnet_language=${lang};path=/;max-age=${60*60*24*365};SameSite=Lax`;
            
            // Redirigir a la misma página con el nuevo idioma
            const url = new URL(window.location.href);
            url.searchParams.set('lang', lang);
            window.location.href = url.toString();
        }
        
        // Manejar el selector de idiomas en el header
        const currentLanguageBtn = document.querySelector('.current-language');
        if (currentLanguageBtn) {
            currentLanguageBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                const dropdown = this.nextElementSibling;
                dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
            });
            
            // Cerrar el dropdown al hacer clic fuera
            document.addEventListener('click', function() {
                const dropdowns = document.querySelectorAll('.language-dropdown');
                dropdowns.forEach(dropdown => {
                    dropdown.style.display = 'none';
                });
            });
        }
    });
    </script>
