<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

// Configuración de la página
$page_title = 'Mantenimiento Predictivo con IA';
$meta_description = 'Implementación de sistema de mantenimiento predictivo basado en IA para maquinaria crítica';

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Mantenimiento Predictivo con IA</h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><a href="proyectos.php"><?php echo __('projects'); ?></a></li>
                <li>Mantenimiento Predictivo</li>
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
                    <img src="assets/img/projects/mantenimiento-predictivo.jpg" alt="Mantenimiento Predictivo">
                </div>

                <div class="project-details-content">
                    <h3>Descripción del Proyecto</h3>
                    <p>Desarrollamos e implementamos un sistema avanzado de mantenimiento predictivo basado en inteligencia artificial que monitorea 80 máquinas críticas en tiempo real. El sistema analiza patrones de vibración, temperatura, consumo energético y otros parámetros para predecir fallos con hasta 30 días de anticipación, permitiendo planificar mantenimientos antes de que ocurran paros no programados.</p>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/projects/predictivo-1.jpg" alt="Sensores Predictivos" class="mb-4">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/projects/predictivo-2.jpg" alt="Análisis de Datos" class="mb-4">
                        </div>
                    </div>

                    <h3>Retos del Proyecto</h3>
                    <ul class="project-details-list">
                        <li>Integración con maquinaria de diferentes fabricantes y edades</li>
                        <li>Recopilación y procesamiento de múltiples tipos de datos</li>
                        <li>Desarrollo de modelos de ML con alta precisión predictiva</li>
                        <li>Reducción de falsos positivos y negativos</li>
                        <li>Cambio cultural de mantenimiento reactivo a predictivo</li>
                        <li>Justificación del ROI ante la dirección</li>
                    </ul>

                    <h3>Solución Implementada</h3>
                    <p>Desarrollamos una solución de vanguardia que incluyó:</p>
                    <ul class="project-details-list">
                        <li>Red de sensores multivariable (vibración, temperatura, acústica, etc.)</li>
                        <li>Edge computing para preprocesamiento de señales</li>
                        <li>Modelos de machine learning (LSTM, Random Forest, XGBoost)</li>
                        <li>Plataforma cloud para análisis histórico y tendencias</li>
                        <li>Dashboard de mantenimiento con estado de salud de máquinas</li>
                        <li>Sistema de alertas inteligentes con priorización</li>
                        <li>Integración con CMMS (Computerized Maintenance Management System)</li>
                        <li>Aplicación móvil para técnicos de campo</li>
                        <li>Sistema de feedback para mejora continua del modelo</li>
                    </ul>

                    <div class="project-result">
                        <h3>Resultados</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-tools"></i>
                                    <h4>-68%</h4>
                                    <p>Reducción en paros no planificados</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-euro-sign"></i>
                                    <h4>€450K</h4>
                                    <p>Ahorro anual en mantenimiento</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-chart-line"></i>
                                    <h4>92%</h4>
                                    <p>Precisión en predicción de fallos</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-text">
                                <p>"El sistema de mantenimiento predictivo ha sido un cambio revolucionario para nuestras operaciones. Pasamos de apagar incendios constantemente a planificar mantenimientos de forma ordenada, y los ahorros han sido impresionantes."</p>
                            </div>
                            <div class="testimonial-author">
                                <h4>Miguel Ángel Torres</h4>
                                <span>Jefe de Mantenimiento, Planta de Manufactura Automotriz</span>
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
                            <p>Planta de Manufactura Automotriz</p>
                        </li>
                        <li>
                            <span>Categoría:</span>
                            <p>Mantenimiento Predictivo / IA</p>
                        </li>
                        <li>
                            <span>Fecha:</span>
                            <p>Julio 2024</p>
                        </li>
                        <li>
                            <span>Ubicación:</span>
                            <p>Valladolid, España</p>
                        </li>
                        <li>
                            <span>Duración:</span>
                            <p>7 meses</p>
                        </li>
                    </ul>
                </div>

                <div class="project-download">
                    <h3>Documentación</h3>
                    <a href="#" class="download-btn">
                        <i class="far fa-file-pdf"></i>
                        <span>Descargar Caso de Estudio <small>(PDF, 4.7MB)</small></span>
                    </a>
                </div>

                <div class="project-contact">
                    <h3>¿Interesado en un proyecto similar?</h3>
                    <p>Contáctanos para discutir cómo el mantenimiento predictivo puede beneficiar tu operación.</p>
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
                        <a href="proyecto-ia-calidad.php">
                            <img src="assets/img/projects/ia-calidad.jpg" alt="Control de Calidad con IA">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="proyecto-ia-calidad.php">Control de Calidad con IA</a></h3>
                        <p>Sistema de inspección visual automatizada para control de calidad en producción.</p>
                        <a href="proyecto-ia-calidad.php" class="project-btn">Ver Proyecto <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

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
                    <h2>¿Listo para implementar mantenimiento predictivo?</h2>
                    <p>Descubre cómo la inteligencia artificial puede prevenir fallos y optimizar tu mantenimiento.</p>
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
