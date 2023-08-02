<?php

namespace App\Http\Controllers;

use App\Models\Panchayat;
use Illuminate\Http\Request;

class PanchayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panchayats = Panchayat::all();
        return view('panchayats.index', compact('panchayats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panchayats.create');
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
            'pname' => 'string|max:255',
            'pmobile' => 'string',
            'vmobile' => 'string',
            'vname' => 'string|max:255',
        ]);

        $panchayat = Panchayat::create($validatedData);

        return redirect()->route('panchayats.index', $panchayat->name)->with('success', 'Panchayat created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Panchayat  $panchayat
     * @return \Illuminate\Http\Response
     */
    public function show(Panchayat $panchayat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Panchayat  $panchayat
     * @return \Illuminate\Http\Response
     */
    public function edit(Panchayat $panchayat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Panchayat  $panchayat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

       $status=0;
       if ($request->status == 1) {
        return 'hi';
       }
       $panchayat = Panchayat::findOrFail($id);

       return  $panchayat->update(['status'=> $status ]);

        return redirect()->route('panchayats.index')->with('success','Panchayatststus updatedsuccessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Panchayat  $panchayat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $panchayat = Panchayat::findOrFail($id);
        $panchayat->delete();
        return redirect()->route('panchayats.index')->with('success','Panchayat has been deleted successfully');
    }
}
