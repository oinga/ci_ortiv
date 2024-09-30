# Use an official PHP image with Apache
FROM php:8.2-apache

# Install required system packages and Composer
RUN apt-get update && apt-get install -y \
    libicu-dev \
    zip \
    unzip \
    git \
    curl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install necessary PHP extensions
RUN docker-php-ext-install intl pdo pdo_mysql

# Enable Apache mod_rewrite for CodeIgniter routing
RUN a2enmod rewrite

# Set the working directory to the CodeIgniter app root
WORKDIR /var/www/html

# Copy the CodeIgniter application files to the container
COPY . .

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Set ownership and permissions for the Apache user
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Add the ServerName directive to avoid Apache warnings
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Add the DirectoryIndex configuration to ensure index.php is served
RUN echo "<IfModule dir_module>\n    DirectoryIndex index.php index.html\n</IfModule>" >> /etc/apache2/apache2.conf

# Configure the Apache VirtualHost
RUN echo "<VirtualHost *:80>\n" \
    "    DocumentRoot /var/www/html/public\n" \
    "    <Directory /var/www/html/public>\n" \
    "        AllowOverride All\n" \
    "        Require all granted\n" \
    "    </Directory>\n" \
    "</VirtualHost>" > /etc/apache2/sites-available/000-default.conf

# Expose the container’s port 80 for HTTP traffic
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
