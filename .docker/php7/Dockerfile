FROM php:7.2-fpm

RUN apt-get update

# Install Postgre PDO
RUN apt-get install -y git libpq-dev libz-dev \
    && docker-php-ext-configure zip --with-zlib-dir \
    && docker-php-ext-configure mysqli -with-mysqli=mysqlnd \
    && docker-php-ext-configure pdo_mysql -with-pdo-mysql=mysqlnd \
    && docker-php-ext-install zip pdo pdo_mysql mysqli

RUN pecl install xdebug-2.6.1 \
    && docker-php-ext-enable xdebug

COPY config/php.ini /usr/local/etc/php/conf.d/
WORKDIR /var/www
