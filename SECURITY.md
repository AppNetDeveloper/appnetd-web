# Guía de Seguridad - AppNet Developer

## Configuración Inicial Requerida

### 1. Archivo de Configuración de Email

El archivo `includes/email_config.php` contiene credenciales sensibles y debe ser configurado correctamente:

```php
<?php
// Configuración SMTP
define('SMTP_HOST', 'tu-servidor-smtp.com');
define('SMTP_USERNAME', 'tu-email@dominio.com');
define('SMTP_PASSWORD', 'tu-contraseña-segura');
define('SMTP_PORT', 587);
define('SMTP_ENCRYPTION', 'tls');

// Configuración de email
define('EMAIL_FROM', 'tu-email@dominio.com');
define('EMAIL_FROM_NAME', 'Tu Nombre');
define('EMAIL_TO', 'destinatario@dominio.com');
define('EMAIL_TO_NAME', 'Nombre Destinatario');

// Configuración de seguridad
define('ENABLE_RATE_LIMIT', true);
define('RATE_LIMIT_MINUTES', 5);
define('MAX_MESSAGE_LENGTH', 5000);
?>
```

**IMPORTANTE**: Este archivo NO debe incluirse en el repositorio Git. Ya está añadido al `.gitignore`.

### 2. Permisos de Archivos

Asegúrate de que los permisos de archivos sean correctos:

```bash
# Archivos de configuración (solo lectura para el servidor web)
chmod 600 includes/email_config.php

# Directorios
chmod 755 includes/
chmod 755 assets/

# Archivos PHP
chmod 644 *.php
```

### 3. Protecciones Implementadas

#### Rate Limiting
- El sistema previene spam limitando envíos por IP
- Por defecto: 1 envío cada 5 minutos por IP
- Configurable en `email_config.php`

#### Validación de Entrada
- Sanitización de todos los campos del formulario
- Validación de formato de email
- Límite de longitud de mensaje
- Protección contra inyección XSS

#### Honeypot Anti-Spam
- Campo oculto para detectar bots
- Los envíos de bots son rechazados automáticamente

#### Respuestas Seguras
- No se exponen detalles técnicos de errores
- Logs de errores solo en servidor
- Códigos HTTP apropiados

### 4. Recomendaciones Adicionales

#### SSL/TLS
Asegúrate de que el sitio use HTTPS:
```apache
# En .htaccess
RewriteEngine On
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

#### Headers de Seguridad
Añadir headers HTTP de seguridad:
```apache
# Security Headers
Header set X-Content-Type-Options "nosniff"
Header set X-Frame-Options "SAMEORIGIN"
Header set X-XSS-Protection "1; mode=block"
Header set Referrer-Policy "strict-origin-when-cross-origin"
Header set Permissions-Policy "geolocation=(), microphone=(), camera=()"
```

#### Protección de Directorios
Proteger directorios sensibles:
```apache
# Denegar acceso a archivos de configuración
<Files "email_config.php">
    Require all denied
</Files>

<Files "config.php">
    Require all denied
</Files>

# Denegar acceso a archivos ocultos
<FilesMatch "^\\.">
    Require all denied
</FilesMatch>
```

### 5. Monitoreo

#### Logs
Los errores de email se registran en el log de PHP. Revisa regularmente:
```bash
tail -f /var/log/apache2/error.log
# o
tail -f /var/log/php/error.log
```

#### Intentos de Spam
Monitorea intentos de spam revisando IPs bloqueadas por rate limiting.

### 6. Backup

Realiza backups regulares de:
- Base de datos (si existe)
- Archivos de configuración
- Contenido del sitio

```bash
# Ejemplo de script de backup
tar -czf backup-$(date +%Y%m%d).tar.gz \
    --exclude='node_modules' \
    --exclude='.git' \
    /var/www/appnetd-web/
```

### 7. Actualizaciones

Mantén actualizado:
- PHP
- PHPMailer
- Dependencias Node.js
- Sistema operativo

```bash
# Verificar versión de PHP
php -v

# Actualizar dependencias Node
npm update

# Auditoría de seguridad Node
npm audit
```

## Contacto de Seguridad

Para reportar vulnerabilidades de seguridad:
- Email: security@appnet.dev
- No publicar vulnerabilidades públicamente antes de ser corregidas

## Changelog de Seguridad

### 2025-01-XX
- ✅ Implementado rate limiting por IP
- ✅ Mejorada validación y sanitización de inputs
- ✅ Separadas credenciales en archivo de configuración
- ✅ Añadido honeypot anti-spam
- ✅ Implementadas respuestas JSON con códigos HTTP apropiados
- ✅ Mejorado formato HTML de emails
- ✅ Añadidos logs de errores sin exponer detalles técnicos
