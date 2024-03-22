<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EventsController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('dashboards.events.show',compact('events'));
    }
    public function create()
    {
        return view('dashboards.events.create');
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
            'en' => $request->input('text.en'),
            'ar' => $request->input('text.ar'),
        ],
        ]);

        if ($imagePath) {
            $event->media()->create([
                'file_path' => $imagePath,
            ]);
        }

        return redirect()->route('dashboard.event.index', $event->id)
            ->with('success', 'Event created successfully');
    }
    public function edit($id)
{
    $event = Event::findOrFail($id);
    return view('dashboards.events.edit', compact('event'));
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
        
        Storage::disk('public')->delete($event->media()->first()->file_path);

       
        $imagePath = $request->file('image')->store('event_images', 'public');
        $event->media()->update([
            'file_path' => $imagePath,
        ]);
    }

    return redirect()->route('dashboard.event.index')->with('success', 'Event updated successfully.');
}

public function destroy($id)
{
    $event = Event::findOrFail($id);

    
        foreach ($event->media as $media) {
            Storage::disk('public')->delete($media->file_path);
            $media->delete();
        }    
    
    $event->delete();

    return redirect()->route('dashboard.event.index')->with('success', 'Event deleted successfully.');
}
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:approved,pending',
        ]);

        $event = Event::findOrFail($id);
        $event->status = $request->input('status');
        $event->save();

        return redirect()->route('dashboard.event.index')->with('success', 'event status updated successfully.');
    }
}