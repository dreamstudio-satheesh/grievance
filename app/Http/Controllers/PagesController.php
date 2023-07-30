<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\NewsEvent;
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
        $newsevents = NewsEvent::with('media')->get();
        return view('frontend.events', compact('newsevents'));
    }

    public function single($id)
    {
       $newsevent= NewsEvent::findOrFail($id);;
       return view('frontend.single', compact('newsevent'));
    }

    public function gallery()
    {
        $galleries=Gallery::all();
        return view('frontend.gallery', compact('galleries'));
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
