<?php
/**
 * Genera el marcado JSON-LD para Schema.org
 */

// Obtener la URL base del sitio
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $host;

// Configuración básica de la organización
$organization_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'AppNet Developer',
    'url' => $base_url,
    'logo' => $base_url . '/assets/img/logo/logo.png',
    'description' => $available_languages[$current_lang]['site_description'],
    'sameAs' => [
        'https://www.facebook.com/appnetdeveloper',
        'https://twitter.com/appnetdev',
        'https://www.linkedin.com/company/appnet-developer'
    ],
    'address' => [
        '@type' => 'PostalAddress',
        'addressLocality' => 'Murcia',
        'addressRegion' => 'Murcia',
        'addressCountry' => 'ES'
    ],
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+34 619 929 305',
        'contactType' => 'customer service',
        'email' => 'info@appnet.dev',
        'availableLanguage' => $available_languages[$current_lang]['hreflang']
    ]
];

// Esquema para la página de inicio
$homepage_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => $available_languages[$current_lang]['site_name'],
    'url' => $base_url,
    'potentialAction' => [
        '@type' => 'SearchAction',
        'target' => $base_url . '/search?q={search_term_string}',
        'query-input' => 'required name=search_term_string'
    ]
];

// Función para generar el JSON-LD
function generate_json_ld($schemas) {
    $output = '';
    foreach ($schemas as $schema) {
        $output .= '<script type="application/ld+json">' . 
                  json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . 
                  '</script>' . PHP_EOL;
    }
    return $output;
}

// Determinar qué esquemas incluir según la página
$schemas_to_include = [$organization_schema];
$current_page = basename($_SERVER['PHP_SELF'], '.php');

if ($current_page === 'index') {
    $schemas_to_include[] = $homepage_schema;
    
    // Añadir esquema de negocio local para la página de inicio
    $local_business_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'LocalBusiness',
        'name' => 'AppNet Developer',
        'image' => $base_url . '/assets/img/logo/logo.png',
        '@id' => $base_url . '/#business',
        'url' => $base_url,
        'telephone' => '+34 123 456 789',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Calle Ejemplo, 123',
            'addressLocality' => 'Madrid',
            'postalCode' => '28001',
            'addressCountry' => 'ES'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => 40.416775,
            'longitude' => -3.703790
        ],
        'openingHoursSpecification' => [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => [
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday'
            ],
            'opens' => '09:00',
            'closes' => '18:00'
        ],
        'sameAs' => [
            'https://www.facebook.com/appnetdeveloper',
            'https://twitter.com/appnetdev',
            'https://www.linkedin.com/company/appnet-developer'
        ]
    ];
    $schemas_to_include[] = $local_business_schema;
}

// Generar el marcado JSON-LD
$json_ld_markup = generate_json_ld($schemas_to_include);
?>
