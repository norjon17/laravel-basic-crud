<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        // home html
        return view('index');
    }
}
