# Web_server/Dockerfile
FROM php:7.4-apache

# Enable the MySQL extension for PHP
RUN docker-php-ext-install mysqli

# Copy the index.html file to the web directory
COPY index.html /var/www/html/

# Copy the PHP script to test the database connection
COPY db_test.php /var/www/html/

# Expose port 8080 for the web server
EXPOSE 8080