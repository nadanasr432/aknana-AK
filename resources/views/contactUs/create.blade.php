@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center mt-5" style="max-width: 1440px;">

        <div class="card d-flex justify-content-center"
            style="width: 935px;
            height: 100%;
             
                border-radius: 25px;
                border: 2px ;
                background: #FFFFFF;
                ">
            <img src="{{ asset('images/Frame.svg') }}" class="img-fluid responsive-image"
                style="position: absolute; top: 0; left: 0;">


            <div class="card-body ">

                <form action="{{ route('contactUs.store') }}" method="POST">
                    @csrf
                    <div class="form-row justify-content-center mt-3">
                        <div class="form-group mb-4 col-md-10 text-right">

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
                                تواصل معانا
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
                            <div class="text-right  mt-4 mb-2"
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
                        </div>
                    </div>
                    <!-- First line with one input field -->
                    <div class="form-row justify-content-center">
                        <div class="form-group mb-4 col-md-10 text-right">
                            <input type="text" name="name" class="form-control text-right" id="inputLastName"
                                placeholder="الاسم "
                                style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                        padding-right: 31px; ">

                            <img src="{{ asset('images/Vector (10).svg') }}" alt="Icon"
                                style="width: 20px; height: 20px; margin-top: -100px; margin-right: 5px;">
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="form-group mb-4 col-md-5 text-right">
                            <input type="email" name="email" class="form-control text-right" id="inputLastName"
                                placeholder="البريد الالكتروني"
                                style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                        padding-right: 31px; ">

                            <img src="{{ asset('images/email.svg') }}" alt="Icon"
                                style="width: 20px; height: 20px; margin-top: -100px; margin-right: 5px;">
                        </div>
                        <div class="form-group mb-4 col-md-5 text-right">
                            <input type="tel" name="phone" class="form-control text-right" id="inputLastName"
                                placeholder="رقم الجوال"
                                style="background-color: #F9F9F9; height: 70px; border-radius: 10px; border: 1px solid #F2F2F2; gap: 98px;
                                    padding-right: 31px; "
                                pattern="^\+966[0-9]{9}$"
                                title="Please enter a valid Saudi Arabia phone number starting with +966">

                            <img src="{{ asset('images/phone.svg') }}" alt="Icon"
                                style="width: 20px; height: 20px; margin-top: -100px; margin-right: 5px;">
                        </div>

                    </div>

                    <!-- Third line with one textarea -->
                    <div class="form-row justify-content-center">
                        <div class="form-group mb-4 col-md-10 text-right">
                            <textarea name="text" class="form-control text-right" id="textareaField" rows="4" placeholder="رسالتك"
                                style="height: 247px; padding: 0px 12px 0px 0px; border-radius: 10px; border: 1px #F9F9F9 solid; gap: 13px; background: #F9F9F9; color: #555;">
                            </textarea>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="form-row justify-content-center">
                        <div class="col-md-10 mt-3 "> <!-- Adjust the column size based on your layout -->
                            <button type="submit" class="btn btn-primary btn-block"
                                style="width: 100%; border-radius: 10px;height:70px;color:#FFFFFF">ارسال</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>

    </div>
@endsection
