#!/bin/bash
set -e

cd /var/www/html

# CAMBIO: El 'cp' ya no es crítico aquí porque lo hace el devcontainer, 
# pero lo dejamos por si lanzas el contenedor a mano en local.
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

# CAMBIO: Eliminamos el 'chown'. 
# Ya lo hicimos en el Dockerfile como root antes de cambiar al usuario www-data.
# Un usuario sin privilegios no puede ejecutar chown.

exec php-fpm