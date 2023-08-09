<?php

namespace App\Http\Controllers\Api;

use App\Models\Banner;
use App\Models\Dstreet;
use App\Models\Gallery;
use App\Models\Division;
use App\Models\NewsEvent;
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

    public function divisions()
    {
        $divisions = Division::select('id','name')->get();

        return response()->json($divisions);
    }


    public function dstreets($id)
    { 
        $street = Dstreet::findOrFail($id);
        return $street;
    }






}
