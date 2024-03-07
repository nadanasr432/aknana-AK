<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('dashboards.courses.index',compact('courses'));
    }
    
    public function create(){
        return view('dashboards.courses.create');
    }
 public function store(Request $request)
{
    $request->validate([
        'name' => 'required|array',
        'name.en' => 'required|string',
        'name.ar' => 'required|string',
        'date_of_course' => 'required|date',
        'professor_name' => 'required|array',
        'professor_name.en' => 'required|string',
        'professor_name.ar' => 'required|string',
        'time_duration' => 'required|array',
        'time_duration.en' => 'required|string',
        'time_duration.ar' => 'required|string',
        'location' => 'required|array',
        'location.en' => 'required|string',
        'location.ar' => 'required|string',
        'male_count' => 'required|integer',
        'female_count' => 'required|integer',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Prepare translation data

    // Store Course with translations
    $course = Course::create([
         'name' => [
            'en' => $request->input('name.en'),
            'ar' => $request->input('name.ar'),
        ],
        'professor_name' => [
            'en' => $request->input('professor_name.en'),
            'ar' => $request->input('professor_name.ar'),
        ],
        'time_duration' => [
            'en' => $request->input('time_duration.en'),
            'ar' => $request->input('time_duration.ar'),
        ],
        'location' => [
            'en' => $request->input('location.en'),
            'ar' => $request->input('location.ar'),
        ],
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

    return redirect()->route('dashboard')->with('success', 'Course created successfully.');
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
public function edit($id)
{
    $course = Course::findOrFail($id);
    return view('courses.edit', compact('course'));
}

public function update(Request $request, $id)
{
    $course = Course::findOrFail($id);

    $request->validate([
        'name' => 'required|array',
        'name.en' => 'required|string',
        'name.ar' => 'required|string',
        'date_of_course' => 'required|date',
        'professor_name' => 'required|array',
        'professor_name.en' => 'required|string',
        'professor_name.ar' => 'required|string',
        'time_duration' => 'required|array',
        'time_duration.en' => 'required|string',
        'time_duration.ar' => 'required|string',
        'location' => 'required|array',
        'location.en' => 'required|string',
        'location.ar' => 'required|string',
        'male_count' => 'required|integer',
        'female_count' => 'required|integer',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $course->update([
        'name' => [
            'en' => $request->input('name.en'),
            'ar' => $request->input('name.ar'),
        ],
        'professor_name' => [
            'en' => $request->input('professor_name.en'),
            'ar' => $request->input('professor_name.ar'),
        ],
        'time_duration' => [
            'en' => $request->input('time_duration.en'),
            'ar' => $request->input('time_duration.ar'),
        ],
        'location' => [
            'en' => $request->input('location.en'),
            'ar' => $request->input('location.ar'),
        ],
        'date_of_course' => $request->input('date_of_course'),
        'male_count' => $request->input('male_count'),
        'female_count' => $request->input('female_count'),
    ]);

    // Handle image update
    if ($request->hasFile('image')) {
        // Delete the old image
        Storage::disk('public')->delete($course->media->file_path);

        // Upload the new image
        $imagePath = $request->file('image')->store('course_images', 'public');

        // Update the course's media record
        $course->media()->update([
            'file_path' => $imagePath,
        ]);
    }

    return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
}

public function destroy($id)
{
    $course = Course::findOrFail($id);

    // Delete associated media file
    Storage::disk('public')->delete($course->media->file_path);

    // Delete the course
    $course->delete();

    return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
}

}
