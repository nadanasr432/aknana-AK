<?php

namespace App\Http\Controllers;

use index;
use App\Models\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    public function index()
    {
        $header = Header::first(); 
        return view('dashboards.header_footer.index', compact('header'));
    }

    public function create()
    {
        return view('dashboards.header_footer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'text.en' => 'required|string',
            'text.ar' => 'required|string',
            'header_image' => 'required|image',
            'footer_image' => 'required|image',
            'routes.en' => 'required|array',
            'routes.ar' => 'required|array',
            'routes.en.*' => 'string|max:255',
            'routes.ar.*' => 'string|max:255',
        ]);

        $header = Header::create([
            'title' => [
                'en' => $request->input('title.en'),
                'ar' => $request->input('title.ar'),
            ],
            'text' => [
                'en' => $request->input('text.en'),
                'ar' => $request->input('text.ar'),
            ],
            'routes' => [
                'en' => $request->input('routes.en'),
                'ar' => $request->input('routes.ar'),
            ],
        ]);

        $headerImage = $request->file('header_image')->store('header_image', 'public');
        $header->images()->create(['file_path' => $headerImage]);

        $footerImage = $request->file('footer_image')->store('footer_image', 'public');
        $header->images()->create(['file_path' => $footerImage]);

        return redirect()->back()->with('success', 'Header content stored successfully.');
    }

    public function edit(Header $header)
    {
        return view('dashboards.header_footer.edit', compact('header'));
    }



    public function update(Request $request, Header $header)
    {
        $request->validate([
            'title.en' => 'required|string|max:255',
            'title.ar' => 'required|string|max:255',
            'text.en' => 'required|string',
            'text.ar' => 'required|string',
            'images' => 'array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'footer_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'routes.en' => 'required|array',
            'routes.ar' => 'required|array',
            'routes.en.*' => 'string|max:255',
            'routes.ar.*' => 'string|max:255',
        ]);

        $data = [
            'title' => [
                'en' => $request->input('title.en'),
                'ar' => $request->input('title.ar'),
            ],
            'text' => [
                'en' => $request->input('text.en'),
                'ar' => $request->input('text.ar'),
            ],
            'routes' => [
                'en' => $request->input('routes.en'),
                'ar' => $request->input('routes.ar'),
            ],
        ];

        if ($request->hasFile('images')) {
            $header->images()->delete();
            foreach ($request->file('images') as $image) {
                $path = $image->store('header_images', 'public');
                $header->images()->create([
                    'file_path' => $path,
                ]);
            }
        }

        if ($request->hasFile('footer_image')) {
            $path = $request->file('footer_image')->store('footer_images', 'public');
            if ($header->footer_image) {
                Storage::disk('public')->delete($header->footer_image);
            }
            $header->footer_image = $path;
        }

        $header->update($data);

        return redirect()->back()->with('success', 'Header content updated successfully.');
    }


    public function destroy(Header $header)
    {
       
        $header->images()->delete();

     
        $header->delete();

        return redirect()->back()->with('success', 'Header content and associated images deleted successfully.');
    }

}
