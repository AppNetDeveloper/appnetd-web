<?php
// proxy.php

// --- Configuración ---
$nodeApiBaseUrl = 'http://localhost:3005'; // O la IP si Node.js está en otra máquina accesible por PHP

// --- Detectar si es una solicitud de media ---
$isMediaRequest = isset($_GET['mediaUrl']);

if ($isMediaRequest) {
    // --- Manejo de Solicitud de Media (GET) ---
    $mediaUrl = $_GET['mediaUrl'];

    // Validar que la URL parece pertenecer a nuestra API (simple check)
    if (strpos($mediaUrl, $nodeApiBaseUrl . '/media/') !== 0) {
        http_response_code(400);
        echo "URL de medio inválida o no permitida.";
        exit;
    }

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $mediaUrl,
        CURLOPT_RETURNTRANSFER => true, // Obtener el contenido para determinar el tipo
        CURLOPT_HEADER => false,        // No necesitamos cabeceras de la respuesta interna
        CURLOPT_FOLLOWLOCATION => true, // Seguir redirecciones si las hubiera
        CURLOPT_TIMEOUT => 30,
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
        error_log("Proxy Error (Media): La API devolvió $httpCode para $mediaUrl");
        echo "Error al obtener el medio desde la API (Code: $httpCode).";
        exit;
    }

    // Si todo ok, enviar el contenido con el tipo correcto
    if ($contentType) {
        header('Content-Type: ' . $contentType);
    } else {
        // Fallback si no se pudo determinar el tipo (menos ideal)
        header('Content-Type: application/octet-stream');
    }
    header('Content-Length: ' . strlen($mediaContent)); // Enviar tamaño
    // Opcional: Añadir cabeceras de caché si se desea
    // header('Cache-Control: max-age=3600'); // Cachear por 1 hora
    echo $mediaContent; // Enviar el contenido del archivo
    exit; // Terminar aquí para solicitudes de media

} else {
    // --- Manejo de Solicitud de API (POST JSON) ---
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
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => false,
        CURLOPT_CUSTOMREQUEST => $method,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Accept: application/json'
        ],
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
    ];

    if ($body !== null && $method !== 'GET' && $method !== 'DELETE') { // DELETE a veces no lleva cuerpo
        $options[CURLOPT_POSTFIELDS] = json_encode($body);
         // Asegurar que Content-Length se envíe correctamente para POST/PUT/etc con cuerpo
         $options[CURLOPT_HTTPHEADER][] = 'Content-Length: ' . strlen($options[CURLOPT_POSTFIELDS]);
    } else if ($method === 'DELETE' && $body !== null) {
         // Si es DELETE y tiene cuerpo (para delete-message)
         $options[CURLOPT_POSTFIELDS] = json_encode($body);
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
        unset($options[CURLOPT_HTTPHEADER][1]); // Quitar 'Accept: application/json'
    }


    curl_setopt_array($curl, $options);

    $response = curl_exec($curl); // $response será false si CURLOPT_RETURNTRANSFER es false
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $curlError = curl_error($curl);
    $contentType = curl_getinfo($curl, CURLINFO_CONTENT_TYPE); // Obtener content-type de la respuesta
    curl_close($curl);

    // Si fue una descarga API y no hubo error, salir.
    if ($isApiDownloadRequest && !$curlError) {
        exit;
    }

    // Si NO fue una descarga API, establecer Content-Type JSON
    if (!$isApiDownloadRequest) {
         header('Content-Type: application/json');
    } else if ($curlError || $httpCode >= 400) {
        // Si la descarga API falló, sí devolvemos JSON de error
         header('Content-Type: application/json');
    }
    // Si la descarga API tuvo éxito, no ponemos header aquí, cURL ya lo hizo.


    if ($curlError) {
        http_response_code(502);
        error_log("Proxy Error (API): No se pudo conectar a $targetUrl - $curlError");
        echo json_encode(['error' => "Error del proxy al contactar la API Node.js: " . $curlError]);
        exit;
    }

     // Si la API devolvió error, intentar devolver el error JSON
    if ($httpCode >= 400) {
        http_response_code($httpCode);
        $errorData = json_decode($response, true); // $response será el cuerpo del error si CURLOPT_RETURNTRANSFER era true
        if ($errorData && isset($errorData['error'])) {
            echo json_encode(['error' => $errorData['error']]);
        } else {
             // Si la descarga API falló, $response es false, mostrar error genérico
            echo json_encode(['error' => "La API Node.js devolvió un error HTTP $httpCode" . ($isApiDownloadRequest ? " al intentar descargar." : "")]);
        }
        exit;
    }

    // Si todo fue bien y NO es descarga, devolver respuesta JSON
    if (!$isApiDownloadRequest) {
        http_response_code($httpCode);
        echo $response;
    }
    // Si fue descarga exitosa, ya se envió la respuesta.
}

?>
