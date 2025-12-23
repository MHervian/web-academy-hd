FROM php:8.1-fpm

# Install dependency OS
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql

# Install composer 
# Uncomment to activate in VPS (PENTING)
# COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Uncomment to activate in VPS
# Tentukan folder kerja (PENTING)
# WORKDIR /var/www/html

# Uncomment to activate in VPS (OPSIONAL)
# RUN composer install --no-interaction --optimize-autoloader --no-dev

# Set permissions for Laravel 
# Uncomment to activate in VPS (OPSIONAL)
# RUN chown -R www-data:www-data /var/www/storage /var/www/cache

# Optional (recommended)
RUN docker-php-ext-enable pdo_mysql
