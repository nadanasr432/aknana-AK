@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.programs')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span> @lang('file.Create Course') <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">@lang('file.Create Program')</h4>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                        <form method="POST" action="{{ route('dashboard.courses.store') }}" enctype="multipart/form-data"
                            class="forms-sample">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="prefix_number">@lang('file.Prefix Number')</label>
                                        <input type="text" class="form-control" id="prefix_number" name="prefix_number"
                                             placeholder="@lang('file.Prefix Number')">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name_ar">@lang('file.Course Name (Arabic)')</label>
                                        <input type="text" placeholder="@lang('file.Name Ar')" class="form-control"
                                            id="name_ar" name="name[ar]" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">@lang('file.Course Name (English)')</label>
                                        <input type="text" placeholder="@lang('file.Name En')" class="form-control"
                                            id="name" name="name[en]" required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="professor_name_ar">@lang('file.Professor Name (Arabic)')</label>
                                        <input type="text" class="form-control" id="professor_name_ar"
                                            name="professor_name[ar]" required placeholder="@lang('file.Professor Name Ar')">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="professor_name">@lang('file.Professor Name (English)')</label>
                                        <input type="text" class="form-control" id="professor_name"
                                            name="professor_name[en]" required placeholder="@lang('file.Professor Name En')">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="time_duration_ar">@lang('file.Time Duration (Arabic)')</label>
                                        <input type="text" class="form-control" id="time_duration_ar"
                                            name="time_duration[ar]" required placeholder="@lang('file.Time Duration Ar')">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="time_duration">@lang('file.Time Duration (English)')</label>
                                        <input type="text" class="form-control" id="time_duration"
                                            name="time_duration[en]" required placeholder="@lang('file.Time Duration En')">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location_ar">@lang('file.Location (Arabic)')</label>
                                        <input type="text" class="form-control" id="location_ar" name="location[ar]"
                                            required placeholder="@lang('file.Location Ar')">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location">@lang('file.Location (English)')</label>
                                        <input type="text" class="form-control" id="location" name="location[en]"
                                            required placeholder="@lang('file.Location En')">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="female_count">@lang('file.Max Female Count')</label>
                                        <input type="number" class="form-control" id="female_count" name="female_count"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="male_count">@lang('file.Max Male Count')</label>
                                        <input type="number" class="form-control" id="male_count" name="male_count"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_course">@lang('file.Date of Course')</label>
                                        <input type="date" class="form-control" id="date_of_course"
                                            name="date_of_course" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">@lang('file.Course Image')</label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            accept="image/*" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit"
                                        class="btn btn-gradient-primary me-2">@lang('file.Submit')</button>
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
