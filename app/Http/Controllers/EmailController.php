<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
     {
        return view('backend.email');
    }
}
