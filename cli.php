<?php

use Phalcon\CLI\Console as ConsoleApp;

$config = include("app/config/config.php");

include("app/config/loader.php");
include("app/config/services.php");

$arguments = array();
foreach($argv as $k => $arg) {
	if($k == 1) {
		$arguments['task'] = $arg;
	} elseif($k == 2) {
		$arguments['action'] = $arg;
	} elseif($k >= 3) {
		$arguments[] = $arg;
	}
}

try {

	$app = new ConsoleApp();
	$app->setDI($di);
	$app->handle($arguments);
	
} catch(Exception $e) {

	echo $e->getMessage();
}