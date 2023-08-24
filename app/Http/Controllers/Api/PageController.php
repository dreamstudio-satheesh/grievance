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
        $newsevents = NewsEvent::latest()->paginate(10);    
        
        if(count($newsevents) > 0){
            $message = 'data fetched';
        }else{
            $message = 'No record found';
        }

       return $this->sendResponse(Newsresource::collection($newsevents), $message );     
      
    }

    public function galleries()
    {
        $galleries = Gallery::latest()->get();   
        if(count($galleries) > 0){
            $message = 'data fetched';
        }else{
            $message = 'No record found';
        }
        return $this->sendResponse(Galleryresource::collection($galleries), $message);      
    }

    public function banners()
    {
        $banners = Banner::latest()->get();  
        if(count($banners) > 0){
            $message = 'data fetched';
        }else{
            $message = 'No record found';
        }
        return $this->sendResponse(BR::collection($banners), $message);      
    }

    public function panchayats()
    {
        $panchayats = Panchayat::select('id','name')->get();
        if(count($panchayats) > 0){
            $message = 'data fetched';
        }else{
            $message = 'No record found';
        }
        return $this->sendResponse($panchayats, $message);    
       // return response()->json($panchayats);
    }

    public function wards($id)
    { 
        $wards = Ward::select('id','name','panchayat_id')->where('panchayat_id',$id)->get();
        if(count($wards) > 0){
            $message = 'data fetched';
        }else{
            $message = 'No record found';
        }
        return $this->sendResponse($wards, $message); 
       // return response()->json($wards);
    }

    public function streets($id)
    { 
        $streets = Street::select('id','name','ward_id')->where('id',$id)->get();
        if(count($streets) > 0){
            $message = 'data fetched';
        }else{
            $message = 'No record found';
        }
        return $this->sendResponse($streets,$message); 
        //return response()->json($streets);
    }


    public function divisions()
    {
        $divisions = Division::select('id','name')->get();
        if(count($divisions) > 0){
            $message = 'data fetched';
        }else{
            $message = 'No record found';
        }
        return $this->sendResponse($divisions, $message);
        //return response()->json($divisions);
    }


    public function dstreets($id)
    { 
        $street = Dstreet::select('id','name','division_id')->where('division_id',$id)->get();
        if(count($street) > 0){
            $message = 'data fetched';
        }else{
            $message = 'No record found';
        }
        return $this->sendResponse($street, $message);
       // return response()->json($street);
    }






}
