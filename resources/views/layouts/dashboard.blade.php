<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aknana Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href='{{ asset('assets/vendors/css/vendor.bundle.base.css') }}'>

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
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
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">

                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('assets/images/logo.svg') }}"
                        alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src="{{ asset('assets/images/logo-mini.svg') }}" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0"
                                placeholder="Search projects">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">David Greymaax</p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
                        </div>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link">
                            <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-email-outline"></i>
                            <span class="count-symbol bg-warning"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="messageDropdown">
                            <h6 class="p-3 mb-0">Messages</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('assets/images/faces/face4.jpg') }}" alt="image"
                                        class="profile-pic">
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message
                                    </h6>
                                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('assets/images/faces/face2.jpg') }}" alt="image"
                                        class="profile-pic">
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a
                                        message</h6>
                                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <img src="{{ asset('assets/images/faces/face3.jpg') }}" alt="image"
                                        class="profile-pic">
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture
                                        updated</h6>
                                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">4 new messages</h6>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-bs-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="count-symbol bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-calendar"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
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
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                        </div>
                    </li>
                    <li class="nav-item nav-logout d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-power"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-format-line-spacing"></i>
                        </a>
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
                                <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile">
                                <span class="login-status online"></span>
                            </div>
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold mb-2">David Grey. H</span>
                                <span class="text-secondary text-small">Project Manager</span>
                            </div>
                            <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                        </a>
                    </li>


                    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('courses*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('programs')">
                            <span class="menu-title">Programs</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-library menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="programs">
                            <ul class="nav flex-column sub-menu1">
                                <li class="nav-item {{ Request::is('courses/Create') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.courses.create') }}">Create</a>
                                </li>
                                <li class="nav-item {{ Request::is('courses/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.courses.index') }}">All
                                        Programs</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('reservation*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('reservations')">
                            <span class="menu-title">Reservations</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-contact-mail menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="reservations">
                            <ul class="nav flex-column sub-menu1">
                                <li class="nav-item {{ Request::is('reservation/Create') ? 'active' : '' }}"><a
                                        class="nav-link"
                                        href="{{ route('dashboard.reservation.create') }}">Create</a></li>
                                <li class="nav-item {{ Request::is('reservation/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.reservation.index') }}">All
                                        Reservations</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('event*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('events')">
                            <span class="menu-title">Events</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-calendar-check menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="events">
                            <ul class="nav flex-column sub-menu1">
                                <li class="nav-item {{ Request::is('event/Create') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.event.create') }}">Create</a></li>
                                <li class="nav-item {{ Request::is('event/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.event.index') }}">All Events</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('project*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('projects')">
                            <span class="menu-title">Projects</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi  mdi-bulletin-board menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="projects">
                            <ul class="nav flex-column sub-menu1">
                                <li class="nav-item {{ Request::is('project/Create') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.project.create') }}">Create</a>
                                </li>
                                <li class="nav-item {{ Request::is('project/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.project.index') }}">All
                                        Projects</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('service*') ? 'active' : '' }}">
                        <a class="nav-link" href="javascript:void(0);" onclick="toggleSubMenu('services')">
                            <span class="menu-title">Services</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-settings-box menu-icon"></i>
                        </a>
                        <div class="sub-menu" id="services">
                            <ul class="nav flex-column sub-menu1">
                                <li class="nav-item {{ Request::is('service/Create') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.service.create') }}">Create</a>
                                </li>
                                <li class="nav-item {{ Request::is('service/show') ? 'active' : '' }}"><a
                                        class="nav-link" href="{{ route('dashboard.service.index') }}">All
                                        Services</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item {{ Request::is('contacts*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('dashboard.contacts.show') }}">
                            <span class="menu-title">Contacts</span>
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
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
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
            $('#gender').append('<option value="" disabled selected>Gender</option>');
            if (maleCount < maxMale) {
                $('#gender').append('<option value="male">Male</option>');
            }
            if (femaleCount < maxFemale) {
                $('#gender').append('<option value="female">Female</option>');
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
