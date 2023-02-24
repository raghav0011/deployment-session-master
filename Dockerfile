FROM php:8.1.5-fpm-alpine

#installing composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#installing mongo db
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions mongodb
# Set working directory
WORKDIR /var/www/html

# Copy existing application directory contents
COPY . /var/www/html

# Add user 
RUN addgroup -g 1000 www
RUN adduser -u 1000 -s /bin/bash -D -G www www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www/html

# Change current user to www
USER www

EXPOSE 9000
CMD ["php-fpm"]