<?php
require_once __DIR__ . '/languages/config.php';
$page_meta = [
    'title' => __('meta.cookies.title'),
    'description' => __('meta.cookies.desc'),
];
include __DIR__ . '/includes/header-reimagine.php';
?>

<section class="re-subhero">
    <div class="re-container">
        <span class="re-subhero__eyebrow"><?= __('legal') ?> · Cookies</span>
        <h1 class="re-display">Política de Cookies</h1>
        <p class="re-subhero__lede">Qué cookies usamos, por qué y cómo desactivarlas.</p>
    </div>
</section>

<section class="re-section">
    <div class="re-container">
        <article class="re-legal">
            <span class="re-legal__tag">Última actualización: <?= date('F Y') ?></span>

            <section><h2>1. ¿Qué son las cookies?</h2><p>Las cookies son pequeños archivos que un sitio web guarda en tu dispositivo para recordar información (preferencias de idioma, estado de sesión, etc.).</p></section>
            <section>
                <h2>2. Cookies que usamos</h2>
                <h3>Técnicas (estrictamente necesarias)</h3>
                <ul>
                    <li><code>appnet_language</code> — recuerda tu idioma preferido (1 año).</li>
                    <li><code>cookie-consent</code> — recuerda si has aceptado el banner de cookies.</li>
                </ul>
                <h3>Analítica</h3>
                <p>No utilizamos Google Analytics ni trackers de terceros en esta web. Si lo hacemos en el futuro, pediremos tu consentimiento previo.</p>
            </section>
            <section><h2>3. ¿Cómo desactivarlas?</h2><p>Puedes borrar las cookies desde las preferencias de tu navegador: Configuración → Privacidad → Borrar datos de navegación.</p></section>
            <section><h2>4. Cambios en la política</h2><p>Si añadimos cookies nuevas, actualizaremos esta página y te pediremos consentimiento donde corresponda.</p></section>
        </article>
    </div>
</section>

<?php include __DIR__ . '/includes/footer-reimagine.php'; ?>
