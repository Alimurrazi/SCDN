<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;


class announcementController extends Controller
{

    public function index()
    {
    	return view::make('announcement');
    }
}
