FROM php:7.2.10

RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo

WORKDIR /app
COPY . /app
RUN composer install --no-interaction

CMD vendor/bin/phpunit
# CMD npm run production

CMD php artisan serve --host=0.0.0.0 --port=8181

EXPOSE 8181