<?php

return new \Phalcon\Config(array(
    'database' => [
//        'adapter'     => 'Mysql',
//        'host'        => '127.0.0.1',
//        'username'    => 'root',
//        'password'    => '',
//        'dbname'      => 'oneandone',
//        'charset'     => 'utf8',
        'adapter'       => 'Sqlite',
        'dbname'        => APP_DIR . '/databases/oneandone.sqlite',
        'charset'       => 'utf8',
    ],
    'application' => array(
        'controllersDir' => APP_DIR . '/controllers/',
        'modelsDir'      => APP_DIR . '/models/',
        'viewsDir'       => APP_DIR . '/views/',
        'pluginsDir'     => APP_DIR . '/plugins/',
        'libraryDir'     => APP_DIR . '/library/',
        'cacheDir'       => APP_DIR . '/cache/',
        'migrationsDir'  => APP_DIR . '/migrations/',
        'baseUri'        => '/oneandone/',
    )
));
