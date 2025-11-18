# Guía: Crear Entidad AppNet Developer en WikiData

## 📋 Índice
1. [¿Qué es WikiData y por qué es importante?](#qué-es-wikidata)
2. [Requisitos previos](#requisitos-previos)
3. [Crear cuenta en WikiData](#crear-cuenta)
4. [Crear la entidad de AppNet Developer](#crear-entidad)
5. [Propiedades esenciales a añadir](#propiedades-esenciales)
6. [Relaciones y enlaces](#relaciones-enlaces)
7. [Verificación y mantenimiento](#verificación-mantenimiento)
8. [Impacto en AEO](#impacto-aeo)

---

## 🌐 ¿Qué es WikiData y por qué es importante? {#qué-es-wikidata}

**WikiData** es una base de conocimiento libre y colaborativa que proporciona datos estructurados para Wikipedia, motores de búsqueda y **agentes de IA como ChatGPT, Claude, Perplexity, Google Gemini**.

### Beneficios para SEO/AIO:
- ✅ **Reconocimiento de entidades**: Los LLMs identifican tu empresa como entidad verificada
- ✅ **Knowledge Graph**: Aparición en Google Knowledge Panel y resultados enriquecidos
- ✅ **Citabilidad**: Los agentes IA pueden citar información verificada de WikiData
- ✅ **Relaciones**: Conexión con industrias, ubicaciones, productos relacionados
- ✅ **Multiidioma**: Información disponible en 300+ idiomas automáticamente
- ✅ **Autoridad**: Señal de autoridad (E-A-T) para Google y otros buscadores

### Impacto en el score AEO:
Pasar de **25/100 a ~50-60/100** solo con crear la entidad WikiData correctamente configurada.

---

## 📝 Requisitos previos {#requisitos-previos}

Antes de empezar, prepara la siguiente información:

### Información básica de la empresa:
- [x] Nombre legal: **AppNet Developer S.L.**
- [x] Nombre comercial: **AppNet Developer**
- [x] Año de fundación: **2000** (o 2018 según documentación - verificar)
- [x] Sede: **Murcia, España**
- [x] Coordenadas: **37.9922, -1.1307**
- [x] Sitio web oficial: **https://appnet.dev**
- [x] Teléfono: **+34 619 929 305**
- [x] Email: **info@appnet.dev**

### Información adicional:
- [x] Industria: **Software empresarial, Inteligencia Artificial, IoT Industrial**
- [x] Producto principal: **BionicEye + ADRI**
- [x] Número de empleados: **~10-50** (verificar)
- [x] Redes sociales:
  - LinkedIn: https://linkedin.com/company/appnetdeveloper
  - GitHub: https://github.com/appnetdeveloper
  - YouTube: @appnetdeveloper

### Documentos de verificación (opcional pero recomendado):
- Registro mercantil
- CIF/NIF de la empresa
- Documentación oficial del dominio appnet.dev

---

## 🔐 Crear cuenta en WikiData {#crear-cuenta}

### Paso 1: Ir a WikiData
Accede a: **https://www.wikidata.org**

### Paso 2: Crear cuenta Wikimedia
1. Haz clic en **"Crear cuenta"** (esquina superior derecha)
2. Rellena el formulario:
   - **Nombre de usuario**: Recomendado usar `AppNetDeveloper` o `AppNetDeveloperOfficial`
   - **Contraseña**: Usa un gestor de contraseñas (mínimo 10 caracteres)
   - **Email**: Usa el email corporativo `info@appnet.dev` o crear uno específico `wikidata@appnet.dev`
   - **Confirma que no eres un bot** (captcha)

3. **IMPORTANTE**: Verifica tu email inmediatamente
4. Completa tu perfil de usuario:
   - Nombre real: "AppNet Developer Team"
   - País: España
   - Idiomas: Español, Inglés, Francés
   - Descripción: "Cuenta oficial de AppNet Developer para gestión de entidad WikiData"

### Paso 3: Leer las políticas de WikiData
Antes de crear tu entidad, lee:
- **Notabilidad**: https://www.wikidata.org/wiki/Wikidata:Notability
- **Verificabilidad**: https://www.wikidata.org/wiki/Wikidata:Verifiability
- **Conflicto de interés**: https://www.wikidata.org/wiki/Wikidata:Conflict_of_interest

**IMPORTANTE**: WikiData permite a las empresas crear sus propias entidades si:
- ✅ La información es verificable con fuentes externas
- ✅ La empresa tiene presencia online real (sitio web, redes sociales, prensa)
- ✅ No se hace spam ni autopromoción excesiva
- ✅ Se declara el conflicto de interés en la página de discusión

---

## ➕ Crear la entidad de AppNet Developer {#crear-entidad}

### Paso 1: Verificar que no existe ya
1. Ve a: **https://www.wikidata.org**
2. Busca: `AppNet Developer`, `AppNet Dev`, `AppNetDeveloper`
3. Verifica que **no exista** una entidad similar

### Paso 2: Crear nueva entidad
1. Ve a: **https://www.wikidata.org/wiki/Special:NewItem**
2. Selecciona idioma: **Español (es)**
3. Rellena el formulario inicial:

```
Label (es): AppNet Developer
Description (es): Empresa de desarrollo de software e IA con sede en Murcia, España
Aliases (es): AppNet Dev, AppNetDeveloper
```

4. Haz clic en **"Crear"**

### Paso 3: Añadir traducciones multiidioma
Una vez creada la entidad, añade traducciones:

**Inglés (en):**
```
Label: AppNet Developer
Description: Software development and AI company based in Murcia, Spain
Aliases: AppNet Dev
```

**Francés (fr):**
```
Label: AppNet Developer
Description: Entreprise de développement logiciel et IA basée à Murcie, Espagne
Aliases: AppNet Dev
```

**Rumano (ro):**
```
Label: AppNet Developer
Description: Companie de dezvoltare software și AI cu sediul în Murcia, Spania
Aliases: AppNet Dev
```

**Italiano (it):**
```
Label: AppNet Developer
Description: Azienda di sviluppo software e AI con sede a Murcia, Spagna
Aliases: AppNet Dev
```

---

## 🔧 Propiedades esenciales a añadir {#propiedades-esenciales}

Una vez creada la entidad, añade las siguientes propiedades (**statements**):

### 1️⃣ Identificación básica

| Propiedad | Valor | ID WikiData |
|-----------|-------|-------------|
| **instance of (P31)** | `business (Q4830453)` | Indica que es una empresa |
| **instance of (P31)** | `software company (Q638608)` | Empresa de software |
| **country (P17)** | `Spain (Q29)` | País |
| **headquarters location (P159)** | `Murcia (Q12225)` | Sede |
| **coordinate location (P625)** | `37.9922, -1.1307` | Coordenadas geográficas |

### 2️⃣ Información corporativa

| Propiedad | Valor | ID WikiData |
|-----------|-------|-------------|
| **inception (P571)** | `2000` (o `2018`) | Año de fundación |
| **legal form (P1454)** | `sociedad limitada (Q12345678)` | Forma jurídica |
| **official name (P1448)** | `AppNet Developer S.L.` | Nombre legal |
| **short name (P1813)** | `AppNet Dev` | Nombre corto |

### 3️⃣ Contacto y presencia online

| Propiedad | Valor | ID WikiData |
|-----------|-------|-------------|
| **official website (P856)** | `https://appnet.dev` | Sitio web oficial |
| **email address (P968)** | `info@appnet.dev` | Email corporativo |
| **phone number (P1329)** | `+34 619 929 305` | Teléfono |
| **GitHub username (P2037)** | `appnetdeveloper` | GitHub |
| **LinkedIn company ID (P4264)** | `appnetdeveloper` | LinkedIn |
| **YouTube channel ID (P2397)** | `@appnetdeveloper` | YouTube |

### 4️⃣ Actividad empresarial

| Propiedad | Valor | ID WikiData |
|-----------|-------|-------------|
| **industry (P452)** | `software industry (Q638608)` | Industria |
| **industry (P452)** | `artificial intelligence (Q11660)` | IA |
| **industry (P452)** | `Internet of Things (Q3353956)` | IoT |
| **product or material produced (P1056)** | `BionicEye` | Producto |
| **product or material produced (P1056)** | `ADRI` | Sistema de agentes |

### 5️⃣ Área de operación

| Propiedad | Valor | ID WikiData |
|-----------|-------|-------------|
| **service area (P2936)** | `Spain (Q29)` | España |
| **service area (P2936)** | `Portugal (Q45)` | Portugal |
| **service area (P2936)** | `France (Q142)` | Francia |
| **service area (P2936)** | `European Union (Q458)` | UE |

---

## 🔗 Relaciones y enlaces {#relaciones-enlaces}

### Añadir referencias externas
Para cada propiedad, añade **referencias** (fuentes):

1. Haz clic en **"add reference"** junto a cada statement
2. Añade:
   - **reference URL (P854)**: URL del sitio web oficial
   - **retrieved (P813)**: Fecha de consulta (hoy)
   - **language of work or name (P407)**: Spanish (Q1321)

Ejemplo de referencias para añadir:
```
- Sitio web oficial: https://appnet.dev
- Página "Sobre nosotros": https://appnet.dev/about.php
- Página de contacto: https://appnet.dev/contact.php
- LinkedIn: https://linkedin.com/company/appnetdeveloper
- GitHub: https://github.com/appnetdeveloper
```

### Conectar con entidades relacionadas
Añade propiedades de relación:

| Propiedad | Valor | Explicación |
|-----------|-------|-------------|
| **part of (P361)** | `software industry (Q638608)` | Parte de la industria |
| **located in (P131)** | `Murcia (Q12225)` | Ubicación administrativa |
| **located in (P131)** | `Region of Murcia (Q15089)` | Comunidad autónoma |
| **uses (P2283)** | `artificial intelligence (Q11660)` | Tecnología que usa |
| **uses (P2283)** | `machine learning (Q2539)` | ML |

---

## ✅ Verificación y mantenimiento {#verificación-mantenimiento}

### Paso 1: Revisar la entidad
Después de crear la entidad, verifica:
- ✅ Todas las propiedades tienen al menos una referencia
- ✅ Las descripciones están en al menos 4 idiomas
- ✅ No hay errores ortográficos
- ✅ Los enlaces externos funcionan correctamente
- ✅ Las coordenadas geográficas son correctas

### Paso 2: Declarar conflicto de interés
En la página de discusión de la entidad, añade:

```
== Conflicto de interés ==
Esta entidad ha sido creada por representantes oficiales de AppNet Developer.
Toda la información proporcionada es verificable mediante fuentes externas.
~~~~ (firma automática)
```

### Paso 3: Solicitar revisión
1. Ve a: **https://www.wikidata.org/wiki/Wikidata:Project_chat**
2. Publica un mensaje en inglés:

```
Hi, I've created a new item for [[Q123456789]] (AppNet Developer),
a software company from Spain. As a representative of the company,
I've declared a conflict of interest on the talk page.
Could someone review the item for notability and accuracy?
All information is sourced from official channels. Thanks!
```

### Paso 4: Monitoreo y actualización
- **Cada 3 meses**: Revisar y actualizar información
- **Cuando haya cambios**: Actualizar productos, ubicación, contacto
- **Responder preguntas**: Monitorear la página de discusión

---

## 📊 Impacto en AEO {#impacto-aeo}

### Antes de WikiData:
```
❌ Entidad no encontrada en WikiData: Media prioridad
```

### Después de WikiData:
```
✅ Entidad verificada en WikiData con 25+ propiedades
✅ Conexión con knowledge graph de Google
✅ Citabilidad por LLMs (ChatGPT, Claude, Perplexity)
✅ Presencia en resultados enriquecidos
```

### Score AEO esperado:
- **Antes**: 25/100
- **Después de todas las optimizaciones**: 60-75/100
  - ✅ FAQ Schema (HTML + JSON-LD): +15 puntos
  - ✅ E-A-T Signals: +10 puntos
  - ✅ llm.txt: +10 puntos
  - ✅ OpenStreetMap: +5 puntos
  - ✅ **WikiData**: +15 puntos
  - ✅ Technical optimizations: +5 puntos

---

## 🔍 Verificar que funciona

### Prueba 1: Buscar en WikiData
Después de 24-48 horas:
```
https://www.wikidata.org/w/index.php?search=AppNet+Developer
```

### Prueba 2: Google Knowledge Graph
Después de 2-4 semanas:
```
Buscar en Google: "AppNet Developer Murcia"
```
Debería aparecer un panel de conocimiento a la derecha.

### Prueba 3: Preguntar a LLMs
```
ChatGPT: "¿Qué es AppNet Developer?"
Claude: "Dame información sobre AppNet Developer de Murcia"
Perplexity: "AppNet Developer empresa"
```

Los LLMs deberían poder citar información de WikiData.

---

## 📚 Recursos adicionales

- **Tutorial oficial WikiData**: https://www.wikidata.org/wiki/Wikidata:Tours
- **Propiedades para empresas**: https://www.wikidata.org/wiki/Wikidata:WikiProject_Companies
- **Notabilidad de organizaciones**: https://www.wikidata.org/wiki/Wikidata:Notability/Organizations
- **Ayuda en español**: https://www.wikidata.org/wiki/Wikidata:Introduction/es

---

## ⚠️ Notas importantes

1. **Paciencia**: Los cambios en WikiData pueden tardar 2-4 semanas en reflejarse en Google y otros buscadores
2. **Mantenimiento**: Actualizar la entidad cada 3-6 meses para mantenerla relevante
3. **No spam**: No añadir información promocional o no verificable
4. **Comunidad**: Responder constructivamente a cualquier edición de la comunidad WikiData
5. **Backups**: Guardar el ID de la entidad WikiData en un lugar seguro (ej: `Q123456789`)

---

## ✅ Checklist final

- [ ] Cuenta WikiData creada y verificada
- [ ] Entidad creada con ID WikiData (anotar: Q________)
- [ ] Descripciones en 4+ idiomas (ES, EN, FR, RO)
- [ ] 20+ propiedades añadidas con referencias
- [ ] Conflicto de interés declarado
- [ ] Revisión solicitada en Project Chat
- [ ] ID WikiData añadido a `/var/www/appnetd-web/includes/header.php`:
  ```php
  <meta property="org:wikidata" content="Q________">
  ```
- [ ] Monitoreo configurado (revisión cada 3 meses)

---

**Creado**: Noviembre 2025
**Última actualización**: Noviembre 2025
**Versión**: 1.0
**Mantenedor**: AppNet Developer Team
**Contacto**: info@appnet.dev
