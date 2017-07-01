<?php
namespace App\Controller;

use App\Database;
use App\Model\User;


class UserController
{
    //获取七牛token
    public function getToken()
    {
        $qiniuToken = '3QSNrejV93v8qgNKrrBvxPIEi_zxIqde4xx1Rqj0:H1WJRDM4-tIPKhS9YzQppfsB5DE=:eyJzY29wZSI6InVzZXJpY29uIiwiZGVhZGxpbmUiOjU0MzM0MjUyMzQ1MjM0NTEwMDB9';
        $token = array("uptoken" => $qiniuToken);
        return json_encode($token);
    }

    public function createUser($request)
    {
        $data = $request->getParsedBody();
        $check = $data['username'];
        $checkUser = User::where('username','=',$check)->first();
        if($checkUser == null){
           $user = new User;
           $user->username = $data['username'];
           $user->password = md5($data['password']);
           $user->nickname = $data['nickname'];
           $user->save();
           $user['state'] = 'success';
          return json_encode($user);
        }else{
          return json_encode(array('state'=>'fail'));
        }
    }

    public function updateUser($request,$response,$args)
    {
        $id = $args['id'];
        $data = $request->getParsedBody();
        $user = User::find($id);
        $user->icon = $data['icon'];
        //$user->password = md5($data['password']);
        $user->nickname = $data['nickname'];
        $user->save();
        $user['state'] = 'success';
        return json_encode($data);
    }

    // public function deleteUser()
    // {
    //     $user = User::find($id);
    //     $user->delete();
    //
    //     return json_encode('删除成功');
    // }
    //
    // public function index()
    // {
    //     $users = User::all();
    //     return json_encode($users);
    // }

    public function login($request,$response,$args)
    {
        $username = $args['username'];
        $password = md5($args['password']);
        //where多条件查询
        $user = User::where([
          'username'=>$username,
          'password'=>$password
        ])->first();
        if($user == null){
          $user = array('state'=>'fail');
        }else{
          $user['state'] = 'success';
        }
        return json_encode($user);
    }
}
