<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('dashboards.courses.index', compact('courses'));
    }
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('dashboards.courses.show', compact('course'));
    }

    public function create()
    {
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
          
            'prefix_number' => 'required|unique:courses,prefix_number',
        ]);

        $prefixNumber = $request->input('prefix_number', Str::uuid()->toString());

        $course = Course::create([
            'prefix_number' => $prefixNumber,
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

        return redirect()->route('dashboard.courses.index')->with('success', 'Course created successfully.');
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
        return view('dashboards.courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
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
            'prefix_number' => [
                'required',
                Rule::unique('courses')->ignore($id),
            ],
        ]);
        $prefixNumber = $request->input('prefix_number', Str::uuid()->toString());
        $course->update([
            'prefix_number' =>  $prefixNumber,
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
            Storage::disk('public')->delete($course->media()->first()->file_path);

            // Upload the new image
            $imagePath = $request->file('image')->store('course_images', 'public');

            // Update the course's media record
            $course->media()->update([
                'file_path' => $imagePath,
            ]);
        }

        return redirect()->route('dashboard.courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        // Delete associated reservations
        $course->reservations()->delete();

        // Delete associated media
        $course->media()->delete();

        // Delete the course
        $course->delete();

        return redirect()->route('dashboard.courses.index')->with('success', 'Course deleted successfully.');
    }




    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:approved,pending',
        ]);

        $course = Course::findOrFail($id);
        $course->status = $request->input('status');
        $course->save();

        return redirect()->route('dashboard.courses.index')->with('success', 'Course status updated successfully.');
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search');

        // Query courses based on the search query including name, professor name, date of course, location, and prefix number
        $courses = Course::query()
            ->where('name->en', 'LIKE', "%{$searchQuery}%")
            ->orWhere('name->ar', 'LIKE', "%{$searchQuery}%")
            ->orWhere('professor_name->en', 'LIKE', "%{$searchQuery}%")
            ->orWhere('professor_name->ar', 'LIKE', "%{$searchQuery}%")
            ->orWhere('prefix_number', 'LIKE', "%{$searchQuery}%")
            ->orWhere('date_of_course', 'LIKE', "%{$searchQuery}%")
            ->orWhere('location->en', 'LIKE', "%{$searchQuery}%")
            ->orWhere('location->ar', 'LIKE', "%{$searchQuery}%")
            ->get();

        return view('dashboards.courses.search_result', compact('courses'));
    }


}
