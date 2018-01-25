<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Input; 
use View;
use DB;

class developerController extends Controller
{
    public function index()
    {
    	$data=DB::table('developers')
    	      ->get();

    	return view::make('developer_list')->with('data',$data);
    }
    public function specific($id)
    {
    	$data=DB::table('developers')
    	      ->where('developers.id','=',$id)
    	      ->join('developer_experiences','developers.id','=','developer_experiences.developer_id')
    	    //  ->join('developer_skill','developer_skill.developer_id','=','developers.id')
    	      ->select('developers.id','developers.name','developers.email','developers.website','developers.image','developer_experiences.experience','developer_experiences.duration')
    	      ->get();
        
        $data_skill=DB::table('developer_skill')
               ->where('developer_id','=',$id)
               ->get();
       
       $data_blog=DB::table('blogs')
                  ->where('author','=',$id)
                  ->get();

    	// $data1=DB::table('developer_experiences')
    	  //     ->where('developer_id','=',$id)
    	    //   ->get();

        // return $data;

    	return view::make('developer_list_specific')->with('data',$data)->with('data_skill',$data_skill)->with('data_blog',$data_blog);
    }
}
