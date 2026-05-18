# Práctica 3 – Docker Multicontenedor: Aplicación Web Románico + Laravel

Este proyecto implementa una aplicación web basada en **Laravel** sobre el **Románico Palentino**, desplegada mediante una arquitectura multicontenedor con **Docker Compose**. La solución aplica principios de aislamiento de servicios, segmentación de red y buenas prácticas de seguridad para facilitar el despliegue y mantenimiento.

---

# 🖼️ Capturas de la aplicación

<p align="center">
  <img src="images/captura_home.png" alt="Página de inicio" width="70%" />
</p>

<p align="center">
  <em>Página principal de la aplicación</em>
</p>

---

<p align="center">
  <img src="images/captura_registro.png" alt="Formulario de registro" width="70%" />
</p>

<p align="center">
  <em>Registro de usuarios</em>
</p>

---

<p align="center">
  <img src="images/captura_login_correcto.png" alt="Sesión iniciada" width="70%" />
</p>

<p align="center">
  <em>Aplicación con sesión autenticada</em>
</p>

---

# 🧱 Arquitectura de Contenedores

El despliegue está compuesto por tres servicios principales:

| Servicio | Tecnología | Función |
|---|---|---|
| `romanico-db` | MySQL 8.0 | Base de datos de la aplicación |
| `romanico-backend` | PHP 8.2-FPM | Backend Laravel |
| `romanico-backend-nginx` | Nginx | Servidor web y proxy interno |

---

# 🛡️ Seguridad y Segmentación de Red

La infraestructura sigue un enfoque de **microsegmentación** inspirado en principios de **Zero Trust**.

## 1. Redes aisladas

Se utilizan tres redes diferenciadas:

| Red | Función |
|---|---|
| `red-backyard` | Comunicación privada entre Laravel y MySQL |
| `red-frontal` | Comunicación entre Nginx y PHP-FPM |
| `proxy-public` | Integración externa con Nginx Proxy Manager |

### Características de seguridad

- La base de datos no expone puertos al exterior.
- MySQL únicamente es accesible desde la red interna.
- El contenedor Nginx monta el código en modo lectura (`:ro`).
- Separación entre servicios frontend y backend.

---

## 2. Gestión de secretos

Las credenciales sensibles se almacenan en un archivo `.env`, evitando exponer contraseñas en el repositorio.

Ejemplo:

```env
DB_ROOT_PASSWORD=tu_clave_maestra
DB_DATABASE=romanico
DB_USERNAME=romanico
DB_PASSWORD=tu_clave_usuario
```

---

## 3. Inmutabilidad del servidor web

El contenedor Nginx accede al código fuente en modo **solo lectura**, reduciendo el riesgo de modificaciones no autorizadas desde el servidor web.

---

# 🚀 Despliegue

## 1. Preparación del entorno

Crear un archivo `.env` en la raíz del proyecto con el siguiente contenido:

```env
DB_ROOT_PASSWORD=tu_clave_maestra
DB_DATABASE=romanico
DB_USERNAME=romanico
DB_PASSWORD=tu_clave_usuario
```

---

## 2. Levantar los contenedores

Desde la raíz del proyecto ejecutar:

```bash
docker compose up -d --build
```

---

## 3. Acceso a la aplicación

### Acceso directo

Si existen puertos publicados en `docker-compose.yml`:

```text
http://IP-DEL-SERVIDOR:8083
```

### Acceso mediante Nginx Proxy Manager (Recomendado)

Configurar un proxy host apuntando a:

| Parámetro | Valor |
|---|---|
| Hostname | `romanico-backend-nginx` |
| Puerto | `80` |

---

# 📁 Estructura del Proyecto

```text
.
├── .env                       # Variables sensibles (ignorado por Git)
├── .gitignore                 # Exclusión de archivos sensibles
├── backend/                   # Proyecto Laravel
├── backend/nginx.conf         # Configuración personalizada de Nginx
└── docker-compose.yml         # Orquestación de contenedores
```

---

# 🗄️ Configuración de la Base de Datos

| Parámetro | Configuración |
|---|---|
| Motor | MySQL 8.0 |
| Host interno | `romanico-db` |
| Red | `red-backyard` |
| Acceso externo | No permitido |
| Credenciales | Variables `.env` |

---

# ✔️ Estado Final

- ✅ Base de datos aislada sin exposición pública.
- ✅ Redes internas segmentadas.
- ✅ Nginx ejecutándose con acceso de solo lectura.
- ✅ Variables sensibles externalizadas mediante `.env`.
- ✅ Despliegue reproducible mediante Docker Compose.
- ✅ Laravel inicializado automáticamente mediante `entrypoint.sh`.

---

# 🏁 Release

La versión estable del proyecto se encuentra publicada en el repositorio bajo el tag:

```text
v1.2.0
```