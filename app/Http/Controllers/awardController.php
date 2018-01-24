<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class awardController extends Controller
{
    public function index()
    {
    	$data=DB::table('awards')
    	      ->get();
    	//return $data;      
        
    	return view::make('award')->with('data',$data);      
    }
}
