<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::all();
        return view('divisions.index', compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('divisions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'jename' => 'string|max:255',
            'jemobile' => 'string|digits:10',
            'aemobile' => 'string|digits:10',
            'aename' => 'string|max:255',
        ]);

        $division = Division::create($validatedData);

        return redirect()->route('divisions.index', $division->name)->with('success', 'Division created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function show(Division $division)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function edit(Division $division)
    {
        return view('divisions.edit',compact('division'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'jename' => 'string|max:255',
            'jemobile' => 'string|digits:10',
            'aemobile' => 'string|digits:10',
            'aename' => 'string|max:255',
        ]);

        $division = Division::findOrFail($id);
        $division->update($validatedData);
 
        return redirect()->route('divisions.index')->with('success','Panchayatst updated successfully');
    }

    public function updatestatus(Request $request, $id)
    {
        $status=0;
        if ($request->status == 'on') {
         $status=1;        
        }
        
         $division = Division::findOrFail($id);
         $division->update(['status'=> $status ]);
 
         return redirect()->route('divisions.index')->with('success','division status updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Division  $division
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $division = Division::findOrFail($id);
        $division->delete();

        return redirect()->route('divisions.index')->with('success', 'Division deleted successfully!');
    }
   
}
