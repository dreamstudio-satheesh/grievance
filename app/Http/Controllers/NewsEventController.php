<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsEventController extends Controller
{
    public function index()
    {
        $newsevents = NewsEvent::with('media')->get();
        return view('news_events.index', compact('newsevents'));
    }

    public function show($id)
    {
        $newsevents = NewsEvent::findOrFail($id);
        return view('news_events.show', compact('newsevents'));
    }

    public function create()
    {
        return view('news_events.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'date' => 'required|date',
        ]);

        $newsevent = NewsEvent::create($validatedData);

        if ($request->hasFile('photo')) {
            $newsevent->addMediaFromRequest('photo')->toMediaCollection('images');
        }

        return redirect()->route('news_events.index', $newsevent->id)->with('success', 'News & Event created successfully!');
    }

    public function edit($id)
    {
        $newsEvent = NewsEvent::findOrFail($id);
        return view('news_events.edit', compact('newsEvent'));
    }

    public function update(Request $request, $id)
    {
        $newsEvent = NewsEvent::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'location' => 'nullable|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        // Handle photo upload
        if ($request->hasFile('photo')) {
            // Delete the old photo (if exists) before uploading the new one
            if ($newsEvent->photo) {
                Storage::disk('public')->delete($newsEvent->photo);
            }

            $photoPath = $request->file('photo')->store('photos', 'public');
            $validatedData['photo'] = $photoPath;
        }

        $newsEvent->update($validatedData);

        return redirect()->route('news_events.show', $newsEvent->id)->with('success', 'News & Event updated successfully!');
    }

    public function destroy($id)
    {
        $newsEvent = NewsEvent::findOrFail($id);

        // Delete the photo (if exists) before deleting the record
        if ($newsEvent->photo) {
            Storage::disk('public')->delete($newsEvent->photo);
        }

        $newsEvent->delete();

        return redirect()->route('news_events.index')->with('success', 'News & Event deleted successfully!');
    }
}
