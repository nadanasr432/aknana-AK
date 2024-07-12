@extends('layouts.dashboard')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-library"></i>
                </span> @lang('file.Certificates')
            </h3>
                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('certificates.import') }}" class="btn btn-gradient-primary me-2">
                            <i class="mdi mdi-plus"></i> @lang('file.Import Certificates')
                        </a>
                        <form action="{{ route('certificates.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file">Choose Excel File</label>
                                <input type="file" class="form-control" name="file" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body" style="overflow-x: auto ;">
                        <h4 class="card-title"> @lang('file.Certificates Table')</h4>
                        </p>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>@lang('file.Certificate Number')</th>
                                    <th>@lang('file.Trainee Name')</th>
                                    <th>@lang('file.Course Name')</th>
                                    <th> @lang('file.Trainer Name')</th>
                                    <th>@lang('file.Email')</th>
                                    <th>@lang('file.Country')</th>
                                    <th>@lang('file.Date')</th>
                                    <th> @lang('file.Days')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificates as $certificate)
                                    <tr>
                                        <td>{{ $certificate->certificate_No }}</td>
                                        <td>{{ $certificate->trainee_Name }}</td>
                                        <td>{{ $certificate->course_Name }}</td>
                                        <td>{{ $certificate->trainer_Name }}</td>
                                        <td>{{ $certificate->email }}</td>
                                        <td>{{ $certificate->country }}</td>
                                        <td>{{ $certificate->date }}</td>
                                        <td>{{ $certificate->days_No }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
