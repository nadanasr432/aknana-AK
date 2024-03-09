@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> Events
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Create<i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Create Event</h4>

                        <form method="POST"action="{{ route('dashboard.event.update',$event->id) }}" enctype="multipart/form-data"
                            class="forms-sample">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title_en">Title (English)</label>
                                <input type="text" name="title[en]" id="title_en" class="form-control" required value="{{ $event->getTranslation('title', 'en')}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title_ar">Title (Arabic)</label>
                                <input type="text" name="title[ar]" id="title_ar" class="form-control" required value="{{ $event->getTranslation('title', 'ar')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text_en">Text (English)</label>
                                <textarea name="text[en]" id="text_en" class="form-control" required>{{ $event->getTranslation('text', 'en') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text_ar">Text (Arabic)</label>
                                <textarea name="text[ar]" id="text_ar" class="form-control" required>{{ $event->getTranslation('text', 'ar') }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                         <label for="image">Event Image <img src="{{ asset('app/public/' . $event->media()->first()->file_path) }}" width="40px" height="40px"></label>
                                <input type="file" name="image" id="image" class="form-control-file" accept="image/*">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
