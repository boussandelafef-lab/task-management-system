FROM php:8.2-apache

# Extensions MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copier le projet dans Apache
COPY . /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html/

EXPOSE 80