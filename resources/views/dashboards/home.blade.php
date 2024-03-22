@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> @lang('file.Dashboard')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>@lang('file.Overview') <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">@lang('file.Weekly Reservations') <i
                                class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ $weeklyReservationsCount }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">@lang('file.Courses Counts')<i
                                class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ $programs_counts }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <img src="assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">@lang('file.Contacts counts') <i
                                class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{ $contacts_count }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="clearfix">
                            <h4 class="card-title float-left">@lang('file.Reservations Statistics')</h4>
                            <div id="reservation-chart-legend"
                                class="rounded-legend legend-horizontal legend-top-right float-right">
                            </div>
                        </div>
                        <canvas id="reservation-chart" class="mt-4"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">@lang('file.Courses Calendar')</h4>
                        {{-- <canvas id="Courses-chart"></canvas> --}}
                        <div id="Courses_calendar" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title">@lang('file.Recent Reservations')</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
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
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

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
                                @else
                                 @foreach ($reservations as $reservation)
                                    <tr>
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
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

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
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">  @lang('file.Recent Updates')   </h4>
                    <div class="d-flex">
                        <div class="d-flex align-items-center me-4 text-muted font-weight-light">
                            <i class="mdi mdi-account-outline icon-sm me-2"></i>
                            <span>{{ $event->title ?? " "}}</span>
                        </div>
                        <div class="d-flex align-items-center text-muted font-weight-light">
                            <i class="mdi mdi-clock icon-sm me-2"></i>
                          <span>{{ optional($event)->created_at ? \Carbon\Carbon::parse($event->created_at)->format('F jS, Y') : " " }}</span>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6 pe-1">
                            <img src="{{ asset('images/7.jpg') }}" class="mb-2 mw-100 w-100 rounded" alt="image">
                            <img src="{{ asset('images/11.jpg') }}" class="mw-100 w-100 rounded" alt="image">
                        </div>
                        <div class="col-6 ps-1">
                            <img src="{{ asset('images/6.jpg') }}" class="mb-2 mw-100 w-100 rounded" alt="image">
                            <img src="{{ asset('images/10.jpg') }}" class="mw-100 w-100 rounded" alt="image">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>
    
@endsection
