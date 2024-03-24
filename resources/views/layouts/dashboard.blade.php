<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aknana Admin</title>
    <link rel="icon" href="{{ asset('images/logo 4 (1).png') }}" type="image/png">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href='{{ asset('assets/vendors/css/vendor.bundle.base.css') }}'>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
   
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Replace the local paths with CDN links -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="{{ route('dashboard') }}"><img
                        src="{{ asset('images/logo 4.svg') }}" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button style="display:  none;" class="navbar-toggler navbar-toggler align-self-center" type="button"
                    data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                {{-- <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0"
                                placeholder="Search projects">
                        </div>
                    </form>
                </div> --}}
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="{{ asset('images/6.jpg') }}" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">{{ auth()->user()->name }}</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            {{-- <a class="dropdown-item" href="#">
                                <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a> --}}
                            <div class="dropdown-divider"></div>
                            <form id="logout-form" method="post" action="{{ route('admin.logout') }}">
                                @csrf
                                <a class="dropdown-item" href="#" id="logout-icon2">
                                    <i class="mdi mdi-logout me-2 text-primary"></i> @lang('file.Signout') </a>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-bs-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count-symbol bg-danger"></span>
                        </a>
                        <div style="width: 300px" class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">@lang('file.Notifications')</h6>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-calendar"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">@lang('file.Reservation')</h6>

                                    </p>
                                </div>
                            </a>

                            <div class="dropdown-divider"></div>
                            {{-- <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-link-variant"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                                </div>
                            </a> --}}
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">@lang('file.See all notifications')</h6>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <form method="post" action="{{ route('language.switch') }}" id="languageForm">
                            @csrf
                            <button type="button" onclick="toggleLanguage()" class="btn btn-link text-white">
                                {{ app()->getLocale() == 'en' ? 'En' : 'Ar' }}
                                <img src="{{ asset('images/' . (app()->getLocale() == 'en' ? 'united-Kingdom' : 'saudi-arabia') . '.png') }}"
                                    width="20px" height="20px">
                            </button>
                            <input type="hidden" name="locale" id="localeInput" value="{{ app()->getLocale() }}">
                        </form>
                    </li>

                    <li class="nav-item nav-logout d-none d-lg-block">
                        <form id="logout-form" method="post" action="{{ route('admin.logout') }}">
                            @csrf
                            <a class="nav-link" href="#" id="logout-icon">
                                <i class="mdi mdi-power"></i>
                            </a>
                        </form>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->

            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="#" class="nav-link">
                            <div class="nav-profile-image">
                                <img src="{{ asset('images/6.jpg') }}" alt="profile">
                                <span class="login-status online"></span>
                            </div>
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold mb-2">{{ auth()->user()->name }}</span>
                                <span class="text-secondary text-small">@lang('file.Project Manager')</span>
                            </div>
                            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <span class="menu-title">@lang('file.Dashboard')</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                     <li class="nav-item {{ Request::is('admin/header*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('header')">
                            <span class="menu-title">@lang('file.Header and Footer')</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-settings-box menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="header">
                            <ul class="nav flex-column sub-menu1">

                                <li class="nav-item {{ Request::is('admin/header/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.header.index') }}">
                                        @lang('file.Details')</a></li>
                            </ul>
                        </div>
                    </li>
                     <li class="nav-item {{ Request::is('admin/footer*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('footer')">
                            <span class="menu-title">@lang('file.Footer')</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-settings-box menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="footer">
                            <ul class="nav flex-column sub-menu1">

                                <li class="nav-item {{ Request::is('admin/footer/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('footer.index') }}">
                                        @lang('file.Details')</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('admin/service*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('services')">
                            <span class="menu-title">@lang('file.Services')</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-settings-box menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="services">
                            <ul class="nav flex-column sub-menu1">
                                <li class="nav-item {{ Request::is('admin/service/Create') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.service.create') }}">
                                        @lang('file.Create')</a>
                                </li>
                                <li class="nav-item {{ Request::is('admin/service/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.service.index') }}">
                                        @lang('file.All Services')</a></li>
                            </ul>
                        </div>
                    </li>
                     
                    <li class="nav-item {{ Request::is('admin/ranges*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('ranges')">
                            <span class="menu-title">@lang('file.Ranges')</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-settings-box menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="ranges">
                            <ul class="nav flex-column sub-menu1">
                                {{-- <li class="nav-item {{ Request::is('admin/ranges/Create') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.service.create') }}">
                                        @lang('file.Create')</a>
                                </li> --}}
                                <li class="nav-item {{ Request::is('admin/ranges/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('ranges.index') }}">
                                        @lang('file.All ranges')</a></li>
                            </ul>
                        </div>
                    </li>
                     <li class="nav-item {{ Request::is('admin/project*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('projects')">
                            <span class="menu-title">@lang('file.Projects')</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi  mdi-bulletin-board menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="projects">
                            <ul class="nav flex-column sub-menu1">
                                <li class="nav-item {{ Request::is('admin/project/Create') ? 'active' : '' }}"><a
                                        class="nav-link"
                                        href="{{ route('dashboard.project.create') }}">@lang('file.Create')</a>
                                </li>
                                <li class="nav-item {{ Request::is('admin/project/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.project.index') }}">
                                        @lang('file.All Projects')</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('admin/courses*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('programs')">
                            <span class="menu-title">@lang('file.Programs')</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-library menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="programs">
                            <ul class="nav flex-column sub-menu1">
                                <li class="nav-item {{ Request::is('admin/courses/Create') ? 'active' : '' }}"><a
                                        class="nav-link"
                                        href="{{ route('dashboard.courses.create') }}">@lang('file.Create')</a>
                                </li>
                                <li class="nav-item {{ Request::is('admin/courses/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.courses.index') }}">
                                        @lang('file.All Programs')</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('admin/event*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('events')">
                            <span class="menu-title">@lang('file.Events')</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-calendar-check menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="events">
                            <ul class="nav flex-column sub-menu1">
                                <li class="nav-item {{ Request::is('admin/event/Create') ? 'active' : '' }}"><a
                                        class="nav-link"
                                        href="{{ route('dashboard.event.create') }}">@lang('file.Create')</a></li>
                                <li class="nav-item {{ Request::is('admin/event/show') ? 'active' : '' }}"><a
                                        class="nav-link"
                                        href="{{ route('dashboard.event.index') }}">@lang('file.All Events')</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('admin/reservation*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('reservations')">
                            <span class="menu-title">@lang('file.Reservations')</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-contact-mail menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="reservations">
                            <ul class="nav flex-column sub-menu1">
                                <li class="nav-item {{ Request::is('admin/reservation/Create') ? 'active' : '' }}"><a
                                        class="nav-link"
                                        href="{{ route('dashboard.reservation.create') }}">@lang('file.Create')</a></li>
                                <li class="nav-item {{ Request::is('admin/reservation/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.reservation.index') }}">
                                        @lang('file.All Reservations')</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('admin/templates*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('templates')">
                            <span class="menu-title">@lang('file.Templates')</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-settings-box menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="templates">
                            <ul class="nav flex-column sub-menu1">

                                <li class="nav-item {{ Request::is('admin/templates/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('templates.index') }}">
                                        @lang('file.All Templates')</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('admin/contacts*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard.contacts.show') }}">
                            <span class="menu-title">@lang('file.Contacts')</span>
                            <i class="mdi mdi-contacts menu-icon"></i>
                        </a>
                    </li>
                </ul>
            </nav>

            <script>
                function toggleSubMenu(subMenuId) {
                    var subMenu = document.getElementById(subMenuId);
                    subMenu.style.display = subMenu.style.display === 'none' ? 'block' : 'none';
                }
            </script>

            <div class="main-panel">
                @yield('content')
            </div>
        </div>
    </div>
    @php
        $contacts_count = App\Models\ContactUs::all()->count();
        $monthlyCounts_reservations = DB::table('reservations')
            ->select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('SUM(CASE WHEN gender = "male" THEN 1 ELSE 0 END) as male_count'),
                DB::raw('SUM(CASE WHEN gender = "female" THEN 1 ELSE 0 END) as female_count'),
            )
            ->groupBy('month')
            ->get();
        $courses = App\Models\Course::all();

    @endphp
    <script>
        function toggleLanguage() {
            var currentLocale = document.getElementById('localeInput').value;
            var newLocale = (currentLocale === 'en') ? 'ar' : 'en';

            document.getElementById('localeInput').value = newLocale;
            document.getElementById('languageForm').submit();
        }
    </script>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('[data-bs-toggle="collapse"]').collapse();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#course_id').on('change', function() {
                var selectedDate = $(this).find(':selected').data('date');
                $('#inputDateOfCourse').val(selectedDate);
            });
            var course_id_from_request = '{{ request('course_id') }}';

            if (course_id_from_request) {
                $('#course_id').val(course_id_from_request).change();
            }
            $('#course_id').on('change', function() {
                var selectedCourseId = $(this).val();
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
                    }
                });
            });

            var course_id_from_request = '{{ request('course_id') }}';
            if (course_id_from_request) {
                $('#course_id').val(course_id_from_request).change();
            }
        });

        function updateGenderOptions(maxMale, maxFemale, maleCount, femaleCount) {
            $('#gender').empty();
            $('#gender').append('<option value="" disabled selected>@lang('file.Gender')</option>');
            if (maleCount < maxMale) {
                $('#gender').append('<option value="male">@lang('file.Male')</option>');
            }
            if (femaleCount < maxFemale) {
                $('#gender').append('<option value="female">@lang('file.Female')</option>');
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#logout-icon').click(function(e) {
                e.preventDefault();

                $('#logout-form').submit();
            });
            $('#logout-icon2').click(function(e) {
                e.preventDefault();

                $('#logout-form').submit();
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const monthlyCounts = @json($monthlyCounts_reservations);
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('reservation-chart').getContext('2d');
            const gradientStrokeViolet = ctx.createLinearGradient(0, 0, 0, 181);
            const gradientStrokeRed = ctx.createLinearGradient(0, 0, 0, 50);

            // Set up your gradient colors here (replace the placeholders with actual colors)
            gradientStrokeViolet.addColorStop(0, '#4E00B5');
            gradientStrokeViolet.addColorStop(1, '#8B00FF');
            gradientStrokeRed.addColorStop(0, '#FF785A');
            gradientStrokeRed.addColorStop(1, '#FF785A');

            const months = ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'];

            const data = {
                labels: months,
                datasets: [{
                        label: "@lang('file.Male Reservations')",
                        borderColor: 'rgba(163, 93, 255, 0.7)',
                        backgroundColor: 'rgba(163, 93, 255, 0.7)',
                        hoverBackgroundColor: 'rgba(163, 93, 255, 0.7)',
                        legendColor: gradientStrokeViolet,
                        pointRadius: 0,
                        fill: false,
                        borderWidth: 1,
                        data: monthlyCounts.map(item => item.male_count)
                    },
                    {
                        label: "@lang('file.Female Reservations')",
                        borderColor: gradientStrokeRed,
                        backgroundColor: gradientStrokeRed,
                        hoverBackgroundColor: gradientStrokeRed,
                        legendColor: gradientStrokeRed,
                        pointRadius: 0,
                        fill: false,
                        borderWidth: 1,
                        data: monthlyCounts.map(item => item.female_count)
                    }
                ]
            };

            const options = {
                responsive: true,
                legend: false,
                legendCallback: function(chart) {
                    var text = [];
                    text.push('<ul>');
                    for (var i = 0; i < chart.data.datasets.length; i++) {
                        text.push('<li><span class="legend-dots" style="background:' +
                            chart.data.datasets[i].legendColor +
                            '"></span>');
                        if (chart.data.datasets[i].label) {
                            text.push(chart.data.datasets[i].label);
                        }
                        text.push('</li>');
                    }
                    text.push('</ul>');
                    return text.join('');
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false,
                            min: 0,
                            stepSize: 20,
                            max: 80
                        },
                        gridLines: {
                            drawBorder: false,
                            color: 'rgba(235,237,242,1)',
                            zeroLineColor: 'rgba(235,237,242,1)'
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                            color: 'rgba(0,0,0,1)',
                            zeroLineColor: 'rgba(235,237,242,1)'
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "#9c9fa6",
                            autoSkip: true,
                        },
                        categoryPercentage: 0.5,
                        barPercentage: 0.5
                    }]
                }
            };

            const reservationChart = new Chart(ctx, {
                type: 'bar',
                data: data,
                options: options
            });
            $("#reservation-chart-legend").html(reservationChart.generateLegend());
        });
    </script>
    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- FullCalendar and Moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $('#Courses_calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: [
                    @foreach ($courses as $course)
                        {
                            title: '{{ $course['name'] }}',
                            start: '{{ $course['date_of_course'] }}',
                            url: '{{ route('dashboard.courses.show', $course['id']) }}'
                        },
                    @endforeach
                ],
                themeSystem: 'standard',
                eventColor: 'rgb(110 0 254 / 35%)',
                eventTextColor: '#FFFFFF',
                aspectRatio: 2,
                scrollTime: '08:00:00',
                contentHeight: 'auto',
            });
        });
    </script>
    <script>
        // Assuming you're using jQuery
        $(document).ready(function() {
            $('.status-form').on('change', '.status-select', function() {
                var form = $(this).closest('form');
                var courseId = form.data('course-id');
                var status = $(this).val();

                $.ajax({
                    url: "{{ route('dashboard.courses.updateStatus', ':id') }}".replace(':id',
                        courseId),
                    method: 'PUT',
                    data: {
                        _token: "{{ csrf_token() }}",
                        status: status
                    },
                    success: function(response) {
                        // Handle success response, if needed
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle error response, if needed
                        console.error(xhr.responseText);
                    }
                });
            });
        });
    </script>

</body>

</html>
