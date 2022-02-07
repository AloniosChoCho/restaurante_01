<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogCategoriaControl extends Controller
{
    public function index()
     {
        return view('frontend.categoria');
    }
}
