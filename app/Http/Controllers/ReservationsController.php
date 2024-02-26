<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Reservation;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ReservationsController extends Controller
{
   public function index(){
      $courses= Course::all();  
      
        return view('reservations.create',compact('courses')); 
   }
 public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^\+966[0-9]{9}$/',
            'entity_name' => 'required|string|max:255',
            'email' => 'email|max:255',
            'gender' => 'string|in:female,male',
            'job_title' => 'string|max:255',
            'course_id' => 'exists:courses,id',
            'date_of_period' => 'date',
        ]);

        $period =Course::find($request->input('course_id'));

        $reservation = Reservation::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'entity_name' => $request->input('entity_name'),
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
            'job_title' => $request->input('job_title'),
            'course_id' => $period->id,
            'date_of_course' => $request->input('date_of_course'),
            
        ]);
        
          return redirect()->route('reservation.create')->with('success', 'Data stored successfully');
    }

}