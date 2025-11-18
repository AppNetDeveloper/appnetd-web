<?php
/**
 * Sitemap XML Dinámico Multilingüe
 * Optimizado para SEO y GEO (Generative Engine Optimization)
 * Compatible con: Google, Bing, ChatGPT, Perplexity, Claude, y otros agentes IA
 */

header('Content-Type: application/xml; charset=utf-8');

// Incluir configuración de idiomas
require_once __DIR__ . '/languages/config.php';

// Obtener la URL base del sitio
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $host;

// Páginas principales del sitio
$main_pages = [
    '' => [
        'priority' => '1.0',
        'changefreq' => 'daily',
        'lastmod' => date('Y-m-d')
    ],
    'index.php' => [
        'priority' => '1.0',
        'changefreq' => 'daily',
        'lastmod' => date('Y-m-d')
    ],
    'about.php' => [
        'priority' => '0.9',
        'changefreq' => 'monthly',
        'lastmod' => date('Y-m-d')
    ],
    'service.php' => [
        'priority' => '0.9',
        'changefreq' => 'weekly',
        'lastmod' => date('Y-m-d')
    ],
    'blog.php' => [
        'priority' => '0.8',
        'changefreq' => 'daily',
        'lastmod' => date('Y-m-d')
    ],
    'contact.php' => [
        'priority' => '0.8',
        'changefreq' => 'monthly',
        'lastmod' => date('Y-m-d')
    ],
    'proyectos.php' => [
        'priority' => '0.8',
        'changefreq' => 'weekly',
        'lastmod' => date('Y-m-d')
    ]
];

// Páginas de servicios
$service_pages = [
    'servicio-ia.php',
    'servicio-iot-industrial.php',
    'servicio-desarrollo-software.php',
    'servicio-ciberseguridad.php',
    'servicio-ia-empresarial.php',
    'servicio-gestion-personal.php',
    'servicio-comunicacion-automatizada.php',
    'servicio-analitica-empresarial.php',
    'servicio-control-produccion.php',
    'servicio-servidores.php',
    'servicio-aplicaciones-medida.php',
    'servicio-servidores-arm.php',
    'servicio-cameras-ia.php',
    'servicio-geolocalizacion.php',
    'servicio-integracion-maquinaria.php',
    'servicio-reconocimiento-facial.php',
    'servicio-iot.php'
];

// Páginas de blog
$blog_pages = [
    'blog-ia-revolucion-industrial.php',
    'blog-iot-industria.php',
    'blog-servidores-arm.php'
];

// Páginas de comparación SEO (alta prioridad)
$comparison_pages = [
    'comparacion-bioniceye-vs-openai.php',
    'comparacion-bioniceye-vs-copilot.php',
    'ia-local-vs-cloud.php'
];

// Páginas de proyectos
$project_pages = [
    'proyecto-automatizacion-industrial.php',
    'proyecto-eficiencia-energetica.php',
    'proyecto-ia-calidad.php',
    'proyecto-iot-industrial.php',
    'proyecto-logistica-automatizada.php',
    'proyecto-mantenimiento-predictivo.php'
];

// Páginas legales
$legal_pages = [
    'privacidad.php',
    'legal.php',
    'terminos.php',
    'cookies.php'
];

// Función para generar una URL de sitemap
function generate_url($loc, $priority = '0.8', $changefreq = 'weekly', $lastmod = null, $languages = []) {
    global $base_url, $available_languages;

    if ($lastmod === null) {
        $lastmod = date('Y-m-d');
    }

    $url = "  <url>\n";
    $url .= "    <loc>" . htmlspecialchars($base_url . '/' . $loc, ENT_XML1, 'UTF-8') . "</loc>\n";
    $url .= "    <lastmod>{$lastmod}</lastmod>\n";
    $url .= "    <changefreq>{$changefreq}</changefreq>\n";
    $url .= "    <priority>{$priority}</priority>\n";

    // Añadir alternativas de idioma (hreflang) - Usando parámetros de URL
    if (empty($languages)) {
        foreach ($available_languages as $lang_code => $lang_data) {
            // Usar parámetros ?lang= en lugar de subdirectorios
            $lang_url = $loc;
            if ($lang_code !== 'es') {
                $separator = strpos($loc, '?') !== false ? '&' : '?';
                $lang_url .= $separator . 'lang=' . $lang_code;
            }
            $url .= "    <xhtml:link rel=\"alternate\" hreflang=\"{$lang_data['hreflang']}\" href=\"" . htmlspecialchars($base_url . '/' . $lang_url, ENT_XML1, 'UTF-8') . "\" />\n";
        }
        // Añadir x-default
        $url .= "    <xhtml:link rel=\"alternate\" hreflang=\"x-default\" href=\"" . htmlspecialchars($base_url . '/' . $loc, ENT_XML1, 'UTF-8') . "\" />\n";
    }

    $url .= "  </url>\n";

    return $url;
}

// Iniciar el XML del sitemap
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
echo '        xmlns:xhtml="http://www.w3.org/1999/xhtml"' . "\n";
echo '        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"' . "\n";
echo '        xmlns:video="http://www.google.com/schemas/sitemap-video/1.1">' . "\n";

// Añadir páginas principales
foreach ($main_pages as $page => $data) {
    echo generate_url($page, $data['priority'], $data['changefreq'], $data['lastmod']);
}

// Añadir páginas de servicios
foreach ($service_pages as $page) {
    echo generate_url($page, '0.9', 'monthly', date('Y-m-d'));
}

// Añadir páginas de blog
foreach ($blog_pages as $page) {
    echo generate_url($page, '0.7', 'monthly', date('Y-m-d'));
}

// Añadir páginas de comparación (alta prioridad para SEO/AIO)
foreach ($comparison_pages as $page) {
    echo generate_url($page, '0.95', 'weekly', date('Y-m-d'));
}

// Añadir páginas de proyectos
foreach ($project_pages as $page) {
    echo generate_url($page, '0.7', 'monthly', date('Y-m-d'));
}

// Añadir páginas legales
foreach ($legal_pages as $page) {
    echo generate_url($page, '0.3', 'yearly', date('Y-m-d'));
}

echo '</urlset>';
?>