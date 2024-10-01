# Web_server/Dockerfile
FROM php:7.4-apache

# Activer l'extension MySQL pour PHP
RUN docker-php-ext-install mysqli

# Copier le fichier index.html dans le répertoire web
COPY index.html /var/www/html/

# Copier le script PHP pour tester la connexion à la base de données
COPY db_test.php /var/www/html/

EXPOSE 8080