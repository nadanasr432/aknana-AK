@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> Reservations
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('dashboard.reservation.create') }}" class="btn btn-gradient-primary me-2">
                            Create
                            Reservations</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>All Reservations <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
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
                                    <th>Course</th>
                                    <th>Course date</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>E-mail</th>
                                    <th>Entity name</th>
                                    <th>Gender</th>
                                    <th>Job title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $reservation)
                                    <tr>
                                        <td>{{ $reservation->course->getTranslation('name', 'en')}}</td>
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
                                                        href="{{ route('dashboard.reservation.edit', $reservation->id) }}">Edit</a>

                                                    <form id="deleteForm" method="POST"
                                                        action="{{ route('dashboard.reservation.delete', ['id' => $reservation->id]) }}">
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
