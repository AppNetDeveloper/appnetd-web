<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Obtener la URL base del sitio
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];

// Configuración de la página
$page_title = 'Sistema de Logística Automatizada';
$meta_description = 'Automatización de almacén con vehículos guiados (AGV) y gestión inteligente de inventario';

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Sistema de Logística Automatizada</h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><a href="proyectos.php"><?php echo __('projects'); ?></a></li>
                <li>Logística Automatizada</li>
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
                    <img src="assets/img/projects/logistica-automatizada.jpg" alt="Logística Automatizada">
                </div>

                <div class="project-details-content">
                    <h3>Descripción del Proyecto</h3>
                    <p>Implementamos un sistema completo de automatización logística en un almacén de 12,000 m² que transformó completamente las operaciones de nuestro cliente. La solución incluye 25 vehículos guiados automáticamente (AGV), sistemas de almacenamiento inteligente, y un software de gestión de almacén (WMS) con inteligencia artificial que optimiza rutas y gestiona inventario en tiempo real.</p>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="assets/img/projects/logistica-1.jpg" alt="AGV en Operación" class="mb-4">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/projects/logistica-2.jpg" alt="Sistema WMS" class="mb-4">
                        </div>
                    </div>

                    <h3>Retos del Proyecto</h3>
                    <ul class="project-details-list">
                        <li>Coordinación de 25 AGV simultáneos sin colisiones</li>
                        <li>Integración con sistemas ERP y WMS legacy</li>
                        <li>Optimización de rutas en tiempo real</li>
                        <li>Gestión de inventario de 50,000+ SKUs</li>
                        <li>Minimizar tiempo de implementación</li>
                        <li>Capacitación del personal en nuevos sistemas</li>
                        <li>Garantizar alta disponibilidad (99.9%)</li>
                    </ul>

                    <h3>Solución Implementada</h3>
                    <p>Desarrollamos una solución integral que incluyó:</p>
                    <ul class="project-details-list">
                        <li>25 vehículos AGV con navegación láser y magnética</li>
                        <li>Sistema de gestión de flota AGV con IA</li>
                        <li>Software WMS personalizado con algoritmos de optimización</li>
                        <li>Estanterías inteligentes con sensores de peso y ubicación</li>
                        <li>Sistema de picking automatizado con luz guiada</li>
                        <li>Dashboards en tiempo real para gestión operativa</li>
                        <li>Integración con ERP SAP mediante APIs REST</li>
                        <li>Sistema de trazabilidad completa con RFID</li>
                        <li>Aplicación móvil para gestión de tareas</li>
                    </ul>

                    <div class="project-result">
                        <h3>Resultados</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-shipping-fast"></i>
                                    <h4>+250%</h4>
                                    <p>Incremento en throughput</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-clock"></i>
                                    <h4>-75%</h4>
                                    <p>Reducción en tiempo de picking</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="result-item">
                                    <i class="fas fa-check-double"></i>
                                    <h4>99.8%</h4>
                                    <p>Precisión en inventario</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-testimonial">
                        <div class="testimonial-content">
                            <div class="testimonial-text">
                                <p>"La automatización de nuestro almacén superó todas las expectativas. Hemos triplicado nuestra capacidad operativa con el mismo espacio físico, y la precisión en inventario nos ha permitido mejorar significativamente el servicio al cliente."</p>
                            </div>
                            <div class="testimonial-author">
                                <h4>Laura Sánchez</h4>
                                <span>Directora de Operaciones, Empresa de Distribución E-commerce</span>
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
                            <p>Empresa de Distribución E-commerce</p>
                        </li>
                        <li>
                            <span>Categoría:</span>
                            <p>Logística 4.0 / Automatización</p>
                        </li>
                        <li>
                            <span>Fecha:</span>
                            <p>Agosto 2024</p>
                        </li>
                        <li>
                            <span>Ubicación:</span>
                            <p>Zaragoza, España</p>
                        </li>
                        <li>
                            <span>Duración:</span>
                            <p>8 meses</p>
                        </li>
                    </ul>
                </div>

                <div class="project-download">
                    <h3>Documentación</h3>
                    <a href="#" class="download-btn">
                        <i class="far fa-file-pdf"></i>
                        <span>Descargar Caso de Estudio <small>(PDF, 6.5MB)</small></span>
                    </a>
                </div>

                <div class="project-contact">
                    <h3>¿Interesado en un proyecto similar?</h3>
                    <p>Contáctanos para discutir cómo automatizar tu almacén y optimizar tu logística.</p>
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
                    <h2>¿Listo para automatizar tu almacén?</h2>
                    <p>Nuestros expertos te ayudarán a optimizar tus operaciones logísticas con las últimas tecnologías.</p>
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
