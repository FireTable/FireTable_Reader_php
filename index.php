<?php

//error_reporting(0);

require './vendor/autoload.php';
//require './app/config.php';

$app = new \Slim\App([
    'settings' => [
        'debug' => true,
        'displayErrorDetails' => true
    ]
]);

$app->add(new \Tuupola\Middleware\Cors([
    "origin" => ["*"],
    "methods" => ["GET", "POST", "PUT", "PATCH", "DELETE"],
    "headers.allow" => ["Content-Type"],
    "headers.expose" => ["FireTable"]
]));


require_once './app/routes.php';

$app->run();
