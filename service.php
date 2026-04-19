<?php
require_once __DIR__ . '/languages/config.php';
$page_meta = [
    'title' => __('meta.service.title'),
    'description' => __('meta.service.desc'),
    'keywords' => __('meta.service.kw'),
];
include __DIR__ . '/includes/header-reimagine.php';
?>

<section class="re-subhero">
    <div class="re-container">
        <span class="re-subhero__eyebrow"><?= __('an.services.kicker') ?></span>
        <h1 class="re-display"><?= __('an.services.title') ?></h1>
        <p class="re-subhero__lede"><?= __('an.services.sub') ?></p>
    </div>
</section>

<section class="re-section">
    <div class="re-container">
        <div class="re-bento">
            <div class="re-bento__cell re-bento__cell--hero re-reveal">
                <div class="re-bento__icon">🧠</div>
                <h3 class="re-bento__title re-display"><?= __('an.services.s1n') ?></h3>
                <p class="re-bento__desc"><?= __('an.services.s1d') ?></p>
            </div>
            <div class="re-bento__cell re-bento__cell--tall re-reveal" data-delay="1">
                <div class="re-bento__icon">📡</div>
                <h3 class="re-bento__title re-display"><?= __('an.services.s2n') ?></h3>
                <p class="re-bento__desc"><?= __('an.services.s2d') ?></p>
            </div>
            <div class="re-bento__cell re-bento__cell--std re-reveal" data-delay="2">
                <div class="re-bento__icon">💻</div>
                <h3 class="re-bento__title re-display"><?= __('an.services.s3n') ?></h3>
                <p class="re-bento__desc"><?= __('an.services.s3d') ?></p>
            </div>
            <div class="re-bento__cell re-bento__cell--std re-reveal" data-delay="2">
                <div class="re-bento__icon">👁️</div>
                <h3 class="re-bento__title re-display"><?= __('an.services.s4n') ?></h3>
                <p class="re-bento__desc"><?= __('an.services.s4d') ?></p>
            </div>
            <div class="re-bento__cell re-bento__cell--std re-reveal" data-delay="3">
                <div class="re-bento__icon">🖥️</div>
                <h3 class="re-bento__title re-display"><?= __('an.services.s5n') ?></h3>
                <p class="re-bento__desc"><?= __('an.services.s5d') ?></p>
            </div>
            <div class="re-bento__cell re-bento__cell--std re-reveal" data-delay="3">
                <div class="re-bento__icon">🛡️</div>
                <h3 class="re-bento__title re-display"><?= __('an.services.s6n') ?></h3>
                <p class="re-bento__desc"><?= __('an.services.s6d') ?></p>
            </div>
            <div class="re-bento__cell re-bento__cell--wide re-reveal" data-delay="4">
                <div class="re-bento__icon">⚙️</div>
                <h3 class="re-bento__title re-display"><?= __('an.services.s7n') ?></h3>
                <p class="re-bento__desc"><?= __('an.services.s7d') ?></p>
            </div>
            <div class="re-bento__cell re-bento__cell--wide re-reveal" data-delay="4">
                <div class="re-bento__icon">🧭</div>
                <h3 class="re-bento__title re-display"><?= __('an.services.s8n') ?></h3>
                <p class="re-bento__desc"><?= __('an.services.s8d') ?></p>
            </div>
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
