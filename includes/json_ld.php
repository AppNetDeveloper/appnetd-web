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

// FAQ Schema - Optimizado para agentes IA con información de BionicEye + ADRI
$faq_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => '¿Qué es BionicEyE + ADRI y qué planes de precios ofrecen?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'BionicEyE + ADRI es una Oficina Virtual Inteligente con 9 agentes IA especializados: ARIA (Supervisora), FELIX (Producción), HUGO (RRHH), IRIS (BI), LEO (Finanzas), MAX (Marketing), NOVA (CRM), SAM (Logística) y ZOE (Compliance). 3 planes disponibles: Cloud SaaS €350/mes sin inversión inicial, Híbrido desde €250/mes (servidor local + API cloud), On-Premise desde €5.000 único con 100% privacidad. Ahorro de €5.496/año comparado con ChatGPT Enterprise + Claude Pro + Gemini Advanced. Compliance GDPR y AI Act. Activación en 48h.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Puedo usar APIs externas como OpenAI, Claude o Gemini con ADRI?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Sí, absolutamente. ADRI es compatible con APIs externas de OpenAI, Claude (Anthropic), Google Gemini, Qwen, Mistral y cualquier API compatible con OpenAI. Tienes la flexibilidad de: 1) Usar 100% modelos locales (sin costes recurrentes), 2) Combinar modelos locales para datos sensibles y APIs cloud para tareas generales, 3) Usar solo APIs externas si prefieres. La arquitectura permite cambiar entre modos sin modificar código. Esto te da control total: privacidad absoluta cuando necesitas, y potencia de modelos cloud cuando lo requieres.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Qué hace el Vision Agent y cómo ahorra €65,000/año?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'El Vision Agent utiliza el modelo Qwen3-VL-30B para OCR avanzado multiidioma. Procesa automáticamente facturas, albaranes y contratos en 30 segundos (vs 5 minutos manual) con 98% de precisión (vs 92% humano). Para una empresa que procesa 200 facturas/día: reduce tiempo de 16.6 horas a 1.6 horas diarias, equivalente a 1.8 empleados a tiempo completo. Con salario promedio de €36,000/año, el ahorro es de €65,000 anuales. Además, reduce errores de entrada de datos en un 98%, evitando costosos errores contables.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Cómo funciona el WhatsApp Bot 24/7 sin aumentar plantilla?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'El Messaging Agent de ADRI se integra con WhatsApp Business API, Telegram y Email/IMAP para responder consultas de clientes en menos de 5 segundos, 24 horas al día, 7 días a la semana. Utiliza la base de conocimiento RAG (Retrieval-Augmented Generation) para responder con información actualizada de tu empresa. Escala automáticamente consultas complejas a operadores humanos cuando detecta que la IA no puede resolver el caso. En promedio, resuelve el 70% de consultas sin intervención humana. Para una empresa con 50 consultas/día, reduce la necesidad de 3 agentes de atención a 1 agente de backup, ahorrando €50,000/año. Además, aumenta ventas un 15% al responder fuera de horario laboral.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Qué diferencia a BionicEyE de un ERP tradicional con "IA añadida"?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'La diferencia clave es que BionicEyE no es un ERP tradicional sino una Oficina Virtual Inteligente con IA nativa. Los 9 agentes ADRI están especializados: ARIA coordina todo, FELIX gestiona producción, HUGO maneja RRHH con fichaje legal, IRIS proporciona Business Intelligence, LEO automatiza facturación VeriFactu, MAX genera contenido marketing, NOVA gestiona CRM multicanal (WhatsApp, Email, Telegram), SAM optimiza logística y ZOE asegura compliance GDPR y AI Act. 3 modalidades: Cloud, Híbrido u On-Premise. Compliance total con regulación europea AI Act.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Cuánto tiempo tarda la implementación de BionicEye + ADRI?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Implementación completa en 8 semanas: Semanas 1-2 (Análisis y diagnóstico de procesos actuales, auditoría IT/OT), Semanas 3-4 (Instalación de servidor, configuración ADRI, migración de datos), Semanas 5-6 (Formación del equipo en uso de plataforma y agentes IA), Semanas 7-8 (Go-Live con acompañamiento on-site, ajuste fino de modelos). Incluye PoC (Prueba de Concepto) de 30 días por €5,000 (deducible si contratas) para validar ROI con 2-3 casos de uso críticos antes de implementación completa. Demo gratuita de 45 minutos disponible para ver el sistema en acción.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Qué hardware necesito para ejecutar ADRI localmente?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Opciones de hardware según necesidades: SERVER BÁSICO (10-50 usuarios): AMD Ryzen AI Max+ 395, 128GB RAM, 2TB SSD, consumo 150W/hora, 1 tarea IA simultánea - €9,000 pago único. SERVER INTERMEDIO (50-100 usuarios): AMD Ryzen 16+ cores, 64GB RAM, 1-2x Radeon AI GPU (16-32GB VRAM), 2TB SSD, hasta 900W, 2-3 tareas IA simultáneas - desde €9,000 + €3,000 por GPU adicional. SERVER PRO (100+ usuarios): Configuración a medida con múltiples GPUs Radeon AI, hasta 10 tareas simultáneas, cluster con alta disponibilidad. Opción BYOH (Bring Your Own Hardware): Usa tu servidor existente con requisitos mínimos de 8+ cores, 32GB RAM, 500GB SSD, Ubuntu 22.04+ - solo €5,000 instalación + 1 año mantenimiento. Auditoría técnica previa gratuita.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Cómo escalo BionicEye + ADRI si mi empresa crece?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Escalabilidad sin modificaciones de código: Para ampliar capacidad solo agregas más nodos al cluster o más GPUs al servidor existente. No requiere cambios en el código, reconfiguración compleja ni downtime prolongado. ESCALADO VERTICAL: Agrega GPUs Radeon AI adicionales (€3,000 por GPU de 32GB VRAM) para aumentar tareas IA simultáneas. De 1 tarea a 10+ tareas solo conectando más GPUs - detección automática. ESCALADO HORIZONTAL: Agrega nodos al cluster BionicEye con balanceo de carga automático. Cada nodo puede tener diferente configuración GPU. Lemonade Server distribuye automáticamente las cargas de trabajo IA entre nodos disponibles. EJEMPLO: Empresa con 50 usuarios (1 servidor básico) crece a 200 usuarios: Opción A: Agrega 2-3 GPUs adicionales al servidor existente, Opción B: Agrega 1-2 nodos más al cluster. Ambas opciones mantienen el código sin cambios. La arquitectura multi-agente de ADRI permite escalado transparente: el Supervisor Agent distribuye automáticamente tareas entre capacidad disponible. Sin vendor lock-in - puedes combinar hardware propio con servidores nuestros.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Qué módulos de gestión incluye BionicEye además de la IA?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'BionicEye incluye 10 módulos de gestión completos integrados con IA: 1) RRHH (empleados, control horario con geolocalización, turnos, vacaciones, nóminas, evaluaciones de desempeño), 2) CRM y Ventas (clientes, pipeline, facturación electrónica VeriFactu, suscripciones, pagos), 3) Gestión de Producción (órdenes de producción, stock, inventarios, control de calidad QC, costes de manufactura), 4) Mantenimiento (activos con códigos QR, preventivo programado, órdenes de trabajo, historial, repuestos), 5) Gestión Documental (OCR automático con Vision Agent, búsqueda semántica RAG, versiones, firma digital), 6) Sistema de Tickets (multi-canal, SLA, priorización automática, escalado inteligente), 7) Seguridad (escaneo vulnerabilidades OWASP ZAP, auditoría accesos, roles/permisos, RGPD/LOPD, logs completos), 8) Redes Sociales (LinkedIn, Instagram, Facebook, Twitter, TikTok con programación y análisis), 9) Comunicaciones (WhatsApp Business, Telegram Bot, Email/IMAP, campañas automatizadas), 10) Dashboards y Reportes (tiempo real, informes ejecutivos automáticos, análisis predictivo, KPIs personalizables, exportación PDF/Excel).'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Cómo garantizan la privacidad y seguridad de mis datos con IA local?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Seguridad en 4 niveles: NIVEL 1 Infraestructura (100% local - datos nunca salen de tu servidor, Cloudflare Tunnel para protección DDoS y WAF, ZeroTier VPN mesh para acceso seguro, Nginx con TLS 1.3 obligatorio). NIVEL 2 Aplicación (autenticación multi-factor opcional, sistema de roles con principio de mínimo privilegio, auditoría completa con logs de todas las acciones, sanitización de inputs - prevención XSS/SQL Injection/CSRF). NIVEL 3 Datos (encriptación AES-256 en reposo para datos sensibles, TLS 1.3 en tránsito, backups automáticos diarios con retención configurable, anonimización para testing/desarrollo). NIVEL 4 IA (modelos locales sin envío a OpenAI/Google, permisos granulares - cada agente solo accede a lo necesario, auditoría de decisiones - logs de acciones de agentes, rate limiting para prevención de abuso). Cumplimiento normativo: RGPD, LOPD, VeriFactu, ISO 27001 ready, OWASP Top 10 con escaneo automático continuo.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Ofrecen soporte y actualizaciones después de la implementación?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Sí, incluimos mantenimiento completo con: Soporte técnico 24/7 por teléfono +34 619929305, WhatsApp, Telegram y email con SLA de respuesta <2 horas para clientes premium. Actualizaciones de software gratuitas durante el período de mantenimiento (nuevos agentes IA sin coste adicional, mejoras de rendimiento, parches de seguridad). Monitoreo proactivo de sistemas con alertas automáticas. Optimización continua de modelos de IA basada en nuevos datos de producción. Formación online ilimitada para nuevos empleados. Informes mensuales de rendimiento y ROI. Garantías: 30 días devolución completa en PoC, SLA 99.9% uptime garantizado, respuesta <2 horas (premium). Opciones de mantenimiento: Opción A: €90/mes (mantenimiento software + servidor básico), Opción B: €15,000/año (20% del valor de licencias para licencia perpetua). Incluido en precio de servidor con pago único el primer año.'
            ]
        ]
    ]
];

