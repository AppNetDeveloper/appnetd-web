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
              <img src="assets/img/hero/AppNetDeveloper-1.webp" alt="Soluciones Tecnológicas" class="img-fluid">
            </div>
            <div class="floating-card card-1" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="200">
              <div class="card-icon"><i class="fas fa-robot"></i></div>
              <div class="card-text">IA Avanzada</div>
            </div>
            <div class="floating-card card-2" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="400">
              <div class="card-icon"><i class="fas fa-microchip"></i></div>
              <div class="card-text">IoT Industrial</div>
            </div>
            <div class="floating-card card-3" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="600">
              <div class="card-icon"><i class="fas fa-shield-alt"></i></div>
              <div class="card-text">Ciberseguridad</div>
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
              <img src="assets/img/about/about1-img1.png" alt="<?php echo __('about_image1_alt'); ?>" class="img-fluid rounded-4">
            </div>
            <div class="about-image-secondary">
              <img src="assets/img/about/about1-img2.png" alt="<?php echo __('about_image2_alt'); ?>" class="img-fluid rounded-4">
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
              <p><?php echo __('service1_description'); ?></p>
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
              <p><?php echo __('service2_description'); ?></p>
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
              <p><?php echo __('service3_description'); ?></p>
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
            <img src="assets/img/benefits-image.png" alt="<?php echo __('benefits_image_alt'); ?>" class="img-fluid rounded-4">
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
            <img src="assets/img/hero/hero2-main-img2.png" alt="Proceso de Trabajo" class="img-fluid rounded-4">
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
              <img src="assets/img/transformacion-digital.webp" alt="Transformación digital empresarial">
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
              <img src="assets/img/automatizacion-industrial.webp" alt="Automatización industrial con IA">
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
              <img src="assets/img/comunicaciones-empresariales.webp" alt="Comunicaciones unificadas empresariales">
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
                <span>IA</span>
              </div>
            </div>
            <div class="blog-content">
              <h3><a href="blog-post-1.php"><?php echo __('blog_post1_title'); ?></a></h3>
              <p><?php echo __('blog_post1_excerpt'); ?>...</p>
              <div class="blog-meta">
                <span><i class="fas fa-calendar"></i> <?php echo __('blog_post1_date'); ?></span>
                <span><i class="fas fa-clock"></i> 5 min</span>
              </div>
              <a href="blog-post-1.php" class="blog-link">
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
                <span>IoT</span>
              </div>
            </div>
            <div class="blog-content">
              <h3><a href="blog-post-2.php"><?php echo __('blog_post2_title'); ?></a></h3>
              <p><?php echo __('blog_post2_excerpt'); ?>...</p>
              <div class="blog-meta">
                <span><i class="fas fa-calendar"></i> <?php echo __('blog_post2_date'); ?></span>
                <span><i class="fas fa-clock"></i> 7 min</span>
              </div>
              <a href="blog-post-2.php" class="blog-link">
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
                <span>Software</span>
              </div>
            </div>
            <div class="blog-content">
              <h3><a href="blog-post-3.php"><?php echo __('blog_post3_title'); ?></a></h3>
              <p><?php echo __('blog_post3_excerpt'); ?>...</p>
              <div class="blog-meta">
                <span><i class="fas fa-calendar"></i> <?php echo __('blog_post3_date'); ?></span>
                <span><i class="fas fa-clock"></i> 6 min</span>
              </div>
              <a href="blog-post-3.php" class="blog-link">
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

  <!-- Estilos CSS Modernos -->
  <style>
  /* Variables de color modernas */
  :root {
    --primary-color: #4e54c8;
    --primary-dark: #3a41a0;
    --primary-light: #6b71d8;
    --secondary-color: #8f94fb;
    --accent-color: #ff6b6b;
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

  /* Hero Section Moderna */
  .hero-modern {
    position: relative;
    min-height: 100vh;
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
    max-width: 600px;
  }

  .hero-actions {
    display: flex;
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

  .btn-video {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
  }

  .hero-stats {
    display: flex;
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

  .hero-visual {
    position: relative;
    z-index: 10;
  }

  .hero-image-container {
    position: relative;
    height: 600px;
  }

  .hero-image-main {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80%;
    height: auto;
    z-index: 2;
  }

  .hero-image-main img {
    width: 100%;
    height: auto;
    border-radius: 20px;
    box-shadow: var(--shadow-lg);
  }

  .floating-card {
    position: absolute;
    background: white;
    border-radius: 15px;
    padding: 15px 20px;
    box-shadow: var(--shadow-md);
    display: flex;
    align-items: center;
    gap: 12px;
    z-index: 3;
    transition: var(--transition);
  }

  .floating-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
  }

  .card-1 {
    top: 10%;
    right: 10%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
  }

  .card-2 {
    bottom: 20%;
    right: 5%;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: white;
  }

  .card-3 {
    bottom: 10%;
    left: 5%;
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    color: white;
  }

  .card-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
  }

  .card-text {
    font-weight: 600;
    font-size: 14px;
  }

  /* Features Section Moderna */
  .features-modern {
    background: var(--bg-white);
    position: relative;
    z-index: 20;
    margin-top: -80px;
    border-radius: 30px 30px 0 0;
    padding-top: 80px !important;
  }

  .feature-card-modern {
    background: var(--bg-white);
    border-radius: 20px;
    padding: 30px;
    text-align: center;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    height: 100%;
    border: 1px solid var(--border-color);
  }

  .feature-card-modern:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
    border-color: var(--primary-color);
  }

  .feature-icon-wrapper {
    margin-bottom: 20px;
  }

  .feature-icon {
    width: 80px;
    height: 80px;
    border-radius: 20px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    font-size: 32px;
    color: white;
    transition: var(--transition);
  }

  .feature-card-modern:hover .feature-icon {
    transform: scale(1.1) rotate(5deg);
  }

  .feature-content h4 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: var(--text-dark);
  }

  .feature-content p {
    color: var(--text-light);
    line-height: 1.6;
    margin: 0;
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

  /* About Section Moderna */
  .about-modern {
    background: var(--bg-white);
  }

  .about-visual {
    position: relative;
  }

  .about-image-main {
    position: relative;
    z-index: 2;
  }

  .about-image-secondary {
    position: absolute;
    top: 20px;
    right: -30px;
    z-index: 1;
    width: 70%;
  }

  .about-badge {
    position: absolute;
    bottom: 30px;
    left: -20px;
    background: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: var(--shadow-md);
    display: flex;
    align-items: center;
    gap: 15px;
    z-index: 3;
    max-width: 250px;
  }

  .about-badge i {
    font-size: 24px;
    color: var(--primary-color);
  }

  .about-badge h5 {
    margin: 0;
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-dark);
  }

  .about-badge p {
    margin: 5px 0 0 0;
    font-size: 0.85rem;
    color: var(--text-light);
  }

  .about-content {
    padding-left: 30px;
  }

  .features-list {
    margin: 30px 0;
  }

  .feature-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }

  .feature-check {
    margin-right: 15px;
    color: var(--primary-color);
    font-size: 20px;
  }

  .feature-item span {
    color: var(--text-dark);
    font-weight: 500;
  }

  /* Services Section Moderna */
  .services-modern {
    background: var(--bg-light);
  }

  .service-card-modern {
    background: var(--bg-white);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    height: 100%;
    display: flex;
    flex-direction: column;
    border: 1px solid var(--border-color);
  }

  .service-card-modern:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
  }

  .service-header {
    position: relative;
    padding: 30px 30px 20px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    color: white;
  }

  .service-icon {
    width: 60px;
    height: 60px;
    border-radius: 15px;
    background: rgba(255, 255, 255, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 15px;
  }

  .service-number {
    position: absolute;
    top: 20px;
    right: 20px;
    font-size: 3rem;
    font-weight: 700;
    opacity: 0.1;
  }

  .service-body {
    padding: 25px 30px;
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .service-body h3 {
    font-size: 1.4rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: var(--text-dark);
  }

  .service-body p {
    color: var(--text-light);
    margin-bottom: 20px;
    line-height: 1.6;
  }

  .service-features {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
  }

  .service-features li {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    color: var(--text-dark);
    font-size: 0.9rem;
  }

  .service-features li i {
    color: var(--primary-color);
    margin-right: 10px;
    font-size: 12px;
  }

  .service-footer {
    padding: 20px 30px 30px;
    margin-top: auto;
  }

  .service-link {
    display: inline-flex;
    align-items: center;
    color: var(--primary-color);
    font-weight: 600;
    text-decoration: none;
    transition: var(--transition);
  }

  .service-link:hover {
    color: var(--primary-dark);
    transform: translateX(5px);
  }

  .service-link i {
    margin-left: 8px;
    transition: var(--transition);
  }

  /* Benefits Section Moderna */
  .benefits-modern {
    background: var(--bg-white);
  }

  .benefits-list {
    margin: 30px 0;
  }

  .benefit-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 30px;
    padding: 25px;
    background: var(--bg-light);
    border-radius: 15px;
    transition: var(--transition);
  }

  .benefit-item:hover {
    transform: translateX(10px);
    box-shadow: var(--shadow-md);
  }

  .benefit-icon {
    width: 60px;
    height: 60px;
    border-radius: 15px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    color: white;
    margin-right: 20px;
    flex-shrink: 0;
  }

  .benefit-content h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 10px;
    color: var(--text-dark);
  }

  .benefit-content p {
    color: var(--text-light);
    margin: 0;
    line-height: 1.6;
  }

  .benefits-visual {
    position: relative;
  }

  .benefits-stats {
    position: absolute;
    bottom: 30px;
    right: 30px;
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .stat-card {
    background: white;
    border-radius: 15px;
    padding: 15px 20px;
    box-shadow: var(--shadow-md);
    text-align: center;
    min-width: 120px;
  }

  .stat-card .stat-number {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 5px;
  }

  .stat-card .stat-text {
    font-size: 0.8rem;
    color: var(--text-light);
    font-weight: 500;
  }

  /* Platform Section Moderna */
  .platform-modern {
    background: var(--bg-light);
  }

  .platform-card-modern {
    background: var(--bg-white);
    border-radius: 20px;
    padding: 30px;
    text-align: center;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    height: 100%;
    border: 1px solid var(--border-color);
  }

  .platform-card-modern:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
  }

  .platform-icon {
    width: 80px;
    height: 80px;
    border-radius: 20px;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    color: white;
    margin: 0 auto 20px;
    transition: var(--transition);
  }

  .platform-card-modern:hover .platform-icon {
    transform: scale(1.1) rotate(5deg);
  }

  .platform-card-modern h4 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .platform-card-modern h4 a {
    color: var(--text-dark);
    text-decoration: none;
    transition: var(--transition);
  }

  .platform-card-modern h4 a:hover {
    color: var(--primary-color);
  }

  .platform-card-modern p {
    color: var(--text-light);
    margin-bottom: 20px;
    line-height: 1.6;
  }

  .platform-link {
    display: inline-flex;
    align-items: center;
    color: var(--primary-color);
    font-weight: 600;
    text-decoration: none;
    transition: var(--transition);
  }

  .platform-link:hover {
    color: var(--primary-dark);
    transform: translateX(5px);
  }

  .platform-link i {
    margin-left: 8px;
    transition: var(--transition);
  }

  /* Process Section Moderna */
  .process-modern {
    background: var(--bg-white);
  }

  .process-timeline {
    margin: 30px 0;
  }

  .process-step {
    display: flex;
    align-items: flex-start;
    margin-bottom: 30px;
    padding: 25px;
    background: var(--bg-light);
    border-radius: 15px;
    transition: var(--transition);
  }

  .process-step:hover {
    transform: translateX(10px);
    box-shadow: var(--shadow-md);
  }

  .step-number {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 700;
    color: white;
    margin-right: 20px;
    flex-shrink: 0;
  }

  .step-content h4 {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 10px;
    color: var(--text-dark);
  }

  .step-content p {
    color: var(--text-light);
    margin: 0;
    line-height: 1.6;
  }

  /* Pricing Section Moderna */
  .pricing-modern {
    background: var(--bg-light);
  }

  .pricing-card-modern {
    background: var(--bg-white);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    border: 1px solid var(--border-color);
  }

  .pricing-card-modern:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
  }

  .pricing-card-modern.featured {
    border-color: var(--primary-color);
    transform: scale(1.05);
  }

  .popular-badge {
    position: absolute;
    top: 20px;
    right: -30px;
    background: var(--accent-color);
    color: white;
    padding: 5px 40px;
    font-size: 0.8rem;
    font-weight: 600;
    transform: rotate(45deg);
    z-index: 10;
  }

  .pricing-header {
    padding: 30px 30px 20px;
    text-align: center;
    border-bottom: 1px solid var(--border-color);
  }

  .pricing-header h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 20px;
    color: var(--text-dark);
  }

  .pricing-toggle {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 20px;
  }

  .toggle-label {
    font-size: 0.9rem;
    font-weight: 500;
    color: var(--text-light);
    transition: var(--transition);
  }

  .toggle-label.active {
    color: var(--primary-color);
    font-weight: 600;
  }

  .toggle-switch {
    position: relative;
    width: 50px;
    height: 26px;
  }

  .toggle-switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }

  .toggle-slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: var(--transition);
    border-radius: 34px;
  }

  .toggle-slider:before {
    position: absolute;
    content: "";
    height: 18px;
    width: 18px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: var(--transition);
    border-radius: 50%;
  }

  input:checked + .toggle-slider {
    background-color: var(--primary-color);
  }

  input:checked + .toggle-slider:before {
    transform: translateX(24px);
  }

  .pricing-body {
    padding: 30px;
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .pricing-option {
    display: none;
    text-align: center;
    margin-bottom: 30px;
  }

  .pricing-option.active {
    display: block;
    animation: fadeIn 0.5s;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .price {
    margin-bottom: 15px;
  }

  .currency {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--text-light);
    vertical-align: top;
  }

  .amount {
    font-size: 3rem;
    font-weight: 700;
    color: var(--primary-color);
    line-height: 1;
  }

  .period {
    font-size: 1rem;
    color: var(--text-light);
    font-weight: 500;
  }

  .price-desc {
    color: var(--text-light);
    margin-bottom: 20px;
  }

  .discount-badge {
    display: inline-block;
    background: var(--primary-color);
    color: white;
    padding: 5px 15px;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-top: 10px;
  }

  .pricing-features {
    flex: 1;
  }

  .pricing-features h4 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 15px;
    color: var(--text-dark);
  }

  .pricing-features ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .pricing-features li {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    color: var(--text-dark);
    font-size: 0.9rem;
  }

  .pricing-features li i {
    color: var(--primary-color);
    margin-right: 10px;
    font-size: 12px;
  }

  .pricing-footer {
    padding: 0 30px 30px;
    margin-top: auto;
  }

  /* Testimonials Section Moderna */
  .testimonials-modern {
    background: var(--bg-white);
  }

  .testimonials-slider {
    position: relative;
  }

  .testimonial-item {
    padding: 0 15px;
  }

  .testimonial-card {
    display: flex;
    background: var(--bg-light);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    height: 100%;
  }

  .testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-md);
  }

  .testimonial-content {
    flex: 1;
    padding: 30px;
    display: flex;
    flex-direction: column;
  }

  .quote-icon {
    font-size: 2rem;
    color: var(--primary-color);
    opacity: 0.3;
    margin-bottom: 20px;
  }

  .testimonial-content p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: var(--text-dark);
    margin-bottom: 20px;
    flex: 1;
    font-style: italic;
  }

  .testimonial-author h4 {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 5px;
    color: var(--text-dark);
  }

  .testimonial-author span {
    color: var(--text-light);
    font-size: 0.9rem;
  }

  .testimonial-image {
    width: 300px;
    flex-shrink: 0;
  }

  .testimonial-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .testimonials-navigation {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 30px;
  }

  .testimonial-prev,
  .testimonial-next {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: var(--primary-color);
    color: white;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: var(--transition);
  }

  .testimonial-prev:hover,
  .testimonial-next:hover {
    background: var(--primary-dark);
    transform: scale(1.1);
  }

  /* Blog Section Moderna */
  .blog-modern {
    background: var(--bg-light);
  }

  .blog-card-modern {
    background: var(--bg-white);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    height: 100%;
    display: flex;
    flex-direction: column;
  }

  .blog-card-modern:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-lg);
  }

  .blog-image {
    position: relative;
    height: 200px;
    overflow: hidden;
  }

  .blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
  }

  .blog-card-modern:hover .blog-image img {
    transform: scale(1.1);
  }

  .blog-category {
    position: absolute;
    top: 20px;
    left: 20px;
    background: var(--primary-color);
    color: white;
    padding: 5px 15px;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
  }

  .blog-content {
    padding: 25px;
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  .blog-content h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .blog-content h3 a {
    color: var(--text-dark);
    text-decoration: none;
    transition: var(--transition);
  }

  .blog-content h3 a:hover {
    color: var(--primary-color);
  }

  .blog-content p {
    color: var(--text-light);
    margin-bottom: 20px;
    line-height: 1.6;
    flex: 1;
  }

  .blog-meta {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    font-size: 0.85rem;
    color: var(--text-light);
  }

  .blog-meta span {
    display: flex;
    align-items: center;
    gap: 5px;
  }

  .blog-link {
    display: inline-flex;
    align-items: center;
    color: var(--primary-color);
    font-weight: 600;
    text-decoration: none;
    transition: var(--transition);
  }

  .blog-link:hover {
    color: var(--primary-dark);
    transform: translateX(5px);
  }

  .blog-link i {
    margin-left: 8px;
    transition: var(--transition);
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
    padding: 60px 0;
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
    max-width: 600px;
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
    
    .hero-image-container {
      height: 400px;
      margin-top: 50px;
    }
    
    .floating-card {
      transform: scale(0.8);
    }
    
    .card-1 {
      top: 5%;
      right: 5%;
    }
    
    .card-2 {
      bottom: 10%;
      right: 0;
    }
    
    .card-3 {
      bottom: 5%;
      left: 0;
    }
    
    .section-title {
      font-size: 2rem;
    }
    
    .about-content {
      padding-left: 0;
      margin-top: 30px;
    }
    
    .about-image-secondary {
      position: relative;
      top: 0;
      right: 0;
      width: 60%;
      margin: 20px auto;
      display: block;
    }
    
    .about-badge {
      position: relative;
      bottom: 0;
      left: 0;
      margin: 20px auto;
      max-width: 100%;
    }
    
    .testimonial-card {
      flex-direction: column;
    }
    
    .testimonial-image {
      width: 100%;
      height: 200px;
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
    
    .hero-image-container {
      height: 300px;
    }
    
    .floating-card {
      transform: scale(0.7);
    }
    
    .section-title {
      font-size: 1.8rem;
    }
    
    .section-description {
      font-size: 1rem;
    }
    
    .benefit-item,
    .process-step {
      flex-direction: column;
      text-align: center;
    }
    
    .benefit-icon,
    .step-number {
      margin-right: 0;
      margin-bottom: 15px;
    }
    
    .benefits-stats {
      position: relative;
      bottom: 0;
      right: 0;
      flex-direction: row;
      justify-content: center;
      margin-top: 20px;
    }
    
    .pricing-card-modern.featured {
      transform: none;
    }
    
    .cta-text h2 {
      font-size: 1.8rem;
    }
    
    .cta-text p {
      font-size: 1rem;
    }
  }
  </style>

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