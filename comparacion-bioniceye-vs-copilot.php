<?php
// Incluir configuraci�n de idiomas
require_once __DIR__ . '/languages/config.php';

// Configuraci�n SEO espec�fica
$page_title = 'BionicEye vs Microsoft Copilot: Comparativa Detallada 2025';
$meta_description = 'BionicEye ahorra �16.812/a�o vs Microsoft Copilot para 50 usuarios. IA 100% local con ERP completo vs asistente cloud b�sico. Tabla comparativa completa de precios, funcionalidades y ROI real.';
$meta_keywords = 'BionicEye vs Copilot, Microsoft Copilot alternativa, comparaci�n IA local vs Microsoft, ahorro costes Copilot, IA empresarial sin Microsoft, ERP con IA local, ROI BionicEye vs Copilot, precios Microsoft Copilot, alternativa privada Copilot';

include "includes/header.php";
?>

<!-- Breadcrumb -->
<section class="breadcrumb-section py-4 bg-light">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                <li class="breadcrumb-item"><a href="service.php">Servicios</a></li>
                <li class="breadcrumb-item active" aria-current="page">BionicEye vs Microsoft Copilot</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Hero -->
<section class="comparison-hero py-5 bg-gradient-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <span class="badge bg-info text-dark mb-3"><i class="fas fa-balance-scale me-2"></i>Comparativa 2025</span>
                <h1 class="display-4 fw-bold mb-4">
                    BionicEye + ADRI vs Microsoft Copilot
                </h1>
                <p class="lead mb-4">
                    �Asistente b�sico de oficina o ERP completo con IA industrial? Comparaci�n exhaustiva de costes, privacidad y funcionalidades.
                </p>
                <div class="comparison-summary p-4 bg-white bg-opacity-10 rounded-4 mb-4">
                    <div class="row text-center">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <h3 class="display-6 fw-bold text-success">83%</h3>
                            <p class="mb-0">Ahorro con BionicEye<br><small>(opci�n perpetua)</small></p>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <h3 class="display-6 fw-bold text-warning">�16.812</h3>
                            <p class="mb-0">Ahorro anual<br><small>(50 empleados)</small></p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="display-6 fw-bold text-info">11</h3>
                            <p class="mb-0">Agentes IA especializados<br><small>vs 1 asistente genérico</small></p>
                        </div>
                    </div>
                </div>
                <a href="#tabla-comparacion" class="btn btn-light btn-lg me-3"><i class="fas fa-table me-2"></i>Ver Comparativa</a>
                <a href="contact.php?from=comparacion-copilot" class="btn btn-outline-light btn-lg"><i class="fas fa-calculator me-2"></i>Calcular Ahorro</a>
            </div>
        </div>
    </div>
</section>

