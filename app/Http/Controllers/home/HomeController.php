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

    function aboutUPASHSA()
    {
        return view('home.about-us');
    }

    function aimsObjectives()
    {
        return view('home.aims-objectives');
    }

    function constituentsUPASHSA()
    {
        return view('home.constituents');
    }

    function associationMember()
    {
        return view('home.association-member');
    }

    function contactUs()
    {
        return view('home.contact-us');
    }

    function signUp()
    {
        return view('home.sign-up');
    }

    function signIn()
    {
        return view('home.sign-in');
    }

}
