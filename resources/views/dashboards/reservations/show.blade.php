@extends('layouts.dashboard')

@section('content')
    <div class="content-wrapper">
        <div class="row mb-4">
            <div class="col-md-6">
                <form action="{{ route('dashboard.reservation.search') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="@lang('file.Search by phone')" name="phone">
                        <button class="btn btn-gradient-primary me-2" type="submit">@lang('file.Search')</button>
                    </div>
                </form>
            </div>
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-library"></i>
                    </span> @lang('file.Reservations')
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ route('dashboard.reservation.create') }}" class="btn btn-gradient-primary me-2">
                                @lang('file.Create Reservation')
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>@lang('file.All Reservations') <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body" style="overflow-x: auto;">
                            <h4 class="card-title">@lang('file.Reservations')</h4>
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
                                        @foreach ($reservations as $reservation)
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
                                                            ($reservation->gender == 'male'
                                                                ? $maleCount
                                                                : $femaleCount);
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
                                        @foreach ($reservations as $reservation)
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
                                                            ($reservation->gender == 'male'
                                                                ? $maleCount
                                                                : $femaleCount);
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
                var isConfirmed = confirm("Are you sure you want to delete this reservation?");
                if (isConfirmed) {
                    document.getElementById('deleteForm').submit();
                }
            }
        </script>
    @endsection
