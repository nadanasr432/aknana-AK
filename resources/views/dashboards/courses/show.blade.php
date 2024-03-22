@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.Programs')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                     <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('dashboard.courses.edit',$course->id) }}" class="btn btn-gradient-primary me-2">
                            @lang('file.Edit Course')</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        @if (app()->getLocale() == 'ar')
                        <span></span>{{ $course->getTranslation('name', 'en') }} <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                       @else 
                        <span></span>{{ $course->getTranslation('name', 'ar') }} <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    @endif
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $course->media->first()->file_path) }}"
                                style="width: 40%;height:40%" alt="First Image">
                        </div>

                        <form method="POST" action="{{ route('dashboard.courses.update', $course->id) }}"
                            enctype="multipart/form-data" class="forms-sample">
                            @method('PUT')
                            @csrf
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name_ar"> @lang('file.Course Name (Arabic)')</label>
                                        <input disabled type="text" value="{{ $course->getTranslation('name', 'ar') }}"
                                            placeholder="Name Ar" class="form-control" id="name_ar" name="name[ar]"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name"> @lang('file.Course Name (English)')</label>
                                        <input disabled type="text" value="{{ $course->getTranslation('name', 'en') }}"
                                            placeholder="Name En" class="form-control" id="name" name="name[en]"
                                            required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="professor_name_ar"> @lang('file.Professor Name (Arabic)')</label>
                                        <input disabled type="text"
                                            value="{{ $course->getTranslation('professor_name', 'ar') }}"
                                            class="form-control" id="professor_name_ar" name="professor_name[ar]" required
                                            placeholder="Professor Name Ar">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="professor_name"> @lang('file.Professor Name (English)')</label>
                                        <input disabled type="text" class="form-control"
                                            value="{{ $course->getTranslation('professor_name', 'en') }}"
                                            id="professor_name" name="professor_name[en]" required
                                            placeholder="Professor Name En">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="time_duration_ar"> @lang('file.Time Duration (Arabic)')</label>
                                        <input disabled type="text"
                                            value="{{ $course->getTranslation('time_duration', 'ar') }}"
                                            class="form-control" id="time_duration_ar" name="time_duration[ar]" required
                                            placeholder="Time Duration Name Ar">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="time_duration"> @lang('file.Time Duration (English)')</label>
                                        <input disabled type="text"
                                            value="{{ $course->getTranslation('time_duration', 'en') }}"
                                            class="form-control" id="time_duration" name="time_duration[en]" required
                                            placeholder="Time Duration En">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location_ar"> @lang('file.Location (Arabic)')</label>
                                        <input disabled type="text"
                                            value="{{ $course->getTranslation('location', 'ar') }}" class="form-control"
                                            id="location_ar" name="location[ar]" required placeholder="Location Ar">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location"> @lang('file.Location (English)')</label>
                                        <input disabled type="text" class="form-control"
                                            value="{{ $course->getTranslation('location', 'en') }}" id="location"
                                            name="location[en]" required placeholder="Location En">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="female_count"> @lang('file.Max Female Count')</label>
                                        <input disabled type="number" value="{{ $course->female_count }}"
                                            class="form-control" id="female_count" name="female_count" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="male_count"> @lang('file.Max Male Count')</label>
                                        <input disabled type="number" value="{{ $course->male_count }}"
                                            class="form-control" id="male_count" name="male_count" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_course"> @lang('file.Date of Course')</label>
                                        <input disabled type="date" class="form-control" id="date_of_course"
                                            name="date_of_course" value="{{ $course->date_of_course }}" required>
                                    </div>
                                </div>

                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </div>
          <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title">@lang('file.Male Reservations')</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>@lang('file.Course')</th>
                                    <th>@lang('file.Course date')</th>
                                    <th>@lang('file.Name')</th>
                                    <th>@lang('file.Phone')</th>
                                    <th>@lang('file.E-mail')</th>
                                    <th>@lang('file.Entity name')</th>
                                    <th>@lang('file.Gender')</th>
                                    <th>@lang('file.Job title')</th>
                                    <th>@lang('file.Action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (app()->getLocale() == 'ar')
                                    @foreach ($course->reservations->where('gender', 'male') as $reservation)
                                        <tr>
                                            <td>
                                                 @php
                                                    // Get the male and female counts up to the current reservation
                                                    $maleCount = $reservation->course
                                                        ->reservations()
                                                        ->where('gender', 'male')
                                                        ->where('id', '<=', $reservation->id)
                                                        ->count();
                                                    $femaleCount = $reservation->course
                                                        ->reservations()
                                                        ->where('gender', 'female')
                                                        ->where('id', '<=', $reservation->id)
                                                        ->count();

                                                    // Determine the gender letter ('M' for male, 'F' for female)
                                                    $genderLetter = $reservation->gender == 'male' ? 'M' : 'F';

                                                    // Determine the arrangement number based on the gender count
                                                    $arrangementNumber =
                                                        $reservation->course->prefix_number .
                                                        $genderLetter .
                                                        ($reservation->gender == 'male' ? $maleCount : $femaleCount);
                                                @endphp
                                                {{ $arrangementNumber }}
                                            </td>
                                            <td>{{ $reservation->course->getTranslation('name', 'en') }}</td>
                                            <td>{{ $reservation->course->date_of_course }}</td>
                                            <td>{{ $reservation->name }}</td>
                                            <td>{{ $reservation->phone }}</td>
                                            <td>{{ $reservation->email }}</td>
                                            <td>{{ $reservation->entity_name }}</td>
                                            <td>{{ $reservation->gender }}</td>
                                            <td>{{ $reservation->job_title }}</td>

                                            <td>
                                                <div class="dropdown">
                                                    <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"></i>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item"
                                                            href="{{ route('dashboard.reservation.edit', $reservation->id) }}">@lang('file.Edit')</a>
                                                        <form id="deleteForm" method="POST"
                                                            action="{{ route('dashboard.reservation.delete', ['id' => $reservation->id]) }}">
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
                                @else
                                    @foreach ($course->reservations->where('gender', 'male') as $reservation)
                                        <tr>
                                            <td>
                                                @php
                                                    // Get the male and female counts up to the current reservation
                                                    $maleCount = $reservation->course
                                                        ->reservations()
                                                        ->where('gender', 'male')
                                                        ->where('id', '<=', $reservation->id)
                                                        ->count();
                                                    $femaleCount = $reservation->course
                                                        ->reservations()
                                                        ->where('gender', 'female')
                                                        ->where('id', '<=', $reservation->id)
                                                        ->count();

                                                    // Determine the gender letter ('M' for male, 'F' for female)
                                                    $genderLetter = $reservation->gender == 'male' ? 'M' : 'F';

                                                    // Determine the arrangement number based on the gender count
                                                    $arrangementNumber =
                                                        $reservation->course->prefix_number .
                                                        $genderLetter .
                                                        ($reservation->gender == 'male' ? $maleCount : $femaleCount);
                                                @endphp
                                                {{ $arrangementNumber }}
                                            </td>

                                            <td>{{ $reservation->course->getTranslation('name', 'ar') }}</td>
                                            <td>{{ $reservation->course->date_of_course }}</td>
                                            <td>{{ $reservation->name }}</td>
                                            <td>{{ $reservation->phone }}</td>
                                            <td>{{ $reservation->email }}</td>
                                            <td>{{ $reservation->entity_name }}</td>
                                            <td>{{ $reservation->gender }}</td>
                                            <td>{{ $reservation->job_title }}</td>

                                            <td>
                                                <div class="dropdown">
                                                    <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"></i>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item"
                                                            href="{{ route('dashboard.reservation.edit', $reservation->id) }}">@lang('file.Edit')</a>

                                                        <form id="deleteForm" method="POST"
                                                            action="{{ route('dashboard.reservation.delete', ['id' => $reservation->id]) }}">
                                                            @csrf
                                                            @method('DELETE')

                                                            <!-- Use JavaScript to show a confirmation message -->
                                                            <button type="button" class="dropdown-item"
                                                                onclick="confirmDelete()">@lang('file.Delete')</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
          <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title">@lang('file.Female Reservations')</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>@lang('file.Course')</th>
                                    <th>@lang('file.Course date')</th>
                                    <th>@lang('file.Name')</th>
                                    <th>@lang('file.Phone')</th>
                                    <th>@lang('file.E-mail')</th>
                                    <th>@lang('file.Entity name')</th>
                                    <th>@lang('file.Gender')</th>
                                    <th>@lang('file.Job title')</th>
                                    <th>@lang('file.Action')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (app()->getLocale() == 'ar')
                                    @foreach ($course->reservations->where('gender', 'female') as $reservation)
                                        <tr>
                                            <td>
                                                @php
                                                    // Get the male and female counts up to the current reservation
                                                    $maleCount = $reservation->course
                                                        ->reservations()
                                                        ->where('gender', 'male')
                                                        ->where('id', '<=', $reservation->id)
                                                        ->count();
                                                    $femaleCount = $reservation->course
                                                        ->reservations()
                                                        ->where('gender', 'female')
                                                        ->where('id', '<=', $reservation->id)
                                                        ->count();

                                                    // Determine the gender letter ('M' for male, 'F' for female)
                                                    $genderLetter = $reservation->gender == 'male' ? 'M' : 'F';

                                                    // Determine the arrangement number based on the gender count
                                                    $arrangementNumber =
                                                        $reservation->course->prefix_number .
                                                        $genderLetter .
                                                        ($reservation->gender == 'male' ? $maleCount : $femaleCount);
                                                @endphp
                                                {{ $arrangementNumber }}
                                            </td>

                                            <td>{{ $reservation->course->getTranslation('name', 'en') }}</td>
                                            <td>{{ $reservation->course->date_of_course }}</td>
                                            <td>{{ $reservation->name }}</td>
                                            <td>{{ $reservation->phone }}</td>
                                            <td>{{ $reservation->email }}</td>
                                            <td>{{ $reservation->entity_name }}</td>
                                            <td>{{ $reservation->gender }}</td>
                                            <td>{{ $reservation->job_title }}</td>

                                            <td>
                                                <div class="dropdown">
                                                    <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"></i>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item"
                                                            href="{{ route('dashboard.reservation.edit', $reservation->id) }}">@lang('file.Edit')</a>
                                                        <form id="deleteForm" method="POST"
                                                            action="{{ route('dashboard.reservation.delete', ['id' => $reservation->id]) }}">
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
                                @else
                                    @foreach ($course->reservations->where('gender', 'female') as $reservation)
                                        <tr>
                                            <td>
                                                @php
                                                   
                                                    $maleCount = $reservation->course
                                                        ->reservations()
                                                        ->where('gender', 'male')
                                                        ->where('id', '<=', $reservation->id)
                                                        ->count();
                                                    $femaleCount = $reservation->course
                                                        ->reservations()
                                                        ->where('gender', 'female')
                                                        ->where('id', '<=', $reservation->id)
                                                        ->count();

                                                    // Determine the gender letter ('M' for male, 'F' for female)
                                                    $genderLetter = $reservation->gender == 'male' ? 'M' : 'F';

                                                    // Determine the arrangement number based on the gender count
                                                    $arrangementNumber =
                                                        $reservation->course->prefix_number .
                                                        $genderLetter .
                                                        ($reservation->gender == 'male' ? $maleCount : $femaleCount);
                                                @endphp
                                                {{ $arrangementNumber }}
                                            </td>

                                            <td>{{ $reservation->course->getTranslation('name', 'ar') }}</td>
                                            <td>{{ $reservation->course->date_of_course }}</td>
                                            <td>{{ $reservation->name }}</td>
                                            <td>{{ $reservation->phone }}</td>
                                            <td>{{ $reservation->email }}</td>
                                            <td>{{ $reservation->entity_name }}</td>
                                            <td>{{ $reservation->gender }}</td>
                                            <td>{{ $reservation->job_title }}</td>

                                            <td>
                                                <div class="dropdown">
                                                    <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"></i>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <a class="dropdown-item"
                                                            href="{{ route('dashboard.reservation.edit', $reservation->id) }}">@lang('file.Edit')</a>

                                                        <form id="deleteForm" method="POST"
                                                            action="{{ route('dashboard.reservation.delete', ['id' => $reservation->id]) }}">
                                                            @csrf
                                                            @method('DELETE')

                                                            <!-- Use JavaScript to show a confirmation message -->
                                                            <button type="button" class="dropdown-item"
                                                                onclick="confirmDelete()">@lang('file.Delete')</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
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
