<?php
namespace App\Controller;

use App\Database;
use App\Model\Reader;

class ReaderController
{

    public function createReader($request)
    {
          $data = $request->getParsedBody();
          $Reader = new Reader;
          $Reader->user_id = $data['user_id'];
          $Reader->save();
          $Reader['state'] = 'success';
          return json_encode($Reader);
    }

    public function updateReader($request,$response,$args)
    {
        $id = $args['id'];
        $data = $request->getParsedBody();
        $Reader = Reader::find($id);
        $Reader->fontSize = $data['fontSize'];
        $Reader->background = $data['background'];
        $Reader->save();
        $Reader['state'] = 'success';
        return json_encode($Reader);
    }

    public function queryReader($request,$response,$args)
    {
        $user_id = $args['user_id'];
        //where多条件查询
        $Reader = Reader::where([
          'user_id'=>$user_id
        ])->first();
        if($Reader == null){
          $Reader = array('state'=>'fail');
        }else{
          $Reader['state'] = 'success';
        }
        return json_encode($Reader);
    }
}
