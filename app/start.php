<?php

require '../vendor/autoload.php';

$app = new \Slim\Slim();

//Database

$app->container->singleton('db', function() {
	return new PDO('mysql:host=127.0.0.1;dbname=slim-blog', 'root', 'root');
});

require 'routes.php';

$app->run();