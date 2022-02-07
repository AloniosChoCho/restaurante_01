<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventCategoyController extends Controller
{
    public function index()
     {
        return view('frontend.eventcategory');
    }
}
