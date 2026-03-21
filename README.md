# Práctica 3 – Docker Multicontenedor: Aplicación Web Románico + Laravel

Este proyecto implementa una aplicación web basada en **Laravel**, con autenticación y contenido multimedia del **Románico Palentino**, desplegada mediante **Docker Compose** en un entorno multicontenedor.

## 🖼️ Capturas de la aplicación

<p align="center">
  <img src="images/captura_home.png" alt="Inicio" width="70%" />
</p>
<p align="center"><em>Página de inicio</em></p>

---

<p align="center">
  <img src="images/captura_registro.png" alt="Registro de usuario" width="70%" />
</p>
<p align="center"><em>Formulario de registro</em></p>

---

<p align="center">
  <img src="images/captura_login_correcto.png" alt="Login correcto" width="70%" />
</p>
<p align="center"><em>Pantalla de la web con la sesión iniciada</em></p>

---

## 🧱 Contenedores incluidos

El archivo `docker-compose.yml` define tres contenedores:

- **romanico-db** → Servidor MySQL 8.0
- **romanico-backend** → PHP-FPM ejecutando Laravel
- **romanico-backend-nginx** → Servidor Nginx que sirve Laravel

---

## 🚀 Opción 1 — Despliegue en GitHub Codespaces (recomendado, sin instalar nada)

> ☝️ Solo necesitas un navegador y una cuenta de GitHub.

1. Haz clic en el botón verde **`<> Code`** de este repositorio
2. Pestaña **Codespaces** → **"Create codespace on main"**
3. Espera a que termine el build (puede tardar 2-5 minutos)
4. El navegador se abrirá automáticamente en la aplicación ✅

Todo lo demás (dependencias, migraciones, permisos) se configura solo.

---

## 🖥️ Opción 2 — Despliegue en local (Linux/Debian)

> Requisitos: tener instalados `git` y `docker`.

### 1. Clonar el repositorio

```bash
git clone https://github.com/josegarfer/docker-romanico.git
cd docker-romanico
```

### 2. Levantar los contenedores

```bash
docker compose up -d --build
```

### 3. Abrir la aplicación

```
http://localhost:8083
```

> El primer arranque puede tardar un par de minutos mientras se instalan las dependencias y se migra la base de datos automáticamente.

---

## 📁 Estructura del proyecto

```
.devcontainer/              → Configuración de GitHub Codespaces
backend/                    → Proyecto Laravel
backend/entrypoint.sh       → Script de arranque automático
backend/public/romanico/    → Imágenes, audios y subpáginas del Románico
backend/resources/views/    → Vistas Blade
docker-compose.yml          → Orquestación de contenedores
```

---

## 🗄️ Base de datos MySQL

| Parámetro     | Valor        |
|---------------|--------------|
| Host interno  | db           |
| Usuario       | romanico     |
| Contraseña    | romanico123  |
| Base de datos | romanico     |

---

## ✔️ Estado final

La aplicación queda totalmente funcional con:

- ✅ Despliegue automático en Codespaces con un solo clic
- ✅ Despliegue local con un solo comando
- ✅ Frontend compilado (Vite + Tailwind)
- ✅ Entorno Laravel configurado
- ✅ Base de datos migrada
- ✅ Permisos corregidos
- ✅ Cachés limpiadas

---

## 🏁 Release

La versión final corregida está publicada en Releases bajo el tag `v1.2.0`.
