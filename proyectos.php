<?php
// Incluir el header
$page_title = 'Nuestros Proyectos';
$additional_css = 'assets/css/projects.css';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

include_once 'header.php';
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Nuestros Proyectos</h2>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li>Proyectos</li>
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
            <span>Nuestro Trabajo</span>
            <h2>Proyectos Destacados</h2>
            <p>Descubre algunos de nuestros proyectos más recientes y exitosos en automatización industrial, IoT y soluciones tecnológicas avanzadas.</p>
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
                        <h3><a href="proyecto-automatizacion-industrial.php">Automatización de Línea de Producción</a></h3>
                        <p>Sistema integral de automatización para línea de producción industrial con control en tiempo real.</p>
                        <a href="proyecto-automatizacion-industrial.php" class="project-btn">Ver Proyecto <i class="fas fa-arrow-right"></i></a>
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
                        <h3><a href="proyecto-iot-industrial.php">Implementación de IoT Industrial</a></h3>
                        <p>Solución de monitoreo remoto para maquinaria industrial con análisis predictivo.</p>
                        <a href="proyecto-iot-industrial.php" class="project-btn">Ver Proyecto <i class="fas fa-arrow-right"></i></a>
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
                        <h3><a href="proyecto-ia-calidad.php">Control de Calidad con IA</a></h3>
                        <p>Sistema de inspección visual automatizada para control de calidad en producción.</p>
                        <a href="proyecto-ia-calidad.php" class="project-btn">Ver Proyecto <i class="fas fa-arrow-right"></i></a>
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
                        <h3><a href="proyecto-eficiencia-energetica.php">Sistema de Eficiencia Energética</a></h3>
                        <p>Optimización del consumo energético en planta industrial mediante IoT y análisis avanzado.</p>
                        <a href="proyecto-eficiencia-energetica.php" class="project-btn">Ver Proyecto <i class="fas fa-arrow-right"></i></a>
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
                        <h3><a href="proyecto-mantenimiento-predictivo.php">Mantenimiento Predictivo</a></h3>
                        <p>Implementación de sistema de mantenimiento predictivo basado en IA para maquinaria crítica.</p>
                        <a href="proyecto-mantenimiento-predictivo.php" class="project-btn">Ver Proyecto <i class="fas fa-arrow-right"></i></a>
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
                        <h3><a href="proyecto-logistica-automatizada.php">Sistema de Logística Automatizada</a></h3>
                        <p>Automatización de almacén con vehículos guiados (AGV) y gestión inteligente de inventario.</p>
                        <a href="proyecto-logistica-automatizada.php" class="project-btn">Ver Proyecto <i class="fas fa-arrow-right"></i></a>
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
                    <h2>¿Tienes un proyecto en mente?</h2>
                    <p>Estamos listos para ayudarte a hacerlo realidad con nuestras soluciones tecnológicas avanzadas.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="cta-btn">
                    <a href="contacto.php" class="default-btn">Contáctanos</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Section End -->

<?php
// Incluir el footer
include_once 'footer.php';
?>
