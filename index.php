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
     alt="BionicEyE + ADRI - 9 Agentes IA especializados para Oficina Virtual Inteligente con automatización empresarial"
     loading="eager"
     class="img-fluid">
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
              <h2><?php echo __('feature1_title'); ?></h2>
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
              <h2><?php echo __('feature2_title'); ?></h2>
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
              <h2><?php echo __('feature3_title'); ?></h2>
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
              <h2><?php echo __('feature4_title'); ?></h2>
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
     alt="Soluciones de IA e IoT Industrial para automatización empresarial - Visión artificial, Machine Learning y edge computing para Industry 4.0"
     loading="lazy"
     class="img-fluid rounded-4">
            </div>
            <div class="about-image-secondary">
              <img src="assets/img/about/about1-img2.png"
     srcset="assets/img/about/about1-img2.png 768w, assets/img/about/about1-img2.png 1200w"
     sizes="(max-width: 767px) 100vw, (max-width: 991px) 50vw, 50vw"
     alt="Equipo de desarrollo trabajando con sistemas de Inteligencia Artificial local - BionicEye ADRI plataforma de agentes IA especializados"
     loading="lazy"
     class="img-fluid rounded-4">
            </div>
            <div class="about-badge">
              <i class="fas fa-lightbulb"></i>
              <div>
                <h3><?php echo __('about_innovation_title'); ?></h3>
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
                  <h3><?php echo __('benefit1_title'); ?></h3>
                  <p><?php echo __('benefit1_desc'); ?></p>
                </div>
              </div>

              <div class="benefit-item">
                <div class="benefit-icon">
                  <i class="fas fa-shield-alt"></i>
                </div>
                <div class="benefit-content">
                  <h3><?php echo __('benefit2_title'); ?></h3>
                  <p><?php echo __('benefit2_desc'); ?></p>
                </div>
              </div>

              <div class="benefit-item">
                <div class="benefit-icon">
                  <i class="fas fa-lightbulb"></i>
                </div>
                <div class="benefit-content">
                  <h3><?php echo __('benefit3_title'); ?></h3>
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
     alt="Beneficios de la transformación digital con IA local - Aumento de eficiencia 40%, reducción de costes 60%, ROI 245% con BionicEye + ADRI"
     loading="lazy"
     class="img-fluid rounded-4">
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
            <h3><a href="servicio-ia-empresarial.php"><?php echo __('platform_feature1_title'); ?></a></h3>
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
            <h3><a href="servicio-control-produccion.php"><?php echo __('platform_feature2_title'); ?></a></h3>
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
            <h3><a href="servicio-gestion-personal.php"><?php echo __('platform_feature3_title'); ?></a></h3>
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
            <h3><a href="servicio-comunicacion-automatizada.php"><?php echo __('platform_feature4_title'); ?></a></h3>
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
            <h3><a href="servicio-iot-industrial.php"><?php echo __('platform_feature5_title'); ?></a></h3>
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
            <h3><a href="servicio-analitica-empresarial.php"><?php echo __('platform_feature6_title'); ?></a></h3>
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
                  <h3><?php echo __('step1_title'); ?></h3>
                  <p><?php echo __('step1_desc'); ?></p>
                </div>
              </div>
              
              <div class="process-step">
                <div class="step-number">02</div>
                <div class="step-content">
                  <h3><?php echo __('step2_title'); ?></h3>
                  <p><?php echo __('step2_desc'); ?></p>
                </div>
              </div>
              
              <div class="process-step">
                <div class="step-number">03</div>
                <div class="step-content">
                  <h3><?php echo __('step3_title'); ?></h3>
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
     alt="Proceso de implementación BionicEye + ADRI - 8 semanas desde análisis hasta go-live con formación completa y soporte 24/7"
     loading="lazy"
     class="img-fluid rounded-4">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Precios BionicEyE - 3 Planes -->
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
        <!-- Plan Cloud SaaS -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="600">
          <div class="pricing-card-modern">
            <div class="pricing-header">
              <h3><i class="fas fa-cloud me-2"></i><?php echo __('pricing_cloud_title'); ?></h3>
            </div>

            <div class="pricing-body">
              <div class="price">
                <span class="currency">€</span>
                <span class="amount">350</span>
                <span class="period">/<?php echo __('month'); ?></span>
              </div>
              <p class="price-desc"><?php echo __('pricing_cloud_desc'); ?></p>

              <div class="pricing-features">
                <h4><?php echo __('key_features'); ?>:</h4>
                <ul>
                  <li><i class="fas fa-check"></i> <?php echo __('cloud_feature1'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('cloud_feature2'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('cloud_feature3'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('cloud_feature4'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('cloud_feature5'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('cloud_feature6'); ?></li>
                </ul>
              </div>
            </div>

            <div class="pricing-footer">
              <a href="contact.php?plan=cloud" class="btn btn-outline-primary btn-modern w-100">
                <span><?php echo __('request_demo'); ?></span>
                <i class="fas fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Plan Híbrido - RECOMENDADO -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
          <div class="pricing-card-modern featured">
            <div class="popular-badge"><?php echo __('recommended'); ?></div>
            <div class="pricing-header">
              <h3><i class="fas fa-link me-2"></i><?php echo __('pricing_hybrid_title'); ?></h3>
            </div>

            <div class="pricing-body">
              <div class="price">
                <span class="small text-muted"><?php echo __('from'); ?></span>
                <span class="currency">€</span>
                <span class="amount">250</span>
                <span class="period">/<?php echo __('month'); ?></span>
              </div>
              <p class="price-desc"><?php echo __('pricing_hybrid_desc'); ?></p>

              <div class="pricing-features">
                <h4><?php echo __('key_features'); ?>:</h4>
                <ul>
                  <li><i class="fas fa-check"></i> <?php echo __('hybrid_feature1'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('hybrid_feature2'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('hybrid_feature3'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('hybrid_feature4'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('hybrid_feature5'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('hybrid_feature6'); ?></li>
                </ul>
              </div>
            </div>

            <div class="pricing-footer">
              <a href="contact.php?plan=hibrido" class="btn btn-primary btn-modern w-100">
                <span><?php echo __('request_info'); ?></span>
                <i class="fas fa-arrow-right ms-2"></i>
              </a>
            </div>
          </div>
        </div>

        <!-- Plan On-Premise - PRIVACIDAD -->
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
          <div class="pricing-card-modern">
            <div class="popular-badge bg-success"><?php echo __('privacy_badge'); ?></div>
            <div class="pricing-header">
              <h3><i class="fas fa-server me-2"></i><?php echo __('pricing_onpremise_title'); ?></h3>
            </div>

            <div class="pricing-body">
              <div class="price">
                <span class="small text-muted"><?php echo __('from'); ?></span>
                <span class="currency">€</span>
                <span class="amount">5.000</span>
                <span class="period"><?php echo __('one_time'); ?></span>
              </div>
              <p class="price-desc"><?php echo __('pricing_onpremise_desc'); ?></p>

              <div class="pricing-features">
                <h4><?php echo __('key_features'); ?>:</h4>
                <ul>
                  <li><i class="fas fa-check"></i> <?php echo __('onpremise_feature1'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('onpremise_feature2'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('onpremise_feature3'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('onpremise_feature4'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('onpremise_feature5'); ?></li>
                  <li><i class="fas fa-check"></i> <?php echo __('onpremise_feature6'); ?></li>
                </ul>
              </div>
            </div>

            <div class="pricing-footer">
              <a href="contact.php?plan=onpremise" class="btn btn-outline-primary btn-modern w-100">
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
                <h3><?php echo __('testimonial1_title'); ?></h3>
                <span><?php echo __('testimonial1_author'); ?></span>
              </div>
            </div>
            <div class="testimonial-image">
              <img src="assets/img/transformacion-digital.webp"
                   alt="Caso de éxito: Transformación digital con IA - Control de calidad automatizado con visión artificial redujo defectos 35%"
                   loading="lazy">
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
                <h3><?php echo __('testimonial2_title'); ?></h3>
                <span><?php echo __('testimonial2_author'); ?></span>
              </div>
            </div>
            <div class="testimonial-image">
              <img src="assets/img/automatizacion-industrial.webp"
                   alt="Testimonio IoT Industrial: Mantenimiento predictivo con sensores IA ahorró cientos de miles de euros en paradas no planificadas"
                   loading="lazy">
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
                <h3><?php echo __('testimonial3_title'); ?></h3>
                <span><?php echo __('testimonial3_author'); ?></span>
              </div>
            </div>
            <div class="testimonial-image">
              <img src="assets/img/comunicaciones-empresariales.webp"
                   alt="Éxito automatización logística: IA y robots aumentaron eficiencia 60% con sistema de gestión inteligente"
                   loading="lazy">
            </div>
          </div>
        </div>
      </div>
      
      <div class="testimonials-navigation">
        <button class="testimonial-prev" aria-label="<?php echo __('previous_testimonial'); ?>"><i class="fas fa-chevron-left"></i></button>
        <button class="testimonial-next" aria-label="<?php echo __('next_testimonial'); ?>"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </section>

  <!-- Sección BionicEyE + ADRI - Oficina Virtual Inteligente con 9 Agentes IA -->
  <section class="bioniceye-adri-section py-5 bg-gradient-primary">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
          <div class="section-badge mb-3">
            <span class="badge bg-success"><i class="fas fa-star me-2"></i><?php echo __('bioniceye_star_product'); ?></span>
          </div>
          <h2 class="display-4 text-white mb-4">
            <strong><?php echo __('bioniceye_title'); ?></strong><br>
            <span class="text-gradient"><?php echo __('bioniceye_subtitle'); ?></span>
          </h2>
          <p class="lead text-white-75 mb-4">
            <?php echo __('bioniceye_intro'); ?>
          </p>

          <div class="key-benefits mb-4">
            <div class="benefit-item d-flex align-items-start mb-3">
              <div class="benefit-icon me-3">
                <i class="fas fa-server fa-2x text-success"></i>
              </div>
              <div>
                <h3 class="text-white mb-1"><?php echo __('bioniceye_benefit1_title'); ?></h3>
                <p class="text-white-75 mb-0"><?php echo __('bioniceye_benefit1_desc'); ?></p>
              </div>
            </div>

            <div class="benefit-item d-flex align-items-start mb-3">
              <div class="benefit-icon me-3">
                <i class="fas fa-euro-sign fa-2x text-warning"></i>
              </div>
              <div>
                <h3 class="text-white mb-1"><?php echo __('bioniceye_benefit2_title'); ?></h3>
                <p class="text-white-75 mb-0"><?php echo __('bioniceye_benefit2_desc'); ?></p>
              </div>
            </div>

            <div class="benefit-item d-flex align-items-start mb-3">
              <div class="benefit-icon me-3">
                <i class="fas fa-chart-line fa-2x text-info"></i>
              </div>
              <div>
                <h3 class="text-white mb-1"><?php echo __('bioniceye_benefit3_title'); ?></h3>
                <p class="text-white-75 mb-0"><?php echo __('bioniceye_benefit3_desc'); ?></p>
              </div>
            </div>

            <div class="benefit-item d-flex align-items-start mb-3">
              <div class="benefit-icon me-3">
                <i class="fas fa-plug fa-2x text-danger"></i>
              </div>
              <div>
                <h3 class="text-white mb-1"><?php echo __('bioniceye_benefit4_title'); ?></h3>
                <p class="text-white-75 mb-0"><?php echo __('bioniceye_benefit4_desc'); ?></p>
              </div>
            </div>

            <div class="benefit-item d-flex align-items-start">
              <div class="benefit-icon me-3">
                <i class="fas fa-expand-arrows-alt fa-2x text-primary"></i>
              </div>
              <div>
                <h3 class="text-white mb-1"><?php echo __('bioniceye_benefit5_title'); ?></h3>
                <p class="text-white-75 mb-0"><?php echo __('bioniceye_benefit5_desc'); ?></p>
              </div>
            </div>
          </div>

          <div class="cta-buttons">
            <a href="https://bioniceye.app" target="_blank" class="btn btn-warning btn-lg me-3 mb-2">
              <i class="fas fa-external-link-alt me-2"></i>Visitar BionicEyE.app
            </a>
            <a href="contact.php?product=bioniceye" class="btn btn-light btn-lg me-3 mb-2">
              <i class="fas fa-calendar-check me-2"></i><?php echo __('bioniceye_demo_btn'); ?>
            </a>
            <a href="#adri-agents" class="btn btn-outline-light btn-lg mb-2">
              <i class="fas fa-robot me-2"></i><?php echo __('bioniceye_agents_btn'); ?>
            </a>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
          <div class="bioniceye-stats-card p-4 bg-white rounded-4 shadow-lg">
            <h3 class="mb-4 text-center"><?php echo __('bioniceye_stats_title'); ?></h3>
            <div class="row g-3">
              <div class="col-6">
                <div class="stat-box text-center p-3 bg-light rounded">
                  <div class="stat-value text-primary fw-bold fs-3">9</div>
                  <div class="stat-label small"><?php echo __('bioniceye_stats_agents'); ?></div>
                </div>
              </div>
              <div class="col-6">
                <div class="stat-box text-center p-3 bg-light rounded">
                  <div class="stat-value text-success fw-bold fs-3">151</div>
                  <div class="stat-label small"><?php echo __('bioniceye_stats_models'); ?></div>
                </div>
              </div>
              <div class="col-6">
                <div class="stat-box text-center p-3 bg-light rounded">
                  <div class="stat-value text-warning fw-bold fs-3">93</div>
                  <div class="stat-label small"><?php echo __('bioniceye_stats_services'); ?></div>
                </div>
              </div>
              <div class="col-6">
                <div class="stat-box text-center p-3 bg-light rounded">
                  <div class="stat-value text-danger fw-bold fs-3">€5.496</div>
                  <div class="stat-label small"><?php echo __('bioniceye_stats_savings'); ?></div>
                </div>
              </div>
              <div class="col-6">
                <div class="stat-box text-center p-3 bg-light rounded">
                  <div class="stat-value text-info fw-bold fs-3">+40%</div>
                  <div class="stat-label small"><?php echo __('bioniceye_stats_productivity'); ?></div>
                </div>
              </div>
              <div class="col-6">
                <div class="stat-box text-center p-3 bg-light rounded">
                  <div class="stat-value text-primary fw-bold fs-3">-60%</div>
                  <div class="stat-label small"><?php echo __('bioniceye_stats_errors'); ?></div>
                </div>
              </div>
            </div>

            <div class="mt-4 p-3 bg-success bg-opacity-10 rounded">
              <p class="mb-0 text-center small">
                <i class="fas fa-shield-check text-success me-2"></i>
                <?php echo __('bioniceye_guarantee'); ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- 9 Agentes ADRI -->
      <div class="row" id="adri-agents">
        <div class="col-12 text-center mb-5" data-aos="fade-up">
          <h3 class="text-white mb-3"><?php echo __('adri_agents_title'); ?></h3>
          <p class="text-white-75 lead"><?php echo __('adri_agents_subtitle'); ?></p>
        </div>
      </div>

      <div class="row g-4">
        <!-- ARIA - Supervisora -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
          <div class="agent-card h-100 p-4 bg-white rounded-4 shadow">
            <div class="agent-icon mb-3">
              <i class="fas fa-brain fa-3x" style="color: #60a5fa;"></i>
            </div>
            <h4 class="fw-bold mb-2">🎯 <?php echo __('agent_aria_title'); ?></h4>
            <p class="text-muted small mb-2"><?php echo __('agent_aria_model'); ?></p>
            <p class="mb-3"><?php echo __('agent_aria_desc'); ?></p>
          </div>
        </div>

        <!-- FELIX - Producción -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700">
          <div class="agent-card h-100 p-4 bg-white rounded-4 shadow">
            <div class="agent-icon mb-3">
              <i class="fas fa-industry fa-3x" style="color: #f97316;"></i>
            </div>
            <h4 class="fw-bold mb-2">🏭 <?php echo __('agent_felix_title'); ?></h4>
            <p class="text-muted small mb-2"><?php echo __('agent_felix_model'); ?></p>
            <p class="mb-3"><?php echo __('agent_felix_desc'); ?></p>
          </div>
        </div>

        <!-- HUGO - RRHH -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
          <div class="agent-card h-100 p-4 bg-white rounded-4 shadow">
            <div class="agent-icon mb-3">
              <i class="fas fa-users fa-3x" style="color: #facc15;"></i>
            </div>
            <h4 class="fw-bold mb-2">👥 <?php echo __('agent_hugo_title'); ?></h4>
            <p class="text-muted small mb-2"><?php echo __('agent_hugo_model'); ?></p>
            <p class="mb-3"><?php echo __('agent_hugo_desc'); ?></p>
          </div>
        </div>

        <!-- IRIS - Business Intelligence -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
          <div class="agent-card h-100 p-4 bg-white rounded-4 shadow">
            <div class="agent-icon mb-3">
              <i class="fas fa-chart-pie fa-3x" style="color: #a855f7;"></i>
            </div>
            <h4 class="fw-bold mb-2">📊 <?php echo __('agent_iris_title'); ?></h4>
            <p class="text-muted small mb-2"><?php echo __('agent_iris_model'); ?></p>
            <p class="mb-3"><?php echo __('agent_iris_desc'); ?></p>
          </div>
        </div>

        <!-- LEO - Finanzas -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700">
          <div class="agent-card h-100 p-4 bg-white rounded-4 shadow">
            <div class="agent-icon mb-3">
              <i class="fas fa-euro-sign fa-3x" style="color: #22c55e;"></i>
            </div>
            <h4 class="fw-bold mb-2">💰 <?php echo __('agent_leo_title'); ?></h4>
            <p class="text-muted small mb-2"><?php echo __('agent_leo_model'); ?></p>
            <p class="mb-3"><?php echo __('agent_leo_desc'); ?></p>
          </div>
        </div>

        <!-- MAX - Marketing -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
          <div class="agent-card h-100 p-4 bg-white rounded-4 shadow">
            <div class="agent-icon mb-3">
              <i class="fas fa-bullhorn fa-3x" style="color: #ef4444;"></i>
            </div>
            <h4 class="fw-bold mb-2">📣 <?php echo __('agent_max_title'); ?></h4>
            <p class="text-muted small mb-2"><?php echo __('agent_max_model'); ?></p>
            <p class="mb-3"><?php echo __('agent_max_desc'); ?></p>
          </div>
        </div>

        <!-- NOVA - CRM -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
          <div class="agent-card h-100 p-4 bg-white rounded-4 shadow">
            <div class="agent-icon mb-3">
              <i class="fas fa-headset fa-3x" style="color: #ec4899;"></i>
            </div>
            <h4 class="fw-bold mb-2">📞 <?php echo __('agent_nova_title'); ?></h4>
            <p class="text-muted small mb-2"><?php echo __('agent_nova_model'); ?></p>
            <p class="mb-3"><?php echo __('agent_nova_desc'); ?></p>
          </div>
        </div>

        <!-- SAM - Logística -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700">
          <div class="agent-card h-100 p-4 bg-white rounded-4 shadow">
            <div class="agent-icon mb-3">
              <i class="fas fa-truck fa-3x" style="color: #14b8a6;"></i>
            </div>
            <h4 class="fw-bold mb-2">🚚 <?php echo __('agent_sam_title'); ?></h4>
            <p class="text-muted small mb-2"><?php echo __('agent_sam_model'); ?></p>
            <p class="mb-3"><?php echo __('agent_sam_desc'); ?></p>
          </div>
        </div>

        <!-- ZOE - Compliance -->
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800">
          <div class="agent-card h-100 p-4 bg-white rounded-4 shadow">
            <div class="agent-icon mb-3">
              <i class="fas fa-shield-alt fa-3x" style="color: #8b5cf6;"></i>
            </div>
            <h4 class="fw-bold mb-2">⚖️ <?php echo __('agent_zoe_title'); ?></h4>
            <p class="text-muted small mb-2"><?php echo __('agent_zoe_model'); ?></p>
            <p class="mb-3"><?php echo __('agent_zoe_desc'); ?></p>
          </div>
        </div>
      </div>

      <!-- CTA Final -->
      <div class="row mt-5">
        <div class="col-lg-10 mx-auto text-center" data-aos="fade-up">
          <div class="final-cta-card p-5 bg-white rounded-4 shadow-lg">
            <h3 class="mb-3"><?php echo __('bioniceye_cta_title'); ?></h3>
            <p class="lead text-muted mb-4">
              <?php echo __('bioniceye_cta_desc'); ?>
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
              <a href="contact.php?product=bioniceye&action=demo" class="btn btn-primary btn-lg">
                <i class="fas fa-video me-2"></i><?php echo __('bioniceye_cta_demo'); ?>
              </a>
              <a href="https://bioniceye.app" target="_blank" class="btn btn-success btn-lg">
                <i class="fas fa-globe me-2"></i>bioniceye.app
              </a>
              <a href="tel:+34619929305" class="btn btn-outline-primary btn-lg">
                <i class="fas fa-phone me-2"></i>+34 619 929 305
              </a>
            </div>
          </div>
        </div>
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

  <!-- Sección FAQ - Preguntas Frecuentes -->
  <section class="faq-section py-5 bg-light" id="faq">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center" data-aos="fade-up">
          <span class="badge bg-primary mb-3">
            <i class="fas fa-question-circle me-2"></i>Preguntas Frecuentes
          </span>
          <h2 class="section-title mb-3">Todo lo que necesitas saber sobre BionicEyE + ADRI</h2>
          <p class="section-description">Respuestas detalladas sobre nuestra Oficina Virtual Inteligente con 9 agentes IA</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="accordion" id="faqAccordion" data-aos="fade-up" data-aos-delay="100">

            <!-- FAQ 1 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="faq1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                  <i class="fas fa-robot me-3 text-primary"></i>
                  ¿Qué es BionicEyE + ADRI y qué planes de precios ofrecen?
                </button>
              </h3>
              <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="faq1" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p><strong>BionicEyE + ADRI</strong> es una <strong>Oficina Virtual Inteligente</strong> con <strong>9 agentes IA especializados</strong>. NO es un ERP tradicional - es una solución de automatización empresarial moderna.</p>
                  <p><strong>ADRI</strong> (Adaptive Dynamic Reasoning Intelligence) incluye 9 agentes:</p>
                  <ul>
                    <li><strong>ARIA</strong> - Supervisora y orquestadora</li>
                    <li><strong>FELIX</strong> - Producción y control de planta</li>
                    <li><strong>HUGO</strong> - RRHH y gestión de personal</li>
                    <li><strong>IRIS</strong> - Business Intelligence y analítica</li>
                    <li><strong>LEO</strong> - Finanzas y facturación VeriFactu</li>
                    <li><strong>MAX</strong> - Marketing y contenido IA</li>
                    <li><strong>NOVA</strong> - CRM multicanal (WhatsApp, Email, Telegram)</li>
                    <li><strong>SAM</strong> - Logística e inventario</li>
                    <li><strong>ZOE</strong> - Compliance GDPR y AI Act</li>
                  </ul>
                  <p><strong>3 Planes disponibles:</strong></p>
                  <ul>
                    <li><strong>Cloud SaaS</strong>: €350/mes - Sin inversión inicial</li>
                    <li><strong>Híbrido</strong>: desde €250/mes - Servidor local + API cloud (RECOMENDADO)</li>
                    <li><strong>On-Premise</strong>: desde €5.000 único - 100% privacidad, sin costes mensuales</li>
                  </ul>
                  <p><span class="badge bg-success">Ahorro de €5.496/año</span> comparado con ChatGPT Enterprise + Claude Pro + Gemini Advanced.</p>
                </div>
              </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="faq2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                  <i class="fas fa-cloud-upload-alt me-3 text-primary"></i>
                  ¿Puedo usar APIs externas como OpenAI, Claude o Gemini con ADRI?
                </button>
              </h3>
              <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p><strong>Sí, absolutamente.</strong> ADRI es compatible con APIs externas de OpenAI, Claude (Anthropic), Google Gemini, Qwen, Mistral y cualquier API compatible con OpenAI.</p>
                  <p>Tienes la flexibilidad de:</p>
                  <ol>
                    <li><strong>Usar 100% modelos locales</strong> (sin costes recurrentes)</li>
                    <li><strong>Combinar modelos locales</strong> para datos sensibles y APIs cloud para tareas generales</li>
                    <li><strong>Usar solo APIs externas</strong> si prefieres</li>
                  </ol>
                  <p>La arquitectura permite cambiar entre modos sin modificar código. Esto te da <strong>control total</strong>: privacidad absoluta cuando necesitas, y potencia de modelos cloud cuando lo requieres.</p>
                </div>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="faq3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                  <i class="fas fa-eye me-3 text-primary"></i>
                  ¿Qué hace el Vision Agent y cómo ahorra €65,000/año?
                </button>
              </h3>
              <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>El <strong>Vision Agent</strong> utiliza el modelo <strong>Qwen3-VL-30B</strong> para OCR avanzado multiidioma. Procesa automáticamente facturas, albaranes y contratos en <strong>30 segundos</strong> (vs 5 minutos manual) con <strong>98% de precisión</strong> (vs 92% humano).</p>
                  <p><strong>Caso real:</strong> Para una empresa que procesa 200 facturas/día:</p>
                  <ul>
                    <li>Reduce tiempo de <strong>16.6 horas a 1.6 horas diarias</strong></li>
                    <li>Equivalente a <strong>1.8 empleados</strong> a tiempo completo</li>
                    <li>Con salario promedio de €36,000/año, el ahorro es de <strong>€65,000 anuales</strong></li>
                  </ul>
                  <p>Además, reduce errores de entrada de datos en un <strong>98%</strong>, evitando costosos errores contables.</p>
                </div>
              </div>
            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="faq4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                  <i class="fab fa-whatsapp me-3 text-primary"></i>
                  ¿Cómo funciona el WhatsApp Bot 24/7 sin aumentar plantilla?
                </button>
              </h3>
              <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>El <strong>Messaging Agent</strong> de ADRI se integra con WhatsApp Business API, Telegram y Email/IMAP para responder consultas de clientes en <strong>menos de 5 segundos</strong>, 24 horas al día, 7 días a la semana.</p>
                  <p>Utiliza la base de conocimiento RAG (Retrieval-Augmented Generation) para responder con información actualizada de tu empresa. Escala automáticamente consultas complejas a operadores humanos cuando detecta que la IA no puede resolver el caso.</p>
                  <p><strong>Resultados promedio:</strong></p>
                  <ul>
                    <li>Resuelve el <strong>70% de consultas</strong> sin intervención humana</li>
                    <li>Para una empresa con 50 consultas/día, reduce la necesidad de <strong>3 agentes a 1 agente de backup</strong></li>
                    <li>Ahorro: <strong>€50,000/año</strong></li>
                    <li>Aumenta ventas un <strong>15%</strong> al responder fuera de horario laboral</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- FAQ 5 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="faq5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                  <i class="fas fa-chart-line me-3 text-primary"></i>
                  ¿Qué diferencia a BionicEye de un ERP tradicional con "IA añadida"?
                </button>
              </h3>
              <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="faq5" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p>La diferencia clave es que BionicEyE tiene <strong>IA nativa integrada en cada módulo</strong>, no como complemento.</p>
                  <p><strong>BionicEyE (IA Nativa):</strong></p>
                  <ul>
                    <li>9 agentes especializados diseñados para tareas empresariales</li>
                    <li>3 modalidades: Cloud, Híbrido u On-Premise</li>
                    <li>Compliance GDPR, LOPD y AI Act europeo</li>
                    <li>On-Premise desde €5.000 - sin costes recurrentes</li>
                    <li>Todo-en-uno: Oficina Virtual + 9 agentes IA + infraestructura</li>
                  </ul>
                  <p><strong>ERPs tradicionales con "IA":</strong></p>
                  <ul>
                    <li>Dependen de APIs cloud de terceros</li>
                    <li>Costes recurrentes elevados</li>
                    <li>Envían tus datos a servidores externos</li>
                    <li>IA como complemento, no integrada</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- FAQ 6 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="faq6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                  <i class="fas fa-clock me-3 text-primary"></i>
                  ¿Cuánto tiempo tarda la implementación de BionicEyE + ADRI?
                </button>
              </h3>
              <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="faq6" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p><strong>Implementación completa en 8 semanas:</strong></p>
                  <ul>
                    <li><strong>Semanas 1-2:</strong> Análisis y diagnóstico de procesos actuales, auditoría IT/OT</li>
                    <li><strong>Semanas 3-4:</strong> Instalación de servidor, configuración ADRI, migración de datos</li>
                    <li><strong>Semanas 5-6:</strong> Formación del equipo en uso de plataforma y agentes IA</li>
                    <li><strong>Semanas 7-8:</strong> Go-Live con acompañamiento on-site, ajuste fino de modelos</li>
                  </ul>
                  <p><strong>Opciones de prueba:</strong></p>
                  <ul>
                    <li><span class="badge bg-success">PoC (Prueba de Concepto)</span> de 30 días por €5,000 (deducible si contratas)</li>
                    <li>Validar ROI con 2-3 casos de uso críticos antes de implementación completa</li>
                    <li><span class="badge bg-info">Demo gratuita</span> de 45 minutos disponible para ver el sistema en acción</li>
                  </ul>
                </div>
              </div>
            </div>

            <!-- FAQ 7 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="faq7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                  <i class="fas fa-server me-3 text-primary"></i>
                  ¿Qué hardware necesito para ejecutar ADRI localmente?
                </button>
              </h3>
              <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="faq7" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p><strong>Opciones de hardware según necesidades:</strong></p>

                  <div class="mb-3">
                    <h6><i class="fas fa-check-circle text-success"></i> SERVER BÁSICO (10-50 usuarios)</h6>
                    <ul>
                      <li>AMD Ryzen AI Max+ 395, 128GB RAM, 2TB SSD</li>
                      <li>Consumo: 150W/hora</li>
                      <li>1 tarea IA simultánea</li>
                      <li><strong>€9,000 pago único</strong></li>
                    </ul>
                  </div>

                  <div class="mb-3">
                    <h6><i class="fas fa-check-circle text-success"></i> SERVER INTERMEDIO (50-100 usuarios)</h6>
                    <ul>
                      <li>AMD Ryzen 16+ cores, 64GB RAM, 1-2x Radeon AI GPU (16-32GB VRAM), 2TB SSD</li>
                      <li>Hasta 900W</li>
                      <li>2-3 tareas IA simultáneas</li>
                      <li><strong>Desde €9,000 + €3,000 por GPU adicional</strong></li>
                    </ul>
                  </div>

                  <div class="mb-3">
                    <h6><i class="fas fa-check-circle text-success"></i> BYOH (Bring Your Own Hardware)</h6>
                    <ul>
                      <li>Usa tu servidor existente</li>
                      <li>Requisitos mínimos: 8+ cores, 32GB RAM, 500GB SSD, Ubuntu 22.04+</li>
                      <li><strong>Solo €5,000 instalación + 1 año mantenimiento</strong></li>
                      <li>Auditoría técnica previa gratuita</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- FAQ 8 -->
            <div class="accordion-item border-0 mb-3 shadow-sm">
              <h3 class="accordion-header" id="faq8">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                  <i class="fas fa-expand-arrows-alt me-3 text-primary"></i>
                  ¿Cómo escalo BionicEyE + ADRI si mi empresa crece?
                </button>
              </h3>
              <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="faq8" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <p><strong>Escalabilidad sin modificaciones de código:</strong></p>
                  <p>Para ampliar capacidad solo agregas más nodos al cluster o más GPUs al servidor existente. <strong>No requiere cambios en el código</strong>, reconfiguración compleja ni downtime prolongado.</p>

                  <div class="mb-3">
                    <h6><i class="fas fa-arrow-up text-primary"></i> ESCALADO VERTICAL</h6>
                    <ul>
                      <li>Agrega GPUs Radeon AI adicionales (<strong>€3,000 por GPU de 32GB VRAM</strong>)</li>
                      <li>Aumenta tareas IA simultáneas de 1 a 10+</li>
                      <li>Detección automática - solo conecta y funciona</li>
                    </ul>
                  </div>

                  <div class="mb-3">
                    <h6><i class="fas fa-arrows-alt-h text-primary"></i> ESCALADO HORIZONTAL</h6>
                    <ul>
                      <li>Agrega nodos al cluster BionicEye con balanceo de carga automático</li>
                      <li>Cada nodo puede tener diferente configuración GPU</li>
                      <li>Lemonade Server distribuye automáticamente las cargas de trabajo IA</li>
                    </ul>
                  </div>

                  <div class="alert alert-info">
                    <strong>Ejemplo:</strong> Empresa con 50 usuarios (1 servidor básico) crece a 200 usuarios:<br>
                    <strong>Opción A:</strong> Agrega 2-3 GPUs adicionales al servidor existente<br>
                    <strong>Opción B:</strong> Agrega 1-2 nodos más al cluster<br>
                    Ambas opciones mantienen el código sin cambios.
                  </div>

                  <p>La arquitectura multi-agente de ADRI permite escalado transparente: <strong>ARIA (Agente Supervisora)</strong> distribuye automáticamente tareas entre los 9 agentes según capacidad disponible.</p>
                  <p><span class="badge bg-success">Sin vendor lock-in</span> - puedes combinar hardware propio con servidores nuestros.</p>
                </div>
              </div>
            </div>

          </div>

          <!-- CTA adicional después de FAQs -->
          <div class="text-center mt-5" data-aos="fade-up">
            <p class="text-muted mb-3">¿Tienes más preguntas?</p>
            <a href="contact.php" class="btn btn-primary btn-lg">
              <i class="fas fa-comments me-2"></i>
              Contacta con nuestros expertos
            </a>
          </div>
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