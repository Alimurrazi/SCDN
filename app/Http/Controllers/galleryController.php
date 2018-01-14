<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;

class galleryController extends Controller
{
    public function index()
    {
        // return "hello";
        $data=DB::table('images')
              ->get();

    	return view::make('gallery')->with('data',$data);
    }
}
