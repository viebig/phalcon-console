<?php

$loader = new \Phalcon\Loader();

$loader->registerDirs(
    array(
    	realpath(__DIR__ . "/../libraries/"),
    	realpath(__DIR__ . "/../tasks/"),
        realpath(__DIR__ . "/../models/")
    )
)->register();