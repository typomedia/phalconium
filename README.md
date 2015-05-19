# Phalconium

Phalconium is a skeleton application based on Phalcon PHP and ZURB Foundation. It comes along with a very strong feature set:

* Support for MySQL, Postgres and SQLite
* Responsive design with mobile first approach
* Pretty error interface for debugging issues
* Web tool for controller, models, scaffold and migrations

## Getting Startet

Phalcon is a PHP framework which is not written in PHP. It's an extension for PHP written in C. That means, you have to install it, before you can run it. Here you can read how to do that: [Phalcon Documentation - Installation](http://docs.phalconphp.com/en/latest/reference/install.html)

```sh
cd /var/www/
git clone https://github.com/typomedia/phalconium.git
chown -R www-data:www-data phalconium/
```

Open `/app/config/config.php` and set the `baseUri` to `phalconium` if you have not set the `DocumentRoot` to `phalconium/public`.

## Screenshot
![Screenshot](https://raw.githubusercontent.com/typomedia/phalconium/master/screenshot.png "Phalconium Screenshot")
