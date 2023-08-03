<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\NewsEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;

class PageController extends BaseController
{


    public function news_events()
    {
        $newsevents = NewsEvent::with('media')->get();

        return $newsevents;

       // return $this->sendResponse(BlogResource::collection($blogs), 'Posts fetched.');
     
      
    }



}
