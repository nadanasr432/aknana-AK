<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400&display=swap">
    <title>AKNANA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
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
    <section class="head">
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler btn-primary" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <button id="contactButton2" class="btn btn-primary">
                تواصل معنا
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav" style="gap: 30px;">
                    <li class="nav-item active">
                        <a class="nav-link" href="#events">فعاليات
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#programs">البرامج</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#projects">مشاريعنا</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#range">النطاق</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#service">خدماتنا <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#2030"> 2030</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#features">من نحن</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">الرئيسية</a>
                    </li>

                </ul>
            </div>

            <!-- Logo at the end -->
            <div class="navbar-brand">
                <img src="{{ asset('images/logo 4.svg') }}">
            </div>
        </nav>
        <div class="content">

            <p
                style="font-family: Cairo;
                font-size: 45px;
                font-weight: 600;
                line-height: 74px;
                letter-spacing: 0.02em;
                text-align: center;
                color:#FFFFFF;
                ">
                هنا تبدأ رحلتك من الفكرة إلى الريادة</p>
            <p class="head-text mb-0"
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
            <p class="head-text mb-0"
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
            <p class="head-text mb-0"
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
                <a href="" class="d-flex align-items-center pr-4 ">
                    <p class="pr-2"
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
                <button id="contactButton" class="btn btn-primary"
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-eVAPKd6M5fNvJ0zQQXPPQ1NtNxEI6IsClwBq5L2RmPBb85q3X5FLwP+xCFXTZSih" crossorigin="anonymous">
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



</body>

</html>
