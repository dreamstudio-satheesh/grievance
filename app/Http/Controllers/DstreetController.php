<?php

namespace App\Http\Controllers;

use App\Models\Dstreet;
use App\Models\Division;
use Illuminate\Http\Request;

class DstreetController extends Controller
{
    public function index()
    {
        $dstreets = Dstreet::all();
        return view('dstreets.index', compact('dstreets'));
    }

    public function show($id)
    {
        $street = Dstreet::findOrFail($id);
        return view('dstreets.show', compact('street'));
    }

    public function create()
    {
        $divisions = Division::all();
        return view('dstreets.create', compact('divisions'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'division_id' => 'required|integer',
        ]);

        $street = Dstreet::create($validatedData);

        return redirect()->route('dstreets.index', $street->id)->with('success', 'street created successfully!');
    }

    public function edit($id)
    {
        $divisions = Division::all();
        $street = Dstreet::findOrFail($id);
        return view('dstreets.edit', compact('street','divisions'));
    }

    public function update(Request $request, $id)
    {
        $street = Dstreet::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'division_id' => 'required|integer|exists:divisions,id',
        ]);

        $street->update($validatedData);

        return redirect()->route('dstreets.index')->with('success', 'Dstreet updated successfully!');
    }

    public function destroy($id)
    {
        $street = Dstreet::findOrFail($id);
        $street->delete();

        return redirect()->route('dstreets.index')->with('success', 'Dstreet deleted successfully!');
    }
}
