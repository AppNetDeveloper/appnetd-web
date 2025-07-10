<!DOCTYPE html>
<html lang="es"> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz API Telegram</title> <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Estilos generales (similares a los anteriores) */
        body { font-family: 'Inter', sans-serif; }
        .message { max-width: 70%; padding: 8px 12px; margin-bottom: 8px; border-radius: 12px; word-wrap: break-word; }
        .message-sent { background-color: #EEFFDE; /* Verde claro Telegram */ align-self: flex-end; border-bottom-right-radius: 0; }
        .message-received { background-color: #FFFFFF; align-self: flex-start; border: 1px solid #E5E7EB; border-bottom-left-radius: 0; }
        .message-meta { font-size: 0.75rem; color: #6B7280; margin-top: 4px; text-align: right; }
        .message-media img, .message-media video, .message-media audio { max-width: 100%; height: auto; border-radius: 8px; margin-top: 5px; display: block; }
        .message-media a { display: inline-block; margin-top: 5px; color: #007bff; text-decoration: underline; }
        #messagesContainer { height: 500px; overflow-y: auto; display: flex; flex-direction: column; padding: 10px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; }
        #chatsList { max-height: 600px; overflow-y: auto; }
        #contactsList { max-height: 400px; overflow-y: auto; }
        #logMessages { max-height: 200px; overflow-y: auto; background-color: #f3f4f6; border: 1px solid #e5e7eb; padding: 8px; font-size: 0.875rem; border-radius: 8px; }
        .delete-btn { background-color: #ef4444; color: white; padding: 2px 6px; font-size: 0.75rem; border-radius: 4px; margin-left: 8px; cursor: pointer; transition: background-color 0.2s; }
        .delete-btn:hover { background-color: #dc2626; }
        .lang-btn.active { background-color: #3B82F6; /* blue-500 */ color: white; cursor: default; }
        .lang-btn:not(.active):hover { background-color: #DBEAFE; /* blue-100 */ }
        /* Ocultar/Mostrar secciones */
        .auth-section, #logoutSessionBtn, #main-content { display: none; }
        body.session-active .auth-section { display: none; }
        body.session-active #logoutSessionBtn { display: inline-block !important; }
        body.session-active #main-content { display: block !important; } /* Cambiado a block */
        body.needs-auth .auth-section { display: block !important; }
        body.needs-auth #logoutSessionBtn { display: none; }
        body.needs-auth #main-content { display: none; }
        /* Estilo para input file */
        input[type="file"] { padding: 0.5rem; border: 1px solid #d1d5db; border-radius: 0.375rem; background-color: white; cursor: pointer; }
        input[type="file"]::file-selector-button { padding: 0.5rem 1rem; margin-right: 0.5rem; background-color: #60a5fa; color: white; border: none; border-radius: 0.25rem; cursor: pointer; transition: background-color 0.2s; }
        input[type="file"]::file-selector-button:hover { background-color: #3b82f6; }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4 md:p-8"> <div class="container mx-auto max-w-6xl bg-white p-6 rounded-lg shadow-lg">

        <div class="flex justify-end mb-4 space-x-2">
            <button id="lang-es" data-lang="es" class="lang-btn px-3 py-1 border rounded-md text-sm font-medium">Español</button>
            <button id="lang-en" data-lang="en" class="lang-btn px-3 py-1 border rounded-md text-sm font-medium">English</button>
        </div>

        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800" data-translate-key="mainTitle">Interfaz API Telegram (PHP Proxy)</h1>

        <div class="mb-8 p-4 border rounded-lg bg-gray-50">
            <h2 class="text-xl font-semibold mb-4 text-gray-700" data-translate-key="sessionManagementTitle">Gestión de Sesión</h2>
             <div class="flex flex-col md:flex-row md:items-end gap-4 mb-4">
                <div class="flex-grow">
                    <label for="userId" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="userIdLabel">ID de Usuario (para sesión):</label>
                    <input type="text" id="userId" data-translate-key-placeholder="userIdPlaceholder" placeholder="Ej: mi_telegram_1" class="w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                 <button id="checkSessionBtn" data-translate-key="checkSessionBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Comprobar / Iniciar</button>
                 <button id="logoutSessionBtn" data-translate-key="logoutSessionBtn" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Cerrar Sesión</button>
                 <button id="listSessionsBtn" data-translate-key="listSessionsBtn" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Listar Sesiones Activas</button>
            </div>
            <div id="sessionStatusDiv" class="mt-2 text-sm text-gray-600"></div>
             <div id="sessionsList" class="mt-4 text-sm text-gray-600"></div>

            <div id="authSection" class="auth-section mt-4 pt-4 border-t border-gray-300">
                <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="authTitle">Autenticación Requerida</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="phoneNumber" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="phoneLabel">Número de Teléfono:</label>
                        <input type="tel" id="phoneNumber" data-translate-key-placeholder="phonePlaceholder" placeholder="+1234567890" class="w-full p-2 border border-gray-300 rounded-md">
                        <button id="requestCodeBtn" data-translate-key="requestCodeBtn" class="mt-2 w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-md">Solicitar Código</button>
                    </div>
                    <div>
                        <label for="authCode" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="codeLabel">Código de Verificación:</label>
                        <input type="text" id="authCode" data-translate-key-placeholder="codePlaceholder" placeholder="12345" class="w-full p-2 border border-gray-300 rounded-md">
                        <label for="authPassword" class="block text-sm font-medium text-gray-700 mb-1 mt-2" data-translate-key="passwordLabel">Contraseña (2FA, si aplica):</label>
                        <input type="password" id="authPassword" data-translate-key-placeholder="passwordPlaceholder" placeholder="Tu contraseña de 2FA" class="w-full p-2 border border-gray-300 rounded-md">
                        <button id="verifyCodeBtn" data-translate-key="verifyCodeBtn" class="mt-2 w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-md">Verificar Código</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="main-content">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                 <div class="p-4 border rounded-lg bg-gray-50 md:col-span-1">
                    <h2 class="text-xl font-semibold mb-4 text-gray-700" data-translate-key="chatsTitle">Chats</h2>
                    <button id="refreshChatsBtn" data-translate-key="refreshChatsBtn" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md mb-4 transition duration-150 ease-in-out">Actualizar Chats</button>
                    <div id="chatsList" class="space-y-2">
                        <p class="text-gray-500" data-translate-key="loadingChats">Cargando chats...</p>
                    </div>
                     <div class="mt-4 pt-4 border-t">
                         <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="deleteChatHistoryTitle">Borrar Historial Chat</h3>
                         <p class="text-xs text-gray-500 mb-2" data-translate-key="deleteChatHistoryDesc">Introduce el ID del chat (peer) cuyo historial quieres borrar.</p>
                        <input type="text" id="deleteChatPeerId" data-translate-key-placeholder="deleteChatPeerIdPlaceholder" placeholder="ID del chat (peer)" class="w-full p-2 border border-gray-300 rounded-md mb-2 text-sm">
                        <button id="deleteChatHistoryBtn" data-translate-key="deleteChatHistoryBtn" class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out text-sm">Borrar Historial</button>
                    </div>
                     <div class="mt-4 pt-4 border-t">
                         <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="leaveGroupTitle">Salir de Grupo/Canal</h3>
                         <p class="text-xs text-gray-500 mb-2" data-translate-key="leaveGroupDesc">Introduce el ID del grupo o canal del que quieres salir.</p>
                        <input type="text" id="leaveGroupId" data-translate-key-placeholder="leaveGroupIdPlaceholder" placeholder="ID del grupo/canal" class="w-full p-2 border border-gray-300 rounded-md mb-2 text-sm">
                        <button id="leaveGroupBtn" data-translate-key="leaveGroupBtn" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out text-sm">Salir del Grupo</button>
                    </div>
                </div>
                 <div class="p-4 border rounded-lg bg-white md:col-span-2">
                    <h2 class="text-xl font-semibold mb-4 text-gray-700">
                        <span data-translate-key="messagesTitle">Mensajes del Chat:</span>
                        <span id="currentChatName" class="font-normal" data-translate-key="noChatSelected">Ninguno seleccionado</span>
                     </h2>
                    <div id="messagesContainer" class="mb-4">
                        <p class="text-gray-500 text-center self-center" data-translate-key="messagesPlaceholder">Selecciona un chat para ver los mensajes.</p>
                    </div>
                    <div class="flex gap-2">
                        <input type="text" id="messageInput" data-translate-key-placeholder="messageInputPlaceholder" placeholder="Escribe tu mensaje..." class="flex-grow p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                        <button id="sendMessageBtn" data-translate-key="sendMessageBtn" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Enviar</button>
                    </div>
                     <div class="mt-4 pt-4 border-t">
                        <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="deleteMessageTitle">Eliminar Mensaje</h3>
                         <p class="text-xs text-gray-500 mb-2" data-translate-key="deleteMessageTelegramDesc">Introduce el ID del mensaje a eliminar (para todos).</p>
                        <div class="flex gap-2">
                            <input type="text" id="deleteMsgId" data-translate-key-placeholder="deleteMsgIdPlaceholder" placeholder="ID del Mensaje" class="flex-grow p-2 border border-gray-300 rounded-md text-sm">
                            <button id="deleteMessageBtn" data-translate-key="deleteMessageBtn" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out text-sm">Eliminar Mensaje</button>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="downloadMediaTitle">Descargar Media</h3>
                         <p class="text-xs text-gray-500 mb-2" data-translate-key="downloadMediaDesc">Introduce el ID del mensaje que contiene la media.</p>
                        <div class="flex gap-2">
                            <input type="text" id="downloadMediaMsgId" data-translate-key-placeholder="downloadMediaMsgIdPlaceholder" placeholder="ID del Mensaje con Media" class="flex-grow p-2 border border-gray-300 rounded-md text-sm">
                            <button id="downloadMediaBtn" data-translate-key="downloadMediaBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out text-sm">Descargar Media</button>
                        </div>
                    </div>
                     <div class="mt-4 pt-4 border-t">
                         <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="sendMediaTitle">Enviar Multimedia</h3>
                         <div class="mb-2">
                             <label for="mediaFile" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="selectFileLabel">Seleccionar Archivo:</label>
                             <input type="file" id="mediaFile" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                         </div>
                         <div class="mb-2">
                             <label for="mediaCaption" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="mediaCaptionLabel">Texto (Opcional):</label>
                             <input type="text" id="mediaCaption" data-translate-key-placeholder="mediaCaptionPlaceholder" placeholder="Descripción del archivo" class="w-full p-2 border border-gray-300 rounded-md">
                         </div>
                         <button id="sendMediaBtn" data-translate-key="sendMediaBtn" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Enviar Media</button>
                     </div>
                </div>
            </div>
            <div class="mb-8 p-4 border rounded-lg bg-gray-50">
                 <h2 class="text-xl font-semibold mb-4 text-gray-700" data-translate-key="contactManagementTitle">Gestión de Contactos</h2>
                 <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
                     <button id="getContactsBtn" data-translate-key="getContactsBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Obtener Contactos</button>
                     <button id="exportContactsBtn" data-translate-key="exportContactsBtn" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Exportar (CSV)</button>
                     <button id="showImportContactsBtn" data-translate-key="importContactsShowBtn" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Importar (JSON)</button>
                     </div>
                 <div id="contactsListContainer" class="mb-4 hidden">
                     <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="contactsListTitle">Lista de Contactos</h3>
                     <div id="contactsList" class="border rounded-md p-2 bg-white"></div>
                 </div>
                 <div id="searchContactsForm" class="mb-4 border-t pt-4">
                     <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="searchContactsTitle">Buscar Contactos</h3>
                     <div class="flex flex-col md:flex-row gap-2">
                         <input type="text" id="searchContactQuery" data-translate-key-placeholder="searchContactsPlaceholderTelegram" placeholder="Buscar por nombre, @usuario o teléfono" class="flex-grow p-2 border rounded-md">
                         <button id="searchContactBtn" data-translate-key="searchBtn" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md">Buscar</button>
                     </div>
                     <div id="searchContactsResults" class="mt-2 text-sm"></div>
                 </div>
                  <div id="importContactsForm" class="mb-4 border-t pt-4 hidden">
                     <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="importContactsTitle">Importar Contactos (JSON)</h3>
                      <p class="text-xs text-gray-500 mb-2" data-translate-key="importContactsDesc">Formato: [{"phone": "+1...", "first_name": "...", "last_name": "..."}, ...]</p>
                     <textarea id="importContactsJson" rows="5" data-translate-key-placeholder="importContactsPlaceholderTelegram" placeholder='[{"phone": "+123456", "first_name": "Nombre", "last_name": "Apellido"}, ...]' class="w-full p-2 border rounded-md mb-2"></textarea>
                     <button id="importContactsBtn" data-translate-key="importBtn" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded-md">Importar</button>
                 </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="p-4 border rounded-lg bg-gray-50">
                    <h2 class="text-xl font-semibold mb-4 text-gray-700" data-translate-key="createGroupTitle">Crear Grupo</h2>
                    <div class="mb-2">
                        <label for="groupSubject" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="groupSubjectLabel">Asunto del Grupo:</label>
                        <input type="text" id="groupSubject" data-translate-key-placeholder="groupSubjectPlaceholder" placeholder="Nombre del nuevo grupo" class="w-full p-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="groupParticipants" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="groupParticipantsLabelTelegram">Participantes (IDs de usuario separados por coma):</label>
                        <textarea id="groupParticipants" rows="3" data-translate-key-placeholder="groupParticipantsPlaceholderTelegram" placeholder="12345678, 87654321" class="w-full p-2 border border-gray-300 rounded-md"></textarea>
                    </div>
                    <button id="createGroupBtn" data-translate-key="createGroupBtn" class="w-full bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Crear Grupo</button>
                </div>
                <div class="p-4 border rounded-lg bg-gray-50">
                    <h2 class="text-xl font-semibold mb-4 text-gray-700" data-translate-key="forwardMessageTitle">Reenviar Mensaje</h2>
                     <p class="text-xs text-gray-500 mb-2" data-translate-key="forwardMessageDescTelegram">Necesitas ID del mensaje, ID del chat origen y ID del chat destino.</p>
                    <div class="mb-2">
                        <label for="forwardMessageId" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="forwardMessageIdLabel">ID del Mensaje a Reenviar:</label>
                        <input type="text" id="forwardMessageId" data-translate-key-placeholder="forwardMessageIdPlaceholder" placeholder="ID del mensaje original" class="w-full p-2 border border-gray-300 rounded-md">
                    </div>
                     <div class="mb-2">
                        <label for="forwardFromPeer" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="forwardFromPeerLabel">ID Chat Origen (Peer):</label>
                        <input type="text" id="forwardFromPeer" data-translate-key-placeholder="forwardFromPeerPlaceholder" placeholder="ID del chat origen" class="w-full p-2 border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="forwardToPeer" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="forwardToPeerLabel">ID Chat Destino (Peer):</label>
                        <input type="text" id="forwardToPeer" data-translate-key-placeholder="forwardToPeerPlaceholder" placeholder="ID del chat destino" class="w-full p-2 border border-gray-300 rounded-md">
                    </div>
                    <button id="forwardMessageBtn" data-translate-key="forwardMessageBtn" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Reenviar</button>
                </div>
            </div>
            <div class="mb-8 p-4 border rounded-lg bg-gray-50">
                 <h2 class="text-xl font-semibold mb-4 text-gray-700" data-translate-key="otherFunctionsTitle">Otras Funciones</h2>
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border-t md:border-t-0 md:border-r pr-6 pt-4 md:pt-0">
                         <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="autoresponderTitle">Configurar Autoresponder</h3>
                         <div class="flex flex-col md:flex-row gap-2 mb-2">
                             <input type="text" id="autoresponderKeyword" data-translate-key-placeholder="autoresponderKeywordPlaceholder" placeholder="Palabra Clave" class="flex-grow p-2 border rounded-md">
                             <input type="text" id="autoresponderResponse" data-translate-key-placeholder="autoresponderResponsePlaceholder" placeholder="Respuesta Automática" class="flex-grow p-2 border rounded-md">
                         </div>
                         <div class="flex gap-2">
                            <button id="setAutoresponderBtn" data-translate-key="saveRuleBtn" class="flex-1 bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Guardar Regla</button>
                            <button id="getAutoresponderRulesBtn" data-translate-key="showRulesBtn" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Mostrar Reglas</button>
                         </div>
                         <div id="autoresponderRulesList" class="mt-2 text-sm max-h-40 overflow-y-auto">
                             <p class="text-xs text-gray-500 mt-1" data-translate-key="autoresponderPlaceholder">Haz clic en "Mostrar Reglas" para ver la configuración actual.</p>
                         </div>
                     </div>
                     <div class="border-t pt-4 md:border-t-0">
                         <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="scheduleMessageTitle">Programar Mensaje</h3>
                         <div class="grid grid-cols-1 gap-2 mb-2">
                             <input type="text" id="schedulePeer" data-translate-key-placeholder="schedulePeerPlaceholder" placeholder="ID Chat/Peer Destino" class="p-2 border rounded-md">
                             <input type="text" id="scheduleMessage" data-translate-key-placeholder="scheduleMessagePlaceholder" placeholder="Mensaje" class="p-2 border rounded-md">
                             <input type="datetime-local" id="scheduleTime" data-translate-key-title="scheduleTimeTitle" title="Fecha y Hora de Envío" class="p-2 border rounded-md">
                         </div>
                         <button id="scheduleMessageBtn" data-translate-key="scheduleMessageBtn" class="w-full bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Programar</button>
                     </div>
                      <div class="border-t pt-4 col-span-1 md:col-span-2">
                         <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="searchMessagesTitle">Buscar Mensajes en Chat Actual</h3>
                         <div class="flex gap-2 mb-2">
                             <input type="text" id="searchMsgQuery" data-translate-key-placeholder="searchMsgQueryPlaceholder" placeholder="Texto a buscar en este chat" class="flex-grow p-2 border rounded-md text-sm">
                              <input type="number" id="searchMsgLimit" data-translate-key-placeholder="searchMsgLimitPlaceholder" placeholder="Límite (ej: 20)" class="w-24 p-2 border rounded-md text-sm">
                             <button id="searchMessagesBtn" data-translate-key="searchMessagesBtnShort" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Buscar</button>
                         </div>
                         <div id="searchMessagesResults" class="mt-2 text-sm max-h-40 overflow-y-scroll bg-white p-2 rounded border"></div>
                     </div>
                 </div>
            </div>
        </div>

        <div class="mt-8 p-4 border rounded-lg bg-gray-50">
            <h2 class="text-xl font-semibold mb-2 text-gray-700" data-translate-key="logTitle">Log</h2>
            <div id="logMessages" class="space-y-1"></div>
        </div>

    </div>

    <script>
        // --- Variables Globales ---
        let currentUserId = null;
        let currentPeerId = null;
        const proxyUrl = 'proxy_telegram.php';
        let chatUpdateInterval = null;
        let messageUpdateInterval = null;
        const CHAT_UPDATE_INTERVAL_MS = 20000;
        const MESSAGE_UPDATE_INTERVAL_MS = 10000;
        let currentLanguage = 'es';
        let currentPhoneCodeHash = null;
        const nodeApiBaseUrl = 'http://localhost:3006'; // *** Definir la URL base del Node.js aquí ***

        // --- Traducciones ---
        const translations = {
            // ... (Objeto translations completo como en la versión anterior) ...
             // General UI
            mainTitle: { es: "Interfaz API Telegram (PHP Proxy)", en: "Telegram API Interface (PHP Proxy)" },
            interfaceReady: { es: 'Interfaz lista. Introduce un ID de usuario y haz clic en "Comprobar / Iniciar".', en: 'Interface ready. Enter a User ID and click "Check / Start".' },
            loading: { es: "Cargando...", en: "Loading..." },
            error: { es: "Error", en: "Error" },
            success: { es: "Éxito", en: "Success" },
            info: { es: "Info", en: "Info" },
            yesOption: { es: "Sí", en: "Yes" },
            noOption: { es: "No", en: "No" },
            createBtn: { es: "Crear", en: "Create" },
            searchBtn: { es: "Buscar", en: "Search" },
            importBtn: { es: "Importar", en: "Import" },
            saveChangesBtn: { es: "Guardar Cambios", en: "Save Changes" },
            deleteBtn: { es: "Eliminar", en: "Delete" },
            downloadBtn: { es: "Descargar", en: "Download" }, // Added
            // Session & Auth
            sessionManagementTitle: { es: "Gestión de Sesión", en: "Session Management" },
            userIdLabel: { es: "ID de Usuario (para sesión):", en: "User ID (for session):" },
            userIdPlaceholder: { es: "Ej: mi_telegram_1", en: "E.g.: my_telegram_1" },
            checkSessionBtn: { es: "Comprobar / Iniciar", en: "Check / Start" },
            logoutSessionBtn: { es: "Cerrar Sesión", en: "Logout Session" },
            listSessionsBtn: { es: "Listar Sesiones Activas", en: "List Active Sessions" },
            authTitle: { es: "Autenticación Requerida", en: "Authentication Required" },
            phoneLabel: { es: "Número de Teléfono:", en: "Phone Number:" },
            phonePlaceholder: { es: "+1234567890", en: "+1234567890" },
            requestCodeBtn: { es: "Solicitar Código", en: "Request Code" },
            codeLabel: { es: "Código de Verificación:", en: "Verification Code:" },
            codePlaceholder: { es: "12345", en: "12345" },
            passwordLabel: { es: "Contraseña (2FA, si aplica):", en: "Password (2FA, if applicable):" },
            passwordPlaceholder: { es: "Tu contraseña de 2FA", en: "Your 2FA password" },
            verifyCodeBtn: { es: "Verificar Código", en: "Verify Code" },
            sessionStatus: { es: "Estado Sesión:", en: "Session Status:" },
            sessionValid: { es: "Validada", en: "Validated" },
            sessionInvalid: { es: "No Validada / Desconectada", en: "Not Validated / Disconnected" },
            sessionNeedsAuth: { es: "Necesita autenticación", en: "Needs authentication" },
            checkingSession: { es: "Comprobando estado de sesión para {userId}...", en: "Checking session status for {userId}..." },
            errorCheckingSession: { es: "Error comprobando sesión: {error}", en: "Error checking session: {error}" },
            requestCodeSent: { es: "Código solicitado para {phone}. Introduce el código recibido.", en: "Code requested for {phone}. Enter the received code." },
            errorRequestingCode: { es: "Error solicitando código: {error}", en: "Error requesting code: {error}" },
            verifyingCode: { es: "Verificando código...", en: "Verifying code..." },
            sessionVerified: { es: "Sesión iniciada y verificada para {userId}.", en: "Session started and verified for {userId}." },
            errorVerifyingCode: { es: "Error verificando código: {error}", en: "Error verifying code: {error}" },
            passwordNeededError: { es: "Se requiere contraseña (2FA). Inténtalo de nuevo introduciéndola.", en:"Password (2FA) required. Please try again entering it."}, // Added
            sessionsActive: { es: "Sesiones Activas:", en: "Active Sessions:" },
            noActiveSessions: { es: "No hay sesiones activas en el servidor.", en: "No active sessions on the server." },
            errorLoadingSessions: { es: "Error al cargar sesiones.", en: "Error loading sessions." },
            startingSession: { es: "Iniciando sesión: {userId}...", en: "Starting session: {userId}..." },
            startSessionRequestSent: { es: "Solicitud para iniciar {userId} enviada.", en: "Request to start {userId} sent." },
            errorStartingSession: { es: "Error al iniciar sesión {userId}: {error}", en: "Error starting session {userId}: {error}" },
            closingSession: { es: "Cerrando sesión: {userId}...", en: "Closing session: {userId}..." },
            confirmLogout: { es: "¿Seguro cerrar y eliminar sesión {userId}?", en: "Are you sure you want to close and delete session {userId}?" },
            sessionClosed: { es: "Sesión {userId} cerrada.", en: "Session {userId} closed." },
            errorClosingSession: { es: "Error al cerrar sesión {userId}: {error}", en: "Error closing session {userId}: {error}" },
            gettingQr: { es: "Obteniendo QR para {userId}...", en: "Getting QR for {userId}..." }, // Keep for WhatsApp compatibility if needed elsewhere
            qrReceived: { es: "Código QR recibido. Escanea para conectar.", en: "QR code received. Scan to connect." }, // Keep for WhatsApp compatibility
            waitingForQr: { es: "Esperando código QR o ya conectado...", en: "Waiting for QR code or already connected..." }, // Keep for WhatsApp compatibility
            qrNotGeneratedCheck: { es: "aún no se ha generado", en: "has not been generated yet" }, // Keep for WhatsApp compatibility
            possiblyConnected: { es: "Posiblemente conectado. Intentando cargar chats...", en: "Possibly connected. Trying to load chats..." },
            errorGettingQr: { es: "Error al obtener QR: {error}", en: "Error getting QR: {error}" }, // Keep for WhatsApp compatibility
            sessionNotStarted: { es: "La sesión podría no estar iniciada.", en: "Session might not be started." },
            errorQrFallback: { es: "Error QR, intentando cargar chats por si ya está conectado...", en: "QR error, trying to load chats in case already connected..." }, // Keep for WhatsApp compatibility
            listingSessions: { es: "Listando sesiones activas...", en: "Listing active sessions..." },
            activeSessionsObtained: { es: "Lista de sesiones activas obtenida.", en: "Active sessions list obtained." },
            noSessionsFound: { es: "No se encontraron sesiones activas.", en: "No active sessions found." },
            errorListingSessions: { es: "Error al listar sesiones: {error}", en: "Error listing sessions: {error}" },
            // Chats & Messages
            chatsTitle: { es: "Chats", en: "Chats" },
            refreshChatsBtn: { es: "Actualizar Chats", en: "Refresh Chats" },
            chatsPlaceholder: { es: "Inicia sesión para ver los chats.", en: "Log in to view chats." },
            deleteChatHistoryTitle: { es: "Borrar Historial Chat", en: "Delete Chat History" },
            deleteChatHistoryDesc: { es: "Introduce el ID del chat (peer) cuyo historial quieres borrar.", en: "Enter the chat ID (peer) whose history you want to delete." },
            deleteChatPeerIdPlaceholder: { es: "ID del chat (peer)", en: "Chat ID (peer)" },
            deleteChatHistoryBtn: { es: "Borrar Historial", en: "Delete History" },
            leaveGroupTitle: { es: "Salir de Grupo/Canal", en: "Leave Group/Channel" },
            leaveGroupDesc: { es: "Introduce el ID del grupo o canal del que quieres salir.", en: "Enter the ID of the group or channel you want to leave." },
            leaveGroupIdPlaceholder: { es: "ID del grupo/canal", en: "Group/Channel ID" },
            leaveGroupBtn: { es: "Salir del Grupo", en: "Leave Group" },
            messagesTitle: { es: "Mensajes del Chat:", en: "Chat Messages:" },
            noChatSelected: { es: "Ninguno seleccionado", en: "None selected" },
            messagesPlaceholder: { es: "Selecciona un chat para ver los mensajes.", en: "Select a chat to view messages." },
            messageInputPlaceholder: { es: "Escribe tu mensaje...", en: "Type your message..." },
            sendMessageBtn: { es: "Enviar", en: "Send" },
            deleteMessageTitle: { es: "Eliminar Mensaje", en: "Delete Message" },
            deleteMessageTelegramDesc: { es: "Introduce el ID del mensaje a eliminar (para todos).", en: "Enter the ID of the message to delete (for everyone)." },
            deleteMsgIdPlaceholder: { es: "ID del Mensaje", en: "Message ID" },
            deleteMessageBtn: { es: "Eliminar Mensaje", en: "Delete Message" },
            downloadMediaTitle: { es: "Descargar Media", en: "Download Media" },
            downloadMediaDesc: { es: "Introduce el ID del mensaje que contiene la media.", en: "Enter the ID of the message containing the media." },
            downloadMediaMsgIdPlaceholder: { es: "ID del Mensaje con Media", en: "Media Message ID" },
            downloadMediaBtn: { es: "Descargar Media", en: "Download Media" },
            gettingChats: { es: "Obteniendo chats para {userId}...", en: "Getting chats for {userId}..." },
            loadingChats: { es: "Cargando chats...", en: "Loading chats..." },
            chatsLoaded: { es: "{count} chats cargados.", en: "{count} chats loaded." },
            noChatsFound: { es: "No se encontraron chats.", en: "No chats found." },
            errorGettingChats: { es: "Error al obtener chats: {error}", en: "Error getting chats: {error}" },
            errorLoadingChats: { es: "Error al cargar chats.", en: "Error loading chats." },
            sessionNotConnectedCheck: { es: "no conectada", en: "not connected" }, // Adaptar si el mensaje de error cambia
            deletingChatHistory: { es: "Borrando historial del chat {peerId}...", en: "Deleting chat history for {peerId}..." },
            confirmDeleteHistory: { es: "¿Seguro que quieres borrar TODO el historial del chat {peerId}?", en: "Are you sure you want to delete ALL history for chat {peerId}?" },
            chatHistoryDeleted: { es: "Historial del chat {peerId} borrado.", en: "Chat history for {peerId} deleted." },
            errorDeletingHistory: { es: "Error borrando historial: {error}", en: "Error deleting history: {error}" },
            leavingGroup: { es: "Saliendo del grupo/canal {groupId}...", en: "Leaving group/channel {groupId}..." },
            confirmLeaveGroup: { es: "¿Seguro que quieres salir del grupo/canal {groupId}?", en: "Are you sure you want to leave group/channel {groupId}?" },
            leftGroup: { es: "Has salido del grupo/canal {groupId}.", en: "You have left group/channel {groupId}." },
            errorLeavingGroup: { es: "Error al salir del grupo: {error}", en: "Error leaving group: {error}" },
            gettingMessages: { es: "Obteniendo mensajes para {peerId}...", en: "Getting messages for {peerId}..." },
            loadingMessages: { es: "Cargando mensajes...", en: "Loading messages..." },
            messagesLoaded: { es: "Mensajes de {peerId} cargados.", en: "Messages from {peerId} loaded." },
            noMessagesFound: { es: "No hay mensajes en este chat.", en: "No messages in this chat." },
            errorGettingMessages: { es: "Error al obtener mensajes: {error}", en: "Error getting messages: {error}" },
            errorLoadingMessages: { es: "Error al cargar mensajes.", en: "Error loading messages." },
            sendingMessage: { es: "Enviando mensaje a {peerId}...", en: "Sending message to {peerId}..." },
            messageSent: { es: "Mensaje enviado.", en: "Message sent." },
            errorSendingMessage: { es: "Error al enviar mensaje: {error}", en: "Error sending message: {error}" },
            deletingMessage: { es: "Eliminando mensaje {messageId}...", en: "Deleting message {messageId}..." },
            confirmDeleteMessageTelegram: { es: "¿Seguro eliminar mensaje ID {messageId}?", en: "Are you sure you want to delete message ID {messageId}?" },
            messageDeleted: { es: "Mensaje {messageId} eliminado.", en: "Message {messageId} deleted." },
            errorDeletingMessage: { es: "Error eliminando mensaje: {error}", en: "Error deleting message: {error}" },
            downloadingMedia: { es: "Descargando media del mensaje {messageId}...", en: "Downloading media from message {messageId}..." },
            mediaDownloadStarted: { es: "Descarga iniciada (revisa las descargas del navegador).", en: "Download started (check browser downloads)." },
            errorDownloadingMedia: { es: "Error descargando media: {error}", en: "Error downloading media: {error}" },
            chatHistoryDeletedMsg: { es: "Historial del chat borrado.", en: "Chat history deleted." }, // Added
            leftGroupStatus: { es: "Has salido del grupo/canal.", en: "You have left the group/channel." }, // Added
            // Contacts
            contactManagementTitle: { es: "Gestión de Contactos", en: "Contact Management" },
            getContactsBtn: { es: "Obtener Contactos", en: "Get Contacts" },
            exportContactsBtn: { es: "Exportar (CSV)", en: "Export (CSV)" },
            importContactsShowBtn: { es: "Importar (JSON)", en: "Import (JSON)" },
            contactsListTitle: { es: "Lista de Contactos", en: "Contacts List" },
            searchContactsTitle: { es: "Buscar Contactos", en: "Search Contacts" },
            searchContactsPlaceholderTelegram: { es: "Buscar por nombre, @usuario o teléfono", en: "Search by name, @username or phone" },
            importContactsTitle: { es: "Importar Contactos (JSON)", en: "Import Contacts (JSON)" },
            importContactsDesc: { es: 'Formato: [{"phone": "+1...", "first_name": "...", "last_name": "..."}, ...]', en: 'Format: [{"phone": "+1...", "first_name": "...", "last_name": "..."}, ...]' },
            importContactsPlaceholderTelegram: { es: '[{"phone": "+123456", "first_name": "Nombre", "last_name": "Apellido"}, ...]', en: '[{"phone": "+123456", "first_name": "Name", "last_name": "Surname"}, ...]' },
            gettingContacts: { es: "Obteniendo contactos para {userId}...", en: "Getting contacts for {userId}..." },
            contactsLoaded: { es: "{count} contactos cargados.", en: "{count} contacts loaded." },
            noContactsFound: { es: "No se encontraron contactos.", en: "No contacts found." },
            errorGettingContacts: { es: "Error al obtener contactos: {error}", en: "Error getting contacts: {error}" },
            searchingContacts: { es: "Buscando contactos con \"{query}\"...", en: "Searching contacts with \"{query}\"..." },
            searching: { es: "Buscando...", en: "Searching..." },
            contactsFound: { es: "{count} contactos encontrados.", en: "{count} contacts found." },
            noMatchesFound: { es: "No se encontraron coincidencias.", en: "No matches found." },
            errorSearchingContacts: { es: "Error al buscar contactos: {error}", en: "Error searching contacts: {error}" },
            searchError: { es: "Error en la búsqueda.", en: "Search error." },
            exportingContacts: { es: "Exportando contactos de {userId}...", en: "Exporting contacts from {userId}..." },
            exportingContactsInfo: { es: "Intentando iniciar descarga CSV...", en: "Attempting to start CSV download..." },
            contactsExported: { es: "Contactos exportados a CSV.", en: "Contacts exported to CSV." },
            errorExportingContacts: { es: "Error al exportar contactos: {error}", en: "Error exporting contacts: {error}" },
            importingContacts: { es: "Importando {count} contactos...", en: "Importing {count} contacts..." },
            contactsImported: { es: "Contactos importados.", en: "Contacts imported." },
            errorImportingContacts: { es: "Error al importar contactos: {error}", en: "Error importing contacts: {error}" },
            // Groups & Forwarding
            createGroupTitle: { es: "Crear Grupo", en: "Create Group" },
            groupSubjectLabel: { es: "Asunto del Grupo:", en: "Group Subject:" },
            groupSubjectPlaceholder: { es: "Nombre del nuevo grupo", en: "New group name" },
            groupParticipantsLabelTelegram: { es: "Participantes (IDs de usuario separados por coma):", en: "Participants (User IDs separated by comma):" },
            groupParticipantsPlaceholderTelegram: { es: "12345678, 87654321", en: "12345678, 87654321" },
            createGroupBtn: { es: "Crear Grupo", en: "Create Group" },
            forwardMessageTitle: { es: "Reenviar Mensaje", en: "Forward Message" },
            forwardMessageDescTelegram: { es: "Necesitas ID del mensaje, ID del chat origen y ID del chat destino.", en: "You need message ID, source chat ID, and destination chat ID." },
            forwardMessageIdLabel: { es: "ID del Mensaje a Reenviar:", en: "Message ID to Forward:" },
            forwardMessageIdPlaceholder: { es: "ID del mensaje original", en: "Original message ID" },
            forwardFromPeerLabel: { es: "ID Chat Origen (Peer):", en: "Source Chat ID (Peer):" },
            forwardFromPeerPlaceholder: { es: "ID del chat origen", en: "Source chat ID" },
            forwardToPeerLabel: { es: "ID Chat Destino (Peer):", en: "Destination Chat ID (Peer):" },
            forwardToPeerPlaceholder: { es: "ID del chat destino", en: "Destination chat ID" },
            forwardMessageBtn: { es: "Reenviar", en: "Forward" },
            creatingGroup: { es: "Creando grupo \"{subject}\"...", en: "Creating group \"{subject}\"..." },
            groupCreated: { es: "Grupo \"{subject}\" creado.", en: "Group \"{subject}\" created." }, // Result might not have simple ID
            errorCreatingGroup: { es: "Error al crear grupo: {error}", en: "Error creating group: {error}" },
            forwardingMessage: { es: "Reenviando mensaje {messageId} de {fromPeer} a {toPeer}...", en: "Forwarding message {messageId} from {fromPeer} to {toPeer}..." },
            messageForwarded: { es: "Mensaje {messageId} reenviado.", en: "Message {messageId} forwarded." },
            errorForwardingMessage: { es: "Error al reenviar mensaje: {error}", en: "Error forwarding message: {error}" },
             // Multimedia (Send Media section added back)
            sendMediaTitle: { es: "Enviar Multimedia", en: "Send Media" },
            selectFileLabel: { es: "Seleccionar Archivo:", en: "Select File:" },
            mediaCaptionLabel: { es: "Texto (Opcional):", en: "Caption (Optional):" },
            mediaCaptionPlaceholder: { es: "Descripción del archivo", en: "File description" },
            sendMediaBtn: { es: "Enviar Media", en: "Send Media" },
            sendingMedia: { es: "Enviando media a {peerId}...", en: "Sending media to {peerId}..." },
            mediaSent: { es: "Media enviada a {peerId}.", en: "Media sent to {peerId}." },
            errorSendingMedia: { es: "Error enviando media: {error}", en: "Error sending media: {error}" },
            fileRequiredError: { es: "Por favor, selecciona un archivo.", en: "Please select a file." },
            // Other Functions
            otherFunctionsTitle: { es: "Otras Funciones", en: "Other Functions" },
            searchMessagesTitle: { es: "Buscar Mensajes en Chat Actual", en: "Search Messages in Current Chat" },
            searchMsgQueryPlaceholder: { es: "Texto a buscar en este chat", en: "Text to search in this chat" },
            searchMsgLimitPlaceholder: { es: "Límite (ej: 20)", en: "Limit (e.g., 20)" },
            searchMessagesBtnShort: { es: "Buscar", en: "Search" },
            autoresponderTitle: { es: "Configurar Autoresponder", en: "Configure Autoresponder" },
            autoresponderKeywordPlaceholder: { es: "Palabra Clave", en: "Keyword" },
            autoresponderResponsePlaceholder: { es: "Respuesta Automática", en: "Automatic Response" },
            saveRuleBtn: { es: "Guardar Regla", en: "Save Rule" },
            showRulesBtn: { es: "Mostrar Reglas", en: "Show Rules" },
            autoresponderPlaceholder: { es: 'Haz clic en "Mostrar Reglas" para ver la configuración actual.', en: 'Click "Show Rules" to view the current configuration.' },
            scheduleMessageTitle: { es: "Programar Mensaje", en: "Schedule Message" },
            schedulePeerPlaceholder: { es: "ID Chat/Peer Destino", en: "Destination Chat/Peer ID" },
            scheduleMessagePlaceholder: { es: "Mensaje", en: "Message" },
            scheduleTimeTitle: { es: "Fecha y Hora de Envío", en: "Send Date and Time" },
            scheduleMessageBtn: { es: "Programar", en: "Schedule" },
            searchingMessages: { es: "Buscando mensajes con \"{query}\" en {peerId}...", en: "Searching messages with \"{query}\" in {peerId}..." },
            messagesFound: { es: "{count} mensajes encontrados.", en: "{count} messages found." },
            noMessagesFoundCriteria: { es: "No se encontraron mensajes con esos criterios.", en: "No messages found with those criteria." },
            errorSearchingMessages: { es: "Error al buscar mensajes: {error}", en: "Error searching messages: {error}" },
            savingRule: { es: "Guardando regla: \"{keyword}\" -> \"{response}\"...", en: "Saving rule: \"{keyword}\" -> \"{response}\"..." },
            ruleSaved: { es: "Regla guardada.", en: "Rule saved." },
            errorSavingRule: { es: "Error guardar regla: {error}", en: "Error saving rule: {error}" },
            gettingRules: { es: "Obteniendo reglas de autoresponder para {userId}...", en: "Getting autoresponder rules for {userId}..." },
            rulesLoaded: { es: "Reglas de autoresponder cargadas.", en: "Autoresponder rules loaded." },
            errorGettingRules: { es: "Error al obtener reglas de autoresponder: {error}", en: "Error getting autoresponder rules: {error}" },
            errorLoadingRules: { es: "Error al cargar reglas.", en: "Error loading rules." },
            noRulesConfigured: { es: "No hay reglas configuradas para esta sesión.", en: "No rules configured for this session." },
            deletingRule: { es: "Eliminando regla de autoresponder para \"{keyword}\"...", en: "Deleting autoresponder rule for \"{keyword}\"..." },
            confirmDeleteRule: { es: "¿Estás seguro de eliminar la regla para la palabra clave \"{keyword}\"?", en: "Are you sure you want to delete the rule for the keyword \"{keyword}\"?" },
            ruleDeleted: { es: "Regla para \"{keyword}\" eliminada.", en: "Rule for \"{keyword}\" deleted." },
            errorDeletingRule: { es: "Error al eliminar regla: {error}", en: "Error deleting rule: {error}" },
            schedulingMessage: { es: "Programando mensaje para {peerId} a las {time}...", en: "Scheduling message for {peerId} at {time}..." },
            messageScheduled: { es: "Mensaje programado.", en: "Message scheduled." },
            errorSchedulingMessage: { es: "Error al programar mensaje: {error}", en: "Error scheduling message: {error}" },
            // Log
            logTitle: { es: "Log", en: "Log" },
            // General Errors/Info
            selectSessionError: { es: "Introduce un ID de usuario y comprueba el estado.", en: "Enter a User ID and check the status." },
            selectChatError: { es: "Selecciona un chat primero.", en: "Select a chat first." },
            invalidJsonError: { es: "Error en el formato JSON: {error}", en: "Error in JSON format: {error}" },
            jsonMustBeArrayError: { es: "El JSON debe ser un array de contactos.", en: "JSON must be an array of contacts." },
            jsonContactStructureError: { es: "Cada contacto en el JSON debe tener 'phone', 'first_name'.", en: "Each contact in JSON must have 'phone', 'first_name'." }, // Adaptado para Telegram
            pasteJsonError: { es: "Pega el JSON de contactos en el área de texto.", en: "Paste the contacts JSON in the text area." },
            searchQueryRequiredError: { es: "Introduce un término de búsqueda.", en: "Enter a search term." },
            subjectAndParticipantsRequiredError: { es: "Se requieren asunto y participantes (IDs).", en: "Subject and participants (IDs) are required." },
            validJidsRequiredError: { es: "Introduce al menos un ID de participante válido.", en: "Enter at least one valid participant ID." },
            validUserIdsRequiredError: { es: "Introduce al menos un ID de usuario participante válido.", en: "Enter at least one valid participant user ID." }, // Added
            forwardIdsRequiredError: { es: "Se requieren ID del mensaje, chat origen y chat destino.", en: "Message ID, source chat ID, and destination chat ID are required." },
            autoresponderFieldsRequiredError: { es: "Se requieren Palabra Clave y Respuesta.", en: "Keyword and Response are required." },
            invalidKeywordError: { es: "Keyword inválida para eliminar.", en: "Invalid keyword to delete." },
            scheduleFieldsRequiredError: { es: "Se requieren ID de Chat/Peer, Mensaje y Fecha/Hora.", en: "Chat/Peer ID, Message, and Date/Time are required." },
            invalidDateTimeError: { es: "Formato de fecha/hora inválido.", en: "Invalid date/time format." },
            sessionClosedStatus: { es: "Sesión cerrada.", en: "Session closed." },
            autoresponderPlaceholderLoggedOut: { es: "Inicia sesión para ver/configurar reglas.", en: "Log in to view/configure rules." },
            startSessionFirstError: { es: "Primero comprueba/inicia una sesión.", en: "First check/start a session." },
            qrNotGeneratedCheck: { es: "aún no se ha generado", en: "has not been generated yet" }, // Mantener por si acaso, aunque no se usa QR
            sessionNotConnectedCheck: { es: "no conectada", en: "not connected" },
            noMessages: { es: "No hay mensajes", en: "No messages" },
            unsupportedMessageType: { es: "Tipo de mensaje no soportado", en: "Unsupported message type" },
            imagePlaceholder: { es: "[Imagen]", en: "[Image]" },
            videoPlaceholder: { es: "[Video]", en: "[Video]" },
            documentPlaceholder: { es: "[Documento]", en: "[Document]" },
            stickerPlaceholder: { es: "[Sticker]", en: "[Sticker]" },
            audioPlaceholder: { es: "[Audio]", en: "[Audio]" },
            locationPlaceholder: { es: "[Ubicación]", en: "[Location]" },
            imageAlt: { es: "Imagen adjunta", en: "Attached image" },
            imageLoadError: { es: "Error al cargar imagen", en: "Error loading image" },
            videoLoadError: { es: "Error al cargar video", en: "Error loading video" },
            viewVideoLink: { es: "Ver Video", en: "View Video" },
            audioLoadError: { es: "Error al cargar audio", en: "Error loading audio" },
            downloadAudioLink: { es: "Descargar Audio", en: "Download Audio" },
            downloadDocumentLink: { es: "Descargar Documento ({fileName})", en: "Download Document ({fileName})" },
            stickerAlt: { es: "Sticker", en: "Sticker" },
            stickerLoadError: { es: "Error al cargar sticker", en: "Error loading sticker" },
            typeMessageError: { es: "Escribe un mensaje.", en: "Type a message." },
            sendingStatus: { es: "Enviando...", en: "Sending..." },
            deleteMessageFieldsError: { es: "Se requiere el ID del mensaje.", en: "Message ID is required." }, // Simplificado para Telegram
            deleteChatJidRequiredError: { es: "Introduce el ID del chat (peer) a eliminar.", en: "Enter the chat ID (peer) to delete." },
            invalidCsvResponseError: { es: "La respuesta del proxy no fue un archivo CSV válido.", en: "The proxy response was not a valid CSV file." },
            loadingRules: { es: "Cargando reglas...", en: "Loading rules..." },
            nonTextMessage: { es: "[Mensaje no textual]", en: "[Non-text message]" },
            fetchProxyError: { es: "Error de Fetch/Proxy: {error}", en: "Fetch/Proxy Error: {error}" },
            proxyErrorStatus: { es: "Error {status} desde el proxy", en: "Error {status} from proxy" },
            csvDataReceived: { es: "Datos CSV recibidos", en: "CSV Data Received" },
            userIdRequiredError: { es: "Introduce un ID de usuario.", en: "Enter a User ID." },
            phoneRequiredError: { es: "Se requiere el número de teléfono.", en: "Phone number is required." },
            codeRequiredError: { es: "Se requiere el código de verificación.", en: "Verification code is required." },
            authDataMissingError: { es: "No hay datos de autenticación previos (solicita el código primero).", en: "No previous authentication data found (request the code first)." },
            peerIdRequiredError: { es: "Se requiere el ID del chat (peer).", en: "Chat ID (peer) is required." },
            messageIdRequiredError: { es: "Se requiere el ID del mensaje.", en: "Message ID is required." },
            groupIdRequiredError: { es: "Se requiere el ID del grupo/canal.", en: "Group/Channel ID is required." }, // Added
            invalidRuleIdError: { es: "ID de regla inválido.", en: "Invalid rule ID." }, // Added
            confirmDeleteRuleById: { es: "¿Seguro eliminar regla ID {ruleId}?", en: "Are you sure you want to delete rule ID {ruleId}?" }, // Added
            deletingRuleById: { es: "Eliminando regla ID {ruleId}...", en: "Deleting rule ID {ruleId}..." }, // Added
            ruleDeletedById: { es: "Regla ID {ruleId} eliminada.", en: "Rule ID {ruleId} deleted." }, // Added
        };

        // --- Referencias a Elementos del DOM ---
        // *** Definir logMessagesDiv PRIMERO ***
        const logMessagesDiv = document.getElementById('logMessages');
        // ... (resto de referencias) ...
        const userIdInput = document.getElementById('userId');
        const checkSessionBtn = document.getElementById('checkSessionBtn');
        const logoutSessionBtn = document.getElementById('logoutSessionBtn');
        const listSessionsBtn = document.getElementById('listSessionsBtn');
        const sessionsListDiv = document.getElementById('sessionsList');
        const sessionStatusDiv = document.getElementById('sessionStatusDiv');
        const authSection = document.getElementById('authSection');
        const phoneNumberInput = document.getElementById('phoneNumber');
        const requestCodeBtn = document.getElementById('requestCodeBtn');
        const authCodeInput = document.getElementById('authCode');
        const authPasswordInput = document.getElementById('authPassword');
        const verifyCodeBtn = document.getElementById('verifyCodeBtn');
        const mainContentDiv = document.getElementById('main-content');
        const refreshChatsBtn = document.getElementById('refreshChatsBtn');
        const chatsListDiv = document.getElementById('chatsList');
        const messagesContainer = document.getElementById('messagesContainer');
        const messageInput = document.getElementById('messageInput');
        const sendMessageBtn = document.getElementById('sendMessageBtn');
        const currentChatNameSpan = document.getElementById('currentChatName');
        const deleteMessageBtn = document.getElementById('deleteMessageBtn');
        const deleteMsgIdInput = document.getElementById('deleteMsgId');
        const deleteChatHistoryBtn = document.getElementById('deleteChatHistoryBtn');
        const deleteChatPeerIdInput = document.getElementById('deleteChatPeerId');
        const leaveGroupBtn = document.getElementById('leaveGroupBtn');
        const leaveGroupIdInput = document.getElementById('leaveGroupId');
        const groupSubjectInput = document.getElementById('groupSubject');
        const groupParticipantsInput = document.getElementById('groupParticipants');
        const createGroupBtn = document.getElementById('createGroupBtn');
        const forwardMessageIdInput = document.getElementById('forwardMessageId');
        const forwardFromPeerInput = document.getElementById('forwardFromPeer');
        const forwardToPeerInput = document.getElementById('forwardToPeer');
        const forwardMessageBtn = document.getElementById('forwardMessageBtn');
        const getContactsBtn = document.getElementById('getContactsBtn');
        const contactsListContainer = document.getElementById('contactsListContainer');
        const contactsListDiv = document.getElementById('contactsList');
        const searchContactBtn = document.getElementById('searchContactBtn');
        const searchContactQueryInput = document.getElementById('searchContactQuery');
        const searchContactsResultsDiv = document.getElementById('searchContactsResults');
        const exportContactsBtn = document.getElementById('exportContactsBtn');
        const showImportContactsBtn = document.getElementById('showImportContactsBtn');
        const importContactsForm = document.getElementById('importContactsForm');
        const importContactsBtn = document.getElementById('importContactsBtn');
        const importContactsJsonInput = document.getElementById('importContactsJson');
        const downloadMediaBtn = document.getElementById('downloadMediaBtn');
        const downloadMediaMsgIdInput = document.getElementById('downloadMediaMsgId');
        const searchMessagesBtn = document.getElementById('searchMessagesBtn');
        const searchMsgQueryInput = document.getElementById('searchMsgQuery');
        const searchMsgLimitInput = document.getElementById('searchMsgLimit');
        const searchMessagesResultsDiv = document.getElementById('searchMessagesResults');
        const setAutoresponderBtn = document.getElementById('setAutoresponderBtn');
        const autoresponderKeywordInput = document.getElementById('autoresponderKeyword');
        const autoresponderResponseInput = document.getElementById('autoresponderResponse');
        const autoresponderRulesListDiv = document.getElementById('autoresponderRulesList');
        const getAutoresponderRulesBtn = document.getElementById('getAutoresponderRulesBtn');
        const scheduleMessageBtn = document.getElementById('scheduleMessageBtn');
        const schedulePeerInput = document.getElementById('schedulePeer');
        const scheduleMessageInput = document.getElementById('scheduleMessage');
        const scheduleTimeInput = document.getElementById('scheduleTime');
        const langEsBtn = document.getElementById('lang-es');
        const langEnBtn = document.getElementById('lang-en');
        const mediaFileInput = document.getElementById('mediaFile'); // Nuevo
        const mediaCaptionInput = document.getElementById('mediaCaption'); // Nuevo
        const sendMediaBtn = document.getElementById('sendMediaBtn'); // Nuevo


        // --- Funciones Auxiliares y API (Restauradas y adaptadas) ---
        // ... (Pegar aquí TODAS las funciones async/normales desde la versión anterior,
        //      asegurándose de que usen `translate()` para los logs y las variables correctas) ...
         function logMessage(messageKey, type = 'info', args = {}) {
             if (!logMessagesDiv) { console.error("logMessagesDiv no está definido!"); return; }
             let translatedMessage = messageKey;
             if (typeof messageKey === 'string' && translations[messageKey]) { translatedMessage = translate(messageKey, args); }
             else if (typeof messageKey === 'string') { translatedMessage = messageKey.replace(/\{(\w+)\}/g, (match, key) => args[key] !== undefined ? args[key] : match); }
             const p = document.createElement('p'); const timestamp = new Date().toLocaleTimeString(); p.textContent = `[${timestamp}] ${translatedMessage}`;
             if (type === 'error') p.className = 'text-red-600'; else if (type === 'success') p.className = 'text-green-600'; else p.className = 'text-gray-700';
             logMessagesDiv.appendChild(p); logMessagesDiv.scrollTop = logMessagesDiv.scrollHeight;
         }
         function translate(key, args = {}) {
             let text = translations[key]?.[currentLanguage] || translations[key]?.['es'] || `[${key}]`;
             text = text.replace(/\{(\w+)\}/g, (match, placeholderKey) => args[placeholderKey] !== undefined ? args[placeholderKey] : match);
             return text;
          }
         function formatTimestamp(unixTimestamp) {
             if (!unixTimestamp || typeof unixTimestamp !== 'number') return ''; const date = new Date(unixTimestamp * 1000);
             return date.toLocaleString(currentLanguage === 'en' ? 'en-US' : 'es-ES', { hour: '2-digit', minute: '2-digit', day: '2-digit', month: 'short' });
         }
         async function apiRequest(endpoint, method = 'GET', body = null) {
             const proxyRequestBody = { endpoint: endpoint, method: method, body: body };
             console.log(`Proxy Request: ${method} -> ${proxyUrl} -> ${endpoint} ${body ? JSON.stringify(body) : ''}`);
             try {
                 const response = await fetch(proxyUrl, { method: 'POST', headers: { 'Content-Type': 'application/json', }, body: JSON.stringify(proxyRequestBody) });
                 const contentType = response.headers.get("content-type");
                 if (contentType && contentType.includes("text/csv")) { logMessage('csvDataReceived', 'success'); return await response.text(); }
                 const responseData = await response.json();
                 if (!response.ok || responseData.error) { const errorMessage = responseData.error || translate('proxyErrorStatus', {status: response.status}); logMessage(translate('error') + `: ${errorMessage}`, 'error'); throw new Error(errorMessage); }
                 console.log(`Proxy Response ${response.status}: ${JSON.stringify(responseData)}`);
                 return responseData;
             } catch (error) {
                 logMessage('fetchProxyError', 'error', { error: error.message });
                 if (error instanceof SyntaxError) { console.error("Respuesta no JSON:", await response.text().catch(() => "")); }
                 throw error;
             }
         }
         function setLanguage(lang) {
             currentLanguage = lang; document.documentElement.lang = lang;
             langEsBtn.classList.toggle('active', lang === 'es'); langEnBtn.classList.toggle('active', lang === 'en');
             document.querySelectorAll('[data-translate-key]').forEach(element => { const key = element.getAttribute('data-translate-key'); element.textContent = translate(key); });
             document.querySelectorAll('[data-translate-key-placeholder]').forEach(element => { const key = element.getAttribute('data-translate-key-placeholder'); element.placeholder = translate(key); });
             document.querySelectorAll('[data-translate-key-title]').forEach(element => { const key = element.getAttribute('data-translate-key-title'); element.title = translate(key); });
             document.title = translate('mainTitle');
             if (chatsListDiv.querySelector('p')) chatsListDiv.querySelector('p').textContent = translate('chatsPlaceholder');
             if (messagesContainer.querySelector('p')) messagesContainer.querySelector('p').textContent = translate('messagesPlaceholder');
             if (autoresponderRulesListDiv.querySelector('p')) autoresponderRulesListDiv.querySelector('p').textContent = translate('autoresponderPlaceholder');
             if (currentChatNameSpan.dataset.translateKey === 'noChatSelected') currentChatNameSpan.textContent = translate('noChatSelected');
             if (currentUserId) { getChats(true); if (currentPeerId) getMessages(true); if (!autoresponderRulesListDiv.querySelector('p')) getAutoresponderRules(); }
         }
         function startAutoUpdate() {
              stopAutoUpdate(); if (!currentUserId) return; logMessage('startingAutoUpdate', 'info');
              chatUpdateInterval = setInterval(() => { if (currentUserId) { getChats(true); } else { stopAutoUpdate(); } }, CHAT_UPDATE_INTERVAL_MS);
              messageUpdateInterval = setInterval(() => { if (currentUserId && currentPeerId) { getMessages(true); } if (!currentUserId) { stopAutoUpdate(); } }, MESSAGE_UPDATE_INTERVAL_MS);
          }
         function stopAutoUpdate() {
             if (chatUpdateInterval) { clearInterval(chatUpdateInterval); chatUpdateInterval = null; logMessage('autoUpdateChatsStopped', 'info'); }
             if (messageUpdateInterval) { clearInterval(messageUpdateInterval); messageUpdateInterval = null; logMessage('autoUpdateMessagesStopped', 'info'); }
         }
         async function checkOrStartSession() {
            const uid = userIdInput.value.trim();
            if (!uid) { logMessage('userIdRequiredError', 'error'); return; }
            currentUserId = uid;
            logMessage('checkingSession', 'info', { userId: currentUserId });
            sessionStatusDiv.textContent = translate('loading');
            authSection.style.display = 'none';
            mainContentDiv.style.display = 'none';
            document.body.classList.remove('session-active', 'needs-auth');

            try {
                const data = await apiRequest(`/session-status/${currentUserId}`);
                if (data.isValidated) {
                    sessionStatusDiv.textContent = `${translate('sessionStatus')} ${translate('sessionValid')}`;
                    logMessage('sessionValid', 'success');
                    document.body.classList.add('session-active');
                    getChats();
                    startAutoUpdate();
                } else {
                    sessionStatusDiv.textContent = `${translate('sessionStatus')} ${translate('sessionNeedsAuth')}`;
                    logMessage('sessionNeedsAuth', 'info');
                    document.body.classList.add('needs-auth');
                    authSection.style.display = 'block';
                    stopAutoUpdate();
                }
            } catch (error) {
                if (error.message && error.message.toLowerCase().includes('not found')) {
                     sessionStatusDiv.textContent = `${translate('sessionStatus')} ${translate('sessionNeedsAuth')}`;
                     logMessage('sessionNeedsAuth', 'info');
                     document.body.classList.add('needs-auth');
                     authSection.style.display = 'block';
                } else {
                    logMessage('errorCheckingSession', 'error', { error: error.message });
                    sessionStatusDiv.textContent = `${translate('error')}: ${error.message}`;
                }
                 stopAutoUpdate();
            }
        }
        async function requestCode() {
            if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
            const phone = phoneNumberInput.value.trim();
            if (!phone) { logMessage('phoneRequiredError', 'error'); return; }
            logMessage('requestingCode', 'info', { phone: phone });
            try {
                const data = await apiRequest(`/request-code/${currentUserId}`, 'POST', { phone });
                currentPhoneCodeHash = data.phoneCodeHash;
                logMessage('requestCodeSent', 'success', { phone: phone });
            } catch (error) {
                logMessage('errorRequestingCode', 'error', { error: error.message });
                currentPhoneCodeHash = null;
            }
        }
        async function verifyCode() {
            if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
            const code = authCodeInput.value.trim();
            const password = authPasswordInput.value.trim();
            if (!code) { logMessage('codeRequiredError', 'error'); return; }
            if (!currentPhoneCodeHash) { logMessage('authDataMissingError', 'error'); return; }
            logMessage('verifyingCode', 'info');
            try {
                const body = { code, password: password || undefined };
                const data = await apiRequest(`/verify-code/${currentUserId}`, 'POST', body);
                logMessage('sessionVerified', 'success', { userId: currentUserId });
                authSection.style.display = 'none';
                document.body.classList.remove('needs-auth');
                document.body.classList.add('session-active');
                sessionStatusDiv.textContent = `${translate('sessionStatus')} ${translate('sessionValid')}`;
                currentPhoneCodeHash = null;
                authCodeInput.value = '';
                authPasswordInput.value = '';
                getChats();
                startAutoUpdate();
            } catch (error) {
                logMessage('errorVerifyingCode', 'error', { error: error.message });
                if (error.message && error.message.includes('PASSWORD_NEEDED')) {
                    logMessage('passwordNeededError', 'error');
                }
            }
        }
        async function logoutSession() {
             if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
             logMessage('closingSession', 'info', { userId: currentUserId });
             stopAutoUpdate();
             if (!confirm(translate('confirmLogout', { userId: currentUserId }))) return;
             try {
                const data = await apiRequest(`/logout/${currentUserId}`, 'POST');
                logMessage(data.message || translate('sessionClosed', { userId: currentUserId }), 'success');
                currentUserId = null; currentPeerId = null; userIdInput.value = '';
                document.body.classList.remove('session-active', 'needs-auth');
                sessionStatusDiv.textContent = '';
                chatsListDiv.innerHTML = `<p class="text-gray-500">${translate('sessionClosedStatus')}</p>`;
                messagesContainer.innerHTML = `<p class="text-gray-500 text-center self-center">${translate('sessionClosedStatus')}</p>`;
                currentChatNameSpan.textContent = translate('noChatSelected'); currentChatNameSpan.dataset.translateKey = 'noChatSelected';
                sessionsListDiv.innerHTML = ''; contactsListDiv.innerHTML = ''; contactsListContainer.classList.add('hidden');
                autoresponderRulesListDiv.innerHTML = `<p class="text-xs text-gray-500 mt-1">${translate('autoresponderPlaceholderLoggedOut')}</p>`;
            } catch (error) { logMessage('errorClosingSession', 'error', { userId: currentUserId, error: error.message }); }
        }
        async function listSessions() {
             logMessage('listingSessions', 'info');
             sessionsListDiv.innerHTML = `<p class="text-gray-500 italic">${translate('loading')}</p>`;
             try {
                const data = await apiRequest(`/active-sessions`);
                if (data.sessions && data.sessions.length > 0) {
                    const sessionInfo = data.sessions.map(s => `${s.userId} (${s.isConnected ? translate('sessionValid') : translate('sessionInvalid')})`).join(', ');
                    sessionsListDiv.innerHTML = `<strong>${translate('sessionsActive')}</strong> ${sessionInfo}`;
                     logMessage('activeSessionsObtained', 'success');
                } else {
                     sessionsListDiv.innerHTML = `<p class="text-gray-500">${translate('noActiveSessions')}</p>`;
                     logMessage('noSessionsFound', 'info');
                }
            } catch (error) {
                logMessage('errorListingSessions', 'error', { error: error.message });
                 sessionsListDiv.innerHTML = `<p class="text-red-500">${translate('errorLoadingSessions')}</p>`;
            }
        }
        async function getChats(isAutoUpdate = false) {
            if (!currentUserId) { if (!isAutoUpdate) logMessage('selectSessionError', 'error'); return; }
            if (!isAutoUpdate) { logMessage('gettingChats', 'info', { userId: currentUserId }); chatsListDiv.innerHTML = `<p class="text-gray-500 italic">${translate('loadingChats')}</p>`; }
            try {
                const data = await apiRequest(`/get-chat/${currentUserId}`);
                const shouldPreserveScroll = isAutoUpdate && chatsListDiv.children.length > 1; const currentScrollTop = shouldPreserveScroll ? chatsListDiv.scrollTop : 0;
                const previouslySelectedPeerId = currentPeerId; chatsListDiv.innerHTML = '';
                if (data.chats && data.chats.length > 0) {
                    data.chats.forEach(chat => {
                        const chatElement = document.createElement('div'); const isSelected = chat.id && chat.id.toString() === previouslySelectedPeerId;
                        chatElement.className = `p-3 border rounded-md bg-white hover:bg-gray-100 cursor-pointer transition ${isSelected ? 'bg-indigo-100 border-indigo-300' : ''}`;
                        chatElement.dataset.peerId = chat.id ? chat.id.toString() : ''; const name = chat.name || `ID: ${chat.id}`;
                        const type = chat.is_channel ? '(Canal)' : (chat.is_group ? '(Grupo)' : '(Usuario)');
                        chatElement.innerHTML = `<div class="flex justify-between items-center"><span class="font-semibold text-gray-800 truncate">${name}</span><span class="text-xs text-gray-500">${type}</span></div><p class="text-sm text-gray-600 truncate mt-1">ID: ${chat.id}</p>`;
                        chatElement.addEventListener('click', () => { document.querySelectorAll('#chatsList > div').forEach(el => el.classList.remove('bg-indigo-100', 'border-indigo-300')); chatElement.classList.add('bg-indigo-100', 'border-indigo-300'); currentPeerId = chat.id ? chat.id.toString() : null; currentChatNameSpan.textContent = name; currentChatNameSpan.removeAttribute('data-translate-key'); getMessages(); });
                        chatsListDiv.appendChild(chatElement);
                     });
                     if (!isAutoUpdate) logMessage('chatsLoaded', 'success', { count: data.chats.length });
                     if (shouldPreserveScroll) chatsListDiv.scrollTop = currentScrollTop;
                     if (!isAutoUpdate && !chatUpdateInterval) { startAutoUpdate(); }
                } else { chatsListDiv.innerHTML = `<p class="text-gray-500">${translate('noChatsFound')}</p>`; if (!isAutoUpdate) logMessage('noChatsFound', 'info'); stopAutoUpdate(); }
            } catch (error) {
                if (!isAutoUpdate){ logMessage('errorGettingChats', 'error', { error: error.message }); chatsListDiv.innerHTML = `<p class="text-red-500">${translate('errorLoadingChats')}</p>`; } else { console.warn(`Auto-update chats failed: ${error.message}`); }
                 if (error.message.includes(translate('sessionNotConnectedCheck'))) { stopAutoUpdate();}
            }
        }
        async function getMessages(isAutoUpdate = false) {
            if (!currentUserId || !currentPeerId) { if (!isAutoUpdate) logMessage('selectChatError', 'error'); return; }
            if (!isAutoUpdate) { logMessage('gettingMessages', 'info', { peerId: currentPeerId }); messagesContainer.innerHTML = `<p class="text-gray-500 text-center self-center italic">${translate('loadingMessages')}</p>`; }
            const isScrolledToBottom = messagesContainer.scrollHeight - messagesContainer.clientHeight <= messagesContainer.scrollTop + 1;
            try {
                const data = await apiRequest(`/get-messages/${currentUserId}/${currentPeerId}?limit=100`);
                 if (!isAutoUpdate || (data.messages && data.messages.length > 0)) { messagesContainer.innerHTML = ''; }
                 else if (isAutoUpdate && (!data.messages || data.messages.length === 0)) { return; }

                if (data.messages && data.messages.length > 0) {
                    data.messages.forEach(msg => {
                        const messageElement = document.createElement('div');
                        const isSent = msg.status === 'sent';
                        messageElement.className = `message ${isSent ? 'message-sent' : 'message-received'}`;
                        let contentHTML = ''; let messageText = msg.message || translate('unsupportedMessageType');
                        contentHTML += `<p>${messageText.replace(/\n/g, '<br>')}</p>`;
                        if (msg.hasMedia) {
                            // *** CORRECCIÓN: Construir la URL del backend Node.js para pasarla al proxy ***
                            const originalMediaUrl = `${nodeApiBaseUrl}/download-media/${currentUserId}/${currentPeerId}/${msg.messageId}`;
                            const proxyMediaUrl = `${proxyUrl}?media=true&mediaUrl=${encodeURIComponent(originalMediaUrl)}`;

                            if (msg.mediaType === "image") { contentHTML += `<div class="message-media"><img src="${proxyMediaUrl}" alt="${translate('imageAlt')}" loading="lazy" onerror="this.alt='${translate('imageLoadError')}'; this.style.display='none';"></div>`; }
                            else if (msg.mediaType === "video") { contentHTML += `<div class="message-media"><video controls src="${proxyMediaUrl}" onerror="this.alt='${translate('videoLoadError')}'; this.style.display='none';"><a href="${proxyMediaUrl}" target="_blank">${translate('viewVideoLink')}</a></video></div>`; }
                            else if (msg.mediaType === "audio") { contentHTML += `<div class="message-media"><audio controls src="${proxyMediaUrl}" onerror="this.alt='${translate('audioLoadError')}'; this.style.display='none';"></audio><br/><a href="${proxyMediaUrl}" target="_blank">${translate('downloadAudioLink')}</a></div>`; }
                            else if (msg.mediaType === "document") { contentHTML += `<div class="message-media"><a href="${proxyMediaUrl}" target="_blank">${translate('downloadDocumentLink', {fileName: messageText || 'document'})}</a></div>`; }
                            else if (msg.mediaType === "location") { contentHTML += `<div class="message-media">[${translate('locationPlaceholder')}] <a href="https://maps.google.com/?q=${messageText.split(',').join(',')}" target="_blank">(Ver mapa)</a></div>`; }
                            else { contentHTML += `<div class="message-media">[${msg.mediaType || 'Media'}] <a href="${proxyMediaUrl}" target="_blank">(${translate('downloadBtn')})</a></div>`; }
                        }
                        if (!isSent && msg.contactName) { contentHTML += `<div class="text-xs text-blue-600 mt-1">${msg.contactName}</div>`; }
                        const timestamp = formatTimestamp(msg.date);
                        contentHTML += `<div class="message-meta">${timestamp} (ID: ${msg.messageId})</div>`;
                        messageElement.innerHTML = contentHTML; messagesContainer.appendChild(messageElement);
                    });
                    if (isScrolledToBottom || !isAutoUpdate) { messagesContainer.scrollTop = messagesContainer.scrollHeight; }
                     if (!isAutoUpdate) logMessage('messagesLoaded', 'success', { peerId: currentPeerId });
                } else { if (!isAutoUpdate) { messagesContainer.innerHTML = `<p class="text-gray-500 text-center self-center">${translate('noMessagesFound')}</p>`; logMessage('noMessagesFoundLog', 'info', { peerId: currentPeerId }); } }
            } catch (error) { if (!isAutoUpdate) { logMessage('errorGettingMessages', 'error', { error: error.message }); messagesContainer.innerHTML = `<p class="text-red-500 text-center self-center">${translate('errorLoadingMessages')}</p>`; } else { console.warn(`Auto-update messages failed: ${error.message}`); } }
        }
        async function sendMessage() {
            if (!currentUserId || !currentPeerId) { logMessage('selectChatError', 'error'); return; }
            const messageText = messageInput.value.trim();
            if (!messageText) { logMessage('typeMessageError', 'error'); return; }
            logMessage('sendingMessage', 'info', { peerId: currentPeerId });
            try {
                const body = { message: messageText };
                const data = await apiRequest(`/send-message/${currentUserId}/${currentPeerId}`, 'POST', body);
                logMessage(data.message || translate('messageSent'), 'success');
                messageInput.value = '';
                 const messageElement = document.createElement('div'); messageElement.className = 'message message-sent';
                 messageElement.innerHTML = `<p>${messageText.replace(/\n/g, '<br>')}</p><div class="message-meta">${formatTimestamp(Date.now()/1000)} (${translate('sendingStatus')})</div>`;
                 messagesContainer.appendChild(messageElement); messagesContainer.scrollTop = messagesContainer.scrollHeight;
                setTimeout(getMessages, 2000);
            } catch (error) { logMessage('errorSendingMessage', 'error', { error: error.message }); }
        }
        async function deleteMessage() {
             if (!currentUserId || !currentPeerId) { logMessage('selectChatError', 'error'); return; }
            const msgId = deleteMsgIdInput.value.trim();
            if (!msgId) { logMessage('messageIdRequiredError', 'error'); return; }
            if (!confirm(translate('confirmDeleteMessageTelegram', { messageId: msgId }))) return;
            logMessage('deletingMessage', 'info', { messageId: msgId });
            try {
                const data = await apiRequest(`/delete-message/${currentUserId}/${currentPeerId}/${msgId}`, 'DELETE');
                logMessage(data.message || translate('messageDeleted', { messageId: msgId }), 'success');
                deleteMsgIdInput.value = '';
                setTimeout(getMessages, 1500);
            } catch (error) { logMessage('errorDeletingMessage', 'error', { error: error.message }); }
        }
        async function deleteChatHistory() {
            if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
            const peerIdToDelete = deleteChatPeerIdInput.value.trim();
             if (!peerIdToDelete) { logMessage('peerIdRequiredError', 'error'); return; }
             if (!confirm(translate('confirmDeleteHistory', { peerId: peerIdToDelete }))) return;
             logMessage('deletingChatHistory', 'info', { peerId: peerIdToDelete });
             try {
                const data = await apiRequest(`/delete-chat/${currentUserId}/${peerIdToDelete}`, 'DELETE');
                logMessage(data.message || translate('chatHistoryDeleted', { peerId: peerIdToDelete }), 'success');
                deleteChatPeerIdInput.value = '';
                if (peerIdToDelete === currentPeerId) {
                    messagesContainer.innerHTML = `<p class="text-gray-500 text-center self-center">${translate('chatHistoryDeletedMsg')}</p>`;
                }
            } catch (error) { logMessage('errorDeletingHistory', 'error', { error: error.message }); }
        }
        async function leaveGroup() {
            if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
            const groupIdToLeave = leaveGroupIdInput.value.trim();
            if (!groupIdToLeave) { logMessage('groupIdRequiredError', 'error'); return; }
            if (!confirm(translate('confirmLeaveGroup', { groupId: groupIdToLeave }))) return;
            logMessage('leavingGroup', 'info', { groupId: groupIdToLeave });
            try {
                const data = await apiRequest(`/leave-group/${currentUserId}/${groupIdToLeave}`, 'POST');
                logMessage(data.message || translate('leftGroup', { groupId: groupIdToLeave }), 'success');
                leaveGroupIdInput.value = '';
                if (groupIdToLeave === currentPeerId) {
                    messagesContainer.innerHTML = `<p class="text-gray-500 text-center self-center">${translate('leftGroupStatus')}</p>`;
                    currentChatNameSpan.textContent = translate('noChatSelected');
                    currentChatNameSpan.dataset.translateKey = 'noChatSelected';
                    currentPeerId = null;
                }
                getChats();
            } catch (error) { logMessage('errorLeavingGroup', 'error', { error: error.message }); }
        }
        async function createGroup() {
             if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
            const subject = groupSubjectInput.value.trim();
            const participantsRaw = groupParticipantsInput.value.trim();
            if (!subject || !participantsRaw) { logMessage('subjectAndParticipantsRequiredError', 'error'); return; }
            const participants = participantsRaw.split(',').map(p => p.trim()).filter(p => p && !isNaN(parseInt(p)));
             if (participants.length === 0) { logMessage('validUserIdsRequiredError', 'error'); return; }
             logMessage('creatingGroup', 'info', { subject: subject });
             try {
                const body = { title: subject, members: participants };
                const data = await apiRequest(`/create-group/${currentUserId}`, 'POST', body);
                logMessage(data.message || translate('groupCreated', { subject: subject }), 'success');
                groupSubjectInput.value = ''; groupParticipantsInput.value = '';
                setTimeout(getChats, 2000);
            } catch (error) { logMessage('errorCreatingGroup', 'error', { error: error.message }); }
        }
        async function forwardMessage() {
             if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
            const messageId = forwardMessageIdInput.value.trim();
            const fromPeer = forwardFromPeerInput.value.trim();
            const toPeer = forwardToPeerInput.value.trim();
             if (!messageId || !fromPeer || !toPeer) { logMessage('forwardIdsRequiredError', 'error'); return; }
             logMessage('forwardingMessage', 'info', { messageId: messageId, fromPeer: fromPeer, toPeer: toPeer });
             try {
                const data = await apiRequest(`/forward-message/${currentUserId}/${fromPeer}/${toPeer}/${messageId}`, 'POST');
                logMessage(data.message || translate('messageForwarded', { messageId: messageId }), 'success');
                forwardMessageIdInput.value = ''; forwardFromPeerInput.value = ''; forwardToPeerInput.value = '';
                 if (toPeer === currentPeerId) { setTimeout(getMessages, 1500); }
            } catch (error) { logMessage('errorForwardingMessage', 'error', { error: error.message }); }
        }
        async function getContacts() {
             if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
            logMessage('gettingContacts', 'info', { userId: currentUserId });
            contactsListDiv.innerHTML = `<p class="text-gray-500 italic">${translate('loading')}</p>`; contactsListContainer.classList.remove('hidden');
            try {
                const data = await apiRequest(`/get-contacts/${currentUserId}`);
                contactsListDiv.innerHTML = '';
                if (data.contacts && data.contacts.length > 0) {
                    data.contacts.forEach(contact => { const d = document.createElement('div'); d.className = 'p-2 border-b text-sm'; d.textContent = `${contact.first_name} ${contact.last_name || ''} (${contact.username || contact.phone || contact.id})`; contactsListDiv.appendChild(d); });
                    logMessage('contactsLoaded', 'success', { count: data.contacts.length });
                } else { contactsListDiv.innerHTML = `<p class="text-gray-500">${translate('noContactsFound')}</p>`; logMessage('noContactsFound', 'info'); }
            } catch (error) { logMessage('errorGettingContacts', 'error', { error: error.message }); contactsListDiv.innerHTML = `<p class="text-red-500">${translate('error')}</p>`; }
        }
        async function searchContacts() {
            if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
            const query = searchContactQueryInput.value.trim();
            if (!query) { logMessage('searchQueryRequiredError', 'error'); return; }
            logMessage('searchingContacts', 'info', { query: query });
            searchContactsResultsDiv.innerHTML = `<p class="text-gray-500 italic">${translate('searching')}</p>`;
            try {
                const data = await apiRequest(`/search-contact/${currentUserId}?name=${encodeURIComponent(query)}`);
                searchContactsResultsDiv.innerHTML = '';
                if (data.contacts && data.contacts.length > 0) {
                     data.contacts.forEach(contact => { const d = document.createElement('div'); d.className = 'p-1 border-b text-xs'; d.textContent = `${contact.first_name} ${contact.last_name || ''} (${contact.username || contact.phone || contact.id})`; searchContactsResultsDiv.appendChild(d); });
                    logMessage('contactsFound', 'success', { count: data.contacts.length });
                } else { searchContactsResultsDiv.innerHTML = `<p class="text-gray-500">${translate('noMatchesFound')}</p>`; logMessage('noContactsFound', 'info'); }
            } catch (error) { logMessage('errorSearchingContacts', 'error', { error: error.message }); searchContactsResultsDiv.innerHTML = `<p class="text-red-500">${translate('searchError')}</p>`; }
        }
        async function exportContacts() {
             if (!currentUserId) { logMessage('selectSessionError', 'error'); return; } logMessage('exportingContacts', 'info', { userId: currentUserId });
             try {
                 const csvData = await apiRequest(`/export-contacts/${currentUserId}`, 'GET');
                 if (typeof csvData !== 'string' || !csvData.toLowerCase().includes('first_name')) { console.error("Respuesta inesperada:", csvData); throw new Error(csvData.error || translate('invalidCsvResponseError')); }
                 const blob = new Blob([csvData], { type: 'text/csv;charset=utf-8;' }); const link = document.createElement("a"); const url = URL.createObjectURL(blob);
                 link.setAttribute("href", url); link.setAttribute("download", `contacts_${currentUserId}.csv`); link.style.visibility = 'hidden'; document.body.appendChild(link); link.click(); document.body.removeChild(link);
                 logMessage('contactsExported', 'success');
             } catch (error) { logMessage('errorExportingContacts', 'error', { error: error.message }); }
        }
        function toggleImportContacts() { importContactsForm.classList.toggle('hidden'); }
        async function importContacts() {
             if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
             const jsonString = importContactsJsonInput.value.trim();
             if (!jsonString) { logMessage('pasteJsonError', 'error'); return; }
             let contactsArray;
             try {
                 contactsArray = JSON.parse(jsonString);
                 if (!Array.isArray(contactsArray)) throw new Error(translate('jsonMustBeArrayError'));
                 if (contactsArray.length > 0 && (!contactsArray[0].phone || !contactsArray[0].first_name)) { throw new Error(translate('jsonContactStructureError')); }
             } catch (e) { logMessage('invalidJsonError', 'error', { error: e.message }); return; }
             logMessage('importingContacts', 'info', { count: contactsArray.length });
             try {
                 const data = await apiRequest(`/import-contacts/${currentUserId}`, 'POST', { contacts: contactsArray });
                 logMessage(data.message || translate('contactsImported'), 'success');
                 importContactsJsonInput.value = ''; importContactsForm.classList.add('hidden');
                 getContacts();
             } catch (error) { logMessage('errorImportingContacts', 'error', { error: error.message }); }
        }
        async function downloadMedia() {
            if (!currentUserId || !currentPeerId) { logMessage('selectChatError', 'error'); return; }
            const messageIdToDownload = downloadMediaMsgIdInput.value.trim();
            if (!messageIdToDownload) { logMessage('messageIdRequiredError', 'error'); return; }
            logMessage('downloadingMedia', 'info', { messageId: messageIdToDownload });
            try {
                // *** CORRECCIÓN: Construir URL del backend Node.js, no la del proxy directamente ***
                const originalMediaUrl = `${nodeApiBaseUrl}/download-media/${currentUserId}/${currentPeerId}/${messageIdToDownload}`;
                const proxyDownloadUrl = `${proxyUrl}?media=true&mediaUrl=${encodeURIComponent(originalMediaUrl)}`;
                window.open(proxyDownloadUrl, '_blank');
                logMessage('mediaDownloadStarted', 'success');
                downloadMediaMsgIdInput.value = '';
            } catch (error) { logMessage('errorDownloadingMedia', 'error', { error: error.message }); }
        }
         async function searchMessages() {
             if (!currentUserId || !currentPeerId) { logMessage('selectChatError', 'error'); return; }
            const query = searchMsgQueryInput.value.trim();
            const limit = searchMsgLimitInput.value.trim() || '20';
            if (!query) { logMessage('searchQueryRequiredError', 'error'); return; }
             let searchUrl = `/search-messages/${currentUserId}/${currentPeerId}?query=${encodeURIComponent(query)}&limit=${encodeURIComponent(limit)}`;
             logMessage('searchingMessages', 'info', { query: query, peerId: currentPeerId });
             searchMessagesResultsDiv.innerHTML = `<p class="text-gray-500 italic">${translate('searching')}</p>`;
             try {
                 const data = await apiRequest(searchUrl);
                 searchMessagesResultsDiv.innerHTML = '';
                 if (data.messages && data.messages.length > 0) {
                     data.messages.forEach(msg => {
                         const d = document.createElement('div'); d.className = 'p-1 border-b text-xs';
                         let text = msg.message || translate('nonTextMessage');
                         if (text.length > 100) text = text.substring(0, 100) + '...';
                         d.textContent = `(${formatTimestamp(msg.date)}) ID:${msg.id} - ${text}`;
                         searchMessagesResultsDiv.appendChild(d);
                     });
                     logMessage('messagesFound', 'success', { count: data.messages.length });
                 } else { searchMessagesResultsDiv.innerHTML = `<p class="text-gray-500">${translate('noMessagesFoundCriteria')}</p>`; logMessage('noMessagesFound', 'info'); }
             } catch (error) { logMessage('errorSearchingMessages', 'error', { error: error.message }); searchMessagesResultsDiv.innerHTML = `<p class="text-red-500">${translate('searchError')}</p>`; }
        }
        async function getAutoresponderRules() {
            if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
            logMessage('gettingRules', 'info', { userId: currentUserId });
            autoresponderRulesListDiv.innerHTML = `<p class="text-xs text-gray-500 italic mt-1">${translate('loadingRules')}</p>`;
            try {
                const data = await apiRequest(`/autoresponse/${currentUserId}`);
                const rules = Array.isArray(data.rules) ? data.rules : [];
                updateAutoresponderList(rules);
                logMessage('rulesLoaded', 'success');
            } catch (error) { logMessage('errorGettingRules', 'error', { error: error.message }); autoresponderRulesListDiv.innerHTML = `<p class="text-xs text-red-500 mt-1">${translate('errorLoadingRules')}</p>`; }
        }
        async function setAutoresponder() {
             if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
            const keyword = autoresponderKeywordInput.value.trim(); const response = autoresponderResponseInput.value.trim();
             if (!keyword || !response) { logMessage('autoresponderFieldsRequiredError', 'error'); return; }
             logMessage('savingRule', 'info', { keyword: keyword, response: response });
             try {
                 const body = { keyword, response };
                 const data = await apiRequest(`/autoresponse/${currentUserId}`, 'POST', body);
                 logMessage(data.message || translate('ruleSaved'), 'success');
                 autoresponderKeywordInput.value = ''; autoresponderResponseInput.value = '';
                 getAutoresponderRules();
             } catch (error) { logMessage('errorSavingRule', 'error', { error: error.message }); }
         }
        function updateAutoresponderList(rules) {
             autoresponderRulesListDiv.innerHTML = '';
             if (rules && rules.length > 0) {
                 const list = document.createElement('ul'); list.className = 'list-disc list-inside text-xs mt-1 space-y-1';
                 rules.forEach(rule => {
                     const item = document.createElement('li'); item.className = 'flex justify-between items-center';
                     const ruleText = document.createElement('span'); ruleText.textContent = `"${rule.keyword}": "${rule.response}"`;
                     const deleteButton = document.createElement('button');
                     deleteButton.textContent = translate('deleteBtn');
                     deleteButton.className = 'delete-btn';
                     deleteButton.onclick = () => deleteAutoresponderRule(rule.id);
                     item.appendChild(ruleText); item.appendChild(deleteButton); list.appendChild(item);
                 });
                 autoresponderRulesListDiv.appendChild(list);
             } else { autoresponderRulesListDiv.innerHTML = `<p class="text-xs text-gray-500 mt-1">${translate('noRulesConfigured')}</p>`; }
         }
         async function deleteAutoresponderRule(ruleIdToDelete) {
             if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
             if (!ruleIdToDelete) { logMessage('invalidRuleIdError', 'error'); return; }
             if (!confirm(translate('confirmDeleteRuleById', { ruleId: ruleIdToDelete }))) return;
             logMessage('deletingRuleById', 'info', { ruleId: ruleIdToDelete });
             try {
                 const data = await apiRequest(`/autoresponse/${currentUserId}/${ruleIdToDelete}`, 'DELETE');
                 logMessage(data.message || translate('ruleDeletedById', { ruleId: ruleIdToDelete }), 'success');
                 getAutoresponderRules();
             } catch (error) { logMessage('errorDeletingRule', 'error', { error: error.message }); }
         }
        async function scheduleMessage() {
             if (!currentUserId) { logMessage('selectSessionError', 'error'); return; }
            const peerId = schedulePeerInput.value.trim();
            const message = scheduleMessageInput.value.trim();
            const scheduledTimeString = scheduleTimeInput.value;
             if (!peerId || !message || !scheduledTimeString) { logMessage('scheduleFieldsRequiredError', 'error'); return; }
             let scheduledTimeISO; let scheduleTimestampSeconds;
             try {
                 const scheduleDate = new Date(scheduledTimeString);
                 scheduledTimeISO = scheduleDate.toISOString();
                 scheduleTimestampSeconds = Math.floor(scheduleDate.getTime() / 1000);
             } catch (e) { logMessage('invalidDateTimeError', 'error'); return; }
             const localTime = new Date(scheduledTimeString).toLocaleString(currentLanguage === 'en' ? 'en-US' : 'es-ES');
             logMessage('schedulingMessage', 'info', { peerId: peerId, time: localTime });
             try {
                 const body = { peer: peerId, message, sendAt: scheduleTimestampSeconds };
                 const data = await apiRequest(`/schedule-message/${currentUserId}`, 'POST', body);
                 logMessage(data.message || translate('messageScheduled'), 'success');
                 schedulePeerInput.value = ''; scheduleMessageInput.value = ''; scheduleTimeInput.value = '';
             } catch (error) { logMessage('errorSchedulingMessage', 'error', { error: error.message }); }
        }
        async function sendMediaFile() {
            if (!currentUserId || !currentPeerId) { logMessage('selectChatError', 'error'); return; }
            const fileInput = mediaFileInput;
            const caption = mediaCaptionInput.value.trim();
            if (fileInput.files.length === 0) { logMessage('fileRequiredError', 'error'); return; }
            const file = fileInput.files[0];
            logMessage('sendingMedia', 'info', { peerId: currentPeerId });
            const formData = new FormData();
            formData.append('userId', currentUserId);
            formData.append('peer', currentPeerId);
            formData.append('caption', caption);
            formData.append('mediaFile', file);
            try {
                const response = await fetch(`${proxyUrl}?action=upload_and_send`, { method: 'POST', body: formData });
                const responseData = await response.json();
                if (!response.ok || responseData.error) { const errorMessage = responseData.error || `Error ${response.status} desde proxy`; logMessage(translate('errorSendingMedia', { error: errorMessage }), 'error'); throw new Error(errorMessage); }
                logMessage(responseData.message || translate('mediaSent', { peerId: currentPeerId }), 'success');
                mediaFileInput.value = ''; mediaCaptionInput.value = '';
                setTimeout(getMessages, 2000);
            } catch (error) { if (!error.message.includes('proxy')) { logMessage(translate('errorSendingMedia', { error: error.message }), 'error'); } }
        }


         // --- Event Listeners ---
         checkSessionBtn.addEventListener('click', checkOrStartSession);
         logoutSessionBtn.addEventListener('click', logoutSession);
         listSessionsBtn.addEventListener('click', listSessions);
         requestCodeBtn.addEventListener('click', requestCode);
         verifyCodeBtn.addEventListener('click', verifyCode);
         refreshChatsBtn.addEventListener('click', () => getChats());
         sendMessageBtn.addEventListener('click', sendMessage);
         messageInput.addEventListener('keypress', (e) => { if (e.key === 'Enter') sendMessage(); });
         deleteMessageBtn.addEventListener('click', deleteMessage);
         deleteChatHistoryBtn.addEventListener('click', deleteChatHistory);
         leaveGroupBtn.addEventListener('click', leaveGroup);
         createGroupBtn.addEventListener('click', createGroup);
        forwardMessageBtn.addEventListener('click', forwardMessage);
         getContactsBtn.addEventListener('click', getContacts);
        searchContactBtn.addEventListener('click', searchContacts);
        exportContactsBtn.addEventListener('click', exportContacts);
         showImportContactsBtn.addEventListener('click', toggleImportContacts);
         importContactsBtn.addEventListener('click', importContacts);
         downloadMediaBtn.addEventListener('click', downloadMedia);
        sendMediaBtn.addEventListener('click', sendMediaFile); // *** Listener para nueva función ***
        searchMessagesBtn.addEventListener('click', searchMessages);
         setAutoresponderBtn.addEventListener('click', setAutoresponder);
         getAutoresponderRulesBtn.addEventListener('click', getAutoresponderRules);
          scheduleMessageBtn.addEventListener('click', scheduleMessage);
        langEsBtn.addEventListener('click', () => setLanguage('es'));
         langEnBtn.addEventListener('click', () => setLanguage('en'));


         // --- Inicialización ---
         setLanguage(currentLanguage);
         logMessage('interfaceReady', 'info');
         // No llamar a listSessions al inicio

    </script>

</body>
</html>
