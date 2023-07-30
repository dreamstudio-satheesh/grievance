<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Spatie\Image\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galleries.create');
    }

    public function list()
    {
        return view('galleries.list');
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
            'images.*' => ['image', 'max:5000'],
            'title' => 'required|string|max:255',
        ]);

       
        $gallery = Gallery::create($validatedData);

        if ($request->has('images')) {
            foreach ($request->images as $image) {
                // Image::load($image->getPathName())->quality(60)->save();  
               
                $gallery->addMedia($image)->toMediaCollection('images');
            }
        }

        return redirect()->route('galleries.index', $gallery->name)->with('success', 'Gallery created successfully!');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = Gallery::where('id',$id)->first();
       // $gallery = Gallery::where('id',$id)->with('media')->get() ; 

         return view ('galleries.show', compact('gallery'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $validatedData = $request->validate([
            'images' => 'max:5000',
            'images.*' => ['image', 'max:5000'],
        ]);
        $gallery = Gallery::where('id',$id)->first();
        if ($request->has('images')) {
            foreach ($request->images as $image) {
                // Image::load($image->getPathName())->quality(60)->save();  
               
                $gallery->addMedia($image)->toMediaCollection('images');
            }
        }

        return redirect()->back()->with('success', 'image uploaded successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('galleries.index')->with('success', 'Gallery deleted successfully!');
    }
   
}
