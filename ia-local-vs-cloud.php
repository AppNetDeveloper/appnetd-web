<?php
require_once __DIR__ . '/languages/config.php';
$page_meta = [
    'title' => 'IA local vs cloud · Qué elegir',
    'description' => 'RGPD, latencia, costes mensuales: cuándo tiene sentido on-premise y cuándo la nube sale más barato.',
    'keywords' => 'AppNet Developer, IA local, IoT industrial',
];
include __DIR__ . '/includes/header-reimagine.php';
?>

<section class="re-section">
    <div class="re-container">
        <article class="re-legal">
            <a href="/blog.php" style="color:var(--re-iris-bright);text-decoration:none;font-size:var(--re-text-sm);font-weight:600;margin-bottom:var(--re-space-3);display:inline-block;">← <?= __('blog') ?></a>
            <h1 class="re-display" style="font-family:'Space Grotesk',system-ui,sans-serif;font-size:var(--re-text-3xl);letter-spacing:-0.03em;line-height:1.1;margin-bottom:var(--re-space-3);background:linear-gradient(120deg, var(--re-ink) 0%, var(--re-iris-bright) 100%);-webkit-background-clip:text;background-clip:text;color:transparent;">IA local vs cloud · Qué elegir</h1>
            <p style="font-size:var(--re-text-lg);color:var(--re-ink);line-height:1.55;border-left:3px solid var(--re-iris-bright);padding-left:var(--re-space-3);margin-bottom:var(--re-space-5);">RGPD, latencia, costes mensuales: cuándo tiene sentido on-premise y cuándo la nube sale más barato.</p>

            <div class="legacy-content">
                <section class="table-of-contents py-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3"><i class="fas fa-list me-2"></i>�ndice de Contenidos</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li><a href="#que-es">1. �Qu� es IA Local vs IA Cloud?</a></li>
                                    <li><a href="#tabla-comparativa">2. Tabla Comparativa Completa</a></li>
                                    <li><a href="#costes">3. An�lisis de Costes Reales</a></li>
                                    <li><a href="#privacidad">4. Privacidad y Cumplimiento RGPD</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li><a href="#rendimiento">5. Rendimiento y Latencia</a></li>
                                    <li><a href="#casos-uso">6. Casos de Uso por Industria</a></li>
                                    <li><a href="#roi-calculator">7. Calculadora ROI</a></li>
                                    <li><a href="#recomendaciones">8. Recomendaciones Finales</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            </div>

            <div style="margin-top:var(--re-space-5);padding-top:var(--re-space-4);border-top:1px solid var(--re-border);">
                <a href="/contact.php" class="re-btn re-btn--primary"><span><?= __('an.hero.ctaContact') ?></span><span class="re-btn__arrow" aria-hidden="true">→</span></a>
            </div>
        </article>
    </div>
</section>

<style>
/* Legacy content styling inside re-legal wrapper */
.legacy-content h2, .legacy-content h3 {
    font-family: 'Space Grotesk', system-ui, sans-serif !important;
    letter-spacing: -0.02em !important;
    color: var(--re-ink) !important;
    margin-top: var(--re-space-4) !important;
    margin-bottom: var(--re-space-2) !important;
}
.legacy-content h2 { font-size: var(--re-text-xl) !important; }
.legacy-content h3 { font-size: var(--re-text-lg) !important; }
.legacy-content p, .legacy-content li {
    color: var(--re-ink-muted) !important;
    line-height: 1.7 !important;
    font-size: var(--re-text-base) !important;
}
.legacy-content img { max-width: 100%; height: auto; border-radius: var(--re-radius-md); margin: var(--re-space-3) 0; }
.legacy-content ul, .legacy-content ol { padding-left: 1.4rem; margin-bottom: var(--re-space-3); }
.legacy-content a { color: var(--re-iris-bright); text-decoration: underline; }
.legacy-content .container { padding: 0 !important; max-width: 100% !important; }
.legacy-content .row, .legacy-content [class*="col-"] { margin: 0 !important; padding: 0 !important; width: 100% !important; flex: 0 0 100% !important; max-width: 100% !important; }
.legacy-content section { padding: var(--re-space-3) 0 !important; background: transparent !important; }
.legacy-content .blog-details-section, .legacy-content .blog-details-content { padding: 0 !important; }
</style>

<?php include __DIR__ . '/includes/footer-reimagine.php'; ?>
