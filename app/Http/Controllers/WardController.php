<?php

namespace App\Http\Controllers;


use App\Models\Ward;
use Illuminate\Http\Request;

class WardController extends Controller
{
    public function index()
    {
        $wards = Ward::all();
        return view('wards.index', compact('wards'));
    }

    public function show($id)
    {
        $ward = Ward::findOrFail($id);
        return view('wards.show', compact('ward'));
    }

    public function create()
    {
        return view('wards.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
        

       return $ward = Ward::create($validatedData);

        return redirect()->route('wards.index', $ward->name)->with('success', 'Ward created successfully!');
    }

    public function edit($id)
    {
        $ward = Ward::findOrFail($id);
        return view('wards.edit', compact('ward'));
    }

    public function update(Request $request, $id)
    {
        $ward = Ward::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $ward->update($validatedData);

        return redirect()->route('wards.show', $ward->id)->with('success', 'Ward updated successfully!');
    }

    public function destroy($id)
    {
        $ward = Ward::findOrFail($id);
        $ward->delete();

        return redirect()->route('wards.index')->with('success', 'Ward deleted successfully!');
    }
}
