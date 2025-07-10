<?php
// Incluir configuración de idioma
require_once __DIR__ . '/languages/config.php';

// Incluir el archivo de idioma correspondiente
$lang_file = __DIR__ . '/languages/' . $current_lang . '.php';
if (file_exists($lang_file)) {
    include $lang_file;
} else {
    // Si no se encuentra el archivo de idioma, cargar el idioma por defecto
    include __DIR__ . '/languages/es.php';
}

include "header.php"; 
?>

<!-- Hero Section -->
<div class="common-hero" style="background-image: url('assets/img/bg/desarrollo-app-bg.jpg');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="main-heading text-white">
          <h1><?php echo __('custom_apps_title'); ?></h1>
          <div class="space16"></div>
          <p class="lead"><?php echo __('custom_apps_subtitle'); ?></p>
          <div class="space30"></div>
          <a href="#contact-form" class="theme-btn1"><?php echo __('request_quote'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Descripción del Servicio -->
<div class="service-detail sp">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="service-content">
          <h2><?php echo __('custom_apps_heading'); ?></h2>
          <p><?php echo __('custom_apps_description'); ?></p>
          
          <div class="feature-list">
            <div class="feature-item">
              <i class="fas fa-mobile-alt"></i>
              <div>
                <h4><?php echo __('custom_apps_mobile_title'); ?></h4>
                <p><?php echo __('custom_apps_mobile_desc'); ?></p>
              </div>
            </div>
            <div class="feature-item">
              <i class="fas fa-desktop"></i>
              <div>
                <h4><?php echo __('custom_apps_web_title'); ?></h4>
                <p><?php echo __('custom_apps_web_desc'); ?></p>
              </div>
            </div>
            <div class="feature-item">
              <i class="fas fa-sync"></i>
              <div>
                <h4><?php echo __('custom_apps_integration_title'); ?></h4>
                <p><?php echo __('custom_apps_integration_desc'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="service-image">
          <img src="assets/img/services/desarrollo-aplicaciones.jpg" alt="Desarrollo de Aplicaciones" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Proceso de Desarrollo -->
<div class="process-section sp bg-light">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo __('custom_apps_process_title'); ?></h2>
      <p><?php echo __('custom_apps_process_subtitle'); ?></p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="process-card text-center">
          <div class="process-number">1</div>
          <h4><?php echo __('custom_apps_step1_title'); ?></h4>
          <p><?php echo __('custom_apps_step1_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="process-card text-center">
          <div class="process-number">2</div>
          <h4><?php echo __('custom_apps_step2_title'); ?></h4>
          <p><?php echo __('custom_apps_step2_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="process-card text-center">
          <div class="process-number">3</div>
          <h4><?php echo __('custom_apps_step3_title'); ?></h4>
          <p><?php echo __('custom_apps_step3_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="process-card text-center">
          <div class="process-number">4</div>
          <h4><?php echo __('custom_apps_step4_title'); ?></h4>
          <p><?php echo __('custom_apps_step4_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="process-card text-center">
          <div class="process-number">5</div>
          <h4><?php echo __('custom_apps_step5_title'); ?></h4>
          <p><?php echo __('custom_apps_step5_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Tecnologías -->
<div class="technologies-section sp">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo __('custom_apps_tech_title'); ?></h2>
      <p><?php echo __('custom_apps_tech_subtitle'); ?></p>
    </div>
    
    <div class="row">
      <div class="col-6 col-md-3 mb-4">
        <div class="tech-card text-center">
          <div class="tech-icon">
            <i class="fab fa-react"></i>
          </div>
          <h5><?php echo __('custom_apps_tech_react'); ?></h5>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-4">
        <div class="tech-card text-center">
          <div class="tech-icon">
            <i class="fab fa-angular"></i>
          </div>
          <h5><?php echo __('custom_apps_tech_angular'); ?></h5>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-4">
        <div class="tech-card text-center">
          <div class="tech-icon">
            <i class="fab fa-vuejs"></i>
          </div>
          <h5><?php echo __('custom_apps_tech_vue'); ?></h5>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-4">
        <div class="tech-card text-center">
          <div class="tech-icon">
            <i class="fab fa-node-js"></i>
          </div>
          <h5><?php echo __('custom_apps_tech_node'); ?></h5>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-4">
        <div class="tech-card text-center">
          <div class="tech-icon">
            <i class="fab fa-python"></i>
          </div>
          <h5><?php echo __('custom_apps_tech_python'); ?></h5>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-4">
        <div class="tech-card text-center">
          <div class="tech-icon">
            <i class="fas fa-database"></i>
          </div>
          <h5><?php echo __('custom_apps_tech_database'); ?></h5>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-4">
        <div class="tech-card text-center">
          <div class="tech-icon">
            <i class="fas fa-cloud"></i>
          </div>
          <h5><?php echo __('custom_apps_tech_cloud'); ?></h5>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-4">
        <div class="tech-card text-center">
          <div class="tech-icon">
            <i class="fas fa-robot"></i>
          </div>
          <h5><?php echo __('custom_apps_tech_ai'); ?></h5>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Beneficios -->
<div class="benefits-section sp bg-light">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo __('custom_apps_benefits_title'); ?></h2>
      <p><?php echo __('custom_apps_benefits_subtitle'); ?></p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-bullseye"></i>
          </div>
          <h4><?php echo __('custom_apps_benefit1_title'); ?></h4>
          <p><?php echo __('custom_apps_benefit1_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h4><?php echo __('custom_apps_benefit2_title'); ?></h4>
          <p><?php echo __('custom_apps_benefit2_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-lock"></i>
          </div>
          <h4><?php echo __('custom_apps_benefit3_title'); ?></h4>
          <p><?php echo __('custom_apps_benefit3_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-expand-arrows-alt"></i>
          </div>
          <h4><?php echo __('custom_apps_benefit4_title'); ?></h4>
          <p><?php echo __('custom_apps_benefit4_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-headset"></i>
          </div>
          <h4><?php echo __('custom_apps_benefit5_title'); ?></h4>
          <p><?php echo __('custom_apps_benefit5_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Formulario de Contacto -->
<?php include "includes/contact-form.php"; ?>

<?php include "footer.php"; ?>
