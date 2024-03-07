@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('dashboard.courses.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Course Name (English)</label>
                <input type="text" class="form-control" id="name" name="name[en]" required>
            </div>

            <div class="mb-3">
                <label for="name_ar" class="form-label">Course Name (Arabic)</label>
                <input type="text" class="form-control" id="name_ar" name="name[ar]" required>
            </div>

            <div class="mb-3">
                <label for="date_of_course" class="form-label">Date of Course</label>
                <input type="date" class="form-control" id="date_of_course" name="date_of_course" required>
            </div>

            <div class="mb-3">
                <label for="professor_name" class="form-label">Professor Name (English)</label>
                <input type="text" class="form-control" id="professor_name" name="professor_name[en]" required>
            </div>

            <div class="mb-3">
                <label for="professor_name_ar" class="form-label">Professor Name (Arabic)</label>
                <input type="text" class="form-control" id="professor_name_ar" name="professor_name[ar]" required>
            </div>

            <div class="mb-3">
                <label for="time_duration" class="form-label">Time Duration (English)</label>
                <input type="text" class="form-control" id="time_duration" name="time_duration[en]" required>
            </div>

            <div class="mb-3">
                <label for="time_duration_ar" class="form-label">Time Duration (Arabic)</label>
                <input type="text" class="form-control" id="time_duration_ar" name="time_duration[ar]" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location (English)</label>
                <input type="text" class="form-control" id="location" name="location[en]" required>
            </div>

            <div class="mb-3">
                <label for="location_ar" class="form-label">Location (Arabic)</label>
                <input type="text" class="form-control" id="location_ar" name="location[ar]" required>
            </div>

            <div class="mb-3">
                <label for="male_count" class="form-label">Max Male Count</label>
                <input type="number" class="form-control" id="male_count" name="male_count" required>
            </div>

            <div class="mb-3">
                <label for="female_count" class="form-label">Max Female Count</label>
                <input type="number" class="form-control" id="female_count" name="female_count" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Course Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Dashboard
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i
                            class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
@endsection
