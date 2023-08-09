<?php

namespace App\Http\Controllers\Api;

use App\Models\Gallery;
use App\Models\NewsEvent;
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



}
