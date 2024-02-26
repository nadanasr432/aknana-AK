@extends('layouts.app')
@section('content')
    <div class="container" style="max-width: 1440px;">
        <div class="row d-flex justify-content-between">
            <div class="col-md-5">
                <img src="{{ asset('images/about us.svg') }}" class="img-fluid" alt="About Us Image">
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
                    مساويك أكنانا
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
                    أكنانا علي اتم الاستعداد <span
                        style="color: #DF8317;
                        font-family: Cairo;
                        font-size: 40px;
                        font-weight: 600;
                        line-height: 50px;
                        letter-spacing: 0em;
                        text-align: center;

                        font-family: Cairo;
                        font-size: 40px;
                        font-weight: 400;
                        line-height: 50px;
                        letter-spacing: 0em;
                        text-align: center;
                    ">
                        دائما</span>
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
                    شكرا لتواصلكم معانا سيتم التواصل معكم في أقرب وقت
                </div>
                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open Modal
</button> --}}

                @component('components.qrcode-modal')
                @endcomponent
                <form id="reservationForm" action="{{ route('reservation.store') }}" method="post">
                    @csrf
                    <div class="form-row">


                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <input disabled type="text" class="form-control text-right" id="inputLastName"
                                placeholder="موعد الدورة" id="date_of_period" name="date_of_course"
                                style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; ">

                            <img src="{{ asset('images/select-16.svg') }}" alt="Icon"
                                style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                        </div>
                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <select class="form-control text-right custom-arrow-select" id="course_id" name="course_id"
                                style="width: 100%; height: 70px; border-radius: 10px; border: 1px #F2F2F2; gap: 98px;
                                background-color:#F9F9F9; font-family: Cairo; font-size: 18px; font-weight: 400;
                                line-height: 50px; letter-spacing: 0em; text-align: center;">
                                <option value="" disabled selected>اختر الدورة</option>
                                @php
                                    $courses = App\Models\Course::all();
                                @endphp
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach

                            </select>
                            <img src="{{ asset('images/Vector (7).svg') }}" class="pr-2 custom-arrow" alt="Custom Arrow2"
                                style="margin-right: 340px;">
                            <img src="{{ asset('images/Vector (9).svg') }}" class="pr-2 custom-arrow" alt="Custom Arrow">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <input type="text" id="phone" name="phone" class="form-control text-right"
                                id="inputLastName" placeholder="رقم الجوال" pattern="^\+966[0-9]{9}$"
                                style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; "
                                required>

                            <img src="{{ asset('images/phone.svg') }}" alt="Icon"
                                style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                        </div>
                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <input type="text" id="name" name="name" class="form-control text-right"
                                id="inputLastName" placeholder="الاسم "
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
                                id="inputLastName" placeholder="البريد الالكتروني"
                                style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; ">

                            <img src="{{ asset('images/email.svg') }}" alt="Icon"
                                style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                        </div>
                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <input type="text" name="entity_name" class="form-control text-right" id="inputLastName"
                                placeholder="اسم الجهة"
                                style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; "
                                required>

                            <img src="{{ asset('images/calender (2).svg') }}" alt="Icon"
                                style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <select class="form-control text-right custom-arrow-select2" id="gender" name="gender"
                                style="width: 100%; height: 70px; border-radius: 10px; border: 1px #F2F2F2; gap: 98px;
                                        background-color:#F9F9F9; font-family: Cairo; font-size: 18px; font-weight: 400;
                                        line-height: 50px; letter-spacing: 0em; text-align: center;">

                                <option value="" disabled selected>النوع</option>
                                <option value="female">أنثى</option>
                                <option value="male">ذكر</option>

                            </select>
                            <img src="{{ asset('images/Vector (7).svg') }}" class="pr-2 custom-arrow"
                                alt="Custom Arrow2" style="margin-right: 365px;">
                            <img src="{{ asset('images/gender.svg') }}" class="pr-2 custom-arrow" alt="Custom Arrow"
                                style="margin-top: -140px; margin-left: 2px; margin-right: -5px;">
                        </div>


                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <input type="text" class="form-control text-right" id="inputLastName"
                                placeholder="المسمي الوظيفي" id="job_title" name="job_title"
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
                        width: 100%; height: 70px; padding: 0 12px 0 0; border-radius: 10px; gap: 13px; color:#FFFFFF">ارسال</button>
                </form>
                <script>
                    // Check if there is a success message in the session
                    @if (session('success'))
                        // Open the modal when there is a success message
                        $(document).ready(function() {
                            $('#myModal').modal('show');
                        });
                    @endif
                </script>


            </div>
        </div>
    </div>
@endsection
