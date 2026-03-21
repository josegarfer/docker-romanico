#!/bin/bash
set -e

cd /var/www/html

if [ ! -f .env ]; then
    cp .env.example .env
fi

# Si estamos en Codespaces, actualizar APP_URL automáticamente
if [ -n "$CODESPACE_NAME" ]; then
    APP_URL="https://${CODESPACE_NAME}-8083.${GITHUB_CODESPACES_PORT_FORWARDING_DOMAIN}"
    sed -i "s|APP_URL=.*|APP_URL=${APP_URL}|" .env
fi

if [ ! -f vendor/autoload.php ]; then
    composer install --no-interaction --optimize-autoloader
fi

if [ ! -d public/build ]; then
    npm install && npm run build
fi

php artisan key:generate --no-interaction 2>/dev/null || true
php artisan migrate --force --no-interaction 2>/dev/null || true
php artisan optimize:clear
chown -R www-data:www-data storage bootstrap/cache

exec php-fpm