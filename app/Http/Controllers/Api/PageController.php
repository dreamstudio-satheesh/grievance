<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\NewsEvent;
use App\Http\Resources\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as BaseController;

class PageController extends BaseController
{


    public function news_events()
    {
        //$newsevents = NewsEvent::all();
        $newsevents = NewsEvent::with('media')->get();    
        
        return response()->json($newsevents);

     //  return $this->sendResponse(News::collection($newsevents), 'Posts fetched.');     
      
    }



}
