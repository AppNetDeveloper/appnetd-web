<?php 
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Configuración de la página
$page_title = __('home');

include "includes/header.php"; 
?>
  <!-- Hero Section Modernizada -->
  <section class="hero-modern" id="hero">
    <div class="hero-background">
      <div class="hero-gradient"></div>
      <div class="hero-particles"></div>
    </div>
    <div class="container">
      <div class="row align-items-center min-vh-100">
        <div class="col-lg-6 hero-content">
          <div class="hero-badge" data-aos="fade-down" data-aos-duration="800">
            <span class="badge-icon"><i class="fas fa-rocket"></i></span>
            <span><?php echo __('hero_subtitle'); ?></span>
          </div>
          <h1 class="hero-title" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
            <?php echo __('hero_title'); ?>
          </h1>
          <p class="hero-description" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <?php echo __('hero_description'); ?>
          </p>
          <div class="hero-actions" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">
            <a href="service.php" class="btn btn-primary btn-modern me-3">
              <span><?php echo __('our_solutions'); ?></span>
              <i class="fas fa-arrow-right ms-2"></i>
            </a>
            <a href="https://www.youtube.com/watch?v=kcfs1-ryKWE" class="btn btn-outline-light btn-video popup-youtube">
              <i class="fas fa-play me-2"></i>
              <span><?php echo __('watch_demo'); ?></span>
            </a>
          </div>
          
          <div class="hero-stats" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
            <div class="stat-item">
              <div class="stat-number">500+</div>
              <div class="stat-label"><?php echo __('projects_completed'); ?></div>
            </div>
            <div class="stat-item">
              <div class="stat-number">98%</div>
              <div class="stat-label"><?php echo __('client_satisfaction'); ?></div>
            </div>
            <div class="stat-item">
              <div class="stat-number">24/7</div>
              <div class="stat-label"><?php echo __('support_available'); ?></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-visual">
          <div class="hero-image-container" data-aos="fade-left" data-aos-duration="1000">
            <div class="hero-image-main">
              <img src="assets/img/hero/AppNetDeveloper-1.webp"
     srcset="assets/img/hero/AppNetDeveloper-1.webp 768w, assets/img/hero/AppNetDeveloper-1.webp 1200w"
     sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 50vw"
     alt="<?php echo __('hero_main_image_alt'); ?>" class="img-fluid">
            </div>
            <div class="floating-card card-1" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="200">
              <div class="card-icon"><i class="fas fa-robot"></i></div>
              <div class="card-text"><?php echo __('hero_card_ai'); ?></div>
            </div>
            <div class="floating-card card-2" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="400">
              <div class="card-icon"><i class="fas fa-microchip"></i></div>
              <div class="card-text"><?php echo __('hero_card_iot'); ?></div>
            </div>
            <div class="floating-card card-3" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="600">
              <div class="card-icon"><i class="fas fa-shield-alt"></i></div>
              <div class="card-text"><?php echo __('hero_card_cybersecurity'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Características Modernizada -->
  <section class="features-modern py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="600">
          <div class="feature-card-modern">
            <div class="feature-icon-wrapper">
              <div class="feature-icon">
                <i class="fas fa-robot"></i>
              </div>
            </div>
            <div class="feature-content">
              <h4><?php echo __('feature1_title'); ?></h4>
              <p><?php echo __('feature1_desc'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
          <div class="feature-card-modern">
            <div class="feature-icon-wrapper">
              <div class="feature-icon">
                <i class="fas fa-network-wired"></i>
              </div>
            </div>
            <div class="feature-content">
              <h4><?php echo __('feature2_title'); ?></h4>
              <p><?php echo __('feature2_desc'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="feature-card-modern">
            <div class="feature-icon-wrapper">
              <div class="feature-icon">
                <i class="fas fa-shield-alt"></i>
              </div>
            </div>
            <div class="feature-content">
              <h4><?php echo __('feature3_title'); ?></h4>
              <p><?php echo __('feature3_desc'); ?></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="900" data-aos-delay="300">
          <div class="feature-card-modern">
            <div class="feature-icon-wrapper">
              <div class="feature-icon">
                <i class="fas fa-headset"></i>
              </div>
            </div>
            <div class="feature-content">
              <h4><?php echo __('feature4_title'); ?></h4>
              <p><?php echo __('feature4_desc'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección About Modernizada -->
  <section class="about-modern py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
          <div class="about-visual">
            <div class="about-image-main">
              <img src="assets/img/about/about1-img1.png"
     srcset="assets/img/about/about1-img1.png 768w, assets/img/about/about1-img1.png 1200w"
     sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 50vw"
     alt="<?php echo __('about_image1_alt'); ?>" class="img-fluid rounded-4">
            </div>
            <div class="about-image-secondary">
              <img src="assets/img/about/about1-img2.png"
     srcset="assets/img/about/about1-img2.png 768w, assets/img/about/about1-img2.png 1200w"
     sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 50vw"
     alt="<?php echo __('about_image2_alt'); ?>" class="img-fluid rounded-4">
            </div>
            <div class="about-badge">
              <i class="fas fa-lightbulb"></i>
              <div>
                <h5><?php echo __('about_innovation_title'); ?></h5>
                <p><?php echo __('about_innovation_desc'); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
          <div class="about-content">
            <div class="section-badge">
              <span><?php echo __('about_section_title'); ?></span>
            </div>
            <h2 class="section-title"><?php echo __('about_main_title'); ?></h2>
            <p class="section-description"><?php echo __('about_description'); ?></p>
            
            <div class="features-list">
              <div class="feature-item">
                <div class="feature-check">
                  <i class="fas fa-check-circle"></i>
                </div>
                <span><?php echo __('about_feature1'); ?></span>
              </div>
              <div class="feature-item">
                <div class="feature-check">
                  <i class="fas fa-check-circle"></i>
                </div>
                <span><?php echo __('about_feature2'); ?></span>
              </div>
              <div class="feature-item">
                <div class="feature-check">
                  <i class="fas fa-check-circle"></i>
                </div>
                <span><?php echo __('about_feature3'); ?></span>
              </div>
              <div class="feature-item">
                <div class="feature-check">
                  <i class="fas fa-check-circle"></i>
                </div>
                <span><?php echo __('about_feature4'); ?></span>
              </div>
            </div>
            
            <div class="about-actions">
              <a href="about.php" class="btn btn-primary btn-modern">
                <span><?php echo __('about_button'); ?></span>
                <i class="fas fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Servicios Modernizada -->
  <section class="services-modern py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
          <div class="section-header">
            <div class="section-badge">
              <span><?php echo __('services_section_title'); ?></span>
            </div>
            <h2 class="section-title"><?php echo __('services_main_title'); ?></h2>
            <p class="section-description"><?php echo __('services_subtitle'); ?></p>
          </div>
        </div>
      </div>
      
      <div class="row g-4">
        <!-- Servicio 1: IA y Machine Learning -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
          <div class="service-card-modern">
            <div class="service-header">
              <div class="service-icon">
                <i class="fas fa-brain"></i>
              </div>
              <div class="service-number">01</div>
            </div>
            <div class="service-body">
              <h3><?php echo __('service1_title'); ?></h3>
              <p><?php echo __('service1_desc'); ?></p>
              <ul class="service-features">
                <li><i class="fas fa-check"></i> <?php echo __('service1_feature1'); ?></li>
                <li><i class="fas fa-check"></i> <?php echo __('service1_feature2'); ?></li>
                <li><i class="fas fa-check"></i> <?php echo __('service1_feature3'); ?></li>
                <li><i class="fas fa-check"></i> <?php echo __('service1_feature4'); ?></li>
              </ul>
            </div>
            <div class="service-footer">
              <a href="servicio-ia.php" class="service-link">
                <span><?php echo __('view_details'); ?></span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Servicio 2: IoT Industrial -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
          <div class="service-card-modern">
            <div class="service-header">
              <div class="service-icon">
                <i class="fas fa-microchip"></i>
              </div>
              <div class="service-number">02</div>
            </div>
            <div class="service-body">
              <h3><?php echo __('service2_title'); ?></h3>
              <p><?php echo __('service2_desc'); ?></p>
              <ul class="service-features">
                <li><i class="fas fa-check"></i> <?php echo __('service2_feature1'); ?></li>
                <li><i class="fas fa-check"></i> <?php echo __('service2_feature2'); ?></li>
                <li><i class="fas fa-check"></i> <?php echo __('service2_feature3'); ?></li>
                <li><i class="fas fa-check"></i> <?php echo __('service2_feature4'); ?></li>
              </ul>
            </div>
            <div class="service-footer">
              <a href="servicio-iot-industrial.php" class="service-link">
                <span><?php echo __('view_details'); ?></span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Servicio 3: Desarrollo de Software -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="service-card-modern">
            <div class="service-header">
              <div class="service-icon">
                <i class="fas fa-laptop-code"></i>
              </div>
              <div class="service-number">03</div>
            </div>
            <div class="service-body">
              <h3><?php echo __('service3_title'); ?></h3>
              <p><?php echo __('service3_desc'); ?></p>
              <ul class="service-features">
                <li><i class="fas fa-check"></i> <?php echo __('service3_feature1'); ?></li>
                <li><i class="fas fa-check"></i> <?php echo __('service3_feature2'); ?></li>
                <li><i class="fas fa-check"></i> <?php echo __('service3_feature3'); ?></li>
                <li><i class="fas fa-check"></i> <?php echo __('service3_feature4'); ?></li>
              </ul>
            </div>
            <div class="service-footer">
              <a href="servicio-desarrollo-software.php" class="service-link">
                <span><?php echo __('view_details'); ?></span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-5">
        <a href="service.php" class="btn btn-outline-primary btn-modern">
          <span><?php echo __('view_all_services'); ?></span>
          <i class="fas fa-arrow-right ms-2"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Sección de Beneficios Modernizada -->
  <section class="benefits-modern py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
          <div class="benefits-content">
            <div class="section-badge">
              <span><?php echo __('benefits_section_title'); ?></span>
            </div>
            <h2 class="section-title"><?php echo __('benefits_title'); ?></h2>
            <p class="section-description"><?php echo __('benefits_subtitle'); ?></p>
            
            <div class="benefits-list">
              <div class="benefit-item">
                <div class="benefit-icon">
                  <i class="fas fa-chart-line"></i>
                </div>
                <div class="benefit-content">
                  <h4><?php echo __('benefit1_title'); ?></h4>
                  <p><?php echo __('benefit1_desc'); ?></p>
                </div>
              </div>
              
              <div class="benefit-item">
                <div class="benefit-icon">
                  <i class="fas fa-shield-alt"></i>
                </div>
                <div class="benefit-content">
                  <h4><?php echo __('benefit2_title'); ?></h4>
                  <p><?php echo __('benefit2_desc'); ?></p>
                </div>
              </div>
              
              <div class="benefit-item">
                <div class="benefit-icon">
                  <i class="fas fa-lightbulb"></i>
                </div>
                <div class="benefit-content">
                  <h4><?php echo __('benefit3_title'); ?></h4>
                  <p><?php echo __('benefit3_desc'); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
          <div class="benefits-visual">
            <img src="assets/img/benefits-image.png"
     srcset="assets/img/benefits-image.png 768w, assets/img/benefits-image.png 1200w"
     sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 50vw"
     alt="<?php echo __('benefits_image_alt'); ?>" class="img-fluid rounded-4">
            <div class="benefits-stats">
              <div class="stat-card">
                <div class="stat-number">40%</div>
                <div class="stat-text"><?php echo __('efficiency_increase'); ?></div>
              </div>
              <div class="stat-card">
                <div class="stat-number">60%</div>
                <div class="stat-text"><?php echo __('cost_reduction'); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Plataforma Modernizada -->
  <section class="platform-modern py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
          <div class="section-header">
            <div class="section-badge">
              <span><?php echo __('platform_section_title'); ?></span>
            </div>
            <h2 class="section-title"><?php echo __('platform_main_title'); ?></h2>
            <p class="section-description"><?php echo __('platform_subtitle'); ?></p>
          </div>
        </div>
      </div>
      
      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
          <div class="platform-card-modern">
            <div class="platform-icon">
              <i class="fas fa-brain"></i>
            </div>
            <h4><a href="servicio-ia-empresarial.php"><?php echo __('platform_feature1_title'); ?></a></h4>
            <p><?php echo __('platform_feature1_desc'); ?></p>
            <a href="servicio-ia-empresarial.php" class="platform-link">
              <span><?php echo __('discover_how'); ?></span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
          <div class="platform-card-modern">
            <div class="platform-icon">
              <i class="fas fa-industry"></i>
            </div>
            <h4><a href="servicio-control-produccion.php"><?php echo __('platform_feature2_title'); ?></a></h4>
            <p><?php echo __('platform_feature2_desc'); ?></p>
            <a href="servicio-control-produccion.php" class="platform-link">
              <span><?php echo __('view_demo'); ?></span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="platform-card-modern">
            <div class="platform-icon">
              <i class="fas fa-users-cog"></i>
            </div>
            <h4><a href="servicio-gestion-personal.php"><?php echo __('platform_feature3_title'); ?></a></h4>
            <p><?php echo __('platform_feature3_desc'); ?></p>
            <a href="servicio-gestion-personal.php" class="platform-link">
              <span><?php echo __('view_features'); ?></span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
          <div class="platform-card-modern">
            <div class="platform-icon">
              <i class="fas fa-comment-dots"></i>
            </div>
            <h4><a href="servicio-comunicacion-automatizada.php"><?php echo __('platform_feature4_title'); ?></a></h4>
            <p><?php echo __('platform_feature4_desc'); ?></p>
            <a href="servicio-comunicacion-automatizada.php" class="platform-link">
              <span><?php echo __('discover_more'); ?></span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
          <div class="platform-card-modern">
            <div class="platform-icon">
              <i class="fas fa-microchip"></i>
            </div>
            <h4><a href="servicio-iot-industrial.php"><?php echo __('platform_feature5_title'); ?></a></h4>
            <p><?php echo __('platform_feature5_desc'); ?></p>
            <a href="servicio-iot-industrial.php" class="platform-link">
              <span><?php echo __('view_use_cases'); ?></span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="platform-card-modern">
            <div class="platform-icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <h4><a href="servicio-analitica-empresarial.php"><?php echo __('platform_feature6_title'); ?></a></h4>
            <p><?php echo __('platform_feature6_desc'); ?></p>
            <a href="servicio-analitica-empresarial.php" class="platform-link">
              <span><?php echo __('view_demo'); ?></span>
              <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Enfoque/Proceso Modernizada -->
  <section class="process-modern py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
          <div class="process-content">
            <div class="section-badge">
              <span><?php echo __('approach_section_title'); ?></span>
            </div>
            <h2 class="section-title"><?php echo __('approach_main_title'); ?></h2>
            <p class="section-description"><?php echo __('approach_description'); ?></p>

            <div class="process-timeline">
              <div class="process-step">
                <div class="step-number">01</div>
                <div class="step-content">
                  <h4><?php echo __('step1_title'); ?></h4>
                  <p><?php echo __('step1_desc'); ?></p>
                </div>
              </div>
              
              <div class="process-step">
                <div class="step-number">02</div>
                <div class="step-content">
                  <h4><?php echo __('step2_title'); ?></h4>
                  <p><?php echo __('step2_desc'); ?></p>
                </div>
              </div>
              
              <div class="process-step">
                <div class="step-number">03</div>
                <div class="step-content">
                  <h4><?php echo __('step3_title'); ?></h4>
                  <p><?php echo __('step3_desc'); ?></p>
                </div>
              </div>
            </div>
            
            <div class="process-actions">
              <a href="service.php" class="btn btn-primary btn-modern">
                <span><?php echo __('explore_possibilities'); ?></span>
                <i class="fas fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
          <div class="process-visual">
            <img src="assets/img/hero/hero2-main-img2.png"
     srcset="assets/img/hero/hero2-main-img2.png 768w, assets/img/hero/hero2-main-img2.png 1200w"
     sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 50vw"
     alt="<?php echo __('work_process_alt'); ?>" class="img-fluid rounded-4">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Precios Modernizada -->
  <section class="pricing-modern py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
          <div class="section-header">
            <div class="section-badge">
              <span><?php echo __('pricing_section_title'); ?></span>
            </div>
            <h2 class="section-title"><?php echo __('pricing_main_title'); ?></h2>
            <p class="section-description"><?php echo __('pricing_subtitle'); ?></p>
          </div>
        </div>
      </div>
      
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="600">
          <div class="pricing-card-modern">
            <div class="pricing-header">
              <h3><?php echo __('pricing_plan1_title'); ?></h3>
              <div class="pricing-toggle">
                <span class="toggle-label monthly active"><?php echo __('monthly_payment'); ?></span>
                <label class="toggle-switch">
                  <input type="checkbox" id="esencial-toggle">
                  <span class="toggle-slider"></span>
                </label>
                <span class="toggle-label yearly"><?php echo __('one_time_payment'); ?></span>
              </div>
            </div>
            
            <div class="pricing-body">
              <div class="pricing-option monthly-option active">
                <div class="price">
                  <span class="currency">€</span>
                  <span class="amount">5.000</span>
                  <span class="period">+ 99€/<?php echo __('month'); ?></span>
                </div>
                <p class="price-desc"><?php echo __('monthly_service_payment'); ?></p>
              </div>
              
              <div class="pricing-option yearly-option">
                <div class="price">
                  <span class="currency">€</span>
                  <span class="amount">15.000</span>
                </div>
                <p class="price-desc"><?php echo __('all_inclusive_support'); ?></p>
                <div class="discount-badge"><?php echo __('long_term_savings'); ?></div>
              </div>
              
              <div class="pricing-features">
                <h4><?php echo __('key_features'); ?>:</h4>
                <ul>
                  <li><i class="fas fa-check"></i> <?php echo __('feature1'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('feature2'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('feature3'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('feature4'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('feature5'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('feature6'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('feature7'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('feature8'); ?></li>
                </ul>
              </div>
            </div>
            
            <div class="pricing-footer">
              <a href="contact.php?plan=esencial" class="btn btn-outline-primary btn-modern w-100">
                <span><?php echo __('request_demo'); ?></span>
                <i class="fas fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
          <div class="pricing-card-modern featured">
            <div class="popular-badge"><?php echo __('most_popular'); ?></div>
            <div class="pricing-header">
              <h3><?php echo __('pricing_plan2_title'); ?></h3>
              <div class="pricing-toggle">
                <span class="toggle-label monthly active"><?php echo __('monthly_payment'); ?></span>
                <label class="toggle-switch">
                  <input type="checkbox" id="avanzado-toggle">
                  <span class="toggle-slider"></span>
                </label>
                <span class="toggle-label yearly"><?php echo __('one_time_payment'); ?></span>
              </div>
            </div>
            
            <div class="pricing-body">
              <div class="pricing-option monthly-option active">
                <div class="price">
                  <span class="currency">€</span>
                  <span class="amount">9.000</span>
                  <span class="period">+ 199€/<?php echo __('month'); ?></span>
                </div>
                <p class="price-desc"><?php echo __('monthly_service_payment'); ?></p>
              </div>
              
              <div class="pricing-option yearly-option">
                <div class="price">
                  <span class="currency">€</span>
                  <span class="amount">19.000</span>
                </div>
                <p class="price-desc"><?php echo __('all_inclusive_support'); ?></p>
                <div class="discount-badge"><?php echo __('long_term_savings'); ?></div>
              </div>
              
              <div class="pricing-features">
                <h4><?php echo __('key_features'); ?>:</h4>
                <ul>
                  <li><i class="fas fa-check"></i> <?php echo __('all_essential_features'); ?> +</li>
                  <li><i class="fas fa-check"></i> <?php echo __('custom_llm'); ?></li>
                </ul>
              </div>
            </div>
            
            <div class="pricing-footer">
              <a href="contact.php?plan=avanzado" class="btn btn-primary btn-modern w-100">
                <span><?php echo __('request_info'); ?></span>
                <i class="fas fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="pricing-card-modern">
            <div class="pricing-header">
              <h3><?php echo __('custom_solution_title'); ?></h3>
            </div>
            
            <div class="pricing-body">
              <div class="price">
                <span class="amount"><?php echo __('custom_solution_subtitle'); ?></span>
              </div>
              <p class="price-desc"><?php echo __('custom_solution_desc'); ?></p>
              
              <div class="pricing-features">
                <h4><?php echo __('included_features'); ?>:</h4>
                <ul>
                  <li><i class="fas fa-check"></i> <?php echo __('feature_custom1'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('feature_custom2'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('feature_custom3'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('feature_custom4'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('feature_custom5'); ?></li>
                </ul>
              </div>
            </div>
            
            <div class="pricing-footer">
              <a href="contact.php" class="btn btn-outline-primary btn-modern w-100">
                <span><?php echo __('contact_us'); ?></span>
                <i class="fas fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Testimonios Modernizada -->
  <section class="testimonials-modern py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
          <div class="section-header">
            <div class="section-badge">
              <span><?php echo __('testimonials_section_title'); ?></span>
            </div>
            <h2 class="section-title"><?php echo __('testimonials_main_title'); ?></h2>
          </div>
        </div>
      </div>
      
      <div class="testimonials-slider" data-aos="fade-up" data-aos-duration="900">
        <div class="testimonial-item">
          <div class="testimonial-card">
            <div class="testimonial-content">
              <div class="quote-icon">
                <i class="fas fa-quote-left"></i>
              </div>
              <p>"<?php echo __('testimonial1_content'); ?>"</p>
              <div class="testimonial-author">
                <h4><?php echo __('testimonial1_title'); ?></h4>
                <span><?php echo __('testimonial1_author'); ?></span>
              </div>
            </div>
            <div class="testimonial-image">
              <img src="assets/img/transformacion-digital.webp" alt="<?php echo __('testimonial_alt_1'); ?>">
            </div>
          </div>
        </div>
        
        <div class="testimonial-item">
          <div class="testimonial-card">
            <div class="testimonial-content">
              <div class="quote-icon">
                <i class="fas fa-quote-left"></i>
              </div>
              <p>"<?php echo __('testimonial2_content'); ?>"</p>
              <div class="testimonial-author">
                <h4><?php echo __('testimonial2_title'); ?></h4>
                <span><?php echo __('testimonial2_author'); ?></span>
              </div>
            </div>
            <div class="testimonial-image">
              <img src="assets/img/automatizacion-industrial.webp" alt="<?php echo __('testimonial_alt_2'); ?>">
            </div>
          </div>
        </div>
        
        <div class="testimonial-item">
          <div class="testimonial-card">
            <div class="testimonial-content">
              <div class="quote-icon">
                <i class="fas fa-quote-left"></i>
              </div>
              <p>"<?php echo __('testimonial3_content'); ?>"</p>
              <div class="testimonial-author">
                <h4><?php echo __('testimonial3_title'); ?></h4>
                <span><?php echo __('testimonial3_author'); ?></span>
              </div>
            </div>
            <div class="testimonial-image">
              <img src="assets/img/comunicaciones-empresariales.webp" alt="<?php echo __('testimonial_alt_3'); ?>">
            </div>
          </div>
        </div>
      </div>
      
      <div class="testimonials-navigation">
        <button class="testimonial-prev"><i class="fas fa-chevron-left"></i></button>
        <button class="testimonial-next"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </section>

  <!-- Sección de Blog Modernizada -->
  <section class="blog-modern py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
          <div class="section-header">
            <div class="section-badge">
              <span><?php echo __('blog_section_title'); ?></span>
            </div>
            <h2 class="section-title"><?php echo __('blog_main_title'); ?></h2>
          </div>
        </div>
      </div>
      
      <div class="row g-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
          <div class="blog-card-modern">
            <div class="blog-image">
              <img src="assets/img/blog/blog-1.jpg" alt="<?php echo __('blog_post1_title'); ?>">
              <div class="blog-category">
                <span><?php echo __('blog_category_ai'); ?></span>
              </div>
            </div>
            <div class="blog-content">
              <h3><a href="blog-ia-revolucion-industrial.php"><?php echo __('blog_post1_title'); ?></a></h3>
              <p><?php echo __('blog_post1_excerpt'); ?>...</p>
              <div class="blog-meta">
                <span><i class="fas fa-calendar"></i> <?php echo __('blog_post1_date'); ?></span>
                <span><i class="fas fa-clock"></i> 5 <?php echo __('blog_read_time'); ?></span>
              </div>
              <a href="blog-ia-revolucion-industrial.php" class="blog-link">
                <span><?php echo __('read_more'); ?></span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
          <div class="blog-card-modern">
            <div class="blog-image">
              <img src="assets/img/blog/blog-2.jpg" alt="<?php echo __('blog_post2_title'); ?>">
              <div class="blog-category">
                <span><?php echo __('blog_category_iot'); ?></span>
              </div>
            </div>
            <div class="blog-content">
              <h3><a href="blog-iot-industria.php"><?php echo __('blog_post2_title'); ?></a></h3>
              <p><?php echo __('blog_post2_excerpt'); ?>...</p>
              <div class="blog-meta">
                <span><i class="fas fa-calendar"></i> <?php echo __('blog_post2_date'); ?></span>
                <span><i class="fas fa-clock"></i> 7 <?php echo __('blog_read_time'); ?></span>
              </div>
              <a href="blog-iot-industria.php" class="blog-link">
                <span><?php echo __('read_more'); ?></span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="blog-card-modern">
            <div class="blog-image">
              <img src="assets/img/blog/blog-3.jpg" alt="<?php echo __('blog_post3_title'); ?>">
              <div class="blog-category">
                <span><?php echo __('blog_category_software'); ?></span>
              </div>
            </div>
            <div class="blog-content">
              <h3><a href="blog-servidores-arm.php"><?php echo __('blog_post3_title'); ?></a></h3>
              <p><?php echo __('blog_post3_excerpt'); ?>...</p>
              <div class="blog-meta">
                <span><i class="fas fa-calendar"></i> <?php echo __('blog_post3_date'); ?></span>
                <span><i class="fas fa-clock"></i> 6 <?php echo __('blog_read_time'); ?></span>
              </div>
              <a href="blog-servidores-arm.php" class="blog-link">
                <span><?php echo __('read_more'); ?></span>
                <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="text-center mt-5">
        <a href="blog.php" class="btn btn-outline-primary btn-modern">
          <span><?php echo __('view_all_posts'); ?></span>
          <i class="fas fa-arrow-right ms-2"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Sección CTA Modernizada -->
  <section class="cta-modern py-5">
    <div class="container">
      <div class="cta-content" data-aos="fade-up" data-aos-duration="800">
        <div class="cta-text">
          <h2><?php echo __('cta_title'); ?></h2>
          <p><?php echo __('cta_description'); ?></p>
        </div>
        <div class="cta-actions">
          <a href="contact.php" class="btn btn-primary btn-modern btn-lg me-3">
            <span><?php echo __('request_free_consultation'); ?></span>
            <i class="fas fa-arrow-right ms-2"></i>
          </a>
          <a href="service.php" class="btn btn-outline-light btn-modern btn-lg">
            <span><?php echo __('explore_solutions'); ?></span>
            <i class="fas fa-arrow-right ms-2"></i>
          </a>
        </div>
      </div>
    </div>
  </section>



  <!-- JavaScript para las funcionalidades modernas -->
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Funcionalidad para los toggles de precios
    const esencialToggle = document.getElementById('esencial-toggle');
    const avanzadoToggle = document.getElementById('avanzado-toggle');
    
    function handlePricingToggle(toggle, card) {
      const monthlyOption = card.querySelector('.monthly-option');
      const yearlyOption = card.querySelector('.yearly-option');
      const monthlyLabel = card.querySelector('.toggle-label.monthly');
      const yearlyLabel = card.querySelector('.toggle-label.yearly');
      
      if (toggle.checked) {
        // Cambiar a pago único
        monthlyOption.classList.remove('active');
        yearlyOption.classList.add('active');
        monthlyLabel.classList.remove('active');
        yearlyLabel.classList.add('active');
      } else {
        // Cambiar a pago mensual
        monthlyOption.classList.add('active');
        yearlyOption.classList.remove('active');
        monthlyLabel.classList.add('active');
        yearlyLabel.classList.remove('active');
      }
    }
    
    if (esencialToggle) {
      esencialToggle.addEventListener('change', function() {
        const card = this.closest('.pricing-card-modern');
        handlePricingToggle(this, card);
      });
    }
    
    if (avanzadoToggle) {
      avanzadoToggle.addEventListener('change', function() {
        const card = this.closest('.pricing-card-modern');
        handlePricingToggle(this, card);
      });
    }
    
    // Slider de testimonios
    const testimonialSlider = document.querySelector('.testimonials-slider');
    const testimonialItems = document.querySelectorAll('.testimonial-item');
    const prevBtn = document.querySelector('.testimonial-prev');
    const nextBtn = document.querySelector('.testimonial-next');
    
    if (testimonialSlider && testimonialItems.length > 0) {
      let currentIndex = 0;
      
      function showTestimonial(index) {
        testimonialItems.forEach((item, i) => {
          item.style.display = i === index ? 'block' : 'none';
        });
      }
      
      function nextTestimonial() {
        currentIndex = (currentIndex + 1) % testimonialItems.length;
        showTestimonial(currentIndex);
      }
      
      function prevTestimonial() {
        currentIndex = (currentIndex - 1 + testimonialItems.length) % testimonialItems.length;
        showTestimonial(currentIndex);
      }
      
      if (prevBtn) prevBtn.addEventListener('click', prevTestimonial);
      if (nextBtn) nextBtn.addEventListener('click', nextTestimonial);
      
      // Mostrar el primer testimonio
      showTestimonial(0);
      
      // Auto-avanzar cada 5 segundos
      setInterval(nextTestimonial, 5000);
    }
    
    // Animación de números en las estadísticas
    function animateNumbers() {
      const statNumbers = document.querySelectorAll('.stat-number');
      
      statNumbers.forEach(stat => {
        const target = parseInt(stat.textContent);
        const duration = 2000;
        const increment = target / (duration / 16);
        let current = 0;
        
        const updateNumber = () => {
          current += increment;
          if (current < target) {
            stat.textContent = Math.floor(current) + (stat.textContent.includes('+') ? '+' : '');
            requestAnimationFrame(updateNumber);
          } else {
            stat.textContent = target + (stat.textContent.includes('+') ? '+' : '');
          }
        };
        
        updateNumber();
      });
    }
    
    // Iniciar animación cuando las estadísticas sean visibles
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateNumbers();
          observer.disconnect();
        }
      });
    });
    
    const heroStats = document.querySelector('.hero-stats');
    if (heroStats) {
      observer.observe(heroStats);
    }
  });
  </script>
<?php include "includes/footer.php"; ?>