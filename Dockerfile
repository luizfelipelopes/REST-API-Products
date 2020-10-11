FROM php:7.4-apache
COPY site/ /var/www/html/
RUN sed -i "s/Listen 80/Listen ${PORT:-80}/g" /etc/apache2/ports.conf /usr/local/bin/docker-entrypoint.sh apache2-foreground
RUN a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN docker-php-ext-install pdo pdo_mysql

