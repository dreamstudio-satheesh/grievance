<?php

namespace App\Http\Controllers;

use App\Models\Ward;
use App\Models\Street;
use Illuminate\Http\Request;

class StreetController extends Controller
{
    public function index()
    {
        $streets = Street::all();
        return view('streets.index', compact('streets'));
    }

    public function show($id)
    {
        $street = Street::findOrFail($id);
        return view('streets.show', compact('street'));
    }

    public function create()
    {
        $wards = Ward::all();
        return view('streets.create', compact('wards'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'ward_id' => 'required|integer',
        ]);

        $street = Street::create($validatedData);

        return redirect()->route('streets.index', $street->id)->with('success', 'Street created successfully!');
    }

    public function edit($id)
    {
        $wards = Ward::all();
        $street = Street::findOrFail($id);
        return view('streets.edit', compact('street','wards'));
    }

    public function update(Request $request, $id)
    {
        $street = Street::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'ward_id' => 'required|integer|exists:wards,id',
        ]);

        $street->update($validatedData);

        return redirect()->route('streets.show', $street->id)->with('success', 'Street updated successfully!');
    }

    public function destroy($id)
    {
        $street = Street::findOrFail($id);
        $street->delete();

        return redirect()->route('streets.index')->with('success', 'Street deleted successfully!');
    }
}
