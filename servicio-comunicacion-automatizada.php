<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Configuración de la página
$page_title = 'Comunicación Automatizada - Omnicanalidad Inteligente';
$meta_description = 'Plataforma de comunicación automatizada con WhatsApp, Email, SMS y más. Automatiza tu atención al cliente';

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Comunicación Automatizada</h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><a href="service.php"><?php echo __('services'); ?></a></li>
                <li>Comunicación Automatizada</li>
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
                    <img src="assets/img/services/comunicacion-automatizada.jpg" alt="Comunicación Automatizada">
                </div>

                <div class="service-details-content">
                    <h3>Plataforma Omnicanal de Comunicación Inteligente</h3>
                    <p>Nuestra plataforma de comunicación automatizada integra múltiples canales (WhatsApp Business API, Email, SMS, Telegram, etc.) en una única interfaz. Automatiza respuestas, gestiona conversaciones y mejora la experiencia del cliente con comunicación personalizada y en tiempo real.</p>

                    <h3>Canales de Comunicación Soportados</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="service-list">
                                <li><i class="fab fa-whatsapp"></i> WhatsApp Business API</li>
                                <li><i class="fas fa-envelope"></i> Email Marketing Automatizado</li>
                                <li><i class="fas fa-sms"></i> SMS y Notificaciones Push</li>
                                <li><i class="fab fa-telegram"></i> Telegram Bots</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-list">
                                <li><i class="fab fa-facebook-messenger"></i> Facebook Messenger</li>
                                <li><i class="fab fa-instagram"></i> Instagram Direct</li>
                                <li><i class="fas fa-comments"></i> Chat Web (Webchat)</li>
                                <li><i class="fas fa-phone"></i> Integración con CRM</li>
                            </ul>
                        </div>
                    </div>

                    <h3>Funcionalidades Clave</h3>
                    <div class="service-features">
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-robot"></i></div>
                            <div class="feature-content">
                                <h4>Chatbots Inteligentes</h4>
                                <p>Respuestas automáticas 24/7 con procesamiento de lenguaje natural (NLP) para atención al cliente.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-paper-plane"></i></div>
                            <div class="feature-content">
                                <h4>Campañas Masivas</h4>
                                <p>Envía mensajes personalizados a miles de contactos con segmentación avanzada.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-cogs"></i></div>
                            <div class="feature-content">
                                <h4>Automatización de Workflows</h4>
                                <p>Crea flujos automáticos de comunicación basados en eventos y comportamientos.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                            <div class="feature-content">
                                <h4>Analíticas en Tiempo Real</h4>
                                <p>Monitorea tasas de apertura, respuesta y conversión de tus campañas.</p>
                            </div>
                        </div>
                    </div>

                    <h3>Casos de Uso</h3>
                    <ul class="use-cases-list">
                        <li><strong>E-commerce:</strong> Confirmaciones de pedido, notificaciones de envío, recuperación de carritos abandonados.</li>
                        <li><strong>Atención al Cliente:</strong> Soporte automatizado 24/7, gestión de tickets, escalado a agentes humanos.</li>
                        <li><strong>Marketing:</strong> Campañas promocionales, anuncios de productos, comunicación personalizada.</li>
                        <li><strong>Notificaciones:</strong> Recordatorios de citas, alertas de eventos, confirmaciones de reservas.</li>
                        <li><strong>Logística:</strong> Actualizaciones de estado de envíos, confirmaciones de entrega.</li>
                    </ul>

                    <h3>Beneficios para tu Negocio</h3>
                    <ul class="benefits-list">
                        <li><strong>Mayor engagement:</strong> Comunicación directa en los canales preferidos de tus clientes.</li>
                        <li><strong>Reducción de costes:</strong> Automatiza hasta el 80% de las consultas repetitivas.</li>
                        <li><strong>Escalabilidad:</strong> Maneja miles de conversaciones simultáneas sin aumentar personal.</li>
                        <li><strong>Mejora en conversiones:</strong> Comunicación oportuna y personalizada aumenta ventas.</li>
                        <li><strong>Visión unificada:</strong> Todas las conversaciones en una única plataforma.</li>
                    </ul>

                    <h3>Integraciones</h3>
                    <p>Nuestra plataforma se integra con:</p>
                    <ul class="integration-list">
                        <li><i class="fas fa-plug"></i> CRM (Salesforce, HubSpot, Zoho, etc.)</li>
                        <li><i class="fas fa-plug"></i> E-commerce (Shopify, WooCommerce, Magento)</li>
                        <li><i class="fas fa-plug"></i> ERP y sistemas empresariales</li>
                        <li><i class="fas fa-plug"></i> Pasarelas de pago</li>
                        <li><i class="fas fa-plug"></i> Sistemas de reservas y calendarios</li>
                    </ul>

                    <h3>Cumplimiento y Seguridad</h3>
                    <p>Nuestra plataforma cumple con:</p>
                    <ul class="compliance-list">
                        <li><i class="fas fa-shield-alt"></i> RGPD (Reglamento General de Protección de Datos)</li>
                        <li><i class="fas fa-shield-alt"></i> WhatsApp Business Policy</li>
                        <li><i class="fas fa-shield-alt"></i> Encriptación end-to-end</li>
                        <li><i class="fas fa-shield-alt"></i> Gestión de opt-in/opt-out</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="service-sidebar">
                    <div class="service-widget">
                        <h3>Servicios Relacionados</h3>
                        <ul class="service-list-widget">
                            <li><a href="servicio-ia-empresarial.php"><i class="fas fa-robot"></i> IA Empresarial</a></li>
                            <li><a href="servicio-desarrollo-software.php"><i class="fas fa-code"></i> Desarrollo de Software</a></li>
                            <li><a href="servicio-analitica-empresarial.php"><i class="fas fa-chart-bar"></i> Analítica Empresarial</a></li>
                            <li><a href="servicio-gestion-personal.php"><i class="fas fa-users"></i> Gestión de Personal</a></li>
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
                        <h3>Prueba Gratuita</h3>
                        <div class="trial-widget">
                            <p>Comienza a automatizar tu comunicación hoy mismo.</p>
                            <a href="contact.php" class="default-btn">Probar 30 Días Gratis</a>
                        </div>
                    </div>

                    <div class="service-widget">
                        <h3>Descarga Información</h3>
                        <div class="download-widget">
                            <a href="#" class="download-btn">
                                <i class="far fa-file-pdf"></i>
                                <span>Guía de Implementación <small>(PDF)</small></span>
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
                    <h2>¿Listo para automatizar tu comunicación?</h2>
                    <p>Conecta con tus clientes en WhatsApp, Email, SMS y más desde una única plataforma.</p>
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
