FROM ubuntu:16.04
RUN apt-get update -y
RUN apt-get install -y apache2 ufw && apt-get clean
RUN DEBIAN_FRONTEND=noninteractive apt-get -yq install mysql-server

RUN apt-get install software-properties-common -y
RUN export LANG=C.UTF-8 && add-apt-repository ppa:ondrej/php && apt-get update
RUN apt-get install libapache2-mod-php7.2 php7.2 php7.2-xml php7.2-gd php7.2-opcache php7.2-mbstring php-common php-mysql php-cli -y
RUN apt-get install curl php-cli php-mbstring git unzip -y && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
COPY . /app
RUN export COMPOSER_ALLOW_SUPERUSER=1; composer install

RUN /etc/init.d/mysql start && mysql -e "CREATE DATABASE mpplproject"
RUN composer update
RUN composer require doctrine/dbal
RUN composer require spatie/laravel-permission

#CMD apachectl -D FOREGROUND
CMD service mysql restart
CMD php artisan migrate
CMD php artisan serve --host=0.0.0.0 --port=8181
EXPOSE 8181
