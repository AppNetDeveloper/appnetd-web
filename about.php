<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Configuración de la página
$page_title = __('about_page_title') . ' - ' . __('site_name');
$meta_description = __('about_meta_description');
$meta_keywords = 'AppNet Developer, tecnología, IA, IoT, desarrollo de software, automatización industrial';

include "includes/header.php";
?>

<!-- Estilos CSS mejorados específicos para About -->
<style>
/* Hero Section About */
.about-hero {
    position: relative;
    min-height: 100vh;
    padding-top: 120px !important;
}

.about-hero .hero-background {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

/* Stats Cards con animación mejorada */
.stats-card-modern {
    background: white;
    border-radius: 20px;
    padding: 40px 30px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    border: 2px solid transparent;
    position: relative;
    overflow: hidden;
}

.stats-card-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, #4e54c8, #8f94fb);
}

.stats-card-modern:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(78, 84, 200, 0.2);
    border-color: #4e54c8;
}

.stats-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4e54c8 0%, #8f94fb 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 32px;
}

.stats-number {
    font-size: 3.5rem;
    font-weight: 700;
    color: #4e54c8;
    margin: 20px 0 10px;
    line-height: 1;
}

.stats-label {
    font-size: 1.1rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 10px;
}

.stats-description {
    font-size: 0.9rem;
    color: #6c757d;
}

/* Mission & Vision Cards */
.mission-card-modern,
.vision-card-modern {
    background: white;
    border-radius: 25px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
}

.mission-card-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 100%;
    background: linear-gradient(180deg, #4e54c8, #8f94fb);
}

.vision-card-modern::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 5px;
    height: 100%;
    background: linear-gradient(180deg, #f093fb, #f5576c);
}

.mission-card-modern:hover,
.vision-card-modern:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

