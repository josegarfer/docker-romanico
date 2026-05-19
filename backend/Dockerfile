FROM php:8.2-fpm

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    mariadb-client

# Extensiones PHP necesarias para Laravel
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Instalar Node 20 + npm
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Configurar directorio de trabajo
WORKDIR /var/www/html

# Copiar proyecto
COPY . .

# CAMBIO: Ajustar permisos antes de cambiar de usuario. 
# Esto asegura que el usuario www-data sea dueño de la app.
RUN chown -R www-data:www-data /var/www/html

# Instalar dependencias PHP como el usuario www-data
# CAMBIO: Se añade --no-dev si es para "producción" local, pero lo dejamos simple.
RUN composer install

# Instalar dependencias JS y compilar Vite
RUN npm install && npm run build

# CAMBIO: Esta es la línea que mata la alerta HIGH de KICS.
# Le dice a Docker que a partir de aquí, todo se ejecute como el usuario www-data (ID 33).
USER www-data

COPY entrypoint.sh /entrypoint.sh
# CAMBIO: Como el archivo se copia como root, necesitamos que sea ejecutable. 
# Lo ideal es hacerlo antes del cambio de USER o usar --chown.
USER root
RUN chmod +x /entrypoint.sh
USER www-data

ENTRYPOINT ["/entrypoint.sh"]