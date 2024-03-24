<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;


class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::first();
        return view('dashboards.footer.index', compact('footer'));
    }

    public function create()
    {
        return view('dashboards.footer.create');
    }
    public function edit($id)
    {
        $footer=Footer::findOrFail($id);
        return view('dashboards.footer.update',compact('footer'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required',
            'email' => 'required|email',
            'text.en' => 'required',
            'text.ar' => 'required',
            'location.en' => 'required',
            'location.ar' => 'required',
        ]);

        $footer = new Footer();
        $footer->phone = $validatedData['phone'];
        $footer->email = $validatedData['email'];
        $footer->setTranslations('text', [
            'en' => $validatedData['text']['en'],
            'ar' => $validatedData['text']['ar'],
        ]);
        $footer->setTranslations('location', [
            'en' => $validatedData['location']['en'],
            'ar' => $validatedData['location']['ar'],
        ]);
        $footer->save();

        return redirect()->route('footer.create')->with('success', 'Footer created successfully');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'phone' => 'required',
            'email' => 'required|email',
            'text.en' => 'required',
            'text.ar' => 'required',
            'location.en' => 'required',
            'location.ar' => 'required',
        ]);

        $footer = Footer::findOrFail($id);
        $footer->phone = $validatedData['phone'];
        $footer->email = $validatedData['email'];
        $footer->setTranslations('text', [
            'en' => $validatedData['text']['en'],
            'ar' => $validatedData['text']['ar'],
        ]);
        $footer->setTranslations('location', [
            'en' => $validatedData['location']['en'],
            'ar' => $validatedData['location']['ar'],
        ]);
        $footer->save();

        return redirect()->route('footer.edit', $footer->id)->with('success', 'Footer updated successfully');
    }

}
