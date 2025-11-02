<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

// Configuración de la página
$page_title = 'Implementación de IoT Industrial';
$meta_description = 'Solución de monitoreo remoto para maquinaria industrial con análisis predictivo';

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Implementación de IoT Industrial</h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><a href="proyectos.php"><?php echo __('projects'); ?></a></li>
                <li>Implementación de IoT Industrial</li>
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
                    <img src="assets/img/projects/iot-industrial.jpg" alt="IoT Industrial">
                </div>

                <div class="project-details-content">
                    <h3>Descripción del Proyecto</h3>
                    <p>Implementamos una solución completa de IoT Industrial (IIoT) que conectó más de 150 máquinas distribuidas en 3 plantas de producción. El sistema permite monitoreo en tiempo real, análisis predictivo y gestión centralizada, mejorando drásticamente la eficiencia operativa y reduciendo tiempos de inactividad no planificados.</p>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/projects/iot-1.jpg" alt="Sensores IoT" class="mb-4">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/projects/iot-2.jpg" alt="Dashboard Monitoreo" class="mb-4">
                        </div>
                    </div>

                    <h3>Retos del Proyecto</h3>
                    <ul class="project-details-list">
                        <li>Conectividad en entornos industriales con interferencias</li>
                        <li>Integración con maquinaria legacy sin conectividad nativa</li>
                        <li>Procesamiento de grandes volúmenes de datos en tiempo real</li>
                        <li>Seguridad y protección contra ciberataques</li>
                        <li>Escalabilidad para futura expansión</li>
                        <li>Minimizar el tiempo de implementación sin parar producción</li>
                    </ul>

                    <h3>Solución Implementada</h3>
                    <p>Desarrollamos una arquitectura IIoT robusta que incluyó:</p>
                    <ul class="project-details-list">
                        <li>150+ sensores industriales IoT (temperatura, vibración, presión, etc.)</li>
                        <li>Gateway edge computing para procesamiento local</li>
                        <li>Plataforma cloud escalable con arquitectura microservicios</li>
                        <li>Dashboard web y aplicación móvil para monitoreo remoto</li>
                        <li>Algoritmos de machine learning para análisis predictivo</li>
                        <li>Sistema de alertas en tiempo real (email, SMS, push)</li>
                        <li>Ciberseguridad multi-capa con encriptación end-to-end</li>
                        <li>API REST para integración con sistemas ERP existentes</li>
                    </ul>

                    <div class="project-result">
                        <h3>Resultados</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-server"></i>
                                    <h4>150+</h4>
                                    <p>Máquinas conectadas</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-chart-line"></i>
                                    <h4>-52%</h4>
                                    <p>Reducción en tiempos de inactividad</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-clock"></i>
                                    <h4>24/7</h4>
                                    <p>Monitoreo continuo</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-text">
                                <p>"La implementación de IoT Industrial cambió completamente nuestra forma de operar. Ahora tenemos visibilidad total de todas nuestras plantas desde cualquier lugar, y las alertas predictivas nos han ahorrado millones en costes de reparación."</p>
                            </div>
                            <div class="testimonial-author">
                                <h4>Antonio Ruiz</h4>
                                <span>Director de Tecnología, Grupo Industrial Multinacional</span>
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
                            <p>Grupo Industrial Multinacional</p>
                        </li>
                        <li>
                            <span>Categoría:</span>
                            <p>IoT Industrial / Industry 4.0</p>
                        </li>
                        <li>
                            <span>Fecha:</span>
                            <p>Septiembre 2024</p>
                        </li>
                        <li>
                            <span>Ubicación:</span>
                            <p>3 plantas en España</p>
                        </li>
                        <li>
                            <span>Duración:</span>
                            <p>6 meses</p>
                        </li>
                    </ul>
                </div>

                <div class="project-download">
                    <h3>Documentación</h3>
                    <a href="#" class="download-btn">
                        <i class="far fa-file-pdf"></i>
                        <span>Descargar Caso de Estudio <small>(PDF, 5.8MB)</small></span>
                    </a>
                </div>

                <div class="project-contact">
                    <h3>¿Interesado en un proyecto similar?</h3>
                    <p>Contáctanos para discutir cómo IoT puede transformar tus operaciones.</p>
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
                        <a href="proyecto-eficiencia-energetica.php">
                            <img src="assets/img/projects/eficiencia-energetica.jpg" alt="Eficiencia Energética">
                        </a>
                    </div>
                    <div class="project-content">
                        <h3><a href="proyecto-eficiencia-energetica.php">Sistema de Eficiencia Energética</a></h3>
                        <p>Optimización del consumo energético en planta industrial mediante IoT y análisis avanzado.</p>
                        <a href="proyecto-eficiencia-energetica.php" class="project-btn">Ver Proyecto <i class="fas fa-arrow-right"></i></a>
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
                    <h2>¿Listo para conectar tu planta industrial?</h2>
                    <p>Descubre cómo IoT Industrial puede transformar tus operaciones y llevarte a la Industria 4.0.</p>
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
