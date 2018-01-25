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
    	return view::make('developer_list_specific');
    }
}
