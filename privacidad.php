<?php
require_once __DIR__ . '/languages/config.php';
$page_meta = [
    'title' => 'Privacidad RGPD · AppNet Developer',
    'description' => 'Política de privacidad de AppNet Developer conforme al RGPD y LOPDGDD: responsable, datos, finalidad, base legal, derechos RGPD, conservación, AEPD.',
    'keywords' => 'privacidad RGPD AppNet, LOPDGDD, tratamiento datos Murcia',
];
include __DIR__ . '/includes/header-reimagine.php';
?>

<section class="re-subhero">
    <div class="re-container">
        <span class="re-subhero__eyebrow"><?= __('legal') ?> · RGPD</span>
        <h1 class="re-display">Política de Privacidad</h1>
        <p class="re-subhero__lede">Cómo tratamos tus datos personales conforme al RGPD y LOPDGDD. Transparente, sin letra pequeña.</p>
    </div>
</section>

<section class="re-section">
    <div class="re-container">
        <article class="re-legal">
            <span class="re-legal__tag">Última actualización: <?= date('F Y') ?></span>

            <section>
                <h2>1. Responsable del Tratamiento</h2>
                <p>AppNet Developer SL es el responsable del tratamiento de los datos personales recogidos en este sitio web (appnet.dev).</p>
                <p><strong>Contacto:</strong> <a href="mailto:info@appnet.dev">info@appnet.dev</a> · <strong>Dirección:</strong> Murcia, España.</p>
            </section>

            <section>
                <h2>2. Datos que Recogemos</h2>
                <ul>
                    <li><strong>Datos de contacto:</strong> nombre, email, teléfono, empresa (cuando contactas con nosotros).</li>
                    <li><strong>Datos de uso:</strong> páginas visitadas, tiempo, dispositivo, idioma.</li>
                    <li><strong>Cookies:</strong> ver nuestra <a href="/cookies.php">Política de Cookies</a>.</li>
                </ul>
            </section>

            <section>
                <h2>3. Finalidad del Tratamiento</h2>
                <ul>
                    <li>Responder a tus consultas y solicitudes.</li>
                    <li>Prestar los servicios contratados.</li>
                    <li>Enviar comunicaciones comerciales (solo si das consentimiento).</li>
                    <li>Mejorar nuestros servicios y web.</li>
                </ul>
            </section>

            <section>
                <h2>4. Base Legal</h2>
                <ul>
                    <li>Tu consentimiento (formularios, newsletter).</li>
                    <li>Ejecución de contrato (servicios contratados).</li>
                    <li>Interés legítimo (mejora de servicios, analítica).</li>
                </ul>
            </section>

            <section>
                <h2>5. Tus Derechos (RGPD)</h2>
                <ul>
                    <li><strong>Acceso:</strong> saber qué datos tenemos de ti.</li>
                    <li><strong>Rectificación:</strong> corregir datos incorrectos.</li>
                    <li><strong>Supresión:</strong> pedir que borremos tus datos.</li>
                    <li><strong>Portabilidad:</strong> recibir tus datos en formato portable.</li>
                    <li><strong>Oposición:</strong> oponerte a cierto tratamiento.</li>
                    <li><strong>Retirar consentimiento:</strong> en cualquier momento.</li>
                </ul>
                <p>Para ejercer estos derechos, escribe a <strong>info@appnet.dev</strong>.</p>
            </section>

            <section>
                <h2>6. Conservación de Datos</h2>
                <ul>
                    <li>Datos de contacto: hasta 2 años tras la última interacción.</li>
                    <li>Datos de clientes: durante la relación contractual + 5 años (obligaciones legales).</li>
                    <li>Datos de uso: 2 años.</li>
                </ul>
            </section>

            <section>
                <h2>7. Seguridad</h2>
                <p>Implementamos medidas técnicas y organizativas para proteger tus datos: cifrado HTTPS, acceso restringido, copias de seguridad, CSP headers, auditoría SEO continua.</p>
            </section>

            <section>
                <h2>8. Terceros</h2>
                <p>No vendemos tus datos. Solo compartimos con proveedores necesarios para el servicio (hosting propio, email, IA on-premise local) bajo acuerdo de confidencialidad.</p>
            </section>

            <section>
                <h2>9. Autoridad de Control</h2>
                <p>Si crees que no tratamos correctamente tus datos, puedes reclamar ante la Agencia Española de Protección de Datos (AEPD): <a href="https://www.aepd.es" target="_blank" rel="noopener">www.aepd.es</a>.</p>
            </section>
        </article>
    </div>
</section>

<?php include __DIR__ . '/includes/footer-reimagine.php'; ?>
