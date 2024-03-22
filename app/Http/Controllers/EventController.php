<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Header;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        $header = Header::first();
        $temp_events = Template::where('name->en', 'Events')->get();
        return view('events.index',compact('events','header', 'temp_events'));
    }
    public function create()
    {
        return view('events.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'text.en' => 'required|string',
            'text.ar' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        if ($validator->fails()) {
            return redirect()->route('events.create')
                ->withErrors($validator)
                ->withInput();
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('event_images', 'public'); 
        }

        $event = Event::create([
           'title' => [
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar'),
        ],
        'text' => [
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar'),
        ],
        ]);

        if ($imagePath) {
            $event->media()->create([
                'file_path' => $imagePath,
            ]);
        }

        return redirect()->route('events.index', $event->id)
            ->with('success', 'Event created successfully');
    }
    public function edit($id)
{
    $event = Event::findOrFail($id);
    return view('events.edit', compact('event'));
}

public function update(Request $request, $id)
{
    $event = Event::findOrFail($id);

    $validator = Validator::make($request->all(), [
        'title.en' => 'required|string|max:255',
        'title.ar' => 'required|string|max:255',
        'text.en' => 'required|string',
        'text.ar' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
    ]);

    if ($validator->fails()) {
        return redirect()->route('events.edit', $event->id)
            ->withErrors($validator)
            ->withInput();
    }

    $event->update([
        'title' => [
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar'),
        ],
        'text' => [
            'en' => $request->input('text.en'),
            'ar' => $request->input('text.ar'),
        ],
    ]);

    
    if ($request->hasFile('image')) {
        
        Storage::disk('public')->delete($event->media->file_path);

        // Upload the new image
        $imagePath = $request->file('image')->store('event_images', 'public');

        // Update the event's media record
        $event->media()->update([
            'file_path' => $imagePath,
        ]);
    }

    return redirect()->route('events.index')->with('success', 'Event updated successfully.');
}

public function destroy($id)
{
    $event = Event::findOrFail($id);

    
    Storage::disk('public')->delete($event->media->file_path);

    
    $event->delete();

    return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
}
}