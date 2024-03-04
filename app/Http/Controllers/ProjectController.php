<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
     public function create(){
        return view('project.create ');
     }
   public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'images' => 'array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

       
        $project = Project::create([
            'title' => $request->input('title'),
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

}
