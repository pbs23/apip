# api/Dockerfile
FROM php:8.2-apache

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pgsql pdo_pgsql

# Copiar archivos del proyecto al contenedor
COPY . /var/www/html/

EXPOSE 80
