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
                        <span></span> @lang('file.Edit')<i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5"> @lang('file.Update Header And Footer')</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST"action="{{ route('dashboard.header.update', $header->id) }}"
                            enctype="multipart/form-data" class="forms-sample">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title_en">@lang('file.Title (English)')</label>
                                        <input type="text" name="title[en]" id="title_en" class="form-control" required
                                            value="{{ $header->getTranslation('title', 'en') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title_ar">@lang('file.Title (Arabic)')</label>
                                        <input type="text" name="title[ar]" id="title_ar" class="form-control" required
                                            value="{{ $header->getTranslation('title', 'ar') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text_en">@lang('file.Text (English)')</label>
                                        <textarea name="text[en]" id="text_en" class="form-control" required>{{ $header->getTranslation('text', 'en') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text_ar"> @lang('file.Text (Arabic)')</label>
                                        <textarea name="text[ar]" id="text_ar" class="form-control" required>{{ $header->getTranslation('text', 'ar') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="header_image"> @lang('file.Header Image')</label>
                                        @if ($header->images()->exists())
                                            <img src="{{ asset('storage/' . $header->images()->first()->file_path) }}"
                                                width="40px" height="40px">
                                        @else
                                            No image available
                                        @endif
                                        <input type="file" name="images[]" id="images" class="form-control-file"
                                            multiple accept="image/*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="footer_image">@lang('file.Footer Image')</label>
                                        @if ($header->footer_image)
                                            <img src="{{ asset('storage/' . $header->footer_image) }}" width="40px"
                                                height="40px">
                                        @else
                                            No image available
                                        @endif
                                        <input type="file" name="footer_image" id="footer_image"
                                            class="form-control-file" accept="image/*">
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach (old('routes.en', $header->getTranslation('routes', 'en')) as $index => $routeEn)
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="route{{ $index + 1 }}_en">@lang('file.Route') {{ $index + 1 }}
                                                    (English)</label>
                                                <input type="text" name="routes[en][]" id="route{{ $index + 1 }}_en"
                                                    class="form-control" required value="{{ $routeEn }}">
                                            </div>
                                        </div>
                                    @endforeach

                                    @foreach (old('routes.ar', $header->getTranslation('routes', 'ar')) as $index => $routeAr)
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="route{{ $index + 1 }}_ar">@lang('file.Route') {{ $index + 1 }}
                                                    (Arabic)</label>
                                                <input type="text" name="routes[ar][]" id="route{{ $index + 1 }}_ar"
                                                    class="form-control" required value="{{ $routeAr }}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-gradient-primary me-2">
                                        @lang('file.Submit')</button>
                                    <button class="btn btn-light"> @lang('file.Cancel')</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
