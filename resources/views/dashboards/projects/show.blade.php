@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.Projects')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('dashboard.project.create') }}" class="btn btn-gradient-primary me-2">
                            @lang('file.Create Project')</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>@lang('file.All Projects') <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title"> @lang('file.Projects Table')</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>@lang('file.Title (English)')</th>
                                    <th>@lang('file.Title (Arabic)')</th>
                                    <th>@lang('file.URL')</th>
                                    <th> @lang('file.Project Image')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $project->getTranslation('title', 'en') }}</td>
                                        <td>{{ $project->getTranslation('title', 'ar') }}</td>
                                        <td><a href="{{ $project->url }}" >{{ $project->url }}</a></td>
                                        <td><img src="{{ asset('storage/' . $project->images()->first()->file_path) }}">
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="{{ route('dashboard.project.edit', $project->id) }}">@lang('file.Edit')</a>
                                                    <form id="deleteForm" method="POST"
                                                        action="{{ route('dashboard.project.delete', ['id' => $project->id]) }}">
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
