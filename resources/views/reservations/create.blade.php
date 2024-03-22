@extends('layouts.app')
@section('content')
    <div class="container" style="max-width: 1440px;">
        @if (app()->getLocale() == 'ar')
          @foreach ($temp_reservations as $template)
            <div class="row d-flex justify-content-between">

                <div class="col-md-5">
                    <img src="{{  asset('storage/'. $template->image )}}"width="585px" height="578px" class="img-fluid" alt="About Us Image">
                </div>
                <div class="col-md-7 align-content-end text-left">
                    <div class="text-left  mt-2"
                        style="font-family: Cairo;
                        font-size: 25px;
                        font-weight: 667;
                        line-height: 50px;
                        letter-spacing: 0em;
                        text-align: center;
                        color:#DF8317;
                    ">

                       {{ $template->getTranslation('main_title', 'en') }}
                        <img src="{{ asset('images/Vector (1).svg') }}">
                    </div>
                    <div class="text-left  mt-3"
                        style="font-family: Cairo;
                    font-size: 40px;
                    font-weight: 400;
                    line-height: 50px;
                    letter-spacing: 0em;
                    text-align: center;

                    color:#121743;
                    ">
                        @php
                                    $phrase = $template->getTranslation('main_sub_title', 'en');
                                    $words = explode(' ', $phrase);
                                    $last_word = array_pop($words);
                                    $last_word_clean = rtrim($last_word, '?!.,;:');
                                    $phrase_without_last = implode(' ', $words);
                                @endphp

                                {{ $phrase_without_last }}
                                <span style="color: #DF8317;">{{ $last_word_clean }}</span>
                    </div>
                    <div class="text-left  mt-3 mb-3"
                        style="font-family: Almarai;
                    font-size: 25px;
                    font-weight: 400;
                    line-height: 50px;
                    letter-spacing: 0em;
                    text-align: left;
                    color:#7B7B7B;
                    ">
                         {{ $template->getTranslation('main_text', 'en') }}
                    </div>
                    <x-qrcode-modal />

                    <form id="reservationForm" action="{{ route('reservation.store') }}" method="post">
                        @csrf
                        <div class="form-row">


                            <div class="form-group mb-5 col-md-6 ml-auto text-left">
                                <input disabled type="text" class="form-control text-left" id="inputDateOfCourse"
                                    placeholder='@lang('file.Course date')' name="date_of_course"
                                    style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                padding-left: 31px;">
                                <img src="{{ asset('images/select-16.svg') }}" alt="Icon"
                                    style="width: 20px; height: 20px;margin-top: -100px;margin-left: 5px;">
                            </div>

                            <div class="form-group mb-5 col-md-6 ml-auto text-left">
                                <select class="form-control text-left custom-arrow-select" id="course_id" name="course_id"
                                    style="width: 100%; height: 70px; border-radius: 10px; border: 1px #F2F2F2; gap: 98px;
                    background-color:#F9F9F9; font-family: Cairo; font-size: 18px; font-weight: 400;
                    line-height: 50px; letter-spacing: 0em; text-align: center; padding-left: 31px;">

                                    <option value="" disabled selected>@lang('file.Select the course') </option>

                                    @foreach ($availableCourses as $course)
                                        <option value="{{ $course->id }}" data-date="{{ $course->date_of_course }}"
                                            {{ request('course_id') == $course->id ? 'selected' : '' }}>
                                            {{ $course->getTranslation('name', 'en') }}</option>
                                    @endforeach

                                </select>


                                <img src="{{ asset('images/Vector (9).svg') }}" class="pl-2 custom-arrow"
                                    alt="Custom Arrow">
                                <img src="{{ asset('images/Vector (7).svg') }}" class="pr-2 custom-arrow"
                                    alt="Custom Arrow2" style="margin-left: 340px;">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group mb-5 col-md-6 ml-auto text-left">
                                <input type="text" id="phone" name="phone" class="form-control text-left"
                                    id="inputLastName" placeholder='@lang('file.Phone')' pattern="^\+966[0-9]{9}$"
                                    style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-left: 31px; "
                                    required>

                                <img src="{{ asset('images/phone.svg') }}" alt="Icon"
                                    style="width: 20px; height: 20px;margin-top: -100px;margin-left: 5px;">
                            </div>
                            <div class="form-group mb-5 col-md-6 ml-auto text-left">
                                <input type="text" id="name" name="name" class="form-control text-left"
                                    id="inputLastName" placeholder='@lang('file.Name')'
                                    style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-left: 31px; "
                                    required>

                                <img src="{{ asset('images/Vector (10).svg') }}" alt="Icon"
                                    style="width: 20px; height: 20px;margin-top: -100px;margin-left: 5px;">
                            </div>


                        </div>
                        <div class="form-row">
                            <div class="form-group mb-5 col-md-6 ml-auto text-left">
                                <input type="email" id="email" name="email" class="form-control text-left"
                                    id="inputLastName" placeholder='@lang('file.E-mail')'
                                    style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-left: 31px; ">

                                <img src="{{ asset('images/email.svg') }}" alt="Icon"
                                    style="width: 20px; height: 20px;margin-top: -100px;margin-left: 5px;">
                            </div>
                            <div class="form-group mb-5 col-md-6 ml-auto text-left">
                                <input type="text" name="entity_name" class="form-control text-left" id="inputLastName"
                                    placeholder='@lang('file.Entity name')'
                                    style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-left: 31px; "
                                    required>

                                <img src="{{ asset('images/calender (2).svg') }}" alt="Icon"
                                    style="width: 20px; height: 20px;margin-top: -100px;margin-left: 5px;">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group mb-5 col-md-6 ml-auto text-left">
                                <select class="form-control text-left custom-arrow-select2" id="gender" name="gender"
                                    style="width: 100%; height: 70px; border-radius: 10px; border: 1px #F2F2F2; gap: 98px;
                                background-color:#F9F9F9; font-family: Cairo; font-size: 18px; font-weight: 400;
                                line-height: 50px; letter-spacing: 0em; text-align: center;padding-left: 31px;">
                                    <option value="" disabled selected>@lang('file.Gender')</option>
                                </select>


                                <img src="{{ asset('images/gender.svg') }}" class="pr-l custom-arrow" alt="Custom Arrow"
                                    style="margin-top: -100px; margin-left: 2px;">
                                <img src="{{ asset('images/Vector (7).svg') }}" class="pr-2 custom-arrow"
                                    alt="Custom Arrow2" style="margin-left: 340px;">
                            </div>


                            <div class="form-group mb-5 col-md-6 ml-auto text-left">
                                <input type="text" class="form-control text-left" id="inputLastName"
                                    placeholder='@lang('file.Job title')' id="job_title" name="job_title"
                                    style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-left: 31px; ">

                                <img src="{{ asset('images/icons (2).svg') }}" alt="Icon"
                                    style="width: 20px; height: 20px;margin-top: -100px;margin-left: 5px;">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block"
                            style="font-family: Cairo;
                        font-size: 22px;
                        font-weight: 400;
                        line-height: 50px;
                        letter-spacing: 0em;
                        text-align: center;
                        width: 100%; height: 70px; padding: 0 12px 0 0; border-radius: 10px; gap: 13px; color:#FFFFFF">@lang('file.Submit')</button>
                    </form>
                </div>
            </div>
            @endforeach
        @else
           @foreach ($temp_reservations as $template)
            <div class="row d-flex justify-content-between">


                <div class="col-md-5">
                    <img src="{{ asset('storage/'.  $template->image_ar )}}"width="585px" height="578px" class="img-fluid" alt="About Us Image">
                </div>
                <div class="col-md-7 align-content-end text-right">
                    <div class="text-right  mt-2"
                        style="font-family: Cairo;
                        font-size: 25px;
                        font-weight: 667;
                        line-height: 50px;
                        letter-spacing: 0em;
                        text-align: center;
                        color:#DF8317;
                    ">
                        <img src="{{ asset('images/Vector (1).svg') }}">
                       {{ $template->getTranslation('main_title', 'ar') }}
                    </div>
                    <div class="text-right  mt-3"
                        style="font-family: Cairo;
                    font-size: 40px;
                    font-weight: 400;
                    line-height: 50px;
                    letter-spacing: 0em;
                    text-align: center;

                    color:#121743;
                    ">
                         @php
                                    $phrase = $template->getTranslation('main_sub_title', 'ar');
                                    $words = explode(' ', $phrase);
                                    $last_word = array_pop($words);
                                    $last_word_clean = rtrim($last_word, '?!.,;:');
                                    $phrase_without_last = implode(' ', $words);
                                @endphp

                                {{ $phrase_without_last }}
                                <span style="color: #DF8317;">{{ $last_word_clean }}</span>
                    </div>
                    <div class="text-right  mt-3 mb-3"
                        style="font-family: Almarai;
                    font-size: 25px;
                    font-weight: 400;
                    line-height: 50px;
                    letter-spacing: 0em;
                    text-align: right;
                    color:#7B7B7B;
                    ">
                         {{ $template->getTranslation('main_text', 'ar') }}
                    </div>
                    <x-qrcode-modal />
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form id="reservationForm" action="{{ route('reservation.store') }}" method="post">
                        @csrf
                        <div class="form-row">


                            <div class="form-group mb-5 col-md-6 ml-auto text-right">
                                <input disabled type="text" class="form-control text-right" id="inputDateOfCourse"
                                    placeholder='@lang('file.Course date')' name="date_of_course"
                                    style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                padding-right: 31px;">
                                <img src="{{ asset('images/select-16.svg') }}" alt="Icon"
                                    style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                            </div>

                            <div class="form-group mb-5 col-md-6 ml-auto text-right">
                                <select class="form-control text-right custom-arrow-select" id="course_id"
                                    name="course_id"
                                    style="width: 100%; height: 70px; border-radius: 10px; border: 1px #F2F2F2; gap: 98px;
                    background-color:#F9F9F9; font-family: Cairo; font-size: 18px; font-weight: 400;
                    line-height: 50px; letter-spacing: 0em; text-align: center;">

                                    <option value="" disabled selected>@lang('file.Select the course') </option>

                                    @foreach ($availableCourses as $course)
                                        @if ($course->status == 'approved')
                                            <option value="{{ $course->id }}"
                                                data-date="{{ $course->date_of_course }}"
                                                {{ request('course_id') == $course->id ? 'selected' : '' }}>
                                                {{ $course->getTranslation('name', 'ar') }}</option>
                                        @endif
                                    @endforeach

                                </select>

                                <img src="{{ asset('images/Vector (7).svg') }}" class="pr-2 custom-arrow"
                                    alt="Custom Arrow2" style="margin-right: 340px;">
                                <img src="{{ asset('images/Vector (9).svg') }}" class="pr-2 custom-arrow"
                                    alt="Custom Arrow">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group mb-5 col-md-6 ml-auto text-right">
                                <input type="text" id="phone" name="phone" class="form-control text-right"
                                    id="inputLastName" placeholder='@lang('file.Phone')' pattern="^\+966[0-9]{9}$"
                                    style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; "
                                    required>

                                <img src="{{ asset('images/phone.svg') }}" alt="Icon"
                                    style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                            </div>
                            <div class="form-group mb-5 col-md-6 ml-auto text-right">
                                <input type="text" id="name" name="name" class="form-control text-right"
                                    id="inputLastName" placeholder='@lang('file.Name')'
                                    style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; "
                                    required>

                                <img src="{{ asset('images/Vector (10).svg') }}" alt="Icon"
                                    style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                            </div>


                        </div>
                        <div class="form-row">
                            <div class="form-group mb-5 col-md-6 ml-auto text-right">
                                <input type="email" id="email" name="email" class="form-control text-right"
                                    id="inputLastName" placeholder='@lang('file.E-mail')'
                                    style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; ">

                                <img src="{{ asset('images/email.svg') }}" alt="Icon"
                                    style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                            </div>
                            <div class="form-group mb-5 col-md-6 ml-auto text-right">
                                <input type="text" name="entity_name" class="form-control text-right"
                                    id="inputLastName" placeholder='@lang('file.Entity name')'
                                    style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; "
                                    required>

                                <img src="{{ asset('images/calender (2).svg') }}" alt="Icon"
                                    style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group mb-5 col-md-6 ml-auto text-right">
                                <select class="form-control text-right custom-arrow-select2" id="gender"
                                    name="gender"
                                    style="width: 100%; height: 70px; border-radius: 10px; border: 1px #F2F2F2; gap: 98px;
                                background-color:#F9F9F9; font-family: Cairo; font-size: 18px; font-weight: 400;
                                line-height: 50px; letter-spacing: 0em; text-align: center;">
                                    <option value="" disabled selected>@lang('file.Gender')</option>
                                </select>

                                <img src="{{ asset('images/Vector (7).svg') }}" class="pr-2 custom-arrow"
                                    alt="Custom Arrow2" style="margin-right: 365px;">
                                <img src="{{ asset('images/gender.svg') }}" class="pr-2 custom-arrow" alt="Custom Arrow"
                                    style="margin-top: -140px; margin-left: 2px; margin-right: -5px;">
                            </div>


                            <div class="form-group mb-5 col-md-6 ml-auto text-right">
                                <input type="text" class="form-control text-right" id="inputLastName"
                                    placeholder='@lang('file.Job title')' id="job_title" name="job_title"
                                    style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; ">

                                <img src="{{ asset('images/icons (2).svg') }}" alt="Icon"
                                    style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block"
                            style="font-family: Cairo;
                        font-size: 22px;
                        font-weight: 400;
                        line-height: 50px;
                        letter-spacing: 0em;
                        text-align: center;
                        width: 100%; height: 70px; padding: 0 12px 0 0; border-radius: 10px; gap: 13px; color:#FFFFFF">@lang('file.Submit')</button>
                    </form>
                    {{-- <script>
                    $(document).ready(function() {
                        // Check if there is a success message and QR code data
                        @if (session('success') && session('qrCodeData'))
                            // Open the QR code modal when there is a success message and QR code data
                            $(document).ready(function() {
                                $('#myModal1').modal('show');
                            });
                        @endif
                    });
                </script> --}}


                </div>
            </div>
            @endforeach
        @endif
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
@endsection
