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
                        <span></span> @lang('file.Create')<i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5"> @lang('file.Create Template')</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                         <form method="POST" action="{{ route('templates.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name_en" class="col-md-4 col-form-label text-md-right">{{ __('Name (English)') }}</label>
                            <div class="col-md-6">
                                <input id="name_en" type="text" class="form-control @error('name.en') is-invalid @enderror" name="name[en]" value="{{ old('name.en') }}"  autofocus>
                                @error('name.en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name_ar" class="col-md-4 col-form-label text-md-right">{{ __('Name(Arabic)') }}</label>
                            <div class="col-md-6">
                                <input id="name_ar" type="text" class="form-control @error('name.ar') is-invalid @enderror" name="name[ar]" value="{{ old('name.ar') }}" >
                                @error('name.ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="main_title_en" class="col-md-4 col-form-label text-md-right">{{ __('Main Title (English)') }}</label>
                            <div class="col-md-6">
                                <input id="main_title_en" type="text" class="form-control @error('main_title.en') is-invalid @enderror" name="main_title[en]" value="{{ old('main_title.en') }}"  autofocus>
                                @error('main_title.en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="main_title_ar" class="col-md-4 col-form-label text-md-right">{{ __('Main Title (Arabic)') }}</label>
                            <div class="col-md-6">
                                <input id="main_title_ar" type="text" class="form-control @error('main_title.ar') is-invalid @enderror" name="main_title[ar]" value="{{ old('main_title.ar') }}" >
                                @error('main_title.ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="main_sub_title_en" class="col-md-4 col-form-label text-md-right">{{ __('Main Sub Title (English)') }}</label>
                            <div class="col-md-6">
                                <input id="main_sub_title_en" type="text" class="form-control @error('main_sub_title.en') is-invalid @enderror" name="main_sub_title[en]" value="{{ old('main_sub_title.en') }}" >
                                @error('main_sub_title.en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="main_sub_title_ar" class="col-md-4 col-form-label text-md-right">{{ __('Main Sub Title (Arabic)') }}</label>
                            <div class="col-md-6">
                                <input id="main_sub_title_ar" type="text" class="form-control @error('main_sub_title.ar') is-invalid @enderror" name="main_sub_title[ar]" value="{{ old('main_sub_title.ar') }}" >
                                @error('main_sub_title.ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="main_text_en" class="col-md-4 col-form-label text-md-right">{{ __('Main Text (English)') }}</label>
                            <div class="col-md-6">
                                <textarea id="main_text_en" class="form-control @error('main_text.en') is-invalid @enderror" name="main_text[en]" >{{ old('main_text.en') }}</textarea>
                                @error('main_text.en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="main_text_ar" class="col-md-4 col-form-label text-md-right">{{ __('Main Text (Arabic)') }}</label>
                            <div class="col-md-6">
                                <textarea id="main_text_ar" class="form-control @error('main_text.ar') is-invalid @enderror" name="main_text[ar]" >{{ old('main_text.ar') }}</textarea>
                                @error('main_text.ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="button_text_en" class="col-md-4 col-form-label text-md-right">{{ __('Button Text (English)') }}</label>
                            <div class="col-md-6">
                                <input id="button_text_en" type="text" class="form-control @error('button_text.en') is-invalid @enderror" name="button_text[en]" value="{{ old('button_text.en') }}" >
                                @error('button_text.en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="button_text_ar" class="col-md-4 col-form-label text-md-right">{{ __('Button Text (Arabic)') }}</label>
                            <div class="col-md-6">
                                <input id="button_text_ar" type="text" class="form-control @error('button_text.ar') is-invalid @enderror" name="button_text[ar]" value="{{ old('button_text.ar') }}" >
                                @error('button_text.ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Repeatable field for additional items -->
                         <div id="additional_items">
                            <div class="form-group row">
                                <label for="item_en" class="col-md-4 col-form-label text-md-right">{{ __('Item (English)') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="items[en][]" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="item_ar" class="col-md-4 col-form-label text-md-right">{{ __('Item (Arabic)') }}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="items[ar][]" >
                                </div>
                            </div>
                        </div>


                        <!-- Button to add additional items -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="button" class="btn btn-primary" onclick="addAdditionalItem()">
                                    {{ __('Add Additional Item') }}
                                </button>
                            </div>
                        </div>

                        <!-- Image upload -->
                        <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="image"> @lang('file.Image')</label>
                                        <input type="file" name="images[]" id="images" class="form-control-file"
                                            multiple accept="image/*">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-gradient-primary me-2"> @lang('file.Submit')</button>
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

<script>
    function addAdditionalItem() {
        var additionalItems = document.getElementById('additional_items');
        var newItemEn = additionalItems.children[0].cloneNode(true);
        var newItemAr = additionalItems.children[1].cloneNode(true);

        additionalItems.appendChild(newItemEn);
        additionalItems.appendChild(newItemAr);
    }
</script>