FROM ubuntu:16.04
RUN apt-get update -y
RUN apt-get install -y apache2 ufw && apt-get clean

#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
#WORKDIR /app
#COPY . /app
#RUN composer install

#CMD php artisan migrate
#CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 80
CMD apachectl -D FOREGROUND
