<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageTeamControl extends Controller
{
    public function index()
     {
        return view('frontend.team');
    }
}

