FROM php:8.3-fpm-alpine

WORKDIR /var/www/html

RUN apk update && apk add --no-cache postgresql-dev

RUN docker-php-ext-install pdo pdo_pgsql fileinfo

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/var/www/html --filename=composer

CMD ["php-fpm"]
