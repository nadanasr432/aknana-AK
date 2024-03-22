@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.Ranges')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    {{-- 
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('ranges.create') }}" class="btn btn-gradient-primary me-2">
                            @lang('file.Create range')</a>
                    </li> --}}
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span> @lang('file.All ranges') <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title"> @lang('file.Ranges Table')</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>@lang('file.Title (English)')</th>
                                    <th>@lang('file.Title (Arabic)')</th>
                                    <th>@lang('file.Text (English)')</th>
                                    <th> @lang('file.Text (Arabic)')</th>
                                    <th>@lang('file.Range Image')</th>
                                    <th>@lang('file.Status')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ranges as $range)
                                    <tr>
                                        <td>{{ $range->en_title }}</td>
                                        <td>{{ $range->ar_title }}</td>
                                        <td>{{ $range->en_text }}</td>
                                        <td>{{ $range->ar_text }}</td>
                                        <td>
                                            @if ($range->media()->exists())
                                                <img src="{{ asset('storage/' . $range->media()->first()->file_path) }}">
                                            @else
                                                <!-- Handle case where there are no associated media files -->
                                                No media available
                                            @endif
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="{{ route('ranges.edit', $range->id) }}">@lang('file.Edit')</a>

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
            var isConfirmed = confirm("Are you sure you want to delete this range?");
            if (isConfirmed) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
@endsection
