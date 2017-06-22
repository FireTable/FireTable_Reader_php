<?php

namespace App\Route;
new \App\Database\Capsule;

$app->get('/user/{username}/{password}', 'App\Controller\UserController:login');
$app->post('/user', 'App\Controller\UserController:createUser');

?>