.mission-icon,
.vision-icon {
    width: 80px;
    height: 80px;
    border-radius: 20px;
    background: linear-gradient(135deg, #4e54c8 0%, #8f94fb 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 36px;
    margin-bottom: 25px;
}

.vision-icon {
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
}

.mission-content h3,
.vision-content h3 {
    font-size: 2rem;
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 20px;
}

.mission-content p,
.vision-content p {
    font-size: 1.1rem;
    color: #6c757d;
    line-height: 1.8;
    margin-bottom: 30px;
}

.mission-features,
.vision-features {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.mission-feature,
.vision-feature {
    display: flex;
    align-items: center;
    gap: 15px;
}

.mission-check,
.vision-check {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4e54c8, #8f94fb);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    flex-shrink: 0;
}

.vision-check {
    background: linear-gradient(135deg, #f093fb, #f5576c);
}

/* Value Cards */
.value-card-modern {
    background: white;
    border-radius: 20px;
    padding: 35px 25px;
    text-align: center;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    height: 100%;
    border: 2px solid transparent;
}

.value-card-modern:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(78, 84, 200, 0.2);
    border-color: #4e54c8;
}

.value-icon-wrapper {
    margin-bottom: 25px;
}

.value-icon {
    width: 90px;
    height: 90px;
    border-radius: 20px;
    background: linear-gradient(135deg, #4e54c8 0%, #8f94fb 100%);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 40px;
    transition: all 0.3s ease;
}

.value-card-modern:hover .value-icon {
    transform: scale(1.1) rotate(5deg);
}

.value-content h4 {
    font-size: 1.3rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 15px;
}

.value-content p {
    font-size: 0.95rem;
    color: #6c757d;
    line-height: 1.6;
}

/* History Timeline Mejorada */
.history-timeline {
    position: relative;
    padding: 40px 0;
}

.history-timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 4px;
    background: linear-gradient(180deg, #4e54c8 0%, #8f94fb 100%);
    transform: translateX(-50%);
}

.history-item {
    position: relative;
    margin-bottom: 60px;
}

.history-item:nth-child(odd) .history-content {
    margin-left: 0;
    margin-right: auto;
    padding-right: 60px;
    text-align: right;
}

.history-item:nth-child(even) .history-content {
    margin-left: auto;
    margin-right: 0;
    padding-left: 60px;
    text-align: left;
}

.history-year {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: linear-gradient(135deg, #4e54c8, #8f94fb);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 700;
    z-index: 2;
    box-shadow: 0 0 0 10px white, 0 5px 20px rgba(78, 84, 200, 0.3);
}

.history-content {
    width: calc(50% - 50px);
    background: white;
    border-radius: 20px;
    padding: 35px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.history-item:hover .history-content {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(78, 84, 200, 0.2);
}

.history-icon {
    width: 70px;
    height: 70px;
    border-radius: 15px;
    background: linear-gradient(135deg, #4e54c8, #8f94fb);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 30px;
    margin-bottom: 20px;
}

.history-text h3 {
    font-size: 1.4rem;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 15px;
}

.history-text p {
    font-size: 1rem;
    color: #6c757d;
    line-height: 1.7;
}

/* Responsive ajustes */
@media (max-width: 991px) {
    .history-timeline::before {
        left: 30px;
    }

    .history-year {
        left: 30px;
    }

    .history-item:nth-child(odd) .history-content,
    .history-item:nth-child(even) .history-content {
        width: calc(100% - 100px);
        margin-left: 100px;
        margin-right: 0;
        padding-left: 30px;
        padding-right: 30px;
        text-align: left;
    }
}

@media (max-width: 767px) {
    .about-hero {
        padding-top: 100px !important;
    }

    .stats-number {
        font-size: 2.5rem;
    }

    .mission-content h3,
    .vision-content h3 {
        font-size: 1.5rem;
    }

    .history-year {
        width: 70px;
        height: 70px;
        font-size: 1.1rem;
    }
}
</style>

<!-- Hero Section Modernizada -->
<section class="hero-modern about-hero" id="hero">
    <div class="hero-background">
        <div class="hero-gradient"></div>
        <div class="hero-particles"></div>
    </div>
    <div class="container">
        <div class="row align-items-center" style="min-height: calc(100vh - 120px);">
            <div class="col-lg-6 hero-content">
                <div class="hero-badge" data-aos="fade-down" data-aos-duration="800">
                    <span class="badge-icon"><i class="fas fa-rocket"></i></span>
                    <span><?php echo __('about_section_title'); ?></span>
                </div>
                <h1 class="hero-title" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                    <?php echo __('about_main_title'); ?>
                </h1>
                <p class="hero-description" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <?php echo __('about_description'); ?>
                </p>
                <div class="hero-actions" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">
                    <a href="service.php" class="btn btn-primary btn-modern me-3">
                        <span><?php echo __('our_solutions'); ?></span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    <a href="contact.php" class="btn btn-outline-light btn-modern">
                        <i class="fas fa-envelope me-2"></i>
                        <span><?php echo __('contact_us'); ?></span>
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
                        <img src="assets/img/hero/AppNetDeveloper-1.webp" alt="<?php echo __('hero_main_image_alt'); ?>" class="img-fluid">
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
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                <div class="section-header">
                    <div class="section-badge">
                        <span><?php echo __('about_who_we_are_title'); ?></span>
                    </div>
                    <h2 class="section-title"><?php echo __('about_who_we_are_title'); ?></h2>
                    <p class="section-description"><?php echo __('about_who_we_are_description'); ?></p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
                <div class="feature-card-modern">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                    </div>
                    <div class="feature-content">
                        <h4><?php echo __('about_feature_innovation_title'); ?></h4>
                        <p><?php echo __('about_feature_innovation_desc'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                <div class="feature-card-modern">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="feature-content">
                        <h4><?php echo __('about_feature_experience_title'); ?></h4>
                        <p><?php echo __('about_feature_experience_desc'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="feature-card-modern">
                    <div class="feature-icon-wrapper">
                        <div class="feature-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                    </div>
                    <div class="feature-content">
                        <h4><?php echo __('about_feature_support_title'); ?></h4>
                        <p><?php echo __('about_feature_support_desc'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Estadísticas Modernizada -->
<section class="stats-modern py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                <div class="section-header">
                    <div class="section-badge">
                        <span><?php echo __('about_achievements_badge'); ?></span>
                    </div>
                    <h2 class="section-title"><?php echo __('about_stats_title'); ?></h2>
                    <p class="section-description"><?php echo __('about_stats_subtitle'); ?></p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="600">
                <div class="stats-card-modern">
                    <div class="stats-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="stats-number" data-count="500">0</div>
                    <div class="stats-label"><?php echo __('about_stats_projects'); ?></div>
                    <div class="stats-description"><?php echo __('about_stats_projects_desc'); ?></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                <div class="stats-card-modern">
                    <div class="stats-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stats-number" data-count="250">0</div>
                    <div class="stats-label"><?php echo __('about_stats_clients'); ?></div>
                    <div class="stats-description"><?php echo __('about_stats_clients_desc'); ?></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="stats-card-modern">
                    <div class="stats-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="stats-number" data-count="15">0</div>
                    <div class="stats-label"><?php echo __('about_stats_countries'); ?></div>
                    <div class="stats-description"><?php echo __('about_stats_countries_desc'); ?></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="900" data-aos-delay="300">
                <div class="stats-card-modern">
                    <div class="stats-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="stats-number" data-count="24">0</div>
                    <div class="stats-label"><?php echo __('about_stats_support'); ?></div>
                    <div class="stats-description"><?php echo __('about_stats_support_desc'); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Misión y Visión Modernizada -->
<section class="mission-vision-modern py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                <div class="section-header">
                    <div class="section-badge">
                        <span><?php echo __('about_mission_vision_title'); ?></span>
                    </div>
                    <h2 class="section-title"><?php echo __('about_mission_vision_title'); ?></h2>
                    <p class="section-description"><?php echo __('about_mission_vision_subtitle'); ?></p>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                <div class="mission-card-modern">
                    <div class="mission-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <div class="mission-content">
                        <h3><?php echo __('about_mission_title'); ?></h3>
                        <p><?php echo __('about_mission_description'); ?></p>
                        <div class="mission-features">
                            <div class="mission-feature">
                                <div class="mission-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span><?php echo __('about_feature1'); ?></span>
                            </div>
                            <div class="mission-feature">
                                <div class="mission-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span><?php echo __('about_feature2'); ?></span>
                            </div>
                            <div class="mission-feature">
                                <div class="mission-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span><?php echo __('about_feature3'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800">
                <div class="vision-card-modern">
                    <div class="vision-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="vision-content">
                        <h3><?php echo __('about_vision_title'); ?></h3>
                        <p><?php echo __('about_vision_description'); ?></p>
                        <div class="vision-features">
                            <div class="vision-feature">
                                <div class="vision-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span><?php echo __('about_feature1'); ?></span>
                            </div>
                            <div class="vision-feature">
                                <div class="vision-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span><?php echo __('about_feature2'); ?></span>
                            </div>
                            <div class="vision-feature">
                                <div class="vision-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span><?php echo __('about_feature4'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Valores Modernizada -->
<section class="values-modern py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                <div class="section-header">
                    <div class="section-badge">
                        <span><?php echo __('about_values_title'); ?></span>
                    </div>
                    <h2 class="section-title"><?php echo __('about_values_title'); ?></h2>
                    <p class="section-description"><?php echo __('about_values_subtitle'); ?></p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="600">
                <div class="value-card-modern">
                    <div class="value-icon-wrapper">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                    </div>
                    <div class="value-content">
                        <h4><?php echo __('about_value_innovation'); ?></h4>
                        <p><?php echo __('about_value_innovation_desc'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                <div class="value-card-modern">
                    <div class="value-icon-wrapper">
                        <div class="value-icon">
                            <i class="fas fa-award"></i>
                        </div>
                    </div>
                    <div class="value-content">
                        <h4><?php echo __('about_value_excellence'); ?></h4>
                        <p><?php echo __('about_value_excellence_desc'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="value-card-modern">
                    <div class="value-icon-wrapper">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                    </div>
                    <div class="value-content">
                        <h4><?php echo __('about_value_commitment'); ?></h4>
                        <p><?php echo __('about_value_commitment_desc'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="900" data-aos-delay="300">
                <div class="value-card-modern">
                    <div class="value-icon-wrapper">
                        <div class="value-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                    </div>
                    <div class="value-content">
                        <h4><?php echo __('about_value_integrity'); ?></h4>
                        <p><?php echo __('about_value_integrity_desc'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Historia Modernizada -->
<section class="history-modern py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                <div class="section-header">
                    <div class="section-badge">
                        <span><?php echo __('about_history_title'); ?></span>
                    </div>
                    <h2 class="section-title"><?php echo __('about_history_title'); ?></h2>
                    <p class="section-description"><?php echo __('about_history_subtitle'); ?></p>
                </div>
            </div>
        </div>

        <div class="history-timeline">
            <div class="history-item" data-aos="fade-up" data-aos-duration="600">
                <div class="history-year">2000</div>
                <div class="history-content">
                    <div class="history-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="history-text">
                        <h3><?php echo __('about_history_event_2000'); ?></h3>
                        <p><?php echo __('about_history_event_2000_desc'); ?></p>
                    </div>
                </div>
            </div>

            <div class="history-item" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                <div class="history-year">2010</div>
                <div class="history-content">
                    <div class="history-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <div class="history-text">
                        <h3><?php echo __('about_history_event_2010'); ?></h3>
                        <p><?php echo __('about_history_event_2010_desc'); ?></p>
                    </div>
                </div>
            </div>

            <div class="history-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="history-year">2020</div>
                <div class="history-content">
                    <div class="history-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="history-text">
                        <h3><?php echo __('about_history_event_2020'); ?></h3>
                        <p><?php echo __('about_history_event_2020_desc'); ?></p>
                    </div>
                </div>
            </div>

            <div class="history-item" data-aos="fade-up" data-aos-duration="900" data-aos-delay="300">
                <div class="history-year">2025</div>
                <div class="history-content">
                    <div class="history-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <div class="history-text">
                        <h3><?php echo __('about_history_event_2025'); ?></h3>
                        <p><?php echo __('about_history_event_2025_desc'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Experiencia Modernizada -->
<section class="services-modern py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mb-5" data-aos="fade-up" data-aos-duration="800">
                <div class="section-header">
                    <div class="section-badge">
                        <span><?php echo __('about_expertise_improved_title'); ?></span>
                    </div>
                    <h2 class="section-title"><?php echo __('about_expertise_improved_title'); ?></h2>
                    <p class="section-description"><?php echo __('expertise_intro'); ?></p>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
                <div class="service-card-modern">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="service-number">01</div>
                    </div>
                    <div class="service-body">
                        <h3><?php echo __('about_expertise_ai_improved'); ?></h3>
                        <p><?php echo __('about_expertise_ai_improved_desc'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                <div class="service-card-modern">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-microchip"></i>
                        </div>
                        <div class="service-number">02</div>
                    </div>
                    <div class="service-body">
                        <h3><?php echo __('about_expertise_iot_improved'); ?></h3>
                        <p><?php echo __('about_expertise_iot_improved_desc'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="service-card-modern">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="service-number">03</div>
                    </div>
                    <div class="service-body">
                        <h3><?php echo __('about_expertise_cybersecurity_improved'); ?></h3>
                        <p><?php echo __('about_expertise_cybersecurity_improved_desc'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="600">
                <div class="service-card-modern">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="service-number">04</div>
                    </div>
                    <div class="service-body">
                        <h3><?php echo __('about_expertise_cloud_improved'); ?></h3>
                        <p><?php echo __('about_expertise_cloud_improved_desc'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700" data-aos-delay="100">
                <div class="service-card-modern">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="service-number">05</div>
                    </div>
                    <div class="service-body">
                        <h3><?php echo __('about_expertise_mobile_improved'); ?></h3>
                        <p><?php echo __('about_expertise_mobile_improved_desc'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                <div class="service-card-modern">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="service-number">06</div>
                    </div>
                    <div class="service-body">
                        <h3><?php echo __('about_expertise_data_improved'); ?></h3>
                        <p><?php echo __('about_expertise_data_improved_desc'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección CTA Modernizada -->
<section class="cta-modern py-5">
    <div class="container">
        <div class="cta-content" data-aos="fade-up" data-aos-duration="800">
            <div class="cta-text">
                <h2><?php echo __('about_cta_title'); ?></h2>
                <p><?php echo __('about_cta_description'); ?></p>
            </div>
            <div class="cta-actions">
                <a href="contact.php" class="btn btn-primary btn-modern btn-lg me-3">
                    <span><?php echo __('about_cta_button_primary'); ?></span>
                    <i class="fas fa-arrow-right ms-2"></i>
                </a>
                <a href="proyectos.php" class="btn btn-outline-light btn-modern btn-lg">
                    <span><?php echo __('about_cta_button_secondary'); ?></span>
                    <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>

<!-- Scripts específicos de la página -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Contador animado para estadísticas mejorado
    const statsNumbers = document.querySelectorAll('.stats-number');

    const animateValue = (element, start, end, duration) => {
        const range = end - start;
        let current = start;
        const increment = end > start ? 1 : -1;
        const stepTime = Math.abs(Math.floor(duration / range));

        const timer = setInterval(() => {
            current += increment;
            element.textContent = current;
            if (current === end) {
                clearInterval(timer);
            }
        }, stepTime);
    };

    // Usar Intersection Observer para activar la animación cuando sea visible
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = parseInt(entry.target.getAttribute('data-count'));
                animateValue(entry.target, 0, target, 2000);
                observer.unobserve(entry.target);
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    statsNumbers.forEach(stat => {
        observer.observe(stat);
    });

    // Animación suave para scroll
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
        const heroParticles = document.querySelector('.hero-particles');
        if (heroParticles) {
            heroParticles.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
    });
});
</script>
