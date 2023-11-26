<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
   
    function Home()
    {
        return view('pages.Home');
    }
    function About()
    {
        return view('pages.About');
    }
    function Projects()
    {
        return view('pages.Projects');
    }
    function Contact()
    {
        return view('pages.Contact');
    }
}
