<!-- resources/views/events/create.blade.php -->
{{-- resources/views/events/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Event') }}</div>

                    <div class="card-body">
                        <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            {{-- Title in English --}}
                            <div class="form-group">
                                <label for="title_en">{{ __('Title (English)') }}</label>
                                <input type="text" name="title[en]" id="title_en" class="form-control" required value="{{ old('title.en') }}">
                            </div>

                            {{-- Title in Arabic --}}
                            <div class="form-group">
                                <label for="title_ar">{{ __('Title (Arabic)') }}</label>
                                <input type="text" name="title[ar]" id="title_ar" class="form-control" required value="{{ old('title.ar') }}">
                            </div>

                            {{-- Text in English --}}
                            <div class="form-group">
                                <label for="text_en">{{ __('Text (English)') }}</label>
                                <textarea name="text[en]" id="text_en" class="form-control" required>{{ old('text.en') }}</textarea>
                            </div>

                            {{-- Text in Arabic --}}
                            <div class="form-group">
                                <label for="text_ar">{{ __('Text (Arabic)') }}</label>
                                <textarea name="text[ar]" id="text_ar" class="form-control" required>{{ old('text.ar') }}</textarea>
                            </div>

                            {{-- Image --}}
                            <div class="form-group">
                                <label for="image">{{ __('Image') }}</label>
                                <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Create Event') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
