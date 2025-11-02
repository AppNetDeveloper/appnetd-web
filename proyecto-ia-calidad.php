<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

// Configuración de la página
$page_title = 'Control de Calidad con IA';
$meta_description = 'Sistema de inspección visual automatizada para control de calidad en producción';

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Control de Calidad con IA</h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><a href="proyectos.php"><?php echo __('projects'); ?></a></li>
                <li>Control de Calidad con IA</li>
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

<!-- Project Details Section Start -->
<section class="project-details-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="project-details-img">
                    <img src="assets/img/projects/ia-calidad.jpg" alt="Control de Calidad con IA">
                </div>

                <div class="project-details-content">
                    <h3>Descripción del Proyecto</h3>
                    <p>Desarrollamos un sistema de inspección visual automatizada basado en inteligencia artificial que revolucionó el proceso de control de calidad de nuestro cliente. Utilizando técnicas de Deep Learning y Computer Vision, el sistema detecta defectos con una precisión del 99.2%, superando ampliamente la inspección manual tradicional.</p>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/projects/ia-calidad-1.jpg" alt="Sistema de Visión IA" class="mb-4">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/projects/ia-calidad-2.jpg" alt="Inspección Automatizada" class="mb-4">
                        </div>
                    </div>

                    <h3>Retos del Proyecto</h3>
                    <ul class="project-details-list">
                        <li>Detección de defectos microscópicos y sutiles</li>
                        <li>Alta velocidad de producción (300 piezas/minuto)</li>
                        <li>Variabilidad en condiciones de iluminación</li>
                        <li>Reducción de falsos positivos</li>
                        <li>Integración con línea de producción existente</li>
                        <li>Trazabilidad completa de cada pieza inspeccionada</li>
                    </ul>

                    <h3>Solución Implementada</h3>
                    <p>Desarrollamos una solución de vanguardia que incluyó:</p>
                    <ul class="project-details-list">
                        <li>Cámaras industriales de alta resolución con iluminación controlada</li>
                        <li>Red neuronal convolucional (CNN) personalizada</li>
                        <li>Sistema de clasificación automática de defectos</li>
                        <li>Dashboard en tiempo real con estadísticas de calidad</li>
                        <li>Sistema de aprendizaje continuo para mejora del modelo</li>
                        <li>Integración con sistema MES para trazabilidad</li>
                        <li>Alertas automáticas ante patrones de defectos</li>
                    </ul>

                    <div class="project-result">
                        <h3>Resultados</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-check-circle"></i>
                                    <h4>99.2%</h4>
                                    <p>Precisión en detección de defectos</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <h4>10x</h4>
                                    <p>Velocidad vs inspección manual</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-chart-line"></i>
                                    <h4>-87%</h4>
                                    <p>Reducción en productos defectuosos</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-text">
                                <p>"El sistema de IA superó nuestras expectativas. No solo detecta defectos que antes pasaban desapercibidos, sino que también nos ha permitido escalar la producción sin comprometer la calidad."</p>
                            </div>
                            <div class="testimonial-author">
                                <h4>María López</h4>
                                <span>Directora de Calidad, Empresa de Componentes Electrónicos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="project-info">
                    <h3>Información del Proyecto</h3>
                    <ul>
                        <li>
                            <span>Cliente:</span>
                            <p>Empresa de Componentes Electrónicos</p>
                        </li>
                        <li>
                            <span>Categoría:</span>
                            <p>Inteligencia Artificial / Computer Vision</p>
                        </li>
                        <li>
                            <span>Fecha:</span>
                            <p>Octubre 2024</p>
                        </li>
                        <li>
                            <span>Ubicación:</span>
                            <p>Madrid, España</p>
                        </li>
                        <li>
                            <span>Duración:</span>
                            <p>5 meses</p>
                        </li>
                    </ul>
                </div>

                <div class="project-download">
                    <h3>Documentación</h3>
                    <a href="#" class="download-btn">
                        <i class="far fa-file-pdf"></i>
                        <span>Descargar Caso de Estudio <small>(PDF, 4.1MB)</small></span>
                    </a>
                </div>

                <div class="project-contact">
                    <h3>¿Interesado en un proyecto similar?</h3>
                    <p>Contáctanos para discutir cómo la IA puede mejorar tu control de calidad.</p>
                    <a href="contact.php" class="default-btn">Solicitar Presupuesto</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Project Details Section End -->

<!-- Related Projects Section Start -->
<section class="related-projects pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Proyectos Relacionados</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="project-card">
                    <div class="project-img">
                        <a href="proyecto-automatizacion-industrial.php">
                            <img src="assets/img/projects/automatizacion-industrial-large.jpg" alt="Automatización Industrial">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="proyecto-automatizacion-industrial.php">Automatización Industrial</a></h3>
                        <p>Sistema integral de automatización para líneas de producción industrial.</p>
                        <a href="proyecto-automatizacion-industrial.php" class="project-btn">Ver Proyecto <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="project-card">
                    <div class="project-img">
                        <a href="proyecto-iot-industrial.php">
                            <img src="assets/img/projects/iot-industrial.jpg" alt="IoT Industrial">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="proyecto-iot-industrial.php">Implementación de IoT Industrial</a></h3>
                        <p>Solución de monitoreo remoto para maquinaria industrial con análisis predictivo.</p>
                        <a href="proyecto-iot-industrial.php" class="project-btn">Ver Proyecto <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="project-card">
                    <div class="project-img">
                        <a href="proyecto-mantenimiento-predictivo.php">
                            <img src="assets/img/projects/mantenimiento-predictivo.jpg" alt="Mantenimiento Predictivo">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="proyecto-mantenimiento-predictivo.php">Mantenimiento Predictivo</a></h3>
                        <p>Sistema de mantenimiento predictivo basado en IA para maquinaria crítica.</p>
                        <a href="proyecto-mantenimiento-predictivo.php" class="project-btn">Ver Proyecto <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Projects Section End -->

<!-- CTA Section Start -->
<section class="cta-section cta-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="cta-text">
                    <h2>¿Listo para automatizar tu control de calidad?</h2>
                    <p>Descubre cómo la inteligencia artificial puede mejorar la precisión y eficiencia de tus procesos de inspección.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="cta-btn">
                    <a href="contact.php" class="default-btn">Solicitar Consulta</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Section End -->

<?php
include "includes/footer.php";
?>
