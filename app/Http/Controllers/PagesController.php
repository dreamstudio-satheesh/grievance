<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Enquiry;
use App\Models\Gallery;
use App\Models\Complaint;
use App\Models\NewsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home()
    {    
        $banners = Banner::all();
        $galleries = Gallery::all();
        $newsevents = NewsEvent::with('media')->get();
        $banners = Banner::all();
        return view('frontend.home', compact('newsevents','galleries','banners'));
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
    
    public function trackcomplaint()
    {
        if (Auth::check()) {
            $complaints = Complaint::where('user_id', auth()->user()->id)->get();   
            return view('frontend.trackcomplaint', compact('complaints'));
        }else{
            return redirect('register');
        }
    }
    public function store(Request $request)
    {
      // return   $request->all();
       $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'complaint_id' => 'required|unique:complaints',
            'username' => 'required|string|max:255',
            'mobile' => 'required|string|max:11',
            'email' => 'required|email',
            'doorno' => 'required|string',
            'panchayat_id' => 'nullable|integer',
            'ward_id' => 'nullable|integer',
            'street_id' => 'nullable|integer',
            'division_id' => 'nullable|integer',
            'dstreet_id' => 'nullable|integer',
            'subject' => 'required|string|max:255',
            'priority' => 'required|string',
            'description' => 'required|string',
            'status' => 'required|string|in:new,in-progress,resolved',
        ]);


        $complaint = Complaint::create($validatedData);

        return redirect()->route('trackcomplaint', $complaint->id)->with('success', 'Complaint created successfully!');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function savecontact(Request $request) {


        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'nullable|string|min:6',
            'message' => 'required|string',
        ]);

        $enquiry = Enquiry::create($validatedData);
        return redirect()->route('contact')->with('success', 'Thanks for contacting us! We will be in touch with you shortly.');

    }
    
}
