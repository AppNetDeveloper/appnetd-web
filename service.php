<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Configuración de la página
$page_title = __('services_page_title') . ' - ' . __('site_name');
$meta_description = __('services_meta_description');
$meta_keywords = 'AppNet Developer, servicios, IA, IoT, desarrollo de software, ciberseguridad';

include "includes/header.php";
?>

<!-- Estilos CSS mejorados específicos para Services -->
<style>
/* Hero Section Services */
.services-hero {
    position: relative;
    min-height: 70vh;
    padding: 180px 0 100px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    overflow: hidden;
}

.services-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
    opacity: 0.3;
}

.services-hero .container {
    position: relative;
    z-index: 2;
}

.services-hero-content {
    text-align: center;
    color: white;
}

.services-hero-badge {
    display: inline-block;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    padding: 10px 25px;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 30px;
}

.services-hero h1 {
    font-size: 3.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 20px;
    line-height: 1.2;
}

.services-hero p {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    max-width: 700px;
    margin: 0 auto 30px;
    line-height: 1.7;
}

.services-hero .breadcrumb-nav {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(10px);
    padding: 12px 25px;
    border-radius: 50px;
    font-size: 0.95rem;
}

.services-hero .breadcrumb-item {
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
}

.services-hero .breadcrumb-item:hover {
    color: rgba(255, 255, 255, 0.7);
}

.services-hero .breadcrumb-item.active {
    color: rgba(255, 255, 255, 0.8);
}

.services-hero .breadcrumb-separator {
    color: rgba(255, 255, 255, 0.5);
}

/* Service Cards Mejoradas */
.service-card-enhanced {
    background: white;
    border-radius: 20px;
    padding: 40px 30px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.4s ease;
    height: 100%;
    position: relative;
    overflow: hidden;
    border: 2px solid transparent;
}

.service-card-enhanced::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #4e54c8, #8f94fb);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
}

.service-card-enhanced:hover::before {
    transform: scaleX(1);
}

.service-card-enhanced:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(78, 84, 200, 0.25);
    border-color: #4e54c8;
}

.service-card-icon {
    width: 90px;
    height: 90px;
    border-radius: 20px;
    background: linear-gradient(135deg, #4e54c8 0%, #8f94fb 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 42px;
    margin-bottom: 25px;
    transition: all 0.4s ease;
    position: relative;
}

.service-card-enhanced:hover .service-card-icon {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 10px 30px rgba(78, 84, 200, 0.4);
}

.service-card-arrow {
    position: absolute;
    top: 25px;
    right: 25px;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4e54c8, #8f94fb);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 16px;
    opacity: 0;
    transform: translate(10px, -10px);
    transition: all 0.4s ease;
}

.service-card-enhanced:hover .service-card-arrow {
    opacity: 1;
    transform: translate(0, 0);
}

.service-card-content h4 {
    font-size: 1.4rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 15px;
    transition: color 0.3s ease;
}

.service-card-content h4 a {
    color: inherit;
    text-decoration: none;
    transition: color 0.3s ease;
}

.service-card-enhanced:hover .service-card-content h4,
.service-card-enhanced:hover .service-card-content h4 a {
    color: #4e54c8;
}

.service-card-content p {
    font-size: 1rem;
    color: #6c757d;
    line-height: 1.7;
    margin: 0;
}

/* Features Section */
.features-section {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    padding: 80px 0;
}

.feature-item {
    background: white;
    border-radius: 15px;
    padding: 30px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    height: 100%;
}

.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(78, 84, 200, 0.2);
}

.feature-item-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4e54c8, #8f94fb);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 30px;
    margin-bottom: 20px;
}

.feature-item h5 {
    font-size: 1.2rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 15px;
}

.feature-item p {
    font-size: 0.95rem;
    color: #6c757d;
    line-height: 1.6;
    margin: 0;
}

/* Solution Section Mejorada */
.solution-modern {
    padding: 80px 0;
    background: white;
}

.solution-images {
    position: relative;
}

.solution-image-main {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.1);
}

.solution-image-main img {
    width: 100%;
    height: auto;
    display: block;
}

.solution-content {
    padding-left: 40px;
}

.solution-badge {
    display: inline-block;
    background: linear-gradient(135deg, #4e54c8, #8f94fb);
    color: white;
    padding: 8px 20px;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 20px;
}

.solution-content h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 20px;
    line-height: 1.3;
}

.solution-content > p {
    font-size: 1.1rem;
    color: #6c757d;
    line-height: 1.8;
    margin-bottom: 30px;
}

.solution-item {
    display: flex;
    gap: 20px;
    margin-bottom: 25px;
    padding: 25px;
    background: #f8f9fa;
    border-radius: 15px;
    transition: all 0.3s ease;
}

.solution-item:hover {
    background: linear-gradient(135deg, rgba(78, 84, 200, 0.05), rgba(143, 148, 251, 0.05));
    transform: translateX(5px);
}

