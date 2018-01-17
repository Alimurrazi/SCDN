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
       $data=DB::table('images')
             ->get();

    	 return view::make('admin.gallery')->with('data',$data);
    }

    public function gallery_add()
    {
       
       //return Input::all();
      //  return Input::get('same[0]');

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
      //  echo "all is well";
        return redirect('/admin/gallery');
       }
    }

    public function gallery_update_first($id)
    {
            $data=DB::table('images')
           ->where('id','=',$id)
           ->first();

      return view::make('admin.gallery_update')->with('data',$data);
    }

    public function gallery_update_second($id)
    {
     echo $id;
    // return Input::all();

     if(Input::hasFile('avatar')) 
       {
      //  return "hey";
        $avatar=Input::file('avatar');
        $filename=time().'.'.$avatar->getClientOriginalExtension();
      //  return $filename;
        $avatar->move(public_path().'/'.'img'.'/'.'gallery'.'/',$filename);
        DB::table('images')
            ->where('id','=',$id)
            ->update(['dir' =>'img/gallery/'.$filename]);    
       }

      $description=Input::get('description');
      DB::table('images')
          ->where('id','=',$id)
          ->update(['description'=>$description]);
    //  return $description;
      return redirect('/admin/gallery');
    }

    public function gallery_delete($id)
    {
           DB::table('images')
           ->where('id','=',$id)
           ->delete();

      return redirect('/admin/gallery');       
    }

    public function developer_list()
    {
      $data=DB::table('developers')
            ->get();

      return view::make('admin.developer')->with('data',$data);      
    }

    public function developer_add()
    {

    }
}
