<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
     public function create(){
        return view('project.create ');
     }
   public function store(Request $request)
    {
        $request->validate([
            'title.ar' => 'required|string|max:255',
            'title.en' => 'required|string|max:255',
            'images' => 'array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

       
        $project = Project::create([
            'title' => [
                'en' => $request->input('title.en'),
                'ar' => $request->input('title.ar'),
            ],
        ]);

       
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('project_images', 'public');

                $project->images()->create([
                    'file_path' => $path,
                ]);
            }
        }

        return redirect('/')->with('success', 'Project created successfully');
    }
    public function edit($id)
{
    $project = Project::findOrFail($id);
    return view('project.edit', compact('project'));
}

public function update(Request $request, $id)
{
    $project = Project::findOrFail($id);

    $request->validate([
        'title.ar' => 'required|string|max:255',
        'title.en' => 'required|string|max:255',
        'images' => 'array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $project->update([
        'title' => [
            'en' => $request->input('title.en'),
            'ar' => $request->input('title.ar'),
        ],
    ]);

    // Handle image update
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('project_images', 'public');

            $project->images()->create([
                'file_path' => $path,
            ]);
        }
    }

    return redirect('/')->with('success', 'Project updated successfully');
}

public function destroy($id)
{
    $project = Project::findOrFail($id);

    // Delete associated images
    foreach ($project->images as $image) {
        Storage::disk('public')->delete($image->file_path);
    }
    $project->delete();

    return redirect('/')->with('success', 'Project deleted successfully');
}

}
