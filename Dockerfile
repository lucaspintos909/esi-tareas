FROM php:8.0.3-apache

RUN apt-get update && \
  docker-php-ext-install mysqli && \
  docker-php-ext-enable mysqli

RUN docker-php-ext-install -j$(nproc) pdo && \
  docker-php-ext-install -j$(nproc) pdo_mysql

RUN a2enmod rewrite

EXPOSE 80