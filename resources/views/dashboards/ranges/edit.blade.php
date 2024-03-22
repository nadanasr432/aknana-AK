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
                        <h4 class="card-title mb-5"> @lang('file.Edit Items')</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('ranges.update', $range->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <!-- Use PUT method for update -->

                            <!-- English Title and Arabic Title -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="en_title">@lang('file.English Title for Item')</label>
                                        <input id="en_title" type="text" class="form-control" name="en_title"
                                            value="{{ old('en_title', $range->en_title) }}" required autofocus>
                                        @error('en_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ar_title">@lang('file.Arabic Title for Item')</label>
                                        <input id="ar_title" type="text" class="form-control" name="ar_title"
                                            value="{{ old('ar_title', $range->ar_title) }}" required>
                                        @error('ar_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- English Text and Arabic Text -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="en_text">@lang('file.English Text for Item')</label>
                                        <textarea id="en_text" class="form-control" name="en_text" rows="4" required>{{ old('en_text', $range->en_text) }}</textarea>
                                        @error('en_text')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ar_text">@lang('file.Arabic Text for Item')</label>
                                        <textarea id="ar_text" class="form-control" name="ar_text" rows="4" required>{{ old('ar_text', $range->ar_text) }}</textarea>
                                        @error('ar_text')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            @if ($range->media()->exists() && $range->media()->first()->file_path)
                                <!-- Image -->
                                <div class="form-group">
                                    <label for="image">@lang('file.Image for Item')</label>
                                    <input id="image" type="file" class="form-control-file" name="image"
                                        accept="image/*">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <img src="{{ asset('storage/' . $range->media()->first()->file_path) }}" width="40px"
                                        height="40px" alt="Range Image">
                                </div>
                            @endif

                            <button type="submit" class="btn btn-gradient-primary me-2">{{ __('Submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
