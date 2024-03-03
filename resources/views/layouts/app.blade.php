<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AKNANA</title>
    <link rel="icon" href="{{ asset('images/logo 4 (1).png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@400&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-eDexGCEIa7XZLUEX31FzRvFrCD8v/72G6PO77RFGU5S5sS/gEVMmE2zD3tt1TwTk" crossorigin="anonymous">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
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

        footer {
            background-image: url('{{ asset('images/footer.svg') }}');
            background-size: cover;
            background-repeat: no-repeat;
            padding-top: 90px;
            padding-bottom: 50px;
            bottom: 0;
            left: 0;
        }

        nav.navbar {
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: white;
        }

        ul.navbar-nav li a {
            font-family: Cairo;
            font-size: 18px;
            font-weight: 600;
            line-height: 28px;
            letter-spacing: 0em;
            text-align: left;
            color: #121743;
        }

        ::placeholder {
            color: #6D6D71;
            font-family: Cairo;
            font-size: 18px;
            font-weight: 400;
            line-height: 50px;
            letter-spacing: 0em;


        }

        .custom-arrow-select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: none;
            padding-right: 7%;
            /* Remove any padding added for the default arrow */
        }


        @media (max-width: 768px) {
            img.responsive-image {
                display: none;
            }
        }

        #home a {
            color: #FFE4C5;
            /* Set text color for the active route */
        }

        /* Add a small line under the active route */
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
            color: #DF8317;

        }

        .navbar-nav .nav-item.active a:hover {
            color: #DF8317;

        }


        #home a:hover::after {
            background-color: #DF8317;

        }




        .custom-arrow-select2 option:hover {
            background-color: #ffcc00;

            color: #333333;

        }


        .custom-arrow-select2 {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: none;
            padding-right: 8%;

        }

        .custom-arrow {

            margin-top: -100px;

        }

        select option:checked,
        select option:hover {
            box-shadow: 0 0 10px 100px #000 inset;
        }

        option:hover {
            background-color: lime;
        }

        .custom-arrow2 {

            margin-top: -100px;


        }

        @media (max-width: 767px) {
            .navbar-nav {
                background-color: #FFE4C5;
                padding: 20px;

                text-align: left;
                display: inline-block;

                margin-right: 10px;

                font-size: 14px;
                columns: white;

            }

            #home a::after {
                content: '';
                display: block;
                height: 2px;
                width: 90%;
                margin-left: 0px;
                background-color: #bebebe;
                margin-top: 3px;
            }

            .navbar-nav .nav-item.active a:hover {
                color: #bebebe;
                /* Set text color for the hover state */
            }

        }
    </style>
</head>

<body>
    <div id="app">
        <div class="head">
            <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                <a class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="{{ asset('images/list2.png') }}" width="25px" height="25px">

                </a>
                <button id="actionButton" class="btn btn-primary"
                    style="font-family: Cairo;
                    font-size: 16px;
                    font-weight: 600;
                    line-height: 30px;
                    letter-spacing: 0em;
                    text-align: center;
                    color:#FFFFFF;
                    ">
                    تواصل معنا
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav" style="gap: 30px;">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}#events">فعاليات
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}#programs">البرامج</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}#projects">مشاريعنا</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}#range">النطاق</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}#service">خدماتنا <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}#2030"> 2030</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}#features">من نحن</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}#" id="home">الرئيسية</a>
                        </li>

                    </ul>
                </div>

                <!-- Logo at the end -->
                <div class="navbar-brand">
                    <img src="{{ asset('images/logo 4.svg') }}">
                </div>
            </nav>
        </div>

        <main class="py-4" style="margin-bottom: 210px;margin-top: 120px;">
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

                            <a href="{{ route('home') }}#2030"
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

                            <a href="{{ route('home') }}#projects"
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

                            <a href="{{ route('home') }}#!"
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

                            <a href="{{ route('home') }}#reviews"
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

                            <a href="{{ route('home') }}#head"
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

                            <a href="{{ route('home') }}#service"
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

                            <a href="{{ route('home') }}#US"
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

                            <a href="{{ route('home') }}#programs"
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
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            var defaultButtonText = 'تواصل معنا';
            var defaultButtonRoute = '{{ route('contactUs.create') }}';
            var currentRoute = '{{ Route::currentRouteName() }}';

            if (currentRoute === 'contactUs.create') {
                defaultButtonText = 'أنضم الان';
                defaultButtonRoute = '{{ route('reservation.create') }}';
            }
            $('#actionButton').text(defaultButtonText);

            $('#actionButton').click(function() {
                window.location.href = defaultButtonRoute;
            });
        });
    </script>
    <script>
        // Check if there is a success message in the session
        @if (session('success'))
            // Open the modal when there is a success message
            $(document).ready(function() {
                $('#myModal').modal('show');
            });
        @endif
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // Attach change event listener to #course_id
            $('#course_id').on('change', function() {
                // Get the selected date from the data attribute of the selected option
                var selectedDate = $(this).find(':selected').data('date');

                // Set the value of #inputDateOfCourse to the selected date
                $('#inputDateOfCourse').val(selectedDate);
            });

            // Check if there's a course_id parameter in the request
            var course_id_from_request = '{{ request('course_id') }}';

            if (course_id_from_request) {
                // Trigger change event on #course_id to pre-fill #inputDateOfCourse
                $('#course_id').val(course_id_from_request).change();
            }

            $('#course_id').on('change', function() {
                var selectedCourseId = $(this).val();

                // Make an AJAX request to get the maximum male and female values for the selected course
                $.ajax({
                    type: 'GET',
                    url: '{{ route('getMaxMaleValue') }}',
                    data: {
                        course_id: selectedCourseId
                    },
                    success: function(response) {
                        updateGenderOptions(response.max_male, response.max_female, response
                            .maleCount, response.femaleCount);
                    },
                    error: function(error) {
                        console.error('Error fetching max values:', error);
                        // You might want to handle errors here
                    }
                });
            });

            var course_id_from_request = '{{ request('course_id') }}';

            if (course_id_from_request) {
                // Trigger change event on #course_id to pre-fill #inputDateOfCourse and update gender options
                $('#course_id').val(course_id_from_request).change();
            }
        });

        function updateGenderOptions(maxMale, maxFemale, maleCount, femaleCount) {
            // Reset the gender options
            $('#gender').empty();

            // Add the default option
            $('#gender').append('<option value="" disabled selected>النوع</option>');

            // Add options based on the counts and max values
            if (maleCount < maxMale) {
                $('#gender').append('<option value="male">ذكر</option>');
            }

            if (femaleCount < maxFemale) {
                $('#gender').append('<option value="female">أنثى</option>');
            }
        }
    </script>
    
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            
            @if (session('success') && session('qrCodeData'))

                $(document).ready(function() {
                    $('#myModal1').modal('show');
                });
            @endif
        });
    </script>



</body>

</html>
