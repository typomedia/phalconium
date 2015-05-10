<?php

use Phalcon\DI\FactoryDefault;
use Phalcon\Mvc\View;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\Db\Adapter\Pdo\Mysql as MysqlAdapter;
use Phalcon\Db\Adapter\Pdo\Sqlite as SqliteAdapter;
use Phalcon\Db\Adapter\Pdo\Postgresql as PostgresAdapter;
use Phalcon\Mvc\Model\Metadata\Memory as MetaDataAdapter;
use Phalcon\Session\Adapter\Files as SessionAdapter;

/**
 * The FactoryDefault Dependency Injector automatically register the right services providing a full stack framework
 */
$di = new FactoryDefault();

/**
 * The URL component is used to generate all kind of urls in the application
 */
$di->set('url', function() use ($config) {
    $url = new UrlResolver();
    $url->setBaseUri($config->application->baseUri);

    return $url;
}, true);

/**
 * Setting up the view component
 */
$di->set('view', function() use ($config) {

    $view = new View();

    $view->setViewsDir($config->application->viewsDir);

    $view->registerEngines(array(

        '.phtml' => 'Phalcon\Mvc\View\Engine\Php'
    ));

    return $view;
}, true);

/**
 * Database connection is created based in the parameters defined in the configuration file
 */
$di->set('db', function() use ($config) {
    return new SqliteAdapter($config->database->toArray());
});

/**
 * If the configuration specify the use of metadata adapter use it or use memory otherwise
 */
$di->set('modelsMetadata', function() {
    return new MetaDataAdapter();
});

/**
 * Start the session the first time some component request the session service
 */
$di->set('session', function() {
    $session = new SessionAdapter();
    $session->start();

    return $session;
});

$di->set('dispatcher', function() use ($di) {
  $evManager = $di->getShared('eventsManager');
  $evManager->attach("dispatch:beforeException", function($event, $dispatcher, $exception) {
    switch ($exception->getCode()) {
      case Dispatcher::EXCEPTION_HANDLER_NOT_FOUND:
      case Dispatcher::EXCEPTION_ACTION_NOT_FOUND:
        $dispatcher->forward(
                array(
                    'controller' => 'error',
                    'action' => 'show404',
                )
        );
        return false;
    }
  }
  );

  $dispatcher = new Dispatcher();
  $dispatcher->setEventsManager($evManager);
  return $dispatcher;
}, true
);
