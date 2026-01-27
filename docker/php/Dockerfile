# Use official PHP image
FROM php:8.4-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    zip \
    curl \
    npm \
    nodejs \
    && docker-php-ext-install pdo_mysql zip


# ✅ Install Redis extension
RUN pecl install redis \
    && docker-php-ext-enable redis
# Install composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Copy existing app
COPY . .

# Install PHP dependencies
RUN composer install

# Expose port
EXPOSE 9000
CMD ["php-fpm"]
