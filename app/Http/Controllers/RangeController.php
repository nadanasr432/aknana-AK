<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Range;
use App\Models\Media;

class RangeController extends Controller
{
    /**
     * Store a newly created range in storage along with its image.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $ranges = Range::all();
        return view('dashboards.ranges.index',compact( 'ranges'));
    }
    public function create()
    {
        
        return view('dashboards.ranges.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'items.*.en.title' => 'required|string',
            'items.*.en.text' => 'required|string',
            'items.*.ar.title' => 'required|string',
            'items.*.ar.text' => 'required|string',
            'items.*.image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        foreach ($validatedData['items'] as $item) {
            $range = new Range();
            $range->en_title = $item['en']['title'];
            $range->en_text = $item['en']['text'];
            $range->ar_title = $item['ar']['title'];
            $range->ar_text = $item['ar']['text'];
            $range->save();

            $media = new Media();
            $imagePath = $item['image']->store('range_images', 'public');
            $media->file_path = $imagePath;
            $range->media()->save($media);
        }

        return back();
    }
    public function edit($id)
    {
        $range = Range::findOrFail($id);
        return view('dashboards.ranges.edit', compact('range'));
    }

    public function update(Request $request, $id)
    {
        $range = Range::findOrFail($id);

        $validatedData = $request->validate([
            'en_title' => 'required|string',
            'en_text' => 'required|string',
            'ar_title' => 'required|string',
            'ar_text' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $range->en_title = $validatedData['en_title'];
        $range->en_text = $validatedData['en_text'];
        $range->ar_title = $validatedData['ar_title'];
        $range->ar_text = $validatedData['ar_text'];

        if ($request->hasFile('image')) {
            // Update image if a new one is uploaded
            $imagePath = $request->file('image')->store('range_images', 'public');
            $range->media()->delete(); // Remove previous image
            $media = new Media();
            $media->file_path = $imagePath;
            $range->media()->save($media);
        }

        $range->save();

        return redirect()->route('ranges.index')->with('success', 'Range updated successfully');
    }

}