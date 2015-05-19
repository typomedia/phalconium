# Phalconium

Phalconium is a skeleton application based on Phalcon PHP and ZURB Foundation. It comes along with a very strong feature set:

* Support for MySQL, Postgres and SQLite
* Responsive design with mobile first approach
* Pretty error interface for debugging issues
* Web tool for controller, models, scaffold and migrations

## Getting Startet

```sh
cd /var/www/
git clone https://github.com/typomedia/phalconium.git
chown -R www-data:www-data phalconium/
```

Open `/app/config/config.php` and set the `baseUri` to `phalconium` if you have not set the `DocumentRoot` to `phalconium/public`.


## Screenshot
![Screenshot](https://raw.githubusercontent.com/typomedia/phalconium/master/screenshot.png "Phalconium Screenshot")
