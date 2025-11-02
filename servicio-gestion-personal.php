<?php
// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Configuración de la página
$page_title = 'Gestión de Personal - Sistema Integral de RRHH';
$meta_description = 'Software de gestión de personal y recursos humanos con control horario, nóminas y gestión de equipos';

include "includes/header.php";
?>

<!-- Page Title Start -->
<section class="page-title title-bg10">
    <div class="d-table">
        <div class="d-table-cell">
            <h2>Gestión de Personal</h2>
            <ul>
                <li><a href="index.php"><?php echo __('home'); ?></a></li>
                <li><a href="service.php"><?php echo __('services'); ?></a></li>
                <li>Gestión de Personal</li>
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
                    <img src="assets/img/services/gestion-personal.jpg" alt="Gestión de Personal">
                </div>

                <div class="service-details-content">
                    <h3>Sistema Integral de Gestión de Recursos Humanos</h3>
                    <p>Nuestra plataforma de gestión de personal centraliza todos los procesos de RRHH en una única solución cloud. Desde el control horario hasta la gestión de vacaciones, nóminas y evaluación de desempeño, proporcionamos las herramientas necesarias para gestionar tu equipo de forma eficiente.</p>

                    <h3>Funcionalidades Principales</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="service-list">
                                <li><i class="fas fa-check-circle"></i> Control de presencia y fichaje (app móvil + web)</li>
                                <li><i class="fas fa-check-circle"></i> Gestión de vacaciones y ausencias</li>
                                <li><i class="fas fa-check-circle"></i> Gestión de turnos y planificación</li>
                                <li><i class="fas fa-check-circle"></i> Portal del empleado</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="service-list">
                                <li><i class="fas fa-check-circle"></i> Gestión documental (contratos, certificados)</li>
                                <li><i class="fas fa-check-circle"></i> Informes y analíticas de RRHH</li>
                                <li><i class="fas fa-check-circle"></i> Evaluación de desempeño</li>
                                <li><i class="fas fa-check-circle"></i> Integración con sistemas de nóminas</li>
                            </ul>
                        </div>
                    </div>

                    <h3>Módulos del Sistema</h3>
                    <div class="service-features">
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-clock"></i></div>
                            <div class="feature-content">
                                <h4>Control Horario</h4>
                                <p>Fichaje mediante app móvil, web o dispositivos biométricos. Cumple con la normativa legal de control horario.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-calendar-alt"></i></div>
                            <div class="feature-content">
                                <h4>Gestión de Vacaciones</h4>
                                <p>Solicitud y aprobación de vacaciones online. Calendario compartido para visualización de ausencias.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-chart-pie"></i></div>
                            <div class="feature-content">
                                <h4>Análisis y Reporting</h4>
                                <p>Informes detallados de horas trabajadas, absentismo, productividad y costes de personal.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-icon"><i class="fas fa-file-contract"></i></div>
                            <div class="feature-content">
                                <h4>Gestión Documental</h4>
                                <p>Almacenamiento seguro de contratos, nóminas y documentos personales. Firma digital incluida.</p>
                            </div>
                        </div>
                    </div>

                    <h3>Beneficios para tu Empresa</h3>
                    <ul class="benefits-list">
                        <li><strong>Cumplimiento legal:</strong> Cumple con la legislación de control horario y protección de datos.</li>
                        <li><strong>Ahorro de tiempo:</strong> Automatiza procesos administrativos de RRHH.</li>
                        <li><strong>Transparencia:</strong> Empleados y managers tienen acceso a información en tiempo real.</li>
                        <li><strong>Mejora del clima laboral:</strong> Procesos claros y herramientas de autogestión para empleados.</li>
                        <li><strong>Decisiones basadas en datos:</strong> Analytics para optimizar la gestión del talento.</li>
                    </ul>

                    <h3>Integración con Otros Sistemas</h3>
                    <p>Nuestro sistema se integra con:</p>
                    <ul class="integration-list">
                        <li><i class="fas fa-plug"></i> Software de nóminas (A3, Sage, etc.)</li>
                        <li><i class="fas fa-plug"></i> Sistemas ERP (SAP, Microsoft Dynamics, etc.)</li>
                        <li><i class="fas fa-plug"></i> Herramientas de comunicación (Slack, Microsoft Teams)</li>
                        <li><i class="fas fa-plug"></i> Active Directory / LDAP para autenticación</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="service-sidebar">
                    <div class="service-widget">
                        <h3>Servicios Relacionados</h3>
                        <ul class="service-list-widget">
                            <li><a href="servicio-desarrollo-software.php"><i class="fas fa-code"></i> Desarrollo de Software</a></li>
                            <li><a href="servicio-analitica-empresarial.php"><i class="fas fa-chart-bar"></i> Analítica Empresarial</a></li>
                            <li><a href="servicio-ia-empresarial.php"><i class="fas fa-robot"></i> IA Empresarial</a></li>
                            <li><a href="servicio-comunicacion-automatizada.php"><i class="fas fa-comments"></i> Comunicación Automatizada</a></li>
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
                                <span>Catálogo de Funcionalidades <small>(PDF)</small></span>
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
                    <h2>¿Listo para digitalizar tu gestión de RRHH?</h2>
                    <p>Solicita una demo gratuita de nuestro sistema de gestión de personal.</p>
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
