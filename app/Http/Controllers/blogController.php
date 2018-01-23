<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Input;
use DB;
use View;

class blogController extends Controller
{
    public function index()
    {
    	$data=DB::table('blogs')
    	
    	      ->join('tag_relations','tag_relations.blog_id','=','blogs.id')
    	      ->join('tags','tags.id','=','tag_relations.tag_id')
    	      ->join('developers','developers.id','=','blogs.author')

    	      ->select('blogs.id','blogs.title','blogs.content','blogs.created_at','blogs.preview',
    	               'tags.name as tag_name' ,'tags.id as tag_id','developers.id as author_id','developers.name as author_name')                
    	      ->get();


    //	return $data;      

    	return view::make('blog')->with('data',$data);      
    }
    public function specific($id)
    {
      
          	$data=DB::table('blogs')
    	      ->where('blogs.id','=',$id)
    	      ->join('tag_relations','tag_relations.blog_id','=','blogs.id')
    	      ->join('tags','tags.id','=','tag_relations.tag_id')
    	      ->join('developers','developers.id','=','blogs.author')

    	      ->select('blogs.id','blogs.title','blogs.content','blogs.created_at','blogs.preview',
    	               'tags.name as tag_name' ,'tags.id as tag_id','developers.id as author_id','developers.name as author_name')                
    	      ->first();

        return view::make('blog_specific')->with('data',$data);
    }
}
