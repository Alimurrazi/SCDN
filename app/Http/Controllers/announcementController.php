<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;


class announcementController extends Controller
{

    public function index()
    {
    	$data=DB::table('announcements')
    	      //->join('attachments','announcements.id','=','attachments.announcement_id')
    	      //->select('announcements.id','announcements.title','announcements.content','announcements.date','attachments.dir')
    	      ->get();

    	return view::make('announcement')->with('data',$data);
    }
    public function specific($id)
    {
    	    $data=DB::table('announcements')
    	      ->where('announcements.id','=',$id)
    	      ->join('attachments','announcements.id','=','attachments.announcement_id')
    	      ->select('announcements.title','announcements.content','announcements.date','attachments.dir','attachments.id')
    	      ->first();
        
        return view::make('announcement_specific')->with('data',$data);
    }
}
