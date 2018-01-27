<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class projectController extends Controller
{
    public function index()
    {
       $data=DB::table('projects')
             ->get();

       return view::make('project')->with('data',$data);
    }
}
