FROM php:8.5-fpm-alpine

RUN apk add --no-cache \
    nginx \
    supervisor \
    bash \
    curl \
    git \
    libzip-dev \
    oniguruma-dev \
    icu-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_mysql intl mbstring zip

WORKDIR /var/www/html

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
