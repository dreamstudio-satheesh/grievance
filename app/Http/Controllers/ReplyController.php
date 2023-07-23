<?php

namespace App\Http\Controllers;


use App\Models\Reply;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function create($complaintId)
    {
        $complaint = Complaint::findOrFail($complaintId);
        return view('replies.create', compact('complaint'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'complaint_id' => 'required|integer|exists:complaints,id',
            'user_id' => 'required|integer|exists:users,id',
            'message' => 'required|string',
        ]);

        $reply = Reply::create($validatedData);

        return redirect()->route('complaints.show', $reply->complaint_id)->with('success', 'Reply created successfully!');
    }
}
