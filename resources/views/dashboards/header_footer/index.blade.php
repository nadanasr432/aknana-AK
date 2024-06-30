@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.Header , Footer Details')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('dashboard.header.edit', $header->id) }}" class="btn btn-gradient-primary me-2">
                            @lang('file.Edit header')</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span> @lang('file.Details') <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title"> @lang('file.Headers Table')</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>@lang('file.Title (English)')</th>
                                    <th>@lang('file.Title (Arabic)')</th>
                                    <th>@lang('file.Text (English)')</th>
                                    <th> @lang('file.Text (Arabic)')</th>
                                    <th> @lang('file.Routes')En</th>
                                    <th> @lang('file.Routes')Ar</th>
                                    <th>@lang('file.Header Image')</th>
                                    <th>@lang('file.Footer Image')</th>
                                    <th>@lang('file.Action')</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>{{ $header->getTranslation('title', 'en') }}</td>
                                    <td>{{ $header->getTranslation('title', 'ar') }}</td>
                                    <td>{{ $header->getTranslation('text', 'en') }}</td>
                                    <td>{{ $header->getTranslation('text', 'ar') }}</td>
                                    <td>
                                            @if (is_array($header->getTranslation('routes', 'en')))
                                                @foreach ($header->getTranslation('routes', 'en') as $route)
                                                    {{ $route }} <br>
                                                @endforeach
                                            @endif
                                    </td>
                                    <td>
                                            @if (is_array($header->getTranslation('routes', 'ar')))
                                                @foreach ($header->getTranslation('routes', 'ar') as $route)
                                                    {{ $route }} <br>
                                                @endforeach
                                            @endif
                                    </td>


                                    <td><img src="{{ asset('storage/' . $header->images()->first()->file_path) }}"></td>
                                    <td><img src="{{ asset('storage/' . $header->images()->get()->last()->file_path) }}">
                                    </td>

                                    <td>
                                        <div class="dropdown">
                                            <i class="mdi mdi-dots-vertical" id="dropdownMenuButton" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"></i>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('dashboard.header.edit', $header->id) }}">@lang('file.Edit')</a>
                                                {{-- <form id="deleteForm" method="POST"
                                                    action="{{ route('dashboard.header.destroy', ['header' => $header->id]) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <!-- Use JavaScript to show a confirmation message -->
                                                    <button type="submit" class="dropdown-item"
                                                        onclick="confirmDelete()">@lang('file.Delete')</button>
                                                </form> --}}
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete() {
            var isConfirmed = confirm("Are you sure you want to delete this header?");
            if (isConfirmed) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
@endsection
