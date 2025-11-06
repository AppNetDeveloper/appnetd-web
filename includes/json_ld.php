<?php
/**
 * Genera el marcado JSON-LD para Schema.org
 * Optimizado para SEO y GEO (Generative Engine Optimization)
 * Compatible con: Google, ChatGPT, Perplexity, Claude, y otros agentes IA
 */

// Obtener la URL base del sitio
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $host;

// Configuración AVANZADA de la organización - Optimizada para IA
$organization_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    '@id' => $base_url . '/#organization',
    'name' => 'AppNet Developer',
    'legalName' => 'AppNet Developer S.L.',
    'url' => $base_url,
    'logo' => [
        '@type' => 'ImageObject',
        'url' => $base_url . '/assets/img/logo/logo.png',
        'width' => '600',
        'height' => '60',
        'caption' => 'AppNet Developer - Soluciones IA e IoT Industrial'
    ],
    'image' => $base_url . '/assets/img/og-image.jpg',
    'description' => $available_languages[$current_lang]['site_description'],
    'slogan' => 'Transformamos negocios con IA e IoT Industrial',
    'foundingDate' => '2018',
    'numberOfEmployees' => [
        '@type' => 'QuantitativeValue',
        'value' => '15'
    ],
    'areaServed' => [
        ['@type' => 'Country', 'name' => 'España'],
        ['@type' => 'Country', 'name' => 'Portugal'],
        ['@type' => 'Country', 'name' => 'France'],
        ['@type' => 'Country', 'name' => 'Italy'],
        ['@type' => 'Country', 'name' => 'Romania'],
        ['@type' => 'Country', 'name' => 'Morocco']
    ],
    'sameAs' => [
        'https://www.facebook.com/appnetdeveloper',
        'https://twitter.com/appnetdev',
        'https://www.linkedin.com/company/appnet-developer',
        'https://www.youtube.com/@appnetdeveloper',
        'https://www.instagram.com/appnetdeveloper',
        'https://github.com/appnetdeveloper'
    ],
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'Calle Tecnología',
        'addressLocality' => 'Murcia',
        'addressRegion' => 'Región de Murcia',
        'postalCode' => '30001',
        'addressCountry' => 'ES'
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => '37.9922',
        'longitude' => '-1.1307'
    ],
    'contactPoint' => [
        [
            '@type' => 'ContactPoint',
            'telephone' => '+34-619-929-305',
            'contactType' => 'customer service',
            'email' => 'info@appnet.dev',
            'availableLanguage' => ['Spanish', 'English', 'French', 'Italian', 'Romanian', 'Arabic'],
            'areaServed' => 'ES',
            'contactOption' => 'TollFree',
            'hoursAvailable' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '09:00',
                'closes' => '18:00'
            ]
        ],
        [
            '@type' => 'ContactPoint',
            'telephone' => '+34-619-929-305',
            'contactType' => 'technical support',
            'email' => 'soporte@appnet.dev',
            'availableLanguage' => ['Spanish', 'English'],
            'contactOption' => '24/7 Emergency Support'
        ],
        [
            '@type' => 'ContactPoint',
            'telephone' => '+34-619-929-305',
            'contactType' => 'sales',
            'email' => 'ventas@appnet.dev',
            'availableLanguage' => ['Spanish', 'English', 'French', 'Italian']
        ]
    ],
    'aggregateRating' => [
        '@type' => 'AggregateRating',
        'ratingValue' => '4.8',
        'reviewCount' => '127',
        'bestRating' => '5',
        'worstRating' => '1'
    ],
    'knowsAbout' => [
        'Inteligencia Artificial',
        'Machine Learning',
        'Deep Learning',
        'IoT Industrial',
        'Automatización Industrial',
        'Desarrollo de Software',
        'Ciberseguridad',
        'Cloud Computing',
        'Big Data Analytics',
        'Computer Vision',
        'Natural Language Processing',
        'Edge Computing',
        'Industry 4.0'
    ],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Servicios de IA e IoT Industrial',
        'itemListElement' => [
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Soluciones de Inteligencia Artificial',
                    'description' => 'Desarrollo e implementación de sistemas de IA empresarial',
                    'provider' => ['@id' => $base_url . '/#organization']
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'IoT Industrial',
                    'description' => 'Soluciones de Internet de las Cosas para industria',
                    'provider' => ['@id' => $base_url . '/#organization']
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Desarrollo de Software a Medida',
                    'description' => 'Aplicaciones empresariales personalizadas',
                    'provider' => ['@id' => $base_url . '/#organization']
                ]
            ]
        ]
    ]
];

