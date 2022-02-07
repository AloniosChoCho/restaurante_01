<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventAloneController extends Controller
{
    public function index()
     {
        return view('frontend.eventalone');
    }
}
