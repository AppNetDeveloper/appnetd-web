<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Configuración de la página
$page_title = 'Analítica Empresarial - Business Intelligence';
$meta_description = 'Soluciones de analítica empresarial y Business Intelligence para toma de decisiones basada en datos';

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Analítica Empresarial</h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><a href="service.php"><?php echo __('services'); ?></a></li>
                <li>Analítica Empresarial</li>
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

<!-- Service Details Section Start -->
<section class="service-details-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="service-details-img">
                    <img src="assets/img/services/analitica-empresarial.jpg" alt="Analítica Empresarial">
                </div>

                <div class="service-details-content">
                    <h3>Business Intelligence y Analítica Avanzada</h3>
                    <p>Transformamos tus datos en insights accionables con nuestras soluciones de Business Intelligence y analítica avanzada. Desde dashboards interactivos hasta modelos predictivos, te ayudamos a tomar decisiones estratégicas basadas en datos y a visualizar métricas clave de tu negocio en tiempo real.</p>

                    <h3>Capacidades de Analítica</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="service-list">
                                <li><i class="fas fa-check-circle"></i> Dashboards interactivos personalizados</li>
                                <li><i class="fas fa-check-circle"></i> Reportes automáticos programados</li>
                                <li><i class="fas fa-check-circle"></i> Análisis predictivo y forecasting</li>
                                <li><i class="fas fa-check-circle"></i> KPI tracking en tiempo real</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-list">
                                <li><i class="fas fa-check-circle"></i> Data warehousing y ETL</li>
                                <li><i class="fas fa-check-circle"></i> Análisis de cohortes y segmentación</li>
                                <li><i class="fas fa-check-circle"></i> Visualización de datos avanzada</li>
                                <li><i class="fas fa-check-circle"></i> Análisis de tendencias y patrones</li>
                            </ul>
                        </div>
                    </div>

                    <h3>Áreas de Aplicación</h3>
                    <div class="service-features">
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                            <div class="feature-content">
                                <h4>Analítica de Ventas</h4>
                                <p>Monitorea rendimiento de ventas, productos más vendidos, márgenes y predicción de ingresos.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-user-friends"></i></div>
                            <div class="feature-content">
                                <h4>Analítica de Clientes</h4>
                                <p>Comprende el comportamiento del cliente, segmentación, lifetime value y churn prediction.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                            <div class="feature-content">
                                <h4>Analítica Operacional</h4>
                                <p>Optimiza procesos, monitorea eficiencia operativa y detecta cuellos de botella.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-dollar-sign"></i></div>
                            <div class="feature-content">
                                <h4>Analítica Financiera</h4>
                                <p>Control de gastos, análisis de rentabilidad, cash flow y proyecciones financieras.</p>
                            </div>
                        </div>
                    </div>

                    <h3>Nuestro Proceso de Implementación</h3>
                    <div class="process-timeline">
                        <div class="timeline-item">
                            <div class="timeline-number">1</div>
                            <div class="timeline-content">
                                <h4>Discovery y Análisis</h4>
                                <p>Identificamos tus fuentes de datos, KPIs clave y objetivos de negocio.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-number">2</div>
                            <div class="timeline-content">
                                <h4>Diseño de Arquitectura</h4>
                                <p>Diseñamos la arquitectura de datos y definimos modelos de análisis.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-number">3</div>
                            <div class="timeline-content">
                                <h4>Desarrollo e Integración</h4>
                                <p>Construimos pipelines de datos, dashboards y conectores.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-number">4</div>
                            <div class="timeline-content">
                                <h4>Despliegue y Formación</h4>
                                <p>Lanzamos la solución y formamos a tu equipo en su uso.</p>
                            </div>
                        </div>
                    </div>

                    <h3>Tecnologías que Utilizamos</h3>
                    <div class="tech-stack">
                        <div class="tech-item">
                            <i class="fas fa-database"></i>
                            <span>Data Warehousing</span>
                            <p>BigQuery, Snowflake, Redshift</p>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-chart-bar"></i>
                            <span>Visualización</span>
                            <p>Power BI, Tableau, Looker</p>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-code"></i>
                            <span>Análisis Avanzado</span>
                            <p>Python, R, Apache Spark</p>
                        </div>
                        <div class="tech-item">
                            <i class="fas fa-brain"></i>
                            <span>Machine Learning</span>
                            <p>TensorFlow, scikit-learn</p>
                        </div>
                    </div>

                    <h3>Beneficios para tu Negocio</h3>
                    <ul class="benefits-list">
                        <li><strong>Decisiones basadas en datos:</strong> Elimina las conjeturas con insights respaldados por datos reales.</li>
                        <li><strong>Visibilidad completa:</strong> Monitorea todas las métricas importantes desde un único lugar.</li>
                        <li><strong>Detección temprana de problemas:</strong> Identifica tendencias negativas antes de que impacten el negocio.</li>
                        <li><strong>Optimización continua:</strong> Identifica oportunidades de mejora basadas en análisis de datos.</li>
                        <li><strong>ROI medible:</strong> Cuantifica el impacto de tus iniciativas y estrategias.</li>
                        <li><strong>Democratización de datos:</strong> Todos los niveles de la organización acceden a insights relevantes.</li>
                    </ul>

                    <h3>Casos de Éxito</h3>
                    <div class="success-story">
                        <blockquote>
                            <p>"La implementación de la plataforma de analítica nos permitió identificar patrones de compra que desconocíamos, resultando en un aumento del 35% en ventas cruzadas y una mejor gestión de inventario."</p>
                            <footer>— Director Comercial, Empresa Retail</footer>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="service-sidebar">
                    <div class="service-widget">
                        <h3>Servicios Relacionados</h3>
                        <ul class="service-list-widget">
                            <li><a href="servicio-ia-empresarial.php"><i class="fas fa-robot"></i> IA Empresarial</a></li>
                            <li><a href="servicio-desarrollo-software.php"><i class="fas fa-code"></i> Desarrollo de Software</a></li>
                            <li><a href="servicio-iot-industrial.php"><i class="fas fa-microchip"></i> IoT Industrial</a></li>
                            <li><a href="servicio-control-produccion.php"><i class="fas fa-industry"></i> Control de Producción</a></li>
                        </ul>
                    </div>

                    <div class="service-widget">
                        <h3>Demo Interactiva</h3>
                        <div class="demo-widget">
                            <p>Explora un dashboard de ejemplo para ver el poder de nuestras soluciones.</p>
                            <a href="contact.php" class="default-btn">Ver Demo</a>
                        </div>
                    </div>

                    <div class="service-widget">
                        <h3>¿Necesitas ayuda?</h3>
                        <div class="contact-widget">
                            <p>Nuestro equipo de expertos está listo para ayudarte.</p>
                            <ul>
                                <li><i class="fas fa-phone"></i> +34 619 929 305</li>
                                <li><i class="fas fa-envelope"></i> info@appnet.dev</li>
                            </ul>
                            <a href="contact.php" class="default-btn">Contactar Ahora</a>
                        </div>
                    </div>

                    <div class="service-widget">
                        <h3>Recursos</h3>
                        <div class="download-widget">
                            <a href="#" class="download-btn mb-3">
                                <i class="far fa-file-pdf"></i>
                                <span>Guía de BI <small>(PDF)</small></span>
                            </a>
                            <a href="#" class="download-btn">
                                <i class="far fa-file-pdf"></i>
                                <span>Casos de Uso <small>(PDF)</small></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Details Section End -->

<!-- CTA Section Start -->
<section class="cta-section cta-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="cta-text">
                    <h2>¿Listo para tomar decisiones basadas en datos?</h2>
                    <p>Descubre cómo nuestra plataforma de analítica puede transformar tu negocio.</p>
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
