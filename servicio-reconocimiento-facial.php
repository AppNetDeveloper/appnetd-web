<?php include "includes/header.php"; ?>

<!-- Hero Section -->
<div class="common-hero" style="background-image: url('assets/img/bg/service-bg.jpg');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="main-heading text-white">
          <h1>Reconocimiento Facial con IA</h1>
          <div class="space16"></div>
          <p class="lead">Solución avanzada de identificación biométrica para control de acceso, seguridad y experiencia de cliente personalizada</p>
          <div class="space30"></div>
          <a href="#contact-form" class="theme-btn1">Solicitar Demostración</a>
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
          <h2>Control de Acceso Inteligente</h2>
          <p>Nuestro sistema de reconocimiento facial utiliza algoritmos de IA de última generación para una identificación precisa y segura de personas en tiempo real.</p>
          
          <div class="feature-list">
            <div class="feature-item">
              <i class="fas fa-check-circle"></i>
              <div>
                <h4>Identificación en Tiempo Real</h4>
                <p>Detección y reconocimiento en milisegundos</p>
              </div>
            </div>
            <!-- Más características -->
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="service-image">
          <img src="assets/img/services/facial-recognition.jpg" alt="Sistema de reconocimiento facial" class="img-fluid rounded">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Aplicaciones -->
<div class="applications bg-light sp">
  <div class="container">
    <div class="section-title text-center">
      <h2>Aplicaciones del Reconocimiento Facial</h2>
      <p>Soluciones adaptables a diferentes sectores y necesidades</p>
    </div>
    
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="app-card">
          <div class="icon"><i class="fas fa-building"></i></div>
          <h4>Control de Acceso Empresarial</h4>
          <p>Gestión segura de accesos a instalaciones</p>
        </div>
      </div>
      <!-- Más aplicaciones -->
    </div>
  </div>
</div>

<!-- Formulario de Contacto -->
<div class="contact-form-section sp" id="contact-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto text-center">
        <div class="heading1">
          <h2>Solicita más información</h2>
          <p>Déjanos tus datos y nos pondremos en contacto contigo</p>
        </div>
      </div>
    </div>
    
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form id="service-contact-form" class="contact-form">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre completo" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Correo electrónico" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Teléfono">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Empresa">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" rows="5" placeholder="Cuéntanos sobre tu proyecto" required></textarea>
              </div>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="theme-btn1">Enviar Consulta</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include "includes/footer.php"; ?>
