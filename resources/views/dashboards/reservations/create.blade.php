@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> Programs
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Create <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Create Reservation</h4>

                        <form id="reservationForm" action="{{ route('reservation.store') }}" method="post"
                            enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="course_id">Course</label>
                                        <select class="form-control  custom-arrow-select" id="course_id" name="course_id">

                                            <option value="" disabled selected>Select the course</option>

                                            @foreach ($availableCourses as $course)
                                                <option value="{{ $course->id }}"
                                                    data-date="{{ $course->date_of_course }}"
                                                    {{ request('course_id') == $course->id ? 'selected' : '' }}>
                                                    {{ $course->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_course">Course date</label>
                                        <input disabled type="text" id="inputDateOfCourse" placeholder='Course date'
                                            name="date_of_course" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            id="inputLastName" placeholder='Name' required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" id="phone" name="phone" class="form-control "
                                            id="inputLastName" placeholder='Phone' pattern="^\+966[0-9]{9}$" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            id="inputLastName" placeholder='E-mail'>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="entity_name">Entity name</label>
                                        <input type="text" name="entity_name" class="form-control" id="inputLastName"
                                            placeholder='Entity name' required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select class="form-control custom-arrow-select2" id="gender" name="gender">
                                            <option value="" disabled selected>Gender</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="job_title">Job title</label>
                                        <input type="text" class="form-control" id="inputLastName"
                                            placeholder='Job title' id="job_title" name="job_title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection