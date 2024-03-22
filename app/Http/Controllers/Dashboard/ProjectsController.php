<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects=Project::all();
        return view('dashboards.projects.show',compact('projects'));
    }
    public function create()
    {
        return view('dashboards.projects.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title.ar' => 'required|string|max:255',
            'title.en' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'images' => 'array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $project = Project::create([
            'title' => [
                'en' => $request->input('title.en'),
                'ar' => $request->input('title.ar'),
            ],
            'url' => $request->input('url'),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('project_images', 'public');

                $project->images()->create([
                    'file_path' => $path,
                ]);
            }
        }

        return redirect()->route('dashboard.project.index')->with('success', 'Project created successfully');
    }
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('dashboards.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'title.ar' => 'required|string|max:255',
            'title.en' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'images' => 'array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $project->update([
            'title' => [
                'en' => $request->input('title.en'),
                'ar' => $request->input('title.ar'),
            ],
            'url' => $request->input('url'),
        ]);

       

        // Add new images
        if ($request->hasFile('images')) {
            $project->images()->delete();
            foreach ($request->file('images') as $image) {
                $path = $image->store('project_images', 'public');

                $project->images()->create([
                    'file_path' => $path,
                ]);
            }
        }

        return redirect()->route('dashboard.project.index')->with('success', 'Project updated successfully');
    }


    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        // Delete associated media files
        foreach ($project->images as $media) {
            Storage::disk('public')->delete($media->file_path);
            $media->delete();
        }       
        $project->delete();

        return redirect()->route('dashboard.project.index')->with('success', 'Project deleted successfully');
    }
}