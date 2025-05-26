<?php 
// Incluir configuración de idiomas
include "header.php";
?>

<!-- Hero Section -->
<div class="common-hero" style="background-image: url('assets/img/bg/servidores-arm-bg.jpg');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="main-heading text-white">
          <h1><?php echo __('servidores_arm_titulo'); ?></h1>
          <div class="space16"></div>
          <p class="lead"><?php echo __('servidores_arm_subtitulo'); ?></p>
          <div class="space30"></div>
          <a href="#contact-form" class="theme-btn1"><?php echo __('solicitar_informacion'); ?></a>
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
          <h2><?php echo __('servidores_arm_seccion1_titulo'); ?></h2>
          <p><?php echo __('servidores_arm_seccion1_desc'); ?></p>
          
          <div class="feature-list">
            <div class="feature-item">
              <i class="fas fa-bolt"></i>
              <div>
                <h4><?php echo __('servidores_arm_caracteristica1_titulo'); ?></h4>
                <p><?php echo __('servidores_arm_caracteristica1_desc'); ?></p>
              </div>
            </div>
            <div class="feature-item">
              <i class="fas fa-tachometer-alt"></i>
              <div>
                <h4><?php echo __('servidores_arm_caracteristica2_titulo'); ?></h4>
                <p><?php echo __('servidores_arm_caracteristica2_desc'); ?></p>
              </div>
            </div>
            <div class="feature-item">
              <i class="fas fa-leaf"></i>
              <div>
                <h4><?php echo __('servidores_arm_caracteristica3_titulo'); ?></h4>
                <p><?php echo __('servidores_arm_caracteristica3_desc'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="service-image">
          <img src="assets/img/services/servidores-arm.jpg" alt="Servidores ARM" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Aplicaciones -->
<div class="applications-section sp bg-light">
  <div class="container">
    <div class="section-title text-center">
      <h2>Casos de Uso Ideales</h2>
      <p>Aplicaciones donde los servidores ARM destacan</p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-network-wired"></i></div>
          <h4>Edge Computing</h4>
          <p>Procesamiento en el borde con bajo consumo energético</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-cloud"></i></div>
          <h4>Servicios Web</h4>
          <p>Alojamiento eficiente de sitios y aplicaciones web</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-brain"></i></div>
          <h4>Inferencia de IA</h4>
          <p>Ejecución eficiente de modelos de machine learning</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-database"></i></div>
          <h4>Bases de Datos</h4>
          <p>Almacenamiento y consulta eficiente de datos</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-server"></i></div>
          <h4><?php echo __('servidores_arm_microservicios_titulo'); ?></h4>
          <p><?php echo __('servidores_arm_microservicios_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-mobile-alt"></i></div>
          <h4><?php echo __('servidores_arm_desarrollo_titulo'); ?></h4>
          <p><?php echo __('servidores_arm_desarrollo_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Beneficios -->
<div class="benefits-section sp">
  <div class="container">
    <div class="section-title text-center">
      <h2><?php echo __('servidores_arm_ventajas_titulo'); ?></h2>
      <p><?php echo __('servidores_arm_ventajas_subtitulo'); ?></p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-bolt"></i>
          </div>
          <h4><?php echo __('servidores_arm_ventaja1_titulo'); ?></h4>
          <p><?php echo __('servidores_arm_ventaja1_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-expand"></i>
          </div>
          <h4><?php echo __('servidores_arm_ventaja2_titulo'); ?></h4>
          <p><?php echo __('servidores_arm_ventaja2_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-thermometer-quarter"></i>
          </div>
          <h4><?php echo __('servidores_arm_ventaja3_titulo'); ?></h4>
          <p><?php echo __('servidores_arm_ventaja3_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h4><?php echo __('servidores_arm_ventaja4_titulo'); ?></h4>
          <p><?php echo __('servidores_arm_ventaja4_desc'); ?></p>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="benefit-card text-center">
          <div class="benefit-icon">
            <i class="fas fa-leaf"></i>
          </div>
          <h4><?php echo __('servidores_arm_ventaja5_titulo'); ?></h4>
          <p><?php echo __('servidores_arm_ventaja5_desc'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Formulario de Contacto -->
<?php include "includes/contact-form.php"; ?>

<?php include "footer.php"; ?>
