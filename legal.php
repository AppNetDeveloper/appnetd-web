<?php
require_once __DIR__ . '/languages/config.php';
$page_meta = [
    'title' => __('meta.legal.title'),
    'description' => __('meta.legal.desc'),
];
include __DIR__ . '/includes/header-reimagine.php';
?>

<section class="re-subhero">
    <div class="re-container">
        <span class="re-subhero__eyebrow"><?= __('legal') ?> · Aviso Legal</span>
        <h1 class="re-display">Aviso Legal</h1>
        <p class="re-subhero__lede">Información en cumplimiento de la LSSI-CE (Ley 34/2002).</p>
    </div>
</section>

<section class="re-section">
    <div class="re-container">
        <article class="re-legal">
            <span class="re-legal__tag">Última actualización: <?= date('F Y') ?></span>

            <section><h2>1. Datos identificativos</h2><ul>
                <li><strong>Razón social:</strong> AppNet Developer SL</li>
                <li><strong>Domicilio social:</strong> Murcia, España</li>
                <li><strong>Email:</strong> <a href="mailto:info@appnet.dev">info@appnet.dev</a></li>
                <li><strong>Teléfono:</strong> +34 619 929 305</li>
                <li><strong>Sitio web:</strong> <a href="https://appnet.dev">appnet.dev</a></li>
            </ul></section>

            <section><h2>2. Objeto</h2><p>El presente aviso legal regula el uso del servicio del portal web <strong>appnet.dev</strong>. La navegación atribuye la condición de usuario e implica la aceptación plena de todas las disposiciones incluidas en este aviso.</p></section>

            <section><h2>3. Propiedad intelectual</h2><p>Todo el contenido de este sitio web (textos, imágenes, logotipos, diseño, estructura, código fuente, productos BionicEyE y ADRI) es propiedad de AppNet Developer SL. Queda prohibida su reproducción, distribución, comunicación pública o modificación sin autorización expresa.</p></section>

            <section><h2>4. Exclusión de garantías y responsabilidad</h2><p>AppNet Developer SL no se responsabiliza de los daños causados por el uso indebido de la web, la presencia de virus o elementos maliciosos, ni de la información de terceros enlazada desde este sitio.</p></section>

            <section><h2>5. Legislación aplicable</h2><p>La relación entre AppNet Developer SL y el usuario se regirá por la normativa española vigente y cualquier controversia se someterá a los Juzgados y Tribunales de Murcia.</p></section>
        </article>
    </div>
</section>

<?php include __DIR__ . '/includes/footer-reimagine.php'; ?>
