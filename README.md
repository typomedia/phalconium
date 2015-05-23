# Phalconium

Phalconium is a skeleton application based on [Phalcon PHP](http://phalconphp.com/) and [ZURB Foundation](http://foundation.zurb.com/). It comes along with a very strong feature set:

* Support for MySQL, Postgres and SQLite
* Responsive design with mobile first approach
* Pretty error interface for debugging issues
* Web tool for controller, models, scaffold and migrations

## Getting Startet

Phalcon is a PHP framework which is not written in PHP. It's an extension for PHP written in C. That means, you have to install it, before you can run it. In the [Phalcon Documentation](http://docs.phalconphp.com/en/latest/reference/install.html) you can read how to do that.

## Requirements

At least you need the following to run Phalconium on your machine:

```sh
apt-get install apache2 php5 php5-sqlite
echo extension=phalcon.so > /etc/php5/apache2/conf.d/30-phalcon.ini
a2enmod rewrite
service apache2 restart
```
## Installation

To clone Phalconium to your local webserver you can simply run:

```sh
cd /var/www/
git clone https://github.com/typomedia/phalconium.git
chown -R www-data:www-data phalconium/
```

Open `/app/config/config.php` and set the `baseUri` to `phalconium` if you have not set the `DocumentRoot` to `phalconium/public`.

## Screenshot
![Screenshot](https://raw.githubusercontent.com/typomedia/phalconium/master/screenshot.png "Phalconium Screenshot")
