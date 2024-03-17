<?php

namespace App\Http\Controllers\Dashboard;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Course;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;

class HomeController extends Controller
{
    public function index()
    {
        $reservations = Reservation::latest()->take(6)->get();
        $event = Event::latest()->first();
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $courses = Course::all();
        $weeklyReservationsCount = DB::table('reservations')
        ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
        ->count();
        $programs_counts = Course::all()->count();
        $contacts_count = ContactUs::all()->count();
        $monthlyCounts_reservations =
            DB::table('reservations')
            ->select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('SUM(CASE WHEN gender = "male" THEN 1 ELSE 0 END) as male_count'),
                DB::raw('SUM(CASE WHEN gender = "female" THEN 1 ELSE 0 END) as female_count')
            )
            ->groupBy('month')
            ->get();
           

        return view('dashboards.home', compact('courses','reservations', 'event','weeklyReservationsCount', 'programs_counts', 'contacts_count', 'monthlyCounts_reservations' ));
    }
}
