<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Configuración de la página
$page_title = 'IA Empresarial - Plataforma Inteligente';
$meta_description = 'Soluciones de Inteligencia Artificial Empresarial para optimizar procesos y toma de decisiones';

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Plataforma de IA Empresarial</h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><a href="service.php"><?php echo __('services'); ?></a></li>
                <li>IA Empresarial</li>
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
                    <img src="assets/img/services/ia-empresarial.jpg" alt="IA Empresarial">
                </div>

                <div class="service-details-content">
                    <h3>Transformación Digital con IA</h3>
                    <p>Nuestra plataforma de IA empresarial integra múltiples capacidades de inteligencia artificial para ayudar a las empresas a tomar decisiones más inteligentes, automatizar procesos complejos y descubrir insights ocultos en sus datos. Desde análisis predictivo hasta procesamiento de lenguaje natural, ofrecemos una suite completa de herramientas de IA adaptadas a tu negocio.</p>

                    <h3>Capacidades Principales</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="service-list">
                                <li><i class="fas fa-check-circle"></i> Análisis predictivo y forecasting</li>
                                <li><i class="fas fa-check-circle"></i> Procesamiento de lenguaje natural (NLP)</li>
                                <li><i class="fas fa-check-circle"></i> Computer Vision y reconocimiento de imágenes</li>
                                <li><i class="fas fa-check-circle"></i> Sistemas de recomendación inteligentes</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-list">
                                <li><i class="fas fa-check-circle"></i> Automatización inteligente de procesos (RPA + IA)</li>
                                <li><i class="fas fa-check-circle"></i> Chatbots y asistentes virtuales</li>
                                <li><i class="fas fa-check-circle"></i> Análisis de sentimientos y feedback</li>
                                <li><i class="fas fa-check-circle"></i> Detección de anomalías y fraude</li>
                            </ul>
                        </div>
                    </div>

                    <h3>Casos de Uso Empresariales</h3>
                    <div class="service-features">
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                            <div class="feature-content">
                                <h4>Optimización de Ventas</h4>
                                <p>Predice demanda, optimiza precios y personaliza ofertas con modelos de machine learning.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-users"></i></div>
                            <div class="feature-content">
                                <h4>Gestión de Talento</h4>
                                <p>Automatiza procesos de selección y predice rotación de empleados con IA.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                            <div class="feature-content">
                                <h4>Prevención de Fraude</h4>
                                <p>Detecta patrones sospechosos y anomalías en tiempo real.</p>
                            </div>
                        </div>
                    </div>

                    <h3>Beneficios para tu Negocio</h3>
                    <p>La implementación de nuestra plataforma de IA empresarial aporta beneficios tangibles:</p>
                    <ul class="benefits-list">
                        <li><strong>Reducción de costes:</strong> Automatiza tareas repetitivas y optimiza procesos.</li>
                        <li><strong>Mejora en la toma de decisiones:</strong> Insights basados en datos para decisiones estratégicas.</li>
                        <li><strong>Experiencia del cliente mejorada:</strong> Personalización y respuesta rápida.</li>
                        <li><strong>Ventaja competitiva:</strong> Innovación continua y adaptación al mercado.</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="service-sidebar">
                    <div class="service-widget">
                        <h3>Servicios Relacionados</h3>
                        <ul class="service-list-widget">
                            <li><a href="servicio-analitica-empresarial.php"><i class="fas fa-chart-bar"></i> Analítica Empresarial</a></li>
                            <li><a href="servicio-ia.php"><i class="fas fa-robot"></i> Inteligencia Artificial</a></li>
                            <li><a href="servicio-desarrollo-software.php"><i class="fas fa-code"></i> Desarrollo de Software</a></li>
                            <li><a href="servicio-iot-industrial.php"><i class="fas fa-microchip"></i> IoT Industrial</a></li>
                        </ul>
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
                        <h3>Descarga Información</h3>
                        <div class="download-widget">
                            <a href="#" class="download-btn">
                                <i class="far fa-file-pdf"></i>
                                <span>Brochure de Servicios <small>(PDF)</small></span>
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
                    <h2>¿Listo para implementar IA en tu empresa?</h2>
                    <p>Descubre cómo nuestra plataforma de IA puede transformar tu negocio.</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="cta-btn">
                    <a href="contact.php" class="default-btn">Solicitar Demo</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Section End -->

<?php
include "includes/footer.php";
?>
