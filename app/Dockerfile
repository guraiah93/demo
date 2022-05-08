FROM php:8.0-apache
ENV  debian_frontend=noninteractive
RUN  apt-get update
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
ADD  index.php /var/www/html
ADD info.php /var/www/html
EXPOSE  80
CMD ["apache2ctl","-D","FOREGROUND"]

