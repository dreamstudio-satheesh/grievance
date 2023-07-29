<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if (Auth::check()) {
                
            return view('frontend.complaint');
        }else{
            return redirect('register');
        }
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    
}
