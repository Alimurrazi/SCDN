<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Input;
use View;
use DB;
use App\image;
use App\developer;
use App\developer_experience;
use App\developer_skill;

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
      // return Input::all();
      // return Input::get('experience[0]');
      // return "hello";

       $developer=new developer;
       $developer->name=Input::get('name');
       $developer->specialty=Input::get('specialty');
       $developer->email=Input::get('email');
       $developer->website=Input::get('website');
       $developer->facebook=Input::get('facebook');
       $developer->twitter=Input::get('twitter');
       $developer->github=Input::get('github');
       $developer->linkedin=Input::get('linkedin');
       
        if(Input::hasFile('avatar')) 
       {
        $avatar=Input::file('avatar');
        $filename=time().'.'.$avatar->getClientOriginalExtension();
        $avatar->move(public_path().'/'.'img'.'/'.'developer_list'.'/',$filename);
       }

       $developer->image='img/developer_list/'.$filename;
       $developer->save();

    //   $developer_id=DB::table('developers')
      //                ->max('id');
          $developer_id=$developer->id;
       
    //   $experience_row=new developer_experience;
  
       $experience=Input::get('experience');
       $duration=Input::get('duration');
       foreach( $experience as $index => $experience )
       {
        $experience_row=new developer_experience;
        $experience_row->developer_id=$developer_id;
        $experience_row->experience=$experience;
        $experience_row->duration=$duration[$index];
        $experience_row->save();
       }

       $skill=Input::get('skill');
       foreach($skill as $skill)
       {
         $skill_row=new developer_skill;
         $skill_row->developer_id=$developer_id;
         $skill_row->skill=$skill;
         $skill_row->save();
       }

    }
    public function announcement()
    {
      $data=DB::table('announcements')
            ->get();

      return view::make('admin.announcement')->with('data',$data);      
    }
    public function announcement_add()
    {
      return Input::all();
    }
}
 