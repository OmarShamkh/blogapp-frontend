FROM php:8.1.2

RUN apt-get update -y

WORKDIR /var/www

COPY . .

COPY --from=composer:2.4.1 /usr/bin/composer /usr/bin/composer

EXPOSE 8001

CMD php artisan serve --host=0.0.0.0 --port=8001

