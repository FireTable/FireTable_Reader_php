<?php

namespace App\Route;
use \App\Database\Capsule;

$capsule = new Capsule;

//获取七牛token
$app->get('/token', 'App\Controller\UserController:getToken');

$app->get('/', function(){
                echo "Nice to meet u";
            });

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
    $this->get('/{user_id}', 'App\Controller\BookController:queryAllBook');
    //添加
    $this->post('', 'App\Controller\BookController:createBook');
    //修改
    $this->patch('/{id}', 'App\Controller\BookController:updateBook');
    //删除
    $this->delete('/{id}', 'App\Controller\BookController:deleteBook');
});

//阅读器群 组
$app->group('/bookReader', function () {
    //查询
    $this->get('/{user_id}', 'App\Controller\ReaderController:queryReader');
    //添加
    $this->post('', 'App\Controller\ReaderController:createReader');
    //修改
    $this->patch('/{id}', 'App\Controller\ReaderController:updateReader');
});



?>
