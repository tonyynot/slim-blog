<?php

require '../vendor/autoload.php';

$app = new \Slim\Slim([
	'view' => new \Slim\Views\Twig()
]);

//Database

$app->container->singleton('db', function() {
	return new PDO('mysql:host=127.0.0.1;dbname=slim-blog', 'root', 'root');
});

require 'routes.php';

// Views
$view = $app->view();
$view->setTemplatesDirectory('../app/views');
$view->parserExtensions = [
	new \Slim\Views\TwigExtension()
];

$app->run();