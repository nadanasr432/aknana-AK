<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function create()
    {
        return view('services.create');
    }

    // Store a newly created service in the database with associated images
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $service = Service::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            
        ]);

       
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePath = $image->store('service_images', 'public');

                  $service->media()->create([
                    'file_path' => $imagePath,
                ]);
            }
        }
        $service->save( );

        return redirect()->route('home')->with('success', 'Service created successfully with images');
    }

}
