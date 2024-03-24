<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Template;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Template::all();
        return view('dashboards.temp.show', compact('templates'));
    }
    public function create()
    {
        return view('dashboards.temp.create');
    }
    public function edit($id)
    {
        $template = Template::findOrFail($id);
        return view('dashboards.temp.edit', compact('template'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'name.en' => 'required',
            // 'name.ar' => 'required',
            'main_title.en' => 'nullable',
            'main_title.ar' => 'nullable',
            'main_sub_title.en' => 'nullable',
            'main_sub_title.ar' => 'nullable',
            'main_text.en' => 'nullable',
            'main_text.ar' => 'nullable',
            'button_text.en' => 'nullable',
            'button_text.ar' => 'nullable',
            'items.en.*' => 'nullable',
            'items.ar.*' => 'nullable',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_ar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $template = new Template();
        $template->main_title = [
            'en' => $request->input('main_title.en'),
            'ar' => $request->input('main_title.ar')
        ];
        $template->main_sub_title = [
            'en' => $request->input('main_sub_title.en'),
            'ar' => $request->input('main_sub_title.ar')
        ];
        $template->main_text = [
            'en' => $request->input('main_text.en'),
            'ar' => $request->input('main_text.ar')
        ];
        $template->button_text = [
            'en' => $request->input('button_text.en'),
            'ar' => $request->input('button_text.ar')
        ];
        $template->items = [
            'en' => $request->input('items.en'),
            'ar' => $request->input('items.ar')
        ];
        // $template->name = [
        //     'en' => $request->input('name.en'),
        //     'ar' => $request->input('name.ar')
        // ];


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('template_images', 'public');
            $template->image = $imagePath;
        }

        if ($request->hasFile('image_ar')) {
            $imagePath = $request->file('image_ar')->store('template_images_ar', 'public');
            $template->image = $imagePath;
        }

        $template->save();

        return redirect()->back()->with('success', 'Template created successfully.');
    }

    /**
     * Update the specified template in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Template  $template )
    {
// dd($request->all( ));
        $request->validate([
            // 'name.en' => 'required',
            // 'name.ar' => 'required',
            'main_title.en' => 'nullable',
            'main_title.ar' => 'nullable',
            'main_sub_title.en' => 'nullable',
            'main_sub_title.ar' => 'nullable',
            'main_text.en' => 'nullable',
            'main_text.ar' => 'nullable',
            'button_text.en' => 'nullable',
            'button_text.ar' => 'nullable',
            'items.en.*' => 'nullable',
            'items.ar.*' => 'nullable',
            // English image validation rules
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // Arabic image validation rules
            'image_ar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $template->update([
            'main_title' => [
                'en' => $request->input('main_title.en'),
                'ar' => $request->input('main_title.ar')
            ], "main_sub_title" => [
                'en' => $request->input('main_sub_title.en'),
                'ar' => $request->input('main_sub_title.ar')
            ],
            "main_text" => [
                'en' => $request->input('main_text.en'),
                'ar' => $request->input('main_text.ar')
            ],
            "button_text" => [
                'en' => $request->input('button_text.en'),
                'ar' => $request->input('button_text.ar')
            ],
            "items" => [
                'en' => $request->input('items.en'),
                'ar' => $request->input('items.ar')
            ],
            // "name" => [
            //     'en' => $request->input('name.en'),
            //     'ar' => $request->input('name.ar')
            // ],
        ]);

        // Delete old English image if a new one is provided
        if ($request->hasFile('image') && $template->image
        ) {
            Storage::disk('public')->delete($template->image);
        }

        // Handle English image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('template_image', 'public');
            $template->image = $path;
        }

        // Delete old Arabic image if a new one is provided
        if ($request->hasFile('image_ar') && $template->image_ar) {
            Storage::disk('public')->delete($template->image_ar);
        }

        // Handle Arabic image upload
        if ($request->hasFile('image_ar')) {
            $path_ar = $request->file('image_ar')->store('template_image_ar', 'public');
            $template->image_ar = $path_ar;
        }

        // Save the changes to the template
        $template->save();

        return redirect()->back()->with('success', 'Template updated successfully.');
    }
}
