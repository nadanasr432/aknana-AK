@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.Footer')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span> @lang('file.Footer') <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title"> @lang('file.footers Table')</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>@lang('file.Phone')</th>
                                    <th>@lang('file.Email')</th>
                                    <th>@lang('file.Text (English)')</th>
                                    <th> @lang('file.Text (Arabic)')</th>
                                    <th>@lang('file.Location (English)')</th>
                                    <th>@lang('file.Location (Arabic)')</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>{{ $footer->phone }}</td>
                                    <td>{{ $footer->email }}</td>
                                    <td>{{ $footer->getTranslation('text', 'en') }}</td>
                                    <td>{{ $footer->getTranslation('text', 'ar') }}</td>
                                    <td>{{ $footer->getTranslation('location', 'en') }}</td>
                                    <td>{{ $footer->getTranslation('location', 'ar') }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <i class="mdi mdi-dots-vertical" id="dropdownMenuButton" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"></i>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="{{ route('footer.edit', $footer->id) }}">@lang('file.Edit')</a>
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


@endsection
