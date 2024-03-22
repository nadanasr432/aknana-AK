@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.Template')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
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
                        <h4 class="card-title"> @lang('file.Templates Table')</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>@lang('file.Name (English)')</th>
                                    <th>@lang('file.Name(Arabic)')</th>
                                    <th>@lang('file.Main Title (English)')</th>
                                    <th> @lang('file.Main Title (Arabic)')</th>
                                    <th>@lang('file.Main Sub Title (English)')</th>
                                    <th>@lang('file.Main Sub Title (Arabic)')</th>
                                    <th>@lang('file.Main Text (English)')</th>
                                    <th>@lang('file.Main Text (Arabic)')</th>
                                    <th>@lang('file.Button Text (English)')</th>
                                    <th>@lang('file.Button Text (Arabic)')</th>
                                    <th> @lang('file.Item (English)')</th>
                                    <th>@lang('file.Item (Arabic)')</th>
                                    <th>@lang('file.Image En')</th>
                                    <th>@lang('file.Image Ar')</th>
                                    <th>@lang('file.Action')</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($templates as $template)
                                    <tr>
                                        <td>{{ $template->getTranslation('name', 'en') }}</td>
                                        <td>{{ $template->getTranslation('name', 'ar') }}</td>
                                        <td>{{ $template->getTranslation('main_title', 'en') }}</td>
                                        <td>{{ $template->getTranslation('main_title', 'ar') }}</td>
                                        <td>{{ $template->getTranslation('main_sub_title', 'en') }}</td>
                                        <td>{{ $template->getTranslation('main_sub_title', 'ar') }}</td>
                                        <td>{{ $template->getTranslation('main_text', 'en') }}</td>
                                        <td>{{ $template->getTranslation('main_text', 'ar') }}</td>
                                        <td>{{ $template->getTranslation('button_text', 'en') }}</td>
                                        <td>{{ $template->getTranslation('button_text', 'ar') }}</td>
                                        <td>
                                            @if (is_array($template->getTranslation('items', 'en')))
                                                @foreach ($template->getTranslation('items', 'en') as $item)
                                                    {{ $item }} <br>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            @if (is_array($template->getTranslation('items', 'ar')))
                                                @foreach ($template->getTranslation('items', 'ar') as $item)
                                                    {{ $item }} <br>
                                                @endforeach
                                            @endif
                                        </td>






                                        <td><img src="{{ asset('storage/' . $template->image) }}"></td>
                                        <td><img src="{{ asset('storage/' . $template->image_ar) }}">
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <i class="mdi mdi-dots-vertical" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="{{ route('templates.edit', ['id' => $template->id]) }}">@lang('file.Edit')</a>
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
            var isConfirmed = confirm("Are you sure you want to delete this template?");
            if (isConfirmed) {
                document.getElementById('deleteForm').submit();
            }
        }
    </script>
@endsection
