<?php
// Configuración de idiomas disponibles
$available_languages = [
    'es' => [
        'code' => 'es',
        'name' => 'Español',
        'flag' => '🇪🇸',
        'file' => 'es.php'
    ],
    'en' => [
        'code' => 'en',
        'name' => 'English',
        'flag' => '🇬🇧',
        'file' => 'en.php'
    ],
    'fr' => [
        'code' => 'fr',
        'name' => 'Français',
        'flag' => '🇫🇷',
        'file' => 'fr.php'
    ],
    'it' => [
        'code' => 'it',
        'name' => 'Italiano',
        'flag' => '🇮🇹',
        'file' => 'it.php'
    ],
    'ro' => [
        'code' => 'ro',
        'name' => 'Română',
        'flag' => '🇷🇴',
        'file' => 'ro.php'
    ],
    'ar' => [
        'code' => 'ar',
        'name' => 'العربية',
        'flag' => '🇸🇦',
        'file' => 'ar.php',
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
?>
