<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page404Controller extends Controller
{
    public function index()
     {
        return view('frontend.404');
    }
}
