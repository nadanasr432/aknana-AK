@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.Reservations')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>@lang('file.Edit') <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">@lang('file.Edit Reservation')</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form id="reservationForm" action="{{ route('dashboard.reservation.update', $reservation->id) }}"
                            method="post" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="course_id">@lang('file.Course')</label>
                                        <select class="form-control custom-arrow-select" id="course_id" name="course_id">
                                            <option value="" disabled>@lang('file.Select the course')</option>
                                            @if (app()->getLocale() == 'ar')
                                                @foreach ($availableCourses as $course)
                                                    <option value="{{ $course->id }}"
                                                        {{ old('course_id', $reservation->course_id) == $course->id ? 'selected' : '' }}>
                                                        {{ $course->getTranslation('name', 'en') }}
                                                    </option>
                                                @endforeach
                                            @else
                                                @foreach ($availableCourses as $course)
                                                    <option value="{{ $course->id }}"
                                                        {{ old('course_id', $reservation->course_id) == $course->id ? 'selected' : '' }}>
                                                        {{ $course->getTranslation('name', 'ar') }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_course">@lang('file.Course date')</label>
                                        <input disabled type="text" value="{{ $reservation->course->date_of_course }}"
                                            id="inputDateOfCourse" placeholder='Course date' name="date_of_course"
                                            class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">@lang('file.Name')</label>
                                        <input type="text" value="{{ $reservation->name }}" id="name" name="name"
                                            class="form-control" id="inputLastName" placeholder='Name' required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">@lang('file.Phone')</label>
                                        <input type="text" id="phone" value="{{ $reservation->phone }}"
                                            name="phone" class="form-control " id="inputLastName" placeholder='Phone'
                                            pattern="^\+966[0-9]{9}$" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">@lang('file.E-mail')</label>
                                        <input type="email" value="{{ $reservation->email }}" id="email"
                                            name="email" class="form-control" id="inputLastName" placeholder='E-mail'>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="entity_name">@lang('file.Entity name')</label>
                                        <input type="text" name="entity_name" value="{{ $reservation->entity_name }}"
                                            class="form-control" id="inputLastName" placeholder='Entity name' required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">@lang('file.Gender')</label>
                                        <select class="form-control custom-arrow-select2" id="gender" name="gender">
                                            <option value="" disabled>@lang('file.Gender')</option>
                                            <option value="male"
                                                {{ old('gender', $reservation->gender) == 'male' ? 'selected' : '' }}>
                                                @lang('file.Male')
                                            </option>
                                            <option value="female"
                                                {{ old('gender', $reservation->gender) == 'female' ? 'selected' : '' }}>
                                                @lang('file.Female')</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="job_title">@lang('file.Job title')</label>
                                        <input type="text" value="{{ $reservation->job_title }}" class="form-control"
                                            id="inputLastName" placeholder='Job title' id="job_title" name="job_title">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit"
                                        class="btn btn-gradient-primary me-2">@lang('file.Submit')</button>
                                    <button class="btn btn-light">@lang('file.Cancel')</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
