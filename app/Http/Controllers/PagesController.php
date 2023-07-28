<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function aboutus()
    {
        return view('frontend.aboutus');
    }

    public function trustee()
    {
        return view('frontend.trustee');
    }

    public function events()
    {
        return view('frontend.events');
    }

    public function single()
    {
        return view('frontend.single');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function complaint()
    {
        return view('frontend.complaint');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    
}
