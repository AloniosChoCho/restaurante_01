<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageMenuControlle extends Controller
{
    public function index()
     {
        return view('frontend.menu');
    }
}
