@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.Events')
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span> @lang('file.Edit') <i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5"> @lang('file.Edit Event')</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST"action="{{ route('dashboard.event.update', $event->id) }}"
                            enctype="multipart/form-data" class="forms-sample">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title_en">@lang('file.Title (English)')</label>
                                        <input type="text" name="title[en]" id="title_en" class="form-control" required
                                            value="{{ $event->getTranslation('title', 'en') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title_ar">@lang('file.Title (Arabic)')</label>
                                        <input type="text" name="title[ar]" id="title_ar" class="form-control" required
                                            value="{{ $event->getTranslation('title', 'ar') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text_en">@lang('file.Text (English)')</label>
                                        <textarea name="text[en]" id="text_en" class="form-control" required>{{ $event->getTranslation('text', 'en') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text_ar"> @lang('file.Text (Arabic)')</label>
                                        <textarea name="text[ar]" id="text_ar" class="form-control" required>{{ $event->getTranslation('text', 'ar') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="image">@lang('file.Event Image')<img
                                                src="{{ asset('storage/' . $event->media()->first()->file_path) }}"
                                                width="40px" height="40px"></label>
                                        <input type="file" name="image" id="image" class="form-control-file"
                                            accept="image/*">
                                    </div>
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
