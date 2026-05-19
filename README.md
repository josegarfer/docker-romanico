# Práctica 3 – Docker Multicontenedor: Aplicación Románico Palentino

Este proyecto implementa una arquitectura de microservicios para una aplicación basada en **Laravel** sobre el **Románico Palentino**. El despliegue se realiza mediante **Docker Compose**, aplicando principios de segmentación de red, ejecución sin privilegios, gestión de secretos en memoria y seguridad **Zero Trust**.

---

# 🖼️ Capturas de la aplicación

<p align="center">
  <img src="images/captura_home.png" alt="Página de inicio" width="75%" />
  <br><em>Página principal con el catálogo de monumentos</em>

</p>

<p align="center">
  <img src="images/captura_registro.png" alt="Formulario de registro" width="75%" />
<br><em>Registro de usuarios</em>

</p>

<p align="center">

  <img src="images/captura_login_correcto.png" alt="Sesión iniciada" width="75%" />

  <br><em>Panel de usuario autenticado tras la migración de base de datos</em>

</p>


---

# 🧱 Arquitectura del Stack

| Servicio | Imagen | Función |
|---|---|---|
| `romanico-db` | `mysql:8.0` | Almacenamiento persistente de datos |
| `romanico-backend` | `php:8.2-fpm` | Lógica de negocio, migraciones automatizadas y procesamiento PHP |
| `romanico-backend-nginx` | `nginx:alpine` | Servidor web y entrega de contenido estático optimizado |

---

# 🛡️ Implementación de Seguridad (Bunker Mode)

## 1. Microsegmentación de Red Automática

Se han definido tres redes independientes gestionadas nativamente por Docker Compose para garantizar portabilidad (Local/Nube) y evitar el movimiento lateral:

### `red-backyard`
Red interna exclusiva para la comunicación entre PHP y MySQL.

- Es una red `internal`
- Sin salida directa a internet

### `red-frontal`
Red de comunicación entre el servidor web Nginx y el backend PHP.

### `proxy-public`
Red destinada a la integración con Nginx Proxy Manager.

---

## 2. Ejecución Non-Root y Volúmenes Anónimos

Para cumplir con las auditorías de seguridad (ej. KICS), el contenedor de PHP opera de forma segura sin ser `root`.

### Medidas implementadas

- El `Dockerfile` y el `entrypoint.sh` están diseñados para gestionar permisos automáticamente
- Uso de **Volúmenes Anónimos** (`/var/www/html/vendor`, `storage`, etc.)
- Protección frente a conflictos de permisos entre:
  - Host Debian/Codespaces
  - Usuario interno `www-data` (UID 33)

---

## 3. Gestión de Secretos en RAM (Inyección de Entorno)

Toda la configuración sensible:

- Contraseñas de base de datos
- `APP_KEY` de Laravel

se gestiona mediante variables de entorno inyectadas directamente en memoria desde el `docker-compose.yml`.

### Ventajas

- No es necesario escribir secretos en archivos físicos `.env`
- Compatible con contenedores Non-Root
- Sistema de archivos más inmutable
- Menor superficie de exposición

---

## 4. Inmutabilidad y Solo Lectura

El contenedor de Nginx monta el código fuente en modo **Solo Lectura (`:ro`)**, reduciendo la superficie de ataque e impidiendo modificaciones maliciosas desde el propio servidor web.

---

# 🚀 Despliegue e Instalación

El entorno está preparado para levantar a la primera tanto en:

- Máquina local Debian
- GitHub Codespaces

sin necesidad de ejecutar comandos manuales de permisos.

---
## 1. Clonar el repositorio

Antes de nada, descarga el código fuente y accede al directorio del proyecto:

```bash
git clone [https://github.com/josegarfer/docker-romanico.git](https://github.com/josegarfer/docker-romanico.git)
cd docker-romanico
```

## 2. Preparar los archivos de entorno

Antes de levantar los contenedores, genera los archivos de variables a partir de los ejemplos.

> Estos archivos están incluidos en `.gitignore` por seguridad.

### Base de datos

```bash
cp .env.example .env
```

### Backend Laravel

```bash
cp backend/.env.example backend/.env
```

Puedes editar estos archivos para personalizar las contraseñas si lo deseas.

---

## 3. Levantar el entorno

Desde la raíz del proyecto:

```bash
docker compose up -d --build
```

### Automatización incluida

El `entrypoint.sh` se encarga automáticamente de:

- Instalar dependencias Composer
- Instalar dependencias NPM
- Generar cachés
- Ejecutar migraciones Laravel
- Preparar permisos internos

---

## 4. Acceso a la web

### Entorno de Desarrollo (Codespaces / Local)

```text
http://localhost:8083
```

---

### Entorno de Producción (Recomendado)

Uso mediante Proxy Inverso con Nginx Proxy Manager apuntando al servicio interno:

```text
romanico-backend-nginx:80
```

---

# 📁 Estructura del Proyecto

```text
.
├── .env.example          # Plantilla segura de variables de entorno
├── .gitignore            # Protege los .env reales
├── docker-compose.yml    # Orquestación de infraestructura y redes
├── backend/              # Código Laravel + Dockerfile + entrypoint.sh
└── backend/nginx.conf    # Configuración optimizada de Nginx
```

---

# 🏁 Release y Versión

## Versión estable actual

```text
v1.3.0
```

## Novedades de esta versión

- Refactorización completa del sistema de volúmenes
- Eliminación de conflictos `Permission denied`
- Migración a inyección de secretos en RAM
- Compatibilidad multiplataforma total
- Gestión automática de `proxy-public`

---

# 👨‍💻 Autor

**Pepe — 2026**
