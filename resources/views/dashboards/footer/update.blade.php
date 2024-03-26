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
                        <span></span> @lang('file.Edit')<i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5"> @lang('file.Edit Footer')</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('footer.update', $footer->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">@lang('file.Phone')</label>
                                        <input type="text" id="phone" name="phone"
                                            value="{{ old('phone', $footer->phone) }}" required class="form-control"
                                            autofocus>
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">@lang('file.Email')</label>
                                        <input type="email" id="email" name="email"
                                            value="{{ old('email', $footer->email) }}" required class="form-control"
                                            autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text_en">@lang('file.Text (English)')</label>
                                        <textarea id="text_en" name="text[en]" required class="form-control">{{ old('text.en', $footer->getTranslation('text', 'en')) }}</textarea>
                                        @error('text_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text_ar">@lang('file.Text (Arabic)')</label>
                                        <textarea id="text_ar" name="text[ar]" required class="form-control">{{ old('text.ar', $footer->getTranslation('text', 'ar')) }}</textarea>
                                        @error('text_ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location_en">@lang('file.Location (English)')</label>
                                        <input type="text" id="location_en" name="location[en]"
                                            value="{{ old('location.en', $footer->getTranslation('location', 'en')) }}"
                                            required class="form-control" autofocus>
                                        @error('location_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location_ar">@lang('file.Location (Arabic)')</label>
                                        <input type="text" id="location_ar" name="location[ar]"
                                            value="{{ old('location.ar', $footer->getTranslation('location', 'ar')) }}"
                                            required class="form-control" autofocus>
                                        @error('location_ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="rights_en">@lang('file.Rights (English)')</label>
                                        <input type="text" id="rights_en" name="rights[en]"
                                            value="{{ old('rights.en', $footer->getTranslation('rights', 'en')) }}"
                                            required class="form-control" autofocus>
                                        @error('rights_en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="rights_ar">@lang('file.Rights (Arabic)')</label>
                                        <input type="text" id="rights_ar" name="rights[ar]"
                                            value="{{ old('rights.ar', $footer->getTranslation('rights', 'ar')) }}"
                                            required class="form-control" autofocus>
                                        @error('rights_ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook">@lang('file.Facebook')</label>
                                        <input type="url" id="facebook" name="facebook"
                                            value="{{ old('facebook', $footer->facebook) }}" class="form-control"
                                            autofocus>
                                        @error('facebook')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                   <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="twitter">@lang('file.Twitter')</label>
                                        <input type="url" id="twitter" name="twitter"
                                            value="{{ old('twitter', $footer->twitter) }}" class="form-control"
                                            autofocus>
                                        @error('twitter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="instagram">@lang('file.Instagram')</label>
                                        <input type="url" id="instagram" name="instagram"
                                            value="{{ old('instagram', $footer->instagram) }}" class="form-control"
                                            autofocus>
                                        @error('instagram')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="youtube">@lang('file.Youtube')</label>
                                        <input type="url" id="youtube" name="youtube"
                                            value="{{ old('youtube', $footer->youtube) }}" class="form-control"
                                            autofocus>
                                        @error('youtube')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-gradient-primary me-2">{{ __('Submit') }}</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
