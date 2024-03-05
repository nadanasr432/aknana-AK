<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
   // LanguageController.php
public function switch(Request $request)
{
    $request->validate([
        'locale' => ['required', 'in:en,ar'],
    ]);

    session(['locale' => $request->locale]);

    return redirect()->back();
}

}