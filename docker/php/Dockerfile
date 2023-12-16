FROM php:8.2.8-apache

RUN apt-get update && \
    apt-get install -y \
    libzip-dev \
    zip \
    curl \
    libcurl4-openssl-dev \
	ffmpeg

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug