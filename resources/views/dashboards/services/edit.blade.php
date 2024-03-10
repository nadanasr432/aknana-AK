@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> Services
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Edit<i class="mdi mdi-library icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-5">Edit Service</h4>

                        <form method="POST"action="{{ route('dashboard.service.update',$service->id) }}" enctype="multipart/form-data"
                            class="forms-sample">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title_en">Title (English)</label>
                                        <input type="text" name="title[en]" id="title_en" class="form-control" value="{{ $service->getTranslation('title', 'en') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title_ar">Title (Arabic)</label>
                                        <input type="text" name="title[ar]" id="title_ar" class="form-control" value="{{ $service->getTranslation('title', 'ar') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description_en">Description (English)</label>
                                        <textarea name="description[en]" value="{{ $service->getTranslation('description', 'en') }}" id="description_en" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description_ar">Description (Arabic)</label>
                                        <textarea name="description[ar]" value="{{ $service->getTranslation('description', 'ar') }}" id="description_ar" class="form-control" required></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="image">Service Image <img src="{{ asset('storage/' . $service->media()->first()->file_path) }}" width="40px" height="40px"
                                               ></td></label>
                                         <input type="file" name="images[]" id="images" class="form-control-file" multiple accept="image/*">
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