<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        return view('home.index');
    }

    function contactUs()
    {
        return view('home.contact-us');
    }
}
