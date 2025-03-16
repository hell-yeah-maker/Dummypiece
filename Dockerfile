# Use official PHP 8 image with Apache
FROM php:8.0-apache

# Set working directory
WORKDIR /var/www/html

# Install dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy source files into container
COPY ./demo-php /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache in foreground mode
CMD ["apache2-foreground"]