// People Also Ask Schema - Para búsquedas relacionadas y AIO
$people_also_ask_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'name' => 'Preguntas Relacionadas sobre IA Local vs Cloud y BionicEye',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => '¿Es BionicEye compatible con mis sistemas ERP actuales como SAP u Oracle?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Sí, BionicEye ofrece integración bidireccional completa con SAP, Oracle, Microsoft Dynamics, Odoo y cualquier ERP mediante: 1) APIs REST/SOAP estándar, 2) Conectores ETL para sincronización automática de datos en tiempo real, 3) Webhooks para notificaciones de eventos, 4) Importación/exportación masiva CSV/Excel/XML/JSON. Migramos tus datos históricos (clientes, proveedores, facturas, empleados) sin interrumpir operaciones actuales. Además, BionicEye puede reemplazar módulos específicos de tu ERP existente (por ejemplo, sustituir solo el módulo de RRHH de SAP manteniendo integración con finanzas/ventas). Auditoría técnica previa GRATUITA para validar compatibilidad con tu infraestructura específica. Más de 50 integraciones documentadas disponibles.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Qué pasa si mi empresa crece y necesito más usuarios con BionicEye?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Escalabilidad sin costes ocultos, con precios transparentes: 1) Hasta 50 usuarios: incluido en licencia base (€9.000 servidor básico o €5.000 + €90/mes), 2) 51-100 usuarios: €2.000 adicionales pago único + upgrade servidor (AMD con más RAM/GPU), 3) 101-250 usuarios: €5.000 adicionales + arquitectura cluster con alta disponibilidad (99.99% uptime), 4) 250+ usuarios: arquitectura empresarial personalizada. NO cobramos por usuario/mes como OpenAI/Microsoft. Ejemplo real: Cliente empezó con 20 empleados, creció a 80 en 2 años, pagó solo €2.000 adicionales (vs €72.000/año que pagaría con OpenAI Enterprise a €60/usuario/mes). Downgrade también posible si reduces plantilla (devolvemos diferencia prorrateada). Migración entre planes sin downtime.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Puedo probar BionicEye antes de comprar o contratar?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Sí, ofrecemos 3 opciones de prueba sin compromiso: 1) DEMO GRATUITA 45 minutos: Videollamada con experto mostrando BionicEye en vivo, casos de uso de tu sector, cálculo ROI personalizado - Agenda en +34 619929305, 2) POC (Prueba de Concepto) 30 días: €5.000 (100% deducible si contratas). Implementamos 2-3 casos de uso críticos en TU infraestructura con TUS datos reales. Incluye instalación completa, formación equipo, y validación de resultados. Requisitos: servidor 8+ cores, 32GB RAM, Ubuntu 22.04+ o RHEL, 3) TRIAL LIMITADO desarrolladores: Versión demo con funcionalidades reducidas para testing técnico. Garantía 30 días devolución completa en PoC si no cumple expectativas (98% clientes continúan tras PoC). Auditoría técnica previa gratuita incluida.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿BionicEye funciona en otros idiomas además de español?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Sí, BionicEye es multiidioma nativo completo sin costes adicionales: 1) INTERFAZ: 6 idiomas disponibles (español, inglés, francés, italiano, rumano, árabe) con traducción completa de UI/menús/reportes, 2) AGENTES IA: Procesan 100+ idiomas automáticamente - Vision Agent OCR reconoce facturas en cualquier idioma (probado con chino, árabe, cirílico), Messaging Agent responde WhatsApp/Telegram en idioma del cliente detectando automáticamente, Web Search busca contenido multiidioma, 3) LLMS LOCALES: Modelos multiidioma incluidos (Qwen3-VL para visión 30+ idiomas, LLaMA-3/Mistral para texto 50+ idiomas), 4) BASE CONOCIMIENTO RAG: Indexa documentos PDF/Word/Excel en múltiples idiomas simultáneamente con búsqueda semántica cross-language. EJEMPLO REAL: Empresa logística con operaciones España-Francia-Marruecos usa interfaz español, procesa documentación francesa, y WhatsApp bot responde clientes en árabe/francés. OpenAI cobra tokens extra por idiomas no-inglés; BionicEye incluye todo sin coste adicional.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Cuánto tiempo tarda realmente la implementación completa de BionicEye?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Implementación completa garantizada en 8 semanas con cronograma detallado: SEMANAS 1-2 (Análisis): Auditoría procesos actuales, mapeo flujos de trabajo, identificación KPIs, definición casos de uso prioritarios, auditoría técnica IT/OT. Entregable: Documento análisis + arquitectura técnica. SEMANAS 3-4 (Instalación): Instalación servidor/cluster, configuración 9 agentes ADRI, migración datos desde sistemas actuales, integración APIs/ERPs existentes, configuración usuarios/permisos. Entregable: Sistema funcionando entorno staging. SEMANAS 5-6 (Formación): Capacitación administradores (8 horas), formación usuarios finales por departamento (4 horas/dept), documentación personalizada, creación SOPs específicos. Entregable: Equipo autónomo operando sistema. SEMANAS 7-8 (Go-Live): Despliegue producción con acompañamiento on-site 2 semanas, ajuste fino modelos IA con datos reales, optimización rendimiento, validación ROI vs objetivos. Entregable: Sistema productivo + informe ROI. INCLUYE: PoC previo 30 días (deducible), soporte 24/7 durante implementación, garantía cumplimiento plazo (penalizaciones si excedemos). Implementaciones express 4 semanas disponibles para casos simples (+20% coste).'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => '¿Qué diferencia a BionicEye de usar ChatGPT Enterprise o Microsoft Copilot?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'DIFERENCIAS CLAVE vs ChatGPT Enterprise/Microsoft Copilot: 1) PRIVACIDAD: BionicEye 100% local (datos NUNCA salen de tu servidor, RGPD/LOPD compliant automático) vs ChatGPT/Copilot (datos procesados en cloud OpenAI/Microsoft, riesgo compliance), 2) COSTES: BionicEye €9.000 pago único o €5.000+€90/mes (€0 recurrentes con opción perpetua) vs ChatGPT Enterprise €60/usuario/mes (€36.000/año para 50 usuarios) vs Copilot €30/usuario/mes, 3) FUNCIONALIDAD: BionicEye incluye 10 módulos ERP completos (RRHH, CRM, Producción, Tickets, etc) + 9 agentes IA especializados vs ChatGPT/Copilot solo chat genérico sin ERP, 4) DEPENDENCIA: BionicEye funciona 100% offline vs ChatGPT/Copilot requieren internet constante, 5) PERSONALIZACIÓN: BionicEye permite entrenar modelos con TUS datos privados vs ChatGPT/Copilot modelos genéricos sin customización profunda, 6) INTEGRACIÓN: BionicEye integración nativa con maquinaria IoT, PLCs industriales, básculas, cámaras vs ChatGPT/Copilot orientados solo a oficina. AHORRO COMPROBADO: Empresa 50 empleados ahorra €295.000/año vs ChatGPT Enterprise + implementa funcionalidades que ChatGPT no ofrece (OCR facturas, WhatsApp bot local, control producción IoT).'
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

    // Añadir People Also Ask - Para búsquedas relacionadas y GEO
    $schemas_to_include[] = $people_also_ask_schema;

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

    // ItemList schema para servicios - IA comprende mejor las listas estructuradas
    $services_itemlist_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'ItemList',
        'name' => 'Servicios de IA e IoT Industrial',
        'description' => 'Lista completa de soluciones tecnológicas avanzadas que ofrecemos',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Inteligencia Artificial y Machine Learning',
                'description' => 'Desarrollo de sistemas de IA empresarial con visión por computador, NLP, análisis predictivo y modelos personalizados. Incluye implementación de Large Language Models (LLM) propios, computer vision para control de calidad, y algoritmos de deep learning para optimización de procesos industriales.',
                'url' => $base_url . '/servicio-ia.php'
            ],
            [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Internet de las Cosas Industrial (IIoT)',
                'description' => 'Soluciones IoT para fábricas inteligentes con sensores industriales, edge computing, integración con PLCs Siemens/Allen-Bradley, monitoreo en tiempo real, y dashboards analíticos. Reducción de costes del 40% y aumento de productividad del 60%.',
                'url' => $base_url . '/servicio-iot-industrial.php'
            ],
            [
                '@type' => 'ListItem',
                'position' => 3,
                'name' => 'Desarrollo de Software a Medida',
                'description' => 'Aplicaciones empresariales personalizadas con tecnologías modernas (React, Node.js, Python, .NET). Desde ERPs industriales hasta apps móviles de gestión. Integración con sistemas legacy y modernización de infraestructura IT.',
                'url' => $base_url . '/servicio-desarrollo-software.php'
            ],
            [
                '@type' => 'ListItem',
                'position' => 4,
                'name' => 'Ciberseguridad Industrial',
                'description' => 'Protección de sistemas SCADA, auditorías de seguridad, implementación de SOC (Security Operations Center), detección de amenazas con IA, y cumplimiento normativo (ISO 27001, NIS2).',
                'url' => $base_url . '/servicio-ciberseguridad.php'
            ],
            [
                '@type' => 'ListItem',
                'position' => 5,
                'name' => 'Business Intelligence y Analítica Empresarial',
                'description' => 'Dashboards interactivos, análisis de datos en tiempo real, data warehousing, y herramientas de reporting avanzado. Transformación de datos en decisiones estratégicas accionables.',
                'url' => $base_url . '/servicio-analitica-empresarial.php'
            ],
            [
                '@type' => 'ListItem',
                'position' => 6,
                'name' => 'Gestión de Personal y RRHH con IA',
                'description' => 'Sistemas de control de presencia, gestión de nóminas, evaluación de desempeño con IA, y plataformas de formación online. Automatización completa del departamento de RRHH.',
                'url' => $base_url . '/servicio-gestion-personal.php'
            ]
        ]
    ];
    $schemas_to_include[] = $services_itemlist_schema;

    // VideoObject schema para el demo - Las IA indexan contenido multimedia
    $video_demo_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'VideoObject',
        'name' => 'Demo de Soluciones IA e IoT Industrial - AppNet Developer',
        'description' => 'Demostración práctica de nuestras soluciones de Inteligencia Artificial e Internet de las Cosas aplicadas a la industria. Casos de uso reales, implementaciones exitosas y resultados medibles.',
        'thumbnailUrl' => $base_url . '/assets/img/hero/AppNetDeveloper-1.webp',
        'uploadDate' => '2024-01-15T08:00:00Z',
        'duration' => 'PT5M30S',
        'contentUrl' => 'https://www.youtube.com/watch?v=kcfs1-ryKWE',
        'embedUrl' => 'https://www.youtube.com/embed/kcfs1-ryKWE',
        'publisher' => ['@id' => $base_url . '/#organization'],
        'inLanguage' => $available_languages[$current_lang]['hreflang']
    ];
    $schemas_to_include[] = $video_demo_schema;

    // HowTo schema - Las IA adoran procesos paso a paso
    $howto_implementation_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'HowTo',
        'name' => 'Cómo implementar IA e IoT en tu empresa industrial',
        'description' => 'Guía paso a paso del proceso de transformación digital industrial con IA e IoT. Desde el análisis inicial hasta la puesta en producción.',
        'image' => $base_url . '/assets/img/hero/hero2-main-img2.png',
        'totalTime' => 'P3M',
        'estimatedCost' => [
            '@type' => 'MonetaryAmount',
            'currency' => 'EUR',
            'value' => '5000'
        ],
        'supply' => [
            [
                '@type' => 'HowToSupply',
                'name' => 'Infraestructura IT existente'
            ],
            [
                '@type' => 'HowToSupply',
                'name' => 'Datos de producción históricos'
            ],
            [
                '@type' => 'HowToSupply',
                'name' => 'Acceso a sistemas industriales (PLCs, SCADA)'
            ]
        ],
        'tool' => [
            [
                '@type' => 'HowToTool',
                'name' => 'Plataforma de IA personalizada'
            ],
            [
                '@type' => 'HowToTool',
                'name' => 'Sensores IoT industriales'
            ],
            [
                '@type' => 'HowToTool',
                'name' => 'Dashboard de analítica'
            ]
        ],
        'step' => [
            [
                '@type' => 'HowToStep',
                'position' => 1,
                'name' => 'Análisis y Diagnóstico',
                'text' => 'Realizamos un análisis exhaustivo de tus procesos industriales actuales, identificamos oportunidades de mejora, puntos críticos y definimos KPIs objetivos. Incluye auditoría técnica de infraestructura IT y OT.',
                'url' => $base_url . '/service.php',
                'image' => $base_url . '/assets/img/about/about1-img1.png'
            ],
            [
                '@type' => 'HowToStep',
                'position' => 2,
                'name' => 'Diseño de Solución Personalizada',
                'text' => 'Diseñamos una arquitectura técnica adaptada a tus necesidades específicas. Seleccionamos las tecnologías óptimas (sensores IoT, modelos de IA, infraestructura cloud/edge) y creamos un roadmap de implementación detallado.',
                'url' => $base_url . '/service.php',
                'image' => $base_url . '/assets/img/about/about1-img2.png'
            ],
            [
                '@type' => 'HowToStep',
                'position' => 3,
                'name' => 'Desarrollo e Integración',
                'text' => 'Desarrollamos la solución completa: entrenamiento de modelos de IA, configuración de dispositivos IoT, desarrollo de interfaces de usuario, y integración con sistemas existentes (ERP, MES, SCADA). Testing exhaustivo en entorno controlado.',
                'url' => $base_url . '/service.php',
                'image' => $base_url . '/assets/img/hero/hero2-main-img2.png'
            ],
            [
                '@type' => 'HowToStep',
                'position' => 4,
                'name' => 'Despliegue y Formación',
                'text' => 'Implementamos la solución en producción con mínima interrupción operativa. Formamos a tu equipo en el uso de las herramientas, configuramos alertas y monitoreo 24/7. Período de acompañamiento y ajuste fino.',
                'url' => $base_url . '/contact.php'
            ],
            [
                '@type' => 'HowToStep',
                'position' => 5,
                'name' => 'Soporte y Optimización Continua',
                'text' => 'Ofrecemos soporte técnico 24/7, mantenimiento preventivo, actualizaciones de software, y optimización continua de modelos de IA basada en nuevos datos. Informes mensuales de rendimiento y ROI.',
                'url' => $base_url . '/contact.php'
            ]
        ]
    ];
    $schemas_to_include[] = $howto_implementation_schema;

    // Review/Testimonial schemas - Para credibilidad ante IA
    $reviews_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Product',
        '@id' => $base_url . '/#main-service',
        'name' => 'Soluciones de IA e IoT Industrial',
        'description' => 'Plataforma completa de transformación digital industrial con Inteligencia Artificial e Internet de las Cosas',
        'brand' => [
            '@type' => 'Brand',
            'name' => 'AppNet Developer'
        ],
        'offers' => [
            '@type' => 'AggregateOffer',
            'priceCurrency' => 'EUR',
            'lowPrice' => '5000',
            'highPrice' => '50000',
            'offerCount' => '3'
        ],
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.8',
            'reviewCount' => '127',
            'bestRating' => '5',
            'worstRating' => '1'
        ],
        'review' => [
            [
                '@type' => 'Review',
                'reviewRating' => [
                    '@type' => 'Rating',
                    'ratingValue' => '5',
                    'bestRating' => '5'
                ],
                'author' => [
                    '@type' => 'Person',
                    'name' => 'Director de Operaciones - Empresa Manufacturera'
                ],
                'reviewBody' => 'La implementación de IA para control de calidad ha transformado completamente nuestra producción. Detectamos defectos que antes pasaban desapercibidos y hemos reducido el desperdicio en un 35%. El sistema de visión por computador trabaja 24/7 sin fatiga. Inversión totalmente justificada.',
                'datePublished' => '2024-10-15'
            ],
            [
                '@type' => 'Review',
                'reviewRating' => [
                    '@type' => 'Rating',
                    'ratingValue' => '5',
                    'bestRating' => '5'
                ],
                'author' => [
                    '@type' => 'Person',
                    'name' => 'Jefe de Mantenimiento - Planta Industrial'
                ],
                'reviewBody' => 'El sistema de IoT con mantenimiento predictivo nos ha ahorrado cientos de miles de euros en paradas no planificadas. Los sensores detectan anomalías antes de que ocurran fallos críticos. Dashboard intuitivo que todo el equipo usa diariamente. Soporte técnico excelente.',
                'datePublished' => '2024-09-22'
            ],
            [
                '@type' => 'Review',
                'reviewRating' => [
                    '@type' => 'Rating',
                    'ratingValue' => '4.5',
                    'bestRating' => '5'
                ],
                'author' => [
                    '@type' => 'Person',
                    'name' => 'CTO - Empresa Logística'
                ],
                'reviewBody' => 'La automatización de nuestro almacén con IA y robots ha aumentado la eficiencia un 60%. Sistema de gestión inteligente que optimiza rutas y predice demanda. Integración perfecta con nuestro ERP. Equipo profesional y comprometido con el resultado.',
                'datePublished' => '2024-08-10'
            ]
        ]
    ];
    $schemas_to_include[] = $reviews_schema;

    // SoftwareApplication schema para las soluciones
    $software_platform_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'SoftwareApplication',
        'name' => 'AppNet AI Platform',
        'applicationCategory' => 'BusinessApplication',
        'applicationSubCategory' => 'Industrial AI & IoT Platform',
        'operatingSystem' => 'Web, Cloud, Edge Computing',
        'description' => 'Plataforma integral de Inteligencia Artificial e IoT para industria 4.0. Incluye módulos de visión artificial, mantenimiento predictivo, optimización de producción, análisis de datos en tiempo real y gestión empresarial inteligente.',
        'offers' => [
            [
                '@type' => 'Offer',
                'name' => 'Plan Esencial',
                'price' => '5000',
                'priceCurrency' => 'EUR',
                'priceSpecification' => [
                    [
                        '@type' => 'PriceSpecification',
                        'price' => '5000',
                        'priceCurrency' => 'EUR',
                        'description' => 'Implementación inicial'
                    ],
                    [
                        '@type' => 'PriceSpecification',
                        'price' => '99',
                        'priceCurrency' => 'EUR',
                        'billingIncrement' => 'monthly',
                        'description' => 'Mantenimiento mensual'
                    ]
                ],
                'availability' => 'https://schema.org/InStock',
                'validFrom' => '2024-01-01',
                'description' => 'Solución completa de IA e IoT para pequeñas y medianas empresas industriales'
            ],
            [
                '@type' => 'Offer',
                'name' => 'Plan Avanzado',
                'price' => '9000',
                'priceCurrency' => 'EUR',
                'priceSpecification' => [
                    [
                        '@type' => 'PriceSpecification',
                        'price' => '9000',
                        'priceCurrency' => 'EUR',
                        'description' => 'Implementación inicial'
                    ],
                    [
                        '@type' => 'PriceSpecification',
                        'price' => '199',
                        'priceCurrency' => 'EUR',
                        'billingIncrement' => 'monthly',
                        'description' => 'Mantenimiento mensual'
                    ]
                ],
                'availability' => 'https://schema.org/InStock',
                'validFrom' => '2024-01-01',
                'description' => 'Incluye todas las funcionalidades esenciales más LLM personalizado y análisis avanzado'
            ]
        ],
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.8',
            'reviewCount' => '127'
        ],
        'featureList' => [
            'Visión artificial con deep learning',
            'Análisis predictivo con machine learning',
            'IoT industrial con edge computing',
            'Dashboard de analítica en tiempo real',
            'Integración con PLCs y SCADA',
            'Mantenimiento predictivo',
            'Control de calidad automatizado',
            'LLM empresarial personalizado',
            'Soporte técnico 24/7',
            'API REST completa'
        ],
        'screenshot' => [
            $base_url . '/assets/img/hero/AppNetDeveloper-1.webp',
            $base_url . '/assets/img/about/about1-img1.png',
            $base_url . '/assets/img/about/about1-img2.png'
        ]
    ];
    $schemas_to_include[] = $software_platform_schema;

    // BionicEyE + ADRI Schema - Específico para el producto estrella
    $bioniceye_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'SoftwareApplication',
        'name' => 'BionicEyE + ADRI',
        'alternateName' => 'Bionic Eye Oficina Virtual Inteligente',
        'applicationCategory' => 'BusinessApplication',
        'applicationSubCategory' => 'AI Virtual Office & ERP',
        'operatingSystem' => 'Linux, Windows, Cloud, On-Premise',
        'description' => 'Oficina Virtual Inteligente con 9 agentes IA especializados (ADRI) que gestionan producción, RRHH, finanzas, marketing, logística y compliance. Incluye ARIA (Supervisora), FELIX (Producción), HUGO (RRHH), IRIS (BI), LEO (Finanzas), MAX (Marketing), NOVA (CRM), SAM (Logística) y ZOE (Compliance).',
        'softwareVersion' => '2.0',
        'offers' => [
            [
                '@type' => 'Offer',
                'name' => 'Plan Cloud SaaS',
                'price' => '350',
                'priceCurrency' => 'EUR',
                'billingIncrement' => 'monthly',
                'description' => 'Acceso completo en la nube sin inversión inicial. Incluye actualizaciones automáticas y soporte.',
                'availability' => 'https://schema.org/InStock'
            ],
            [
                '@type' => 'Offer',
                'name' => 'Plan Híbrido',
                'price' => '250',
                'priceCurrency' => 'EUR',
                'billingIncrement' => 'monthly',
                'description' => 'Servidor local para datos sensibles + API Cloud para inteligencia. Equilibrio entre privacidad y potencia.',
                'availability' => 'https://schema.org/InStock'
            ],
            [
                '@type' => 'Offer',
                'name' => 'Plan On-Premise',
                'price' => '5000',
                'priceCurrency' => 'EUR',
                'description' => 'Licencia perpetua con servidor local. 100% privacidad, sin dependencia de internet. Pago único.',
                'availability' => 'https://schema.org/InStock'
            ]
        ],
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => '4.9',
            'reviewCount' => '85',
            'bestRating' => '5',
            'worstRating' => '1'
        ],
        'featureList' => [
            '9 Agentes IA especializados (ADRI)',
            'ARIA: Supervisión y coordinación general',
            'FELIX: Gestión de producción y eficiencia',
            'HUGO: Recursos Humanos y control horario legal',
            'IRIS: Business Intelligence y análisis de datos',
            'LEO: Finanzas y facturación VeriFactu',
            'MAX: Marketing y generación de contenido',
            'NOVA: CRM omnicanal (WhatsApp, Telegram, Email)',
            'SAM: Logística y optimización de rutas',
            'ZOE: Compliance legal, GDPR y AI Act',
            'Privacidad total con opción On-Premise',
            'Integración con sistemas existentes'
        ],
        'screenshot' => [
            $base_url . '/assets/img/hero/AppNetDeveloper-1.webp',
            $base_url . '/assets/img/about/about1-img1.png'
        ],
        'author' => [
            '@type' => 'Organization',
            'name' => 'AppNet Developer',
            'url' => $base_url
        ]
    ];
    $schemas_to_include[] = $bioniceye_schema;
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
