<?php
require_once __DIR__ . '/languages/config.php';

$page_meta = [
    'title' => 'AppNet Developer · IA local, IoT industrial, software a medida',
    'description' => 'AppNet Developer Murcia: 25 años construyendo IA local, IoT industrial y software a medida. Creadores de BionicEyE + ADRI con 8 agentes IA 24/7.',
    'keywords' => 'AppNet Developer Murcia, IA local España, IoT industrial, BionicEyE ADRI, agentes IA, automatización industrial, software a medida, AMD Ryzen AI',
];

include __DIR__ . '/includes/header-reimagine.php';
?>

<!-- ==================== HERO ==================== -->
<section class="re-hero" aria-labelledby="hero-title">
    <div class="re-hero__mesh" aria-hidden="true"></div>
    <div class="re-hero__grid" aria-hidden="true"></div>

    <div class="re-container">
        <div class="re-hero__eyebrow"><?= __('an.hero.eyebrow') ?></div>

        <h1 id="hero-title" class="re-display">
            <span class="sr-only">AppNet Developer Murcia: IA local, IoT industrial y software a medida. </span>
            <span><?= __('an.hero.title1') ?></span><br>
            <span class="re-ink-gradient"><?= __('an.hero.title2') ?></span>
        </h1>

        <p class="re-hero__lede"><?= __('an.hero.lede') ?></p>

        <div class="re-hero__ctas">
            <a href="/service.php" class="re-btn re-btn--primary">
                <span><?= __('an.hero.ctaServices') ?></span>
                <span class="re-btn__arrow" aria-hidden="true">→</span>
            </a>
            <a href="/contact.php" class="re-btn re-btn--ghost">
                <span><?= __('an.hero.ctaContact') ?></span>
            </a>
            <a href="https://bioniceye.app" target="_blank" rel="noopener" class="re-btn re-btn--ghost">
                <span>BionicEyE + ADRI ↗</span>
            </a>
        </div>

        <div class="re-hero__ticker">
            <div class="re-ticker__item">
                <span class="re-ticker__val" data-count-to="25">0</span>
                <span class="re-ticker__lbl"><?= __('an.stats.years') ?></span>
            </div>
            <div class="re-ticker__item">
                <span class="re-ticker__val" data-count-to="500">0</span>+
                <span class="re-ticker__lbl"><?= __('an.stats.projects') ?></span>
            </div>
            <div class="re-ticker__item">
                <span class="re-ticker__val" data-count-to="98">0</span>%
                <span class="re-ticker__lbl"><?= __('an.stats.clients') ?></span>
            </div>
            <div class="re-ticker__item">
                <span class="re-ticker__val">8</span>
                <span class="re-ticker__lbl"><?= __('rei.ticker.agents') ?></span>
            </div>
            <div class="re-ticker__item">
                <span class="re-ticker__val">14</span>
                <span class="re-ticker__lbl"><?= __('rei.ticker.pools') ?></span>
            </div>
            <div class="re-ticker__item">
                <span class="re-ticker__val">24/7</span>
                <span class="re-ticker__lbl"><?= __('an.hero.eyebrow') ?></span>
            </div>
        </div>
    </div>
</section>

<!-- ==================== SERVICES BENTO ==================== -->
<section class="re-section" aria-labelledby="services-title">
    <div class="re-container">
        <div class="re-section__head re-reveal">
            <span class="re-section__kicker"><?= __('an.services.kicker') ?></span>
            <h2 id="services-title" class="re-section__title re-display"><?= __('an.services.title') ?></h2>
            <p class="re-section__sub"><?= __('an.services.sub') ?></p>
        </div>

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

