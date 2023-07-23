<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = Complaint::all();
        return view('complaints.index', compact('complaints'));
    }

    public function show($id)
    {
        $complaint = Complaint::with('user', 'street', 'replies.user')->findOrFail($id);
        return view('complaints.show', compact('complaint'));
    }

    public function create()
    {
        return view('complaints.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'street_id' => 'required|integer|exists:streets,id',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required|string|in:new,in-progress,resolved',
        ]);

        $complaint = Complaint::create($validatedData);

        return redirect()->route('complaints.show', $complaint->id)->with('success', 'Complaint created successfully!');
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
