##
# Production Dockerfile for Render
# - Serves Laravel via Apache on port 8080
# - Builds front-end assets with Node and installs PHP dependencies with Composer
##

# 1) Build PHP dependencies
FROM composer:2 AS vendor
WORKDIR /app
COPY . .
RUN composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction

# 2) Build front-end assets (Vite)
FROM node:20-alpine AS assets
WORKDIR /app
COPY package.json package-lock.json* ./
RUN if [ -f package-lock.json ]; then npm ci; else npm install; fi
COPY resources ./resources
COPY vite.config.js .
RUN npm run build

# 3) Runtime image
FROM php:8.2-apache
WORKDIR /var/www/html

# System dependencies and PHP extensions
RUN apt-get update \
    && apt-get install -y git unzip libzip-dev libicu-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl pdo_mysql zip gd opcache \
    && a2enmod rewrite \
    && sed -ri 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf /etc/apache2/conf-available/*.conf \
    && sed -ri 's/80/8080/g' /etc/apache2/ports.conf /etc/apache2/sites-available/*.conf \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Serve the public directory and expose port 8080 (Render's default)
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
ENV APP_ENV=production \
    APP_DEBUG=false

# Bring in app code, vendor deps, and built assets
COPY --from=vendor /app /var/www/html
COPY --from=assets /app/public/build /var/www/html/public/build

# Permissions for storage and cache
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 8080
CMD ["apache2-foreground"]
