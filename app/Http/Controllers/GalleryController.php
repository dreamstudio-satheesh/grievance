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
       return $galleries = Gallery::getMedia()->get();
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
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
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