// Esquema para la página de inicio - Mejorado para GEO
$homepage_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    '@id' => $base_url . '/#website',
    'name' => $available_languages[$current_lang]['site_name'],
    'alternateName' => 'AppNet Developer',
    'url' => $base_url,
    'description' => $available_languages[$current_lang]['site_description'],
    'publisher' => ['@id' => $base_url . '/#organization'],
    'inLanguage' => $available_languages[$current_lang]['hreflang'],
    'potentialAction' => [
        '@type' => 'SearchAction',
        'target' => [
            '@type' => 'EntryPoint',
            'urlTemplate' => $base_url . '/search?q={search_term_string}'
        ],
        'query-input' => 'required name=search_term_string'
    ]
];

// Schema de WebPage mejorado para GEO
$webpage_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    '@id' => $base_url . $current_url . '#webpage',
    'url' => $base_url . $current_url,
    'name' => isset($page_title) ? $page_title : $available_languages[$current_lang]['site_name'],
    'description' => isset($page_description) ? $page_description : $available_languages[$current_lang]['site_description'],
    'publisher' => ['@id' => $base_url . '/#organization'],
    'inLanguage' => $available_languages[$current_lang]['hreflang'],
    'isPartOf' => ['@id' => $base_url . '/#website'],
    'datePublished' => date('c'),
    'dateModified' => date('c')
];

// FAQ Schema - Optimizado para agentes IA
$faq_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => '¿Qué es la Inteligencia Artificial Industrial?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'La Inteligencia Artificial Industrial es la aplicación de algoritmos de machine learning y deep learning en procesos industriales para optimizar la producción, predecir mantenimientos, mejorar la calidad y aumentar la eficiencia operativa. En AppNet Developer implementamos soluciones de IA que incluyen visión por computador, análisis predictivo y automatización inteligente.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Qué beneficios ofrece el IoT Industrial?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'El IoT Industrial permite monitoreo en tiempo real de equipos, optimización del consumo energético, mantenimiento predictivo, mejora en la seguridad laboral y toma de decisiones basada en datos. Nuestras soluciones IoT conectan sensores, PLCs y sistemas SCADA para crear fábricas inteligentes que reducen costes hasta un 40% y aumentan la productividad un 60%.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Cuánto tiempo tarda la implementación de un proyecto de IA?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'El tiempo de implementación varía según la complejidad del proyecto. Proyectos básicos pueden estar operativos en 4-6 semanas, mientras que soluciones empresariales completas pueden requerir 3-6 meses. Incluimos fase de análisis, desarrollo, pruebas, despliegue y formación del personal. Ofrecemos planes acelerados y soporte 24/7.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Qué tecnologías de IA utilizan?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Trabajamos con las tecnologías más avanzadas: TensorFlow, PyTorch, OpenCV para visión artificial, frameworks de NLP como BERT y GPT, sistemas de edge computing con ARM processors, integración con PLCs industriales Siemens/Allen-Bradley, y plataformas cloud (AWS, Azure, Google Cloud). Desarrollamos tanto modelos personalizados como implementamos soluciones con LLMs open-source.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Ofrecen soporte y mantenimiento?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Sí, ofrecemos contratos de mantenimiento con soporte 24/7, actualizaciones de software, monitoreo proactivo de sistemas, optimización continua de modelos de IA, y formación continua del equipo. Incluimos SLA con garantías de tiempo de respuesta y disponibilidad del 99.9%. Nuestro equipo técnico está disponible por teléfono, WhatsApp, Telegram y email.'
            ]
        ]
    ]
];

