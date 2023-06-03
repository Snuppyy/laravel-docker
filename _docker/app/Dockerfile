FROM php:8.2.7RC1-fpm

# install xdebug
RUN pecl install xdebug

# copy over the config files
COPY ./_docker/app/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
COPY ./_docker/app/error_reporting.ini /usr/local/etc/php/conf.d/error_reporting.ini

# enable the extension
RUN docker-php-ext-enable xdebug

RUN apt-get update && apt-get install -y \
   apt-utils \
   libpq-dev \
   libpng-dev \
   libzip-dev \
   zip unzip \
   git && \
   docker-php-ext-install pdo_mysql && \
   docker-php-ext-install bcmath && \
   docker-php-ext-install gd && \
   docker-php-ext-install zip && \
   apt-get clean && \
   rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY ./_docker/app/php.ini /usr/local/etc/php/conf.d/php.ini

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
   --filename=composer \
   --install-dir=/usr/local/bin

RUN chmod 777 -R ./

WORKDIR /var/www