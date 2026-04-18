<?php
require_once __DIR__ . '/languages/config.php';
http_response_code(404);
$page_meta = [
    'title' => '404 · Página no encontrada | AppNet',
    'description' => 'Página no encontrada en AppNet Developer. Vuelve al inicio o contacta con nosotros.',
    'keywords' => '404, página no encontrada',
];
include __DIR__ . '/includes/header-reimagine.php';
?>

<section class="re-404">
    <div class="re-hero__mesh" aria-hidden="true" style="position:absolute;inset:-20%;filter:blur(80px) saturate(1.3);opacity:0.4;"></div>
    <div style="position:relative;z-index:1;">
        <div class="re-404__code">404</div>
        <h1 class="re-display" style="font-size:var(--re-text-2xl);margin-bottom:var(--re-space-3);"><?= __('error404.title') ?></h1>
        <p><?= __('error404.description') ?></p>
        <div style="display:flex;gap:var(--re-space-2);justify-content:center;flex-wrap:wrap;margin-top:var(--re-space-4);">
            <a href="/" class="re-btn re-btn--primary"><span><?= __('error404.backHome') ?></span><span class="re-btn__arrow" aria-hidden="true">→</span></a>
            <a href="/contact.php" class="re-btn re-btn--ghost"><span><?= __('contact') ?></span></a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer-reimagine.php'; ?>