// Breadcrumb Schema - Para navegación estructurada
function generate_breadcrumb_schema($items) {
    global $base_url;

    $breadcrumb_items = [];
    $position = 1;

    foreach ($items as $name => $url) {
        $breadcrumb_items[] = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $name,
            'item' => $base_url . $url
        ];
        $position++;
    }

    return [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $breadcrumb_items
    ];
}

// Schema para artículos de blog - Optimizado para citabilidad por IA
function generate_article_schema($article_data) {
    global $base_url, $current_lang, $available_languages;

    return [
        '@context' => 'https://schema.org',
        '@type' => 'Article',
        'headline' => $article_data['title'],
        'description' => $article_data['description'],
        'image' => $article_data['image'],
        'datePublished' => $article_data['published'],
        'dateModified' => $article_data['modified'] ?? $article_data['published'],
        'author' => [
            '@type' => 'Organization',
            '@id' => $base_url . '/#organization',
            'name' => 'AppNet Developer'
        ],
        'publisher' => [
            '@type' => 'Organization',
            '@id' => $base_url . '/#organization',
            'name' => 'AppNet Developer',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $base_url . '/assets/img/logo/logo.png'
            ]
        ],
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => $article_data['url']
        ],
        'articleSection' => $article_data['category'] ?? 'Tecnología',
        'keywords' => $article_data['keywords'] ?? [],
        'inLanguage' => $available_languages[$current_lang]['hreflang'],
        'about' => $article_data['about'] ?? [],
        'citation' => $article_data['citations'] ?? []
    ];
}

// Schema para servicios específicos - Para mejor comprensión de IA
function generate_service_schema($service_data) {
    global $base_url;

    return [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => $service_data['url'] . '#service',
        'name' => $service_data['name'],
        'description' => $service_data['description'],
        'provider' => ['@id' => $base_url . '/#organization'],
        'areaServed' => [
            ['@type' => 'Country', 'name' => 'España'],
            ['@type' => 'Country', 'name' => 'Portugal'],
            ['@type' => 'Country', 'name' => 'France']
        ],
        'hasOfferCatalog' => [
            '@type' => 'OfferCatalog',
            'name' => $service_data['name'],
            'itemListElement' => array_map(function($feature) use ($base_url, $service_data) {
                return [
                    '@type' => 'Offer',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => $feature,
                        'provider' => ['@id' => $base_url . '/#organization']
                    ]
                ];
            }, $service_data['features'] ?? [])
        ],
        'offers' => [
            '@type' => 'Offer',
            'description' => $service_data['offer_description'] ?? '',
            'priceCurrency' => 'EUR',
            'availability' => 'https://schema.org/InStock',
            'availableAtOrFrom' => ['@id' => $base_url . '/#organization']
        ]
    ];
}

// Función para generar el JSON-LD
function generate_json_ld($schemas) {
    $output = '';
    foreach ($schemas as $schema) {
        $output .= '<script type="application/ld+json">' . "\n" .
                  json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . "\n" .
                  '</script>' . "\n";
    }
    return $output;
}

// Determinar qué esquemas incluir según la página
$schemas_to_include = [$organization_schema];
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$current_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';

// Añadir WebPage schema en todas las páginas
$schemas_to_include[] = $webpage_schema;

