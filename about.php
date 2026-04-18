<?php
require_once __DIR__ . '/languages/config.php';
$page_meta = [
    'title' => 'Sobre AppNet Developer · 25 años construyendo IA',
    'description' => 'AppNet Developer: 25 años en Murcia construyendo IA local, IoT industrial y software a medida. 500+ proyectos, 98% satisfacción cliente, creadores de BionicEyE + ADRI.',
    'keywords' => 'AppNet Developer historia, equipo, misión, experiencia IA, IoT Murcia, software empresa',
];
include __DIR__ . '/includes/header-reimagine.php';
?>

<section class="re-subhero">
    <div class="re-container">
        <span class="re-subhero__eyebrow"><?= __('about_us') ?></span>
        <h1 class="re-display">Construimos software desde el año 2000 en Murcia.</h1>
        <p class="re-subhero__lede">25 años de experiencia traducidos en 500+ proyectos industriales, IA on-premise y la creación de BionicEyE + ADRI, el Business OS con 8 agentes IA.</p>
    </div>
</section>

<section class="re-section">
    <div class="re-container">
        <div class="re-section__head re-reveal">
            <span class="re-section__kicker">Nuestra visión</span>
            <h2 class="re-section__title re-display">La IA debe vivir en tu empresa, no en los servidores de otros.</h2>
            <p class="re-section__sub">Defendemos la soberanía del dato: cada solución que entregamos puede ejecutarse 100% en tu infraestructura. Sin OpenAI obligatorio, sin Google obligatorio, sin dependencias cloud externas.</p>
        </div>

        <div class="re-stat-cards re-reveal">
            <div class="re-stat-card"><div class="re-stat-card__val">25</div><span class="re-stat-card__lbl"><?= __('an.stats.years') ?></span><span class="re-stat-card__sub">Desde el año 2000 en Murcia, España.</span></div>
            <div class="re-stat-card"><div class="re-stat-card__val">500+</div><span class="re-stat-card__lbl"><?= __('an.stats.projects') ?></span><span class="re-stat-card__sub">IoT, IA, software a medida, integraciones.</span></div>
            <div class="re-stat-card"><div class="re-stat-card__val">98%</div><span class="re-stat-card__lbl"><?= __('an.stats.clients') ?></span><span class="re-stat-card__sub">Rating promedio de satisfacción.</span></div>
            <div class="re-stat-card"><div class="re-stat-card__val">8</div><span class="re-stat-card__lbl"><?= __('rei.ticker.agents') ?> ADRI</span><span class="re-stat-card__sub">Producto propio BionicEyE + ADRI.</span></div>
        </div>
    </div>
</section>

<section class="re-section re-section--tight">
    <div class="re-container">
        <div class="re-section__head re-reveal">
            <span class="re-section__kicker">Compliance España</span>
            <h2 class="re-section__title re-display">Cumplimiento real, verificable, en producción.</h2>
        </div>
        <div class="re-compliance re-reveal">
            <div class="re-comp"><div class="re-comp__mark">🕐</div><div><div class="re-comp__name">Control Horario 21/21</div><span class="re-comp__law">RD-Ley 8/2019</span></div></div>
            <div class="re-comp"><div class="re-comp__mark">📜</div><div><div class="re-comp__name">Factura electrónica</div><span class="re-comp__law">VeriFactu AEAT</span></div></div>
            <div class="re-comp"><div class="re-comp__mark">⚖️</div><div><div class="re-comp__name">Brecha salarial</div><span class="re-comp__law">RD 902/2020</span></div></div>
            <div class="re-comp"><div class="re-comp__mark">🛡️</div><div><div class="re-comp__name">Canal denuncias</div><span class="re-comp__law">Ley 2/2023</span></div></div>
            <div class="re-comp"><div class="re-comp__mark">🔒</div><div><div class="re-comp__name">RGPD · GDPR</div><span class="re-comp__law">audit logs + opt-out</span></div></div>
            <div class="re-comp"><div class="re-comp__mark">📊</div><div><div class="re-comp__name">PGC doble partida</div><span class="re-comp__law">303 / 347 / 390</span></div></div>
        </div>
    </div>
</section>

<section class="re-section re-section--tight">
    <div class="re-container">
        <div class="re-cta">
            <h2 class="re-display"><?= __('an.contact.title') ?></h2>
            <p><?= __('an.contact.sub') ?></p>
            <div style="display:flex;gap:var(--re-space-2);justify-content:center;flex-wrap:wrap;">
                <a href="/contact.php" class="re-btn re-btn--primary"><span><?= __('an.hero.ctaContact') ?></span><span class="re-btn__arrow" aria-hidden="true">→</span></a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer-reimagine.php'; ?>
