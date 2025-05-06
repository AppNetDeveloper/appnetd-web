<!DOCTYPE html>
<html lang="es"> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz WhatsApp API</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Estilos (iguales que antes) */
        body { font-family: 'Inter', sans-serif; }
        .message { max-width: 70%; padding: 8px 12px; margin-bottom: 8px; border-radius: 12px; word-wrap: break-word; }
        .message-sent { background-color: #DCF8C6; align-self: flex-end; border-bottom-right-radius: 0; }
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
        .lang-btn.active { background-color: #4f46e5; color: white; cursor: default; }
        .lang-btn:not(.active):hover { background-color: #e0e7ff; }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4 md:p-8">

    <div class="container mx-auto max-w-6xl bg-white p-6 rounded-lg shadow-lg">

        <div class="flex justify-end mb-4 space-x-2">
            <button id="lang-es" data-lang="es" class="lang-btn px-3 py-1 border rounded-md text-sm font-medium">Español</button>
            <button id="lang-en" data-lang="en" class="lang-btn px-3 py-1 border rounded-md text-sm font-medium">English</button>
        </div>

        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800" data-translate-key="mainTitle">Interfaz WhatsApp API (PHP Proxy)</h1>

        <div class="mb-8 p-4 border rounded-lg bg-gray-50">
            <h2 class="text-xl font-semibold mb-4 text-gray-700" data-translate-key="sessionManagementTitle">Gestión de Sesiones</h2>
             <div class="flex flex-col md:flex-row md:items-end gap-4 mb-4">
                <div class="flex-grow">
                    <label for="sessionId" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="sessionIdLabel">ID de Sesión:</label>
                    <input type="text" id="sessionId" data-translate-key-placeholder="sessionIdPlaceholder" placeholder="Ej: mi_sesion_1" class="w-full p-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                </div>
                <button id="startSessionBtn" data-translate-key="startSessionBtn" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Iniciar Sesión</button>
                <button id="logoutSessionBtn" data-translate-key="logoutSessionBtn" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Cerrar Sesión</button>
                <button id="getQrBtn" data-translate-key="getQrBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Obtener QR</button>
                 <button id="listSessionsBtn" data-translate-key="listSessionsBtn" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Listar Sesiones</button>
            </div>
             <div id="sessionsList" class="mt-4 text-sm text-gray-600"></div>
            <div id="qrCodeContainer" class="mt-4 text-center">
                <p class="text-gray-600 mb-2" data-translate-key="scanQrLabel">Escanea el código QR con tu WhatsApp:</p>
                <img id="qrCodeImage" src="" alt="Código QR" class="mx-auto hidden rounded-md shadow-sm">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="p-4 border rounded-lg bg-gray-50 md:col-span-1">
                <h2 class="text-xl font-semibold mb-4 text-gray-700" data-translate-key="chatsTitle">Chats</h2>
                <button id="refreshChatsBtn" data-translate-key="refreshChatsBtn" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md mb-4 transition duration-150 ease-in-out">Actualizar Chats</button>
                <div id="chatsList" class="space-y-2">
                    <p class="text-gray-500" data-translate-key="chatsPlaceholder">Selecciona una sesión e inicia para ver los chats.</p>
                </div>
                 <div class="mt-4 pt-4 border-t">
                     <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="deleteChatTitle">Eliminar Chat</h3>
                     <p class="text-xs text-gray-500 mb-2" data-translate-key="deleteChatDesc">Introduce el JID del chat a eliminar (ej: 123456789@s.whatsapp.net).</p>
                    <input type="text" id="deleteChatJid" data-translate-key-placeholder="deleteChatJidPlaceholder" placeholder="JID del chat a eliminar" class="w-full p-2 border border-gray-300 rounded-md mb-2 text-sm">
                    <button id="deleteChatBtn" data-translate-key="deleteChatBtn" class="w-full bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out text-sm">Eliminar Chat</button>
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
                     <p class="text-xs text-gray-500 mb-2" data-translate-key="deleteMessageDesc">Introduce los datos del mensaje a eliminar.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 text-sm">
                        <input type="text" id="deleteMsgId" data-translate-key-placeholder="deleteMsgIdPlaceholder" placeholder="ID del Mensaje" class="p-2 border border-gray-300 rounded-md">
                        <input type="text" id="deleteMsgRemoteJid" data-translate-key-placeholder="deleteMsgRemoteJidPlaceholder" placeholder="JID Remoto (Chat)" class="p-2 border border-gray-300 rounded-md">
                         <div>
                            <label for="deleteMsgFromMe" class="block text-xs font-medium text-gray-700" data-translate-key="deleteMsgFromMeLabel">¿Enviado por mí?</label>
                            <select id="deleteMsgFromMe" class="w-full p-2 border border-gray-300 rounded-md">
                                <option value="true" data-translate-key="yesOption">Sí</option>
                                <option value="false" data-translate-key="noOption">No</option>
                            </select>
                        </div>
                    </div>
                     <input type="text" id="deleteMsgParticipant" data-translate-key-placeholder="deleteMsgParticipantPlaceholder" placeholder="Participant JID (solo grupos, si fromMe=false)" class="w-full p-2 border border-gray-300 rounded-md mt-2 text-sm">
                    <button id="deleteMessageBtn" data-translate-key="deleteMessageBtn" class="w-full mt-2 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out text-sm">Eliminar Mensaje</button>
                </div>
            </div>
        </div>
        <div class="mb-8 p-4 border rounded-lg bg-gray-50">
             <h2 class="text-xl font-semibold mb-4 text-gray-700" data-translate-key="contactManagementTitle">Gestión de Contactos</h2>
             <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                 <button id="getContactsBtn" data-translate-key="getContactsBtn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Obtener Contactos</button>
                 <button id="exportContactsBtn" data-translate-key="exportContactsBtn" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Exportar (CSV)</button>
                 <button id="showImportContactsBtn" data-translate-key="importContactsShowBtn" class="bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Importar (JSON)</button>
                 <button id="showContactDetailsBtn" data-translate-key="viewDetailsBtn" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Ver Detalles</button>
             </div>
             <div id="contactsListContainer" class="mb-4 hidden">
                 <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="contactsListTitle">Lista de Contactos</h3>
                 <div id="contactsList" class="border rounded-md p-2 bg-white"></div>
             </div>
            <div id="createContactForm" class="mb-4 border-t pt-4">
                 <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="createContactTitle">Crear Contacto (Local)</h3>
                 <div class="flex flex-col md:flex-row gap-2">
                     <input type="text" id="createContactJid" data-translate-key-placeholder="createContactJidPlaceholder" placeholder="JID (ej: 123..@s.whatsapp.net)" class="flex-grow p-2 border rounded-md">
                     <input type="text" id="createContactName" data-translate-key-placeholder="createContactNamePlaceholder" placeholder="Nombre del Contacto" class="flex-grow p-2 border rounded-md">
                     <button id="createContactBtn" data-translate-key="createBtn" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-md">Crear</button>
                 </div>
             </div>
             <div id="editContactForm" class="mb-4 border-t pt-4">
                 <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="editContactTitle">Editar Contacto (Local)</h3>
                 <div class="flex flex-col md:flex-row gap-2">
                     <input type="text" id="editContactJid" data-translate-key-placeholder="editContactJidPlaceholder" placeholder="JID del contacto a editar" class="flex-grow p-2 border rounded-md">
                     <input type="text" id="editContactName" data-translate-key-placeholder="editContactNamePlaceholder" placeholder="Nuevo Nombre" class="flex-grow p-2 border rounded-md">
                     <button id="editContactBtn" data-translate-key="saveChangesBtn" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded-md">Guardar Cambios</button>
                 </div>
             </div>
             <div id="searchContactsForm" class="mb-4 border-t pt-4">
                 <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="searchContactsTitle">Buscar Contactos</h3>
                 <div class="flex flex-col md:flex-row gap-2">
                     <input type="text" id="searchContactQuery" data-translate-key-placeholder="searchContactsPlaceholder" placeholder="Buscar por nombre o JID" class="flex-grow p-2 border rounded-md">
                     <button id="searchContactBtn" data-translate-key="searchBtn" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md">Buscar</button>
                 </div>
                 <div id="searchContactsResults" class="mt-2 text-sm"></div>
             </div>
              <div id="contactDetailsForm" class="mb-4 border-t pt-4 hidden">
                 <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="contactDetailsTitle">Detalles del Contacto</h3>
                 <div class="flex flex-col md:flex-row gap-2">
                     <input type="text" id="contactDetailsJid" data-translate-key-placeholder="contactDetailsJidPlaceholder" placeholder="JID del contacto" class="flex-grow p-2 border rounded-md">
                     <button id="getContactDetailsBtn" data-translate-key="getDetailsBtn" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-md">Obtener Detalles</button>
                 </div>
                 <pre id="contactDetailsResult" class="mt-2 text-sm bg-gray-100 p-2 rounded-md overflow-x-auto"></pre>
             </div>
             <div id="importContactsForm" class="mb-4 border-t pt-4 hidden">
                 <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="importContactsTitle">Importar Contactos (JSON)</h3>
                 <textarea id="importContactsJson" rows="5" data-translate-key-placeholder="importContactsPlaceholder" placeholder='[{"jid": "jid1@s.whatsapp.net", "name": "Nombre 1"}, {"jid": "jid2@s.whatsapp.net", "name": "Nombre 2"}]' class="w-full p-2 border rounded-md mb-2"></textarea>
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
                    <label for="groupParticipants" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="groupParticipantsLabel">Participantes (JIDs separados por coma):</label>
                    <textarea id="groupParticipants" rows="3" data-translate-key-placeholder="groupParticipantsPlaceholder" placeholder="jid1@s.whatsapp.net, jid2@s.whatsapp.net" class="w-full p-2 border border-gray-300 rounded-md"></textarea>
                </div>
                <button id="createGroupBtn" data-translate-key="createGroupBtn" class="w-full bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Crear Grupo</button>
            </div>
            <div class="p-4 border rounded-lg bg-gray-50">
                <h2 class="text-xl font-semibold mb-4 text-gray-700" data-translate-key="forwardMessageTitle">Reenviar Mensaje</h2>
                 <p class="text-xs text-gray-500 mb-2" data-translate-key="forwardMessageDesc">Necesitas el ID del mensaje original (puedes verlo en la consola del servidor o inspeccionando el objeto mensaje).</p>
                <div class="mb-2">
                    <label for="forwardMessageId" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="forwardMessageIdLabel">ID del Mensaje a Reenviar:</label>
                    <input type="text" id="forwardMessageId" data-translate-key-placeholder="forwardMessageIdPlaceholder" placeholder="ID del mensaje original" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="forwardJid" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="forwardJidLabel">JID Destino:</label>
                    <input type="text" id="forwardJid" data-translate-key-placeholder="forwardJidPlaceholder" placeholder="jid_destino@s.whatsapp.net" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                <button id="forwardMessageBtn" data-translate-key="forwardMessageBtn" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Reenviar</button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
             <div class="p-4 border rounded-lg bg-gray-50">
                <h2 class="text-xl font-semibold mb-4 text-gray-700" data-translate-key="sendMultimediaTitle">Enviar Multimedia (Base64)</h2>
                 <div class="mb-2">
                    <label for="multimediaJid" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="multimediaJidLabel">JID Destino:</label>
                    <input type="text" id="multimediaJid" data-translate-key-placeholder="multimediaJidPlaceholder" placeholder="jid_destino@s.whatsapp.net" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                 <div class="mb-2">
                     <label for="multimediaType" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="multimediaTypeLabel">Tipo de Media:</label>
                     <select id="multimediaType" class="w-full p-2 border border-gray-300 rounded-md">
                         <option value="image" data-translate-key="imageOption">Imagen</option>
                         <option value="video" data-translate-key="videoOption">Video</option>
                         <option value="document" data-translate-key="documentOption">Documento</option>
                     </select>
                 </div>
                 <div class="mb-2">
                    <label for="multimediaCaption" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="multimediaCaptionLabel">Texto (Opcional):</label>
                    <input type="text" id="multimediaCaption" data-translate-key-placeholder="multimediaCaptionPlaceholder" placeholder="Descripción del archivo" class="w-full p-2 border border-gray-300 rounded-md">
                </div>
                 <div class="mb-4">
                    <label for="multimediaBase64" class="block text-sm font-medium text-gray-700 mb-1" data-translate-key="multimediaBase64Label">Datos Base64:</label>
                    <textarea id="multimediaBase64" rows="4" data-translate-key-placeholder="multimediaBase64Placeholder" placeholder="Pega aquí el contenido Base64 del archivo..." class="w-full p-2 border border-gray-300 rounded-md"></textarea>
                 </div>
                <button id="sendMultimediaBtn" data-translate-key="sendMultimediaBtn" class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Enviar Multimedia</button>
            </div>
            <div class="p-4 border rounded-lg bg-gray-50 space-y-4">
                 <h2 class="text-xl font-semibold mb-4 text-gray-700" data-translate-key="otherFunctionsTitle">Otras Funciones</h2>
                 <div>
                     <button id="getStatsBtn" data-translate-key="getStatsBtn" class="w-full bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Obtener Estadísticas</button>
                     <pre id="statsResult" class="mt-2 text-sm bg-white p-2 rounded-md overflow-x-auto"></pre>
                 </div>
                 <div>
                     <button id="getAuditLogBtn" data-translate-key="getAuditLogBtn" class="w-full bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Ver Log de Auditoría</button>
                     <pre id="auditLogResult" class="mt-2 text-sm bg-white p-2 rounded-md overflow-x-auto max-h-40 overflow-y-scroll"></pre>
                 </div>
                  <div class="border-t pt-4">
                     <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="searchMessagesTitle">Buscar Mensajes</h3>
                     <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 mb-2">
                         <input type="text" id="searchMsgQuery" data-translate-key-placeholder="searchMsgQueryPlaceholder" placeholder="Texto a buscar" class="p-2 border rounded-md text-sm">
                         <input type="datetime-local" id="searchMsgFromDate" data-translate-key-title="searchMsgFromDateTitle" title="Fecha Desde" class="p-2 border rounded-md text-sm">
                         <input type="datetime-local" id="searchMsgToDate" data-translate-key-title="searchMsgToDateTitle" title="Fecha Hasta" class="p-2 border rounded-md text-sm">
                     </div>
                     <button id="searchMessagesBtn" data-translate-key="searchMessagesBtn" class="w-full bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Buscar Mensajes</button>
                     <div id="searchMessagesResults" class="mt-2 text-sm max-h-40 overflow-y-scroll bg-white p-2 rounded"></div>
                 </div>
                 <div class="border-t pt-4">
                     <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="autoresponderTitle">Configurar Autoresponder</h3>
                     <div class="flex flex-col md:flex-row gap-2 mb-2">
                         <input type="text" id="autoresponderKeyword" data-translate-key-placeholder="autoresponderKeywordPlaceholder" placeholder="Palabra Clave" class="flex-grow p-2 border rounded-md">
                         <input type="text" id="autoresponderResponse" data-translate-key-placeholder="autoresponderResponsePlaceholder" placeholder="Respuesta Automática" class="flex-grow p-2 border rounded-md">
                     </div>
                     <div class="flex gap-2"> <button id="setAutoresponderBtn" data-translate-key="saveRuleBtn" class="flex-1 bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Guardar Regla</button>
                        <button id="getAutoresponderRulesBtn" data-translate-key="showRulesBtn" class="flex-1 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Mostrar Reglas</button>
                     </div>
                     <div id="autoresponderRulesList" class="mt-2 text-sm">
                         <p class="text-xs text-gray-500 mt-1" data-translate-key="autoresponderPlaceholder">Haz clic en "Mostrar Reglas" para ver la configuración actual.</p>
                     </div>
                 </div>
                 <div class="border-t pt-4">
                     <h3 class="text-lg font-medium mb-2 text-gray-700" data-translate-key="scheduleMessageTitle">Programar Mensaje</h3>
                     <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 mb-2">
                         <input type="text" id="scheduleJid" data-translate-key-placeholder="scheduleJidPlaceholder" placeholder="JID Destino" class="p-2 border rounded-md">
                         <input type="text" id="scheduleMessage" data-translate-key-placeholder="scheduleMessagePlaceholder" placeholder="Mensaje" class="p-2 border rounded-md">
                         <input type="datetime-local" id="scheduleTime" data-translate-key-title="scheduleTimeTitle" title="Fecha y Hora" class="p-2 border rounded-md">
                     </div>
                     <button id="scheduleMessageBtn" data-translate-key="scheduleMessageBtn" class="w-full bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded-md transition duration-150 ease-in-out">Programar</button>
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
        let currentSessionId = null;
        let currentChatJid = null;
        const proxyUrl = 'proxy.php';
        let chatUpdateInterval = null;
        let messageUpdateInterval = null;
        const CHAT_UPDATE_INTERVAL_MS = 15000;
        const MESSAGE_UPDATE_INTERVAL_MS = 7000;
        let currentLanguage = 'es'; // Default language

        // --- Traducciones ---
        const translations = {
            // General UI
            mainTitle: { es: "Interfaz WhatsApp API (PHP Proxy)", en: "WhatsApp API Interface (PHP Proxy)" },
            interfaceReady: { es: 'Interfaz lista. Introduce un ID de sesión y haz clic en "Iniciar Sesión".', en: 'Interface ready. Enter a Session ID and click "Start Session".' },
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
            // Session Management
            sessionManagementTitle: { es: "Gestión de Sesiones", en: "Session Management" },
            sessionIdLabel: { es: "ID de Sesión:", en: "Session ID:" },
            sessionIdPlaceholder: { es: "Ej: mi_sesion_1", en: "E.g.: my_session_1" },
            startSessionBtn: { es: "Iniciar Sesión", en: "Start Session" },
            logoutSessionBtn: { es: "Cerrar Sesión", en: "Logout Session" },
            getQrBtn: { es: "Obtener QR", en: "Get QR" },
            listSessionsBtn: { es: "Listar Sesiones", en: "List Sessions" },
            scanQrLabel: { es: "Escanea el código QR con tu WhatsApp:", en: "Scan the QR code with your WhatsApp:" },
            sessionsActive: { es: "Sesiones Activas:", en: "Active Sessions:" },
            noActiveSessions: { es: "No hay sesiones activas en el servidor.", en: "No active sessions on the server." },
            errorLoadingSessions: { es: "Error al cargar sesiones.", en: "Error loading sessions." },
            startingSession: { es: "Iniciando sesión: {sessionId}...", en: "Starting session: {sessionId}..." },
            startSessionRequestSent: { es: "Solicitud para iniciar {sessionId} enviada.", en: "Request to start {sessionId} sent." },
            errorStartingSession: { es: "Error al iniciar sesión {sessionId}: {error}", en: "Error starting session {sessionId}: {error}" },
            closingSession: { es: "Cerrando sesión: {sessionId}...", en: "Closing session: {sessionId}..." },
            confirmLogout: { es: "¿Seguro cerrar y eliminar sesión {sessionId}?", en: "Are you sure you want to close and delete session {sessionId}?" },
            sessionClosed: { es: "Sesión {sessionId} cerrada.", en: "Session {sessionId} closed." },
            errorClosingSession: { es: "Error al cerrar sesión {sessionId}: {error}", en: "Error closing session {sessionId}: {error}" },
            gettingQr: { es: "Obteniendo QR para {sessionId}...", en: "Getting QR for {sessionId}..." },
            qrReceived: { es: "Código QR recibido. Escanea para conectar.", en: "QR code received. Scan to connect." },
            waitingForQr: { es: "Esperando código QR o ya conectado...", en: "Waiting for QR code or already connected..." },
            qrNotGenerated: { es: "El código QR aún no se ha generado. Por favor, espere.", en: "QR code has not been generated yet. Please wait." },
            possiblyConnected: { es: "Posiblemente conectado. Intentando cargar chats...", en: "Possibly connected. Trying to load chats..." },
            errorGettingQr: { es: "Error al obtener QR: {error}", en: "Error getting QR: {error}" },
            sessionNotStarted: { es: "La sesión podría no estar iniciada.", en: "Session might not be started." },
            errorQrFallback: { es: "Error QR, intentando cargar chats por si ya está conectado...", en: "QR error, trying to load chats in case already connected..." },
            listingSessions: { es: "Listando sesiones activas...", en: "Listing active sessions..." },
            activeSessionsObtained: { es: "Lista de sesiones activas obtenida.", en: "Active sessions list obtained." },
            noSessionsFound: { es: "No se encontraron sesiones activas.", en: "No active sessions found." },
            errorListingSessions: { es: "Error al listar sesiones: {error}", en: "Error listing sessions: {error}" },
            // Chats
            chatsTitle: { es: "Chats", en: "Chats" },
            refreshChatsBtn: { es: "Actualizar Chats", en: "Refresh Chats" },
            chatsPlaceholder: { es: "Selecciona una sesión e inicia para ver los chats.", en: "Select a session and start to view chats." },
            deleteChatTitle: { es: "Eliminar Chat", en: "Delete Chat" },
            deleteChatDesc: { es: "Introduce el JID del chat a eliminar (ej: 123456789@s.whatsapp.net).", en: "Enter the JID of the chat to delete (e.g., 123456789@s.whatsapp.net)." },
            deleteChatJidPlaceholder: { es: "JID del chat a eliminar", en: "JID of chat to delete" },
            deleteChatBtn: { es: "Eliminar Chat", en: "Delete Chat" },
            gettingChats: { es: "Obteniendo chats para {sessionId}...", en: "Getting chats for {sessionId}..." },
            loadingChats: { es: "Cargando chats...", en: "Loading chats..." },
            chatsLoaded: { es: "{count} chats cargados.", en: "{count} chats loaded." },
            noChatsFound: { es: "No se encontraron chats o la sesión no está lista.", en: "No chats found or session not ready." },
            errorGettingChats: { es: "Error al obtener chats: {error}", en: "Error getting chats: {error}" },
            errorLoadingChats: { es: "Error al cargar chats.", en: "Error loading chats." },
            sessionNotConnected: { es: "Sesión no conectada", en: "Session not connected" },
            deletingChat: { es: "Eliminando chat {jid} localmente...", en: "Deleting chat {jid} locally..." },
            confirmDeleteChat: { es: "¿Estás seguro de eliminar localmente el chat {jid}?", en: "Are you sure you want to delete chat {jid} locally?" },
            chatDeleted: { es: "Chat {jid} eliminado localmente.", en: "Chat {jid} deleted locally." },
            errorDeletingChat: { es: "Error al eliminar chat: {error}", en: "Error deleting chat: {error}" },
            chatDeletedMsg: { es: "Chat eliminado.", en: "Chat deleted." },
            // Messages
            messagesTitle: { es: "Mensajes del Chat:", en: "Chat Messages:" },
            noChatSelected: { es: "Ninguno seleccionado", en: "None selected" },
            messagesPlaceholder: { es: "Selecciona un chat para ver los mensajes.", en: "Select a chat to view messages." },
            messageInputPlaceholder: { es: "Escribe tu mensaje...", en: "Type your message..." },
            sendMessageBtn: { es: "Enviar", en: "Send" },
            deleteMessageTitle: { es: "Eliminar Mensaje", en: "Delete Message" },
            deleteMessageDesc: { es: "Introduce los datos del mensaje a eliminar.", en: "Enter the details of the message to delete." },
            deleteMsgIdPlaceholder: { es: "ID del Mensaje", en: "Message ID" },
            deleteMsgRemoteJidPlaceholder: { es: "JID Remoto (Chat)", en: "Remote JID (Chat)" },
            deleteMsgFromMeLabel: { es: "¿Enviado por mí?", en: "Sent by me?" },
            deleteMsgParticipantPlaceholder: { es: "Participant JID (solo grupos, si fromMe=false)", en: "Participant JID (groups only, if fromMe=false)" },
            deleteMessageBtn: { es: "Eliminar Mensaje", en: "Delete Message" },
            gettingMessages: { es: "Obteniendo mensajes para {jid}...", en: "Getting messages for {jid}..." },
            loadingMessages: { es: "Cargando mensajes...", en: "Loading messages..." },
            messagesLoaded: { es: "Mensajes de {jid} cargados.", en: "Messages from {jid} loaded." },
            noMessagesFound: { es: "No hay mensajes en este chat.", en: "No messages in this chat." },
            errorGettingMessages: { es: "Error al obtener mensajes: {error}", en: "Error getting messages: {error}" },
            errorLoadingMessages: { es: "Error al cargar mensajes.", en: "Error loading messages." },
            sendingMessage: { es: "Enviando mensaje a {jid}...", en: "Sending message to {jid}..." },
            messageSent: { es: "Mensaje enviado.", en: "Message sent." },
            errorSendingMessage: { es: "Error al enviar mensaje: {error}", en: "Error sending message: {error}" },
            deletingMessage: { es: "Solicitando eliminar mensaje {id} de {jid}...", en: "Requesting to delete message {id} from {jid}..." },
            confirmDeleteMessage: { es: "¿Estás seguro de eliminar el mensaje con ID \"{id}\" del chat \"{jid}\"?", en: "Are you sure you want to delete message with ID \"{id}\" from chat \"{jid}\"?" },
            deleteRequestSent: { es: "Solicitud de eliminación para {id} enviada.", en: "Delete request for {id} sent." },
            errorDeletingMessage: { es: "Error al eliminar mensaje: {error}", en: "Error deleting message: {error}" },
            // Contacts
            contactManagementTitle: { es: "Gestión de Contactos", en: "Contact Management" },
            getContactsBtn: { es: "Obtener Contactos", en: "Get Contacts" },
            exportContactsBtn: { es: "Exportar (CSV)", en: "Export (CSV)" },
            importContactsShowBtn: { es: "Importar (JSON)", en: "Import (JSON)" },
            viewDetailsBtn: { es: "Ver Detalles", en: "View Details" },
            contactsListTitle: { es: "Lista de Contactos", en: "Contacts List" },
            createContactTitle: { es: "Crear Contacto (Local)", en: "Create Contact (Local)" },
            createContactJidPlaceholder: { es: "JID (ej: 123..@s.whatsapp.net)", en: "JID (e.g.: 123..@s.whatsapp.net)" },
            createContactNamePlaceholder: { es: "Nombre del Contacto", en: "Contact Name" },
            editContactTitle: { es: "Editar Contacto (Local)", en: "Edit Contact (Local)" },
            editContactJidPlaceholder: { es: "JID del contacto a editar", en: "JID of contact to edit" },
            editContactNamePlaceholder: { es: "Nuevo Nombre", en: "New Name" },
            searchContactsTitle: { es: "Buscar Contactos", en: "Search Contacts" },
            searchContactsPlaceholder: { es: "Buscar por nombre o JID", en: "Search by name or JID" },
            contactDetailsTitle: { es: "Detalles del Contacto", en: "Contact Details" },
            contactDetailsJidPlaceholder: { es: "JID del contacto", en: "Contact JID" },
            getDetailsBtn: { es: "Obtener Detalles", en: "Get Details" },
            importContactsTitle: { es: "Importar Contactos (JSON)", en: "Import Contacts (JSON)" },
            importContactsPlaceholder: { es: '[{"jid": "jid1@s.whatsapp.net", "name": "Nombre 1"}, ...]', en: '[{"jid": "jid1@s.whatsapp.net", "name": "Name 1"}, ...]' },
            gettingContacts: { es: "Obteniendo contactos para {sessionId}...", en: "Getting contacts for {sessionId}..." },
            contactsLoaded: { es: "{count} contactos cargados.", en: "{count} contacts loaded." },
            noContactsFound: { es: "No se encontraron contactos.", en: "No contacts found." },
            errorGettingContacts: { es: "Error al obtener contactos: {error}", en: "Error getting contacts: {error}" },
            creatingContact: { es: "Creando contacto local {name} ({jid})...", en: "Creating local contact {name} ({jid})..." },
            contactCreated: { es: "Contacto {name} creado localmente.", en: "Contact {name} created locally." },
            errorCreatingContact: { es: "Error al crear contacto: {error}", en: "Error creating contact: {error}" },
            editingContact: { es: "Editando contacto local {jid} a \"{name}\"...", en: "Editing local contact {jid} to \"{name}\"..." },
            contactEdited: { es: "Contacto {jid} actualizado a {name}.", en: "Contact {jid} updated to {name}." },
            errorEditingContact: { es: "Error al editar contacto: {error}", en: "Error editing contact: {error}" },
            searchingContacts: { es: "Buscando contactos con \"{query}\"...", en: "Searching contacts with \"{query}\"..." },
            searching: { es: "Buscando...", en: "Searching..." },
            contactsFound: { es: "{count} contactos encontrados.", en: "{count} contacts found." },
            noMatchesFound: { es: "No se encontraron coincidencias.", en: "No matches found." },
            errorSearchingContacts: { es: "Error al buscar contactos: {error}", en: "Error searching contacts: {error}" },
            searchError: { es: "Error en la búsqueda.", en: "Search error." },
            exportingContacts: { es: "Exportando contactos de {sessionId}...", en: "Exporting contacts from {sessionId}..." },
            exportingContactsInfo: { es: "Intentando iniciar descarga CSV (requiere configuración en proxy.php).", en: "Attempting to start CSV download (requires setup in proxy.php)." },
            contactsExported: { es: "Contactos exportados a CSV.", en: "Contacts exported to CSV." },
            errorExportingContacts: { es: "Error al exportar contactos: {error}", en: "Error exporting contacts: {error}" },
            importingContacts: { es: "Importando {count} contactos...", en: "Importing {count} contacts..." },
            contactsImported: { es: "Contactos importados.", en: "Contacts imported." },
            errorImportingContacts: { es: "Error al importar contactos: {error}", en: "Error importing contacts: {error}" },
            gettingDetails: { es: "Obteniendo detalles de {jid}...", en: "Getting details for {jid}..." },
            detailsObtained: { es: "Detalles de {jid} obtenidos.", en: "Details for {jid} obtained." },
            errorGettingDetails: { es: "Error al obtener detalles: {error}", en: "Error getting details: {error}" },
            // Groups & Forwarding
            createGroupTitle: { es: "Crear Grupo", en: "Create Group" },
            groupSubjectLabel: { es: "Asunto del Grupo:", en: "Group Subject:" },
            groupSubjectPlaceholder: { es: "Nombre del nuevo grupo", en: "New group name" },
            groupParticipantsLabel: { es: "Participantes (JIDs separados por coma):", en: "Participants (JIDs separated by comma):" },
            groupParticipantsPlaceholder: { es: "jid1@s.whatsapp.net, jid2@s.whatsapp.net", en: "jid1@s.whatsapp.net, jid2@s.whatsapp.net" },
            createGroupBtn: { es: "Crear Grupo", en: "Create Group" },
            forwardMessageTitle: { es: "Reenviar Mensaje", en: "Forward Message" },
            forwardMessageDesc: { es: "Necesitas el ID del mensaje original (puedes verlo en la consola del servidor o inspeccionando el objeto mensaje).", en: "You need the original message ID (you can see it in the server console or by inspecting the message object)." },
            forwardMessageIdLabel: { es: "ID del Mensaje a Reenviar:", en: "Message ID to Forward:" },
            forwardMessageIdPlaceholder: { es: "ID del mensaje original", en: "Original message ID" },
            forwardJidLabel: { es: "JID Destino:", en: "Destination JID:" },
            forwardJidPlaceholder: { es: "jid_destino@s.whatsapp.net", en: "destination_jid@s.whatsapp.net" },
            forwardMessageBtn: { es: "Reenviar", en: "Forward" },
            creatingGroup: { es: "Creando grupo \"{subject}\"...", en: "Creating group \"{subject}\"..." },
            groupCreated: { es: "Grupo \"{subject}\" creado con ID: {id}", en: "Group \"{subject}\" created with ID: {id}" },
            errorCreatingGroup: { es: "Error al crear grupo: {error}", en: "Error creating group: {error}" },
            forwardingMessage: { es: "Reenviando mensaje {id} a {jid}...", en: "Forwarding message {id} to {jid}..." },
            messageForwarded: { es: "Mensaje {id} reenviado.", en: "Message {id} forwarded." },
            errorForwardingMessage: { es: "Error al reenviar mensaje: {error}", en: "Error forwarding message: {error}" },
            // Multimedia & Other Functions
            sendMultimediaTitle: { es: "Enviar Multimedia (Base64)", en: "Send Multimedia (Base64)" },
            multimediaJidLabel: { es: "JID Destino:", en: "Destination JID:" },
            multimediaJidPlaceholder: { es: "jid_destino@s.whatsapp.net", en: "destination_jid@s.whatsapp.net" },
            multimediaTypeLabel: { es: "Tipo de Media:", en: "Media Type:" },
            imageOption: { es: "Imagen", en: "Image" },
            videoOption: { es: "Video", en: "Video" },
            documentOption: { es: "Documento", en: "Document" },
            multimediaCaptionLabel: { es: "Texto (Opcional):", en: "Caption (Optional):" },
            multimediaCaptionPlaceholder: { es: "Descripción del archivo", en: "File description" },
            multimediaBase64Label: { es: "Datos Base64:", en: "Base64 Data:" },
            multimediaBase64Placeholder: { es: "Pega aquí el contenido Base64 del archivo...", en: "Paste Base64 content here..." },
            sendMultimediaBtn: { es: "Enviar Multimedia", en: "Send Multimedia" },
            otherFunctionsTitle: { es: "Otras Funciones", en: "Other Functions" },
            getStatsBtn: { es: "Obtener Estadísticas", en: "Get Statistics" },
            getAuditLogBtn: { es: "Ver Log de Auditoría", en: "View Audit Log" },
            searchMessagesTitle: { es: "Buscar Mensajes", en: "Search Messages" },
            searchMsgQueryPlaceholder: { es: "Texto a buscar", en: "Text to search" },
            searchMsgFromDateTitle: { es: "Fecha Desde", en: "Date From" },
            searchMsgToDateTitle: { es: "Fecha Hasta", en: "Date To" },
            searchMessagesBtn: { es: "Buscar Mensajes", en: "Search Messages" },
            autoresponderTitle: { es: "Configurar Autoresponder", en: "Configure Autoresponder" },
            autoresponderKeywordPlaceholder: { es: "Palabra Clave", en: "Keyword" },
            autoresponderResponsePlaceholder: { es: "Respuesta Automática", en: "Automatic Response" },
            saveRuleBtn: { es: "Guardar Regla", en: "Save Rule" },
            showRulesBtn: { es: "Mostrar Reglas", en: "Show Rules" },
            autoresponderPlaceholder: { es: 'Haz clic en "Mostrar Reglas" para ver la configuración actual.', en: 'Click "Show Rules" to view the current configuration.' },
            scheduleMessageTitle: { es: "Programar Mensaje", en: "Schedule Message" },
            scheduleJidPlaceholder: { es: "JID Destino", en: "Destination JID" },
            scheduleMessagePlaceholder: { es: "Mensaje", en: "Message" },
            scheduleTimeTitle: { es: "Fecha y Hora", en: "Date and Time" },
            scheduleMessageBtn: { es: "Programar", en: "Schedule" },
            sendingMultimedia: { es: "Enviando {type} a {jid}...", en: "Sending {type} to {jid}..." },
            multimediaSent: { es: "Multimedia ({type}) enviado.", en: "Multimedia ({type}) sent." },
            errorSendingMultimedia: { es: "Error enviar multimedia: {error}", en: "Error sending multimedia: {error}" },
            gettingStats: { es: "Obteniendo estadísticas de {sessionId}...", en: "Getting statistics for {sessionId}..." },
            statsObtained: { es: "Estadísticas obtenidas.", en: "Statistics obtained." },
            errorGettingStats: { es: "Error al obtener estadísticas: {error}", en: "Error getting statistics: {error}" },
            gettingAuditLog: { es: "Obteniendo log auditoría de {sessionId}...", en: "Getting audit log for {sessionId}..." },
            auditLogObtained: { es: "Log de auditoría obtenido.", en: "Audit log obtained." },
            noAuditLogEntries: { es: "No hay entradas en el log.", en: "No entries in the log." },
            errorGettingAuditLog: { es: "Error al obtener log de auditoría: {error}", en: "Error getting audit log: {error}" },
            searchingMessages: { es: "Buscando mensajes con criterios: {criteria}...", en: "Searching messages with criteria: {criteria}..." },
            messagesFound: { es: "{count} mensajes encontrados.", en: "{count} messages found." },
            noMessagesFoundCriteria: { es: "No se encontraron mensajes con esos criterios.", en: "No messages found with those criteria." },
            errorSearchingMessages: { es: "Error al buscar mensajes: {error}", en: "Error searching messages: {error}" },
            savingRule: { es: "Guardando regla: \"{keyword}\" -> \"{response}\"...", en: "Saving rule: \"{keyword}\" -> \"{response}\"..." },
            ruleSaved: { es: "Regla guardada.", en: "Rule saved." },
            errorSavingRule: { es: "Error guardar regla: {error}", en: "Error saving rule: {error}" },
            gettingRules: { es: "Obteniendo reglas de autoresponder para {sessionId}...", en: "Getting autoresponder rules for {sessionId}..." },
            rulesLoaded: { es: "Reglas de autoresponder cargadas.", en: "Autoresponder rules loaded." },
            errorGettingRules: { es: "Error al obtener reglas de autoresponder: {error}", en: "Error getting autoresponder rules: {error}" },
            errorLoadingRules: { es: "Error al cargar reglas.", en: "Error loading rules." },
            noRulesConfigured: { es: "No hay reglas configuradas para esta sesión.", en: "No rules configured for this session." },
            deletingRule: { es: "Eliminando regla de autoresponder para \"{keyword}\"...", en: "Deleting autoresponder rule for \"{keyword}\"..." },
            confirmDeleteRule: { es: "¿Estás seguro de eliminar la regla para la palabra clave \"{keyword}\"?", en: "Are you sure you want to delete the rule for the keyword \"{keyword}\"?" },
            ruleDeleted: { es: "Regla para \"{keyword}\" eliminada.", en: "Rule for \"{keyword}\" deleted." },
            errorDeletingRule: { es: "Error al eliminar regla: {error}", en: "Error deleting rule: {error}" },
            schedulingMessage: { es: "Programando mensaje para {jid} a las {time}...", en: "Scheduling message for {jid} at {time}..." },
            messageScheduled: { es: "Mensaje programado.", en: "Message scheduled." },
            errorSchedulingMessage: { es: "Error al programar mensaje: {error}", en: "Error scheduling message: {error}" },
            // Log
            logTitle: { es: "Log", en: "Log" },
            // Placeholders for inputs that might not have labels
            jidToEditPlaceholder: { es: "JID del contacto a editar", en: "JID of contact to edit" },
            newNamePlaceholder: { es: "Nuevo Nombre", en: "New Name" },
            searchQueryPlaceholder: { es: "Buscar por nombre o JID", en: "Search by name or JID" },
            contactJidPlaceholder: { es: "JID del contacto", en: "Contact JID" },
            // General Errors/Info
            selectSessionError: { es: "Selecciona una sesión activa.", en: "Select an active session." },
            selectChatError: { es: "Selecciona una sesión y un chat primero.", en: "Select a session and a chat first." },
            invalidJsonError: { es: "Error en el formato JSON: {error}", en: "Error in JSON format: {error}" },
            jsonMustBeArrayError: { es: "El JSON debe ser un array de contactos.", en: "JSON must be an array of contacts." },
            jsonContactStructureError: { es: "Cada contacto en el JSON debe tener 'jid' y 'name'.", en: "Each contact in JSON must have 'jid' and 'name'." },
            pasteJsonError: { es: "Pega el JSON de contactos en el área de texto.", en: "Paste the contacts JSON in the text area." },
            jidAndNameRequiredError: { es: "Se requieren JID y Nombre.", en: "JID and Name are required." },
            jidAndNewNameRequiredError: { es: "Se requieren JID y Nuevo Nombre.", en: "JID and New Name are required." },
            searchQueryRequiredError: { es: "Introduce un término de búsqueda.", en: "Enter a search term." },
            contactJidRequiredError: { es: "Introduce el JID del contacto.", en: "Enter the contact JID." },
            subjectAndParticipantsRequiredError: { es: "Se requieren asunto y participantes.", en: "Subject and participants are required." },
            validJidsRequiredError: { es: "Introduce al menos un JID de participante válido.", en: "Enter at least one valid participant JID." },
            forwardIdsRequiredError: { es: "Se requieren ID del mensaje original y JID de destino.", en: "Original message ID and destination JID are required." },
            multimediaRequiredError: { es: "Se requieren JID de destino y datos Base64.", en: "Destination JID and Base64 data are required." },
            searchCriteriaRequiredError: { es: "Introduce al menos un criterio de búsqueda (texto, fecha desde o fecha hasta).", en: "Enter at least one search criterion (text, date from, or date to)." },
            autoresponderFieldsRequiredError: { es: "Se requieren Palabra Clave y Respuesta.", en: "Keyword and Response are required." },
            invalidKeywordError: { es: "Keyword inválida para eliminar.", en: "Invalid keyword to delete." },
            scheduleFieldsRequiredError: { es: "Se requieren JID, Mensaje y Fecha/Hora.", en: "JID, Message, and Date/Time are required." },
            invalidDateTimeError: { es: "Formato de fecha/hora inválido.", en: "Invalid date/time format." },
             // Added for consistency
            sessionClosedStatus: { es: "Sesión cerrada.", en: "Session closed." },
            autoresponderPlaceholderLoggedOut: { es: "Inicia sesión para ver/configurar reglas.", en: "Log in to view/configure rules." },
            startSessionFirstError: { es: "Primero inicia una sesión.", en: "Start a session first." },
            qrNotGeneratedCheck: { es: "aún no se ha generado", en: "has not been generated yet" }, // Used for checking QR status message
            sessionNotConnectedCheck: { es: "no conectada", en: "not connected" }, // Used for checking session status message
            noMessages: { es: "No hay mensajes", en: "No messages" },
            unsupportedMessageType: { es: "Tipo de mensaje no soportado", en: "Unsupported message type" },
            imagePlaceholder: { es: "[Imagen]", en: "[Image]" },
            videoPlaceholder: { es: "[Video]", en: "[Video]" },
            documentPlaceholder: { es: "[Documento]", en: "[Document]" },
            stickerPlaceholder: { es: "[Sticker]", en: "[Sticker]" },
            audioPlaceholder: { es: "[Audio]", en: "[Audio]" },
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
            deleteMessageFieldsError: { es: "Se requieren ID del mensaje y JID del chat para eliminar.", en: "Message ID and Chat JID are required to delete." },
            deleteChatJidRequiredError: { es: "Introduce el JID del chat a eliminar.", en: "Enter the JID of the chat to delete." },
            invalidCsvResponseError: { es: "La respuesta del proxy no fue un archivo CSV válido.", en: "The proxy response was not a valid CSV file." },
            loadingRules: { es: "Cargando reglas...", en: "Loading rules..." },
            nonTextMessage: { es: "[Mensaje no textual]", en: "[Non-text message]" },
            // Proxy related errors
            fetchProxyError: { es: "Error de Fetch/Proxy: {error}", en: "Fetch/Proxy Error: {error}" },
            proxyErrorStatus: { es: "Error {status} desde el proxy", en: "Error {status} from proxy" },
            csvDataReceived: { es: "Datos CSV recibidos", en: "CSV Data Received" }, // Example for apiRequest log
        };

        // --- Referencias a Elementos del DOM ---
        // *** Definir logMessagesDiv PRIMERO ***
        const logMessagesDiv = document.getElementById('logMessages');
        // ... (resto de referencias) ...
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
        const getAutoresponderRulesBtn = document.getElementById('getAutoresponderRulesBtn'); // Botón nuevo
        const scheduleMessageBtn = document.getElementById('scheduleMessageBtn');
        const scheduleJidInput = document.getElementById('scheduleJid');
        const scheduleMessageInput = document.getElementById('scheduleMessage');
        const scheduleTimeInput = document.getElementById('scheduleTime');
        const langEsBtn = document.getElementById('lang-es');
        const langEnBtn = document.getElementById('lang-en');


        // --- Funciones Auxiliares ---
        function logMessage(messageKey, type = 'info', args = {}) {
             // Asegurarse que logMessagesDiv exista antes de usarlo
             if (!logMessagesDiv) {
                 console.error("logMessagesDiv no está definido!");
                 return;
             }
             let translatedMessage = messageKey;
             if (typeof messageKey === 'string' && translations[messageKey]) {
                 translatedMessage = translate(messageKey, args);
             } else if (typeof messageKey === 'string') {
                  translatedMessage = messageKey.replace(/\{(\w+)\}/g, (match, key) => args[key] !== undefined ? args[key] : match);
             }
            const p = document.createElement('p');
            const timestamp = new Date().toLocaleTimeString();
            p.textContent = `[${timestamp}] ${translatedMessage}`;
            if (type === 'error') p.className = 'text-red-600';
            else if (type === 'success') p.className = 'text-green-600';
            else p.className = 'text-gray-700';
            logMessagesDiv.appendChild(p);
            logMessagesDiv.scrollTop = logMessagesDiv.scrollHeight;
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
             console.log(`Proxy Request: ${method} -> ${proxyUrl} -> ${endpoint} ${body ? JSON.stringify(body) : ''}`); // Log no traducido para debug
             try {
                const response = await fetch(proxyUrl, { method: 'POST', headers: { 'Content-Type': 'application/json', }, body: JSON.stringify(proxyRequestBody) });
                const contentType = response.headers.get("content-type");
                if (contentType && contentType.includes("text/csv")) { logMessage('csvDataReceived', 'success'); return await response.text(); }
                const responseData = await response.json();
                if (!response.ok || responseData.error) { const errorMessage = responseData.error || translate('proxyErrorStatus', {status: response.status}); logMessage(translate('error') + `: ${errorMessage}`, 'error'); throw new Error(errorMessage); }
                console.log(`Proxy Response ${response.status}: ${JSON.stringify(responseData)}`); // Log no traducido para debug
                return responseData;
            } catch (error) {
                logMessage('fetchProxyError', 'error', { error: error.message });
                if (error instanceof SyntaxError) { console.error("Respuesta no JSON:", await response.text().catch(() => "")); }
                throw error;
            }
        }

        // --- Función para cambiar idioma ---
         function setLanguage(lang) {
            currentLanguage = lang;
            document.documentElement.lang = lang;

            langEsBtn.classList.toggle('active', lang === 'es');
            langEnBtn.classList.toggle('active', lang === 'en');

            document.querySelectorAll('[data-translate-key]').forEach(element => {
                const key = element.getAttribute('data-translate-key');
                element.textContent = translate(key); // Usar la función translate
            });
            document.querySelectorAll('[data-translate-key-placeholder]').forEach(element => {
                const key = element.getAttribute('data-translate-key-placeholder');
                 element.placeholder = translate(key);
            });
             document.querySelectorAll('[data-translate-key-title]').forEach(element => {
                const key = element.getAttribute('data-translate-key-title');
                 element.title = translate(key);
            });
             // Actualizar textos que no usan data-translate-key directamente
             document.title = translate('mainTitle'); // Actualizar título de la página
             if (chatsListDiv.querySelector('p')) chatsListDiv.querySelector('p').textContent = translate('chatsPlaceholder');
             if (messagesContainer.querySelector('p')) messagesContainer.querySelector('p').textContent = translate('messagesPlaceholder');
             if (autoresponderRulesListDiv.querySelector('p')) autoresponderRulesListDiv.querySelector('p').textContent = translate('autoresponderPlaceholder');
             if (currentChatNameSpan.dataset.translateKey === 'noChatSelected') currentChatNameSpan.textContent = translate('noChatSelected');

             // Re-render lists/dynamic content if needed
             if (currentSessionId) {
                 getChats(true);
                 if (currentChatJid) getMessages(true);
                 if (!autoresponderRulesListDiv.querySelector('p')) getAutoresponderRules(); // Re-render rules list
             }
         }


        // --- Funciones de Actualización Automática ---
        function startAutoUpdate() { /* ... (igual) ... */
             stopAutoUpdate(); if (!currentSessionId) return; logMessage('startingAutoUpdate', 'info');
             chatUpdateInterval = setInterval(() => { if (currentSessionId) { getChats(true); } else { stopAutoUpdate(); } }, CHAT_UPDATE_INTERVAL_MS);
             messageUpdateInterval = setInterval(() => { if (currentSessionId && currentChatJid) { getMessages(true); } if (!currentSessionId) { stopAutoUpdate(); } }, MESSAGE_UPDATE_INTERVAL_MS);
         }
        function stopAutoUpdate() { /* ... (igual) ... */
            if (chatUpdateInterval) { clearInterval(chatUpdateInterval); chatUpdateInterval = null; logMessage('autoUpdateChatsStopped', 'info'); }
            if (messageUpdateInterval) { clearInterval(messageUpdateInterval); messageUpdateInterval = null; logMessage('autoUpdateMessagesStopped', 'info'); }
        }

        // --- Funciones API (Restauradas y adaptadas para usar translate) ---
        async function startSession() {
            const sid = sessionIdInput.value.trim();
            if (!sid) { logMessage('sessionIdRequiredError', 'error'); return; }
            currentSessionId = sid;
            logMessage('startingSession', 'info', { sessionId: currentSessionId });
            stopAutoUpdate();
            try {
                const data = await apiRequest(`/start-session/${currentSessionId}`, 'POST');
                logMessage(data.message || translate('startSessionRequestSent', { sessionId: currentSessionId }), 'success');
                setTimeout(getQrCode, 2000);
                autoresponderRulesListDiv.innerHTML = `<p class="text-xs text-gray-500 mt-1">${translate('autoresponderPlaceholder')}</p>`;
            } catch (error) { logMessage('errorStartingSession', 'error', { sessionId: currentSessionId, error: error.message }); }
        }
        async function logoutSession() {
             if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
             logMessage('closingSession', 'info', { sessionId: currentSessionId });
             stopAutoUpdate();
             if (!confirm(translate('confirmLogout', { sessionId: currentSessionId }))) return;
             try {
                const data = await apiRequest(`/logout/${currentSessionId}`, 'POST');
                logMessage(data.message || translate('sessionClosed', { sessionId: currentSessionId }), 'success');
                currentSessionId = null; currentChatJid = null; sessionIdInput.value = '';
                chatsListDiv.innerHTML = `<p class="text-gray-500">${translate('sessionClosedStatus')}</p>`;
                messagesContainer.innerHTML = `<p class="text-gray-500 text-center self-center">${translate('sessionClosedStatus')}</p>`;
                currentChatNameSpan.textContent = translate('noChatSelected'); currentChatNameSpan.dataset.translateKey = 'noChatSelected';
                qrCodeImage.classList.add('hidden'); qrCodeImage.src = ''; sessionsListDiv.innerHTML = ''; contactsListDiv.innerHTML = ''; contactsListContainer.classList.add('hidden');
                autoresponderRulesListDiv.innerHTML = `<p class="text-xs text-gray-500 mt-1">${translate('autoresponderPlaceholderLoggedOut')}</p>`;
            } catch (error) { logMessage('errorClosingSession', 'error', { sessionId: currentSessionId, error: error.message }); }
        }
        async function getQrCode() {
              if (!currentSessionId) { logMessage('startSessionFirstError', 'error'); return; }
             logMessage('gettingQr', 'info', { sessionId: currentSessionId });
             qrCodeImage.classList.add('hidden'); qrCodeImage.src = '';
            try {
                const data = await apiRequest(`/get-qr/${currentSessionId}`);
                if (data.success && data.qr) {
                    qrCodeImage.src = data.qr; qrCodeImage.classList.remove('hidden');
                    logMessage('qrReceived', 'success');
                    setTimeout(getQrCode, 5000); // Keep polling while QR is shown
                } else {
                    logMessage(data.message || translate('waitingForQr'), 'info');
                    // Check if the reason for no QR is connection (message might vary)
                    if (!data.qr && !data.message?.includes(translate('qrNotGeneratedCheck'))) {
                         logMessage('possiblyConnected', 'info');
                         qrCodeImage.classList.add('hidden');
                         getChats(); // Start loading chats, which will trigger auto-update
                    } else if (data.message?.includes(translate('qrNotGeneratedCheck'))) {
                        setTimeout(getQrCode, 5000);
                    }
                }
            } catch (error) {
                logMessage('errorGettingQr', 'error', { error: error.message });
                 if (error.message.includes('404')) { logMessage('sessionNotStarted', 'info'); }
                 else { logMessage('errorQrFallback', 'info'); getChats(); }
            }
        }
        // *** listSessions function restored ***
        async function listSessions() {
             logMessage('listingSessions', 'info');
             sessionsListDiv.innerHTML = `<p class="text-gray-500 italic">${translate('loading')}</p>`;
             try {
                const data = await apiRequest(`/sessions`);
                if (data.activeSessions && data.activeSessions.length > 0) {
                    sessionsListDiv.innerHTML = `<strong>${translate('sessionsActive')}</strong> ${data.activeSessions.join(', ')}`;
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
            if (!currentSessionId) { if (!isAutoUpdate) logMessage('selectSessionError', 'error'); return; }
            if (!isAutoUpdate) { logMessage('gettingChats', 'info', { sessionId: currentSessionId }); chatsListDiv.innerHTML = `<p class="text-gray-500 italic">${translate('loadingChats')}</p>`; }
            try {
                const data = await apiRequest(`/get-chats/${currentSessionId}`);
                const shouldPreserveScroll = isAutoUpdate && chatsListDiv.children.length > 1; const currentScrollTop = shouldPreserveScroll ? chatsListDiv.scrollTop : 0;
                const previouslySelectedJid = currentChatJid; chatsListDiv.innerHTML = '';
                if (data.chats && data.chats.length > 0) {
                    data.chats.forEach(chat => {
                        const chatElement = document.createElement('div'); const isSelected = chat.jid === previouslySelectedJid;
                        chatElement.className = `p-3 border rounded-md bg-white hover:bg-gray-100 cursor-pointer transition ${isSelected ? 'bg-indigo-100 border-indigo-300' : ''}`;
                        chatElement.dataset.jid = chat.jid; const name = chat.name || chat.jid; const lastMessage = chat.lastMessage || translate('noMessages'); const timestamp = formatTimestamp(chat.messageTimestamp);
                        chatElement.innerHTML = `<div class="flex justify-between items-center"><span class="font-semibold text-gray-800 truncate">${name}</span><span class="text-xs text-gray-500">${timestamp}</span></div><p class="text-sm text-gray-600 truncate mt-1">${lastMessage}</p>${chat.unreadCount > 0 ? `<span class="mt-1 inline-block bg-green-500 text-white text-xs font-bold px-2 py-0.5 rounded-full">${chat.unreadCount}</span>` : ''}`;
                        chatElement.addEventListener('click', () => { document.querySelectorAll('#chatsList > div').forEach(el => el.classList.remove('bg-indigo-100', 'border-indigo-300')); chatElement.classList.add('bg-indigo-100', 'border-indigo-300'); currentChatJid = chat.jid; currentChatNameSpan.textContent = name; currentChatNameSpan.removeAttribute('data-translate-key'); deleteMsgRemoteJidInput.value = chat.jid; getMessages(); });
                        chatsListDiv.appendChild(chatElement);
                     });
                     if (!isAutoUpdate) logMessage('chatsLoaded', 'success', { count: data.chats.length });
                     if (shouldPreserveScroll) chatsListDiv.scrollTop = currentScrollTop;
                     // Start auto-update only if it's the first successful load and not already running
                     if (!isAutoUpdate && !chatUpdateInterval) { startAutoUpdate(); }
                } else { chatsListDiv.innerHTML = `<p class="text-gray-500">${translate('noChatsFound')}</p>`; if (!isAutoUpdate) logMessage('noChatsFound', 'info'); stopAutoUpdate(); }
            } catch (error) {
                if (!isAutoUpdate){ logMessage('errorGettingChats', 'error', { error: error.message }); chatsListDiv.innerHTML = `<p class="text-red-500">${translate('errorLoadingChats')}</p>`; } else { console.warn(`Auto-update chats failed: ${error.message}`); }
                 if (error.message.includes(translate('sessionNotConnectedCheck'))) { qrCodeImage.classList.add('hidden'); qrCodeImage.src = ''; stopAutoUpdate();}
            }
        }
        async function getMessages(isAutoUpdate = false) {
            if (!currentSessionId || !currentChatJid) { if (!isAutoUpdate) logMessage('selectChatError', 'error'); return; }
            if (!isAutoUpdate) { logMessage('gettingMessages', 'info', { jid: currentChatJid }); messagesContainer.innerHTML = `<p class="text-gray-500 text-center self-center italic">${translate('loadingMessages')}</p>`; }
            const isScrolledToBottom = messagesContainer.scrollHeight - messagesContainer.clientHeight <= messagesContainer.scrollTop + 1;
            try {
                const data = await apiRequest(`/get-messages/${currentSessionId}/${currentChatJid}?limit=100`);
                 if (!isAutoUpdate || (data.messages && data.messages.length > 0)) { messagesContainer.innerHTML = ''; }
                 else if (isAutoUpdate && (!data.messages || data.messages.length === 0)) { return; }

                if (data.messages && data.messages.length > 0) {
                    data.messages.forEach(msgContainer => {
                        const msg = msgContainer.messageData; const publicMediaUrl = msgContainer.publicMediaUrl; const messageElement = document.createElement('div');
                        const isSent = msg.key?.fromMe; messageElement.className = `message ${isSent ? 'message-sent' : 'message-received'}`; let contentHTML = ''; let messageText = translate('unsupportedMessageType');
                         if (msg.message?.conversation) messageText = msg.message.conversation; else if (msg.message?.extendedTextMessage?.text) messageText = msg.message.extendedTextMessage.text; else if (msg.message?.imageMessage?.caption) messageText = msg.message.imageMessage.caption || translate('imagePlaceholder'); else if (msg.message?.videoMessage?.caption) messageText = msg.message.videoMessage.caption || translate('videoPlaceholder'); else if (msg.message?.documentMessage?.caption) messageText = msg.message.documentMessage.caption || translate('documentPlaceholder'); else if (msg.message?.stickerMessage) messageText = translate('stickerPlaceholder'); else if (msg.message?.audioMessage) messageText = translate('audioPlaceholder'); else if (msg.message) { const firstKey = Object.keys(msg.message)[0]; if (firstKey && msg.message[firstKey]?.caption) messageText = msg.message[firstKey].caption; else if (firstKey) messageText = `[${firstKey.replace('Message', '')}]`;} contentHTML += `<p>${messageText.replace(/\n/g, '<br>')}</p>`;
                        if (publicMediaUrl) { const proxyMediaUrl = `${proxyUrl}?mediaUrl=${encodeURIComponent(publicMediaUrl)}`; if (msg.message?.imageMessage || publicMediaUrl.match(/\.(jpg|png|jpeg|gif|webp)$/i)) { contentHTML += `<div class="message-media"><img src="${proxyMediaUrl}" alt="${translate('imageAlt')}" loading="lazy" onerror="this.alt='${translate('imageLoadError')}'; this.style.display='none';"></div>`; } else if (msg.message?.videoMessage || publicMediaUrl.match(/\.(mp4)$/i)) { contentHTML += `<div class="message-media"><video controls src="${proxyMediaUrl}" onerror="this.alt='${translate('videoLoadError')}'; this.style.display='none';"><a href="${proxyMediaUrl}" target="_blank">${translate('viewVideoLink')}</a></video></div>`; } else if (msg.message?.audioMessage || publicMediaUrl.match(/\.(ogg|mp3|m4a)$/i)) { contentHTML += `<div class="message-media"><audio controls src="${proxyMediaUrl}" onerror="this.alt='${translate('audioLoadError')}'; this.style.display='none';"></audio><br/><a href="${proxyMediaUrl}" target="_blank">${translate('downloadAudioLink')}</a></div>`; } else if (msg.message?.documentMessage || publicMediaUrl.includes('document')) { const fileName = publicMediaUrl.substring(publicMediaUrl.lastIndexOf('/') + 1); contentHTML += `<div class="message-media"><a href="${proxyMediaUrl}" target="_blank" download="${fileName}">${translate('downloadDocumentLink', {fileName: fileName})}</a></div>`; } else if (msg.message?.stickerMessage) { contentHTML += `<div class="message-media"><img src="${proxyMediaUrl}" alt="${translate('stickerAlt')}" style="max-width: 100px;" loading="lazy" onerror="this.alt='${translate('stickerLoadError')}'; this.style.display='none';"></div>`; } }
                        const timestamp = formatTimestamp(msg.messageTimestamp); contentHTML += `<div class="message-meta">${timestamp}</div>`; messageElement.innerHTML = contentHTML; messagesContainer.appendChild(messageElement);
                    });
                    if (isScrolledToBottom || !isAutoUpdate) { messagesContainer.scrollTop = messagesContainer.scrollHeight; }
                     if (!isAutoUpdate) logMessage('messagesLoaded', 'success', { jid: currentChatJid });
                } else { if (!isAutoUpdate) { messagesContainer.innerHTML = `<p class="text-gray-500 text-center self-center">${translate('noMessagesFound')}</p>`; logMessage('noMessagesFoundLog', 'info', { jid: currentChatJid }); } }
            } catch (error) { if (!isAutoUpdate) { logMessage('errorGettingMessages', 'error', { error: error.message }); messagesContainer.innerHTML = `<p class="text-red-500 text-center self-center">${translate('errorLoadingMessages')}</p>`; } else { console.warn(`Auto-update messages failed: ${error.message}`); } }
        }
        async function exportContacts() {
             if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; } logMessage('exportingContacts', 'info', { sessionId: currentSessionId });
             try {
                 const csvData = await apiRequest(`/export-contacts/${currentSessionId}`, 'GET');
                 if (typeof csvData !== 'string' || !csvData.toLowerCase().includes('jid,name')) { console.error("Respuesta inesperada:", csvData); throw new Error(csvData.error || translate('invalidCsvResponseError')); }
                 const blob = new Blob([csvData], { type: 'text/csv;charset=utf-8;' }); const link = document.createElement("a"); const url = URL.createObjectURL(blob);
                 link.setAttribute("href", url); link.setAttribute("download", `contacts_${currentSessionId}.csv`); link.style.visibility = 'hidden'; document.body.appendChild(link); link.click(); document.body.removeChild(link);
                 logMessage('contactsExported', 'success');
             } catch (error) { logMessage('errorExportingContacts', 'error', { error: error.message }); }
        }
        async function getAutoresponderRules() {
            if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            logMessage('gettingRules', 'info', { sessionId: currentSessionId });
            autoresponderRulesListDiv.innerHTML = `<p class="text-xs text-gray-500 italic mt-1">${translate('loadingRules')}</p>`;
            try {
                const data = await apiRequest(`/get-autoresponder-rules/${currentSessionId}`);
                const rules = Array.isArray(data) ? data : (data.rules || []);
                updateAutoresponderList(rules);
                logMessage('rulesLoaded', 'success');
            } catch (error) {
                logMessage('errorGettingRules', 'error', { error: error.message });
                 autoresponderRulesListDiv.innerHTML = `<p class="text-xs text-red-500 mt-1">${translate('errorLoadingRules')}</p>`;
            }
        }
        async function setAutoresponder() {
             if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            const keyword = autoresponderKeywordInput.value.trim(); const response = autoresponderResponseInput.value.trim();
             if (!keyword || !response) { logMessage('autoresponderFieldsRequiredError', 'error'); return; }
             logMessage('savingRule', 'info', { keyword: keyword, response: response });
             try {
                 const body = { keyword, response };
                 const data = await apiRequest(`/set-autoresponder/${currentSessionId}`, 'POST', body);
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
                     deleteButton.onclick = () => deleteAutoresponderRule(rule.keyword);
                     item.appendChild(ruleText); item.appendChild(deleteButton); list.appendChild(item);
                 });
                 autoresponderRulesListDiv.appendChild(list);
             } else { autoresponderRulesListDiv.innerHTML = `<p class="text-xs text-gray-500 mt-1">${translate('noRulesConfigured')}</p>`; }
         }
         async function deleteAutoresponderRule(keywordToDelete) {
             if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
             if (!keywordToDelete) { logMessage('invalidKeywordError', 'error'); return; }
             if (!confirm(translate('confirmDeleteRule', { keyword: keywordToDelete }))) return;
             logMessage('deletingRule', 'info', { keyword: keywordToDelete });
             try {
                 const body = { keyword: keywordToDelete };
                 const data = await apiRequest(`/delete-autoresponder-rule/${currentSessionId}`, 'DELETE', body);
                 logMessage(data.message || translate('ruleDeleted', { keyword: keywordToDelete }), 'success');
                 getAutoresponderRules();
             } catch (error) { logMessage('errorDeletingRule', 'error', { error: error.message }); }
         }

        // --- Resto de funciones (sin cambios significativos, solo usan translate) ---
        async function sendMessage() { /* ... usa translate ... */
            if (!currentSessionId || !currentChatJid) { logMessage('selectChatError', 'error'); return; }
            const messageText = messageInput.value.trim();
            if (!messageText) { logMessage('typeMessageError', 'error'); return; }
            logMessage('sendingMessage', 'info', { jid: currentChatJid });
            try {
                const body = { jid: currentChatJid, message: messageText };
                const data = await apiRequest(`/send-message/${currentSessionId}`, 'POST', body);
                logMessage(data.message || translate('messageSent'), 'success');
                messageInput.value = '';
                 const messageElement = document.createElement('div'); messageElement.className = 'message message-sent';
                 messageElement.innerHTML = `<p>${messageText.replace(/\n/g, '<br>')}</p><div class="message-meta">${formatTimestamp(Date.now()/1000)} (${translate('sendingStatus')})</div>`;
                 messagesContainer.appendChild(messageElement); messagesContainer.scrollTop = messagesContainer.scrollHeight;
                setTimeout(getMessages, 2000);
            } catch (error) { logMessage('errorSendingMessage', 'error', { error: error.message }); }
        }
        async function deleteMessage() { /* ... usa translate ... */
            if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            const msgId = deleteMsgIdInput.value.trim(); const remoteJid = deleteMsgRemoteJidInput.value.trim();
            const fromMe = deleteMsgFromMeSelect.value === 'true'; const participant = deleteMsgParticipantInput.value.trim() || undefined;
            if (!msgId || !remoteJid) { logMessage('deleteMessageFieldsError', 'error'); return; }
            if (!confirm(translate('confirmDeleteMessage', { id: msgId, jid: remoteJid }))) return;
            logMessage('deletingMessage', 'info', { id: msgId, jid: remoteJid });
            try {
                const body = { remoteJid, fromMe, id: msgId, ...(participant && { participant }) };
                const data = await apiRequest(`/delete-message/${currentSessionId}`, 'DELETE', body);
                logMessage(data.message || translate('deleteRequestSent', { id: msgId }), 'success');
                deleteMsgIdInput.value = ''; deleteMsgParticipantInput.value = '';
                if (remoteJid === currentChatJid) { setTimeout(getMessages, 1500); }
            } catch (error) { logMessage('errorDeletingMessage', 'error', { error: error.message }); }
        }
        async function deleteChat() { /* ... usa translate ... */
            if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            const jidToDelete = deleteChatJidInput.value.trim();
             if (!jidToDelete) { logMessage('deleteChatJidRequiredError', 'error'); return; }
             if (!confirm(translate('confirmDeleteChat', { jid: jidToDelete }))) return;
             logMessage('deletingChat', 'info', { jid: jidToDelete });
             try {
                const body = { jid: jidToDelete };
                const data = await apiRequest(`/delete-chat/${currentSessionId}`, 'DELETE', body);
                logMessage(data.message || translate('chatDeleted', { jid: jidToDelete }), 'success');
                deleteChatJidInput.value = '';
                if (jidToDelete === currentChatJid) {
                    messagesContainer.innerHTML = `<p class="text-gray-500 text-center self-center">${translate('chatDeletedMsg')}</p>`;
                    currentChatNameSpan.textContent = translate('noChatSelected');
                    currentChatNameSpan.dataset.translateKey = 'noChatSelected';
                    currentChatJid = null;
                }
                getChats();
            } catch (error) { logMessage('errorDeletingChat', 'error', { error: error.message }); }
        }
        async function createGroup() { /* ... usa translate ... */
             if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            const subject = groupSubjectInput.value.trim(); const participantsRaw = groupParticipantsInput.value.trim();
            if (!subject || !participantsRaw) { logMessage('subjectAndParticipantsRequiredError', 'error'); return; }
            const participants = participantsRaw.split(',').map(p => p.trim()).filter(p => p);
             if (participants.length === 0) { logMessage('validJidsRequiredError', 'error'); return; }
             logMessage('creatingGroup', 'info', { subject: subject });
             try {
                const body = { subject, participants };
                const data = await apiRequest(`/create-group/${currentSessionId}`, 'POST', body);
                logMessage(data.message || translate('groupCreated', { subject: subject, id: data.group?.id }), 'success');
                groupSubjectInput.value = ''; groupParticipantsInput.value = '';
                setTimeout(getChats, 2000);
            } catch (error) { logMessage('errorCreatingGroup', 'error', { error: error.message }); }
        }
        async function forwardMessage() { /* ... usa translate ... */
             if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            const messageId = forwardMessageIdInput.value.trim(); const forwardJid = forwardJidInput.value.trim();
             if (!messageId || !forwardJid) { logMessage('forwardIdsRequiredError', 'error'); return; }
             logMessage('forwardingMessage', 'info', { id: messageId, jid: forwardJid });
             try {
                const body = { messageId, forwardJid };
                const data = await apiRequest(`/forward-message/${currentSessionId}`, 'POST', body);
                logMessage(data.message || translate('messageForwarded', { id: messageId }), 'success');
                forwardMessageIdInput.value = ''; forwardJidInput.value = '';
                 if (forwardJid === currentChatJid) { setTimeout(getMessages, 1500); }
                 else { setTimeout(getChats, 1500); }
            } catch (error) { logMessage('errorForwardingMessage', 'error', { error: error.message }); }
        }
        async function getContacts() { /* ... usa translate ... */
             if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            logMessage('gettingContacts', 'info', { sessionId: currentSessionId });
            contactsListDiv.innerHTML = `<p class="text-gray-500 italic">${translate('loading')}</p>`; contactsListContainer.classList.remove('hidden');
            try {
                const data = await apiRequest(`/get-contacts/${currentSessionId}`);
                contactsListDiv.innerHTML = '';
                if (data.contacts && data.contacts.length > 0) {
                    data.contacts.forEach(contact => { const d = document.createElement('div'); d.className = 'p-2 border-b text-sm'; d.textContent = `${contact.name || contact.jid} (${contact.jid})`; contactsListDiv.appendChild(d); });
                    logMessage('contactsLoaded', 'success', { count: data.contacts.length });
                } else { contactsListDiv.innerHTML = `<p class="text-gray-500">${translate('noContactsFound')}</p>`; logMessage('noContactsFound', 'info'); }
            } catch (error) { logMessage('errorGettingContacts', 'error', { error: error.message }); contactsListDiv.innerHTML = `<p class="text-red-500">${translate('error')}</p>`; }
        }
        async function createContact() { /* ... usa translate ... */
              if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            const jid = createContactJidInput.value.trim(); const name = createContactNameInput.value.trim();
             if (!jid || !name) { logMessage('jidAndNameRequiredError', 'error'); return; }
             logMessage('creatingContact', 'info', { name: name, jid: jid });
             try {
                const body = { jid, name };
                const data = await apiRequest(`/create-contact/${currentSessionId}`, 'POST', body);
                logMessage(data.message || translate('contactCreated', { name: name }), 'success');
                createContactJidInput.value = ''; createContactNameInput.value = '';
                if (!contactsListContainer.classList.contains('hidden')) getContacts();
            } catch (error) { logMessage('errorCreatingContact', 'error', { error: error.message }); }
        }
        async function editContact() { /* ... usa translate ... */
             if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            const jid = editContactJidInput.value.trim(); const name = editContactNameInput.value.trim();
             if (!jid || !name) { logMessage('jidAndNewNameRequiredError', 'error'); return; }
             logMessage('editingContact', 'info', { jid: jid, name: name });
             try {
                const body = { jid, name };
                const data = await apiRequest(`/edit-contact/${currentSessionId}`, 'POST', body);
                logMessage(data.message || translate('contactEdited', { jid: jid, name: name }), 'success');
                editContactJidInput.value = ''; editContactNameInput.value = '';
                 if (!contactsListContainer.classList.contains('hidden')) getContacts();
                 getChats();
            } catch (error) { logMessage('errorEditingContact', 'error', { error: error.message }); }
        }
        async function searchContacts() { /* ... usa translate ... */
             if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            const query = searchContactQueryInput.value.trim();
            if (!query) { logMessage('searchQueryRequiredError', 'error'); return; }
            logMessage('searchingContacts', 'info', { query: query });
            searchContactsResultsDiv.innerHTML = `<p class="text-gray-500 italic">${translate('searching')}</p>`;
            try {
                const data = await apiRequest(`/search-contacts/${currentSessionId}?query=${encodeURIComponent(query)}`);
                searchContactsResultsDiv.innerHTML = '';
                if (data.contacts && data.contacts.length > 0) {
                     data.contacts.forEach(contact => { const d = document.createElement('div'); d.className = 'p-1 border-b text-xs'; d.textContent = `${contact.name || contact.jid} (${contact.jid})`; searchContactsResultsDiv.appendChild(d); });
                    logMessage('contactsFound', 'success', { count: data.contacts.length });
                } else { searchContactsResultsDiv.innerHTML = `<p class="text-gray-500">${translate('noMatchesFound')}</p>`; logMessage('noContactsFound', 'info'); }
            } catch (error) { logMessage('errorSearchingContacts', 'error', { error: error.message }); searchContactsResultsDiv.innerHTML = `<p class="text-red-500">${translate('searchError')}</p>`; }
        }
        function toggleImportContacts() { /* ... sin cambios ... */ importContactsForm.classList.toggle('hidden'); }
        async function importContacts() { /* ... usa translate ... */
              if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
             const jsonString = importContactsJsonInput.value.trim();
             if (!jsonString) { logMessage('pasteJsonError', 'error'); return; }
             let contactsArray;
             try {
                 contactsArray = JSON.parse(jsonString);
                 if (!Array.isArray(contactsArray)) throw new Error(translate('jsonMustBeArrayError'));
                 if (contactsArray.length > 0 && (!contactsArray[0].jid || !contactsArray[0].name)) throw new Error(translate('jsonContactStructureError'));
             } catch (e) { logMessage('invalidJsonError', 'error', { error: e.message }); return; }
             logMessage('importingContacts', 'info', { count: contactsArray.length });
             try {
                 const data = await apiRequest(`/import-contacts/${currentSessionId}`, 'POST', contactsArray);
                 logMessage(data.message || translate('contactsImported'), 'success');
                 importContactsJsonInput.value = ''; importContactsForm.classList.add('hidden');
                 if (!contactsListContainer.classList.contains('hidden')) getContacts();
                 getChats();
             } catch (error) { logMessage('errorImportingContacts', 'error', { error: error.message }); }
        }
        function toggleContactDetails() { /* ... sin cambios ... */ contactDetailsForm.classList.toggle('hidden'); }
        async function getContactDetails() { /* ... usa translate ... */
              if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
             const jid = contactDetailsJidInput.value.trim();
             if (!jid) { logMessage('contactJidRequiredError', 'error'); return; }
             logMessage('gettingDetails', 'info', { jid: jid });
             contactDetailsResultPre.textContent = translate('loading');
             try {
                 const data = await apiRequest(`/contact-details/${currentSessionId}/${jid}`);
                 contactDetailsResultPre.textContent = JSON.stringify(data.contact, null, 2);
                 logMessage('detailsObtained', 'success', { jid: jid });
             } catch (error) { logMessage('errorGettingDetails', 'error', { error: error.message }); contactDetailsResultPre.textContent = `${translate('error')}: ${error.message}`; }
        }
        async function sendMultimedia() { /* ... usa translate ... */
              if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            const jid = multimediaJidInput.value.trim(); const mediaType = multimediaTypeSelect.value;
            const caption = multimediaCaptionInput.value.trim(); const base64Data = multimediaBase64Input.value.trim();
             if (!jid || !base64Data) { logMessage('multimediaRequiredError', 'error'); return; }
             logMessage('sendingMultimedia', 'info', { type: mediaType, jid: jid });
             try {
                 const body = { jid, mediaType, base64Data, caption: caption || undefined };
                 const data = await apiRequest(`/send-multimedia/${currentSessionId}`, 'POST', body);
                 logMessage(data.message || translate('multimediaSent', { type: mediaType }), 'success');
                 multimediaCaptionInput.value = ''; multimediaBase64Input.value = '';
                  if (jid === currentChatJid) setTimeout(getMessages, 2000);
                  else setTimeout(getChats, 2000);
             } catch (error) { logMessage('errorSendingMultimedia', 'error', { error: error.message }); }
        }
        async function getStatistics() { /* ... usa translate ... */
              if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
             logMessage('gettingStats', 'info', { sessionId: currentSessionId });
             statsResultPre.textContent = translate('loading');
             try {
                 const data = await apiRequest(`/statistics/${currentSessionId}`);
                 statsResultPre.textContent = JSON.stringify(data, null, 2);
                 logMessage('statsObtained', 'success');
             } catch (error) { logMessage('errorGettingStats', 'error', { error: error.message }); statsResultPre.textContent = `${translate('error')}: ${error.message}`; }
        }
         async function getAuditLog() { /* ... usa translate ... */
               if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
             logMessage('gettingAuditLog', 'info', { sessionId: currentSessionId });
             auditLogResultPre.textContent = translate('loading');
             try {
                 const data = await apiRequest(`/audit-log/${currentSessionId}`);
                  if (data.auditLog && data.auditLog.length > 0) {
                     auditLogResultPre.textContent = data.auditLog.map(e => `${new Date(e.timestamp).toLocaleString(currentLanguage === 'en' ? 'en-US' : 'es-ES')}: [${e.type}] ${e.jid||''} ${e.name||''} ${e.newName||''}`).join('\n');
                 } else { auditLogResultPre.textContent = translate('noAuditLogEntries'); }
                 logMessage('auditLogObtained', 'success');
             } catch (error) { logMessage('errorGettingAuditLog', 'error', { error: error.message }); auditLogResultPre.textContent = `${translate('error')}: ${error.message}`; }
        }
         async function searchMessages() { /* ... usa translate ... */
              if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            const query = searchMsgQueryInput.value.trim();
            const fromDate = searchMsgFromDateInput.value ? new Date(searchMsgFromDateInput.value).toISOString() : '';
            const toDate = searchMsgToDateInput.value ? new Date(searchMsgToDateInput.value).toISOString() : '';
             let searchUrl = `/search-messages/${currentSessionId}?`; const params = [];
             if (query) params.push(`query=${encodeURIComponent(query)}`);
             if (fromDate) params.push(`fromDate=${encodeURIComponent(fromDate)}`);
             if (toDate) params.push(`toDate=${encodeURIComponent(toDate)}`);
             if (params.length === 0) { logMessage('searchCriteriaRequiredError', 'error'); return; }
             searchUrl += params.join('&');
             logMessage('searchingMessages', 'info', { criteria: params.join(', ') });
             searchMessagesResultsDiv.innerHTML = `<p class="text-gray-500 italic">${translate('searching')}</p>`;
             try {
                 const data = await apiRequest(searchUrl);
                 searchMessagesResultsDiv.innerHTML = '';
                 if (data.messages && data.messages.length > 0) {
                     data.messages.forEach(msg => {
                         const d = document.createElement('div'); d.className = 'p-1 border-b text-xs';
                         let text = msg.message?.conversation || msg.message?.extendedTextMessage?.text || translate('nonTextMessage');
                         if (text.length > 100) text = text.substring(0, 100) + '...';
                         d.textContent = `(${formatTimestamp(msg.messageTimestamp)}) ${msg.key.remoteJid}: ${text}`; searchMessagesResultsDiv.appendChild(d);
                     });
                     logMessage('messagesFound', 'success', { count: data.messages.length });
                 } else { searchMessagesResultsDiv.innerHTML = `<p class="text-gray-500">${translate('noMessagesFoundCriteria')}</p>`; logMessage('noMessagesFound', 'info'); }
             } catch (error) { logMessage('errorSearchingMessages', 'error', { error: error.message }); searchMessagesResultsDiv.innerHTML = `<p class="text-red-500">${translate('searchError')}</p>`; }
        }
        async function scheduleMessage() { /* ... usa translate ... */
              if (!currentSessionId) { logMessage('selectSessionError', 'error'); return; }
            const jid = scheduleJidInput.value.trim(); const message = scheduleMessageInput.value.trim(); const scheduledTimeString = scheduleTimeInput.value;
             if (!jid || !message || !scheduledTimeString) { logMessage('scheduleFieldsRequiredError', 'error'); return; }
             let scheduledTimeISO; try { scheduledTimeISO = new Date(scheduledTimeString).toISOString(); } catch (e) { logMessage('invalidDateTimeError', 'error'); return; }
             const localTime = new Date(scheduledTimeString).toLocaleString(currentLanguage === 'en' ? 'en-US' : 'es-ES');
             logMessage('schedulingMessage', 'info', { jid: jid, time: localTime });
             try {
                 const body = { jid, message, scheduledTime: scheduledTimeISO };
                 const data = await apiRequest(`/schedule-message/${currentSessionId}`, 'POST', body);
                 logMessage(data.message || translate('messageScheduled'), 'success');
                 scheduleJidInput.value = ''; scheduleMessageInput.value = ''; scheduleTimeInput.value = '';
             } catch (error) { logMessage('errorSchedulingMessage', 'error', { error: error.message }); }
        }


        // --- Event Listeners ---
        startSessionBtn.addEventListener('click', startSession);
        logoutSessionBtn.addEventListener('click', logoutSession);
        getQrBtn.addEventListener('click', getQrCode);
        listSessionsBtn.addEventListener('click', listSessions); // Listener para la función restaurada
        refreshChatsBtn.addEventListener('click', () => getChats());
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
        exportContactsBtn.addEventListener('click', exportContacts);
        showImportContactsBtn.addEventListener('click', toggleImportContacts);
        importContactsBtn.addEventListener('click', importContacts);
        showContactDetailsBtn.addEventListener('click', toggleContactDetails);
        getContactDetailsBtn.addEventListener('click', getContactDetails);
        sendMultimediaBtn.addEventListener('click', sendMultimedia);
        getStatsBtn.addEventListener('click', getStatistics);
        getAuditLogBtn.addEventListener('click', getAuditLog);
        searchMessagesBtn.addEventListener('click', searchMessages);
        setAutoresponderBtn.addEventListener('click', setAutoresponder);
        getAutoresponderRulesBtn.addEventListener('click', getAutoresponderRules);
        scheduleMessageBtn.addEventListener('click', scheduleMessage);
        langEsBtn.addEventListener('click', () => setLanguage('es'));
        langEnBtn.addEventListener('click', () => setLanguage('en'));


        // --- Inicialización ---
        setLanguage(currentLanguage); // Set initial language
        logMessage('interfaceReady', 'info');
        listSessions(); // Llamada inicial restaurada

    </script>

</body>
</html>