<!-- ==================== PRODUCT: BionicEyE ==================== -->
<section class="re-section re-section--tight" aria-labelledby="product-title">
    <div class="re-container">
        <div style="padding:var(--re-space-6) var(--re-space-4);border-radius:var(--re-radius-xl);background:linear-gradient(135deg, oklch(20% 0.06 275) 0%, oklch(22% 0.08 335) 100%);position:relative;overflow:hidden;isolation:isolate;">
            <div style="position:absolute;inset:0;z-index:-1;background:radial-gradient(circle at 20% 20%, oklch(68% 0.21 275 / 0.6), transparent 40%), radial-gradient(circle at 80% 80%, oklch(72% 0.25 335 / 0.5), transparent 45%);filter:blur(40px);opacity:0.8;"></div>

            <div class="re-section__head re-reveal" style="text-align:center;color:white;">
                <span class="re-section__kicker" style="color:oklch(80% 0.16 200);"><?= __('an.product.kicker') ?></span>
                <h2 id="product-title" class="re-section__title re-display" style="color:white;"><?= __('an.product.title') ?></h2>
                <p class="re-section__sub" style="color:oklch(90% 0.01 275);"><?= __('an.product.sub') ?></p>
            </div>

            <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(220px, 1fr));gap:var(--re-space-3);max-width:900px;margin:var(--re-space-5) auto 0;">
                <div style="text-align:center;padding:var(--re-space-3);border-radius:var(--re-radius-md);background:oklch(0% 0 0 / 0.3);border:1px solid oklch(100% 0 0 / 0.15);color:white;">
                    <div style="font-size:2rem;font-weight:800;letter-spacing:-0.03em;background:linear-gradient(120deg, var(--re-iris-bright), var(--re-magenta));-webkit-background-clip:text;background-clip:text;color:transparent;">500K+</div>
                    <div style="font-size:0.85rem;opacity:0.85;"><?= __('rei.ticker.loc') ?></div>
                </div>
                <div style="text-align:center;padding:var(--re-space-3);border-radius:var(--re-radius-md);background:oklch(0% 0 0 / 0.3);border:1px solid oklch(100% 0 0 / 0.15);color:white;">
                    <div style="font-size:2rem;font-weight:800;letter-spacing:-0.03em;background:linear-gradient(120deg, var(--re-iris-bright), var(--re-magenta));-webkit-background-clip:text;background-clip:text;color:transparent;">8</div>
                    <div style="font-size:0.85rem;opacity:0.85;"><?= __('rei.ticker.agents') ?></div>
                </div>
                <div style="text-align:center;padding:var(--re-space-3);border-radius:var(--re-radius-md);background:oklch(0% 0 0 / 0.3);border:1px solid oklch(100% 0 0 / 0.15);color:white;">
                    <div style="font-size:2rem;font-weight:800;letter-spacing:-0.03em;background:linear-gradient(120deg, var(--re-iris-bright), var(--re-magenta));-webkit-background-clip:text;background-clip:text;color:transparent;">14</div>
                    <div style="font-size:0.85rem;opacity:0.85;"><?= __('rei.ticker.pools') ?></div>
                </div>
                <div style="text-align:center;padding:var(--re-space-3);border-radius:var(--re-radius-md);background:oklch(0% 0 0 / 0.3);border:1px solid oklch(100% 0 0 / 0.15);color:white;">
                    <div style="font-size:2rem;font-weight:800;letter-spacing:-0.03em;background:linear-gradient(120deg, var(--re-iris-bright), var(--re-magenta));-webkit-background-clip:text;background-clip:text;color:transparent;">24/7</div>
                    <div style="font-size:0.85rem;opacity:0.85;">ADRI</div>
                </div>
            </div>

            <div style="text-align:center;margin-top:var(--re-space-5);">
                <a href="https://bioniceye.app" target="_blank" rel="noopener" class="re-btn re-btn--primary">
                    <span><?= __('an.product.cta') ?></span>
                    <span class="re-btn__arrow" aria-hidden="true">↗</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ==================== PROJECTS ==================== -->