if ($current_page === 'index') {
    $schemas_to_include[] = $homepage_schema;

    // Añadir FAQ en homepage - Los agentes IA ADORAN las FAQs
    $schemas_to_include[] = $faq_schema;

    // Añadir esquema de negocio local mejorado
    $local_business_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'ProfessionalService',
        '@id' => $base_url . '/#business',
        'name' => 'AppNet Developer',
        'alternateName' => 'AppNet Dev',
        'image' => [
            $base_url . '/assets/img/logo/logo.png',
            $base_url . '/assets/img/og-image.jpg',
            $base_url . '/assets/img/about/about1-img1.png'
        ],
        'url' => $base_url,
        'telephone' => '+34-619-929-305',
        'priceRange' => '€€€',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'Calle Tecnología',
            'addressLocality' => 'Murcia',
            'addressRegion' => 'Región de Murcia',
            'postalCode' => '30001',
            'addressCountry' => 'ES'
        ],
        'geo' => [
            '@type' => 'GeoCoordinates',
            'latitude' => 37.9922,
            'longitude' => -1.1307
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                'opens' => '09:00',
                'closes' => '18:00'
            ],
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Saturday', 'Sunday'],
                'opens' => '00:00',
                'closes' => '00:00',
                'description' => 'Soporte de emergencia 24/7 disponible'
            ]
        ],
        'sameAs' => [
            'https://www.facebook.com/appnetdeveloper',
            'https://twitter.com/appnetdev',
            'https://www.linkedin.com/company/appnet-developer',
            'https://www.youtube.com/@appnetdeveloper',
            'https://www.instagram.com/appnetdeveloper',
            'https://github.com/appnetdeveloper'
        ],
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.8',
            'reviewCount' => '127'
        ],
        'hasMap' => 'https://maps.google.com/?q=37.9922,-1.1307'
    ];
    $schemas_to_include[] = $local_business_schema;
}

// Para páginas de servicios
if (strpos($current_page, 'servicio-') === 0) {
    // Breadcrumb para servicios
    $breadcrumb = generate_breadcrumb_schema([
        'Inicio' => '/',
        'Servicios' => '/service.php',
        ucfirst(str_replace('-', ' ', substr($current_page, 9))) => $current_url
    ]);
    $schemas_to_include[] = $breadcrumb;
}

// Para páginas de blog
if (strpos($current_page, 'blog-') === 0 || $current_page === 'blog') {
    if ($current_page === 'blog') {
        // Lista de artículos de blog
        $blog_schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Blog',
            '@id' => $base_url . '/blog.php#blog',
            'name' => 'Blog de AppNet Developer',
            'description' => 'Artículos sobre IA, IoT Industrial, Desarrollo de Software y Tecnología',
            'url' => $base_url . '/blog.php',
            'publisher' => ['@id' => $base_url . '/#organization'],
            'inLanguage' => $available_languages[$current_lang]['hreflang']
        ];
        $schemas_to_include[] = $blog_schema;
    } else {
        // Artículo individual - Breadcrumb
        $breadcrumb = generate_breadcrumb_schema([
            'Inicio' => '/',
            'Blog' => '/blog.php',
            ucfirst(str_replace('-', ' ', substr($current_page, 5))) => $current_url
        ]);
        $schemas_to_include[] = $breadcrumb;
    }
}

// Para página de contacto
if ($current_page === 'contact') {
    $contact_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'ContactPage',
        '@id' => $base_url . '/contact.php#contactpage',
        'url' => $base_url . '/contact.php',
        'name' => 'Contacto - AppNet Developer',
        'description' => 'Contáctanos para soluciones de IA e IoT Industrial',
        'mainEntity' => ['@id' => $base_url . '/#organization']
    ];
    $schemas_to_include[] = $contact_schema;
}

// Para página de proyectos
if (strpos($current_page, 'proyecto-') === 0 || $current_page === 'proyectos') {
    $breadcrumb = generate_breadcrumb_schema([
        'Inicio' => '/',
        'Proyectos' => '/proyectos.php',
        ucfirst(str_replace('-', ' ', substr($current_page, 9))) => $current_url
    ]);
    $schemas_to_include[] = $breadcrumb;
}

// Generar el marcado JSON-LD
$json_ld_markup = generate_json_ld($schemas_to_include);
?>