<!-- Tabla de Comparaci�n -->
<section class="comparison-table-section py-5" id="tabla-comparacion">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-5">Tabla Comparativa: BionicEye vs Microsoft Copilot</h2>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover comparison-table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" style="width: 35%">Caracter�stica</th>
                                <th scope="col" style="width: 32.5%" class="text-center bg-success">
                                    <i class="fas fa-eye me-2"></i>BionicEye + ADRI
                                </th>
                                <th scope="col" style="width: 32.5%" class="text-center">
                                    <i class="fab fa-microsoft me-2"></i>Microsoft Copilot
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- COSTES -->
                            <tr class="table-primary">
                                <td colspan="3" class="fw-bold"><i class="fas fa-euro-sign me-2"></i>PRECIOS Y COSTES</td>
                            </tr>
                            <tr>
                                <th scope="row">Precio por Usuario/Mes</th>
                                <td class="text-center bg-success-light">
                                    <strong>�1.98/usuario</strong><br>
                                    <small class="text-muted">(�99�50 users) o �0 perpetua</small>
                                </td>
                                <td class="text-center">
                                    <strong>�30/usuario</strong><br>
                                    <small class="text-muted">Obligatorio para cada usuario</small>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Coste Anual (50 usuarios)</th>
                                <td class="text-center bg-success-light">
                                    <strong>�1.188/a�o</strong><br>
                                    o <strong>�15.000</strong> pago �nico<br>
                                    <small class="text-success">A�o 2+: �0</small>
                                </td>
                                <td class="text-center">
                                    <strong>�18.000/a�o</strong><br>
                                    <small class="text-danger">Todos los a�os</small>
                                </td>
                            </tr>
                            <tr class="table-success">
                                <th scope="row">AHORRO ANUAL</th>
                                <td class="text-center fw-bold fs-5">
                                    <span class="text-success">�16.812/a�o</span>
                                </td>
                                <td class="text-center">-</td>
                            </tr>

                            <!-- PRIVACIDAD -->
                            <tr class="table-primary">
                                <td colspan="3" class="fw-bold"><i class="fas fa-shield-alt me-2"></i>PRIVACIDAD Y DATOS</td>
                            </tr>
                            <tr>
                                <th scope="row">Ubicaci�n de Datos</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-server text-success fa-2x"></i><br>
                                    <strong>100% Local</strong><br>
                                    <small>En TUS servidores</small>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-cloud text-primary fa-2x"></i><br>
                                    <strong>Microsoft Cloud</strong><br>
                                    <small>Azure (EE.UU./Europa)</small>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">�Microsoft puede leer tus datos?</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-times-circle text-success"></i><br>
                                    <strong>NO</strong><br>
                                    <small>Imposible, datos locales</small>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-exclamation-triangle text-warning"></i><br>
                                    <strong>Seg�n ToS</strong><br>
                                    <small>"No entrenamos con tus datos"*</small>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Funciona sin Internet</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-check-circle text-success"></i> <strong>S�</strong>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-times-circle text-danger"></i> <strong>No</strong>
                                </td>
                            </tr>

                            <!-- FUNCIONALIDADES -->
                            <tr class="table-primary">
                                <td colspan="3" class="fw-bold"><i class="fas fa-cogs me-2"></i>CAPACIDADES Y FUNCIONES</td>
                            </tr>
                            <tr>
                                <th scope="row">Tipo de Herramienta</th>
                                <td class="text-center bg-success-light">
                                    <strong>ERP Completo + IA</strong><br>
                                    <small>10 m�dulos empresariales</small>
                                </td>
                                <td class="text-center">
                                    <strong>Asistente de Oficina</strong><br>
                                    <small>Word, Excel, PowerPoint, Teams</small>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Gesti�n de RRHH</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-check-circle text-success"></i><br>
                                    <small>Control horario, n�minas, vacaciones</small>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-times-circle text-danger"></i><br>
                                    <small>No incluido</small>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">CRM + Gesti�n Clientes</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-check-circle text-success"></i><br>
                                    <small>CRM completo incluido</small>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-minus-circle text-warning"></i><br>
                                    <small>Requiere Dynamics 365 extra</small>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Control de Producci�n Industrial</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-check-circle text-success"></i><br>
                                    <small>Conexi�n PLCs, sensores IoT</small>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-times-circle text-danger"></i><br>
                                    <small>No disponible (solo oficina)</small>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">OCR Autom�tico Facturas</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-check-circle text-success"></i><br>
                                    <small>Vision Agent: 98% precisi�n</small>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-times-circle text-danger"></i><br>
                                    <small>No incluido</small>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">WhatsApp/Telegram Bot 24/7</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-check-circle text-success"></i><br>
                                    <small>Messaging Agent local</small>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-times-circle text-danger"></i><br>
                                    <small>No incluido</small>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Asistente en Office (Word/Excel)</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-minus-circle text-warning"></i><br>
                                    <small>V�a API externa opcional</small>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-check-circle text-success"></i><br>
                                    <strong>Funci�n principal</strong>
                                </td>
                            </tr>

                            <!-- INTEGRACIONES -->
                            <tr class="table-primary">
                                <td colspan="3" class="fw-bold"><i class="fas fa-plug me-2"></i>INTEGRACIONES</td>
                            </tr>
                            <tr>
                                <th scope="row">Integraci�n con Microsoft 365</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-check-circle text-success"></i><br>
                                    <small>V�a Microsoft Graph API</small>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-check-circle text-success"></i><br>
                                    <strong>Nativa</strong>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Integraci�n con ERPs (SAP, Oracle)</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-check-circle text-success"></i><br>
                                    <strong>Nativa completa</strong>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-minus-circle text-warning"></i><br>
                                    <small>Limitada</small>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">IoT Industrial (PLCs, SCADA)</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-check-circle text-success"></i><br>
                                    <small>Modbus, OPC-UA, Siemens</small>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-times-circle text-danger"></i><br>
                                    <small>No disponible</small>
                                </td>
                            </tr>

                            <!-- ESCALABILIDAD -->
                            <tr class="table-primary">
                                <td colspan="3" class="fw-bold"><i class="fas fa-expand-arrows-alt me-2"></i>ESCALABILIDAD</td>
                            </tr>
                            <tr>
                                <th scope="row">Arquitectura Multi-Nodo</th>
                                <td class="text-center bg-success-light">
                                    <i class="fas fa-check-circle text-success"></i><br>
                                    <small>A�ade servidores sin reemplazar</small>
                                </td>
                                <td class="text-center">
                                    <i class="fas fa-check-circle text-success"></i><br>
                                    <small>Cloud escalable autom�tico</small>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Coste por Escalado</th>
                                <td class="text-center bg-success-light">
                                    <strong>�2.000/50 usuarios</strong><br>
                                    <small>Pago �nico</small>
                                </td>
                                <td class="text-center">
                                    <strong>+�30/usuario/mes</strong><br>
                                    <small>Por siempre</small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- �Cu�ndo usar cada uno? -->
