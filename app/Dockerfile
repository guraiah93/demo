FROM ubuntu
ENV  debian_frontend=noninteractive
RUN  apt-get update
RUN  apt-get install apache2 -y
ADD  app.html /var/www/html
EXPOSE  80
CMD ["apache2ctl","-D","FOREGROUND"]

