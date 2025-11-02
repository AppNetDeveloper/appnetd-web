<?php include "includes/header.php"; ?>

<!-- Hero Section -->
<div class="common-hero" style="background-image: url('assets/img/bg/ciberseguridad-bg.jpg');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="main-heading text-white">
          <h1><?php echo __('cyber_security_title'); ?></h1>
          <div class="space16"></div>
          <p class="lead"><?php echo __('cyber_security_subtitle'); ?></p>
          <div class="space30"></div>
          <a href="#contact-form" class="theme-btn1"><?php echo __('free_security_assessment'); ?></a>
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
          <h2><?php echo __('cyber_digital_era_title'); ?></h2>
          <p><?php echo __('cyber_digital_era_desc'); ?></p>
          
          <div class="feature-list">
            <div class="feature-item">
              <i class="fas fa-shield-alt"></i>
              <div>
                <h4><?php echo __('cyber_feature_protection_title'); ?></h4>
                <p><?php echo __('cyber_feature_protection_desc'); ?></p>
              </div>
            </div>
            <div class="feature-item">
              <i class="fas fa-user-lock"></i>
              <div>
                <h4><?php echo __('cyber_feature_identity_title'); ?></h4>
                <p><?php echo __('cyber_feature_identity_desc'); ?></p>
              </div>
            </div>
            <div class="feature-item">
              <i class="fas fa-bug"></i>
              <div>
                <h4><?php echo __('cyber_feature_threat_title'); ?></h4>
                <p><?php echo __('cyber_feature_threat_desc'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="service-image">
          <img src="assets/img/services/ciberseguridad.jpg" alt="Ciberseguridad" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Beneficios -->
<div class="benefits-section sp bg-light">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo __('cyber_benefits_title'); ?></h2>
      <p><?php echo __('cyber_benefits_subtitle'); ?></p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-lock"></i>
          </div>
          <h4><?php echo __('cyber_benefit_data_title'); ?></h4>
          <p><?php echo __('cyber_benefit_data_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-clock"></i>
          </div>
          <h4><?php echo __('cyber_benefit_availability_title'); ?></h4>
          <p><?php echo __('cyber_benefit_availability_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-shield-virus"></i>
          </div>
          <h4><?php echo __('cyber_benefit_recovery_title'); ?></h4>
          <p><?php echo __('cyber_benefit_recovery_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Servicios -->
<div class="applications-section sp">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo __('cyber_services_title'); ?></h2>
      <p><?php echo __('cyber_services_subtitle'); ?></p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-search"></i></div>
          <h4><?php echo __('cyber_service_audit_title'); ?></h4>
          <p><?php echo __('cyber_service_audit_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-user-shield"></i></div>
          <h4><?php echo __('cyber_service_perimeter_title'); ?></h4>
          <p><?php echo __('cyber_service_perimeter_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-cloud"></i></div>
          <h4><?php echo __('cyber_service_cloud_title'); ?></h4>
          <p><?php echo __('cyber_service_cloud_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-mobile-alt"></i></div>
          <h4><?php echo __('cyber_service_mobile_title'); ?></h4>
          <p><?php echo __('cyber_service_mobile_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-user-graduate"></i></div>
          <h4><?php echo __('cyber_service_awareness_title'); ?></h4>
          <p><?php echo __('cyber_service_awareness_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-file-contract"></i></div>
          <h4><?php echo __('cyber_service_compliance_title'); ?></h4>
          <p><?php echo __('cyber_service_compliance_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Formulario de Contacto -->
<?php include "includes/contact-form.php"; ?>

<?php include "includes/footer.php"; ?>
