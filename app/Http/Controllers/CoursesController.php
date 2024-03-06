<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
class CoursesController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('courses.index',compact('courses'));
    }
    
    public function create(){
        return view('courses.create');
    }
  public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'date_of_course' => 'required|date',
            'professor_name' => 'required|string',
            'time_duration' => 'required|string',
            'location' => 'required|string',
            'male_count' => 'required|integer',
            'female_count' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Prepare translation data
        $translations = [
            'name' => [
                'en' => $request->input('name'),
                'ar' => $this->translateToArabic($request->input('name')),
            ],
            'professor_name' => [
                'en' => $request->input('professor_name'),
                'ar' => $this->translateToArabic($request->input('professor_name')),
            ],
            'time_duration' => [
                'en' => $request->input('time_duration'),
                'ar' => $this->translateToArabic($request->input('time_duration')),
            ],
            'location' => [
                'en' => $request->input('location'),
                'ar' => $this->translateToArabic($request->input('location')),
            ],
        ];

        // Store Course with translations
        $course = Course::create($translations + [
            'date_of_course' => $request->input('date_of_course'),
            'male_count' => $request->input('male_count'),
            'female_count' => $request->input('female_count'),
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('course_images', 'public');

            $course->media()->create([
                'file_path' => $imagePath,
            ]);
        }

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }


public function searchByPhone(Request $request)
{
    $courses = Course::with('reservations');

    if ($request->has('phone')) {
        $phone = $request->input('phone');

        $courses->whereHas('reservations', function ($query) use ($phone) {
            $query->where('phone', $phone);
        });
    }

    $filteredCourses = $courses->get();

    if ($filteredCourses->isEmpty()) {
        return view('courses.search_result')->with('filteredCourses', null);
    }

    return view('courses.search_result', compact('filteredCourses'));
}

}
