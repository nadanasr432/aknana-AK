@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> Services
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('dashboard.service.create') }}" class="btn btn-gradient-primary me-2">
                            Create
                            Service</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>All Services <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title">Services Table</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Title (English)</th>
                                    <th>Title (Arabic)</th>
                                    <th>Description (English)</th>
                                    <th>Description (Arabic)</th>
                                    <th>service Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->getTranslation('title', 'en') }}</td>
                                        <td>{{ $service->getTranslation('title', 'ar') }}</td>
                                        <td>{{ $service->getTranslation('description', 'en') }}</td>
                                        <td>{{ $service->getTranslation('description', 'ar') }}</td>
                                        <td><img src="{{ asset('storage/' . $service->media()->first()->file_path) }}"
                                               ></td>

                                        <td>
                                            <div class="dropdown">
                                                <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="{{ route('dashboard.service.edit', $service->id) }}">Edit</a>

                                                    <form id="deleteForm" method="POST"
                                                        action="{{ route('dashboard.service.delete', ['id' => $service->id]) }}">
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
