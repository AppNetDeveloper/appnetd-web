<?php
require_once __DIR__ . '/languages/config.php';
$page_meta = [
    'title' => 'Proyectos AppNet · Casos reales en producción',
    'description' => 'Proyectos de AppNet Developer: mantenimiento predictivo, eficiencia energética, IA calidad, IoT industrial, logística automatizada, automatización industrial.',
    'keywords' => 'proyectos IA industrial, casos éxito IoT, mantenimiento predictivo, eficiencia energética, automatización Murcia',
];
include __DIR__ . '/includes/header-reimagine.php';

$projects = [
    ['slug'=>'proyecto-mantenimiento-predictivo', 'role'=>'IoT + ML', 'emoji'=>'🏭', 't_key'=>'an.projects.p1t', 'd_key'=>'an.projects.p1d', 'impact'=>'95% precisión predictiva', 'theme'=>'ops'],
    ['slug'=>'proyecto-eficiencia-energetica', 'role'=>'Energy IoT', 'emoji'=>'⚡', 't_key'=>'an.projects.p2t', 'd_key'=>'an.projects.p2d', 'impact'=>'–30% consumo', 'theme'=>'finance'],
    ['slug'=>'proyecto-ia-calidad', 'role'=>'Computer Vision', 'emoji'=>'🔍', 't_key'=>'an.projects.p3t', 'd_key'=>'an.projects.p3d', 'impact'=>'99,8% precisión', 'theme'=>'security'],
    ['slug'=>'proyecto-automatizacion-industrial', 'role'=>'Industria 4.0', 'emoji'=>'🤖', 't_key'=>'an.projects.p4t', 'd_key'=>'an.projects.p4d', 'impact'=>'–40% tiempos ciclo', 'theme'=>'dev'],
    ['slug'=>'proyecto-iot-industrial', 'role'=>'IoT industrial', 'emoji'=>'📊', 't_key'=>'an.projects.p5t', 'd_key'=>'an.projects.p5d', 'impact'=>'500 sensores MQTT', 'theme'=>'ops'],
    ['slug'=>'proyecto-logistica-automatizada', 'role'=>'Logística + IA', 'emoji'=>'🚚', 't_key'=>'an.projects.p6t', 'd_key'=>'an.projects.p6d', 'impact'=>'OR-Tools + GPS live', 'theme'=>'sales'],
];
?>

<section class="re-subhero">
    <div class="re-container">
        <span class="re-subhero__eyebrow"><?= __('an.projects.kicker') ?></span>
        <h1 class="re-display"><?= __('an.projects.title') ?></h1>
        <p class="re-subhero__lede"><?= __('an.projects.sub') ?></p>
    </div>
</section>

<section class="re-section">
    <div class="re-container">
        <div class="re-usecases">
            <?php foreach ($projects as $p): ?>
            <article class="re-uc re-uc--<?= $p['theme'] ?> re-reveal">
                <span class="re-uc__role"><?= htmlspecialchars($p['role']) ?></span>
                <span class="re-uc__emoji"><?= $p['emoji'] ?></span>
                <h3 class="re-uc__title"><?= __($p['t_key']) ?></h3>
                <p class="re-uc__desc"><?= __($p['d_key']) ?></p>
                <div class="re-uc__impact"><?= htmlspecialchars($p['impact']) ?></div>
                <a href="/<?= $p['slug'] ?>.php" style="color:var(--re-iris-bright);text-decoration:none;font-size:var(--re-text-sm);font-weight:600;margin-top:var(--re-space-2);display:inline-block;">Ver detalle →</a>
            </article>
            <?php endforeach; ?>
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
