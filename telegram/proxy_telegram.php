<?php
// proxy_telegram.php

// --- Configuración ---
// URL base de tu API Node.js de Telegram (¡Asegúrate de que sea accesible desde donde corre PHP!)
$nodeApiBaseUrl = 'http://localhost:3006'; // Puerto por defecto para el servidor Telegram

// --- Detectar si es una solicitud de media (Descarga) ---
// El frontend añadirá ?media=true y la URL original en mediaUrl
$isMediaRequest = isset($_GET['media']) && $_GET['media'] === 'true' && isset($_GET['mediaUrl']);

if ($isMediaRequest) {
    // --- Manejo de Solicitud de Media (GET desde el frontend, GET al backend) ---
    $mediaUrl = $_GET['mediaUrl'];

    // Validar que la URL parece pertenecer a nuestra API de Telegram (simple check)
    // Adaptar si la estructura de URL de media es diferente en el servidor Telegram
    if (strpos($mediaUrl, $nodeApiBaseUrl) !== 0) {
        http_response_code(400);
        error_log("Proxy Error (Media): URL de medio inválida o no permitida: " . $mediaUrl);
        echo "URL de medio inválida o no permitida.";
        exit;
    }

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $mediaUrl,
        CURLOPT_RETURNTRANSFER => true, // Obtener el contenido para determinar el tipo
        CURLOPT_HEADER => false,        // No necesitamos cabeceras de la respuesta interna
        CURLOPT_FOLLOWLOCATION => true, // Seguir redirecciones si las hubiera
        CURLOPT_TIMEOUT => 60, // Aumentar timeout para descargas potencialmente grandes
        CURLOPT_SSL_VERIFYPEER => false, // Ignorar SSL (¡solo para desarrollo!)
        CURLOPT_SSL_VERIFYHOST => false,
    ]);

    $mediaContent = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $contentType = curl_getinfo($curl, CURLINFO_CONTENT_TYPE); // Obtener Content-Type
    $curlError = curl_error($curl);
    curl_close($curl);

    if ($curlError) {
        http_response_code(502); // Bad Gateway
        error_log("Proxy Error (Media): No se pudo obtener $mediaUrl - $curlError");
        echo "Error del proxy al obtener el medio.";
        exit;
    }

    if ($httpCode >= 400) {
        http_response_code($httpCode); // Replicar código de error
        error_log("Proxy Error (Media): La API de Telegram devolvió $httpCode para $mediaUrl");
        // Intentar devolver el error JSON si la API lo envió
        $errorBody = json_decode($mediaContent, true);
        if ($errorBody && isset($errorBody['error'])) {
             header('Content-Type: application/json'); // Asegurar que el error se envíe como JSON
             echo json_encode(['error' => "Error al obtener el medio desde la API: " . $errorBody['error'] . " (Code: $httpCode)"]);
        } else {
            echo "Error al obtener el medio desde la API (Code: $httpCode).";
        }
        exit;
    }

    // Si todo ok, enviar el contenido con el tipo correcto
    if ($contentType) {
        header('Content-Type: ' . $contentType);
    } else {
        // Fallback si no se pudo determinar el tipo (menos ideal)
        header('Content-Type: application/octet-stream');
    }
     // Intentar obtener nombre de archivo de la URL si es posible (para Content-Disposition)
     $filename = basename(parse_url($mediaUrl, PHP_URL_PATH));
     if (!$filename) $filename = 'downloaded_media'; // Nombre por defecto
     header('Content-Disposition: inline; filename="' . $filename . '"'); // inline para mostrar en navegador si es posible
    header('Content-Length: ' . strlen($mediaContent)); // Enviar tamaño
    // Opcional: Añadir cabeceras de caché si se desea
    // header('Cache-Control: max-age=3600'); // Cachear por 1 hora
    echo $mediaContent; // Enviar el contenido del archivo
    exit; // Terminar aquí para solicitudes de media

} else {
    // --- Manejo de Solicitud de API (POST JSON desde el frontend) ---
    $requestPayload = json_decode(file_get_contents('php://input'), true);

    if (!$requestPayload || empty($requestPayload['endpoint']) || empty($requestPayload['method'])) {
        header('Content-Type: application/json');
        http_response_code(400);
        echo json_encode(['error' => 'Solicitud inválida al proxy: faltan endpoint o method.']);
        exit;
    }

    $endpoint = $requestPayload['endpoint'];
    $method = strtoupper($requestPayload['method']);
    $body = isset($requestPayload['body']) ? $requestPayload['body'] : null;

    $targetUrl = $nodeApiBaseUrl . $endpoint;
    $curl = curl_init();

    $options = [
        CURLOPT_URL => $targetUrl,
        CURLOPT_RETURNTRANSFER => true, // Siempre obtener respuesta como string para API
        CURLOPT_HEADER => false,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json', // Asumimos que siempre enviamos/recibimos JSON
            'Accept: application/json'
        ],
        CURLOPT_SSL_VERIFYPEER => false, // Ignorar SSL (¡solo para desarrollo!)
        CURLOPT_SSL_VERIFYHOST => false,
    ];

    // Añadir cuerpo para métodos que lo requieran
    if ($body !== null && ($method === 'POST' || $method === 'PUT' || $method === 'DELETE')) { // DELETE puede tener cuerpo
        $options[CURLOPT_POSTFIELDS] = json_encode($body);
        // Asegurar Content-Length para estos métodos con cuerpo
        $options[CURLOPT_HTTPHEADER][] = 'Content-Length: ' . strlen($options[CURLOPT_POSTFIELDS]);
    }

    // --- Manejo especial para exportar CSV via API ---
    // El JS ahora llama a apiRequest normalmente, el proxy detecta la URL
    $isApiDownloadRequest = (strpos($endpoint, '/export-contacts/') !== false && $method === 'GET');

    if ($isApiDownloadRequest) {
        // Para descargas desde la API (CSV), queremos pasar la respuesta directamente
        $options[CURLOPT_RETURNTRANSFER] = false; // No retornar como string
        $options[CURLOPT_HEADER] = false;
        // PHP no establecerá Content-Type aquí, lo hará cURL directamente desde la API
        // Mantener 'Accept: application/json' puede ser necesario si la API devuelve error JSON
        // unset($options[CURLOPT_HTTPHEADER][1]); // Quitar 'Accept: application/json' si causa problemas
    }


    curl_setopt_array($curl, $options);

    $response = curl_exec($curl); // $response será false si CURLOPT_RETURNTRANSFER es false (descargas API)
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $curlError = curl_error($curl);
    $contentType = curl_getinfo($curl, CURLINFO_CONTENT_TYPE); // Obtener content-type de la respuesta
    curl_close($curl);

    // Si fue una descarga API y no hubo error, salir.
    if ($isApiDownloadRequest && !$curlError && $httpCode < 400) {
        // La respuesta ya se envió directamente por cURL
        exit;
    }

    // Establecer Content-Type JSON para todas las demás respuestas (éxito o error API)
    header('Content-Type: application/json');

    if ($curlError) {
        http_response_code(502); // Bad Gateway
        error_log("Proxy Error (API): No se pudo conectar a $targetUrl - $curlError");
        echo json_encode(['error' => "Error del proxy al contactar la API de Telegram: " . $curlError]);
        exit;
    }

     // Si la API de Telegram devolvió error
    if ($httpCode >= 400) {
        http_response_code($httpCode);
        // $response contendrá el cuerpo del error si CURLOPT_RETURNTRANSFER era true
        $errorData = json_decode($response, true);
        if ($errorData && isset($errorData['error'])) {
            echo json_encode(['error' => $errorData['error']]);
        } else {
            // Si la descarga API falló, $response es false.
            // O si la API devolvió error no JSON.
            echo json_encode(['error' => "La API de Telegram devolvió un error HTTP $httpCode" . ($isApiDownloadRequest ? " al intentar descargar." : "")]);
        }
        exit;
    }

    // Si todo fue bien y NO es descarga API, devolver respuesta JSON
    if (!$isApiDownloadRequest) {
        http_response_code($httpCode);
        echo $response; // Devolver la respuesta JSON tal cual
    }
    // Si fue descarga exitosa, ya se envió la respuesta.
}

?>
