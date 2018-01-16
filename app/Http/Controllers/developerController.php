<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Input; 
use View;

class developerController extends Controller
{
    public function index()
    {
    	return view::make('developer_list');
    }
    public function specific($id)
    {
    	return view::make('developer_list_specific');
    }
}
