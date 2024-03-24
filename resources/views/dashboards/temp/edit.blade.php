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
                        <h4 class="card-title mb-5"> @lang('file.Edit Template')</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('templates.update', $template->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{-- <div class="form-group row">

                                <div class="col-md-6">
                                    <label for="name_en" class="form-label">@lang('file.Name (English)')</label>
                                    <input id="name_en" type="text"
                                        class="form-control @error('name.en') is-invalid @enderror" name="name[en]"
                                        value="{{ old('name.en', $template->getTranslation('name', 'en')) }}" autofocus>
                                    @error('name.en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="name_ar" class="form-label ">@lang('file.Name(Arabic)')</label>
                                    <input id="name_ar" type="text"
                                        class="form-control @error('name.ar') is-invalid @enderror" name="name[ar]"
                                        value="{{ old('name.ar', $template->getTranslation('name', 'ar')) }}">
                                    @error('name.ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}



                            @if ($template->getTranslation('main_title', 'en') && $template->getTranslation('main_title', 'ar'))
                                <div class="form-group row">

                                    <div class="col-md-6">
                                        <label for="main_title_en" class="form-label ">@lang('file.Main Title (English)')</label>
                                        <input id="main_title_en" type="text"
                                            class="form-control @error('main_title.en') is-invalid @enderror"
                                            name="main_title[en]"
                                            value="{{ old('main_title.en', $template->getTranslation('main_title', 'en')) }}"
                                            autofocus>
                                        @error('main_title.en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="main_title_ar" class="form-label">
                                            @lang('file.Main Title (Arabic)')</label>
                                        <input id="main_title_ar" type="text"
                                            class="form-control @error('main_title.ar') is-invalid @enderror"
                                            name="main_title[ar]"
                                            value="{{ old('main_title.ar', $template->getTranslation('main_title', 'ar')) }}">
                                        @error('main_title.ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                            @if ($template->getTranslation('main_sub_title', 'en') && $template->getTranslation('main_sub_title', 'ar'))
                                <div class="form-group row">

                                    <div class="col-md-6">
                                        <label for="main_sub_title_en" class="form-label">@lang('file.Main Sub Title (English)')</label>
                                        <input id="main_sub_title_en" type="text"
                                            class="form-control @error('main_sub_title.en') is-invalid @enderror"
                                            name="main_sub_title[en]"
                                            value="{{ old('main_sub_title.en', $template->getTranslation('main_sub_title', 'en')) }}">
                                        @error('main_sub_title.en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="main_sub_title_ar" class="form-label">@lang('file.Main Sub Title (Arabic)')</label>
                                        <input id="main_sub_title_ar" type="text"
                                            class="form-control @error('main_sub_title.ar') is-invalid @enderror"
                                            name="main_sub_title[ar]"
                                            value="{{ old('main_sub_title.ar', $template->getTranslation('main_sub_title', 'ar')) }}">
                                        @error('main_sub_title.ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                            @if ($template->getTranslation('main_text', 'en') && $template->getTranslation('main_text', 'ar'))
                                <div class="form-group row">

                                    <div class="col-md-6">
                                        <label for="main_text_en" class="form-label">@lang('file.Main Text (English)')</label>
                                        <textarea id="main_text_en" class="form-control @error('main_text.en') is-invalid @enderror" name="main_text[en]">{{ old('main_text.en', $template->getTranslation('main_text', 'en')) }}</textarea>
                                        @error('main_text.en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="main_text_ar" class="form-label">@lang('file.Main Text (Arabic)')</label>
                                        <textarea id="main_text_ar" class="form-control @error('main_text.ar') is-invalid @enderror" name="main_text[ar]">{{ old('main_text.ar', $template->getTranslation('main_text', 'ar')) }}</textarea>
                                        @error('main_text.ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif
                            @if ($template->getTranslation('button_text', 'en') && $template->getTranslation('button_text', 'ar'))
                                <div class="form-group row">

                                    <div class="col-md-6">
                                        <label for="button_text_en" class="form-label">@lang('file.Button Text (English)')</label>
                                        <input id="button_text_en" type="text"
                                            class="form-control @error('button_text.en') is-invalid @enderror"
                                            name="button_text[en]"
                                            value="{{ old('button_text.en', $template->getTranslation('button_text', 'en')) }}">
                                        @error('button_text.en')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="button_text_ar" class="form-label">@lang('file.Button Text (Arabic)')</label>
                                        <input id="button_text_ar" type="text"
                                            class="form-control @error('button_text.ar') is-invalid @enderror"
                                            name="button_text[ar]"
                                            value="{{ old('button_text.ar', $template->getTranslation('button_text', 'ar')) }}">
                                        @error('button_text.ar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endif

                            @if (is_array(old('items.en')) ||
                                    is_object(old('items.en')) ||
                                    is_array($template->getTranslation('items', 'en')) ||
                                    is_object($template->getTranslation('items', 'en')))
                                <div id="additional_items">
                                     <div class="form-group row">
                                    @foreach (old('items.en', $template->getTranslation('items', 'en')) as $index => $itemEn)
                                        @if ($itemEn)
                                           

                                                <div class="col-md-6">
                                                    <label for="item_en_{{ $index }}"
                                                        class="form-label text-md-left">@lang('file.Item (English)')</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ old('items.en.' . $index, $itemEn) }}"
                                                        name="items[en][]">
                                                </div>
                                          
                                        @endif
                                    @endforeach

                                    @foreach (old('items.ar', $template->getTranslation('items', 'ar')) as $index => $itemAr)
                                        @if ($itemAr)
                                         

                                                <div class="col-md-6">
                                                    <label for="item_ar_{{ $index }}"
                                                        class="form-label text-md-left">@lang('file.Item (Arabic)')</label>
                                                    <input type="text"
                                                        value="{{ old('items.ar.' . $index, $itemAr) }}"
                                                        class="form-control" name="items[ar][]">
                                                </div>
                                         
                                        @endif
                                    @endforeach
                                      </div>
                                </div>

                                <!-- Button to add additional items -->
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="button" class="btn btn-gradient-primary me-2"
                                            onclick="addAdditionalItem()">
                                            {{ __('Add Additional Item') }}
                                        </button>
                                    </div>
                                </div>
                            @endif

                            <!-- Image upload -->
                            @if ($template->image && $template->image_ar)
                                <div class="form-group">
                                    <label for="image">@lang('file.Image En')</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    <img class="mt-4" src="{{ asset('storage/' . $template->image) }}" width="70px"
                                        height="70px">
                                </div>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!-- Arabic image input -->
                                <div class="form-group">
                                    <label for="image_ar">@lang('file.Image Ar')</label>
                                    <input type="file" class="form-control" id="image_ar" name="image_ar">
                                    <img class="mt-4" src="{{ asset('storage/' . $template->image_ar) }}"
                                        width="70px" height="70px">
                                </div>
                                @error('image_ar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            @endif


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

<script>
    function addAdditionalItem() {
        var additionalItems = document.getElementById('additional_items');
        var newItemEn = additionalItems.children[0].cloneNode(true);
        var newItemAr = additionalItems.children[1].cloneNode(true);

        additionalItems.appendChild(newItemEn);
        additionalItems.appendChild(newItemAr);
    }
</script>
