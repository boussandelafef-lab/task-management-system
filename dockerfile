FROM php:8.2-apache

# Installer extensions MySQL
RUN docker-php-ext-install pdo_mysql mysqli

# Copier projet
COPY . /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html

# Activer Apache rewrite (important pour beaucoup d'apps)
RUN a2enmod rewrite

EXPOSE 80