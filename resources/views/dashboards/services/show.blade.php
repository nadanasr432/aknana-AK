@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.Services')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('dashboard.service.create') }}" class="btn btn-gradient-primary me-2">
                            @lang('file.Create Service')</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>@lang('file.All Services') <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title">@lang('file.Services Table')</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>@lang('file.Title (English)')</th>
                                    <th>@lang('file.Title (Arabic)')</th>
                                    <th>@lang('file.Description (English)')</th>
                                    <th>@lang('file.Description (Arabic)')</th>
                                    <th>@lang('file.Service Image')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->getTranslation('title', 'en') }}</td>
                                        <td>{{ $service->getTranslation('title', 'ar') }}</td>
                                        <td>{{ $service->getTranslation('description', 'en') }}</td>
                                        <td>{{ $service->getTranslation('description', 'ar') }}</td>
                                        <td><img src="{{ asset('storage/' . $service->media()->first()->file_path) }}"></td>

                                        <td>
                                            <div class="dropdown">
                                                <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="{{ route('dashboard.service.edit', $service->id) }}">@lang('file.Edit')</a>

                                                    <form id="deleteForm" method="POST"
                                                        action="{{ route('dashboard.service.delete', ['id' => $service->id]) }}">
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
