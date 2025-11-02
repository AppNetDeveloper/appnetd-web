<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

// Configuración de la página
$page_title = __('our_projects');
$meta_description = __('projects_meta_description');

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2><?php echo __('our_projects'); ?></h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><?php echo __('projects'); ?></li>
            </ul>
        </div>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</section>
<!-- Page Title End -->

<!-- Projects Section Start -->
<section class="project-section ptb-100">
    <div class="container">
        <div class="section-title text-center">
            <span><?php echo __('projects_our_work'); ?></span>
            <h2><?php echo __('projects_featured'); ?></h2>
            <p><?php echo __('projects_description'); ?></p>
        </div>

        <div class="row">
            <!-- Proyecto 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="project-card">
                    <div class="project-img">
                        <a href="proyecto-automatizacion-industrial.php">
                            <img src="<?php echo $base_url; ?>/assets/img/projects/automatizacion-industrial.jpg" alt="Automatización Industrial" onerror="this.src='<?php echo $base_url; ?>/assets/img/projects/placeholder.jpg'">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="proyecto-automatizacion-industrial.php"><?php echo __('project1_title'); ?></a></h3>
                        <p><?php echo __('project1_description'); ?></p>
                        <a href="proyecto-automatizacion-industrial.php" class="project-btn"><?php echo __('view_project'); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="project-card">
                    <div class="project-img">
                        <a href="proyecto-iot-industrial.php">
                            <img src="<?php echo $base_url; ?>/assets/img/projects/iot-industrial.jpg" alt="IoT Industrial" onerror="this.src='<?php echo $base_url; ?>/assets/img/projects/placeholder.jpg'">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="proyecto-iot-industrial.php"><?php echo __('project2_title'); ?></a></h3>
                        <p><?php echo __('project2_description'); ?></p>
                        <a href="proyecto-iot-industrial.php" class="project-btn"><?php echo __('view_project'); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="project-card">
                    <div class="project-img">
                        <a href="proyecto-ia-calidad.php">
                            <img src="<?php echo $base_url; ?>/assets/img/projects/ia-calidad.jpg" alt="Control de Calidad con IA" onerror="this.src='<?php echo $base_url; ?>/assets/img/projects/placeholder.jpg'">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="proyecto-ia-calidad.php"><?php echo __('project3_title'); ?></a></h3>
                        <p><?php echo __('project3_description'); ?></p>
                        <a href="proyecto-ia-calidad.php" class="project-btn"><?php echo __('view_project'); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="project-card">
                    <div class="project-img">
                        <a href="proyecto-eficiencia-energetica.php">
                            <img src="<?php echo $base_url; ?>/assets/img/projects/eficiencia-energetica.jpg" alt="Eficiencia Energética" onerror="this.src='<?php echo $base_url; ?>/assets/img/projects/placeholder.jpg'">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="proyecto-eficiencia-energetica.php"><?php echo __('project4_title'); ?></a></h3>
                        <p><?php echo __('project4_description'); ?></p>
                        <a href="proyecto-eficiencia-energetica.php" class="project-btn"><?php echo __('view_project'); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="project-card">
                    <div class="project-img">
                        <a href="proyecto-mantenimiento-predictivo.php">
                            <img src="<?php echo $base_url; ?>/assets/img/projects/mantenimiento-predictivo.jpg" alt="Mantenimiento Predictivo" onerror="this.src='<?php echo $base_url; ?>/assets/img/projects/placeholder.jpg'">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="proyecto-mantenimiento-predictivo.php"><?php echo __('project5_title'); ?></a></h3>
                        <p><?php echo __('project5_description'); ?></p>
                        <a href="proyecto-mantenimiento-predictivo.php" class="project-btn"><?php echo __('view_project'); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="project-card">
                    <div class="project-img">
                        <a href="proyecto-logistica-automatizada.php">
                            <img src="<?php echo $base_url; ?>/assets/img/projects/logistica-automatizada.jpg" alt="Logística Automatizada" onerror="this.src='<?php echo $base_url; ?>/assets/img/projects/placeholder.jpg'">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="proyecto-logistica-automatizada.php"><?php echo __('project6_title'); ?></a></h3>
                        <p><?php echo __('project6_description'); ?></p>
                        <a href="proyecto-logistica-automatizada.php" class="project-btn"><?php echo __('view_project'); ?> <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination-area">
            <ul>
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fas fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</section>
<!-- Projects Section End -->

<!-- CTA Section Start -->
<section class="cta-section cta-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="cta-text">
                    <h2><?php echo __('projects_cta_title'); ?></h2>
                    <p><?php echo __('projects_cta_description'); ?></p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="cta-btn">
                    <a href="contact.php" class="default-btn"><?php echo __('contact_us'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Section End -->

<?php
include "includes/footer.php";
?>
