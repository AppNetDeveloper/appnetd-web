<?php
/**
 * Configuración SEO para el sitio web
 * 
 * Este archivo contiene las configuraciones SEO para cada página del sitio.
 * Las configuraciones incluyen títulos, descripciones, palabras clave, etc.
 */

// Configuración SEO por defecto
$default_seo = [
    'home' => [
        'title' => __('home_page_title'),
        'description' => __('home_meta_description'),
        'keywords' => 'IA, IoT, desarrollo de software, inteligencia artificial, internet de las cosas, desarrollo web, aplicaciones móviles, consultoría tecnológica',
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
        'description' => __('services_meta_description'),
        'keywords' => 'servicios, desarrollo web, aplicaciones móviles, IA, IoT, consultoría, soluciones tecnológicas',
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
        $base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
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
