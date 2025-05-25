<?php 
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Configuración de la página
$page_title = __('home');

include "header.php"; 
?>
  <div class="hero1" style="background-image: url(assets/img/bg/hero1-bg.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="main-headding">
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> <?php echo __('hero_subtitle'); ?></span>
            <h1 class="title tg-element-title"><?php echo __('hero_title'); ?></h1>
            <div class="space16"></div>
            <p data-aos="fade-right" data-aos-duration="700"><?php echo __('hero_description'); ?></p>
            <div class="space30"></div>
            <div class="buttons">
              <a class="theme-btn1" href="service.php"><?php echo __('our_solutions'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
              <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=kcfs1-ryKWE"><span><i class="fa-regular fa-play"></i></span> <?php echo __('watch_demo'); ?></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero1-all-images">
            <div class="image1 ">
              <img src="assets/img/hero/AppNetDeveloper-1.webp" alt="Ilustración tecnológica 1">
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
              <i class="fas fa-robot" style="font-size: 40px; color: #4e54c8;"></i>
            </div>
            <div class="headding">
              <h5><?php echo __('feature1_title'); ?></h5>
              <p><?php echo __('feature1_desc'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="single-box h-100">
            <div class="icon">
              <i class="fas fa-network-wired" style="font-size: 40px; color: #4e54c8;"></i>
            </div>
            <div class="headding">
              <h5><?php echo __('feature2_title'); ?></h5>
              <p><?php echo __('feature2_desc'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <div class="single-box h-100">
            <div class="icon">
              <i class="fas fa-shield-alt" style="font-size: 40px; color: #4e54c8;"></i>
            </div>
            <div class="headding">
              <h5><?php echo __('feature3_title'); ?></h5>
              <p><?php echo __('feature3_desc'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="single-box h-100">
            <div class="icon">
              <i class="fas fa-headset" style="font-size: 40px; color: #4e54c8;"></i>
            </div>
            <div class="headding">
              <h5><?php echo __('feature4_title'); ?></h5>
              <p><?php echo __('feature4_desc'); ?></p>
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
              <img src="assets/img/about/about1-img1.png" alt="<?php echo __('about_image1_alt'); ?>">
            </div>
            <div class="image2 reveal image-anime">
              <img src="assets/img/about/about1-img2.png" alt="<?php echo __('about_image2_alt'); ?>">
            </div>
            <div class="icon-box">
              <img src="assets/img/icons/about1-shape-icon.png" alt="<?php echo __('about_icon_alt'); ?>">
              <h4><?php echo __('about_innovation_title'); ?></h4>
              <p><?php echo __('about_innovation_desc'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="heading1">
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> <?php echo __('about_section_title'); ?></span>
            <h2 class="title tg-element-title"><?php echo __('about_main_title'); ?></h2>
            <div class="space16"></div>
            <p data-aos="fade-left" data-aos-duration="800"><?php echo __('about_description'); ?></p>
            <ul class="list" data-aos="fade-left" data-aos-duration="1100">
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('about_feature1'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('about_feature2'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('about_feature3'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('about_feature4'); ?></li>
            </ul>
            <div class="space30"></div>
            <div class="" data-aos="fade-left" data-aos-duration="900">
              <a class="theme-btn1" href="about.php"><?php echo __('about_button'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Sección de Servicios Empresariales -->
  <div class="enterprise-services sp" style="background-color: #f8f9fa;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto text-center">
          <div class="heading1">
            <span class="span" data-aos="zoom-in-left" data-aos-duration="700">
              <img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;">
              <?php echo __('services_section_title'); ?>
            </span>
            <h2 class="title"><?php echo __('services_main_title'); ?></h2>
            <div class="space16"></div>
            <p><?php echo __('services_subtitle'); ?></p>
          </div>
        </div>
      </div>
      
      <div class="row g-4">
        <!-- Servicio 1: IA y Machine Learning -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="500">
          <div class="service-card h-100">
            <div class="service-icon">
              <i class="fas fa-brain"></i>
            </div>
            <div class="service-content">
              <h3><?php echo __('service1_title'); ?></h3>
              <ul class="service-features">
                <li><?php echo __('service1_feature1'); ?></li>
                <li><?php echo __('service1_feature2'); ?></li>
                <li><?php echo __('service1_feature3'); ?></li>
                <li><?php echo __('service1_feature4'); ?></li>
              </ul>
              <a href="servicio-ia.php" class="service-link"><?php echo __('view_details'); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        
        <!-- Servicio 2: IoT Industrial -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
          <div class="service-card h-100">
            <div class="service-icon">
              <i class="fas fa-microchip"></i>
            </div>
            <div class="service-content">
              <h3><?php echo __('service2_title'); ?></h3>
              <ul class="service-features">
                <li><?php echo __('service2_feature1'); ?></li>
                <li><?php echo __('service2_feature2'); ?></li>
                <li><?php echo __('service2_feature3'); ?></li>
                <li><?php echo __('service2_feature4'); ?></li>
              </ul>
              <a href="servicio-iot-industrial.php" class="service-link"><?php echo __('view_details'); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        
        <!-- Servicio 3: Desarrollo de Software -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
          <div class="service-card h-100">
            <div class="service-icon">
              <i class="fas fa-laptop-code"></i>
            </div>
            <div class="service-content">
              <h3><?php echo __('service3_title'); ?></h3>
              <ul class="service-features">
                <li><?php echo __('service3_feature1'); ?></li>
                <li><?php echo __('service3_feature2'); ?></li>
                <li><?php echo __('service3_feature3'); ?></li>
                <li><?php echo __('service3_feature4'); ?></li>
              </ul>
              <a href="servicio-desarrollo-software.php" class="service-link"><?php echo __('view_details'); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-5">
        <a href="service.php" class="theme-btn1"><?php echo __('view_all_services'); ?> <i class="fas fa-arrow-right ms-2"></i></a>
      </div>
    </div>
  </div>
  
  <!-- Sección de Beneficios -->
  <div class="benefits-section sp">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="benefits-content">
            <h2><?php echo __('benefits_title'); ?></h2>
            <p><?php echo __('benefits_subtitle'); ?></p>
            
            <div class="benefit-item">
              <div class="benefit-icon">
                <i class="fas fa-chart-line"></i>
              </div>
              <div class="benefit-text">
                <h4><?php echo __('benefit1_title'); ?></h4>
                <p><?php echo __('benefit1_desc'); ?></p>
              </div>
            </div>
            
            <div class="benefit-item">
              <div class="benefit-icon">
                <i class="fas fa-shield-alt"></i>
              </div>
              <div class="benefit-text">
                <h4><?php echo __('benefit2_title'); ?></h4>
                <p><?php echo __('benefit2_desc'); ?></p>
              </div>
            </div>
            
            <div class="benefit-item">
              <div class="benefit-icon">
                <i class="fas fa-lightbulb"></i>
              </div>
              <div class="benefit-text">
                <h4><?php echo __('benefit3_title'); ?></h4>
                <p><?php echo __('benefit3_desc'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="benefits-image">
            <img src="assets/img/benefits-image.png" alt="<?php echo __('benefits_image_alt'); ?>" class="img-fluid rounded">
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
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> <?php echo __('platform_section_title'); ?></span>
            <h2 class="title tg-element-title"><?php echo __('platform_main_title'); ?></h2>
            <p class="mt-3"><?php echo __('platform_subtitle'); ?></p>
          </div>
        </div>
      </div>
      <div class="space30"></div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in-up" data-aos-duration="700">
          <div class="single-box h-100">
            <div class="icon">
              <i class="fas fa-brain" style="font-size: 40px; color: #4e54c8;"></i>
            </div>
            <div class="heading1">
              <h4><a href="servicio-ia-empresarial.php"><?php echo __('platform_feature1_title'); ?></a></h4>
              <div class="space16"></div>
              <p><?php echo __('platform_feature1_desc'); ?></p>
              <div class="space16"></div>
              <a href="servicio-ia-empresarial.php" class="learn"><?php echo __('discover_how'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in-up" data-aos-duration="900">
          <div class="single-box h-100">
            <div class="icon">
              <i class="fas fa-industry" style="font-size: 40px; color: #4e54c8;"></i>
            </div>
            <div class="heading1">
              <h4><a href="servicio-control-produccion.php"><?php echo __('platform_feature2_title'); ?></a></h4>
              <div class="space16"></div>
              <p><?php echo __('platform_feature2_desc'); ?></p>
              <div class="space16"></div>
              <a href="servicio-control-produccion.php" class="learn"><?php echo __('view_demo'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in-up" data-aos-duration="1100">
          <div class="single-box h-100">
            <div class="icon">
              <i class="fas fa-users-cog" style="font-size: 40px; color: #4e54c8;"></i>
            </div>
            <div class="heading1">
              <h4><a href="servicio-gestion-personal.php"><?php echo __('platform_feature3_title'); ?></a></h4>
              <div class="space16"></div>
              <p><?php echo __('platform_feature3_desc'); ?></p>
              <div class="space16"></div>
              <a href="servicio-gestion-personal.php" class="learn"><?php echo __('view_features'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in-up" data-aos-duration="700">
          <div class="single-box h-100">
            <div class="icon">
              <i class="fas fa-comment-dots" style="font-size: 40px; color: #4e54c8;"></i>
            </div>
            <div class="heading1">
              <h4><a href="servicio-comunicacion-automatizada.php"><?php echo __('platform_feature4_title'); ?></a></h4>
              <div class="space16"></div>
              <p><?php echo __('platform_feature4_desc'); ?></p>
              <div class="space16"></div>
              <a href="servicio-comunicacion-automatizada.php" class="learn"><?php echo __('discover_more'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in-up" data-aos-duration="900">
          <div class="single-box h-100">
            <div class="icon">
              <i class="fas fa-microchip" style="font-size: 40px; color: #4e54c8;"></i>
            </div>
            <div class="heading1">
              <h4><a href="servicio-iot-industrial.php"><?php echo __('platform_feature5_title'); ?></a></h4>
              <div class="space16"></div>
              <p><?php echo __('platform_feature5_desc'); ?></p>
              <div class="space16"></div>
              <a href="servicio-iot-industrial.php" class="learn"><?php echo __('view_use_cases'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in-up" data-aos-duration="1100">
          <div class="single-box h-100">
            <div class="icon">
              <i class="fas fa-chart-line" style="font-size: 40px; color: #4e54c8;"></i>
            </div>
            <div class="heading1">
              <h4><a href="servicio-analitica-empresarial.php"><?php echo __('platform_feature6_title'); ?></a></h4>
              <div class="space16"></div>
              <p><?php echo __('platform_feature6_desc'); ?></p>
              <div class="space16"></div>
              <a href="servicio-analitica-empresarial.php" class="learn"><?php echo __('view_demo'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> <?php echo __('approach_section_title'); ?></span>
            <h2 class="title tg-element-title"><?php echo __('approach_main_title'); ?></h2>
            <div class="space16"></div>
            <p data-aos="fade-right" data-aos-duration="700"><?php echo __('approach_description'); ?></p>

            <div class="single-items" data-aos="fade-right" data-aos-duration="700">
              <div class="icon">
                 <img src="assets/img/icons/work-iocn1.png" alt="<?php echo __('step1_alt'); ?>">
              </div>
              <div>
                <h4><a href="#"><?php echo __('step1_title'); ?></a></h4>
                <div class="space10"></div>
                <p><?php echo __('step1_desc'); ?></p>
              </div>
            </div>
            <div class="single-items" data-aos="fade-right" data-aos-duration="900">
              <div class="icon">
                 <img src="assets/img/icons/work-iocn2.png" alt="<?php echo __('step2_alt'); ?>">
              </div>
              <div>
                <h4><a href="#"><?php echo __('step2_title'); ?></a></h4>
                <div class="space10"></div>
                <p><?php echo __('step2_desc'); ?></p>
              </div>
            </div>
            <div class="single-items" data-aos="fade-right" data-aos-duration="1100">
              <div class="icon">
                 <img src="assets/img/icons/work-iocn3.png" alt="<?php echo __('step3_alt'); ?>">
              </div>
              <div>
                <h4><a href="#"><?php echo __('step3_title'); ?></a></h4>
                <div class="space10"></div>
                <p><?php echo __('step3_desc'); ?></p>
              </div>
            </div>
            <div class="space30"></div>
            <div class="" data-aos="fade-right" data-aos-duration="800">
              <a class="theme-btn1" href="service.php"><?php echo __('explore_possibilities'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> <?php echo __('pricing_section_title'); ?></span>
            <h2 class="title tg-element-title"><?php echo __('pricing_main_title'); ?></h2>
            <p class="mt-3"><?php echo __('pricing_subtitle'); ?></p>
          </div>
        </div>
      </div>
      <div class="space30"></div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="700">
          <div class="single-pricing-box h-100">
            <p class="title"><?php echo __('pricing_plan1_title'); ?></p>
            <div class="pricing-options">
              <div class="pricing-option active" data-period="monthly">
                <h3><?php echo __('initial_investment'); ?>:</h3>
                <h2>5.000€ <span>+ 99€/<?php echo __('month'); ?></span></h2>
                <p class="pera"><?php echo __('monthly_service_payment'); ?></p>
                <div class="server-specs">
                  <p><i class="fas fa-server"></i> <?php echo __('included_mini_pc'); ?>:</p>
                  <ul>
                    <li><i class="fas fa-microchip"></i> <?php echo __('spec1'); ?></li>
                    <li><i class="fas fa-memory"></i> <?php echo __('spec2'); ?></li>
                    <li><i class="fas fa-hdd"></i> <?php echo __('spec3'); ?></li>
                    <li><i class="fas fa-microchip"></i> <?php echo __('spec4'); ?></li>
                    <li><i class="fas fa-shield-alt"></i> <?php echo __('included_licenses'); ?></li>
                  </ul>
                </div>
              </div>
              <div class="pricing-option" data-period="yearly">
                <h3><?php echo __('one_time_payment'); ?>:</h3>
                <h2>15.000€</h2>
                <p class="pera"><?php echo __('all_inclusive_support'); ?></p>
                <div class="server-specs">
                  <p><i class="fas fa-server"></i> <?php echo __('included_mini_pc'); ?>:</p>
                  <ul>
                    <li><i class="fas fa-microchip"></i> <?php echo __('spec1'); ?></li>
                    <li><i class="fas fa-memory"></i> <?php echo __('spec2'); ?></li>
                    <li><i class="fas fa-hdd"></i> <?php echo __('spec3'); ?></li>
                    <li><i class="fas fa-microchip"></i> <?php echo __('spec4'); ?></li>
                    <li><i class="fas fa-shield-alt"></i> <?php echo __('permanent_licenses'); ?></li>
                  </ul>
                </div>
                <div class="discount-badge"><?php echo __('long_term_savings'); ?></div>
              </div>
            </div>
            <div class="billing-toggle text-center mb-3">
              <span class="monthly active"><?php echo __('monthly_payment'); ?></span>
              <label class="switch">
                <input type="checkbox" id="esencial-toggle">
                <span class="slider round"></span>
              </label>
              <span class="yearly"><?php echo __('one_time_payment'); ?></span>
            </div>
            <div class="border"></div>
            <h4><?php echo __('key_features'); ?>:</h4>
            <ul class="list">
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature1'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature2'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature3'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature4'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature5'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature6'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature7'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature8'); ?></li>
            </ul>
            <div class="space30"></div>
            <div class="button">
              <a class="theme-btn1" href="contact.php?plan=esencial"><?php echo __('request_demo'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1100">
          <div class="single-pricing-box active h-100">
            <p class="title"><?php echo __('pricing_plan2_title'); ?></p>
            <div class="pricing-options">
              <div class="pricing-option active" data-period="monthly">
                <h3><?php echo __('initial_investment'); ?>:</h3>
                <h2>9.000€ <span>+ 199€/<?php echo __('month'); ?></span></h2>
                <p class="pera"><?php echo __('monthly_service_payment'); ?></p>
                <div class="server-specs">
                  <p><i class="fas fa-server"></i> <?php echo __('included_workstation'); ?>:</p>
                  <ul>
                    <li><i class="fas fa-microchip"></i> <?php echo __('spec5'); ?></li>
                    <li><i class="fas fa-memory"></i> <?php echo __('spec6'); ?></li>
                    <li><i class="fas fa-hdd"></i> <?php echo __('spec7'); ?></li>
                    <li><i class="fas fa-microchip"></i> <?php echo __('spec8'); ?></li>
                    <li><i class="fas fa-shield-alt"></i> <?php echo __('premium_licenses'); ?></li>
                  </ul>
                </div>
              </div>
              <div class="pricing-option" data-period="yearly">
                <h3><?php echo __('one_time_payment'); ?>:</h3>
                <h2>19.000€</h2>
                <p class="pera"><?php echo __('all_inclusive_support'); ?></p>
                <div class="server-specs">
                  <p><i class="fas fa-server"></i> <?php echo __('included_workstation'); ?>:</p>
                  <ul>
                    <li><i class="fas fa-microchip"></i> <?php echo __('spec5'); ?></li>
                    <li><i class="fas fa-memory"></i> <?php echo __('spec6'); ?></li>
                    <li><i class="fas fa-hdd"></i> <?php echo __('spec7'); ?></li>
                    <li><i class="fas fa-microchip"></i> <?php echo __('spec8'); ?></li>
                    <li><i class="fas fa-shield-alt"></i> <?php echo __('permanent_licenses'); ?></li>
                  </ul>
                </div>
                <div class="discount-badge"><?php echo __('long_term_savings'); ?></div>
              </div>
            </div>
            <div class="billing-toggle text-center mb-3">
              <span class="monthly active"><?php echo __('monthly_payment'); ?></span>
              <label class="switch">
                <input type="checkbox" id="avanzado-toggle">
                <span class="slider round"></span>
              </label>
              <span class="yearly"><?php echo __('one_time_payment'); ?></span>
            </div>
            <div class="border"></div>
            <h4><?php echo __('key_features'); ?>:</h4>
            <ul class="list">
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('all_essential_features'); ?> +</li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('custom_llm'); ?></li>
            </ul>
            <div class="space30"></div>
            <div class="button">
              <a class="theme-btn1" href="contact.php?plan=avanzado"><?php echo __('request_info'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="900">
          <div class="single-pricing-box h-100">
            <p class="title"><?php echo __('custom_solution_title'); ?></p>
            <h2><?php echo __('custom_solution_subtitle'); ?><span></span></h2>
            <p class="pera"><?php echo __('custom_solution_desc'); ?></p>
            <div class="border"></div>
            <h4><?php echo __('included_features'); ?>:</h4>
            <ul class="list">
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature_custom1'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature_custom2'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature_custom3'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature_custom4'); ?></li>
              <li><span><i class="fa-solid fa-check"></i></span> <?php echo __('feature_custom5'); ?></li>
            </ul>
            <div class="space30"></div>
            <div class="button">
              <a class="theme-btn1" href="contact.php"><?php echo __('contact_us'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
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
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> <?php echo __('testimonials_section_title'); ?></span>
            <h2 class="title tg-element-title"><?php echo __('testimonials_main_title'); ?></h2>
          </div>
        </div>
      </div>
      <div class="row _relative">
        <div class="tes1-slider" data-aos="fade-up" data-aos-duration="800">
          <div class="tes1-single-slider">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <div class="right-side">
                  <h4><?php echo __('testimonial1_title'); ?></h4>
                  <p>"<?php echo __('testimonial1_content'); ?>"</p>
                  <div class="author-info mt-3">
                      <strong>- <?php echo __('testimonial1_author'); ?></strong>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="left-side">
                  <img src="assets/img/transformacion-digital.webp" alt="Transformación digital empresarial">
                </div>
              </div>
            </div>
          </div>
          <div class="tes1-single-slider">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <div class="right-side">
                  <h4><?php echo __('testimonial2_title'); ?></h4>
                   <p>"<?php echo __('testimonial2_content'); ?>"</p>
                   <div class="author-info mt-3">
                      <strong>- <?php echo __('testimonial2_author'); ?></strong>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="left-side">
                   <img src="assets/img/automatizacion-industrial.webp" alt="Automatización industrial con IA">
                </div>
              </div>
            </div>
          </div>
           <div class="tes1-single-slider">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <div class="right-side">
                  <h4><?php echo __('testimonial3_title'); ?></h4>
                   <p>"<?php echo __('testimonial3_content'); ?>"</p>
                   <div class="author-info mt-3">
                      <strong>- <?php echo __('testimonial3_author'); ?></strong>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="left-side">
                   <img src="assets/img/comunicaciones-empresariales.webp" alt="Comunicaciones unificadas empresariales">
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
             <span class="span" data-aos="zoom-in-left" data-aos-duration="700"><img src="assets/img/icons/span1.png" alt="" style="vertical-align: middle; margin-right: 5px;"> <?php echo __('blog_section_title'); ?></span>
            <h2 class="title tg-element-title"><?php echo __('blog_main_title'); ?></h2>
          </div>
        </div>
      </div>
      <div class="space30"></div>
      <div class="row">
         <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-box blog-post-preview" data-aos="zoom-in-up" data-aos-duration="1100">
            <div class="icon mb-3"> <img src="assets/img/icons/service-icon1.png" alt="Icono Servicio 1">
            </div>
            <h4><a href="blog-post-1.php"><?php echo __('blog_post1_title'); ?></a></h4>
            <p class="blog-excerpt"><?php echo __('blog_post1_excerpt'); ?>...</p>
            <a href="blog-post-1.php" class="learn-more-link"><?php echo __('read_more'); ?> <i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-box blog-post-preview" data-aos="zoom-in-up" data-aos-duration="900">
            <div class="icon mb-3">
               <img src="assets/img/icons/service-icon2.png" alt="Icono Servicio 2">
            </div>
            <h4><a href="blog-post-2.php"><?php echo __('blog_post2_title'); ?></a></h4>
            <p class="blog-excerpt"><?php echo __('blog_post2_excerpt'); ?>...</p>
             <a href="blog-post-2.php" class="learn-more-link"><?php echo __('read_more'); ?> <i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-box blog-post-preview" data-aos="zoom-in-up" data-aos-duration="700">
            <div class="icon mb-3">
               <img src="assets/img/icons/service-icon3.png" alt="Icono Servicio 3">
            </div>
            <h4><a href="blog-post-3.php"><?php echo __('blog_post3_title'); ?></a></h4>
            <p class="blog-excerpt"><?php echo __('blog_post3_excerpt'); ?>...</p>
             <a href="blog-post-3.php" class="learn-more-link"><?php echo __('read_more'); ?> <i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-box blog-post-preview" data-aos="zoom-in-up" data-aos-duration="1100">
            <div class="icon mb-3">
               <img src="assets/img/icons/service-icon4.png" alt="Icono Servicio 4">
            </div>
            <h4><a href="blog-post-4.php"><?php echo __('blog_post4_title'); ?></a></h4>
            <p class="blog-excerpt"><?php echo __('blog_post4_excerpt'); ?>...</p>
             <a href="blog-post-4.php" class="learn-more-link"><?php echo __('read_more'); ?> <i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-box blog-post-preview" data-aos="zoom-in-up" data-aos-duration="900">
            <div class="icon mb-3">
               <img src="assets/img/icons/service-icon5.png" alt="Icono Servicio 5">
            </div>
            <h4><a href="blog-post-5.php"><?php echo __('blog_post5_title'); ?></a></h4>
            <p class="blog-excerpt"><?php echo __('blog_post5_excerpt'); ?>...</p>
             <a href="blog-post-5.php" class="learn-more-link"><?php echo __('read_more'); ?> <i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
         <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-box blog-post-preview" data-aos="zoom-in-up" data-aos-duration="700">
            <div class="icon mb-3">
               <img src="assets/img/icons/service-icon4.png" alt="Icono Servicio 6">
            </div>
            <h4><a href="blog-post-6.php"><?php echo __('blog_post6_title'); ?></a></h4>
            <p class="blog-excerpt"><?php echo __('blog_post6_excerpt'); ?>...</p>
             <a href="blog-post-6.php" class="learn-more-link"><?php echo __('read_more'); ?> <i class="fa-solid fa-angle-right"></i></a>
          </div>
        </div>
      </div>
       <div class="row mt-4">
            <div class="col-12 text-center">
                <a href="blog.php" class="theme-btn1"><?php echo __('view_all_posts'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
        </div>
    </div>
  </div>
  <div class="cta">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7">
          <div class="heading1-w">
            <h2 class="title tg-element-title"><?php echo __('cta_title'); ?></h2>
            <div class="space16"></div>
            <p data-aos="fade-right" data-aos-duration="700"><?php echo __('cta_description'); ?></p>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="buttons text-lg-end">
            <a class="cta-btn1 mb-2 mb-lg-0" href="contact.php"><?php echo __('request_free_consultation'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
            <a class="cta-btn2" href="service.php"><?php echo __('explore_solutions'); ?> <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "footer.php"; ?>