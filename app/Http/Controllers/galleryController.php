<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class galleryController extends Controller
{
    public function index()
    {
        // return "hello";
    	return view::make('gallery');
    }
}
