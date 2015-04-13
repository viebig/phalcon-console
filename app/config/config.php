<?php

return new \Phalcon\Config(array(

    'database' => array(
        'adapter'    => 'Mysql',
        'host'       => 'localhost',
        'username'   => 'root',
        'password'   => 'q1w2e3',
        'dbname'     => 'test',
    ),
    'application' => array(
        'modelsDir'      => __DIR__ . '/../../app/models/',
        'libraryDir'     => __DIR__ . '/../../app/libraries/'
    )
));
