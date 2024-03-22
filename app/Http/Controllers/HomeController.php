<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Range;
use App\Models\Course;
use App\Models\Header;
use App\Models\Project;
use App\Models\Service;
use App\Models\Template;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::latest()->take(9)->get();
        $courses = Course::latest()->take(9)->get();
        $services  = Service::all();
        $projects = Project::all();
        $header = Header::first();
        $range1 = Range::find(1);
        $range2 = Range::find(2);
        $range3 = Range::find(3);
        $range4 = Range::find(4);
        $range5 = Range::find(5);
        $range6 = Range::find(6);
        $range7 = Range::find(7);
        $range8 = Range::find(8);
        $temp_services = Template::where('name->en', 'services')->orWhere('name->ar', 'الخدمات')->get();
        $temp_US = Template::where('name->en', 'about us')->get();
        $temp_2023 = Template::where('name->en', '2030')->get();
        $temp_program = Template::where('name->en', 'Programs')->get();
        $temp_projects = Template::where('name->en', 'Projects')->get();
        $temp_events = Template::where('name->en', 'Events')->get();
        $temp_contactUs = Template::where('name->en', 'Contact Us')->get();
        $temp_reservations = Template::where('name->en', 'Aknana Reservations')->get();
        return view('landing.sections', compact(
            "temp_services",
            "temp_events",
            "temp_2023",
            "temp_program",
            "temp_projects",
            "temp_contactUs",
            "temp_reservations",
            "temp_US",
            'events',
            'courses',
            'services',
            'projects',
            'header',
            'range1',
            "range2",
            "range3",
            "range4",
            "range5",
            "range6",
            "range7",
            "range8"

        ));
    }
}
