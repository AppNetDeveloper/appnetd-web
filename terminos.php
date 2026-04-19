<?php
require_once __DIR__ . '/languages/config.php';
$page_meta = [
    'title' => __('meta.terms.title'),
    'description' => __('meta.terms.desc'),
];
include __DIR__ . '/includes/header-reimagine.php';
?>

<section class="re-subhero">
    <div class="re-container">
        <span class="re-subhero__eyebrow"><?= __('legal') ?> · Condiciones</span>
        <h1 class="re-display">Términos y Condiciones</h1>
        <p class="re-subhero__lede">Condiciones de uso del sitio web y servicios de AppNet Developer.</p>
    </div>
</section>

<section class="re-section">
    <div class="re-container">
        <article class="re-legal">
            <span class="re-legal__tag">Última actualización: <?= date('F Y') ?></span>

            <section><h2>1. Aceptación de los términos</h2><p>Al acceder a appnet.dev o contratar nuestros servicios, aceptas estos términos. Si no estás de acuerdo, no uses el sitio o los servicios.</p></section>
            <section><h2>2. Descripción del servicio</h2><p>AppNet Developer ofrece servicios de IA local, IoT industrial, desarrollo de software a medida, consultoría estratégica y productos como BionicEyE + ADRI.</p></section>
            <section><h2>3. Cuentas de usuario</h2><p>Eres responsable de mantener la confidencialidad de tus credenciales y de toda actividad en tu cuenta. Notifica inmediatamente cualquier uso no autorizado.</p></section>
            <section><h2>4. Uso aceptable</h2><p>No utilizarás el servicio para actividades ilegales, abuso, spam, explotación de vulnerabilidades o violación de derechos de terceros.</p></section>
            <section><h2>5. Propiedad intelectual</h2><p>El sitio, sus contenidos y los productos BionicEyE + ADRI son propiedad de AppNet Developer SL. Los datos que ingreses son tuyos.</p></section>
            <section><h2>6. Facturación y pagos</h2><p>Los servicios profesionales se facturan según presupuesto acordado. Los productos SaaS BionicEyE se rigen por sus propios términos en bioniceye.app.</p></section>
            <section><h2>7. Limitación de responsabilidad</h2><p>El servicio se presta "tal cual". No somos responsables de daños indirectos, lucro cesante o pérdida de datos más allá de lo establecido por la ley aplicable.</p></section>
            <section><h2>8. Terminación</h2><p>Puedes cancelar tu contrato según las condiciones pactadas. Nosotros podemos terminar el servicio en caso de incumplimiento grave o uso abusivo.</p></section>
            <section><h2>9. Ley aplicable</h2><p>Estos términos se rigen por la legislación española. Los tribunales competentes serán los de Murcia (España), domicilio social de AppNet Developer SL.</p></section>
        </article>
    </div>
</section>

<?php include __DIR__ . '/includes/footer-reimagine.php'; ?>
