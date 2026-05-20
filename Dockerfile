FROM php:8.2-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Install required PHP extensions (like mysqli for databases, if needed)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your application files to the default Apache document root
COPY . /var/www/html/

# Expose port 80
EXPOSE 80
