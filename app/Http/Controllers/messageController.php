<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Input;
use DB;
use View;
use App\message;

class messageController extends Controller
{
    public function store()
    {
       $message=new message;
       $message->email=Input::get('email');
       $message->content=Input::get('content');
       $message->save();

       return redirect('/');        
    }

    public function show()
    {
        $data=DB::table('messages')
              ->get();
          return view::make('admin.message')->with('data',$data);    
    }
}
