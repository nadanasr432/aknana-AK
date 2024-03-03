@extends('layouts.app')
@section('content')
    <div class="container ">
        <div class="input-group d-flex justify-content-center">
            <div class="form-outline" data-mdb-input-init style="width: 50%;">
                <input type="search" id="searchByPhone" class="form-control" placeholder="Search by phone"
                    onkeypress="searchOnEnter(event)" />
            </div>
            <button type="button" class="btn" data-mdb-ripple-init="" onclick="searchByPhone()">
                <img src="{{ asset('images/search.gif') }}" style="width: 27px; height:23px;">
            </button>
        </div>

        <div id="courseList">
            {{-- Display the courses here --}}
        </div>


        <div class="d-flex justify-content-end text-right mt-5 mb-2">
            <div class="center mt-5 "
                style="font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: right; color:#121743;">

                <img src="{{ asset('images/Vector (1).svg') }}">
                <span
                    style="color: #DF8317; font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: right;">
                    البرامج
                </span>
            </div>

        </div>
        <div>
            <div class="row mb-5  justify-content-between">
                @foreach ($courses as $course)
                    @php
                        $maleCount = $course->reservations()->where('gender', 'male')->count();
                        $femaleCount = $course->reservations()->where('gender', 'female')->count();
                        $maxMaleCount = $course->male_count;
                        $maxFemaleCount = $course->female_count;
                        $isCourseAvailable = $maleCount < $maxMaleCount || $femaleCount < $maxFemaleCount;
                    @endphp

                    <div class="col-md-4 mt-5">
                        <div class="justify-content-center">
                            <span class="d-flex justify-content-center mb-2 ">
                                <img src="{{ asset('storage/' . $course->media->first()->file_path) }}"
                                    style="width: 350px;height:258px" alt="First Image">
                            </span>

                            <div class="d-flex justify-content-end pr-1"
                                style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 667;
                                    line-height: 34px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    color: rgba(18, 23, 67, 1);

                                    ">
                                {{ $course->name }}</div>
                            <div class="mt-2  pr-1"
                                style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align: right;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                                م/{{ $course->professor_name }}
                                <img src="{{ asset('images/Vector (6).svg') }}">
                            </div>
                            <div class="mt-2  pr-1"
                                style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align: right;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                                المدة : {{ $course->time_duration }}
                                <img src="{{ asset('images/Vector (5).svg') }}">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-between">
                            @if ($isCourseAvailable)
                                <a href="{{ route('reservation.create', ['course_id' => $course->id]) }}" id="ServButton2"
                                    class="btn btn-primary"
                                    style="width:155px;height:35px;font-family: Cairo; font-family: Cairo; font-size: 15px; font-weight: 600; line-height: 28px; letter-spacing: 0em; text-align: center; background:#121743; border:#121743; color:#FFFFFF;">
                                    أنضم الان
                                </a>
                            @else
                                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#courseFullModal"  class="btn btn-primary"
                                    style="width:155px;height:35px;font-family: Cairo; font-family: Cairo; font-size: 15px; font-weight: 600; line-height: 28px; letter-spacing: 0em; text-align: center; background:#121743; border:#121743; color:#FFFFFF;">
                                    أنضم الان
                                </a>
                            @endif

                            <div class="mt-2  pr-0"
                                style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align:;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                                {{ $course->location }}
                                <img src="{{ asset('images/location1.svg') }}">
                            </div>
                        </div>
                    </div>
                @endforeach
                <x-pop_up_course />
            </div>

        </div>
    </div>

    <script>
        function searchByPhone() {
            var phone = $('#searchByPhone').val();

            $.ajax({
                type: 'GET',
                url: '{{ route('courses.searchByPhone') }}', // Update with your route
                data: {
                    phone: phone
                },
                success: function(data) {
                    $('#courseList').html(data);
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }

        function searchOnEnter(event) {
            if (event.key === 'Enter') {
                searchByPhone();
            }
        }

        // Function to clear and hide search results
        function clearAndHideResults() {
            $('#searchByPhone').val('');
            $('#courseList').html('');
        }

        // Event listener for the "X" icon
        $(document).ready(function() {
            $('#searchByPhone').on('input', function() {
                // If the input is empty, hide the results
                if ($(this).val() === '') {
                    $('#courseList').html('');
                }
            });

            // Event listener for the clear icon
            $('.form-outline').on('click', function() {
                clearAndHideResults();
            });
        });
    </script>
@endsection
