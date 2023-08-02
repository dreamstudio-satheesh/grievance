<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banners.create');
    }

    public function list()
    {
        return view('banners.list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // return $request->all();
       
        $validatedData = $request->validate([
            'images' => 'max:5000',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

       
        $gallery = Banner::create($validatedData);

        if ($request->has('images')) {
           
                // Image::load($image->getPathName())->quality(60)->save();  
               
                $gallery->addMedia($request->images)->toMediaCollection('images');
            
        }

        return redirect()->route('banners.index', $gallery->name)->with('success', 'Banner created successfully!');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Banner::where('id',$id)->first();
       // $gallery = Banner::where('id',$id)->with('media')->get() ; 

         return view ('banners.show', compact('gallery'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validatedData = $request->validate([
            'images' => 'max:5000',
            'images.*' => ['image', 'max:5000'],
        ]);
        $gallery = Banner::where('id',$id)->first();
        if ($request->has('images')) {
            foreach ($request->images as $image) {
                 Image::load($image->getPathName())->quality(60)->save();  
               
                $gallery->addMedia($image)->toMediaCollection('images');
            }
        }

        return redirect()->back()->with('success', 'image uploaded successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Banner::findOrFail($id);
        $gallery->delete();

        return redirect()->route('banners.index')->with('success', 'Banner deleted successfully!');
    }
   
}
