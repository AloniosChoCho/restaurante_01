<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogIndividualController extends Controller
{
    public function index()
     {
        return view('frontend.individual');
    }
}
