<?php include "header.php"; ?>

<!-- Hero Section -->
<div class="common-hero" style="background-image: url('assets/img/bg/cameras-ia-bg.jpg');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="main-heading text-white">
          <h1><?php echo __('ia_cameras_title'); ?></h1>
          <div class="space16"></div>
          <p class="lead"><?php echo __('ia_cameras_subtitle'); ?></p>
          <div class="space30"></div>
          <a href="#contact-form" class="theme-btn1"><?php echo __('request_demo'); ?></a>
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
          <h2><?php echo __('ia_business_vision_title'); ?></h2>
          <p><?php echo __('ia_business_vision_desc'); ?></p>
          
          <div class="feature-list">
            <div class="feature-item">
              <i class="fas fa-car"></i>
              <div>
                <h4><?php echo __('feature_license_plate_title'); ?></h4>
                <p><?php echo __('feature_license_plate_desc'); ?></p>
              </div>
            </div>
            <div class="feature-item">
              <i class="fas fa-user-shield"></i>
              <div>
                <h4><?php echo __('feature_facial_recognition_title'); ?></h4>
                <p><?php echo __('feature_facial_recognition_desc'); ?></p>
              </div>
            </div>
            <div class="feature-item">
              <i class="fas fa-chart-bar"></i>
              <div>
                <h4><?php echo __('feature_occupancy_title'); ?></h4>
                <p><?php echo __('feature_occupancy_desc'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="service-image">
          <img src="assets/img/services/cameras-ia.jpg" alt="Cámaras con IA" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Beneficios -->
<div class="benefits-section sp bg-light">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo __('benefits_title'); ?></h2>
      <p><?php echo __('ia_benefits_subtitle'); ?></p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-shield-alt"></i>
          </div>
          <h4><?php echo __('benefit_security_title'); ?></h4>
          <p><?php echo __('benefit_security_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-search-dollar"></i>
          </div>
          <h4><?php echo __('benefit_loss_prevention_title'); ?></h4>
          <p><?php echo __('benefit_loss_prevention_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-chart-pie"></i>
          </div>
          <h4><?php echo __('benefit_data_analysis_title'); ?></h4>
          <p><?php echo __('benefit_data_analysis_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Aplicaciones -->
<div class="applications-section sp">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo __('applications_title'); ?></h2>
      <p><?php echo __('ia_applications_subtitle'); ?></p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-warehouse"></i></div>
          <h4><?php echo __('app_access_control_title'); ?></h4>
          <p><?php echo __('app_access_control_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-store"></i></div>
          <h4><?php echo __('app_retail_analytics_title'); ?></h4>
          <p><?php echo __('app_retail_analytics_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-hard-hat"></i></div>
          <h4><?php echo __('app_industrial_safety_title'); ?></h4>
          <p><?php echo __('app_industrial_safety_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Formulario de Contacto -->
<?php include "includes/contact-form.php"; ?>

<?php include "footer.php"; ?>
