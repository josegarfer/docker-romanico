# Práctica 3 – Docker Multicontenedor: Aplicación Web Románico + Laravel

Este proyecto implementa una aplicación web basada en **Laravel**, con autenticación y contenido multimedia del **Románico Palentino**, desplegada mediante **Docker Compose** usando un entorno multicontenedor.

---

## 🧱 Contenedores incluidos

El archivo `docker-compose.yml` define tres contenedores principales:

- **romanico-db** → Servidor MySQL 8.0  
- **romanico-backend** → PHP-FPM ejecutando Laravel  
- **romanico-backend-nginx** → Servidor Nginx que sirve Laravel

La aplicación final se muestra en:



http://localhost:8080


---

## 🚀 Cómo desplegar la aplicación

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/josegarfer/docker-romanico.git
   cd docker-romanico


Levantar el entorno Docker

docker compose up -d --build


Abrir la aplicación en el navegador

http://localhost:8080


Registrarse / Iniciar sesión para acceder al contenido del Románico.

📂 Estructura del proyecto
backend/                    → Proyecto Laravel
backend/public/romanico/    → Imágenes, audios y subpáginas del Románico
backend/resources/views/    → Vistas Blade (home.blade.php)
docker-compose.yml          → Orquestación de contenedores

🗄 Base de datos MySQL

La base de datos corre en un contenedor MySQL con volumen persistente:

Host interno: db

Usuario: romanico

Contraseña: romanico123

Base de datos: romanico

Volumen: db_data

Laravel se conecta mediante las variables del archivo .env.

🏁 Release

La versión final se publica en la sección Releases con el tag:

v1.0.0


Incluye todo el código necesario para desplegar la aplicación.