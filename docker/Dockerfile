FROM php:7.2

RUN apt-get update && apt-get install -y \
    openssl \
    git \
    unzip
ADD ./ /var/www/symfony
WORKDIR /var/www/symfony

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=1.7.0
RUN composer --version
RUN composer install

# Type docker-php-ext-install to see available extensions
#RUN docker-php-ext-install pdo pdo_mysql


# install xdebug
#RUN pecl install xdebug
#RUN docker-php-ext-enable xdebug
#RUN echo "error_reporting = E_ALL" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "display_startup_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "display_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "xdebug.remote_connect_back=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "xdebug.idekey=\"PHPSTORM\"" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#RUN echo "xdebug.remote_port=9001" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
#
#RUN echo 'alias sf="php app/console"' >> ~/.bashrc
#RUN echo 'alias sf3="php bin/console"' >> ~/.bashrc

ENTRYPOINT [ "/var/www/symfony/bin/console", "server:run", "0.0.0.0:8000", "--docroot=web", "--env=prod"]
#ENTRYPOINT [ "bash" ]