<section class="use-cases-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-5">�Cu�ndo Usar Cada Plataforma?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-primary">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0"><i class="fab fa-microsoft me-2"></i>Usa Microsoft Copilot Si...</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i>Tu trabajo es principalmente oficina (Word, Excel, PowerPoint)</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i>Ya usas Microsoft 365 intensivamente</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i>No manejas datos extremadamente sensibles</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i>Necesitas solo asistente de redacci�n y resumen</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i>No tienes maquinaria industrial o IoT</li>
                            <li class="mb-3"><i class="fas fa-check text-primary me-2"></i>El coste recurrente no es problema cr�tico</li>
                        </ul>
                        <div class="alert alert-info">
                            <strong>Perfil ideal:</strong> Despachos, consultor�as, oficinas administrativas sin procesos industriales.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card h-100 border-success">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0"><i class="fas fa-eye me-2"></i>Usa BionicEye Si...</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Necesitas ERP completo (RRHH, CRM, Producci�n, Tickets)</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Manejas datos sensibles que NO pueden salir de tu servidor</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Tienes maquinaria industrial o sensores IoT</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Necesitas automatizaci�n avanzada (OCR, WhatsApp bot, an�lisis)</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Quieres eliminar costes recurrentes de SaaS</li>
                            <li class="mb-3"><i class="fas fa-check text-success me-2"></i>Requieres funcionar offline/sin internet</li>
                        </ul>
                        <div class="alert alert-success">
                            <strong>Perfil ideal:</strong> Industrias manufactureras, log�stica, producci�n, empresas con requisitos RGPD estrictos, PYMEs que buscan ROI alto.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="card border-warning">
                    <div class="card-body text-center py-4">
                        <h4 class="text-warning"><i class="fas fa-lightbulb me-2"></i>Soluci�n H�brida �ptima</h4>
                        <p class="lead mb-0">
                            <strong>Mejor opci�n para muchas empresas:</strong> Usa <strong>BionicEye para backend cr�tico</strong> (datos sensibles, producci�n, ERP)
                            + <strong>Copilot para frontend de oficina</strong> (redacci�n documentos, presentaciones). As� combinas privacidad con productividad Office.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Final -->
<section class="cta-comparison py-5 bg-gradient-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-5 fw-bold mb-4">Ahorra �16.812/a�o vs Microsoft Copilot</h2>
                <p class="lead mb-4">
                    BionicEye incluye ERP completo + 8 agentes IA especializados por menos que solo el asistente de Copilot.
                </p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="contact.php?product=bioniceye&action=demo&from=comparacion-copilot" class="btn btn-light btn-lg">
                        <i class="fas fa-video me-2"></i>Demo Gratuita 45 min
                    </a>
                    <a href="contact.php?product=bioniceye&action=poc&from=comparacion-copilot" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-flask me-2"></i>PoC 30 D�as
                    </a>
                    <a href="tel:+34619929305" class="btn btn-warning btn-lg">
                        <i class="fas fa-phone me-2"></i>+34 619 929 305
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>
