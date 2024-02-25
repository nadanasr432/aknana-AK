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
                <form action="/contactus" method="post">
                    {{ csrf_field() }}
                    <div class="form-row">


                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <input type="text" class="form-control text-right" id="inputLastName"
                                placeholder="موعد الدورة"
                                style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; ">

                            <img src="{{ asset('images/select-16.svg') }}" alt="Icon"
                                style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                        </div>
                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <select class="form-control text-right custom-arrow-select" id="inputFirstName"
                                style="width: 100%;
                                    height: 70px;
                                    border-radius: 10px;
                                    border: 1px #F2F2F2;
                                    gap: 98px;
                                    background-color:#F9F9F9;
                                    font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 400;
                                    line-height: 50px;
                                    letter-spacing: 0em;
                                    text-align: center;

                                    ">
                                <option value="" disabled selected>اختر الدورة</option>
                                <option value="course1">Course 1</option>
                                <option value="course2">Course 2</option>
                                <option value="course3">Course 3</option>
                            </select>
                            <img src="{{ asset('images/Vector (7).svg') }}" class="pr-2 custom-arrow" alt="Custom Arrow2"
                                style="  margin-right: 340px;">
                            <img src="{{ asset('images/Vector (9).svg') }}" class="pr-2 custom-arrow" alt="Custom Arrow">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <input type="text" class="form-control text-right" id="inputLastName"
                                placeholder="رقم الجوال"
                                style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; ">

                            <img src="{{ asset('images/phone.svg') }}" alt="Icon"
                                style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                        </div>
                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <input type="text" class="form-control text-right" id="inputLastName" placeholder="الاسم "
                                style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; ">

                            <img src="{{ asset('images/Vector (10).svg') }}" alt="Icon"
                                style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                        </div>


                    </div>
                    <div class="form-row">
                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <input type="text" class="form-control text-right" id="inputLastName"
                                placeholder="البريد الالكتروني"
                                style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; ">

                            <img src="{{ asset('images/email.svg') }}" alt="Icon"
                                style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                        </div>
                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <input type="text" class="form-control text-right" id="inputLastName" placeholder="اسم الجهة"
                                style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                       padding-right: 31px; ">

                            <img src="{{ asset('images/calender (2).svg') }}" alt="Icon"
                                style="width: 20px; height: 20px;margin-top: -100px;margin-right: 5px;">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <select class="form-control text-right custom-arrow-select2" id="inputFirstName"
                                style="width: 100%;
                                    height: 70px;
                                    border-radius: 10px;
                                    border: 1px #F2F2F2;
                                    gap: 98px;
                                    background-color:#F9F9F9;
                                    font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 400;
                                    line-height: 50px;
                                    letter-spacing: 0em;
                                    text-align: center;

                                    ">
                                <option value="" disabled selected> النوع</option>
                                <option value="course1">انثي</option>
                                <option value="course2">ذكر</option>
                            </select>
                            <img src="{{ asset('images/Vector (7).svg') }}" class="pr-2 custom-arrow" alt="Custom Arrow2"
                                style="  margin-right: 365px;">
                            <img src="{{ asset('images/gender.svg') }}" class="pr-2 custom-arrow" alt="Custom Arrow"
                                style="margin-top: -140px; margin-left:2px;margin-right: -5px;">
                        </div>

                        <div class="form-group mb-5 col-md-6 ml-auto text-right">
                            <input type="text" class="form-control text-right" id="inputLastName"
                                placeholder="المسمي الوظيفي"
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

            </div>
        </div>
    </div>
@endsection
