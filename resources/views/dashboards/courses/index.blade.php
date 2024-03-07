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
                        <span></span>All Program <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title">Programs Table</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name Ar</th>
                                    <th>Name En</th>
                                    <th>Professor Name Ar</th>
                                    <th>Professor Name En</th>
                                    <th>Time Duration Ar</th>
                                    <th>Time Duration En</th>
                                    <th>Location En</th>
                                    <th>Location En</th>
                                    <th>Max Female Count</th>
                                    <th>Max Male Count</th>
                                    <th>Date of Course</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $course->getTranslation('name', 'ar') }}</td>
                                        <td>{{ $course->getTranslation('name', 'en') }}</td>
                                        <td>{{ $course->getTranslation('professor_name', 'ar') }}</td>
                                        <td>{{ $course->getTranslation('professor_name', 'en') }}</td>
                                        <td>{{ $course->getTranslation('time_duration', 'ar') }}</td>
                                        <td>{{ $course->getTranslation('time_duration', 'en') }}</td>
                                        <td>{{ $course->getTranslation('location', 'ar') }}</td>
                                        <td>{{ $course->getTranslation('location', 'en') }}</td>
                                        <td>{{ $course->female_count }}</td>
                                        <td>{{ $course->male_count }}</td>
                                        <td>{{ $course->date_of_course }}</td>
                                        <td>
                                           <div class="dropdown">
                                            <i class="mdi mdi-dots-vertical"></i>
                                            <div class="dropdown-content">
                                                <a href="{{ route('dashboard.courses.edit',$course->id) }}">Edit</a>
                                               <form method="POST" action="{{ route('dashboard.courses.delete', ['id' => $course->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">delete</button>
                                            </form>

                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
{{-- 
@foreach ($courses as $course)
    @php
        $maleCount = $course->reservations()->where('gender', 'male')->count();
        $femaleCount = $course->reservations()->where('gender', 'female')->count();
        $maxMaleCount = $course->male_count;
        $maxFemaleCount = $course->female_count;
        $isCourseAvailable = $maleCount < $maxMaleCount || $femaleCount < $maxFemaleCount;
    @endphp

    <div class="col-md-4 mt-5">
        <div class="justify-content-center">
            <span class="d-flex justify-content-center mb-2 ">
                <img src="{{ asset('storage/' . $course->media->first()->file_path) }}" style="width: 100%;height:258px"
                    alt="First Image">
            </span>

            <div class="d-flex justify-content-start pl-1"
                style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 667;
                                    line-height: 34px;
                                    letter-spacing: 0em;
                                    text-align:left;
                                    color: rgba(18, 23, 67, 1);

                                    ">
                {{ $course->getTranslation('name', 'en') }}</div>
            <div class="mt-2  pl-1"
                style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align:left;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                <img src="{{ asset('images/Vector (6).svg') }}">
                @lang('file.Eng/'){{ $course->getTranslation('professor_name', 'en') }}

            </div>
            <div class="mt-2  pl-1"
                style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align: left;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                <img src="{{ asset('images/Vector (5).svg') }}">
                @lang('file.Duration') : {{ $course->getTranslation('time_duration', 'en') }}

            </div>
        </div>
        <div class="d-flex justify-content-between align-items-between">


            <div class="mt-2 pl-0"
                style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align:left;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                <img src="{{ asset('images/location1.svg') }}">
                {{ $course->getTranslation('location', 'en') }}

            </div>
            @if ($isCourseAvailable)
                <a href="{{ route('reservation.create', ['course_id' => $course->id]) }}" id="ServButton2"
                    class="btn btn-primary"
                    style="width:155px;height:35px;font-family: Cairo; font-family: Cairo; font-size: 15px; font-weight: 600; line-height: 28px; letter-spacing: 0em; text-align: center; background:#121743; border:#121743; color:#FFFFFF;">
                    @lang('file.join_now')
                </a>
            @else
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#courseFullModal"
                    class="btn btn-primary"
                    style="width:155px;height:35px;font-family: Cairo; font-family: Cairo; font-size: 15px; font-weight: 600; line-height: 28px; letter-spacing: 0em; text-align: center; background:#121743; border:#121743; color:#FFFFFF;">
                    @lang('file.join_now')
                </a>
            @endif
        </div>
    </div>
@endforeach
<x-pop_up_course />
</div> --}}