.solution-item-icon {
    flex-shrink: 0;
    width: 60px;
    height: 60px;
    border-radius: 12px;
    background: linear-gradient(135deg, #4e54c8, #8f94fb);
    display: flex;
    align-items: center;
    justify-content: center;
}

.solution-item-icon img {
    width: 30px;
    height: 30px;
    filter: brightness(0) invert(1);
}

.solution-item-content h3 {
    font-size: 1.3rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 10px;
}

.solution-item-content p {
    font-size: 1rem;
    color: #6c757d;
    line-height: 1.6;
    margin: 0;
}

/* CTA Section Mejorada */
.cta-enhanced {
    padding: 80px 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    overflow: hidden;
}

.cta-enhanced::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
    background-size: 50px 50px;
}

.cta-enhanced .container {
    position: relative;
    z-index: 2;
}

.cta-content-enhanced h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    margin-bottom: 20px;
    line-height: 1.3;
}

.cta-content-enhanced p {
    font-size: 1.2rem;
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.7;
    margin-bottom: 0;
}

.cta-buttons-enhanced {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.cta-btn-enhanced {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 15px 35px;
    border-radius: 50px;
    font-size: 1rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.cta-btn-primary {
    background: white;
    color: #4e54c8;
}

.cta-btn-primary:hover {
    background: transparent;
    color: white;
    border-color: white;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}

.cta-btn-secondary {
    background: transparent;
    color: white;
    border-color: white;
}

.cta-btn-secondary:hover {
    background: white;
    color: #4e54c8;
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
}

/* Responsive */
@media (max-width: 991px) {
    .services-hero h1 {
        font-size: 2.5rem;
    }

    .solution-content {
        padding-left: 0;
        margin-top: 40px;
    }

    .solution-content h2 {
        font-size: 2rem;
    }
}

@media (max-width: 767px) {
    .services-hero {
        padding: 150px 0 80px;
        min-height: 60vh;
    }

    .services-hero h1 {
        font-size: 2rem;
    }

    .services-hero p {
        font-size: 1rem;
    }

    .service-card-enhanced {
        padding: 30px 25px;
    }

    .cta-content-enhanced h2 {
        font-size: 1.8rem;
    }

    .cta-buttons-enhanced {
        flex-direction: column;
    }

    .cta-btn-enhanced {
        width: 100%;
        justify-content: center;
    }
}
</style>

<!-- Hero Section Modernizada -->
<section class="services-hero">
    <div class="container">
        <div class="services-hero-content">
            <div class="services-hero-badge" data-aos="fade-down" data-aos-duration="800">
                <i class="fas fa-cogs me-2"></i>
                <?php echo __('our_services'); ?>
            </div>
            <h1 data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                <?php echo __('services_main_title'); ?>
            </h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <?php echo __('services_subtitle'); ?>
            </p>
            <nav class="breadcrumb-nav" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">
                <a href="index.php" class="breadcrumb-item">
                    <i class="fa-solid fa-house me-2"></i>
                    <?php echo __('services_page_breadcrumb_home'); ?>
                </a>
                <span class="breadcrumb-separator">
                    <i class="fa-solid fa-chevron-right"></i>
                </span>
                <span class="breadcrumb-item active">
                    <?php echo __('services_page_breadcrumb_current'); ?>
                </span>
            </nav>
        </div>
    </div>
</section>

<!-- Services Grid Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                <div class="section-header">
                    <h2 class="section-title"><?php echo __('services_section_title'); ?></h2>
                    <p class="section-description"><?php echo __('services_description'); ?></p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Servicio 1: Control de Producción -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
                <div class="service-card-enhanced">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>
                    <a href="servicio-control-produccion.php" class="service-card-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="service-card-content">
                        <h4><a href="servicio-control-produccion.php"><?php echo __('services_control_titulo'); ?></a></h4>
                        <p><?php echo __('services_control_desc'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Servicio 2: Integración de Maquinaria -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                <div class="service-card-enhanced">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <a href="servicio-integracion-maquinaria.php" class="service-card-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="service-card-content">
                        <h4><a href="servicio-integracion-maquinaria.php"><?php echo __('services_integracion_titulo'); ?></a></h4>
                        <p><?php echo __('services_integracion_desc'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Servicio 3: Cámaras con IA -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="service-card-enhanced">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-camera"></i>
                    </div>
                    <a href="servicio-cameras-ia.php" class="service-card-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="service-card-content">
                        <h4><a href="servicio-cameras-ia.php"><?php echo __('services_cameras_titulo'); ?></a></h4>
                        <p><?php echo __('services_cameras_desc'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Servicio 4: Geolocalización -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
                <div class="service-card-enhanced">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <a href="servicio-geolocalizacion.php" class="service-card-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="service-card-content">
                        <h4><a href="servicio-geolocalizacion.php"><?php echo __('services_geolocalizacion_titulo'); ?></a></h4>
                        <p><?php echo __('services_geolocalizacion_desc'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Servicio 5: Ciberseguridad -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                <div class="service-card-enhanced">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <a href="servicio-ciberseguridad.php" class="service-card-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="service-card-content">
                        <h4><a href="servicio-ciberseguridad.php"><?php echo __('services_ciberseguridad_titulo'); ?></a></h4>
                        <p><?php echo __('services_ciberseguridad_desc'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Servicio 6: Servidores -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="service-card-enhanced">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-cloud"></i>
                    </div>
                    <a href="servicio-servidores.php" class="service-card-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="service-card-content">
                        <h4><a href="servicio-servidores.php"><?php echo __('local_cloud_servers_title'); ?></a></h4>
                        <p><?php echo __('local_cloud_servers_desc'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Servicio 7: Servidores ARM -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
                <div class="service-card-enhanced">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-server"></i>
                    </div>
                    <a href="servicio-servidores-arm.php" class="service-card-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="service-card-content">
                        <h4><a href="servicio-servidores-arm.php"><?php echo __('services_servidores_titulo'); ?></a></h4>
                        <p><?php echo __('services_servidores_desc'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Servicio 8: Desarrollo de Software -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                <div class="service-card-enhanced">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-laptop-code"></i>
                    </div>
                    <a href="servicio-aplicaciones-medida.php" class="service-card-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="service-card-content">
                        <h4><a href="servicio-aplicaciones-medida.php"><?php echo __('services_software_titulo'); ?></a></h4>
                        <p><?php echo __('services_software_desc'); ?></p>
                    </div>
                </div>
            </div>

            <!-- Servicio 9: IoT Industrial -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="service-card-enhanced">
                    <div class="service-card-icon">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <a href="servicio-iot.php" class="service-card-arrow">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="service-card-content">
                        <h4><a href="servicio-iot.php"><?php echo __('services_ia_titulo'); ?></a></h4>
                        <p><?php echo __('services_ia_desc'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                <h2 class="section-title text-dark"><?php echo __('beneficios_title'); ?></h2>
                <p class="section-description text-dark"><?php echo __('beneficios_subtitle'); ?></p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="600">
                <div class="feature-item">
                    <div class="feature-item-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h5><?php echo __('benefit1_title'); ?></h5>
                    <p><?php echo __('benefit1_desc'); ?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                <div class="feature-item">
                    <div class="feature-item-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h5><?php echo __('benefit2_title'); ?></h5>
                    <p><?php echo __('benefit2_desc'); ?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="feature-item">
                    <div class="feature-item-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h5><?php echo __('benefit3_title'); ?></h5>
                    <p><?php echo __('benefit3_desc'); ?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="900" data-aos-delay="300">
                <div class="feature-item">
                    <div class="feature-item-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h5><?php echo __('support_24_7'); ?></h5>
                    <p><?php echo __('support_24_7_desc'); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Solution Section Modernizada -->
<section class="solution-modern">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                <div class="solution-images">
                    <div class="solution-image-main">
                        <img src="assets/img/about/visiton-img1.png" alt="<?php echo __('our_vision'); ?>" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                <div class="solution-content">
                    <span class="solution-badge">
                        <i class="fas fa-eye me-2"></i>
                        <?php echo __('our_vision'); ?>
                    </span>
                    <h2><?php echo __('vision_title'); ?></h2>
                    <p><?php echo __('vision_text'); ?></p>

                    <div class="solution-item">
                        <div class="solution-item-icon">
                            <img src="assets/img/icons/about-solution-iocn1.png" alt="">
                        </div>
                        <div class="solution-item-content">
                            <h3><?php echo __('infrastructure_solutions_title'); ?></h3>
                            <p><?php echo __('infrastructure_solutions_desc'); ?></p>
                        </div>
                    </div>

                    <div class="solution-item">
                        <div class="solution-item-icon">
                            <img src="assets/img/icons/about-solution-iocn2.png" alt="">
                        </div>
                        <div class="solution-item-content">
                            <h3><?php echo __('managed_services_title'); ?></h3>
                            <p><?php echo __('managed_services_desc'); ?></p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a class="btn btn-primary btn-modern btn-lg" href="contact.php">
                            <?php echo __('request_quote_btn'); ?>
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section Modernizada -->
<section class="cta-enhanced">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7" data-aos="fade-right" data-aos-duration="800">
                <div class="cta-content-enhanced">
                    <h2><?php echo __('cta_business_commitment'); ?></h2>
                    <p><?php echo __('cta_business_description'); ?></p>
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left" data-aos-duration="800">
                <div class="cta-buttons-enhanced">
                    <a class="cta-btn-enhanced cta-btn-primary" href="contact.php">
                        <?php echo __('request_consultation'); ?>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a class="cta-btn-enhanced cta-btn-secondary" href="about.php">
                        <?php echo __('explore_solutions'); ?>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>

<!-- Scripts específicos de la página -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animación smooth de scroll para enlaces internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 100;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Parallax effect para hero
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const servicesHero = document.querySelector('.services-hero');
        if (servicesHero && scrolled < window.innerHeight) {
            servicesHero.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
    });

    // Lazy loading de imágenes
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    observer.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
});
</script>
