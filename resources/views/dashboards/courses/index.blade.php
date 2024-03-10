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
                        <a href="{{ route('dashboard.courses.create') }}" class="btn btn-gradient-primary me-2">Create
                            Course</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>All Programs <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
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
                                    <th>Course Image</th>
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
                                           <td><img src="{{ asset('app/public/' . $course->media()->first()->file_path) }}"
                                               ></td>
                                        <td>
                                            <div class="dropdown">
                                                <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="{{ route('dashboard.courses.edit', $course->id) }}">Edit</a>

                                                    <form id="deleteForm" method="POST"
                                                        action="{{ route('dashboard.courses.delete', ['id' => $course->id]) }}">
                                                        @csrf
                                                        @method('DELETE')

                                                        <!-- Use JavaScript to show a confirmation message -->
                                                        <button type="button" class="dropdown-item"
                                                            onclick="confirmDelete()">Delete</button>
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
    <script>
        function confirmDelete() {
            var isConfirmed = confirm("Are you sure you want to delete this course?");
            if (isConfirmed) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
@endsection
