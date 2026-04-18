<?php
/**
 * Modern slim header for AppNet Developer — reimagine system.
 * Replaces the legacy 1200+ line header with focused SEO + accessibility.
 */
require_once __DIR__ . '/../languages/config.php';

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$is_https = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || ($_SERVER['SERVER_PORT'] ?? '') == 443;
$base_url = ($is_https ? 'https' : 'http') . '://' . $host;
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$current_url = $base_url . $request_uri;
$canonical_url = strtok($current_url, '?');

$current_page = basename($_SERVER['PHP_SELF'], '.php');

// Page-level SEO (short titles, concise meta)
$page_meta = $page_meta ?? [];
$page_title = $page_meta['title'] ?? $available_languages[$current_lang]['site_name'];
$page_description = $page_meta['description'] ?? $available_languages[$current_lang]['site_description'];
$page_keywords = $page_meta['keywords'] ?? 'AppNet Developer, IA local, ERP con IA, BionicEyE, ADRI, agentes IA, automatización empresarial';
$og_image = $base_url . '/assets/img/og-image.jpg';
$body_class = $page_meta['body_class'] ?? 'reimagine reimagine-an';
$body_rtl = isset($available_languages[$current_lang]['rtl']) && $available_languages[$current_lang]['rtl'];

// Today for freshness
$today = date('Y-m-d');
?><!DOCTYPE html>
<html lang="<?= htmlspecialchars($available_languages[$current_lang]['hreflang']) ?>" dir="<?= $body_rtl ? 'rtl' : 'ltr' ?>" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="last-modified" content="<?= $today ?>">

    <!-- Security headers -->
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self' 'unsafe-inline' https://www.googletagmanager.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com https://cdn.jsdelivr.net https://cdnjs.cloudflare.com; font-src 'self' https://fonts.gstatic.com https://cdnjs.cloudflare.com data:; img-src 'self' data: https:; connect-src 'self' https:; frame-ancestors 'self'; base-uri 'self'; form-action 'self' https://wa.me https://t.me;">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="Referrer-Policy" content="strict-origin-when-cross-origin">

    <!-- Primary SEO -->
    <title><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="keywords" content="<?= htmlspecialchars($page_keywords, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="author" content="AppNet Developer">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">

    <!-- Hreflang for 6 languages + x-default -->
    <?php foreach ($available_languages as $code => $data): ?>
    <link rel="alternate" hreflang="<?= $data['hreflang'] ?>" href="<?= $canonical_url ?><?= $code !== $default_language ? '?lang=' . $code : '' ?>" />
    <?php endforeach; ?>
    <link rel="alternate" hreflang="x-default" href="<?= $canonical_url ?>" />

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= htmlspecialchars($current_url) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>">
    <meta property="og:image" content="<?= $og_image ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="<?= $available_languages[$current_lang]['site_name'] ?>">
    <meta property="og:locale" content="<?= $available_languages[$current_lang]['locale'] ?>">
    <?php foreach ($available_languages as $code => $data): if ($code !== $current_lang): ?>
    <meta property="og:locale:alternate" content="<?= $data['locale'] ?>">
    <?php endif; endforeach; ?>

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8') ?>">
    <meta name="twitter:image" content="<?= $og_image ?>">
    <meta name="twitter:site" content="@appnetdev">

    <!-- Schema.org: Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "@id": "<?= $base_url ?>/#organization",
        "name": "AppNet Developer",
        "legalName": "AppNet Developer SL",
        "url": "<?= $base_url ?>",
        "logo": {"@type": "ImageObject", "url": "<?= $base_url ?>/assets/img/logo/header-logo1.png"},
        "description": "Soluciones IA locales, IoT industrial y desarrollo de software a medida. Creadores de BionicEyE + ADRI.",
        "foundingDate": "2000",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Murcia",
            "addressRegion": "Región de Murcia",
            "addressCountry": "ES"
        },
        "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "+34-619-929-305",
            "email": "info@appnet.dev",
            "contactType": "sales",
            "areaServed": ["ES", "EU"],
            "availableLanguage": ["Spanish", "English", "French", "Italian", "Romanian", "Arabic"]
        }],
        "sameAs": [
            "https://twitter.com/appnetdev",
            "https://www.linkedin.com/company/appnet-developer",
            "https://github.com/appnet-developer"
        ]
    }
    </script>

    <!-- Schema.org: WebSite -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "@id": "<?= $base_url ?>/#website",
        "url": "<?= $base_url ?>/",
        "name": "AppNet Developer",
        "publisher": {"@id": "<?= $base_url ?>/#organization"},
        "inLanguage": ["es-ES", "en-GB", "fr-FR", "it-IT", "ro-RO", "ar-SA"],
        "datePublished": "2000-01-01",
        "dateModified": "<?= $today ?>"
    }
    </script>

    <!-- Schema.org: WebPage freshness -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "@id": "<?= $canonical_url ?>#webpage",
        "url": "<?= $canonical_url ?>",
        "name": "<?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?>",
        "inLanguage": "<?= $available_languages[$current_lang]['hreflang'] ?>",
        "isPartOf": {"@id": "<?= $base_url ?>/#website"},
        "datePublished": "2024-01-15",
        "dateModified": "<?= $today ?>",
        "primaryImageOfPage": {"@type": "ImageObject", "url": "<?= $og_image ?>"}
    }
    </script>

    <!-- Favicon + manifest -->
    <link rel="icon" type="image/png" href="/assets/img/logo/header-logo1.png">
    <link rel="apple-touch-icon" href="/assets/img/logo/header-logo1.png">
    <meta name="theme-color" content="#6366f1">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Reimagine design system -->
    <link rel="stylesheet" href="/assets/css/reimagine.css?v=5">

    <!-- Optional: page-specific stylesheet -->
    <?php if (!empty($page_meta['extra_css'])): foreach ((array)$page_meta['extra_css'] as $css): ?>
    <link rel="stylesheet" href="<?= htmlspecialchars($css) ?>">
    <?php endforeach; endif; ?>
