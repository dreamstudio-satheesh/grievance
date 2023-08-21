<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = Complaint::with('user')->get();
        return view('complaints.index', compact('complaints'));
    }

    public function show($id)
    {
        $complaint = Complaint::with('panchayat','division','user', 'replies.user')->findOrFail($id);

        return view('complaints.show', compact('complaint'));
    }

    public function create()
    {
        $users = User::role('user')->get();       
        return view('complaints.create', compact('users'));
    }

    public function store(Request $request)
    {
          $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'complaint_id' => 'required|unique:complaints',
            'username' => 'required|string|max:255',
            'mobile' => 'required|string|max:11',
            'email' => 'required|email',
            'doorno' => 'required|string',
            'panchayat_id' => 'nullable|integer',
            'ward_id' => 'nullable|integer',
            'street_id' => 'nullable|integer',
            'division_id' => 'nullable|integer',
            'dstreet_id' => 'nullable|integer',
            'subject' => 'required|string|max:255',
            'priority' => 'required|string',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'status' => 'required|string|in:new,in-progress,resolved',
        ]);


        $complaint = Complaint::create($validatedData);

        if ($request->hasFile('photo')) {
            $complaint->addMediaFromRequest('photo')->toMediaCollection('images');
        }
        

        return redirect()->route('complaints.index', $complaint->id)->with('success', 'Complaint created successfully!');
    }

    public function edit($id)
    {
        $complaint = Complaint::findOrFail($id);
        return view('complaints.edit', compact('complaint'));
    }

    public function update(Request $request, $id)
    {
        $complaint = Complaint::findOrFail($id);
    

        $validatedData = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'complaint_id' => 'required',
            'street_id' => 'required|integer|exists:streets,id',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string|in:new,in-progress,resolved',
        ]);

        $complaint->update($validatedData);

        return redirect()->route('complaints.show', $complaint->id)->with('success', 'Complaint updated successfully!');
    }

    public function destroy($id)
    {
        $complaint = Complaint::findOrFail($id);
        $complaint->delete();

        return redirect()->route('complaints.index')->with('success', 'Complaint deleted successfully!');
    }
}
