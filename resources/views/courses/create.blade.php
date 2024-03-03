@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="date_of_course" class="form-label">Date of Course</label>
                <input type="date" class="form-control" id="date_of_course" name="date_of_course" required>
            </div>

            <div class="mb-3">
                <label for="professor_name" class="form-label">Professor Name</label>
                <input type="text" class="form-control" id="professor_name" name="professor_name" required>
            </div>

            <div class="mb-3">
                <label for="time_duration" class="form-label">Time Duration</label>
                <input type="text" class="form-control" id="time_duration" name="time_duration" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
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
