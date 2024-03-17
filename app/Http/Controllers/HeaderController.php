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
            'header_image' => 'image',
            'footer_image' => 'image',
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
        ];

        // Handle header image
        if ($request->hasFile('header_image')) {
            // Delete existing header image
            if ($header->images()->where('type', 'header')->exists()) {
                $existingHeaderImage = $header->images()->where('type', 'header')->first();
                Storage::disk('public')->delete($existingHeaderImage->file_path);
                $existingHeaderImage->delete();
            }

            // Store new header image
            $headerImage = $request->file('header_image')->store('header_images', 'public');
            $header->images()->create(['type' => 'header', 'file_path' => $headerImage]);
        }

        // Handle footer image
        if ($request->hasFile('footer_image')) {
            // Delete existing footer image
            if ($header->images()->where('type', 'footer')->exists()) {
                $existingFooterImage = $header->images()->where('type', 'footer')->first();
                Storage::disk('public')->delete($existingFooterImage->file_path);
                $existingFooterImage->delete();
            }

            // Store new footer image
            $footerImage = $request->file('footer_image')->store('footer_images', 'public');
            $header->images()->create(['type' => 'footer', 'file_path' => $footerImage]);
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
