<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Input;
use DB;
use View;
use \stdClass;

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
    	      ->paginate(5);


    //	return $data;
                 $ara=[];

               $all_tag=DB::table('tags')
                        ->get();

               foreach($all_tag as $index=>$tag_list)
               {
                    $ara[$index]=new stdClass;
                    $ara[$index]->id=$tag_list->id;
                    $ara[$index]->name=$tag_list->name;
                    $ara[$index]->number=DB::table('tag_relations')->where('tag_id','=',$tag_list->id)->count();

               }      

    	return view::make('blog')->with('data',$data)->with('ara',$ara);      
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
             
  //return $ara;

        return view::make('blog_specific')->with('data',$data);
    }

    public function specific_tag($id)
    {

                $data=DB::table('blogs')
              ->join('tag_relations','tag_relations.blog_id','=','blogs.id')
              ->where('tag_relations.tag_id','=',$id)
              ->join('tags','tags.id','=','tag_relations.tag_id')
              ->join('developers','developers.id','=','blogs.author')

              ->select('blogs.id','blogs.title','tags.content','blogs.created_at','blogs.preview',
                       'tags.name as tag_name' ,'tags.id as tag_id','developers.id as author_id','developers.name as author_name')                
              ->get();

        //     check the tag have any blog post or don't have; 
         if(isset($data[0]->title))
        return view::make('blog_specific_tag')->with('data',$data);

        else
        {
        return redirect('/blog');
        }      
    }
}
