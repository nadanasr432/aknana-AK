@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
         <div class="col-md-6">
        <form action="{{ route('dashboard.course.search') }}" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="@lang('file.Search by course name')">
                <button type="submit" class="btn btn-gradient-primary me-2">@lang('file.Search')</button>
            </div>
        </form>
        </div>
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.Programs')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('dashboard.courses.create') }}" class="btn btn-gradient-primary me-2">
                            @lang('file.Create Course')</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>@lang('file.All Programs') <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title">@lang('file.Programs Table')</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>@lang('file.Prefix Number')</th>
                                    <th>@lang('file.Name Ar')</th>
                                    <th>@lang('file.Name En')</th>
                                    <th>@lang('file.Professor Name Ar')</th>
                                    <th>@lang('file.Professor Name En')</th>
                                    <th>@lang('file.Time Duration Ar')</th>
                                    <th>@lang('file.Time Duration En')</th>
                                    <th>@lang('file.Location En')</th>
                                    <th>@lang('file.Location En')</th>
                                    <th>@lang('file.Max Female Count')</th>
                                    <th>@lang('file.Max Male Count')</th>
                                    <th>@lang('file.Date of Course')</th>
                                    <th>@lang('file.Course Image')</th>
                                    <th>@lang('file.Status')</th>
                                    <th>@lang('file.Action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $course->prefix_number }}</td>
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
                                            @if ($course->media()->exists())
                                                <img src="{{ asset('storage/' . $course->media()->first()->file_path) }}">
                                            @endif
                                        </td>

                                        <td>
                                            <form class="status-form" data-course-id="{{ $course->id }}">
                                                @csrf
                                                @method('PUT')
                                                <select class="status-select">

                                                    <option value="approved"
                                                        {{ $course->status == 'approved' ? 'selected' : '' }}>Approved
                                                    </option>
                                                    <option value="pending"
                                                        {{ $course->status == 'pending' ? 'selected' : '' }}>Pending
                                                    </option>
                                                </select>
                                            </form>

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="{{ route('dashboard.courses.show', $course->id) }}">@lang('file.Show')</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('dashboard.courses.edit', $course->id) }}">@lang('file.Edit')</a>

                                                    <form id="deleteForm" method="POST"
                                                        action="{{ route('dashboard.courses.delete', ['id' => $course->id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <!-- Use JavaScript to show a confirmation message -->
                                                        <button type="submit" class="dropdown-item"
                                                            onclick="confirmDelete()">@lang('file.Delete')</button>
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
