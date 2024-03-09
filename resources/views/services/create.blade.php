{{-- resources/views/services/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Service') }}</div>

                    <div class="card-body">
                        <form action="{{ route('services.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            {{-- Title in English --}}
                            <div class="form-group">
                                <label for="title_en">{{ __('Title (English)') }}</label>
                                <input type="text" name="title[en]" id="title_en" class="form-control" required>
                            </div>

                            {{-- Title in Arabic --}}
                            <div class="form-group">
                                <label for="title_ar">{{ __('Title (Arabic)') }}</label>
                                <input type="text" name="title[ar]" id="title_ar" class="form-control" required>
                            </div>

                            {{-- Description in English --}}
                            <div class="form-group">
                                <label for="description_en">{{ __('Description (English)') }}</label>
                                <textarea name="description[en]" id="description_en" class="form-control" required></textarea>
                            </div>

                            {{-- Description in Arabic --}}
                            <div class="form-group">
                                <label for="description_ar">{{ __('Description (Arabic)') }}</label>
                                <textarea name="description[ar]" id="description_ar" class="form-control" required></textarea>
                            </div>

                            {{-- Images --}}
                            <div class="form-group">
                                <label for="images">{{ __('Images') }}</label>
                                <input type="file" name="images[]" id="images" class="form-control-file" multiple accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Create Service') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
