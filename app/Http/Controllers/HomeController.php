<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Course;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
{
    $events = Event::latest()->take(9)->get();
    $courses= Course::latest()->take(9)->get( );
    $services  = Service::all();
    return view('landing.sections', compact('events','courses','services'));
}

}