<section class="re-section" aria-labelledby="projects-title">
    <div class="re-container">
        <div class="re-section__head re-reveal">
            <span class="re-section__kicker"><?= __('an.projects.kicker') ?></span>
            <h2 id="projects-title" class="re-section__title re-display"><?= __('an.projects.title') ?></h2>
            <p class="re-section__sub"><?= __('an.projects.sub') ?></p>
        </div>

        <div class="re-usecases">
            <article class="re-uc re-uc--ops re-reveal">
                <span class="re-uc__role">IoT + Machine Learning</span>
                <span class="re-uc__emoji">🏭</span>
                <h3 class="re-uc__title"><?= __('an.projects.p1t') ?></h3>
                <p class="re-uc__desc"><?= __('an.projects.p1d') ?></p>
                <div class="re-uc__impact">95% precisión predictiva</div>
            </article>

            <article class="re-uc re-uc--finance re-reveal" data-delay="1">
                <span class="re-uc__role">Energy IoT</span>
                <span class="re-uc__emoji">⚡</span>
                <h3 class="re-uc__title"><?= __('an.projects.p2t') ?></h3>
                <p class="re-uc__desc"><?= __('an.projects.p2d') ?></p>
                <div class="re-uc__impact">–30% consumo</div>
            </article>

            <article class="re-uc re-uc--security re-reveal" data-delay="2">
                <span class="re-uc__role">Computer Vision</span>
                <span class="re-uc__emoji">🔍</span>
                <h3 class="re-uc__title"><?= __('an.projects.p3t') ?></h3>
                <p class="re-uc__desc"><?= __('an.projects.p3d') ?></p>
                <div class="re-uc__impact">99,8% precisión</div>
            </article>

            <article class="re-uc re-uc--dev re-reveal" data-delay="3">
                <span class="re-uc__role">Industria 4.0</span>
                <span class="re-uc__emoji">🤖</span>
                <h3 class="re-uc__title"><?= __('an.projects.p4t') ?></h3>
                <p class="re-uc__desc"><?= __('an.projects.p4d') ?></p>
                <div class="re-uc__impact">–40% tiempos ciclo</div>
            </article>

            <article class="re-uc re-uc--ops re-reveal" data-delay="4">
                <span class="re-uc__role">IoT industrial</span>
                <span class="re-uc__emoji">📊</span>
                <h3 class="re-uc__title"><?= __('an.projects.p5t') ?></h3>
                <p class="re-uc__desc"><?= __('an.projects.p5d') ?></p>
                <div class="re-uc__impact">500 sensores MQTT</div>
            </article>

            <article class="re-uc re-uc--sales re-reveal" data-delay="5">
                <span class="re-uc__role">Logística + IA</span>
                <span class="re-uc__emoji">🚚</span>
                <h3 class="re-uc__title"><?= __('an.projects.p6t') ?></h3>
                <p class="re-uc__desc"><?= __('an.projects.p6d') ?></p>
                <div class="re-uc__impact">OR-Tools + GPS live</div>
            </article>
        </div>
    </div>
</section>

<!-- ==================== CTA ==================== -->
<section class="re-section re-section--tight">
    <div class="re-container">
        <div class="re-cta">
            <h2 class="re-display"><?= __('an.contact.title') ?></h2>
            <p><?= __('an.contact.sub') ?></p>
            <div style="display:flex;gap:var(--re-space-2);justify-content:center;flex-wrap:wrap;">
                <a href="/contact.php" class="re-btn re-btn--primary">
                    <span><?= __('an.hero.ctaContact') ?></span>
                    <span class="re-btn__arrow" aria-hidden="true">→</span>
                </a>
                <a href="https://wa.me/34619929305?text=Hola%2C%20quiero%20una%20auditor%C3%ADa%20t%C3%A9cnica%20gratuita" target="_blank" rel="noopener" class="re-btn re-btn--ghost">
                    <span>💬 WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer-reimagine.php'; ?>
