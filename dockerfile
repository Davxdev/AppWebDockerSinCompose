# Imagen base con Apache y PHP 8.2
FROM php:8.2-apache

# Instalamos extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiamos el código fuente al contenedor
COPY src/ /var/www/html/