</head>
<body class="<?= htmlspecialchars($body_class) ?>" data-page="<?= htmlspecialchars($current_page) ?>">
    <a href="#main-content" class="skip-link" style="position:absolute;top:-40px;left:0;background:var(--re-iris);color:white;padding:8px;z-index:100;" onfocus="this.style.top='0'" onblur="this.style.top='-40px'"><?= __('common.skipToContent') ?></a>

    <!-- Header (responsive) -->
    <header class="re-header" role="banner">
        <nav class="re-header__nav re-container" aria-label="Main">
            <a href="/" class="re-header__logo" aria-label="AppNet Developer">
                <img src="/assets/img/logo/header-logo1.png" alt="AppNet Developer" width="40" height="40">
                <span>AppNet<span class="re-ink-gradient">Developer</span></span>
            </a>

            <ul class="re-header__menu" id="reMainMenu" role="menubar">
                <li role="none"><a href="/" role="menuitem"><?= __('home') ?></a></li>
                <li role="none"><a href="/about.php" role="menuitem"><?= __('about') ?></a></li>
                <li role="none"><a href="/service.php" role="menuitem"><?= __('we_offer') ?></a></li>
                <li role="none"><a href="/proyectos.php" role="menuitem"><?= __('projects') ?></a></li>
                <li role="none"><a href="/blog.php" role="menuitem"><?= __('blog') ?></a></li>
                <li role="none"><a href="/contact.php" role="menuitem"><?= __('contact') ?></a></li>
            </ul>

            <div class="re-header__actions">
                <!-- Theme toggle -->
                <button type="button" class="re-header__theme" id="reThemeToggle" aria-label="Toggle dark/light theme" title="Toggle theme">
                    <span id="reThemeIcon" aria-hidden="true">🌙</span>
                </button>

                <!-- Language switcher -->
                <div class="lang-switcher">
                    <button type="button" class="lang-switcher__btn" aria-haspopup="true" aria-expanded="false" aria-label="<?= __('change_language') ?>">
                        <span aria-hidden="true"><?= $available_languages[$current_lang]['flag'] ?></span>
                        <span><?= strtoupper($current_lang) ?></span>
                    </button>
                    <ul class="lang-switcher__menu" role="menu">
                        <?php foreach ($available_languages as $code => $data): ?>
                            <?php if ($code !== $current_lang): ?>
                            <li role="none"><a href="?lang=<?= $code ?>" role="menuitem" class="lang-switcher__item"><span aria-hidden="true"><?= $data['flag'] ?></span><span><?= $data['name'] ?></span></a></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Mobile hamburger -->
                <button type="button" class="re-header__burger" id="reBurger" aria-label="<?= __('change_language') ?>" aria-expanded="false" aria-controls="reMainMenu">
                    <span></span><span></span><span></span>
                </button>

                <!-- CTA (desktop only) -->
                <a href="/contact.php" class="re-btn re-btn--primary re-header__cta">
                    <?= __('contact') ?>
                </a>
            </div>
        </nav>
    </header>
    <script>
    // Language switcher + theme toggle + mobile hamburger
    (function(){
      // Lang switcher
      const btn = document.querySelector('.lang-switcher__btn');
      const menu = document.querySelector('.lang-switcher__menu');
      if (btn && menu) {
        btn.addEventListener('click', (e) => { e.stopPropagation(); menu.classList.toggle('is-open'); btn.setAttribute('aria-expanded', menu.classList.contains('is-open')); });
        document.addEventListener('click', () => { menu.classList.remove('is-open'); btn.setAttribute('aria-expanded', 'false'); });
        menu.addEventListener('click', (e) => e.stopPropagation());
      }

      // Theme toggle (persists in localStorage)
      const themeBtn = document.getElementById('reThemeToggle');
      const themeIcon = document.getElementById('reThemeIcon');
      const html = document.documentElement;
      const applyTheme = (theme) => {
        html.setAttribute('data-theme', theme);
        if (themeIcon) themeIcon.textContent = theme === 'dark' ? '🌙' : '☀️';
        try { localStorage.setItem('appnet-theme', theme); } catch(e) {}
      };
      // Init from storage or system pref
      let saved = null;
      try { saved = localStorage.getItem('appnet-theme'); } catch(e) {}
      if (!saved) {
        saved = (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) ? 'light' : 'dark';
      }
      applyTheme(saved);
      if (themeBtn) {
        themeBtn.addEventListener('click', () => {
          const cur = html.getAttribute('data-theme') || 'dark';
          applyTheme(cur === 'dark' ? 'light' : 'dark');
        });
      }

      // Mobile hamburger
      const burger = document.getElementById('reBurger');
      const mainMenu = document.getElementById('reMainMenu');
      if (burger && mainMenu) {
        burger.addEventListener('click', () => {
          const open = mainMenu.classList.toggle('is-mobile-open');
          burger.classList.toggle('is-active', open);
          burger.setAttribute('aria-expanded', open);
          document.body.style.overflow = open ? 'hidden' : '';
        });
      }
    })();
    </script>

    <main id="main-content">
<?php // Header ends here — page content goes next, then footer-reimagine.php closes main, body and html ?>
