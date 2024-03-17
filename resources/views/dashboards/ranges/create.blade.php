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
                        <span></span> @lang('file.Create')<i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5"> @lang('file.Create Rang')</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('ranges.store') }}" enctype="multipart/form-data">
                            @csrf

                            @for ($i = 1; $i <= 7; $i++)
                                <div class="row">
                                    <!-- English Title -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label
                                                for="en_title{{ $i }}">@lang('file.English Title for Item') {{ $i }}</label>
                                            <input id="en_title{{ $i }}" type="text" class="form-control"
                                                name="items[{{ $i }}][en][title]" required autofocus>
                                        </div>
                                    </div>
                                     <!-- Arabic Title -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label
                                                for="ar_title{{ $i }}">@lang('file.Arabic Title for Item') {{ $i }}</label>
                                            <input id="ar_title{{ $i }}" type="text" class="form-control"
                                                name="items[{{ $i }}][ar][title]" required>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <!-- English Text -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label
                                                for="en_text{{ $i }}">@lang('file.English Text for Item') {{ $i }}</label>
                                            <textarea id="en_text{{ $i }}" class="form-control" name="items[{{ $i }}][en][text]"
                                                rows="4" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Arabic Text -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label
                                                for="ar_text{{ $i }}">@lang('file.Arabic Text for Item'){{ $i }}</label>
                                            <textarea id="ar_text{{ $i }}" class="form-control" name="items[{{ $i }}][ar][text]"
                                                rows="4" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Image -->
                                <div class="form-group">
                                    <label
                                        for="image{{ $i }}">@lang('file.Image for Item'){{ $i }}</label>
                                    <input id="image{{ $i }}" type="file" class="form-control-file"
                                        name="items[{{ $i }}][image]" accept="image/*" required>
                                </div>
                            @endfor

                            <button type="submit" class="btn btn-primary">
                                {{ __('Submit') }}
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
