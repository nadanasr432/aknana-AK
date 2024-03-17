@extends('layouts.app')
@section('content')

    <div class="container ">
        <div id="courseList">
            {{-- Display the courses here --}}
        </div>
        @if (app()->getLocale() == 'ar')
            <div class="d-flex justify-content-start text-left mt-5 mb-2">
                <div class="center mt-5 "
                    style="font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align:left; color:#121743;">

                    <img src="{{ asset('images/Vector (1).svg') }}">
                    <span
                        style="color: #DF8317; font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: left;">
                        @lang('file.Projects')
                    </span>
                </div>

            </div>
            <div>

                <div class="row mb-5  justify-content-between">
                    @foreach ($Projects as $project)
                        <div class="col-md-3 mt-4 mb-4 d-flex align-items-center flex-column">
                            <img src="{{ asset('storage/' . $project->images->first()->file_path) }}">
                            <div class="d-flex justify-content-center pr-1"
                                style="font-family: Cairo;
                                            font-size: 18px;
                                            font-weight: 600;
                                            line-height: 34px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            color:#000000;
                                            margin-top: 2.2rem !important;">
                                {{ $project->getTranslation('title', 'en') }}
                            </div>
                        </div>
                    @endforeach
                    <x-pop_up_course />
                </div>


            </div>
    </div>
@else
    <div class="d-flex justify-content-end text-left mt-5 mb-2">
        <div class="center mt-5 "
            style="font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align:right; color:#121743;">

            <img src="{{ asset('images/Vector (1).svg') }}">
            <span
                style="color: #DF8317; font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: right;">
                @lang('file.Projects')
            </span>
        </div>

    </div>
    <div>

        <div class="row mb-5  justify-content-between">
            @foreach ($Projects as $project)
                <div class="col-md-3 mt-4 mb-4 d-flex align-items-center flex-column">
                    <img src="{{ asset('storage/' . $project->images->first()->file_path) }}">
                    <div class="d-flex justify-content-center pr-1"
                        style="font-family: Cairo;
                                            font-size: 18px;
                                            font-weight: 600;
                                            line-height: 34px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            color:#000000;
                                            margin-top: 2.2rem !important;">
                        {{ $project->getTranslation('title', 'ar') }}
                    </div>
                </div>
            @endforeach
            <x-pop_up_course />
        </div>
    </div>
    @endif
    </div>

@endsection
