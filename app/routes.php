<?php

namespace App\Route;
new \App\Database\Capsule;

//获取七牛token
$app->get('/token', 'App\Controller\UserController:getToken');

//用户群组
$app->group('/user', function () {
    //登录
    $this->get('/{username}/{password}', 'App\Controller\UserController:login');
    //注册
    $this->post('', 'App\Controller\UserController:createUser');
    //修改
    $this->patch('/{id}', 'App\Controller\UserController:updateUser');
});

//书架群组
$app->group('/bookShelf', function () {
    //查询
    $this->get('/{user_id}', 'App\Controller\BookController:query');
    //添加
    $this->post('', 'App\Controller\BookController:createBook');
    //修改
    $this->patch('/{id}', 'App\Controller\BookController:updateBook');
    //删除
    $this->delete('/{id}', 'App\Controller\BookController:deleteBook');
});



?>
