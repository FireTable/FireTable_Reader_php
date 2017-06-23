<?php

namespace App\Route;
new \App\Database\Capsule;

//获取七牛token
$app->get('/token', 'App\Controller\UserController:getToken');
//登录
$app->get('/user/{username}/{password}', 'App\Controller\UserController:login');
//注册
$app->post('/user', 'App\Controller\UserController:createUser');
//修改
$app->patch('/user/{id}', 'App\Controller\UserController:updateUser');

?>
