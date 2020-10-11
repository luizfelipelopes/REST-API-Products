FROM php:7.4-apache
COPY site/ /var/www/html/
RUN a2enmod rewrite
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
COPY site/run-apache2.sh /usr/local/bin
RUN ["chmod", "+x", "run-apache2.sh"]
CMD [ "run-apache2.sh" ]
RUN docker-php-ext-install pdo pdo_mysql
