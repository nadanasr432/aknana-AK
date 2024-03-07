<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyOB4Ml3r6DIj5e7n9O3PjUbo+qDFFUw" crossorigin="anonymous">

    <title>AKNANA</title>
    <link rel="icon" href="{{ asset('images/logo 4 (1).png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        #home a {
            color: #FFE4C5;

        }


        #home a::after {
            content: '';
            display: block;
            height: 2px;
            width: 75%;
            margin-top: 3px;
            background-color: #FFE4C5;

            @if (app()->getLocale() == 'ar')
                margin-right: 10px;
            @else
                margin-left: 15px;
            @endif
        }




        #home a:hover {
            color: #FFE4C5;

        }

        .navbar-nav .nav-item.active a:hover {
            color: #FFE4C5;

        }


        #home a:hover::after {
            background-color: #FFE4C5;
        }

        .responsive-text {
            font-family: Cairo;
            font-size: 22px;
            font-weight: 400;
            line-height: 38px;
            letter-spacing: 0em;
            text-align: right;
            color: #222751;
        }

        @media (max-width: 767px) {
            @keyframes slideFromTop {
                from {
                    transform: translateY(-100%);
                    opacity: 0;
                }

                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }

                to {
                    opacity: 1;
                }
            }


            .service_text2 {
                animation: slideFromLeft 1.5s ease-out;
            }

            #textd {
                animation: slideFromLeft 2s ease-out;
            }

            .service_text3 {
                animation: slideFromLeft 2.5s ease-out;
            }

            .he .col-md-1 img {
                animation: fadeIn 1.5s ease-out 1.5s;
            }


            .he .col-md-2 p {
                animation: fadeIn 1.5s;
            }

            .responsive-text {
                font-size: 18px;
                line-height: 32px;
            }



            .features .col-md-6 {
                flex: 1;
                margin-left: 0;
                width: 100%;
            }

            .features .row.gap-6 .col-md-6 .card {
                margin-left: -15px;

                margin-right: -15px;
                overflow-x: auto;

            }

            .features .col-md-6 .card {
                margin-left: 15px;
                margin-bottom: 15px;

            }

            .card {
                max-width: 210px;
                height: auto;
            }

            .features .center.pr-0.text-right {
                margin-top: 10px;
            }

            .features .d-flex.justify-content-end {
                gap: 30px;
            }

            .the_range .container [style*="font-size: 25px;"] {
                font-size: 16px !important;

                line-height: 16px !important;

            }

            .the_range .container [style*="gap: 50px;"] {
                gap: 0px !important;

            }

            .the_range .container [style*="font-size: 18px;"] {
                font-size: 12px !important;

                line-height: 15px !important;

            }


            .service_text1 {
                font-size: 18px !important;

                line-height: 20px !important;

            }

            .service_text2 {
                font-size: 25px !important;
                margin-top: 10px;

                line-height: 20px !important;

            }

            .service_text3 {
                font-size: 25px !important;
                margin-top: 20px;

                line-height: 20px !important;

            }

            .col-md-1 {
                display: block !important;
                margin-top: 90px
            }

            .col-md-2 {
                display: inline-block !important;
            }

            .custom-image-style {
                max-width: 80%;

            }

            .next {
                margin-top: 8.5rem !important;
            }

            .prev {
                margin-bottom: 12rem !important;
            }
        }

        body {
            overflow: auto;
            overflow-x: hidden;

            direction: @if (app()->getLocale() == 'ar')
                rtl
            @else
                ltr
            @endif
            ;

        }

        &::-webkit-scrollbar {
            width: 1px;
        }

        &::-webkit-scrollbar-thumb {
            background-color: #000000;
        }

        body::-webkit-scrollbar {
            width: 1px;
        }

        body::-webkit-scrollbar-thumb {
            background-color: #000000;
            width: 1px;
        }


        .fade-in-animation {
            animation: fadeIn 2s ease;

        }

        @media (max-width: 767px) {
            .navbar-nav {
                background-color: #121743;
                padding: 20px;
                text-align: left;
                display: inline-block;
                margin-right: 10px;
                font-size: 14px;
            }

            body {

                overflow-x: hidden;
                width: 100%

            }

            #home a::after {
                content: '';
                display: block;
                height: 2px;
                width: 75%;
                margin-top: 3px;
                background-color: #FFE4C5;

                @if (app()->getLocale() == 'ar')
                    margin-right: 10px;
                @else
                    margin-left: 15px;
                @endif
            }



        }

        @media (max-width: 767px) {
            section.head {
                position: relative;
                width: 100%;
                height: 60vh;
                display: flex;
                justify-content: center;
                display: flex;
                align-items: center;
                overflow: hidden;
                margin-top: -10px;
                margin-bottom: 5%;
            }

            body {
                overflow: auto;
                overflow-x: hidden;
            }

            &::-webkit-scrollbar {
                width: 1px;
            }

            &::-webkit-scrollbar-thumb {
                background-color: #000000;
            }

            body::-webkit-scrollbar {
                width: 1px;
            }

            body::-webkit-scrollbar-thumb {
                background-color: #000000;
                width: 1px;
            }

            .content-text1 {
                font-size: 12px !important;

                line-height: 20px !important;

            }

            .content-text2 {
                margin-bottom: 30px;
                font-size: 25px !important;

                line-height: 20px !important;

            }

            .content-text3 {

                font-size: 18px !important;

                line-height: 20px !important;

            }

            #tex_2 {
                font-size: 25px;
            }

            #contactButton {
                width: 150px !important;
                height: 40px !important;
                font-size: 18px !important;
                line-height: 26px !important;
            }


        }

        section.head::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            background-image: url('{{ asset('images/Mask Group.svg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 0 0 100% 100%/0 0 100% 100%;
            transform: scaleX(1.5);
        }




        footer {
            background-image: url('{{ asset('images/footer.svg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            padding-top: 90px;
            padding-bottom: 50px;

        }

        /* Add this CSS to your existing styles or in a separate stylesheet */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 5px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active-dot {
            background-color: #717171;
        }
    </style>
</head>

<body>

    <section class="head" id="head">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{ asset('images/list.png') }}" width="25px" height="25px">

            </a>
            <button id="contactButton2" class="btn btn-primary">
                {{ __('file.contact_us') }}
            </button>

            <form method="post" action="{{ route('language.switch') }}" id="languageForm">
                @csrf
                <button type="button" onclick="toggleLanguage()" class="btn btn-link text-white">
                    {{ app()->getLocale() == 'en' ? 'En' : 'Ar' }}
                    <img src="{{ asset('images/' . (app()->getLocale() == 'en' ? 'united-Kingdom' : 'saudi-arabia') . '.png') }}"
                        width="20px" height="20px">
                </button>
                <input type="hidden" name="locale" id="localeInput" value="{{ app()->getLocale() }}">
            </form>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav" style="gap: 30px;">
                    <li class="nav-item active">
                        <a class="nav-link no-reload" href="#events">{{ __('file.events') }}</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link no-reload" href="#programs">{{ __('file.programs') }}</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link no-reload" href="#projects">{{ __('file.projects') }}</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#range">{{ __('file.range') }}</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#service">{{ __('file.services') }} <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#2030">{{ __('file.2030') }}</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#US">{{ __('file.About_Us') }}</a>
                    </li>
                    <li class="nav-item active" id="home">
                        <a class="nav-link" href="#head">{{ __('file.home') }}</a>
                    </li>
                </ul>
            </div>

            <!-- Logo at the end -->
            <div class="navbar-brand">
                <img src="{{ asset('images/logo 4.svg') }}">
            </div>

        </nav>
        <div class="content" id="content">
            @if (app()->getLocale() == 'en')
                <p class="content-text2"
                    style="font-family: Cairo;
                font-size: 45px;
                font-weight: 600;
                line-height: 74px;
                letter-spacing: 0.02em;
                text-align: center;
                color:#FFFFFF;
                ">
                    {{ __('file.start_your_journey') }} </p>
            @else
                <p class="content-text2"
                    style="font-family: Cairo;
                font-size: 41px;
                font-weight: 600;
                line-height: 74px;
                letter-spacing: 0.02em;
                text-align: center;
                color:#FFFFFF;
                ">
                    {{ __('file.start_your_journey') }} </p>
            @endif
            <p class="head-text mb-0 content-text1"
                style="font-family: Cairo;
                    font-size: 20px;
                    font-weight: 400;
                    line-height: 36px;
                    letter-spacing: 0.02em;
                    text-align: center;
                    color:rgba(255, 255, 255, 0.69);
                    ">
                {{ __('file.with_aknan') }}
            </p>
            <p class="head-text mb-0 content-text1"
                style="font-family: Cairo;
                    font-size: 20px;
                    font-weight: 400;
                    line-height: 36px;
                    letter-spacing: 0.02em;
                    text-align: center;
                    color:rgba(255, 255, 255, 0.69);

                    ">
                {{ __('file.innovative_solutions') }}
            </p>
            <p id="textContent" class="head-text mb-0 content-text1 "
                style="font-family: Cairo;
                    font-size: 20px;
                    font-weight: 400;
                    line-height: 36px;
                    letter-spacing: 0.02em;
                    text-align: center;
                    color:rgba(255, 255, 255, 0.69);

                    ">
                {{ __('file.company_overseen') }}
            </p>
            <div class="d-flex justify-content-center align-items-between mt-5 ">
                @if (app()->getLocale() == 'en')
                    <a href="" class="d-flex align-items-center pr-4  " id="contactButton2">
                        <p class="pr-2 content-text3"
                            style="font-family: Cairo;
                        font-size: 25px;
                        font-weight: 600;
                        line-height: 30px;
                        letter-spacing: 0em;
                        color:#FFFFFFB0;
                        margin: 0;
                        ">
                            {{ __('file.about_us') }} </p>
                        <img src="{{ asset('images/video_big.svg') }}" style="margin-right: 10px;">
                    </a>
                @else
                    <a href="" class="d-flex align-items-center pr-4 pl-4  " id="contactButton2">
                        <p class="pr-2 content-text3"
                            style="font-family: Cairo;
                        font-size: 25px;
                        font-weight: 600;
                        line-height: 30px;
                        letter-spacing: 0em;
                        color:#FFFFFFB0;
                        margin: 0;
                        ">
                            {{ __('file.about_us') }} </p>
                        <img src="{{ asset('images/video_big.svg') }}" style="margin-right: 10px;">
                    </a>
                @endif
                <button id="contactButton" class="btn btn-primary "
                    style="width:193px;height:50px;font-family: Cairo;
                        font-size: 22px;
                        font-weight: 600;
                        line-height: 30px;
                        letter-spacing: 0em;
                        color:#FFFFFF;
                    ">
                    {{ __('file.contact_us') }}
                </button>
            </div>

        </div>
    </section>
    <div>
        @yield('content')
    </div>
    <!-- Footer -->
    <footer class="bg-body-tertiary">
        <!-- Grid container -->
        @if (app()->getLocale() == 'ar')
            <div class="container" style="margin-top:60px">
                <div class="row" style="gap: 55px">
                    <!--Grid column-->
                    <div class="col-lg-2 col-md-3 mb-4 mb-md-0 text-left">
                        <p class="text-left mb-2"
                            style="font-family: Poppins;
                        font-size: 16px;
                        font-weight: 500;
                        line-height: 13px;
                        letter-spacing: 0em;
                        text-align: left;
                        color: #FFFFFF;
                        ">
                            @lang('file.To contact us')
                        </p>
                        <span class="d-flex justify-content-end mb-2">
                            <img src="{{ asset('images/zigzag.png') }}">
                            <img src="{{ asset('images/zigzag.png') }}">
                        </span>
                        <ul class="list-unstyled ">
                            <li class="mb-2 ">

                                <a href="#!"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.address')</a>
                                <img src="{{ asset('images/home.png') }}">
                            </li>
                            <li class="mb-2 d-flex justify-content-end" style="gap: 7px;">

                                <a href="#!"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: right;
                                color: #FFFFFF;
                                ">
                                    @lang('file.email')</a>
                                <img src="{{ asset('images/email.png') }}" style="pl-5">
                            </li>
                            <li class="mb-2">

                                <a href="#!"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.phone')</a>
                                <img src="{{ asset('images/telephone.png') }}">
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->
                    <div class="col=ml-2 col-md-2 mb-4 mb-md-0 text-left">
                        <p class="text-left mb-2"
                            style="font-family: Poppins;
                        font-size: 16px;
                        font-weight: 500;
                        line-height: 13px;
                        letter-spacing: 0em;
                        text-align: left;
                        color: #FFFFFF;
                        ">
                            @lang('file.paths')</p>
                        <span class="d-flex justify-content-end pr-3 mb-2">
                            <img src="{{ asset('images/zigzag.png') }}">
                            <img src="{{ asset('images/zigzag.png') }}">
                        </span>
                        <ul class="list-unstyled">

                            <li class="mb-2">

                                <a href="#2030"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.2030')</a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px"
                                    style="transform: scaleX(-1);">
                            </li>
                            <li class="mb-2">

                                <a href="#projects"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.projects') </a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px"
                                    style="transform: scaleX(-1);">
                            </li>
                            <li class="mb-2">

                                <a href="#!"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.news') </a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px"
                                    style="transform: scaleX(-1);">
                            </li>
                            <li class="mb-2 ">

                                <a href="#reviews"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.customer_reviews')</a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px"
                                    style="transform: scaleX(-1);">
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->
                    <div class="col-md-2 mb-4 mb-md-0 text-left">
                        <p class="text-left mb-2"
                            style="font-family: Poppins;
                        font-size: 16px;
                        font-weight: 500;
                        line-height: 13px;
                        letter-spacing: 0em;
                        text-align: left;
                        color: #FFFFFF;
                        ">
                            @lang('file.paths')
                        </p>
                        <span class="d-flex justify-content-end pr-3 mb-2">
                            <img src="{{ asset('images/zigzag.png') }}">
                            <img src="{{ asset('images/zigzag.png') }}">
                        </span>
                        <ul class="list-unstyled">
                            <li class="mb-2">

                                <a href="#head"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.home') </a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px"
                                    style="transform: scaleX(-1);">
                            </li>
                            <li class="mb-2">

                                <a href="#service"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.services') </a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px"
                                    style="transform: scaleX(-1);">
                            </li>
                            <li class="mb-2">

                                <a href="#US"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.about_us')</a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px"
                                    style="transform: scaleX(-1);">
                            </li>
                            <li class="mb-2">

                                <a href="#programs"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.programs') </a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px"
                                    style="transform: scaleX(-1);">
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-4 mb-4 text-left pl-4">
                        <div class="d-flex justify-content-end mb-2">
                            <img src="{{ asset('images/logo 3.png') }}" alt="logo">
                        </div>
                        <p class="text-left mb-0"
                            style="color: #FFFFFFBF;font-family: 'Cairo', sans-serif; font-size: 16px; font-weight: 400; line-height: 30px; letter-spacing: 0em;">
                            @lang('file.dreams_made_easy')
                        </p>

                        <p class="text-left mb-0"
                            style="color: #FFFFFFBF;font-family: 'Cairo', sans-serif; font-size: 16px; font-weight: 400; line-height: 30px; letter-spacing: 0em;">
                            @lang('file.help_at_beginning')
                        </p>
                        <p class="text-left"
                            style="color: #FFFFFFBF; font-family: 'Cairo', sans-serif; font-size: 16px; font-weight: 400; line-height: 30px;">
                            @lang('file.contact_us_end_of_road')
                        </p>
                        <div class="row d-flex justify-content-end pl-3" style="gap: 15px">

                            <div class="rounded-circle bg-white d-flex justify-content-center align-items-center"
                                style="width: 35px; height: 35px;">
                                <img src="{{ asset('images/twitter.png') }}" alt="logo" width="15px"
                                    height="15px">
                            </div>
                            <div class="rounded-circle bg-white d-flex justify-content-center align-items-center"
                                style="width: 35px; height: 35px;">
                                <img src="{{ asset('images/facebook.png') }}" alt="logo" width="15px"
                                    height="15px">
                            </div>
                            <div class="rounded-circle bg-white d-flex justify-content-center align-items-center"
                                style="width: 35px; height: 35px;">
                                <img src="{{ asset('images/instagram2.png') }}" alt="logo" width="15px"
                                    height="15px">
                            </div>
                            <div class="rounded-circle bg-white d-flex justify-content-center align-items-center"
                                style="width: 35px; height: 35px;">
                                <img src="{{ asset('images/youtube.png') }}" alt="logo" width="15px"
                                    height="15px">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3"
                style="font-family: Tajawal;
                font-size: 20px;
                font-weight: 500;
                line-height: 14px;
                letter-spacing: 0px;
                color:#FFFFFFCC;
                ">
                {{ __('file.rights_reserved') }} {{ now()->year }}
                <span>@</span>
            </div>
        @else
            <div class="container" style="margin-top:60px">
                <div class="row" style="gap: 55px">
                    <!--Grid column-->
                    <div class="col-lg-2 col-md-2 mb-4 mb-md-0 text-right">
                        <p class="text-right mb-2"
                            style="font-family: Poppins;
                        font-size: 16px;
                        font-weight: 500;
                        line-height: 13px;
                        letter-spacing: 0em;
                        text-align: left;
                        color: #FFFFFF;
                        ">
                            للتواصل
                            معانا</p>
                        <span class="d-flex justify-content-end mb-2">
                            <img src="{{ asset('images/zigzag.png') }}">
                            <img src="{{ asset('images/zigzag.png') }}">
                        </span>
                        <ul class="list-unstyled">
                            <li class="mb-2">

                                <a href="#!" class="pr-2"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.address')</a>
                                <img src="{{ asset('images/home.png') }}">
                            </li>
                            <li class="mb-2">

                                <a href="#!" class="pr-2"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.email')</a>
                                <img src="{{ asset('images/email.png') }}">
                            </li>
                            <li class="mb-2">

                                <a href="#!" class="pr-2"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.phone')</a>
                                <img src="{{ asset('images/telephone.png') }}">
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->
                    <div class="col-md-2 mb-4 mb-md-0 text-right">
                        <p class="text-right mb-2"
                            style="font-family: Poppins;
                        font-size: 16px;
                        font-weight: 500;
                        line-height: 13px;
                        letter-spacing: 0em;
                        text-align: left;
                        color: #FFFFFF;
                        ">
                            @lang('file.paths')</p>
                        <span class="d-flex justify-content-end pr-3 mb-2">
                            <img src="{{ asset('images/zigzag.png') }}">
                            <img src="{{ asset('images/zigzag.png') }}">
                        </span>
                        <ul class="list-unstyled">

                            <li class="mb-2">

                                <a href="#2030"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.2030')</a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px">
                            </li>
                            <li class="mb-2">

                                <a href="#projects"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.projects') </a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px">
                            </li>
                            <li class="mb-2">

                                <a href="#!"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.news') </a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px">
                            </li>
                            <li class="mb-2 ">

                                <a href="#reviews"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.customer_reviews')</a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px">
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->
                    <div class="col-md-2 mb-4 mb-md-0 text-right">
                        <p class="text-right mb-2"
                            style="font-family: Poppins;
                        font-size: 16px;
                        font-weight: 500;
                        line-height: 13px;
                        letter-spacing: 0em;
                        text-align: left;
                        color: #FFFFFF;
                        ">
                            @lang('file.paths')
                        </p>
                        <span class="d-flex justify-content-end pr-3 mb-2">
                            <img src="{{ asset('images/zigzag.png') }}">
                            <img src="{{ asset('images/zigzag.png') }}">
                        </span>
                        <ul class="list-unstyled">
                            <li class="mb-2">

                                <a href="#head"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.home') </a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px">
                            </li>
                            <li class="mb-2">

                                <a href="#service"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.services') </a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px">
                            </li>
                            <li class="mb-2">

                                <a href="#US"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.about_us')</a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px">
                            </li>
                            <li class="mb-2">

                                <a href="#programs"
                                    style="font-family: Poppins;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 13px;
                                letter-spacing: 0em;
                                text-align: left;
                                color: #FFFFFF;
                                ">
                                    @lang('file.programs') </a>
                                <img src="{{ asset('images/left-arrow.png') }}" width="13px" height="13px">
                            </li>
                        </ul>
                    </div>

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-4 mb-4  text-right pl-4">
                        <div class="d-flex justify-content-end mb-2">
                            <img src="{{ asset('images/logo 3.png') }}" alt="logo">
                        </div>
                        <p class="text-right mb-0"
                            style="color: #FFFFFFBF;font-family: 'Cairo', sans-serif; font-size: 16px; font-weight: 400; line-height: 30px; letter-spacing: 0em;">
                            @lang('file.dreams_made_easy')
                        </p>

                        <p class="text-right mb-0"
                            style="color: #FFFFFFBF;font-family: 'Cairo', sans-serif; font-size: 16px; font-weight: 400; line-height: 30px; letter-spacing: 0em;">
                            @lang('file.help_at_beginning')
                        </p>
                        <p class="text-right"
                            style="color: #FFFFFFBF; font-family: 'Cairo', sans-serif; font-size: 16px; font-weight: 400; line-height: 30px;">
                            @lang('file.contact_us_end_of_road')
                        </p>
                        <div class="row d-flex justify-content-end pr-3" style="gap: 15px">

                            <div class="rounded-circle bg-white d-flex justify-content-center align-items-center"
                                style="width: 35px; height: 35px;">
                                <img src="{{ asset('images/twitter.png') }}" alt="logo" width="15px"
                                    height="15px">
                            </div>
                            <div class="rounded-circle bg-white d-flex justify-content-center align-items-center"
                                style="width: 35px; height: 35px;">
                                <img src="{{ asset('images/facebook.png') }}" alt="logo" width="15px"
                                    height="15px">
                            </div>
                            <div class="rounded-circle bg-white d-flex justify-content-center align-items-center"
                                style="width: 35px; height: 35px;">
                                <img src="{{ asset('images/instagram2.png') }}" alt="logo" width="15px"
                                    height="15px">
                            </div>
                            <div class="rounded-circle bg-white d-flex justify-content-center align-items-center"
                                style="width: 35px; height: 35px;">
                                <img src="{{ asset('images/youtube.png') }}" alt="logo" width="15px"
                                    height="15px">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3"
                style="font-family: Tajawal;
                font-size: 20px;
                font-weight: 500;
                line-height: 14px;
                letter-spacing: 0px;
                color:#FFFFFFCC;
                ">
                {{ __('file.rights_reserved') }} {{ now()->year }}
                <span>@</span>
            </div>
        @endif
        <!-- Copyright -->
    </footer>
    <a id="scrollToTopButton" href="#head" class="btn fixed-bottom ml-3 mb-4 mt-4 rounded-circle"
        style="width: 60px;height:60px">
        <img src="{{ asset('images/turn-up.gif') }}" width="35px" height="40x">
    </a>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-eVAPKd6M5fNvJ0zQQXPPQ1NtNxEI6IsClwBq5L2RmPBb85q3X5FLwP+xCFXTZSih" crossorigin="anonymous">
    </script>
    {{-- <script>
        $(document).ready(function() {
          
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#scrollToTopButton').fadeIn();
                } else {
                    $('#scrollToTopButton').fadeOut();
                }
            });

            $('#scrollToTopButton').click(function() {
                $('html, body').animate({
                    scrollTop: $('#landing').offset().top
                }, 10); 
                return false;
            });
        });
    </script> --}}
    <script>
        function toggleLanguage() {
            var currentLocale = document.getElementById('localeInput').value;
            var newLocale = (currentLocale === 'en') ? 'ar' : 'en';

            document.getElementById('localeInput').value = newLocale;
            document.getElementById('languageForm').submit();
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var carousel = document.getElementById('carouselExampleIndicators2');
            var indicatorsContainer = document.querySelector('.carousel-indicators');

            carousel.addEventListener('slid.bs.carousel', function(event) {
                var activeIndex = event.detail.index;
                var indicatorWidth = indicatorsContainer.children[0]
                    .offsetWidth; // Assuming all indicators have the same width
                var scrollPosition = activeIndex * indicatorWidth;

                indicatorsContainer.scrollTo({
                    left: scrollPosition,
                    behavior: 'smooth'
                });
            });
        });
    </script>
    <script>
        // Wait for the document to be ready
        document.addEventListener('DOMContentLoaded', function() {
            // Get the carousel element
            var carousel = document.getElementById('carouselExampleIndicators2');

            // Get the custom indicators container
            var customIndicators = document.querySelector('.custom-indicators');

            // Update the custom indicators based on the carousel items
            updateIndicators();

            // Listen for carousel slide event
            carousel.addEventListener('slide.bs.carousel', function(event) {
                // Update the custom indicators when the carousel slides
                updateIndicators();
            });

            // Function to update the custom indicators
            function updateIndicators() {
                // Clear existing indicators
                customIndicators.innerHTML = '';

                // Get the total number of items in the carousel
                var totalItems = document.querySelectorAll('#carouselExampleIndicators2 .carousel-item').length;

                // Create custom indicators based on the total number of items
                for (var i = 0; i < totalItems; i++) {
                    var indicator = document.createElement('li');
                    indicator.setAttribute('data-target', '#carouselExampleIndicators2');
                    indicator.setAttribute('data-slide-to', i);
                    indicator.className = i === 0 ? 'active' : ''; // Set the first one as active
                    customIndicators.appendChild(indicator);
                }
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#contactButton').click(function() {
                window.location.href = '{{ route('contactUs.create') }}';
            });

            $('#contactButton2').click(function() {
                window.location.href = '{{ route('contactUs.create') }}';
            });
            $('#contactButton3').click(function() {
                window.location.href = '{{ route('contactUs.create') }}';
            });
            $('#ServButton').click(function() {
                window.location.href = '{{ route('reservation.create') }}';
            });
            $('#ServButton2').click(function() {
                window.location.href = '{{ route('reservation.create') }}';
            });
            $('#ServButton3').click(function() {
                window.location.href = '{{ route('reservation.create') }}';
            });
            $('#ServButton4').click(function() {
                window.location.href = '{{ route('reservation.create') }}';
            });
            $('#ServButton5').click(function() {
                window.location.href = '{{ route('reservation.create') }}';
            });
            $('#ServButton6').click(function() {
                window.location.href = '{{ route('reservation.create') }}';
            });
            $('#ServButton7').click(function() {
                window.location.href = '{{ route('reservation.create') }}';
            });
            $('#ServButton8').click(function() {
                window.location.href = '{{ route('reservation.create') }}';
            });
            $('#ServButton9').click(function() {
                window.location.href = '{{ route('reservation.create') }}';
            });
            $('#ServButton0').click(function() {
                window.location.href = '{{ route('reservation.create') }}';
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Smooth scroll to section when a nav link is clicked
            $('a.nav-link').on('click', function(event) {
                if (this.hash !== "") {
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 1500, function() {
                        window.location.hash = hash;

                    });
                }
            });

            // Show or hide the button based on scroll position
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#scrollToTopButton').fadeIn();
                } else {
                    $('#scrollToTopButton').fadeOut();
                }
            });

            // Smooth scroll to landing page when the button is clicked
            $('#scrollToTopButton').click(function() {
                $('html, body').animate({
                    scrollTop: $('#head').offset().top
                }, 800);
                return false;
            });
        });
    </script>
    <script src="https://unpkg.com/scrollreveal"></script>
 
    @if (app()->getLocale() == 'ar')
     <script>
        const scrollReveal = ScrollReveal({
            reset: true,
            mobile: true, 
        });

        
        scrollReveal.reveal('.fade-in', {
            distance: '50%',
            origin: 'right',
            duration: 2000,
            opacity: 0
        });

        ScrollReveal().reveal('#ServButton', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('.animate-fade-up', {
            distance: '50%',
            origin: 'right',
            duration: 2500,
            opacity: 0
        });
        ScrollReveal().reveal('.animate-fade-in', {
            distance: '50%',
            origin: 'right',
            duration: 2500,
            opacity: 0
        });
        ScrollReveal().reveal('.the_range', {
            distance: '50%',
            origin: 'bottom',
            duration: 2000
        });
        ScrollReveal().reveal('.content-text2', {
            distance: '100%',
            origin: 'top',
            duration: 1500
        });
        ScrollReveal().reveal('.the_range .container', {
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('.the_range .mt-5', {
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('.content-text1:nth-child(3)', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('.content-text1:nth-child(1)', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('.content-text1:nth-child(2)', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('#textContent', {
            delay: 500,
            duration: 1500,
            opacity: 0
        });
        ScrollReveal().reveal('#contactButton', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('#contactButton2', {
            delay: 500,
            duration: 500,
            opacity: 0
        });
        ScrollReveal().reveal('.US', {
            duration: 500,
            origin: 'left',
            opacity: 0
        });
        ScrollReveal().reveal('.custom-image-style', {
            distance: '50%',
            origin: 'right',
            duration: 2000
        });
        ScrollReveal().reveal('.custom-text-style', {
            distance: '50%',
            origin: 'right',
            duration: 2500
        });
        ScrollReveal().reveal('.custom-text_2', {
            distance: '50%',
            origin: 'right',
            duration: 2000
        });
        ScrollReveal().reveal('#contactButton3', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('#contactButton4', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('.service_text2', {
            distance: '50%',
            origin: 'right',
            duration: 1500
        });
        ScrollReveal().reveal('#textd', {
            distance: '50%',
            origin: 'right',
            duration: 2000
        });
        ScrollReveal().reveal('.service_text3', {
            distance: '50%',
            origin: 'right',
            duration: 2500,
        });
        ScrollReveal().reveal('.he ', {
            duration: 1500,
            opacity: 0,
            delay: 1000
        });

        ScrollReveal().reveal('.he .col-md-1 img', {
            duration: 1500,
            opacity: 1,
            delay: 1500
        });
        const mediaQuery = window.matchMedia('(max-width: 768px)');

        if (mediaQuery.matches) {
            // Adjust reveal configurations for smaller screens
            scrollReveal.reveal('.fade-in', {

            });

            ScrollReveal().reveal('#ServButton', {
                delay: 500,
                duration: 2000,
                opacity: 0
                
            });
            ScrollReveal().reveal('.animate-fade-up', {
                origin: 'top',
                duration: 2500,
                opacity: 0
            });
            ScrollReveal().reveal('.animate-fade-in', {

                origin: 'bottom',
                duration: 2500,
                opacity: 0
            });
            ScrollReveal().reveal('.the_range', {

                origin: 'top',
                duration: 2000
            });
            ScrollReveal().reveal('.content-text2', {

                origin: 'bottom',
                duration: 1500
            });
            ScrollReveal().reveal('.the_range .container', {
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('.the_range .mt-5', {
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('.content-text1:nth-child(3)', {
                delay: 500,
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('.content-text1:nth-child(1)', {
                delay: 500,
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('.content-text1:nth-child(2)', {
                delay: 500,
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('#textContent', {
                delay: 500,
                duration: 1500,
                opacity: 0
            });
            ScrollReveal().reveal('#contactButton', {
                delay: 500,
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('#contactButton2', {
                delay: 500,
                duration: 500,
                opacity: 0
            });
            ScrollReveal().reveal('.US', {
                duration: 500,
                origin: 'top',
                opacity: 0
            });
            ScrollReveal().reveal('.custom-image-style', {

                origin: 'bottom',
                duration: 2000
            });
            ScrollReveal().reveal('.custom-text-style', {

                origin: 'bottom',
                duration: 2500
            });
            ScrollReveal().reveal('.custom-text_2', {

                origin: 'bottom',
                duration: 2000
            });
            ScrollReveal().reveal('#contactButton3', {
                delay: 500,
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('#contactButton4', {
                delay: 500,
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('.service_text2', {

                origin: 'top',
                duration: 1500
            });
            ScrollReveal().reveal('#textd', {

                origin: 'bottom',
                duration: 2000
            });
            ScrollReveal().reveal('.service_text3', {

                origin: 'top',
                duration: 2500,
            });
            ScrollReveal().reveal('.he ', {
                duration: 1000,
                opacity: 0,
                delay: 1500
            });

            ScrollReveal().reveal('.he .col-md-1 img', {
                duration: 1500,
                opacity: 1,
                delay: 1500
            });
        }
    </script>
    @else
       <script>
        const scrollReveal = ScrollReveal({
            reset: true,
            mobile: true, 
        });

        
        scrollReveal.reveal('.fade-in', {
            distance: '50%',
            origin: 'left',
            duration: 2000,
            opacity: 0
        });

        ScrollReveal().reveal('#ServButton', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('.animate-fade-up', {
            distance: '50%',
            origin: 'left',
            duration: 2500,
            opacity: 0
        });
        ScrollReveal().reveal('.animate-fade-in', {
            distance: '50%',
            origin: 'right',
            duration: 2500,
            opacity: 0
        });
        ScrollReveal().reveal('.the_range', {
            distance: '50%',
            origin: 'bottom',
            duration: 2000
        });
        ScrollReveal().reveal('.content-text2', {
            distance: '100%',
            origin: 'top',
            duration: 1500
        });
        ScrollReveal().reveal('.the_range .container', {
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('.the_range .mt-5', {
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('.content-text1:nth-child(3)', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('.content-text1:nth-child(1)', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('.content-text1:nth-child(2)', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('#textContent', {
            delay: 500,
            duration: 1500,
            opacity: 0
        });
        ScrollReveal().reveal('#contactButton', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('#contactButton2', {
            delay: 500,
            duration: 500,
            opacity: 0
        });
        ScrollReveal().reveal('.US', {
            duration: 500,
            origin: 'right',
            opacity: 0
        });
        ScrollReveal().reveal('.custom-image-style', {
            distance: '50%',
            origin: 'right',
            duration: 2000
        });
        ScrollReveal().reveal('.custom-text-style', {
            distance: '50%',
            origin: 'right',
            duration: 2500
        });
        ScrollReveal().reveal('.custom-text_2', {
            distance: '50%',
            origin: 'left',
            duration: 2000
        });
        ScrollReveal().reveal('#contactButton3', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('#contactButton4', {
            delay: 500,
            duration: 2000,
            opacity: 0
        });
        ScrollReveal().reveal('.service_text2', {
            distance: '50%',
            origin: 'left',
            duration: 1500
        });
        ScrollReveal().reveal('#textd', {
            distance: '50%',
            origin: 'left',
            duration: 2000
        });
        ScrollReveal().reveal('.service_text3', {
            distance: '50%',
            origin: 'right',
            duration: 2500,
        });
        ScrollReveal().reveal('.he ', {
            duration: 1500,
            opacity: 0,
            delay: 1000
        });

        ScrollReveal().reveal('.he .col-md-1 img', {
            duration: 1500,
            opacity: 1,
            delay: 1500
        });
        const mediaQuery = window.matchMedia('(max-width: 768px)');

        if (mediaQuery.matches) {
            // Adjust reveal configurations for smaller screens
            scrollReveal.reveal('.fade-in', {

            });

            ScrollReveal().reveal('#ServButton', {
                delay: 500,
                duration: 2000,
                opacity: 0
                
            });
            ScrollReveal().reveal('.animate-fade-up', {
                origin: 'top',
                duration: 2500,
                opacity: 0
            });
            ScrollReveal().reveal('.animate-fade-in', {

                origin: 'bottom',
                duration: 2500,
                opacity: 0
            });
            ScrollReveal().reveal('.the_range', {

                origin: 'top',
                duration: 2000
            });
            ScrollReveal().reveal('.content-text2', {

                origin: 'bottom',
                duration: 1500
            });
            ScrollReveal().reveal('.the_range .container', {
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('.the_range .mt-5', {
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('.content-text1:nth-child(3)', {
                delay: 500,
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('.content-text1:nth-child(1)', {
                delay: 500,
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('.content-text1:nth-child(2)', {
                delay: 500,
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('#textContent', {
                delay: 500,
                duration: 1500,
                opacity: 0
            });
            ScrollReveal().reveal('#contactButton', {
                delay: 500,
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('#contactButton2', {
                delay: 500,
                duration: 500,
                opacity: 0
            });
            ScrollReveal().reveal('.US', {
                duration: 500,
                origin: 'top',
                opacity: 0
            });
            ScrollReveal().reveal('.custom-image-style', {

                origin: 'bottom',
                duration: 2000
            });
            ScrollReveal().reveal('.custom-text-style', {

                origin: 'bottom',
                duration: 2500
            });
            ScrollReveal().reveal('.custom-text_2', {

                origin: 'bottom',
                duration: 2000
            });
            ScrollReveal().reveal('#contactButton3', {
                delay: 500,
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('#contactButton4', {
                delay: 500,
                duration: 2000,
                opacity: 0
            });
            ScrollReveal().reveal('.service_text2', {

                origin: 'top',
                duration: 1500
            });
            ScrollReveal().reveal('#textd', {

                origin: 'bottom',
                duration: 2000
            });
            ScrollReveal().reveal('.service_text3', {

                origin: 'bottom',
                duration: 2500,
            });
            ScrollReveal().reveal('.he ', {
                duration: 1000,
                opacity: 0,
                delay: 1500
            });

            ScrollReveal().reveal('.he .col-md-1 img', {
                duration: 1500,
                opacity: 1,
                delay: 1500
            });
        }
    </script>
    @endif




</body>

</html>
