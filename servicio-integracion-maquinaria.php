<?php include "header.php"; ?>

<!-- Hero Section -->
<div class="common-hero" style="background-image: url('assets/img/bg/maquinaria-bg.jpg');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="main-heading text-white">
          <h1><?php echo __('services_integracion_titulo'); ?></h1>
          <div class="space16"></div>
          <p class="lead"><?php echo __('services_integracion_desc'); ?></p>
          <div class="space30"></div>
          <a href="#contact-form" class="theme-btn1"><?php echo __('request_consultation'); ?></a>
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
          <h2><?php echo __('integration_industry_title'); ?></h2>
          <p><?php echo __('integration_industry_desc'); ?></p>
          
          <div class="feature-list">
            <div class="feature-item">
              <i class="fas fa-plug"></i>
              <div>
                <h4><?php echo __('feature_connectivity_title'); ?></h4>
                <p><?php echo __('feature_connectivity_desc'); ?></p>
              </div>
            </div>
            <div class="feature-item">
              <i class="fas fa-tachometer-alt"></i>
              <div>
                <h4><?php echo __('feature_monitoring_title'); ?></h4>
                <p><?php echo __('feature_monitoring_desc'); ?></p>
              </div>
            </div>
            <div class="feature-item">
              <i class="fas fa-project-diagram"></i>
              <div>
                <h4><?php echo __('feature_integration_title'); ?></h4>
                <p><?php echo __('feature_integration_desc'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="service-image">
          <img src="assets/img/services/maquinaria-industrial.jpg" alt="Integración de Maquinaria" class="img-fluid rounded">
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
      <p><?php echo __('benefits_subtitle'); ?></p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h4><?php echo __('benefit_efficiency_title'); ?></h4>
          <p><?php echo __('benefit_efficiency_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-exclamation-triangle"></i>
          </div>
          <h4><?php echo __('benefit_prevention_title'); ?></h4>
          <p><?php echo __('benefit_prevention_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-database"></i>
          </div>
          <h4><?php echo __('benefit_data_title'); ?></h4>
          <p><?php echo __('benefit_data_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Aplicaciones -->
<div class="applications-section sp">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo __('equipment_title'); ?></h2>
      <p><?php echo __('equipment_subtitle'); ?></p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-industry"></i></div>
          <h4><?php echo __('equipment_cnc_title'); ?></h4>
          <p><?php echo __('equipment_cnc_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-weight"></i></div>
          <h4><?php echo __('equipment_scales_title'); ?></h4>
          <p><?php echo __('equipment_scales_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-ruler-combined"></i></div>
          <h4><?php echo __('equipment_gauges_title'); ?></h4>
          <p><?php echo __('equipment_gauges_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Formulario de Contacto -->
<?php include "includes/contact-form.php"; ?>

<?php include "footer.php"; ?>
