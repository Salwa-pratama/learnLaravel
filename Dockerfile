FROM php:8.2-cli

# Install system deps
RUN apt-get update && apt-get install -y \
    git curl unzip zip \
    libzip-dev libpng-dev \
    nodejs npm \
    && docker-php-ext-install pdo pdo_mysql zip

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
