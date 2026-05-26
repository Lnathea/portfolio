<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function experience()
    {
        return view('pages.experience');
    }

    public function awards()
    {
        return view('pages.awards');
    }

    public function projects()
    {
        return view('pages.projects');
    }
}
