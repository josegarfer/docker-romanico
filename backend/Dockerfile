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

# Copiar proyecto (el volumen lo sobrescribirá)
COPY . .

# Instalar dependencias PHP
RUN composer install

# Instalar dependencias JS y compilar Vite
RUN npm install && npm run build

CMD ["php-fpm"]
