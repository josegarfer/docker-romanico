#!/bin/bash
set -e

cd /var/www/html

# Crear .env si no existe
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Reinstalar dependencias (el volumen sobreescribió vendor/)
composer install --no-interaction --optimize-autoloader

# Compilar assets si no están
if [ ! -d public/build ]; then
    npm install && npm run build
fi

# Laravel setup
php artisan key:generate --no-interaction 2>/dev/null || true
php artisan migrate --force --no-interaction 2>/dev/null || true
php artisan optimize:clear

exec php-fpm
