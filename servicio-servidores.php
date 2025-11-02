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

include "includes/header.php"; 
?>

<!-- Hero Section -->
<div class="common-hero" style="background-image: url('assets/img/bg/servidores-bg.jpg');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="main-heading text-white">
          <h1><?php echo __('servers_title'); ?></h1>
          <div class="space16"></div>
          <p class="lead"><?php echo __('servers_subtitle'); ?></p>
          <div class="space30"></div>
          <a href="#contact-form" class="theme-btn1"><?php echo __('consult_solutions'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Service Description -->
<div class="service-detail sp">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="service-content">
          <h2><?php echo __('servers_custom_title'); ?></h2>
          <p><?php echo __('servers_custom_desc'); ?></p>
          
          <div class="feature-list">
            <div class="feature-item">
              <i class="fas fa-server"></i>
              <div>
                <h4><?php echo __('servers_feature_dedicated_title'); ?></h4>
                <p><?php echo __('servers_feature_dedicated_desc'); ?></p>
              </div>
            </div>
            <div class="feature-item">
              <i class="fas fa-cloud"></i>
              <div>
                <h4><?php echo __('servers_feature_cloud_title'); ?></h4>
                <p><?php echo __('servers_feature_cloud_desc'); ?></p>
              </div>
            </div>
            <div class="feature-item">
              <i class="fas fa-sync-alt"></i>
              <div>
                <h4><?php echo __('servers_feature_backup_title'); ?></h4>
                <p><?php echo __('servers_feature_backup_desc'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="service-image">
          <img src="assets/img/services/servidores.jpg" alt="Servidores" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Solutions -->
<div class="solutions-section sp bg-light">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo __('servers_solutions_title'); ?></h2>
      <p><?php echo __('servers_solutions_subtitle'); ?></p>
    </div>
    
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="solution-card">
          <div class="icon">
            <i class="fas fa-building"></i>
          </div>
          <h3><?php echo __('servers_solution_local_title'); ?></h3>
          <ul class="feature-list">
            <li><?php echo __('servers_solution_local_feature1'); ?></li>
            <li><?php echo __('servers_solution_local_feature2'); ?></li>
            <li><?php echo __('servers_solution_local_feature3'); ?></li>
            <li><?php echo __('servers_solution_local_feature4'); ?></li>
          </ul>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="solution-card">
          <div class="icon">
            <i class="fas fa-cloud"></i>
          </div>
          <h3><?php echo __('servers_solution_cloud_title'); ?></h3>
          <ul class="feature-list">
            <li><?php echo __('servers_solution_cloud_feature1'); ?></li>
            <li><?php echo __('servers_solution_cloud_feature2'); ?></li>
            <li><?php echo __('servers_solution_cloud_feature3'); ?></li>
            <li><?php echo __('servers_solution_cloud_feature4'); ?></li>
          </ul>
        </div>
      </div>
      
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="solution-card">
          <div class="icon">
            <i class="fas fa-random"></i>
          </div>
          <h3><?php echo __('servers_solution_hybrid_title'); ?></h3>
          <ul class="feature-list">
            <li><?php echo __('servers_solution_hybrid_feature1'); ?></li>
            <li><?php echo __('servers_solution_hybrid_feature2'); ?></li>
            <li><?php echo __('servers_solution_hybrid_feature3'); ?></li>
            <li><?php echo __('servers_solution_hybrid_feature4'); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Benefits -->
<div class="benefits-section sp">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo __('servers_benefits_title'); ?></h2>
      <p><?php echo __('servers_benefits_subtitle'); ?></p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-tachometer-alt"></i>
          </div>
          <h4><?php echo __('servers_benefit_performance_title'); ?></h4>
          <p><?php echo __('servers_benefit_performance_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-lock"></i>
          </div>
          <h4><?php echo __('servers_benefit_security_title'); ?></h4>
          <p><?php echo __('servers_benefit_security_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h4><?php echo __('servers_benefit_scalability_title'); ?></h4>
          <p><?php echo __('servers_benefit_scalability_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Formulario de Contacto -->
<?php include "includes/contact-form.php"; ?>

<?php include "includes/footer.php"; ?>
