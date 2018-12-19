# AncientArchive-Backend
Backend dari Ancient Archive (MPPL Project)

Installasi Laravel Versi Terbaru
- PHP >= 7.1.3

1. Install apache2
```
	$ sudo apt install apache2
```
2.  Install MySQL
```
	$ sudo apt install mysql-server
```
3. Install library pendukung PHP
```
	$ sudo add-apt-repository ppa:ondrej/php
	$ sudo apt-get install libapache2-mod-php7.2 php7.2 php7.2-xml php7.2-gd php7.2-opcache php7.2-mbstring php-common php-mysql php-cli
```
4. Install composer dan library yang diperlukan aplikasi
```
	$ curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
	$ composer install
	$ composer update
	$ composer require doctrine/dbal
	$ composer require spatie/laravel-permission
```
5.  Buat database 'mpplproject' di MySQL
```
	$ mysql -u root -p # -p untuk password
	mysql> CREATE DATABASE mpplproject;
	mysql> quit;
	$ service mysql restart
```
6.  Lakukan migrasi untuk meng-*update* database
```
	$ php artisan migrate
```
7. Jalankan
```
	$ php artisan serve --host=0.0.0.0 --port=8000
```
