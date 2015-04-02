<?php

use Phalcon\DI\FactoryDefault\CLI as CliDI;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

$di = new CliDI();

$di->set('db', function () use ($config) {

    $connection = new DbAdapter(array(
        'host' => $config->database->host,
        'username' => $config->database->username,
        'password' => $config->database->password,
        'dbname' => $config->database->dbname
    ));

    return $connection;
});