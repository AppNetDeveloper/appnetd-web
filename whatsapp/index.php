<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz WhatsApp API (PHP)</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Estilos (iguales que antes) */
        body { font-family: 'Inter', sans-serif; }
        .message { max-width: 70%; padding: 8px 12px; margin-bottom: 8px; border-radius: 12px; word-wrap: break-word; }
        .message-sent { background-color: #DCF8C6; align-self: flex-end; border-bottom-right-radius: 0; }
        .message-received { background-color: #FFFFFF; align-self: flex-start; border: 1px solid #E5E7EB; border-bottom-left-radius: 0; }
        .message-meta { font-size: 0.75rem; color: #6B7280; margin-top: 4px; text-align: right; }
        .message-media img, .message-media video { max-width: 100%; height: auto; border-radius: 8px; margin-top: 5px; }
        .message-media a { display: inline-block; margin-top: 5px; color: #007bff; text-decoration: underline; }
        #messagesContainer { height: 500px; overflow-y: auto; display: flex; flex-direction: column; padding: 10px; border: 1px solid #ccc; border-radius: 8px; background-color: #f9f9f9; }
        #chatsList { max-height: 600px; overflow-y: auto; }
        #contactsList { max-height: 400px; overflow-y: auto; }
        #logMessages { max-height: 200px; overflow-y: auto; background-color: #f3f4f6; border: 1px solid #e5e7eb; padding: 8px; font-size: 0.875rem; border-radius: 8px; }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4 md:p-8">

    <div class="container mx-auto max-w-6xl bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Interfaz WhatsApp API (PHP Proxy)</h1>

        <div class="mb-8 p-4 border rounded-lg bg-gray-50">
            <h2 class="text-xl font-semibold mb-4 text-gray-700">Gestión de Sesiones</h2>
            <div class="flex flex-col md:flex-row md:items-end gap-4 mb-4">
                <div class="flex-grow">
                    <label for="sessionId" class="block text-sm font-medium text-gray-700 mb-1">ID de Sesión:</label>
                    <input type="text" id="sessionId" placeholder="Ej: mi_sesion_1" class="w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <button id="startSessionBtn" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Iniciar Sesión</button>
                <button id="logoutSessionBtn" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Cerrar Sesión</button>
                <button id="getQrBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Obtener QR</button>
                 <button id="listSessionsBtn" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Listar Sesiones</button>
            </div>
             <div id="sessionsList" class="mt-4 text-sm text-gray-600"></div>
            <div id="qrCodeContainer" class="mt-4 text-center">
                <p class="text-gray-600 mb-2">Escanea el código QR con tu WhatsApp:</p>
                <img id="qrCodeImage" src="" alt="Código QR" class="mx-auto hidden rounded-md shadow-sm">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="p-4 border rounded-lg bg-gray-50 md:col-span-1">
                <h2 class="text-xl font-semibold mb-4 text-gray-700">Chats</h2>
                <button id="refreshChatsBtn" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md mb-4 transition duration-150 ease-in-out">Actualizar Chats</button>
                <div id="chatsList" class="space-y-2">
                    <p class="text-gray-500">Selecciona una sesión e inicia para ver los chats.</p>
                </div>
                 <div class="mt-4 pt-4 border-t">
                     <h3 class="text-lg font-medium mb-2 text-gray-700">Eliminar Chat</h3>
                     <p class="text-xs text-gray-500 mb-2">Introduce el JID del chat a eliminar (ej: 123456789@s.whatsapp.net).</p>
                    <input type="text" id="deleteChatJid" placeholder="JID del chat a eliminar" class="w-full p-2 border border-gray-300 rounded-md mb-2 text-sm">
                    <button id="deleteChatBtn" class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out text-sm">Eliminar Chat</button>
                </div>
            </div>

            <div class="p-4 border rounded-lg bg-white md:col-span-2">
                <h2 class="text-xl font-semibold mb-4 text-gray-700">Mensajes del Chat: <span id="currentChatName" class="font-normal">Ninguno seleccionado</span></h2>
                <div id="messagesContainer" class="mb-4">
                    <p class="text-gray-500 text-center self-center">Selecciona un chat para ver los mensajes.</p>
                </div>
                <div class="flex gap-2">
                    <input type="text" id="messageInput" placeholder="Escribe tu mensaje..." class="flex-grow p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                    <button id="sendMessageBtn" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Enviar</button>
                </div>
                 <div class="mt-4 pt-4 border-t">
                    <h3 class="text-lg font-medium mb-2 text-gray-700">Eliminar Mensaje</h3>
                     <p class="text-xs text-gray-500 mb-2">Introduce los datos del mensaje a eliminar.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 text-sm">
                        <input type="text" id="deleteMsgId" placeholder="ID del Mensaje" class="p-2 border border-gray-300 rounded-md">
                        <input type="text" id="deleteMsgRemoteJid" placeholder="JID Remoto (Chat)" class="p-2 border border-gray-300 rounded-md">
                         <div>
                            <label for="deleteMsgFromMe" class="block text-xs font-medium text-gray-700">¿Enviado por mí?</label>
                            <select id="deleteMsgFromMe" class="w-full p-2 border border-gray-300 rounded-md">
                                <option value="true">Sí</option>
                                <option value="false">No</option>
                            </select>
                        </div>
                    </div>
                     <input type="text" id="deleteMsgParticipant" placeholder="Participant JID (solo grupos, si fromMe=false)" class="w-full p-2 border border-gray-300 rounded-md mt-2 text-sm">
                    <button id="deleteMessageBtn" class="w-full mt-2 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out text-sm">Eliminar Mensaje</button>
                </div>
            </div>
        </div>

        <div class="mb-8 p-4 border rounded-lg bg-gray-50">
             <h2 class="text-xl font-semibold mb-4 text-gray-700">Gestión de Contactos</h2>
             <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                 <button id="getContactsBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Obtener Contactos</button>
                 <button id="exportContactsBtn" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Exportar (CSV)</button>
                 <button id="showImportContactsBtn" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Importar (JSON)</button>
                 <button id="showContactDetailsBtn" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Ver Detalles</button>
             </div>
             <div id="contactsListContainer" class="mb-4 hidden">
                 <h3 class="text-lg font-medium mb-2 text-gray-700">Lista de Contactos</h3>
                 <div id="contactsList" class="border rounded-md p-2 bg-white"></div>
             </div>
            <div id="createContactForm" class="mb-4 border-t pt-4">
                 <h3 class="text-lg font-medium mb-2 text-gray-700">Crear Contacto (Local)</h3>
                 <div class="flex flex-col md:flex-row gap-2">
                     <input type="text" id="createContactJid" placeholder="JID (ej: 123..@s.whatsapp.net)" class="flex-grow p-2 border rounded-md">
                     <input type="text" id="createContactName" placeholder="Nombre del Contacto" class="flex-grow p-2 border rounded-md">
                     <button id="createContactBtn" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-md">Crear</button>
                 </div>
             </div>
             <div id="editContactForm" class="mb-4 border-t pt-4">
                 <h3 class="text-lg font-medium mb-2 text-gray-700">Editar Contacto (Local)</h3>
                 <div class="flex flex-col md:flex-row gap-2">
                     <input type="text" id="editContactJid" placeholder="JID del contacto a editar" class="flex-grow p-2 border rounded-md">
                     <input type="text" id="editContactName" placeholder="Nuevo Nombre" class="flex-grow p-2 border rounded-md">
                     <button id="editContactBtn" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-md">Guardar Cambios</button>
                 </div>
             </div>
             <div id="searchContactsForm" class="mb-4 border-t pt-4">
                 <h3 class="text-lg font-medium mb-2 text-gray-700">Buscar Contactos</h3>
                 <div class="flex flex-col md:flex-row gap-2">
                     <input type="text" id="searchContactQuery" placeholder="Buscar por nombre o JID" class="flex-grow p-2 border rounded-md">
                     <button id="searchContactBtn" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md">Buscar</button>
                 </div>
                 <div id="searchContactsResults" class="mt-2 text-sm"></div>
             </div>
              <div id="contactDetailsForm" class="mb-4 border-t pt-4 hidden">
                 <h3 class="text-lg font-medium mb-2 text-gray-700">Detalles del Contacto</h3>
                 <div class="flex flex-col md:flex-row gap-2">
                     <input type="text" id="contactDetailsJid" placeholder="JID del contacto" class="flex-grow p-2 border rounded-md">
                     <button id="getContactDetailsBtn" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-md">Obtener Detalles</button>
                 </div>
                 <pre id="contactDetailsResult" class="mt-2 text-sm bg-gray-100 p-2 rounded-md overflow-x-auto"></pre>
             </div>
             <div id="importContactsForm" class="mb-4 border-t pt-4 hidden">
                 <h3 class="text-lg font-medium mb-2 text-gray-700">Importar Contactos (JSON)</h3>
                 <textarea id="importContactsJson" rows="5" placeholder='[{"jid": "jid1@s.whatsapp.net", "name": "Nombre 1"}, {"jid": "jid2@s.whatsapp.net", "name": "Nombre 2"}]' class="w-full p-2 border rounded-md mb-2"></textarea>
                 <button id="importContactsBtn" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded-md">Importar</button>
             </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="p-4 border rounded-lg bg-gray-50">
                <h2 class="text-xl font-semibold mb-4 text-gray-700">Crear Grupo</h2>
                <div class="mb-2">
                    <label for="groupSubject" class="block text-sm font-medium text-gray-700 mb-1">Asunto del Grupo:</label>
                    <input type="text" id="groupSubject" placeholder="Nombre del nuevo grupo" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="groupParticipants" class="block text-sm font-medium text-gray-700 mb-1">Participantes (JIDs separados por coma):</label>
                    <textarea id="groupParticipants" rows="3" placeholder="jid1@s.whatsapp.net, jid2@s.whatsapp.net" class="w-full p-2 border border-gray-300 rounded-md"></textarea>
                </div>
                <button id="createGroupBtn" class="w-full bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Crear Grupo</button>
            </div>
            <div class="p-4 border rounded-lg bg-gray-50">
                <h2 class="text-xl font-semibold mb-4 text-gray-700">Reenviar Mensaje</h2>
                 <p class="text-xs text-gray-500 mb-2">Necesitas el ID del mensaje original (puedes verlo en la consola del servidor o inspeccionando el objeto mensaje).</p>
                <div class="mb-2">
                    <label for="forwardMessageId" class="block text-sm font-medium text-gray-700 mb-1">ID del Mensaje a Reenviar:</label>
                    <input type="text" id="forwardMessageId" placeholder="ID del mensaje original" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="forwardJid" class="block text-sm font-medium text-gray-700 mb-1">JID Destino:</label>
                    <input type="text" id="forwardJid" placeholder="jid_destino@s.whatsapp.net" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <button id="forwardMessageBtn" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Reenviar</button>
            </div>
        </div>

         <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
             <div class="p-4 border rounded-lg bg-gray-50">
                <h2 class="text-xl font-semibold mb-4 text-gray-700">Enviar Multimedia (Base64)</h2>
                 <div class="mb-2">
                    <label for="multimediaJid" class="block text-sm font-medium text-gray-700 mb-1">JID Destino:</label>
                    <input type="text" id="multimediaJid" placeholder="jid_destino@s.whatsapp.net" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                 <div class="mb-2">
                     <label for="multimediaType" class="block text-sm font-medium text-gray-700 mb-1">Tipo de Media:</label>
                     <select id="multimediaType" class="w-full p-2 border border-gray-300 rounded-md">
                         <option value="image">Imagen</option>
                         <option value="video">Video</option>
                         <option value="document">Documento</option>
                     </select>
                 </div>
                 <div class="mb-2">
                    <label for="multimediaCaption" class="block text-sm font-medium text-gray-700 mb-1">Texto (Opcional):</label>
                    <input type="text" id="multimediaCaption" placeholder="Descripción del archivo" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                 <div class="mb-4">
                    <label for="multimediaBase64" class="block text-sm font-medium text-gray-700 mb-1">Datos Base64:</label>
                    <textarea id="multimediaBase64" rows="4" placeholder="Pega aquí el contenido Base64 del archivo..." class="w-full p-2 border border-gray-300 rounded-md"></textarea>
                 </div>
                <button id="sendMultimediaBtn" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Enviar Multimedia</button>
            </div>
            <div class="p-4 border rounded-lg bg-gray-50 space-y-4">
                 <h2 class="text-xl font-semibold mb-4 text-gray-700">Otras Funciones</h2>
                 <div>
                     <button id="getStatsBtn" class="w-full bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Obtener Estadísticas</button>
                     <pre id="statsResult" class="mt-2 text-sm bg-white p-2 rounded-md overflow-x-auto"></pre>
                 </div>
                 <div>
                     <button id="getAuditLogBtn" class="w-full bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Ver Log de Auditoría</button>
                     <pre id="auditLogResult" class="mt-2 text-sm bg-white p-2 rounded-md overflow-x-auto max-h-40 overflow-y-scroll"></pre>
                 </div>
                  <div class="border-t pt-4">
                     <h3 class="text-lg font-medium mb-2 text-gray-700">Buscar Mensajes</h3>
                     <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 mb-2">
                         <input type="text" id="searchMsgQuery" placeholder="Texto a buscar" class="p-2 border rounded-md text-sm">
                         <input type="datetime-local" id="searchMsgFromDate" title="Fecha Desde" class="p-2 border rounded-md text-sm">
                         <input type="datetime-local" id="searchMsgToDate" title="Fecha Hasta" class="p-2 border rounded-md text-sm">
                     </div>
                     <button id="searchMessagesBtn" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Buscar Mensajes</button>
                     <div id="searchMessagesResults" class="mt-2 text-sm max-h-40 overflow-y-scroll bg-white p-2 rounded"></div>
                 </div>
                 <div class="border-t pt-4">
                     <h3 class="text-lg font-medium mb-2 text-gray-700">Configurar Autoresponder</h3>
                     <div class="flex flex-col md:flex-row gap-2 mb-2">
                         <input type="text" id="autoresponderKeyword" placeholder="Palabra Clave" class="flex-grow p-2 border rounded-md">
                         <input type="text" id="autoresponderResponse" placeholder="Respuesta Automática" class="flex-grow p-2 border rounded-md">
                     </div>
                     <button id="setAutoresponderBtn" class="w-full bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Guardar Regla</button>
                     <div id="autoresponderRulesList" class="mt-2 text-sm"></div>
                 </div>
                 <div class="border-t pt-4">
                     <h3 class="text-lg font-medium mb-2 text-gray-700">Programar Mensaje</h3>
                     <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 mb-2">
                         <input type="text" id="scheduleJid" placeholder="JID Destino" class="p-2 border rounded-md">
                         <input type="text" id="scheduleMessage" placeholder="Mensaje" class="p-2 border rounded-md">
                         <input type="datetime-local" id="scheduleTime" title="Fecha y Hora" class="p-2 border rounded-md">
                     </div>
                     <button id="scheduleMessageBtn" class="w-full bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Programar</button>
                 </div>
            </div>
        </div>

        <div class="mt-8 p-4 border rounded-lg bg-gray-50">
            <h2 class="text-xl font-semibold mb-2 text-gray-700">Log</h2>
            <div id="logMessages" class="space-y-1"></div>
        </div>

    </div>

    <script>
        // --- Variables Globales ---
        let currentSessionId = null;
        let currentChatJid = null;
        // const apiUrl = 'http://152.53.2.192:3005'; // URL directa (ya no se usa)
        const proxyUrl = 'proxy.php'; // URL del script PHP intermediario

        // --- Referencias a Elementos del DOM (igual que antes) ---
        const sessionIdInput = document.getElementById('sessionId');
        const startSessionBtn = document.getElementById('startSessionBtn');
        const logoutSessionBtn = document.getElementById('logoutSessionBtn');
        const getQrBtn = document.getElementById('getQrBtn');
        const listSessionsBtn = document.getElementById('listSessionsBtn');
        const sessionsListDiv = document.getElementById('sessionsList');
        const qrCodeContainer = document.getElementById('qrCodeContainer');
        const qrCodeImage = document.getElementById('qrCodeImage');
        const refreshChatsBtn = document.getElementById('refreshChatsBtn');
        const chatsListDiv = document.getElementById('chatsList');
        const messagesContainer = document.getElementById('messagesContainer');
        const messageInput = document.getElementById('messageInput');
        const sendMessageBtn = document.getElementById('sendMessageBtn');
        const currentChatNameSpan = document.getElementById('currentChatName');
        const logMessagesDiv = document.getElementById('logMessages');
        const deleteMessageBtn = document.getElementById('deleteMessageBtn');
        const deleteMsgIdInput = document.getElementById('deleteMsgId');
        const deleteMsgRemoteJidInput = document.getElementById('deleteMsgRemoteJid');
        const deleteMsgFromMeSelect = document.getElementById('deleteMsgFromMe');
        const deleteMsgParticipantInput = document.getElementById('deleteMsgParticipant');
        const deleteChatBtn = document.getElementById('deleteChatBtn');
        const deleteChatJidInput = document.getElementById('deleteChatJid');
        const groupSubjectInput = document.getElementById('groupSubject');
        const groupParticipantsInput = document.getElementById('groupParticipants');
        const createGroupBtn = document.getElementById('createGroupBtn');
        const forwardMessageIdInput = document.getElementById('forwardMessageId');
        const forwardJidInput = document.getElementById('forwardJid');
        const forwardMessageBtn = document.getElementById('forwardMessageBtn');
        const getContactsBtn = document.getElementById('getContactsBtn');
        const contactsListContainer = document.getElementById('contactsListContainer');
        const contactsListDiv = document.getElementById('contactsList');
        const createContactBtn = document.getElementById('createContactBtn');
        const createContactJidInput = document.getElementById('createContactJid');
        const createContactNameInput = document.getElementById('createContactName');
        const editContactBtn = document.getElementById('editContactBtn');
        const editContactJidInput = document.getElementById('editContactJid');
        const editContactNameInput = document.getElementById('editContactName');
        const searchContactBtn = document.getElementById('searchContactBtn');
        const searchContactQueryInput = document.getElementById('searchContactQuery');
        const searchContactsResultsDiv = document.getElementById('searchContactsResults');
        const exportContactsBtn = document.getElementById('exportContactsBtn');
        const showImportContactsBtn = document.getElementById('showImportContactsBtn');
        const importContactsForm = document.getElementById('importContactsForm');
        const importContactsBtn = document.getElementById('importContactsBtn');
        const importContactsJsonInput = document.getElementById('importContactsJson');
        const showContactDetailsBtn = document.getElementById('showContactDetailsBtn');
        const contactDetailsForm = document.getElementById('contactDetailsForm');
        const contactDetailsJidInput = document.getElementById('contactDetailsJid');
        const getContactDetailsBtn = document.getElementById('getContactDetailsBtn');
        const contactDetailsResultPre = document.getElementById('contactDetailsResult');
        const sendMultimediaBtn = document.getElementById('sendMultimediaBtn');
        const multimediaJidInput = document.getElementById('multimediaJid');
        const multimediaTypeSelect = document.getElementById('multimediaType');
        const multimediaCaptionInput = document.getElementById('multimediaCaption');
        const multimediaBase64Input = document.getElementById('multimediaBase64');
        const getStatsBtn = document.getElementById('getStatsBtn');
        const statsResultPre = document.getElementById('statsResult');
        const getAuditLogBtn = document.getElementById('getAuditLogBtn');
        const auditLogResultPre = document.getElementById('auditLogResult');
        const searchMessagesBtn = document.getElementById('searchMessagesBtn');
        const searchMsgQueryInput = document.getElementById('searchMsgQuery');
        const searchMsgFromDateInput = document.getElementById('searchMsgFromDate');
        const searchMsgToDateInput = document.getElementById('searchMsgToDate');
        const searchMessagesResultsDiv = document.getElementById('searchMessagesResults');
        const setAutoresponderBtn = document.getElementById('setAutoresponderBtn');
        const autoresponderKeywordInput = document.getElementById('autoresponderKeyword');
        const autoresponderResponseInput = document.getElementById('autoresponderResponse');
        const autoresponderRulesListDiv = document.getElementById('autoresponderRulesList');
        const scheduleMessageBtn = document.getElementById('scheduleMessageBtn');
        const scheduleJidInput = document.getElementById('scheduleJid');
        const scheduleMessageInput = document.getElementById('scheduleMessage');
        const scheduleTimeInput = document.getElementById('scheduleTime');

        // --- Funciones Auxiliares (logMessage y formatTimestamp igual que antes) ---
        function logMessage(message, type = 'info') {
            const p = document.createElement('p');
            const timestamp = new Date().toLocaleTimeString();
            p.textContent = `[${timestamp}] ${message}`;
            if (type === 'error') {
                p.className = 'text-red-600';
            } else if (type === 'success') {
                 p.className = 'text-green-600';
            } else {
                 p.className = 'text-gray-700';
            }
            logMessagesDiv.appendChild(p);
            logMessagesDiv.scrollTop = logMessagesDiv.scrollHeight;
        }

        function formatTimestamp(unixTimestamp) {
            if (!unixTimestamp || typeof unixTimestamp !== 'number') return '';
            const date = new Date(unixTimestamp * 1000);
            return date.toLocaleString('es-ES', { hour: '2-digit', minute: '2-digit', day: '2-digit', month: 'short' });
        }

        // --- *** NUEVA FUNCIÓN apiRequest usando el Proxy PHP *** ---
        async function apiRequest(endpoint, method = 'GET', body = null) {
            // Construimos los datos a enviar al proxy PHP
            const proxyRequestBody = {
                endpoint: endpoint, // El endpoint original de la API Node.js
                method: method,
                body: body // El cuerpo original (si existe)
            };

            logMessage(`Proxy Request: ${method} -> ${proxyUrl} -> ${endpoint} ${body ? JSON.stringify(body) : ''}`);

            try {
                // Hacemos la petición al script PHP (proxy.php) usando POST
                const response = await fetch(proxyUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(proxyRequestBody) // Enviamos los detalles de la petición original
                });

                // Intentamos parsear la respuesta como JSON
                const responseData = await response.json();

                // Verificamos si el proxy PHP devolvió un error o si la respuesta original fue un error
                if (!response.ok || responseData.error) {
                    const errorMessage = responseData.error || `Error ${response.status} desde el proxy`;
                    logMessage(`Error: ${errorMessage}`, 'error');
                    throw new Error(errorMessage);
                }

                // Si todo fue bien, la respuesta del proxy contiene la respuesta original de la API Node.js
                logMessage(`Proxy Response ${response.status}: ${JSON.stringify(responseData)}`, 'success');
                return responseData; // Devolvemos los datos recibidos desde Node.js a través del proxy

            } catch (error) {
                // Captura errores de red al contactar el proxy o errores al parsear JSON
                logMessage(`Fetch/Proxy Error: ${error.message}`, 'error');
                // Intenta mostrar más detalles si es un error de parseo
                if (error instanceof SyntaxError) {
                    console.error("Respuesta no JSON recibida del proxy:", await response.text().catch(() => "No se pudo leer el texto de la respuesta"));
                }
                throw error; // Re-lanzar para manejo específico si es necesario
            }
        }

        // --- Funciones de la API (Llamadas a apiRequest son iguales que antes) ---
        // Todas las funciones como startSession, logoutSession, getChats, getMessages, etc.
        // NO necesitan cambiarse, ya que ahora usan la nueva función `apiRequest`
        // que se encarga de pasar por el proxy PHP.

        async function startSession() {
            const sid = sessionIdInput.value.trim();
            if (!sid) { logMessage('Por favor, introduce un ID de sesión.', 'error'); return; }
            currentSessionId = sid;
            logMessage(`Iniciando sesión: ${currentSessionId}...`);
            try {
                const data = await apiRequest(`/start-session/${currentSessionId}`, 'POST');
                logMessage(data.message || `Solicitud para iniciar ${currentSessionId} enviada.`, 'success');
                setTimeout(getQrCode, 2000);
            } catch (error) { logMessage(`Error al iniciar sesión ${currentSessionId}: ${error.message}`, 'error'); }
        }

        async function logoutSession() {
            if (!currentSessionId) { logMessage('No hay una sesión activa seleccionada.', 'error'); return; }
            logMessage(`Cerrando sesión: ${currentSessionId}...`);
            if (!confirm(`¿Estás seguro de cerrar la sesión ${currentSessionId}?`)) return;
            try {
                const data = await apiRequest(`/logout/${currentSessionId}`, 'POST');
                logMessage(data.message || `Sesión ${currentSessionId} cerrada.`, 'success');
                currentSessionId = null; currentChatJid = null; sessionIdInput.value = '';
                chatsListDiv.innerHTML = '<p class="text-gray-500">Sesión cerrada.</p>';
                messagesContainer.innerHTML = '<p class="text-gray-500 text-center self-center">Sesión cerrada.</p>';
                currentChatNameSpan.textContent = 'Ninguno seleccionado';
                qrCodeImage.classList.add('hidden'); qrCodeImage.src = ''; sessionsListDiv.innerHTML = '';
                contactsListDiv.innerHTML = ''; contactsListContainer.classList.add('hidden');
            } catch (error) { logMessage(`Error al cerrar sesión ${currentSessionId}: ${error.message}`, 'error'); }
        }

        async function getQrCode() {
            if (!currentSessionId) { logMessage('Primero inicia una sesión.', 'error'); return; }
            logMessage(`Obteniendo QR para ${currentSessionId}...`);
            qrCodeImage.classList.add('hidden'); qrCodeImage.src = '';
            try {
                const data = await apiRequest(`/get-qr/${currentSessionId}`);
                if (data.success && data.qr) {
                    qrCodeImage.src = data.qr; qrCodeImage.classList.remove('hidden');
                    logMessage('Código QR recibido.', 'success');
                } else {
                    logMessage(data.message || 'Esperando código QR...', 'info');
                    if (data.message?.includes('aún no se ha generado')) { setTimeout(getQrCode, 5000); }
                }
            } catch (error) {
                logMessage(`Error al obtener QR: ${error.message}`, 'error');
                if (error.message.includes('404') || error.message.includes('no encontrada')) {
                     logMessage('La sesión podría no estar iniciada o ya está conectada.', 'info');
                } else { setTimeout(getQrCode, 7000); }
            }
        }

        async function listSessions() {
             logMessage(`Listando sesiones activas...`);
             sessionsListDiv.innerHTML = '<p class="text-gray-500 italic">Cargando...</p>';
             try {
                const data = await apiRequest(`/sessions`);
                if (data.activeSessions && data.activeSessions.length > 0) {
                    sessionsListDiv.innerHTML = '<strong>Sesiones Activas:</strong> ' + data.activeSessions.join(', ');
                     logMessage('Lista de sesiones activas obtenida.', 'success');
                } else {
                     sessionsListDiv.innerHTML = '<p class="text-gray-500">No hay sesiones activas en el servidor.</p>';
                     logMessage('No se encontraron sesiones activas.', 'info');
                }
            } catch (error) {
                logMessage(`Error al listar sesiones: ${error.message}`, 'error');
                 sessionsListDiv.innerHTML = '<p class="text-red-500">Error al cargar sesiones.</p>';
            }
        }

        async function getChats() {
            if (!currentSessionId) { logMessage('Selecciona o inicia una sesión primero.', 'error'); return; }
            logMessage(`Obteniendo chats para ${currentSessionId}...`);
            chatsListDiv.innerHTML = '<p class="text-gray-500 italic">Cargando chats...</p>';
            try {
                const data = await apiRequest(`/get-chats/${currentSessionId}`);
                chatsListDiv.innerHTML = '';
                if (data.chats && data.chats.length > 0) {
                    data.chats.forEach(chat => {
                        const chatElement = document.createElement('div');
                        chatElement.className = 'p-3 border rounded-md bg-white hover:bg-gray-100 cursor-pointer transition duration-150 ease-in-out';
                        chatElement.dataset.jid = chat.jid;
                        const name = chat.name || chat.jid;
                        const lastMessage = chat.lastMessage || 'No hay mensajes';
                        const timestamp = formatTimestamp(chat.messageTimestamp);
                        chatElement.innerHTML = `... (HTML interno igual que antes) ...`; // El HTML interno no cambia
                         chatElement.innerHTML = `
                            <div class="flex justify-between items-center">
                                <span class="font-semibold text-gray-800 truncate">${name}</span>
                                <span class="text-xs text-gray-500">${timestamp}</span>
                            </div>
                            <p class="text-sm text-gray-600 truncate mt-1">${lastMessage}</p>
                            ${chat.unreadCount > 0 ? `<span class="mt-1 inline-block bg-green-500 text-white text-xs font-bold px-2 py-0.5 rounded-full">${chat.unreadCount}</span>` : ''}
                        `;
                        chatElement.addEventListener('click', () => {
                            document.querySelectorAll('#chatsList > div').forEach(el => el.classList.remove('bg-indigo-100', 'border-indigo-300'));
                            chatElement.classList.add('bg-indigo-100', 'border-indigo-300');
                            currentChatJid = chat.jid; currentChatNameSpan.textContent = name;
                            deleteMsgRemoteJidInput.value = chat.jid; getMessages();
                        });
                        chatsListDiv.appendChild(chatElement);
                    });
                     logMessage(`${data.chats.length} chats cargados.`, 'success');
                } else {
                    chatsListDiv.innerHTML = '<p class="text-gray-500">No se encontraron chats o la sesión no está lista.</p>';
                     logMessage('No se encontraron chats.', 'info');
                }
            } catch (error) {
                logMessage(`Error al obtener chats: ${error.message}`, 'error');
                 chatsListDiv.innerHTML = '<p class="text-red-500">Error al cargar chats.</p>';
                 if (error.message.includes('no conectada')) { qrCodeImage.classList.add('hidden'); qrCodeImage.src = ''; }
            }
        }

        async function getMessages() {
             if (!currentSessionId || !currentChatJid) { logMessage('Selecciona una sesión y un chat primero.', 'error'); return; }
            logMessage(`Obteniendo mensajes para ${currentChatJid}...`);
            messagesContainer.innerHTML = '<p class="text-gray-500 text-center self-center italic">Cargando mensajes...</p>';
            try {
                const data = await apiRequest(`/get-messages/${currentSessionId}/${currentChatJid}?limit=100`);
                messagesContainer.innerHTML = '';
                if (data.messages && data.messages.length > 0) {
                    data.messages.forEach(msgContainer => {
                        const msg = msgContainer.messageData; const publicMediaUrl = msgContainer.publicMediaUrl;
                        const messageElement = document.createElement('div');
                        const isSent = msg.key?.fromMe;
                        messageElement.className = `message ${isSent ? 'message-sent' : 'message-received'}`;
                        let contentHTML = ''; let messageText = "Tipo de mensaje no soportado";
                        // ... (Lógica para extraer texto y media igual que antes) ...
                         if (msg.message?.conversation) messageText = msg.message.conversation;
                         else if (msg.message?.extendedTextMessage?.text) messageText = msg.message.extendedTextMessage.text;
                         else if (msg.message?.imageMessage?.caption) messageText = msg.message.imageMessage.caption || '[Imagen]';
                         else if (msg.message?.videoMessage?.caption) messageText = msg.message.videoMessage.caption || '[Video]';
                         else if (msg.message?.documentMessage?.caption) messageText = msg.message.documentMessage.caption || '[Documento]';
                         else if (msg.message?.stickerMessage) messageText = '[Sticker]';
                         else if (msg.message?.audioMessage) messageText = '[Audio]';
                         else if (msg.message) { const firstKey = Object.keys(msg.message)[0]; if (firstKey && msg.message[firstKey]?.caption) messageText = msg.message[firstKey].caption; else if (firstKey) messageText = `[${firstKey.replace('Message', '')}]`;}
                         contentHTML += `<p>${messageText.replace(/\n/g, '<br>')}</p>`;
                         if (publicMediaUrl) {
                            if (msg.message?.imageMessage || publicMediaUrl.match(/\.(jpg|png|jpeg|gif|webp)$/i)) contentHTML += `<div class="message-media"><img src="${publicMediaUrl}" alt="Imagen adjunta" loading="lazy" onerror="this.alt='Error al cargar imagen'; this.style.display='none';"></div>`;
                            else if (msg.message?.videoMessage || publicMediaUrl.match(/\.(mp4)$/i)) contentHTML += `<div class="message-media"><video controls src="${publicMediaUrl}" onerror="this.alt='Error al cargar video'; this.style.display='none';"><a href="${publicMediaUrl}" target="_blank">Ver Video</a></video></div>`;
                            else if (msg.message?.audioMessage || publicMediaUrl.match(/\.(ogg|mp3)$/i)) contentHTML += `<div class="message-media"><audio controls src="${publicMediaUrl}" onerror="this.alt='Error al cargar audio'; this.style.display='none';"></audio><br/><a href="${publicMediaUrl}" target="_blank">Descargar Audio</a></div>`;
                            else if (msg.message?.documentMessage || publicMediaUrl.includes('document')) { const fileName = publicMediaUrl.substring(publicMediaUrl.lastIndexOf('/') + 1); contentHTML += `<div class="message-media"><a href="${publicMediaUrl}" target="_blank" download>Descargar Documento (${fileName})</a></div>`;}
                            else if (msg.message?.stickerMessage) contentHTML += `<div class="message-media"><img src="${publicMediaUrl}" alt="Sticker" style="max-width: 100px;" loading="lazy" onerror="this.alt='Error al cargar sticker'; this.style.display='none';"></div>`;
                         }
                        const timestamp = formatTimestamp(msg.messageTimestamp);
                        contentHTML += `<div class="message-meta">${timestamp}</div>`;
                        messageElement.innerHTML = contentHTML;
                        messagesContainer.appendChild(messageElement);
                    });
                    messagesContainer.scrollTop = messagesContainer.scrollHeight;
                     logMessage(`Mensajes de ${currentChatJid} cargados.`, 'success');
                } else {
                    messagesContainer.innerHTML = '<p class="text-gray-500 text-center self-center">No hay mensajes en este chat.</p>';
                     logMessage(`No se encontraron mensajes para ${currentChatJid}.`, 'info');
                }
            } catch (error) {
                logMessage(`Error al obtener mensajes: ${error.message}`, 'error');
                 messagesContainer.innerHTML = '<p class="text-red-500 text-center self-center">Error al cargar mensajes.</p>';
            }
        }

        async function sendMessage() {
            if (!currentSessionId || !currentChatJid) { logMessage('Selecciona sesión y chat.', 'error'); return; }
            const messageText = messageInput.value.trim();
            if (!messageText) { logMessage('Escribe un mensaje.', 'error'); return; }
            logMessage(`Enviando mensaje a ${currentChatJid}...`);
            try {
                const body = { jid: currentChatJid, message: messageText };
                const data = await apiRequest(`/send-message/${currentSessionId}`, 'POST', body);
                logMessage(data.message || 'Mensaje enviado.', 'success');
                messageInput.value = '';
                 const messageElement = document.createElement('div');
                 messageElement.className = 'message message-sent';
                 messageElement.innerHTML = `<p>${messageText.replace(/\n/g, '<br>')}</p><div class="message-meta">${formatTimestamp(Date.now()/1000)} (Enviando...)</div>`;
                 messagesContainer.appendChild(messageElement); messagesContainer.scrollTop = messagesContainer.scrollHeight;
                setTimeout(getMessages, 2000);
            } catch (error) { logMessage(`Error al enviar mensaje: ${error.message}`, 'error'); }
        }

        async function deleteMessage() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
            const msgId = deleteMsgIdInput.value.trim(); const remoteJid = deleteMsgRemoteJidInput.value.trim();
            const fromMe = deleteMsgFromMeSelect.value === 'true'; const participant = deleteMsgParticipantInput.value.trim() || undefined;
            if (!msgId || !remoteJid) { logMessage('Se requieren ID y JID.', 'error'); return; }
            if (!confirm(`¿Eliminar mensaje ID "${msgId}" de "${remoteJid}"?`)) return;
            logMessage(`Solicitando eliminar mensaje ${msgId} de ${remoteJid}...`);
            try {
                const body = { remoteJid, fromMe, id: msgId, ...(participant && { participant }) };
                const data = await apiRequest(`/delete-message/${currentSessionId}`, 'DELETE', body);
                logMessage(data.message || `Solicitud eliminación ${msgId} enviada.`, 'success');
                deleteMsgIdInput.value = ''; deleteMsgParticipantInput.value = '';
                if (remoteJid === currentChatJid) { setTimeout(getMessages, 1500); }
            } catch (error) { logMessage(`Error al eliminar mensaje: ${error.message}`, 'error'); }
        }

         async function deleteChat() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
            const jidToDelete = deleteChatJidInput.value.trim();
             if (!jidToDelete) { logMessage('Introduce JID a eliminar.', 'error'); return; }
             if (!confirm(`¿Eliminar chat ${jidToDelete} localmente?`)) return;
             logMessage(`Eliminando chat ${jidToDelete} localmente...`);
             try {
                const body = { jid: jidToDelete };
                const data = await apiRequest(`/delete-chat/${currentSessionId}`, 'DELETE', body);
                logMessage(data.message || `Chat ${jidToDelete} eliminado localmente.`, 'success');
                deleteChatJidInput.value = '';
                if (jidToDelete === currentChatJid) {
                    messagesContainer.innerHTML = '<p>Chat eliminado.</p>'; currentChatNameSpan.textContent = 'Ninguno'; currentChatJid = null;
                }
                getChats();
            } catch (error) { logMessage(`Error al eliminar chat: ${error.message}`, 'error'); }
        }

        async function createGroup() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
            const subject = groupSubjectInput.value.trim(); const participantsRaw = groupParticipantsInput.value.trim();
            if (!subject || !participantsRaw) { logMessage('Asunto y participantes requeridos.', 'error'); return; }
            const participants = participantsRaw.split(',').map(p => p.trim()).filter(p => p);
             if (participants.length === 0) { logMessage('Introduce JIDs válidos.', 'error'); return; }
             logMessage(`Creando grupo "${subject}"...`);
             try {
                const body = { subject, participants };
                const data = await apiRequest(`/create-group/${currentSessionId}`, 'POST', body);
                logMessage(data.message || `Grupo "${subject}" creado: ${data.group?.id}`, 'success');
                groupSubjectInput.value = ''; groupParticipantsInput.value = '';
                setTimeout(getChats, 2000);
            } catch (error) { logMessage(`Error al crear grupo: ${error.message}`, 'error'); }
        }

        async function forwardMessage() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
            const messageId = forwardMessageIdInput.value.trim(); const forwardJid = forwardJidInput.value.trim();
             if (!messageId || !forwardJid) { logMessage('ID mensaje y JID destino requeridos.', 'error'); return; }
             logMessage(`Reenviando mensaje ${messageId} a ${forwardJid}...`);
             try {
                const body = { messageId, forwardJid };
                const data = await apiRequest(`/forward-message/${currentSessionId}`, 'POST', body);
                logMessage(data.message || `Mensaje ${messageId} reenviado.`, 'success');
                forwardMessageIdInput.value = ''; forwardJidInput.value = '';
                 if (forwardJid === currentChatJid) { setTimeout(getMessages, 1500); }
                 else { setTimeout(getChats, 1500); }
            } catch (error) { logMessage(`Error al reenviar mensaje: ${error.message}`, 'error'); }
        }

         async function getContacts() {
            if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
            logMessage(`Obteniendo contactos para ${currentSessionId}...`);
            contactsListDiv.innerHTML = '<p>Cargando...</p>'; contactsListContainer.classList.remove('hidden');
            try {
                const data = await apiRequest(`/get-contacts/${currentSessionId}`);
                contactsListDiv.innerHTML = '';
                if (data.contacts && data.contacts.length > 0) {
                    data.contacts.forEach(contact => {
                        const d = document.createElement('div'); d.className = 'p-2 border-b text-sm';
                        d.textContent = `${contact.name || contact.jid} (${contact.jid})`; contactsListDiv.appendChild(d);
                    });
                    logMessage(`${data.contacts.length} contactos cargados.`, 'success');
                } else { contactsListDiv.innerHTML = '<p>No hay contactos.</p>'; logMessage('No se encontraron contactos.', 'info'); }
            } catch (error) { logMessage(`Error al obtener contactos: ${error.message}`, 'error'); contactsListDiv.innerHTML = '<p>Error</p>'; }
        }

         async function createContact() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
            const jid = createContactJidInput.value.trim(); const name = createContactNameInput.value.trim();
             if (!jid || !name) { logMessage('JID y Nombre requeridos.', 'error'); return; }
             logMessage(`Creando contacto local ${name} (${jid})...`);
             try {
                const body = { jid, name };
                const data = await apiRequest(`/create-contact/${currentSessionId}`, 'POST', body);
                logMessage(data.message || `Contacto ${name} creado.`, 'success');
                createContactJidInput.value = ''; createContactNameInput.value = '';
                if (!contactsListContainer.classList.contains('hidden')) getContacts();
            } catch (error) { logMessage(`Error al crear contacto: ${error.message}`, 'error'); }
        }

        async function editContact() {
            if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
            const jid = editContactJidInput.value.trim(); const name = editContactNameInput.value.trim();
             if (!jid || !name) { logMessage('JID y Nuevo Nombre requeridos.', 'error'); return; }
             logMessage(`Editando contacto ${jid} a "${name}"...`);
             try {
                const body = { jid, name };
                const data = await apiRequest(`/edit-contact/${currentSessionId}`, 'POST', body);
                logMessage(data.message || `Contacto ${jid} actualizado.`, 'success');
                editContactJidInput.value = ''; editContactNameInput.value = '';
                 if (!contactsListContainer.classList.contains('hidden')) getContacts();
                 getChats(); // Actualizar nombres en chats
            } catch (error) { logMessage(`Error al editar contacto: ${error.message}`, 'error'); }
        }

         async function searchContacts() {
            if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
            const query = searchContactQueryInput.value.trim();
            if (!query) { logMessage('Introduce búsqueda.', 'error'); return; }
            logMessage(`Buscando contactos con "${query}"...`);
            searchContactsResultsDiv.innerHTML = '<p>Buscando...</p>';
            try {
                const data = await apiRequest(`/search-contacts/${currentSessionId}?query=${encodeURIComponent(query)}`);
                searchContactsResultsDiv.innerHTML = '';
                if (data.contacts && data.contacts.length > 0) {
                     data.contacts.forEach(contact => {
                        const d = document.createElement('div'); d.className = 'p-1 border-b text-xs';
                        d.textContent = `${contact.name || contact.jid} (${contact.jid})`; searchContactsResultsDiv.appendChild(d);
                    });
                    logMessage(`${data.contacts.length} contactos encontrados.`, 'success');
                } else { searchContactsResultsDiv.innerHTML = '<p>No hay coincidencias.</p>'; logMessage('No se encontraron contactos.', 'info'); }
            } catch (error) { logMessage(`Error al buscar: ${error.message}`, 'error'); searchContactsResultsDiv.innerHTML = '<p>Error</p>'; }
        }

        async function exportContacts() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
             logMessage(`Exportando contactos de ${currentSessionId}...`);
             // Para exportar CSV con PHP proxy, el proxy tendría que devolver el contenido CSV
             // y el JS crear el Blob y enlace de descarga.
             // Opcionalmente, hacer que PHP genere directamente la descarga.
             // Simplificación: Abrir la URL del proxy en una nueva pestaña (PHP debe establecer headers de descarga)
             window.open(`${proxyUrl}?endpoint=${encodeURIComponent(`/export-contacts/${currentSessionId}`)}&method=GET&download=true`, '_blank');
             logMessage('Intentando iniciar descarga CSV (requiere configuración en proxy.php).', 'info');
             // Nota: La implementación real de la descarga dependerá de cómo se configure proxy.php
        }

         function toggleImportContacts() { importContactsForm.classList.toggle('hidden'); }

         async function importContacts() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
             const jsonString = importContactsJsonInput.value.trim();
             if (!jsonString) { logMessage('Pega JSON.', 'error'); return; }
             let contactsArray;
             try {
                 contactsArray = JSON.parse(jsonString);
                 if (!Array.isArray(contactsArray)) throw new Error("JSON debe ser array.");
                 if (contactsArray.length > 0 && (!contactsArray[0].jid || !contactsArray[0].name)) throw new Error("Contacto debe tener 'jid' y 'name'.");
             } catch (e) { logMessage(`Error JSON: ${e.message}`, 'error'); return; }
             logMessage(`Importando ${contactsArray.length} contactos...`);
             try {
                 const data = await apiRequest(`/import-contacts/${currentSessionId}`, 'POST', contactsArray);
                 logMessage(data.message || 'Contactos importados.', 'success');
                 importContactsJsonInput.value = ''; importContactsForm.classList.add('hidden');
                 if (!contactsListContainer.classList.contains('hidden')) getContacts();
                 getChats();
             } catch (error) { logMessage(`Error al importar: ${error.message}`, 'error'); }
         }

         function toggleContactDetails() { contactDetailsForm.classList.toggle('hidden'); }

         async function getContactDetails() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
             const jid = contactDetailsJidInput.value.trim();
             if (!jid) { logMessage('Introduce JID.', 'error'); return; }
             logMessage(`Obteniendo detalles de ${jid}...`);
             contactDetailsResultPre.textContent = 'Cargando...';
             try {
                 const data = await apiRequest(`/contact-details/${currentSessionId}/${jid}`);
                 contactDetailsResultPre.textContent = JSON.stringify(data.contact, null, 2);
                 logMessage(`Detalles de ${jid} obtenidos.`, 'success');
             } catch (error) { logMessage(`Error detalles: ${error.message}`, 'error'); contactDetailsResultPre.textContent = `Error: ${error.message}`; }
         }

         async function sendMultimedia() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
            const jid = multimediaJidInput.value.trim(); const mediaType = multimediaTypeSelect.value;
            const caption = multimediaCaptionInput.value.trim(); const base64Data = multimediaBase64Input.value.trim();
             if (!jid || !base64Data) { logMessage('JID y Base64 requeridos.', 'error'); return; }
             logMessage(`Enviando ${mediaType} a ${jid}...`);
             try {
                 const body = { jid, mediaType, base64Data, caption: caption || undefined };
                 const data = await apiRequest(`/send-multimedia/${currentSessionId}`, 'POST', body);
                 logMessage(data.message || `Multimedia (${mediaType}) enviado.`, 'success');
                 multimediaCaptionInput.value = ''; multimediaBase64Input.value = '';
                  if (jid === currentChatJid) setTimeout(getMessages, 2000);
                  else setTimeout(getChats, 2000);
             } catch (error) { logMessage(`Error enviar multimedia: ${error.message}`, 'error'); }
         }

         async function getStatistics() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
             logMessage(`Obteniendo estadísticas de ${currentSessionId}...`);
             statsResultPre.textContent = 'Cargando...';
             try {
                 const data = await apiRequest(`/statistics/${currentSessionId}`);
                 statsResultPre.textContent = JSON.stringify(data, null, 2);
                 logMessage('Estadísticas obtenidas.', 'success');
             } catch (error) { logMessage(`Error estadísticas: ${error.message}`, 'error'); statsResultPre.textContent = `Error: ${error.message}`; }
         }

         async function getAuditLog() {
              if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
             logMessage(`Obteniendo log auditoría de ${currentSessionId}...`);
             auditLogResultPre.textContent = 'Cargando...';
             try {
                 const data = await apiRequest(`/audit-log/${currentSessionId}`);
                  if (data.auditLog && data.auditLog.length > 0) {
                     auditLogResultPre.textContent = data.auditLog.map(e => `${new Date(e.timestamp).toLocaleString()}: [${e.type}] ${e.jid||''} ${e.name||''} ${e.newName||''}`).join('\n');
                 } else { auditLogResultPre.textContent = 'No hay entradas.'; }
                 logMessage('Log auditoría obtenido.', 'success');
             } catch (error) { logMessage(`Error log auditoría: ${error.message}`, 'error'); auditLogResultPre.textContent = `Error: ${error.message}`; }
         }

         async function searchMessages() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
            const query = searchMsgQueryInput.value.trim();
            const fromDate = searchMsgFromDateInput.value ? new Date(searchMsgFromDateInput.value).toISOString() : '';
            const toDate = searchMsgToDateInput.value ? new Date(searchMsgToDateInput.value).toISOString() : '';
             let searchUrl = `/search-messages/${currentSessionId}?`; const params = [];
             if (query) params.push(`query=${encodeURIComponent(query)}`);
             if (fromDate) params.push(`fromDate=${encodeURIComponent(fromDate)}`);
             if (toDate) params.push(`toDate=${encodeURIComponent(toDate)}`);
             if (params.length === 0) { logMessage('Introduce criterio búsqueda.', 'error'); return; }
             searchUrl += params.join('&');
             logMessage(`Buscando mensajes con: ${params.join(', ')}...`);
             searchMessagesResultsDiv.innerHTML = '<p>Buscando...</p>';
             try {
                 const data = await apiRequest(searchUrl);
                 searchMessagesResultsDiv.innerHTML = '';
                 if (data.messages && data.messages.length > 0) {
                     data.messages.forEach(msg => {
                         const d = document.createElement('div'); d.className = 'p-1 border-b text-xs';
                         let text = msg.message?.conversation || msg.message?.extendedTextMessage?.text || '[No textual]';
                         if (text.length > 100) text = text.substring(0, 100) + '...';
                         d.textContent = `(${formatTimestamp(msg.messageTimestamp)}) ${msg.key.remoteJid}: ${text}`; searchMessagesResultsDiv.appendChild(d);
                     });
                     logMessage(`${data.messages.length} mensajes encontrados.`, 'success');
                 } else { searchMessagesResultsDiv.innerHTML = '<p>No se encontraron.</p>'; logMessage('No se encontraron mensajes.', 'info'); }
             } catch (error) { logMessage(`Error buscar mensajes: ${error.message}`, 'error'); searchMessagesResultsDiv.innerHTML = '<p>Error</p>'; }
         }

         async function setAutoresponder() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
            const keyword = autoresponderKeywordInput.value.trim(); const response = autoresponderResponseInput.value.trim();
             if (!keyword || !response) { logMessage('Palabra Clave y Respuesta requeridas.', 'error'); return; }
             logMessage(`Guardando regla: "${keyword}" -> "${response}"...`);
             try {
                 const body = { keyword, response };
                 const data = await apiRequest(`/set-autoresponder/${currentSessionId}`, 'POST', body);
                 logMessage(data.message || 'Regla guardada.', 'success');
                 autoresponderKeywordInput.value = ''; autoresponderResponseInput.value = '';
                 updateAutoresponderList(data.rules);
             } catch (error) { logMessage(`Error guardar regla: ${error.message}`, 'error'); }
         }

         function updateAutoresponderList(rules) {
             autoresponderRulesListDiv.innerHTML = '';
             if (rules && rules.length > 0) {
                 const list = document.createElement('ul'); list.className = 'list-disc list-inside text-xs mt-1';
                 rules.forEach(rule => { const item = document.createElement('li'); item.textContent = `"${rule.keyword}": "${rule.response}"`; list.appendChild(item); });
                 autoresponderRulesListDiv.appendChild(list);
             } else { autoresponderRulesListDiv.innerHTML = '<p class="text-xs text-gray-500 mt-1">No hay reglas.</p>'; }
         }

         async function scheduleMessage() {
             if (!currentSessionId) { logMessage('Selecciona sesión.', 'error'); return; }
            const jid = scheduleJidInput.value.trim(); const message = scheduleMessageInput.value.trim(); const scheduledTimeString = scheduleTimeInput.value;
             if (!jid || !message || !scheduledTimeString) { logMessage('JID, Mensaje y Fecha/Hora requeridos.', 'error'); return; }
             let scheduledTimeISO; try { scheduledTimeISO = new Date(scheduledTimeString).toISOString(); } catch (e) { logMessage('Fecha/hora inválida.', 'error'); return; }
             logMessage(`Programando mensaje para ${jid} a las ${new Date(scheduledTimeString).toLocaleString()}...`);
             try {
                 const body = { jid, message, scheduledTime: scheduledTimeISO };
                 const data = await apiRequest(`/schedule-message/${currentSessionId}`, 'POST', body);
                 logMessage(data.message || 'Mensaje programado.', 'success');
                 scheduleJidInput.value = ''; scheduleMessageInput.value = ''; scheduleTimeInput.value = '';
             } catch (error) { logMessage(`Error programar mensaje: ${error.message}`, 'error'); }
         }

        // --- Event Listeners (igual que antes) ---
        startSessionBtn.addEventListener('click', startSession);
        logoutSessionBtn.addEventListener('click', logoutSession);
        getQrBtn.addEventListener('click', getQrCode);
        listSessionsBtn.addEventListener('click', listSessions);
        refreshChatsBtn.addEventListener('click', getChats);
        sendMessageBtn.addEventListener('click', sendMessage);
        messageInput.addEventListener('keypress', (e) => { if (e.key === 'Enter') sendMessage(); });
        deleteMessageBtn.addEventListener('click', deleteMessage);
        deleteChatBtn.addEventListener('click', deleteChat);
        createGroupBtn.addEventListener('click', createGroup);
        forwardMessageBtn.addEventListener('click', forwardMessage);
        getContactsBtn.addEventListener('click', getContacts);
        createContactBtn.addEventListener('click', createContact);
        editContactBtn.addEventListener('click', editContact);
        searchContactBtn.addEventListener('click', searchContacts);
        exportContactsBtn.addEventListener('click', exportContacts); // Modificado para usar proxy
        showImportContactsBtn.addEventListener('click', toggleImportContacts);
        importContactsBtn.addEventListener('click', importContacts);
        showContactDetailsBtn.addEventListener('click', toggleContactDetails);
        getContactDetailsBtn.addEventListener('click', getContactDetails);
        sendMultimediaBtn.addEventListener('click', sendMultimedia);
        getStatsBtn.addEventListener('click', getStatistics);
        getAuditLogBtn.addEventListener('click', getAuditLog);
        searchMessagesBtn.addEventListener('click', searchMessages);
        setAutoresponderBtn.addEventListener('click', setAutoresponder);
        scheduleMessageBtn.addEventListener('click', scheduleMessage);

        // --- Inicialización ---
        logMessage('Interfaz PHP lista. Introduce un ID de sesión y haz clic en "Iniciar Sesión".');
        listSessions(); // Cargar sesiones al inicio

    </script>

</body>
</html>
