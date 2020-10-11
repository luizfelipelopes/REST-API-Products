FROM php:7.4-apache
COPY site/ /var/www/html/
RUN a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN sed -i "s/Listen 80/Listen ${PORT:-80}/g" /etc/apache2/ports.conf
RUN sed -i "s/Listen 80/Listen ${PORT:-80}/g" /etc/apache2/apache2.conf
RUN sed -i "s/VirtualHost \*:80/VirtualHost \*:${PORT:-80}/g" /etc/apache2/sites-available/000-default.conf
RUN docker-php-ext-install pdo pdo_mysql
