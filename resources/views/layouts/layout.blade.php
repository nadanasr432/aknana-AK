<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyOB4Ml3r6DIj5e7n9O3PjUbo+qDFFUw" crossorigin="anonymous">

    <title>AKNANA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
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


        .fade-in {
            animation: slideFromLeft 2s ease-out;
        }

        #ServButton {
            opacity: 1;
            animation: fadeIn 2s ease-out 0.5s;
            animation-fill-mode: forwards;
            animation: slideFromLeft 3s ease-out;
        }

        /* .fade-in.animate {
    opacity: 1;
    transform: translateY(0);
} */
        .animate-fade-up {
            animation: fadeUp 1s ease;
            animation: slideFromLeft 2s ease-out;

        }

        .animate-fade-in {
            animation: fadeUp 1s ease;
            animation: slideFromLeft 2s ease-out;
            animation-fill-mode: forwards;

        }

        .the_range {
            animation: slideInFromBottom 2s ease-out;
        }

        .the_range .container {
            animation: fadeIn 2s ease-out;
        }

        .the_range .mt-5 {
            animation: fadeIn 2s ease-out;
        }

        .content-text2 {
            animation: slideFromTop 1.5s ease-out;
        }


        .content-text1:nth-child(3),
        .content-text1:nth-child(1),
        .content-text1:nth-child(2) {
            animation: fadeIn 2s ease-out 0.5s;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        #textContent {
            animation: fadeIn 1.5s ease-out 0.5s;
            opacity: 0;
            animation-fill-mode: forwards;
        }

        #contactButton {
            opacity: 0;
            animation: fadeIn 1s ease-out 0.5s;
            animation-fill-mode: forwards;
        }

        #contactButton2 {
            opacity: 0;
            animation: fadeIn 1s ease-out 0.5s;
            animation-fill-mode: forwards;
        }


        .scroll-animation {
            opacity: 0;
            animation: fadeIn 1s ease-out 0.5s;
            animation-fill-mode: forwards;
        }


        #home a {
            color: #FFE4C5;

        }


        #home a::after {
            content: '';
            display: block;
            height: 2px;
            width: 75%;
            margin-left: 15px;
            background-color: #FFE4C5;
            margin-top: 3px;


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





        @keyframes slideFromLeft {
            from {
                transform: translateX(-50%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
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

        .US {
            animation: slideInFromRight 2s ease-out;
        }

        .custom-image-style {
            animation: slideFromLeft 2s ease-out;
        }

        .custom-text-style {
            animation: slideFromLeft 2.5s ease-out;
        }

        .custom-text_2 {
            animation: slideFromLeft 2s ease-out;
        }

        #contactButton3 {

            opacity: 1;
            animation: fadeIn 2s ease-out 0.5s;
            animation-fill-mode: forwards;
            animation: slideFromLeft 3s ease-out;
        }

        #contactButton4 {

            opacity: 1;
            animation: fadeIn 2s ease-out 0.5s;
            animation-fill-mode: forwards;
            animation: slideFromLeft 3s ease-out;
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


        .he .col-md-2 {
            animation: slideFromLeft 1.5s ease-out;
        }


        .he .col-md-1 img {
            animation: fadeIn 1.5s ease-out 1.5s;
        }


        .he .col-md-2 p {
            animation: fadeIn 1.5s;
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

            .he {
                flex-wrap: nowrap;

                overflow-x: auto;
                scrollbar-width: thin;
                scrollbar-color: #f5f4f4 transparent;


                max-width: 100%;


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
            animation: slideInFromBottom 2s ease-out;
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

            #home a::after {
                content: '';
                display: block;
                height: 2px;
                width: 90%;
                margin-left: 0px;
                background-color: #FFE4C5;
                margin-top: 3px;

            }

        }

        @media (max-width: 767px) {
            body {
                overflow: auto;
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
                font-size: 15px !important;

                line-height: 20px !important;

            }

            .content-text2 {
                margin-bottom: 30px;
                font-size: 30px !important;

                line-height: 20px !important;

            }

            .content-text3 {

                font-size: 18px !important;

                line-height: 20px !important;

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
                تواصل معنا
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav" style="gap: 30px;">
                    <li class="nav-item active">
                        <a class="nav-link no-reload" href="#events">فعاليات
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link no-reload" href="#programs">البرامج</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link no-reload" href="#projects">مشاريعنا</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="#range">النطاق</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#service">خدماتنا <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#2030"> 2030</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#US">من نحن</a>
                    </li>
                    <li class="nav-item active" id="home">
                        <a class="nav-link" href="#head">الرئيسية</a>
                    </li>

                </ul>
            </div>

            <!-- Logo at the end -->
            <div class="navbar-brand">
                <img src="{{ asset('images/logo 4.svg') }}">
            </div>
        </nav>
        <div class="content" id="content">

            <p class="content-text2"
                style="font-family: Cairo;
                font-size: 45px;
                font-weight: 600;
                line-height: 74px;
                letter-spacing: 0.02em;
                text-align: center;
                color:#FFFFFF;
                ">
                هنا تبدأ رحلتك من الفكرة إلى الريادة</p>
            <p class="head-text mb-0 content-text1"
                style="font-family: Cairo;
                    font-size: 20px;
                    font-weight: 400;
                    line-height: 36px;
                    letter-spacing: 0.02em;
                    text-align: center;
                    color:rgba(255, 255, 255, 0.69);
                    ">
                مع أكنانا لريادة و حضانة الاعمال تحقيق الاحلام أصبح ممكن حيث نقدم
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
                حلول مبتكرة في عالم الأعمال من خلال نخبة من الاستشاريين في
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
                الأعمال التي تشرف عليها الشركة أو تتولى توثيقها
            </p>
            <div class="d-flex justify-content-center align-items-between mt-5 ">
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
                        نبذة عنا</p>
                    <img src="{{ asset('images/icon (1).svg') }}" style="margin-right: 10px;">
                </a>
                <button id="contactButton" class="btn btn-primary "
                    style="width:193px;height:50px;font-family: Cairo;
                        font-size: 22px;
                        font-weight: 600;
                        line-height: 30px;
                        letter-spacing: 0em;
                        color:#FFFFFF;
                    ">
                    تواصل معنا
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
                                الرياض-السعودية </a>
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
                                akana@gmail.com </a>
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
                                ‫‪0550915555‬‬ </a>
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
                        مسارات
                        أكنانا</p>
                    <span class="d-flex justify-content-end pr-3 mb-2">
                        <img src="{{ asset('images/zigzag.png') }}">
                        <img src="{{ asset('images/zigzag.png') }}">
                    </span>
                    <ul class="list-unstyled">

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
                                رؤية 2030 </a>
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
                                المشاريع </a>
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
                                الاخبار </a>
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
                                اراء العملاء </a>
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
                        مسارات
                        أكنانا</p>
                    <span class="d-flex justify-content-end pr-3 mb-2">
                        <img src="{{ asset('images/zigzag.png') }}">
                        <img src="{{ asset('images/zigzag.png') }}">
                    </span>
                    <ul class="list-unstyled">
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
                                الرئيسية </a>
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
                                الخدمات </a>
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
                                من نحن </a>
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
                                البرامج </a>
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
                        تحقق الاحلام صار مرة سهل انضم الينا الان
                    </p>

                    <p class="text-right mb-0"
                        style="color: #FFFFFFBF;font-family: 'Cairo', sans-serif; font-size: 16px; font-weight: 400; line-height: 30px; letter-spacing: 0em;">
                        وبنساعدك في بداية مشوارك المهني لحين
                    </p>
                    <p class="text-right"
                        style="color: #FFFFFFBF; font-family: 'Cairo', sans-serif; font-size: 16px; font-weight: 400; line-height: 30px;">
                        ... نهاية الطريق تواصل معانا
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
            جميع الحقوق محفوظة لشركة أكنانا لريادة الاعمال {{ now()->year }}
            <span>@</span>
        </div>
        <!-- Copyright -->
    </footer>
    <a id="scrollToTopButton" href="#head" class="btn fixed-bottom mr-4 mb-4 rounded-circle"
        style="width: 50px;height:50px">
        <img src="{{ asset('images/turn-up.gif') }}" width="40px" height="40x">
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

                        // Check if the clicked link has the 'no-reload' class
                        if (!$(event.currentTarget).hasClass('no-reload')) {
                            // Reload the page in the background
                            window.location.reload();
                        }
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





</body>

</html>
