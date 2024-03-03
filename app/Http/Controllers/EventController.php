<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('events.index',compact('events'));
    }
    public function create()
    {
        return view('events.create');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'text' => 'required|string',
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
            'title' => $request->input('title'),
            'text' => $request->input('text'),
        ]);

        if ($imagePath) {
            $event->media()->create([
                'file_path' => $imagePath,
            ]);
        }

        return redirect()->route('events.index', $event->id)
            ->with('success', 'Event created successfully');
    }
}