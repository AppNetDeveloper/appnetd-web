<?php
/**
 * Configuración SEO para el sitio web
 * 
 * Este archivo contiene las configuraciones SEO para cada página del sitio.
 * Las configuraciones incluyen títulos, descripciones, palabras clave, etc.
 */

// Configuración SEO por defecto - Optimizada para AIO (AI Optimization)
$default_seo = [
    'home' => [
        'title' => __('home_page_title'),
        'description' => 'BionicEyE: Oficina Virtual Inteligente con 13 agentes IA especializados (ARIA, FELIX, HUGO, IRIS, LEO, MAX, NOVA, SAM, ZOE). 3 planes: Cloud €350/mes, Híbrido desde €250/mes, On-Premise desde €5.000. Ahorra €5.496/año vs ChatGPT Enterprise. Marketing automation, CRM multicanal WhatsApp/Email/Telegram, RRHH con fichaje legal, Facturación VeriFactu, Compliance GDPR y AI Act. Murcia, España.',
        'keywords' => 'alternativa OpenAI local, IA sin mensualidades, ERP con IA local, ahorro costes OpenAI, BionicEye ADRI, agentes IA privados, automatizar facturas OCR, WhatsApp bot 24/7 local, IA empresarial sin cloud, ROI 245% IA, pago único IA, sistema IA offline, RGPD IA local, eliminar gastos APIs IA, LLM privado empresa, visión artificial facturas, mantenimiento predictivo IA, IoT industrial IA, Industry 4.0 local, transformación digital sin cloud, agentes IA especializados',
        'image' => 'og-image.jpg'
    ],
    'about' => [
        'title' => __('about_us') . ' - ' . $available_languages[$current_lang]['site_name'],
        'description' => __('about_meta_description'),
        'keywords' => 'sobre nosotros, nuestra historia, equipo, misión, visión, valores',
        'image' => 'about-og.jpg'
    ],
    'services' => [
        'title' => __('our_services') . ' - ' . $available_languages[$current_lang]['site_name'],
        'description' => 'Reduce costes 60% y aumenta eficiencia 40% con BionicEyE: Oficina Virtual Inteligente con 13 agentes IA (ADRI). Cloud €350/mes, Híbrido €250/mes, On-Premise €5.000. Marketing automation, CRM multicanal, RRHH fichaje legal, Facturación VeriFactu, Compliance GDPR AI Act. Activación 48h. Murcia, España.',
        'keywords' => 'servicios IA empresarial, IoT industrial España, automatización sin cloud, ERP IA local, desarrollo software personalizado, OCR facturas automático, WhatsApp bot empresa, mantenimiento predictivo IoT, reducir costes IA, implementación IA rápida, ROI IA empresarial, visión artificial industrial, análisis datos BI, ciberseguridad RGPD, servidores AMD local, agentes IA especializados',
        'image' => 'services-og.jpg'
    ],
    'blog' => [
        'title' => __('blog') . ' - ' . $available_languages[$current_lang]['site_name'],
        'description' => __('blog_meta_description'),
        'keywords' => 'blog, artículos, noticias, tecnología, IA, IoT, desarrollo de software',
        'image' => 'blog-og.jpg'
    ],
    'contact' => [
        'title' => __('contact_us') . ' - ' . $available_languages[$current_lang]['site_name'],
        'description' => __('contact_meta_description'),
        'keywords' => 'contacto, información de contacto, soporte, consulta, cotización',
        'image' => 'contact-og.jpg'
    ]
];

// Obtener la configuración SEO para la página actual
function get_seo_config($page = 'home') {
    global $default_seo, $current_lang, $available_languages;
    
    // Si la página no existe, usar la configuración por defecto
    if (!isset($default_seo[$page])) {
        $page = 'home';
    }
    
    $config = $default_seo[$page];
    
    // Asegurarse de que la URL de la imagen sea completa
    if (isset($config['image']) && !filter_var($config['image'], FILTER_VALIDATE_URL)) {
        $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $host;
        $config['image'] = $base_url . '/assets/img/' . $config['image'];
    }
    
    return $config;
}

// Obtener la configuración SEO para la página actual
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$seo_config = get_seo_config($current_page);

// Establecer variables para usar en el header
$page_title = $seo_config['title'];
$meta_description = $seo_config['description'];
$meta_keywords = $seo_config['keywords'];
$og_image = $seo_config['image'];

// Si es una publicación de blog individual, sobrescribir con los datos de la publicación
if ($current_page === 'single-blog' && isset($post)) {
    $page_title = $post->title . ' - ' . $available_languages[$current_lang]['site_name'];
    $meta_description = !empty($post->meta_description) ? $post->meta_description : substr(strip_tags($post->content), 0, 160);
    $meta_keywords = !empty($post->meta_keywords) ? $post->meta_keywords : $meta_keywords;
    $og_image = !empty($post->featured_image) ? $post->featured_image : $og_image;
}
?>
