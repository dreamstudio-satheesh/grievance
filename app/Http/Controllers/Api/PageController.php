<?php

namespace App\Http\Controllers\Api;

use App\Models\Ward;
use App\Models\Banner;
use App\Models\Street;
use App\Models\Dstreet;
use App\Models\Gallery;
use App\Models\Division;
use App\Models\NewsEvent;
use App\Models\Panchayat;
use Illuminate\Http\Request;
use App\Http\Resources\Banner as BR;
use App\Http\Resources\News as Newsresource;
use App\Http\Resources\Gallery as Galleryresource;
use App\Http\Controllers\Api\BaseController as BaseController;


class PageController extends BaseController
{


    public function news_events()
    {
        //$newsevents = NewsEvent::all();
        $newsevents = NewsEvent::latest()->get();    
        
       // return response()->json($newsevents);

       return $this->sendResponse(Newsresource::collection($newsevents), 'Posts fetched.');     
      
    }

    public function galleries()
    {
        $galleries = Gallery::latest()->get();    
        return $this->sendResponse(Galleryresource::collection($galleries), 'Galleries fetched.');      
    }

    public function banners()
    {
        $banners = Banner::latest()->get();  
        return $this->sendResponse(BR::collection($banners), 'Banners fetched.');      
    }

    public function panchayats()
    {
        $panchayats = Panchayat::select('id','name')->get();
        return $this->sendResponse($panchayats, 'data fetched.');    
       // return response()->json($panchayats);
    }

    public function wards($id)
    { 
        $wards = Ward::select('id','name','panchayat_id')->where('panchayat_id',$id)->get();
        return $this->sendResponse($wards, 'data fetched.'); 
       // return response()->json($wards);
    }

    public function streets($id)
    { 
        $streets = Street::select('id','name','ward_id')->where('id',$id)->get();
        return $this->sendResponse($streets, 'data fetched.'); 
        //return response()->json($streets);
    }


    public function divisions()
    {
        $divisions = Division::select('id','name')->get();
        return $this->sendResponse($divisions, 'data fetched.');
        //return response()->json($divisions);
    }


    public function dstreets($id)
    { 
        $street = Dstreet::select('id','name','division_id')->where('division_id',$id)->get();
        return $this->sendResponse($street, 'data fetched.');
       // return response()->json($street);
    }






}
