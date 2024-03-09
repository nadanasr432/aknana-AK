@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> Events
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('dashboard.event.create') }}" class="btn btn-gradient-primary me-2">
                            Create
                            Event</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>All Events <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title">Events Table</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Title (English)</th>
                                    <th>Title (Arabic)</th>
                                    <th>Text (English)</th>
                                    <th>Text (Arabic)</th>
                                    <th>Event Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td>{{ $event->getTranslation('title', 'en') }}</td>
                                        <td>{{ $event->getTranslation('title', 'ar') }}</td>
                                        <td>{{ $event->getTranslation('text', 'en') }}</td>
                                        <td>{{ $event->getTranslation('text', 'ar') }}</td>
                                        <td><img src="{{ asset('storage/' . $event->media()->first()->file_path) }}"
                                               ></td>

                                        <td>
                                            <div class="dropdown">
                                                <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="{{ route('dashboard.event.edit', $event->id) }}">Edit</a>

                                                    <form id="deleteForm" method="POST"
                                                        action="{{ route('dashboard.event.delete', ['id' => $event->id]) }}">
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
