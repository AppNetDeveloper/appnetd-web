<?php
// Configuración de idiomas disponibles
$available_languages = [
    'es' => [
        'code' => 'es',
        'name' => 'Español',
        'flag' => '🇪🇸',
        'file' => 'es.php',
        'hreflang' => 'es-ES',
        'locale' => 'es_ES',
        'site_name' => 'AppNet Developer',
        'site_description' => 'Soluciones tecnológicas avanzadas en IA, IoT y desarrollo de software personalizado',
        'twitter_site' => '@appnetdev',
        'fb_app_id' => ''
    ],
    'en' => [
        'code' => 'en',
        'name' => 'English',
        'flag' => '🇬🇧',
        'file' => 'en.php',
        'hreflang' => 'en-GB',
        'locale' => 'en_GB',
        'site_name' => 'AppNet Developer',
        'site_description' => 'Advanced technology solutions in AI, IoT and custom software development',
        'twitter_site' => '@appnetdev',
        'fb_app_id' => ''
    ],
    'fr' => [
        'code' => 'fr',
        'name' => 'Français',
        'flag' => '🇫🇷',
        'file' => 'fr.php',
        'hreflang' => 'fr-FR',
        'locale' => 'fr_FR',
        'site_name' => 'AppNet Developer',
        'site_description' => 'Solutions technologiques avancées en IA, IoT et développement de logiciels personnalisés',
        'twitter_site' => '@appnetdev',
        'fb_app_id' => ''
    ],
    'it' => [
        'code' => 'it',
        'name' => 'Italiano',
        'flag' => '🇮🇹',
        'file' => 'it.php',
        'hreflang' => 'it-IT',
        'locale' => 'it_IT',
        'site_name' => 'AppNet Developer',
        'site_description' => 'Soluzioni tecnologiche avanzate in IA, IoT e sviluppo software personalizzato',
        'twitter_site' => '@appnetdev',
        'fb_app_id' => ''
    ],
    'ro' => [
        'code' => 'ro',
        'name' => 'Română',
        'flag' => '🇷🇴',
        'file' => 'ro.php',
        'hreflang' => 'ro-RO',
        'locale' => 'ro_RO',
        'site_name' => 'AppNet Developer',
        'site_description' => 'Soluții tehnologice avansate în IA, IoT și dezvoltare software personalizată',
        'twitter_site' => '@appnetdev',
        'fb_app_id' => ''
    ],
    'ar' => [
        'code' => 'ar',
        'name' => 'العربية',
        'flag' => '🇸🇦',
        'file' => 'ar.php',
        'hreflang' => 'ar-SA',
        'locale' => 'ar_SA',
        'site_name' => 'AppNet Developer',
        'site_description' => 'حلول تكنولوجية متقدمة في الذكاء الاصطناعي وإنترنت الأشياء وتطوير البرمجيات المخصصة',
        'twitter_site' => '@appnetdev',
        'fb_app_id' => '',
        'rtl' => true
    ]
];

// Configuración por defecto
$default_language = 'es';

// Obtener el idioma actual de la cookie o usar el predeterminado
$current_lang = isset($_COOKIE['appnet_language']) ? $_COOKIE['appnet_language'] : $default_language;

// Validar que el idioma exista
if (!array_key_exists($current_lang, $available_languages)) {
    $current_lang = $default_language;
}

// Cargar el archivo de idioma actual
$lang_file = __DIR__ . '/' . $available_languages[$current_lang]['file'];
$translations = [];

if (file_exists($lang_file)) {
    $translations = include $lang_file;
}

// Función de traducción
function __($key) {
    global $translations;
    return isset($translations[$key]) ? $translations[$key] : $key;
}

// Función para cambiar el idioma
function change_language($lang) {
    global $available_languages;
    if (array_key_exists($lang, $available_languages)) {
        setcookie('appnet_language', $lang, time() + (86400 * 30 * 12), "/"); // 1 año de duración
        $_COOKIE['appnet_language'] = $lang;
        return true;
    }
    return false;
}

// Manejar cambio de idioma
if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $available_languages)) {
    change_language($_GET['lang']);
    // Redirigir a la misma página sin el parámetro de idioma
    $redirect_url = strtok($_SERVER['REQUEST_URI'], '?');
    header('Location: ' . $redirect_url);
    exit();
}

// Verificar si es la primera visita para mostrar el popup
$first_visit = !isset($_COOKIE['appnet_language']);

// Determinar el idioma actual
$current_lang = isset($_COOKIE['appnet_language']) && array_key_exists($_COOKIE['appnet_language'], $available_languages) 
    ? $_COOKIE['appnet_language'] 
    : $default_language;

// Cargar las traducciones del idioma actual
$translations = [];
$language_file = __DIR__ . '/' . $available_languages[$current_lang]['file'];
if (file_exists($language_file)) {
    $translations = include $language_file;
}

// Si no hay traducciones, cargar el idioma por defecto
if (empty($translations) && $current_lang !== $default_language) {
    $default_language_file = __DIR__ . '/' . $available_languages[$default_language]['file'];
    if (file_exists($default_language_file)) {
        $translations = include $default_language_file;
    }
}
?>
