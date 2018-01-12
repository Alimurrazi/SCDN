<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Input;
use View;
use DB;
use App\image;

class adminController extends Controller
{
    public function gallery()
    {
    	 return view::make('admin.gallery');
    }
    public function gallery_add()
    {
    	//return Input::all();
          if(Input::hasFile('avatar')) 
       {
       	$avatar=Input::file('avatar');
       	$filename=time().'.'.$avatar->getClientOriginalExtension();
        $avatar->move(public_path().'/'.'img'.'/'.'gallery'.'/',$filename);
        $description=Input::get('description');
        $image=new image;
        $image->dir='img/gallery/'.$filename;
        $image->description=$description;
        $image->save();
        echo "all is well";
       }
      // return $this->profile(Auth::user()->id);
    }
}
