@extends('layouts.app')

@section('content')
@if (app()->getLocale() == 'ar')
    <div class="container mb-4" style="max-width: 1300px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card"
                    style=" border-radius: 25px;
            border: 2px solid #FFFFFF;
            background: #FFFFFF;
            box-shadow: 0px 0px 10px #d8dee4;">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <h1 class="mb-4"
                                style="color: #DF8317;font-family: Cairo;
                                            font-size: 25px;
                                            font-weight: 667;
                                            line-height: 50px;
                                            letter-spacing: 0em;">

                                @lang('file.Profile')
                                <img src="{{ asset('images/Vector (1).svg') }}">
                            </h1>
                        </div>
                        <!-- Display Client Information -->
                        <div class="row mb-3">
                            {{-- <div class="col-md-4">
                                <img src="{{ asset('images/default-profile.png') }}" class="img-fluid rounded-circle" alt="Profile Picture">
                            </div> --}}
                            <div class="col-md-8">
                                <p style='color:#121743;font-size: 18px;'>
                                    <strong>
                                        <i style="color: #DF8317;"class="fas fa-user"></i>
                                        @lang('file.Name'):
                                    </strong> {{ $client->name }}</span>
                                </p>
                                <p style='color:#121743;font-size: 18px;'>
                                    <strong>
                                        <i style="color: #DF8317;"class="fas fa-envelope"></i>
                                        @lang('file.Email'):
                                    </strong> {{ $client->email }}
                                </p>
                                <p style='color:#121743;font-size: 18px;'>
                                    <strong>
                                        <i style="color: #DF8317;"class="fas fa-phone"></i>
                                        @lang('file.Phone'):
                                    </strong>
                                    {{ $client->phone }}
                                </p>
                                <p style='color:#121743;font-size: 18px;'>
                                    <strong>
                                        <i style="color: #DF8317;"class="fas fa-globe"></i>
                                        @lang('file.Country'):
                                    </strong>
                                    {{ $client->country }}
                                </p>
                                <p style='color:#121743;font-size: 18px;'>
                                    <strong>
                                        <i style="color: #DF8317;"class="fas fa-graduation-cap"></i>
                                        @lang('file.degree'):
                                    </strong>
                                    {{ $client->degree }}
                                </p>
                            </div>

                        </div>
                        @if ($client->certificate)
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 mb-4  d-flex justify-content-between">
                                            <h4 style="color: #DF8317"><i class="fas fa-certificate"
                                                    style="color: #DF8317"></i> @lang('file.Certificates')</h4>
                                            <a class="btn btn-secondary" id="editProfileBtn" href="#">
                                                <i class="fas fa-edit"></i> @lang('file.Edit')
                                            </a>
                                        </div>
                                    </div>
                                    <table class="table">
                                        <thead class="text-white" style="background-color: #121743">
                                            <tr>
                                                <th scope="col">@lang('file.Certificate Number')</th>
                                                <th scope="col">@lang('file.Trainee Name')</th>
                                                <th scope="col">@lang('file.Course Name')</th>
                                                <th scope="col"> @lang('file.Trainer Name')</th>
                                                {{-- <th scope="col">@lang('file.Email')</th> --}}
                                                <th scope="col">@lang('file.Country')</th>
                                                <th scope="col">@lang('file.Date')</th>
                                                <th scope="col"> @lang('file.Days')</th>
                                                <th scope="col">@lang('file.Action')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td style="color: #121743; font-weight:600">
                                                    {{ $client->certificate->certificate_No }}</td>
                                                <td style="color: #121743; font-weight:600">
                                                    {{ $client->certificate->trainee_Name }}</td>
                                                <td style="color: #121743; font-weight:600">
                                                    {{ $client->certificate->course_Name }}</td>
                                                <td style="color: #121743; font-weight:600">
                                                    {{ $client->certificate->trainer_Name }}</td>
                                                {{-- <td style="color: #121743; font-weight:600">
                                                    {{ $client->certificate->email }}</td> --}}
                                                <td style="color: #121743; font-weight:600">
                                                    {{ $client->certificate->country }}</td>
                                                <td style="color: #121743; font-weight:600">
                                                    {{ $client->certificate->date }}</td>
                                                <td style="color: #121743; font-weight:600">
                                                    {{ $client->certificate->days_No }}</td>
                                                <td>
                                                    <a class="btn-link btn-primary"
                                                        style="color: #DF8317; border-color: white; background-color: white; font-weight: 600;">
                                                        <i class="fas fa-download"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endif
                        <x-editClient :client=$client />
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="container mb-4" style="max-width: 1300px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card"
                style="border-radius: 25px; border: 2px solid #FFFFFF; background: #FFFFFF; box-shadow: 0px 0px 10px #d8dee4;">
                <div class="card-body" style="direction: rtl;">
                    <div class="row d-flex justify-content-center">
                        <h1 class="mb-4" style="color: #DF8317;font-family: Cairo; font-size: 25px; font-weight: 667; line-height: 50px; letter-spacing: 0em;">
                            @lang('file.Profile')
                            <img src="{{ asset('images/Vector (1).svg') }}">
                        </h1>
                    </div>
                    <!-- Display Client Information -->
                    <div class="row mb-3">
                        {{-- <div class="col-md-4">
                            <img src="{{ asset('images/default-profile.png') }}" class="img-fluid rounded-circle" alt="Profile Picture">
                        </div> --}}
                        <div class="col-md-8">
                            <p class="d-flex justify-content-start" style='color:#121743;font-size: 18px;'>
                                <strong>
                                    <i style="color: #DF8317;"class="fas fa-user"></i>
                                    @lang('file.Name'):
                                </strong> {{ $client->name }}
                            </p>
                            <p class="d-flex justify-content-start" style='color:#121743;font-size: 18px;'>
                                <strong>
                                    <i style="color: #DF8317;"class="fas fa-envelope"></i>
                                    @lang('file.Email'):
                                </strong> {{ $client->email }}
                            </p>
                            <p class="d-flex justify-content-start" style='color:#121743;font-size: 18px;'>
                                <strong>
                                    <i style="color: #DF8317;"class="fas fa-phone"></i>
                                    @lang('file.Phone'):
                                </strong>
                                {{ $client->phone }}
                            </p>
                            <p class="d-flex justify-content-start" style='color:#121743;font-size: 18px;'>
                                <strong>
                                    <i style="color: #DF8317;"class="fas fa-globe"></i>
                                    @lang('file.Country'):
                                </strong>
                                {{ $client->country }}
                            </p>
                            <p class="d-flex justify-content-start" style='color:#121743;font-size: 18px;'>
                                <strong>
                                    <i style="color: #DF8317;"class="fas fa-graduation-cap"></i>
                                    @lang('file.degree'):
                                </strong>
                                {{ $client->degree }}
                            </p>
                        </div>
                    </div>
                    @if ($client->certificate)
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12 mb-4 d-flex justify-content-between">
                                        <h4 style="color: #DF8317"><i class="fas fa-certificate" style="color: #DF8317"></i> @lang('file.Certificates')</h4>
                                        <a class="btn btn-secondary" id="editProfileBtn" href="#">
                                            <i class="fas fa-edit"></i> @lang('file.Edit')
                                        </a>
                                    </div>
                                </div>
                                <table class="table" style="text-align: start;">
                                    <thead class="text-white" style="background-color: #121743">
                                        <tr>
                                            <th scope="col">@lang('file.Certificate Number')</th>
                                            <th scope="col">@lang('file.Trainee Name')</th>
                                            <th scope="col">@lang('file.Course Name')</th>
                                            <th scope="col"> @lang('file.Trainer Name')</th>
                                            {{-- <th scope="col">@lang('file.Email')</th> --}}
                                            <th scope="col">@lang('file.Country')</th>
                                            <th scope="col">@lang('file.Date')</th>
                                            <th scope="col"> @lang('file.Days')</th>
                                            <th scope="col">@lang('file.Action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="color: #121743; font-weight:600">
                                                {{ $client->certificate->certificate_No }}</td>
                                            <td style="color: #121743; font-weight:600">
                                                {{ $client->certificate->trainee_Name }}</td>
                                            <td style="color: #121743; font-weight:600">
                                                {{ $client->certificate->course_Name }}</td>
                                            <td style="color: #121743; font-weight:600">
                                                {{ $client->certificate->trainer_Name }}</td>
                                            {{-- <td style="color: #121743; font-weight:600">
                                                {{ $client->certificate->email }}</td> --}}
                                            <td style="color: #121743; font-weight:600">
                                                {{ $client->certificate->country }}</td>
                                            <td style="color: #121743; font-weight:600">
                                                {{ $client->certificate->date }}</td>
                                            <td style="color: #121743; font-weight:600">
                                                {{ $client->certificate->days_No }}</td>
                                            <td>
                                                <a class="btn-link btn-primary"
                                                    style="color: #DF8317; border-color: white; background-color: white; font-weight: 600;">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    <x-editClient :client=$client />
                </div>
            </div>
        </div>
    </div>
</div>

    @endif
    <script>
        $(document).ready(function() {
            $('#editProfileBtn').click(function() {
                $('#editProfileModal').modal('show');
            });
        });
    </script>
@endsection
