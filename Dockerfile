# =========================
# Build frontend assets
# =========================
FROM node:22-alpine AS frontend

WORKDIR /app

COPY package*.json ./

RUN npm ci

COPY . .

RUN npm run build


# =========================
# Laravel Runtime
# =========================
FROM php:8.4-apache


RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libicu-dev \
    libpq-dev \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && docker-php-ext-install \
        pdo_mysql \
        pdo_pgsql \
        pgsql \
        bcmath \
        intl \
        zip \
        gd \
        opcache \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*


# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer


WORKDIR /var/www/html


# Copy project
COPY . .


# Install PHP dependencies
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --prefer-dist


# Copy frontend assets
COPY --from=frontend /app/public/build ./public/build


# Storage permissions
RUN mkdir -p storage/framework/{cache,sessions,views} \
    && mkdir -p storage/logs \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache


# Apache DocumentRoot
RUN sed -ri \
    -e 's!/var/www/html!/var/www/html/public!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/conf-available/*.conf


RUN printf '<Directory /var/www/html/public>\n\
AllowOverride All\n\
Require all granted\n\
</Directory>\n' \
> /etc/apache2/conf-available/laravel.conf \
&& a2enconf laravel


# Add startup script
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

RUN chmod +x /usr/local/bin/docker-entrypoint.sh


EXPOSE 80


ENTRYPOINT ["docker-entrypoint.sh"]

CMD ["apache2-foreground"]
