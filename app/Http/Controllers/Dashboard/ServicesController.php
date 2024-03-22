<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
     public function index()
    {
        $services= Service::all();
        return view('dashboards.services.show',compact('services'));
    }
     public function create()
    {
        return view('dashboards.services.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'title.en' => 'required|string|max:255',
        'title.ar' => 'required|string|max:255',
        'description.en' => 'required|string',
        'description.ar' => 'required|string',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $service = Service::create([
        'title' => [
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar'),
        ],
        'description' => [
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar'),
        ],
    ]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $imagePath = $image->store('service_images', 'public');

            $service->media()->create([
                'file_path' => $imagePath,
            ]);
        }
    }

    $service->save();

    return redirect()->route('dashboard.service.index')->with('success', 'Service created successfully with images');
}
public function edit($id)
{
    $service = Service::findOrFail($id);
    return view('dashboards.services.edit', compact('service'));
}

public function update(Request $request, $id)
{
    $service = Service::findOrFail($id);

    $request->validate([
        'title.en' => 'required|string|max:255',
        'title.ar' => 'required|string|max:255',
        'description.en' => 'required|string',
        'description.ar' => 'required|string',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $service->update([
        'title' => [
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar'),
        ],
        'description' => [
            'en' => $request->input('description.en'),
            'ar' => $request->input('description.ar'),
        ],
    ]);

     
    if ($request->hasFile('images')) {
        $service->media()->delete();
        foreach ($request->file('images') as $image) {
            $imagePath = $image->store('service_images', 'public');

            $service->media()->create([
                'file_path' => $imagePath,
            ]);
        }
    }

    return redirect()->route('dashboard.service.index')->with('success', 'Service updated successfully with images');
}

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        // Delete associated media files
        foreach ($service->media as $media) {
            Storage::disk('public')->delete($media->file_path);
            $media->delete();
        }

        // Delete the service
        $service->delete();

        return redirect()->route('dashboard.service.index')->with('success', 'Service deleted successfully');
    }

}
