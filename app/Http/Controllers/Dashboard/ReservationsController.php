<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Course;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ReservationsController extends Controller
{
    public function index(){
        $reservations=Reservation::all();
        return view('dashboards.reservations.show',compact('reservations') );
    }
   public function create()
{
    $courses = Course::all();
       $availableCourses = $courses->filter(function ($course) {
        $maleCount = $course->reservations()->where('gender', 'male')->count();
        $femaleCount = $course->reservations()->where('gender', 'female')->count();
        $maxMaleCount = $course->male_count;
        $maxFemaleCount = $course->female_count;
        // dd($femaleCount);
        return $maleCount < $maxMaleCount || $femaleCount < $maxFemaleCount;
     
    });
   
  $selectedCourse = $availableCourses->first();
    //  dd($selectedCourse);

    return view('dashboards.reservations.create', compact('availableCourses', 'selectedCourse',));
}

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|regex:/^\+966[0-9]{9}$/',
                'entity_name' => 'required|string|max:255',
                'email' => 'email|max:255',
                'gender' => 'required|string|in:female,male',
                'job_title' => 'string|max:255',
                'course_id' => 'exists:courses,id',
                'date_of_course' => 'date',
            ]);

            $course = Course::find($request->input('course_id'));

            $reservation = Reservation::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'entity_name' => $request->input('entity_name'),
                'email' => $request->input('email'),
                'gender' => $request->input('gender'),
                'job_title' => $request->input('job_title'),
                'course_id' => $course->id,
                'date_of_course' => $course->date_of_course,
            ]);
            $maleCount = $course->reservations()->where('gender', 'male')->where('id', '<=', $reservation->id)->count();
            $femaleCount = $course->reservations()->where('gender', 'female')->where('id', '<=', $reservation->id)->count();
            $genderLetter = $reservation->gender == 'male' ? 'M' : 'F';
            $arrangementNumber = $course->prefix_number . $genderLetter . ($reservation->gender == 'male' ? $maleCount : $femaleCount);
            $qrCodeData = [
                'id' => $arrangementNumber,
                'name' => $reservation->name,
                'phone' => $reservation->phone,
                'course' => $reservation->course->name,
                'date_of_course' => $reservation->course->date_of_course
            ];

            $qrCode = QrCode::format('svg')->size(300)->generate(json_encode($qrCodeData));
            $qrCodePath = 'qrcodes/' . $reservation->id . '.svg';
            Storage::disk('public')->put($qrCodePath, $qrCode);

            $reservation->media()->create([
                'file_path' =>  $qrCodePath,
            ]);
            $reservation->save();

            return redirect()->route('dashboard.reservation.index')->with([
                'success' => 'Data stored successfully',
                'qrCodeData' => $qrCodeData,
                'reservation' => $reservation
            ]);
        } catch (\Exception $e) {
            Log::error('Error storing reservation: ' . $e->getMessage());
            return redirect()->route('dashboard.reservation.index')->with([
                'error' => 'An error occurred while storing the reservation. Please try again.',
            ]);
        }
    }

 public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        
    $courses = Course::all();
       $availableCourses = $courses->filter(function ($course) {
        $maleCount = $course->reservations()->where('gender', 'male')->count();
        $femaleCount = $course->reservations()->where('gender', 'female')->count();
        $maxMaleCount = $course->male_count;
        $maxFemaleCount = $course->female_count;
        // dd($femaleCount);
        return $maleCount < $maxMaleCount || $femaleCount < $maxFemaleCount;
     
    });
   
  $selectedCourse = $availableCourses->first();

        return view('dashboards.reservations.edit', compact('reservation', 'courses','availableCourses'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|regex:/^\+966[0-9]{9}$/',
                'entity_name' => 'required|string|max:255',
                'email' => 'email|max:255',
                'gender' => 'required|string|in:female,male',
                'job_title' => 'string|max:255',
                'course_id' => 'exists:courses,id',
                'date_of_course' => 'date',
            ]);

            $reservation = Reservation::findOrFail($id);
            $course = Course::find($request->input('course_id'));

            // Update reservation attributes
            $reservation->update([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'entity_name' => $request->input('entity_name'),
                'email' => $request->input('email'),
                'gender' => $request->input('gender'),
                'job_title' => $request->input('job_title'),
                'course_id' => $course->id,
                'date_of_course' => $course->date_of_course,
            ]);

            return redirect()->route('dashboard.reservation.index')->with('success', 'Reservation updated successfully');
        } catch (\Exception $e) {
            Log::error('Error updating reservation: ' . $e->getMessage());
            return redirect()->route('dashboard.reservation.index')->with('error', 'An error occurred while updating the reservation. Please try again.');
        }
    }

    public function destroy($id)
    {
        try {
            $reservation = Reservation::findOrFail($id);
            $reservation->delete();

            return redirect()->route('dashboard.reservation.index')->with('success', 'Reservation deleted successfully');
        } catch (\Exception $e) {
            Log::error('Error deleting reservation: ' . $e->getMessage());
            return redirect()->route('dashboard.reservation.index')->with('error', 'An error occurred while deleting the reservation. Please try again.');
        }
    }

public function getMaxMaleValue(Request $request)
{
    $courseId = $request->input('course_id');

    // Retrieve the course by ID
    $course = Course::findOrFail($courseId);
    $maleCount = $course->reservations()->where('gender', 'male')->count();
    $femaleCount = $course->reservations()->where('gender', 'female')->count();


    // Return the maximum male and female values
    return response()->json([
        'max_male' => $course->male_count,
        'max_female' => $course->female_count,
        'maleCount'=>$maleCount,
        'femaleCount'=>$femaleCount,

    ]);
}


public function downloadQrCode()
{
    $qrCodeData = session('qrCodeData');
    $qrCode = QrCode::size(300)->generate(json_encode($qrCodeData));

    return Response::make($qrCode, 200, [
        'Content-Type' => 'image/png',
        'Content-Disposition' => 'attachment; filename=qrcode.png',
    ]);
}
    public function search(Request $request)
    {
        $query = Reservation::query();

        if ($request->has('phone')) {
            $phone = $request->input('phone');
            $query->where('phone', $phone);
        }

        if ($request->has('id')) {
            $id = $request->input('id');
            $query->where('id', $id);
        }

        $reservations = $query->get();

        return view('dashboards.reservations.search', compact('reservations'));
    }


}