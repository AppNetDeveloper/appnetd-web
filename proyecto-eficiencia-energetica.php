<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

// Configuración de la página
$page_title = 'Sistema de Eficiencia Energética';
$meta_description = 'Optimización del consumo energético en planta industrial mediante IoT y análisis avanzado';

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Sistema de Eficiencia Energética</h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><a href="proyectos.php"><?php echo __('projects'); ?></a></li>
                <li>Sistema de Eficiencia Energética</li>
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
                    <img src="assets/img/projects/eficiencia-energetica.jpg" alt="Sistema de Eficiencia Energética">
                </div>

                <div class="project-details-content">
                    <h3>Descripción del Proyecto</h3>
                    <p>Implementamos un sistema avanzado de monitoreo y optimización energética que permitió a nuestro cliente reducir el consumo energético en un 35% mediante el análisis inteligente de datos y automatización de procesos. El proyecto incluyó la instalación de sensores IoT, análisis predictivo con IA y un dashboard en tiempo real para la gestión energética.</p>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/projects/energia-1.jpg" alt="Monitoreo Energético" class="mb-4">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/projects/energia-2.jpg" alt="Dashboard de Control" class="mb-4">
                        </div>
                    </div>

                    <h3>Retos del Proyecto</h3>
                    <ul class="project-details-list">
                        <li>Integración con sistemas eléctricos existentes de diferentes épocas</li>
                        <li>Medición precisa del consumo por áreas y maquinaria</li>
                        <li>Identificación de patrones de desperdicio energético</li>
                        <li>Implementación sin interrumpir las operaciones</li>
                        <li>Cumplimiento de normativas de eficiencia energética ISO 50001</li>
                    </ul>

                    <h3>Solución Implementada</h3>
                    <p>Desarrollamos una solución integral que incluyó:</p>
                    <ul class="project-details-list">
                        <li>Red de sensores IoT para medición en tiempo real</li>
                        <li>Algoritmos de IA para detección de anomalías</li>
                        <li>Sistema de automatización para optimización del consumo</li>
                        <li>Dashboard interactivo con visualización de datos</li>
                        <li>Reportes automatizados de eficiencia energética</li>
                        <li>Sistema de alertas predictivas</li>
                    </ul>

                    <div class="project-result">
                        <h3>Resultados</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-bolt"></i>
                                    <h4>-35%</h4>
                                    <p>Reducción en consumo energético</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-euro-sign"></i>
                                    <h4>€120K/año</h4>
                                    <p>Ahorro anual en costes energéticos</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-leaf"></i>
                                    <h4>-45 ton CO2</h4>
                                    <p>Reducción de emisiones anuales</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-text">
                                <p>"El sistema de eficiencia energética ha transformado completamente nuestra forma de gestionar el consumo. Los ahorros superaron nuestras expectativas y ahora tenemos visibilidad total de nuestro gasto energético."</p>
                            </div>
                            <div class="testimonial-author">
                                <h4>Carlos Fernández</h4>
                                <span>Director de Sostenibilidad, Empresa Manufacturera</span>
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
                            <p>Empresa Manufacturera Europea</p>
                        </li>
                        <li>
                            <span>Categoría:</span>
                            <p>Eficiencia Energética / IoT</p>
                        </li>
                        <li>
                            <span>Fecha:</span>
                            <p>Noviembre 2024</p>
                        </li>
                        <li>
                            <span>Ubicación:</span>
                            <p>Valencia, España</p>
                        </li>
                        <li>
                            <span>Duración:</span>
                            <p>4 meses</p>
                        </li>
                    </ul>
                </div>

                <div class="project-download">
                    <h3>Documentación</h3>
                    <a href="#" class="download-btn">
                        <i class="far fa-file-pdf"></i>
                        <span>Descargar Caso de Estudio <small>(PDF, 3.2MB)</small></span>
                    </a>
                </div>

                <div class="project-contact">
                    <h3>¿Interesado en un proyecto similar?</h3>
                    <p>Contáctanos para discutir cómo podemos ayudarte a optimizar tu consumo energético.</p>
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
                    <h2>¿Listo para optimizar tu consumo energético?</h2>
                    <p>Nuestros expertos están listos para ayudarte a reducir costes y mejorar la eficiencia energética de tu empresa.</p>
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
