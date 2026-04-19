<?php
require_once __DIR__ . '/languages/config.php';
$page_meta = [
    'title' => __('meta.blog.title'),
    'description' => __('meta.blog.desc'),
    'keywords' => __('meta.blog.kw'),
];
include __DIR__ . '/includes/header-reimagine.php';

$articles = [
    ['slug'=>'blog-crm-autonomo-ia', 'tag'=>'CRM IA', 'title'=>'CRM autónomo con ADRI', 'lede'=>'Cómo convertir un lead frío en cliente sin intervención humana en 20 días.', 'time'=>'7 min'],
    ['slug'=>'blog-erp-ia-pymes-espanolas', 'tag'=>'ERP', 'title'=>'ERP con IA para PYMEs españolas', 'lede'=>'VeriFactu, PGC, modelos 303/347/390: la automatización que exige la ley.', 'time'=>'8 min'],
    ['slug'=>'blog-ia-revolucion-industrial', 'tag'=>'Estrategia', 'title'=>'IA local vs cloud: qué elegir', 'lede'=>'Cuándo tiene sentido on-premise y cuándo la nube sale más barato.', 'time'=>'6 min'],
    ['slug'=>'blog-iot-industria', 'tag'=>'IoT', 'title'=>'IoT industrial con MQTT y Modbus', 'lede'=>'Arquitectura práctica: sensores, gateway, dashboards tiempo real.', 'time'=>'9 min'],
    ['slug'=>'blog-servidores-arm', 'tag'=>'Hardware', 'title'=>'Servidores ARM para IA empresarial', 'lede'=>'AMD Ryzen AI Max+ 395 vs x86: benchmarks reales en producción.', 'time'=>'7 min'],
    ['slug'=>'ia-local-vs-cloud', 'tag'=>'Arquitectura', 'title'=>'IA local vs cloud: la decisión', 'lede'=>'RGPD, latencia, costes mensuales: por qué las PYMEs migran a local.', 'time'=>'5 min'],
    ['slug'=>'ciberseguridad-seguridad-informatica-inteligencia-artificial', 'tag'=>'Seguridad', 'title'=>'Ciberseguridad con IA', 'lede'=>'Pentesting automatizado, OSINT de dominios, defensa proactiva.', 'time'=>'8 min'],
];
?>

<section class="re-subhero">
    <div class="re-container">
        <span class="re-subhero__eyebrow">Blog técnico</span>
        <h1 class="re-display">Ingeniería, IA y automatización industrial.</h1>
        <p class="re-subhero__lede">Artículos sobre IA on-premise, IoT, integración industrial, servidores ARM y casos reales con clientes.</p>
    </div>
</section>

<section class="re-section">
    <div class="re-container">
        <div class="re-blog-grid">
            <?php foreach ($articles as $a): ?>
            <a href="/<?= htmlspecialchars($a['slug']) ?>.php" class="re-blog-card re-reveal">
                <span class="re-blog-card__tag"><?= htmlspecialchars($a['tag']) ?></span>
                <h3 class="re-blog-card__title"><?= htmlspecialchars($a['title']) ?></h3>
                <p class="re-blog-card__lede"><?= htmlspecialchars($a['lede']) ?></p>
                <div class="re-blog-card__meta">
                    <span>📖 <?= htmlspecialchars($a['time']) ?></span>
                    <span class="re-blog-card__arrow">→</span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer-reimagine.php'; ?>
