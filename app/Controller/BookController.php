<?php
namespace App\Controller;

use App\Database;
use App\Model\Book;

class BookController
{

    public function createBook($request)
    {
        $data = $request->getParsedBody();
        //where多条件查询
        $checkBook = Book::where([
          'book_id'=>$data['book_id'],
          'user_id'=>$data['user_id']
        ])->first();
        if($checkBook == null){
           $Book = new Book;
           $Book->book_id = $data['book_id'];
           $Book->book_name = $data['book_name'];
           $Book->book_icon = $data['book_icon'];
           $Book->book_page = $data['book_page'];
           $Book->user_id = $data['user_id'];
           $Book->save();
           $Book['state'] = 'success';
          return json_encode($Book);
        }else{
          return json_encode(array('state'=>'fail'));
        }
    }

    public function updateBook($request,$response,$args)
    {
        $id = $args['id'];
        $data = $request->getParsedBody();
        $Book = Book::find($id);
        $Book->book_page = $data['book_page'];
        $Book->save();
        $Book['state'] = 'success';
        return json_encode($Book);
    }

    public function deleteBook($request,$response,$args)
    {
        $id = $args['id'];
        $Book = Book::find($id);
        $Book->delete();
        return json_encode(array('state'=>'success'));
    }


    public function queryAllBook($request,$response,$args)
    {
        $user_id = $args['user_id'];
        //where多条件查询
        $Book = Book::where([
          'user_id'=>$user_id
        ])->get();
        if(sizeof($Book) == 0){
          $Book = array('state'=>'fail');
        }else{
          $Book['state'] = 'success';
        }
        return json_encode($Book);
    }
}
