@extends('layouts.layout')
@section('content')

    <section class="services container mb-5" style="max-width: 1500rem" id="service">
        @if (app()->getLocale() == 'ar')
            <div class=" 1 row d-flex justify-content-center mb-2">
                @foreach ($temp_services as $template)
                    <div class="col-md-5 text-center ">
                        <p class="mb-0 service_text2"
                            style="color:#121743;
                font-family: Cairo;
                font-size: 35px;
                font-weight: 667;
                line-height: 50px;
                letter-spacing: 0em;
                text-align: center;">

                            {{ $template->getTranslation('main_title', 'en') }}

                        <p class="center service_text3 "
                            style="color: #DF8317; font-family: Cairo;
                    font-size: 35px;
                    font-weight: 667;
                    line-height: 50px;
                    text-align: center;
                        ">
                            <img src="{{ asset('images/Vector (1).svg') }}">
                            {{ $template->getTranslation('main_sub_title', 'en') }}
                        </p>
                        </p>
                        <p id="textd" class=" service_text1"
                            style="font-family: Cairo;
                    font-size: 22px;
                    font-weight: 400;
                    line-height: 50px;
                    letter-spacing: 0em;
                    
                    color:#7B7B7B;
                    ">
                            {{ $template->getTranslation('main_text', 'en') }}</p>
                    </div>
                @endforeach
            </div>

            <div class="he row d-flex justify-content-between">
                @foreach ($services as $key => $service)
                    <div class="col-md-2 mb-5">
                        <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
                            <img src="{{ asset('images/frameserv.svg') }}" alt=""
                                style="width: 195px; height: 195px; position: absolute;">
                            <img src="{{ asset('storage/' . $service->media()->first()->file_path) }}" alt="Service Image"
                                style="width: 183px; height: 183px; border-radius: 50%; z-index: 1;">
                        </div>

                        <p
                            style="font-family: Cairo; font-size: 23px; font-weight: 600; line-height: 36px; letter-spacing: -0.01em; text-align: center; color: #141414;">
                            {{ $service->getTranslation('title', 'en') }}
                        </p>
                        <div class="description-container">
                            <p class="short-description"
                                style="font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 26px; letter-spacing: 0em; text-align: center; color:rgba(20, 20, 20, 0.75);">
                                <a class="ml-0 mr-0 text-muted read-more-button">
                                    {{ \Illuminate\Support\Str::words($service->getTranslation('description', 'en'), 8, '...') }}</a>
                            </p>
                            <p class="full-description"
                                style="display: none; font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 26px; letter-spacing: 0em; text-align: center; color:rgba(20, 20, 20, 0.75);">
                                {{ $service->getTranslation('description', 'en') }}
                            </p>
                            <a class=" show-less-button" style="display: none;color:#121743"> @lang('file.show_less') </a>
                        </div>
                    </div>

                    @if ($key < count($services) - 1)
                        <div class="col-md-1  d-flex justify-content-center " style="margin-bottom: 150px">
                            <img src="{{ asset('images/Vector f.svg') }}">
                        </div>
                    @endif
                @endforeach
            </div>
        @else
            <div class=" 1 row d-flex justify-content-center mb-2">
                @foreach ($temp_services as $template)
                    <div class="col-md-5 text-center ">
                        <p class="mb-0 service_text2"
                            style="color:#121743;
                font-family: Cairo;
                font-size: 35px;
                font-weight: 667;
                line-height: 50px;
                letter-spacing: 0em;
                text-align: center;">

                            {{ $template->getTranslation('main_title', 'ar') }}

                        <p class="center service_text3 "
                            style="color: #DF8317; font-family: Cairo;
                    font-size: 35px;
                    font-weight: 667;
                    line-height: 50px;
                    text-align: center;
                        ">
                            <img src="{{ asset('images/Vector (1).svg') }}">
                            {{ $template->getTranslation('main_sub_title', 'ar') }}
                        </p>
                        </p>
                        <p id="textd" class=" service_text1"
                            style="font-family: Cairo;
                    font-size: 22px;
                    font-weight: 400;
                    line-height: 50px;
                    letter-spacing: 0em;
                    
                    color:#7B7B7B;
                    ">
                            {{ $template->getTranslation('main_text', 'ar') }}</p>
                    </div>
                @endforeach
            </div>

            <div class="he row d-flex justify-content-between">
                @foreach ($services as $key => $service)
                    <div class="col-md-2 mb-5">
                        <div class="d-flex justify-content-center align-items-center mt-5 mb-5">
                            <img src="{{ asset('images/frameserv.svg') }}" alt=""
                                style="width: 195px; height: 195px; position: absolute;">
                            <img src="{{ asset('storage/' . $service->media()->first()->file_path) }}" alt="Service Image"
                                style="width: 183px; height: 183px; border-radius: 50%; z-index: 1;">
                        </div>

                        <p
                            style="font-family: Cairo; font-size: 24px; font-weight: 600; line-height: 36px; letter-spacing: -0.01em; text-align: center; color: #141414;">
                            {{ $service->getTranslation('title', 'ar') }}
                        </p>
                        <div class="description-container">
                            <p class="short-description"
                                style="font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 26px; letter-spacing: 0em; text-align: center; color:rgba(20, 20, 20, 0.75);">
                                <a class="ml-0 mr-0 text-muted read-more-button">
                                    {{ \Illuminate\Support\Str::words($service->getTranslation('description', 'ar'), 8, '...') }}</a>
                            </p>
                            <p class="full-description"
                                style="display: none; font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 26px; letter-spacing: 0em; text-align: center; color:rgba(20, 20, 20, 0.75);">
                                {{ $service->getTranslation('description', 'ar') }}
                            </p>


                            <a class=" show-less-button" style="display: none;color:#121743"> @lang('file.show_less') </a>
                        </div>
                    </div>

                    @if ($key < count($services) - 1)
                        <div class="col-md-1  d-flex justify-content-center " style="margin-bottom: 150px">
                            <img src="{{ asset('images/Vector f.svg') }}">
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const descriptionContainers = document.querySelectorAll('.description-container');

            descriptionContainers.forEach(function(container) {
                const shortDescription = container.querySelector('.short-description');
                const fullDescription = container.querySelector('.full-description');
                const readMoreButton = container.querySelector('.read-more-button');
                const showLessButton = container.querySelector('.show-less-button');

                readMoreButton.addEventListener('click', function() {
                    shortDescription.style.display = 'none';
                    fullDescription.style.display = 'block';
                    readMoreButton.style.display = 'none';
                    showLessButton.style.display = 'block';
                });

                showLessButton.addEventListener('click', function() {
                    shortDescription.style.display = 'block';
                    fullDescription.style.display = 'none';
                    readMoreButton.style.display = 'block';
                    showLessButton.style.display = 'none';
                });
            });
        });
    </script>
    <x-modal_events :events="$events" />
    <section id="US" class="US container text-center "
        style="max-width: 1400px;margin-top: 10rem !important;margin-bottom: 10rem !important; ">
        @if (app()->getLocale() == 'ar')
            <div class="row d-flex justify-content-between mb-5 custom-row-style">
                @foreach ($temp_US as $template)
                    <div class="col-md-6 d-flex justify-content-start">
                        <img src="{{ asset('storage/' . $template->image) }}" width="585px" height="578px"
                            class="custom-image-style">
                    </div>

                    <div class="col-md-6 ">
                        <p class="center mb-3 custom-text-style"
                            style="font-family: Cairo;
           font-size: 40px;
           font-weight: 667;
           line-height: 75px;
           letter-spacing: -0.01em;
           text-align: left;
           color: #121743;">
                            <img src="{{ asset('images/Vector (1).svg') }}">
                            @php
                                $phrase = $template->getTranslation('main_title', 'en');
                                $words = explode(' ', $phrase);
                                $first_word = array_shift($words);
                                $last_word = array_pop($words);
                                $last_word_clean = rtrim($last_word, '?!.,;:');
                                $phrase_without_first_last = implode(' ', $words);
                            @endphp
                            <span style="color: #DF8317; font-family: Cairo;">{{ $first_word }}</span>
                            {!! $phrase_without_first_last !!}
                            <span style="color: #DF8317; font-family: Cairo;">
                                {{ $last_word_clean }}
                            </span>
                            {!! preg_match('/[?!.,;:]$/', $last_word) ? '' : rtrim($last_word, $last_word_clean) !!}
                        </p>
                        <div href="javascript:void(0);"
                            onclick="openEventModal('{{ $first_word }} {!! $phrase_without_first_last !!} {{ $last_word_clean }}', '{{ $template->getTranslation('main_text', 'en') }}')">
                            <p class="custom-text_2"
                                style="font-family: Cairo;
              font-size: 22px;
              font-weight: 400;
              line-height: 48px;
              letter-spacing: 0em;
              text-align: left;
              max-height:350px; 
              overflow: hidden;
              color:#121743;">
                                {{ $template->getTranslation('main_text', 'en') }}
                            </p>

                            <script>
                                // Get the <p> element
                                var pElement = document.querySelector('.custom-text_2');

                                // Check if the text exceeds the maximum height
                                if (pElement.scrollHeight > pElement.clientHeight) {
                                    // If it does, show the "know more" button
                                    document.write(
                                        '<p class="d-flex justify-content-end"><a class="btn-link show-more-btn" style="color: #DF8317; font-family: Cairo;" onclick="openEventModal(\'{{ $first_word }} {!! $phrase_without_first_last !!} {{ $last_word_clean }}\', \'{{ $template->getTranslation('main_text', 'en') }}\')">...@lang('file.know_more')</a></p>'
                                    );
                                }
                            </script>
                        </div>


                        <div class="d-flex justify-content-end align-items-between mt-5 ">
                            <button id="contactButton3" class="btn btn-primary"
                                style="width:193px;height:50px;font-family: Cairo;
                                font-size: 22px;
                                font-weight: 600;
                                line-height: 30px;
                                letter-spacing: 0em;
                                color:#FFFFFF;
                            ">
                                {{ $template->getTranslation('button_text', 'en') }}
                            </button>
                @endforeach
            </div>

            </div>
            </div>
        @else
            <div class="row d-flex justify-content-between mb-5 custom-row-style">
                @foreach ($temp_US as $template)
                    <div class="col-md-6 d-flex justify-content-start">
                        <img src="{{ asset('storage/' . $template->image_ar) }}"width="585px" height="578px"
                            class="custom-image-style">
                    </div>
                    <div class="col-md-6 ">
                        <p class="center mb-3 custom-text-style "
                            style="font-family: Cairo;
                        font-size: 40px;
                        font-weight: 667;
                        line-height: 75px;
                        letter-spacing: -0.01em;
                        text-align: right;
                        color:#121743">
                            <img src="{{ asset('images/Vector (1).svg') }}">
                            @php
                                $phrase = $template->getTranslation('main_title', 'ar');
                                $words = explode(' ', $phrase);
                                $last_word = array_pop($words);
                                $penultimate_word = array_pop($words);
                                $last_word_clean = rtrim($last_word, '?!.,;:');
                                $penultimate_word_clean = rtrim($penultimate_word, '?!.,;:');
                                $phrase_without_last_penultimate = implode(' ', $words);
                            @endphp
                            {!! $phrase_without_last_penultimate !!}
                            <span style="color: #DF8317; font-family: Cairo;">{{ $penultimate_word_clean }}</span>
                            <span style="color: #DF8317; font-family: Cairo;">{{ $last_word_clean }}</span>
                        </p>

                        <p class="custom-text_2"
                            style="font-family: Cairo;
                                font-size: 22px;
                                font-weight: 400;
                                line-height: 48px;
                                letter-spacing: 0em;
                                text-align: right;
                                max-height:340px; 
                                        overflow: hidden;
                                color:#121743;
                                ">
                            {{ $template->getTranslation('main_text', 'ar') }}
                        </p>

                        @if (strlen($template->getTranslation('main_text', 'ar')) > 350)
                            <p class="d-flex justify-content-end">
                                <a type="button" data-toggle="modal" data-target="#fullTextModal"
                                    class="btn-link show-more-btn" style="color: #DF8317; font-family: Cairo;">
                                    ...@lang('file.know_more')
                                </a>
                            </p>

                            <!-- Modal -->
                            <div class="modal fade" id="fullTextModal" tabindex="-1" role="dialog"
                                aria-labelledby="fullTextModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="center pr-0 text-right">
                                                <img src="{{ asset('images/Vector (1).svg') }}">
                                                <span
                                                    style="font-family: Cairo;color: #091157; font-size: 16px; font-weight: 667; line-height: 45px; letter-spacing: -0.01em; text-align: start;">
                                                    {{ $template->getTranslation('main_title', 'ar') }}
                                                </span>
                                            </div>
                                            <p id="event-full-text" class="mt-3"
                                                style="font-family: Cairo; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0em; text-align: right; color:#121743;">
                                                {{ $template->getTranslation('main_text', 'ar') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif


                        <div class="d-flex justify-content-end align-items-between mt-5 ">
                            <button id="contactButton3" class="btn btn-primary"
                                style="width:193px;height:50px;font-family: Cairo;
                                font-size: 22px;
                                font-weight: 600;
                                line-height: 30px;
                                letter-spacing: 0em;
                                color:#FFFFFF;
                            ">
                                {{ $template->getTranslation('button_text', 'ar') }}
                            </button>

                        </div>
                @endforeach
            </div>
            </div>
        @endif
    </section>
    <x-2030modal :template="$template" />
    <section class="2030 container" style="max-width: 1400px;margin-bottom: 10rem !important; " id="2030">
        @if (app()->getLocale() == 'ar')
            @foreach ($temp_2023 as $template)
                <div class="row d-flex justify-content-between mb-5">

                    <div class="col-md-5 fade-in ">
                        <p class="center" id="hepltext2"
                            style="font-family: Cairo;
                                color:#121743;
                                font-size: 35px;
                                font-weight: 667;
                                line-height: 75px;
                                letter-spacing: -0.01em;
                                text-align: left;
                                ">
                            <img src="{{ asset('images/Vector (1).svg') }}">
                            @php
                                $phrase = $template->getTranslation('main_title', 'en');
                                $words = explode(' ', $phrase);
                                $last_word = array_pop($words);
                                $last_word_clean = rtrim($last_word, '?!.,;:');
                                $phrase_without_last = implode(' ', $words);
                            @endphp

                            {{ $phrase_without_last }}
                            <span style="color: #DF8317; font-family: Cairo;">{{ $last_word_clean }}</span>

                        </p>
                        <p
                            style="font-family: Cairo;
                            font-size: 22px;
                            font-weight: 400;
                            line-height: 48px;
                            letter-spacing: 0em;
                            text-align: left;
                            ">
                            {{ $template->getTranslation('main_sub_title', 'en') }}
                        </p>
                        <div class="row d-flex justify-content-between align-items-between mt-4"
                            style="max-height: 250px; overflow: hidden;">
                            @php
                                $itemCount = count($template->getTranslation('items', 'en'));
                            @endphp

                            @foreach ($template->getTranslation('items', 'en') as $item)
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-end text-center mb-4">
                                        <div
                                            style="font-family: Cairo; font-size: 18px; font-weight: 600; line-height: 30px; letter-spacing: 0em; text-align: left; color: #121743;">
                                            {{ $item }}
                                        </div>
                                        <img src="{{ asset('images/mark.svg') }}">
                                    </div>
                                </div>
                            @endforeach


                        </div>
                        @if ($itemCount > 10)
                            <p class="d-flex justify-content-end">
                                <a class="btn show-more2-btn" style="display:block;color: #DF8317;"
                                    onclick="open2030Modal()">...@lang('file.know_more')</a>
                            </p>
                        @endif
                        <div class="d-flex justify-content-end text-center mt-4 mb-4">
                            <button id="ServButton" class="btn btn-primary"
                                style="width:220px;height:50px;font-family: Cairo;
                                    font-size: 22px;
                                    font-weight: 600;
                                    line-height: 30px;
                                    letter-spacing: 0em;
                                    color:#FFFFFF;
                                    ">
                                {{ $template->getTranslation('button_text', 'en') }}
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end ">
                        <img src="{{ asset('storage/' . $template->image) }}"width="585px" height="578px"
                            class="custom-image-style">
                    </div>
                </div>
            @endforeach
            </div>
        @else
            @foreach ($temp_2023 as $template)
                <div class="row d-flex justify-content-between mb-5">
                    <div class="col-md-5 fade-in">
                        <p class="center" id="hepltext"
                            style="font-family: Cairo;
            font-size: 40px;
            font-weight: 667;
            line-height: 75px;
            letter-spacing: -0.01em;
            text-align: right;
            color:#121743">
                            <img src="{{ asset('images/Vector (1).svg') }}">
                            @php
                                $phrase = $template->getTranslation('main_title', 'ar');
                                $words = explode(' ', $phrase);
                                $last_word = array_pop($words);
                                $last_word_clean = rtrim($last_word, '?!.,;:');
                                $phrase_without_last = implode(' ', $words);
                            @endphp
                            {{ $phrase_without_last }}
                            <span style="color: #DF8317; font-family: Cairo;">{{ $last_word_clean }}</span>
                        </p>
                        <p
                            style="font-family: Cairo;
            font-size: 22px;
            font-weight: 400;
            line-height: 48px;
            letter-spacing: 0em;
            text-align: right;">
                            {{ $template->getTranslation('main_sub_title', 'ar') }}
                        </p>
                        @php
                            $itemCount = count($template->getTranslation('items', 'en'));
                        @endphp
                        <div class="row d-flex justify-content-between align-items-between mt-4"
                            style="max-height: 250px; overflow: hidden;">
                            @foreach ($template->getTranslation('items', 'ar') as $item)
                                <div class="col-md-5">
                                    <div class="d-flex justify-content-end text-center mb-4">
                                        <div class="pr-2"
                                            style="font-family: Cairo;
                        font-size: 18px;
                        font-weight: 600;
                        line-height: 30px;
                        letter-spacing: 0em;
                        text-align: left;
                        color: #121743;">
                                            {{ $item }}
                                        </div>
                                        <img src="{{ asset('images/mark.svg') }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if ($itemCount > 10)
                            <p class="d-flex justify-content-end">
                                <a class="btn show-more2-btn" style="display:block;color: #DF8317;"
                                    onclick="open2030Modal()">...@lang('file.know_more')</a>
                            </p>
                        @endif

                        <div class="d-flex justify-content-end text-center mb-4 mt-4">
                            <button id="ServButton" class="btn btn-primary"
                                style="width:220px;height:50px;font-family: Cairo;
                font-size: 22px;
                font-weight: 600;
                line-height: 30px;
                letter-spacing: 0em;
                color:#FFFFFF;">
                                @lang('file.join_now')
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end mt-4">
                        <img src="{{ asset('storage/' . $template->image_ar) }}"width="595.25px" height="523px"
                            class="custom-image-style">
                    </div>
                </div>
            @endforeach
        @endif
    </section>
    @if (app()->getLocale() == 'ar')
        <div id="2030-full-text-modal" class="modal" tabindex="-1" role="dialog"
            aria-labelledby="event-full-text-modal-label">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row d-flex justify-content-between align-items-between mt-4 ">
                            @if (is_array($template->getTranslation('items', 'en')) && count($template->getTranslation('items', 'en')) > 0)
                                <!-- Your code for English translation -->
                                @foreach ($template->getTranslation('items', 'en') as $item)
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-end text-center mb-4">
                                            <div id="event-full-text-title"
                                                style="font-family: Cairo; font-size: 18px; font-weight: 600; line-height: 30px; letter-spacing: 0em; text-align: left; color: #121743;">
                                                {{ $item }}
                                            </div>
                                            <img src="{{ asset('images/mark.svg') }}">
                                        </div>

                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div id="2030-full-text-modal" class="modal" tabindex="-1" role="dialog"
            aria-labelledby="event-full-text-modal-label">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row d-flex justify-content-between align-items-between mt-4 ">
                            @if (is_array($template->getTranslation('items', 'ar')) && count($template->getTranslation('items', 'ar')) > 0)
                                <!-- Your code for Arabic translation -->
                                @foreach ($template->getTranslation('items', 'ar') as $item)
                                    <div class="col-md-6">
                                        <div class="d-flex justify-content-end text-center mb-4">
                                            <div
                                                style="font-family: Cairo; font-size: 18px; font-weight: 600; line-height: 30px; letter-spacing: 0em; text-align: left; color: #121743;">
                                                {{ $item }}
                                            </div>
                                            <img src="{{ asset('images/mark.svg') }}">
                                        </div>

                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif
    <script>
        function open2030Modal() {

            $('#2030-full-text-modal').modal('show');
        }
    </script>

    <section class="the_range container d-flex justify-content-center "
        style="background-color: #121743;max-width: 100%;height:155px" id="range">

        <div class="container d-flex justify-content-between">
            <div class="col-md-3">
                <div class="mt-5 counter1"
                    style="font-family: Cairo; font-size: 25px; font-weight: 500; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                </div>
                <div
                    style="font-family: Cairo; font-size: 18px; font-weight: 400; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                    @lang('file.visits_count')</div>
            </div>
            <div class="col-md-3">
                <div class="mt-5 counter2"
                    style="font-family: Cairo; font-size: 25px; font-weight: 500; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                </div>
                <div
                    style="font-family: Cairo; font-size: 18px; font-weight: 400; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                    @lang('file.employees_count') </div>
            </div>
            <div class="col-md-3">
                <div class="mt-5 counter3"
                    style="font-family: Cairo; font-size: 25px; font-weight: 500; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                </div>
                <div
                    style="font-family: Cairo; font-size: 18px; font-weight: 400; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                    @lang('file.projects_count') </div>
            </div>
            <div class="col-md-3">
                <div class="mt-5 counter4"
                    style="font-family: Cairo; font-size: 25px; font-weight: 500; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                </div>
                <div
                    style="font-family: Cairo; font-size: 18px; font-weight: 400; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                    @lang('file.companies_count') </div>
            </div>
        </div>

        </div>
        </div>
    </section>
    <x-modal_range :events="$events" :range1="$range1" :range2="$range2" :range3="$range3" :range4="$range4"
        :range5="$range5" :range6="$range6" :range7="$range7" :range8="$range8" />
    <section class="features container text-center " id="features" style="  margin-bottom: 100px;margin-top: 100px">
        @if (app()->getLocale() == 'ar')
            <div class="row justify-content-between mt-10 mb-7">

                <div class="col-md-6 order-1 order-md-0  animate-fade-up">

                    <div class="row mt-4 mb-4">
                        <div class="col-md-6">
                            <div class="card "
                                style="max-height: 300px;width:100%; height:100%;height:100%; border-radius: 20px; border: #E6E6E6 1px solid; background: #FFFFFF;">
                                <div class="card-body text-left">
                                    <div>
                                        <img src="{{ asset('storage/' . $range1->media()->first()->file_path) }}"
                                            alt="Icon Image" width="50px" height="50px">
                                    </div>
                                    <p class="mt-3"
                                        style="font-family: Cairo; font-size: 18px; font-weight: 500; line-height: 26px; letter-spacing: 0em; text-align: left; color:#121743;">
                                        {{ $range1->en_title }}
                                    </p>
                                    <div id="range1-text" style="max-height: 50px; overflow: hidden;">
                                        <p
                                            style="font-family: Cairo; font-size: 14px; font-weight: 400; line-height: 25px; letter-spacing: 0em; text-align: left; color:#121743;">
                                            {{ $range1->en_text }}
                                        </p>
                                    </div>

                                    <a class="btn btn-link mt-4 d-flex justify-content-start align-items-end"
                                        data-toggle="modal" data-target="#range1-full-text-modal">
                                        <p class="color-DF8317"
                                            style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                            @lang('file.know_more') </p>
                                        <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                    </a>

                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="card  "
                                style="max-height: 300px;margin-left: 30px; width:100%;height:100%; border-radius: 20px; background: #121743;">

                                <div class="card-body text-left">
                                    <div>
                                        <img src="{{ asset('storage/' . $range2->media()->first()->file_path) }}"
                                            alt="Icon Image" width="50px" height="50px">
                                    </div>

                                    <p class="mt-3 text-white"
                                        style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: left;
                                    ">
                                        {{ $range2->en_title }} </p>
                                    <div id="range2-text" style="max-height: 50px; overflow: hidden;">

                                        <p class=" text-white"
                                            style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: left;
                                    ">
                                            {{ $range2->en_text }}
                                        </p>
                                    </div>
                                    <a class="btn btn-link mt-4 d-flex justify-content-start align-items-end"
                                        data-toggle="modal" data-target="#range2-full-text-modal">
                                        <p class="color-DF8317"
                                            style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                            @lang('file.know_more') </p>
                                        <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card "
                                style="max-height: 300px;height:100%; border-radius: 20px; background: #121743;">

                                <div class="card-body text-left">
                                    <div>
                                        <img src="{{ asset('storage/' . $range3->media()->first()->file_path) }}"
                                            alt="Icon Image" width="50px" height="50px">
                                    </div>

                                    <p class="mt-3 text-white"
                                        style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: left;
                                    ">
                                        {{ $range3->en_title }} </p>
                                    <div id="range3-text" style="max-height: 50px; overflow: hidden;">
                                        <p class=" text-white"
                                            style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: left;
                                    ">
                                            {{ $range3->en_text }}
                                        </p>
                                    </div>
                                    <a class="btn btn-link mt-4 d-flex justify-content-start align-items-end"
                                        data-toggle="modal" data-target="#range3-full-text-modal">
                                        <p class="color-DF8317"
                                            style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                            @lang('file.know_more') </p>
                                        <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Card 3 -->
                            <div class="card "
                                style="max-height: 300px;margin-left: 30px; width:100%;height:100%; border-radius: 20px; border: #E6E6E6 1px solid; background: #FFFFFF;">
                                <div class="card-body text-left">
                                    <div>
                                        <img src="{{ asset('storage/' . $range4->media()->first()->file_path) }}"
                                            alt="Icon Image" width="50px" height="50px">
                                    </div>
                                    <p class="mt-3 "
                                        style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: left;

                                    color:#121743;
                                    ">
                                        {{ $range4->en_title }}</p>
                                    <div id="range4-text" style="max-height: 50px; overflow: hidden;">
                                        <p
                                            style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: left;
                                    color:#121743;
                                    ">
                                            {{ $range4->en_text }}
                                        </p>
                                    </div>
                                    <a class="btn btn-link mt-4 d-flex justify-content-start align-items-end"
                                        data-toggle="modal" data-target="#range4-full-text-modal">
                                        <p class="color-DF8317"
                                            style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                            @lang('file.know_more') </p>
                                        <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 order-0 order-md-1 animate-fade-in">
                    <div class="row" style="margin-bottom: 20px;">
                        <div class="col-md-6">
                            <div class="card "
                                style="max-height: 300px;margin-top:25px;width:270px;border-radius: 20px; border: #E6E6E6 1px solid; background: #FFFFFF;">
                                <div class="card-body text-left">
                                    <div>
                                        <img src="{{ asset('storage/' . $range5->media()->first()->file_path) }}"
                                            alt="Icon Image" width="50px" height="50px">
                                    </div>
                                    <p class="mt-3 "
                                        style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: left;

                                    color:#121743;
                                    ">
                                        {{ $range5->en_title }}</p>
                                    <div id="range5-text" style="max-height: 50px; overflow: hidden;">
                                        <p
                                            style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: left;
                                    color:#121743;
                                    ">
                                            {{ $range5->en_text }}
                                        </p>
                                    </div>
                                    <a class="btn btn-link mt-4 d-flex justify-content-start align-items-end"
                                        data-toggle="modal" data-target="#range5-full-text-modal">
                                        <p class="color-DF8317"
                                            style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                            @lang('file.know_more') </p>
                                        <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="center pr-0 mb-2 text-left" style="margin-top: 15px;max-height:215px; overflow: hidden; ">
                                <img src="{{ asset('images/Vector (1).svg') }}">
                                <span
                                    style="font-family: Cairo;color: #091157; font-size: 16px; font-weight: 667; line-height: 45px; letter-spacing: -0.01em; text-align: end;">
                                    @php
                                        $phrase = $range8->en_title;
                                        $words = explode(' ', $phrase);
                                        $last_word = array_pop($words);
                                        $last_word_clean = rtrim($last_word, '?!.,;:');
                                        $phrase_without_last = implode(' ', $words);
                                    @endphp

                                    {{ $phrase_without_last }}
                                    <span style="color: #DF8317; font-family: Cairo;">{{ $last_word_clean }}</span>
                                </span>

                            </div>

                            <div class="center pr-0 text-left text-left" style="max-height:215px; overflow: hidden;">
                                <a class="responsive-text text-left" id="range8-text"data-toggle="modal"
                                    data-target="#range8-full-text-modal" style="font-size: 14px;line-height: 30px;">
                                    {{ $range8->en_text }}
                                </a>

                            </div>
                            @if (strlen($range8->en_text) > 150)
                                <div class="d-flex justify-content-end">
                                    <a class="show-more-btn text-end"
                                        style="color: #DF8317; font-family: Cairo;font-size:12px;"
                                        id="range8-text"data-toggle="modal"
                                        data-target="#range8-full-text-modal">...@lang('file.know_more')</a>
                                </div>
                            @endif
                        </div>

                    </div>
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="card "
                                style="max-height: 300px;width:100%;border-radius: 20px; background: #121743;">

                                <div class="card-body text-left">
                                    <div>
                                        <img src="{{ asset('storage/' . $range6->media()->first()->file_path) }}"
                                            alt="Icon Image" width="50px" height="50px">
                                    </div>

                                    <p class="mt-3 text-white"
                                        style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: left;
                                    ">
                                        {{ $range6->en_title }}</p>
                                    <div id="range6-text" style="max-height: 50px; overflow: hidden;">
                                        <p class=" text-white"
                                            style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: left;
                                    ">
                                            {{ $range6->en_text }}
                                        </p>
                                    </div>
                                    <a class="btn btn-link mt-4 d-flex justify-content-start align-items-end"
                                        data-toggle="modal" data-target="#range6-full-text-modal">
                                        <p class="color-DF8317"
                                            style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                            @lang('file.know_more') </p>
                                        <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card "
                                style=" width:100%;max-height: 300px; border-radius: 20px; border: #E6E6E6 1px solid; background: #FFFFFF;">
                                <div class="card-body text-left">
                                    <div>
                                        <img src="{{ asset('storage/' . $range7->media()->first()->file_path) }}"
                                            alt="Icon Image" width="50px" height="50px">
                                    </div>
                                    <p class="mt-3 "
                                        style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: left;

                                    color:#121743;
                                    ">
                                        {{ $range7->en_title }}</p>
                                    <div id="range7-text" style="max-height: 50px; overflow: hidden;">
                                        <p
                                            style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: left;
                                    color:#121743;
                                    ">
                                            {{ $range7->en_text }}
                                        </p>
                                    </div>
                                    <a class="btn btn-link mt-4 d-flex justify-content-start align-items-end"
                                        data-toggle="modal" data-target="#range7-full-text-modal">
                                        <p class="color-DF8317"
                                            style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                            @lang('file.know_more') </p>
                                        <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        @else
            <div class="row justify-content-center mt-10 mb-7">

                <div class="col-md-6 order-1 order-md-0 d-flex justify-content-end animate-fade-up">

                    <div class="row mt-4">
                        <div class="col-md-12 ">
                            <div class="d-flex justify-content-between  " style="margin-bottom: 1.8rem !important;">

                                <!-- Card 3 -->
                                <div class="card"
                                    style="width:100%;max-height: 300px; border-radius: 20px; border: #E6E6E6 1px solid; background: #FFFFFF;">
                                    <div class="card-body text-right">
                                        <div>
                                            <img src="{{ asset('storage/' . $range1->media()->first()->file_path) }}"
                                                alt="Icon Image" width="50px" height="50px">
                                        </div>
                                        <p class="mt-3 "
                                            style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;

                                    color:#121743;
                                    ">
                                            {{ $range1->ar_title }}</p>
                                        <div id="range1-text" style="max-height: 50px; overflow: hidden;">
                                            <p
                                                style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    color:#121743;
                                    ">
                                                {{ $range1->ar_text }}
                                            </p>
                                        </div>
                                        <a class="btn btn-link mt-4 d-flex justify-content-end align-items-end"
                                            data-toggle="modal" data-target="#range1-full-text-modal">
                                            <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                            <p class="color-DF8317"
                                                style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                                @lang('file.know_more') </p>

                                        </a>
                                    </div>
                                </div>
                                <div class="card "
                                    style="max-height: 300px;margin-left: 30px; width:100%; border-radius: 20px; background: #121743;">

                                    <div class="card-body text-right">
                                        <div>
                                            <img src="{{ asset('storage/' . $range2->media()->first()->file_path) }}"
                                                alt="Icon Image" width="50px" height="50px">
                                        </div>

                                        <p class="mt-3 text-white"
                                            style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    ">
                                            {{ $range2->ar_title }} </p>
                                        <div id="range2-text" style="max-height: 50px; overflow: hidden;">
                                            <p class="text-white"
                                                style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    ">
                                                {{ $range2->ar_text }}
                                            </p>
                                        </div>
                                        <a class="btn btn-link mt-4 d-flex justify-content-end align-items-end"
                                            data-toggle="modal" data-target="#range2-full-text-modal">
                                            <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                            <p class="color-DF8317"
                                                style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                                @lang('file.know_more') </p>

                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="card"
                                    style="width:100%;max-height: 300px; border-radius: 20px; background: #121743;">

                                    <div class="card-body text-right">
                                        <div>
                                            <img src="{{ asset('storage/' . $range3->media()->first()->file_path) }}"
                                                alt="Icon Image" width="50px" height="50px">
                                        </div>

                                        <p class="mt-3 text-white"
                                            style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    ">
                                            {{ $range3->ar_title }}</p>
                                        <div id="range3-text" style="max-height: 50px; overflow: hidden;">
                                            <p class="text-white"
                                                style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    ">
                                                {{ $range3->ar_text }}
                                            </p>
                                        </div>
                                        <a class="btn btn-link mt-4 d-flex justify-content-end align-items-end"
                                            data-toggle="modal" data-target="#range3-full-text-modal">
                                            <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                            <p class="color-DF8317"
                                                style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                                @lang('file.know_more') </p>

                                        </a>

                                    </div>
                                </div>
                                <!-- Card 3 -->
                                <div class="card"
                                    style="margin-left: 30px; width:100%; border-radius: 20px; border: #E6E6E6 1px solid; background: #FFFFFF;">
                                    <div class="card-body text-right">
                                        <div>
                                            <img src="{{ asset('storage/' . $range4->media()->first()->file_path) }}"
                                                alt="Icon Image" width="50px" height="50px">
                                        </div>
                                        <p class="mt-3 "
                                            style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;

                                    color:#121743;
                                    ">
                                            {{ $range4->ar_title }}</p>
                                        <div id="range4-text" style="max-height: 50px; overflow: hidden;">
                                            <p
                                                style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    color:#121743;
                                    ">
                                                {{ $range4->ar_text }}
                                            </p>
                                        </div>
                                        <a class="btn btn-link mt-4 d-flex justify-content-end align-items-end"
                                            data-toggle="modal" data-target="#range4-full-text-modal">
                                            <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                            <p class="color-DF8317"
                                                style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                                @lang('file.know_more') </p>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-md-6 order-0 order-md-1 animate-fade-in">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card"
                                style="margin-top:25px;width:100%;max-height: 300px; border-radius: 20px; border: #E6E6E6 1px solid; background: #FFFFFF;">
                                <div class="card-body text-right">
                                    <div>
                                        <img src="{{ asset('storage/' . $range5->media()->first()->file_path) }}"
                                            alt="Icon Image" width="50px" height="50px">
                                    </div>
                                    <p class="mt-3 "
                                        style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;

                                    color:#121743;
                                    ">
                                        {{ $range5->ar_title }}</p>
                                    <div id="range5-text" style="max-height: 50px; overflow: hidden;">
                                        <p
                                            style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    color:#121743;
                                    ">
                                            {{ $range5->ar_text }}
                                        </p>
                                    </div>
                                    <a class="btn btn-link mt-4 d-flex justify-content-end align-items-end"
                                        data-toggle="modal" data-target="#range5-full-text-modal">
                                        <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                        <p class="color-DF8317"
                                            style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                            @lang('file.know_more') </p>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="center pr-0 text-right" style="margin-top: 30px ">
                                <img src="{{ asset('images/Vector (1).svg') }}">
                                <span
                                    style="font-family: Cairo;color: #091157; font-size: 16px; font-weight: 667; line-height: 45px; letter-spacing: -0.01em; text-align: end;">
                                    @php
                                        $phrase = $range8->ar_title;
                                        $words = explode(' ', $phrase);
                                        $last_word = array_pop($words);
                                        $last_word_clean = rtrim($last_word, '?!.,;:');
                                        $phrase_without_last = implode(' ', $words);
                                    @endphp

                                    {{ $phrase_without_last }}
                                    <span style="color: #DF8317; font-family: Cairo;">{{ $last_word_clean }}</span>
                                </span>
                            </div>

                            <div class="center pr-0 text-right mt-2 mb-5 text-right ">
                                <a class="responsive-text text-right" id="range8-text"data-toggle="modal"
                                    data-target="#range8-full-text-modal"
                                    style="max-height: 185px; overflow: hidden;font-size: 14px">
                                    {{ $range8->ar_text }}
                                </a>
                                @if (strlen($range8->ar_text) > 185)
                                    <p class="d-flex justify-content-end">
                                        <a class="show-more-btn text-end"
                                            style="color: #DF8317; font-family: Cairo;font-size:14px;"
                                            id="range8-text"data-toggle="modal"
                                            data-target="#range8-full-text-modal">...@lang('file.know_more')</a>
                                    </p>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-end " style="gap: 30px;margin-top: -70px;
}">
                        <!-- Card 4 -->
                        <div class="card"
                            style=" margin-top:25px;width:100%;max-height: 300px; border-radius: 20px; background: #121743;">

                            <div class="card-body text-right">
                                <div>
                                    <img src="{{ asset('storage/' . $range6->media()->first()->file_path) }}"
                                        alt="Icon Image" width="50px" height="50px">
                                </div>

                                <p class="mt-3 text-white"
                                    style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    ">
                                    {{ $range6->ar_title }}</p>
                                <div id="range6-text" style="max-height: 50px; overflow: hidden;">
                                    <p class=" text-white"
                                        style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    ">
                                        {{ $range6->ar_text }}
                                    </p>
                                </div>
                                <a class="btn btn-link mt-4 d-flex justify-content-end align-items-end"
                                    data-toggle="modal" data-target="#range6-full-text-modal">
                                    <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                    <p class="color-DF8317"
                                        style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                        @lang('file.know_more') </p>

                                </a>

                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="card"
                            style="margin-top:25px;width:100%;max-height: 300px; border-radius: 20px; border: #E6E6E6 1px solid; background: #FFFFFF;">
                            <div class="card-body text-right">
                                <div>
                                    <img src="{{ asset('storage/' . $range7->media()->first()->file_path) }}"
                                        alt="Icon Image" width="50px" height="50px">
                                </div>
                                <p class="mt-3 "
                                    style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;

                                    color:#121743;
                                    ">
                                    {{ $range7->ar_title }}</p>
                                <div id="range7-text" style="max-height: 50px; overflow: hidden;">
                                    <p
                                        style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    color:#121743;
                                    ">
                                        {{ $range7->ar_text }}
                                    </p>
                                </div>
                                <a class="btn btn-link mt-4 d-flex justify-content-end align-items-end"
                                    data-toggle="modal" data-target="#range7-full-text-modal">
                                    <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                    <p class="color-DF8317"
                                        style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                        @lang('file.know_more') </p>

                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        @endif
    </section>

    <section class="container text-center mb-5" id="programs">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            @if (app()->getLocale() == 'ar')
                <div class="row">
                    @foreach ($temp_program as $template)
                        <div class="col-md-6">
                            <!-- Left and Right Arrow Images -->

                            <div class="d-flex justify-content-start mb-5" style="margin-top: 2rem !important;">


                                <a class="btn btn-outline-primary" href="{{ route('courses.index') }}"
                                    style="
                               
                                border:#121743 1px  solid;
                                color:white;
                                background:#121743;
                                ">
                                    <img src="{{ asset('images/course.png') }}" style="width: 27px;height;27px">
                                    {{ $template->getTranslation('button_text', 'en') }} </a>
                            </div>

                            <div class="d-flex justify-content-start mb-5">
                                <span class="d-flex justify-content-center pr-0" data-target="#carouselExampleIndicators"
                                    data-slide="next">
                                    <img src="{{ asset('images/arrow_left.png') }}" width="43px" height="43px"
                                        alt="Previous" style="transform: scaleX(-1);">
                                </span>
                                <span class="d-flex justify-content-center pr-2" data-target="#carouselExampleIndicators"
                                    data-slide="prev">
                                    <img src="{{ asset('images/arrow_reverse.png') }}" alt="Previous" width="43px"
                                        height="43px">
                                </span>

                            </div>

                            {{-- rounded image serveces --}}
                        </div>
                        <div class="col-md-6">
                            <div class="center mt-2 mb-4" id="programstext"
                                style="font-family: Cairo;
                    font-size: 40px;
                    font-weight: 667;
                    line-height: 75px;
                    letter-spacing: -0.01em;
                    text-align: left;
                    color:#121743;
                    ">
                                <img src="{{ asset('images/Vector (1).svg') }}">
                                @php
                                    $phrase = $template->getTranslation('main_title', 'en');
                                    $words = explode(' ', $phrase);
                                    $last_word = array_pop($words);
                                    $last_word_clean = rtrim($last_word, '?!.,;:');
                                    $phrase_without_last = implode(' ', $words);
                                @endphp

                                {{ $phrase_without_last }}
                                <span style="color: #DF8317; font-family: Cairo;">{{ $last_word_clean }}</span>
                            </div>

                        </div>
                    @endforeach
                </div>

                <div class="carousel-inner">
                    @for ($i = 0; $i < ceil(count($courses) / 3); $i++)
                        <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                            <div class="row mb-5 justify-content-between">

                                @foreach ($courses->slice($i * 3, 3) as $course)
                                    @php
                                        $maleCount = $course->reservations()->where('gender', 'male')->count();
                                        $femaleCount = $course->reservations()->where('gender', 'female')->count();
                                        $maxMaleCount = $course->male_count;
                                        $maxFemaleCount = $course->female_count;
                                        $isCourseAvailable =
                                            $maleCount < $maxMaleCount || $femaleCount < $maxFemaleCount;
                                    @endphp
                                    @if ($course->status == 'approved')
                                        <div class="col-md-4 mt-0">
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
                                    text-align: left;
                                    color: rgba(18, 23, 67, 1);

                                    ">
                                                    {{ $course->getTranslation('name', 'en') }}</div>
                                                <div class="mt-2  pl-1"
                                                    style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align: left;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                                                    @lang('file.Eng')/{{ $course->getTranslation('professor_name', 'en') }}
                                                    <img src="{{ asset('images/Vector (6).svg') }}">
                                                </div>
                                                <div class="mt-2  pl-1"
                                                    style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align: left;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                                                    {{ $course->getTranslation('time_duration', 'en') }}:@lang('file.Duration')
                                                    <img src="{{ asset('images/Vector (5).svg') }}">
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-between">
                                                @if ($isCourseAvailable)
                                                    <a href="{{ route('reservation.create', ['course_id' => $course->id]) }}"
                                                        id="ServButton2" class="btn btn-primary"
                                                        style="width:155px;height:35px;font-family: Cairo; font-size: 15px; font-weight: 600; line-height: 28px; letter-spacing: 0em; text-align: center; background:#121743; border:#121743; color:#FFFFFF;">
                                                        @lang('file.join_now')
                                                    </a>
                                                @else
                                                    <span class="btn btn-secondary"
                                                        style="width:155px;height:35px;font-family: Cairo; font-size: 15px; font-weight: 600; line-height: 28px; letter-spacing: 0em; text-align: center; background:#808080; border:#808080; color:#FFFFFF;">
                                                        @lang('file.completed')
                                                    </span>
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
                                                    {{ $course->getTranslation('location', 'en') }}
                                                    <img src="{{ asset('images/location1.svg') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <x-pop_up_course />
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Carousel Indicators -->
                <div class="carousel-indicators mt-5">
                    @for ($i = 0; $i < ceil(count($courses) / 3); $i++)
                        <li data-target="#carouselExampleIndicators2" data-slide-to="{{ $i }}"
                            class="{{ $i === 0 ? 'active' : '' }}"></li>
                    @endfor
                </div>
            @else
                <div class="row">
                    @foreach ($temp_program as $template)
                        <div class="col-md-6">

                            <div class="d-flex justify-content-start mt-4 mb-3">


                                <a class="btn btn-outline-primary" href="{{ route('courses.index') }}"
                                    style="
                               
                                border:#121743 1px  solid;
                                color:white;
                                background:#121743;
                                ">
                                    <img src="{{ asset('images/course.png') }}" style="width: 27px;height;27px">
                                    {{ $template->getTranslation('button_text', 'ar') }}</a>
                            </div>
                            <div class="d-flex justify-content-start">
                                <span class="d-flex justify-content-center mb-4 pr-2"
                                    data-target="#carouselExampleIndicators" data-slide="prev">
                                    <img src="{{ asset('images/left.svg') }}" alt="Previous">
                                </span>
                                <span class="d-flex justify-content-center pr-0" data-target="#carouselExampleIndicators"
                                    data-slide="next">
                                    <img src="{{ asset('images/right.svg') }}" alt="Next">
                                </span>
                            </div>

                            {{-- rounded image serveces --}}
                        </div>
                        <div class="col-md-6">
                            <div class="center mt-2"
                                style="font-family: Cairo;
                    font-size: 40px;
                    font-weight: 667;
                    line-height: 75px;
                    letter-spacing: -0.01em;
                    text-align: right;
                    color:#121743;
                    ">
                                <img src="{{ asset('images/Vector (1).svg') }}">
                                @php
                                    $phrase = $template->getTranslation('main_title', 'ar');
                                    $words = explode(' ', $phrase);
                                    $last_word = array_pop($words);
                                    $last_word_clean = rtrim($last_word, '?!.,;:');
                                    $phrase_without_last = implode(' ', $words);
                                @endphp

                                {{ $phrase_without_last }}
                                <span style="color: #DF8317; font-family: Cairo;">{{ $last_word_clean }}</span>
                            </div>

                        </div>
                    @endforeach
                </div>

                <div class="carousel-inner">
                    @for ($i = 0; $i < ceil(count($courses) / 3); $i++)
                        <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                            <div class="row mb-5 justify-content-between">
                                @foreach ($courses->slice($i * 3, 3) as $course)
                                    @php
                                        $maleCount = $course->reservations()->where('gender', 'male')->count();
                                        $femaleCount = $course->reservations()->where('gender', 'female')->count();
                                        $maxMaleCount = $course->male_count;
                                        $maxFemaleCount = $course->female_count;
                                        $isCourseAvailable =
                                            $maleCount < $maxMaleCount || $femaleCount < $maxFemaleCount;
                                    @endphp
                                    @if ($course->status == 'approved')
                                        <div class="col-md-4 mt-0">
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
                                                    {{ $course->getTranslation('name', 'ar') }}</div>
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
                                                    م/{{ $course->getTranslation('professor_name', 'ar') }}
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
                                                    المدة : {{ $course->getTranslation('time_duration', 'ar') }}
                                                    <img src="{{ asset('images/Vector (5).svg') }}">
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-between">
                                                @if ($isCourseAvailable)
                                                    <a href="{{ route('reservation.create', ['course_id' => $course->id]) }}"
                                                        id="ServButton2" class="btn btn-primary"
                                                        style="width:155px;height:35px;font-family: Cairo; font-family: Cairo; font-size: 15px; font-weight: 600; line-height: 28px; letter-spacing: 0em; text-align: center; background:#121743; border:#121743; color:#FFFFFF;">
                                                        @lang('file.join_now')
                                                    </a>
                                                @else
                                                    <span class="btn btn-secondary"
                                                        style="width:155px;height:35px;font-family: Cairo; font-size: 15px; font-weight: 600; line-height: 28px; letter-spacing: 0em; text-align: center; background:#808080; border:#808080; color:#FFFFFF;">
                                                        @lang('file.completed')
                                                    </span>
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
                                                    {{ $course->getTranslation('location', 'ar') }}
                                                    <img src="{{ asset('images/location1.svg') }}">
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <x-pop_up_course />
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Carousel Indicators -->
                <div class="carousel-indicators mt-5">
                    @for ($i = 0; $i < ceil(count($courses) / 3); $i++)
                        <li data-target="#carouselExampleIndicators2" data-slide-to="{{ $i }}"
                            class="{{ $i === 0 ? 'active' : '' }}"></li>
                    @endfor
                </div>
            @endif
        </div>
    </section>

    <section class="container text-center mt-5 mb-5" id='projects'>
        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
            @if (app()->getLocale() == 'ar')
                @foreach ($temp_projects as $template)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mb-5" style="margin-top: 2rem !important;">
                                <a class="btn btn-outline-primary" href="{{ route('projects.show') }}"
                                    style="
                               
                                border:#121743 1px  solid;
                                color:white;
                                background:#121743;
                                ">
                                    <img src="{{ asset('images/project1.png') }}" style="width: 27px;height;27px">
                                    {{ $template->getTranslation('button_text', 'en') }}</a>
                            </div>
                            <!-- Left and Right Arrow Images -->
                            <div class="d-flex justify-content-start" style="margin-top: 25px;">
                                <span class="d-flex justify-content-center mb-0" data-target="#carouselExampleIndicators1"
                                    data-slide="next">
                                    <img src="{{ asset('images/arrow_left.png') }}" width="43px" height="43px"
                                        alt="Previous" style="transform: scaleX(-1);">
                                </span>
                                <span class="d-flex justify-content-center mb-0 pr-2"
                                    data-target="#carouselExampleIndicators1" data-slide="prev">
                                    <img src="{{ asset('images/left.svg') }}" alt="Previous">
                                </span>

                            </div>
                        </div>
                        <div class="col-md-6" style="margin-bottom: 100px;">
                            <div class="center mt-2 " id="projecttext"
                                style="font-family: Cairo; font-size: 39px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: left; color:#121743;">
                                <img src="{{ asset('images/Vector (1).svg') }}">
                                @php
                                    $phrase = $template->getTranslation('main_title', 'en');
                                    $words = explode(' ', $phrase);
                                    $last_word = array_pop($words);
                                    $last_word_clean = rtrim($last_word, '?!.,;:');
                                    $phrase_without_last = implode(' ', $words);
                                @endphp

                                {{ $phrase_without_last }}
                                <span style="color: #DF8317; font-family: Cairo;">{{ $last_word_clean }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="carousel-inner">
                    @for ($i = 0; $i < ceil(count($projects) / 4); $i++)
                        <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                            <div class="row mb-5 d-flex justify-content-between">
                                @foreach ($projects->slice($i * 4, 4) as $project)
                                    <div class="col-md-3">
                                        <img src="{{ asset('storage/' . $project->images->first()->file_path) }}">
                                        <a href="{{ $project->url }}" id="url"
                                            class="d-flex justify-content-center pr-1"
                                            style="font-family: Cairo;
                                            font-size: 18px;
                                            font-weight: 600;
                                            line-height: 34px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                           
                                            margin-top: 2.2rem !important;">
                                            {{ $project->getTranslation('title', 'en') }}
                                        </a>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    @endfor

                </div>

                <div class="carousel-indicators mt-5">
                    @for ($i = 0; $i < ceil(count($projects) / 4); $i++)
                        <li data-target="#carouselExampleIndicators2" data-slide-to="{{ $i }}"
                            class="{{ $i === 0 ? 'active' : '' }}"></li>
                    @endfor
                </div>
            @else
                @foreach ($temp_projects as $template)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mb-5" style="margin-top: 2rem !important;">


                                <a class="btn btn-outline-primary" href="{{ route('projects.show') }}"
                                    style="
                               
                                border:#121743 1px  solid;
                                color:white;
                                background:#121743;
                                ">
                                    <img src="{{ asset('images/project1.png') }}" style="width: 27px;height;27px">
                                    {{ $template->getTranslation('button_text', 'ar') }}</a>
                            </div>
                            <!-- Left and Right Arrow Images -->
                            <div class="d-flex justify-content-start">
                                <span class="d-flex justify-content-center mb-4 pr-2"
                                    data-target="#carouselExampleIndicators1" data-slide="prev">
                                    <img src="{{ asset('images/left.svg') }}" alt="Previous">
                                </span>
                                <span class="d-flex justify-content-center pr-0" data-target="#carouselExampleIndicators1"
                                    data-slide="next">
                                    <img src="{{ asset('images/right.svg') }}" alt="Next">
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="center mt-2" id="projecttext"
                                style="font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: right; color:#121743;">
                                <img src="{{ asset('images/Vector (1).svg') }}">
                                @php
                                    $phrase = $template->getTranslation('main_title', 'ar');
                                    $words = explode(' ', $phrase);
                                    $last_word = array_pop($words);
                                    $last_word_clean = rtrim($last_word, '?!.,;:');
                                    $phrase_without_last = implode(' ', $words);
                                @endphp

                                {{ $phrase_without_last }}
                                <span style="color: #DF8317; font-family: Cairo;">{{ $last_word_clean }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="carousel-inner">
                    @for ($i = 0; $i < ceil(count($projects) / 4); $i++)
                        <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                            <div class="row mb-5 d-flex justify-content-between">
                                @foreach ($projects->slice($i * 4, 4) as $project)
                                    <div class="col-md-3">
                                        <img src="{{ asset('storage/' . $project->images->first()->file_path) }}">
                                        <a href="{{ $project->url }}" class="d-flex justify-content-center pr-1"
                                            style="font-family: Cairo;
                                            font-size: 18px;
                                            font-weight: 600;
                                            line-height: 34px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            
                                            margin-top: 2.2rem !important;">
                                            {{ $project->getTranslation('title', 'ar') }}
                                        </a>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    @endfor

                </div>

                <div class="carousel-indicators mt-5">
                    @for ($i = 0; $i < ceil(count($projects) / 4); $i++)
                        <li data-target="#carouselExampleIndicators2" data-slide-to="{{ $i }}"
                            class="{{ $i === 0 ? 'active' : '' }}"></li>
                    @endfor
                </div>
            @endif
        </div>
    </section>
    <section class="container text-center mt-5 mb-5" id='events'>
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            @if (app()->getLocale() == 'ar')
                @foreach ($temp_events as $template)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mb-5" style="margin-top: 2rem !important;">

                                <a class="btn btn-outline-primary" href="{{ route('events.index') }}"
                                    style="
                               
                                border:#121743 1px  solid;
                                color:white;
                                background:#121743;
                                ">
                                    <img src="{{ asset('images/event6.png') }}" style="width: 27px;height;27px">
                                    {{ $template->getTranslation('button_text', 'en') }} </a>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <span class="d-flex justify-content-center pr-0" data-target="#carouselExampleIndicators2"
                                    data-slide="next">
                                    <img src="{{ asset('images/arrow_left.png') }}" width="43px" height="43px"
                                        alt="Previous" style="transform: scaleX(-1);">
                                </span>
                                <span class="d-flex justify-content-center pr-2" data-target="#carouselExampleIndicators2"
                                    data-slide="prev">
                                    <img src="{{ asset('images/left.svg') }}" alt="Previous">
                                </span>

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="center mt-2 " id="eventtext"
                                style="font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: left; color:#121743;">

                                <img src="{{ asset('images/Vector (1).svg') }}">
                                @php
                                    $phrase = $template->getTranslation('main_title', 'en');
                                    $words = explode(' ', $phrase);
                                    $last_word = array_pop($words);
                                    $last_word_clean = rtrim($last_word, '?!.,;:');
                                    $phrase_without_last = implode(' ', $words);
                                @endphp

                                {{ $phrase_without_last }}
                                <span style="color: #DF8317; font-family: Cairo;">{{ $last_word_clean }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="carousel-inner">
                    @for ($i = 0; $i < ceil(count($events) / 3); $i++)
                        <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                            <div class="row mb-5 justify-content-between">
                                @foreach ($events->slice($i * 3, 3) as $event)
                                    @if ($event->status == 'approved')
                                        <div class="col-md-4 pr-3 mt-3">
                                            <img src="{{ asset('storage/' . $event->media->first()->file_path) }}"
                                                style="width: 350px;height:258px" alt="Event Image">

                                            <div class="d-flex justify-content-center mt-2"
                                                style="font-family: Cairo; font-size: 18px; font-weight: 600; line-height: 34px; letter-spacing: 0em; text-align: center; color:#000000;">
                                                {{ $event->getTranslation('title', 'en') }}
                                            </div>
                                            <div class="event-container">
                                                <p class="short-event"
                                                    style="font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 26px; letter-spacing: 0em; text-align: center; color:rgba(20, 20, 20, 0.75);">
                                                    <a class="ml-0 mr-0 text-muted" href="javascript:void(0);"
                                                        onclick="openEventModal('{{ $event->getTranslation('title', 'en') }}', '{{ $event->getTranslation('text', 'en') }}')">
                                                        <div class="d-flex justify-content-center pr-1"
                                                            style="max-height:80px; overflow: hidden;font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 25px; letter-spacing: 0em; text-align: center;">
                                                            {{ $event->getTranslation('text', 'en') }}
                                                        </div>
                                                        @if (strlen($event->getTranslation('text', 'en')) > 80)
                                                            <p class="d-flex justify-content-end">
                                                                <a class="btn show-more-btn"
                                                                    style="font-size:14px;color: #DF8317; font-family: Cairo;"
                                                                    onclick="openEventModal('{{ $event->getTranslation('title', 'en') }}','{{ $event->getTranslation('text', 'en') }}')">...@lang('file.know_more')</a>
                                                            </p>
                                                        @endif
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Carousel Indicators -->
                <div class="carousel-indicators mt-5">
                    @for ($i = 0; $i < ceil(count($events) / 3); $i++)
                        <li data-target="#carouselExampleIndicators2" data-slide-to="{{ $i }}"
                            class="{{ $i === 0 ? 'active' : '' }}"></li>
                    @endfor
                </div>
            @else
                @foreach ($temp_events as $template)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start mt-3 mb-4">


                                <a class="btn btn-outline-primary" href="{{ route('events.index') }}"
                                    style="
                               
                                border:#121743 1px  solid;
                                color:white;
                                background:#121743;
                                ">
                                    <img src="{{ asset('images/event6.png') }}" style="width: 27px;height;27px">
                                    {{ $template->getTranslation('button_text', 'ar') }}</a>
                            </div>
                            <div class="d-flex justify-content-start">
                                <span class="d-flex justify-content-center mb-4 pr-2"
                                    data-target="#carouselExampleIndicators2" data-slide="prev">
                                    <img src="{{ asset('images/left.svg') }}" alt="Previous">
                                </span>
                                <span class="d-flex justify-content-center pr-0" data-target="#carouselExampleIndicators2"
                                    data-slide="next">
                                    <img src="{{ asset('images/right.svg') }}" alt="Next">
                                </span>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="center mt-2 " id="eventtext"
                                style="font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: right; color:#121743;">

                                <img src="{{ asset('images/Vector (1).svg') }}">
                                @php
                                    $phrase = $template->getTranslation('main_title', 'ar');
                                    $words = explode(' ', $phrase);
                                    $last_word = array_pop($words);
                                    $last_word_clean = rtrim($last_word, '?!.,;:');
                                    $phrase_without_last = implode(' ', $words);
                                @endphp

                                {{ $phrase_without_last }}
                                <span style="color: #DF8317; font-family: Cairo;">{{ $last_word_clean }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="carousel-inner">
                    @for ($i = 0; $i < ceil(count($events) / 3); $i++)
                        <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                            <div class="row mb-5 justify-content-between">
                                @foreach ($events->slice($i * 3, 3) as $event)
                                    @if ($event->status == 'approved')
                                        <div class="col-md-4 pr-3 mt-4">
                                            <img src="{{ asset('storage/' . $event->media->first()->file_path) }}"
                                                style="width: 350px;height:258px" alt="Event Image">
                                            <div class="d-flex justify-content-center mt-2"
                                                style="font-family: Cairo;
                                                    font-size: 18px;
                                                    font-weight: 600;
                                                    line-height: 34px;
                                                    letter-spacing: 0em;
                                                    text-align: center;
                                                    color:#000000;
                                                    ">
                                                {{ $event->getTranslation('title', 'ar') }} </div>
                                            <div class="event-container">
                                                <p class="short-event"
                                                    style="font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 26px; letter-spacing: 0em; text-align: center; color:rgba(20, 20, 20, 0.75);">
                                                    <a class="ml-0 mr-0 text-muted" href="javascript:void(0);"
                                                        onclick="openEventModal('{{ $event->getTranslation('title', 'ar') }}', '{{ $event->getTranslation('text', 'ar') }}')">
                                                        <div class="d-flex justify-content-center pr-1"
                                                            style="font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 25px; letter-spacing: 0em; text-align: center; max-height:80px; overflow: hidden;">
                                                            {{ $event->getTranslation('text', 'ar') }}
                                                        </div>
                                                        @if (strlen($event->getTranslation('text', 'ar')) > 80)
                                                            <p class="d-flex justify-content-end">
                                                                <a class="btn show-more-btn"
                                                                    style="font-size:14px;color: #DF8317; font-family: Cairo;"
                                                                    onclick="openEventModal('{{ $event->getTranslation('title', 'ar') }}','{{ $event->getTranslation('text', 'ar') }}')">...@lang('file.know_more')</a>
                                                            </p>
                                                        @endif
                                                    </a>
                                                </p>

                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Carousel Indicators -->
                <div class="carousel-indicators mt-5">
                    @for ($i = 0; $i < ceil(count($events) / 3); $i++)
                        <li data-target="#carouselExampleIndicators2" data-slide-to="{{ $i }}"
                            class="{{ $i === 0 ? 'active' : '' }}"></li>
                    @endfor
                </div>
            @endif
        </div>
    </section>

    <section class="reviews container text-center mt-5 mb-5" id="reviews"
        style="background-image: url('{{ asset('images/client bg.svg') }}'); background-size: 100% 100%; background-repeat: no-repeat;">

        <div class="row d-flex justify-content-center mt-5 mb-5">
            <div class="center mt-5"
                style="font-family: Cairo;
                            font-size: 35px;
                            font-weight: 667;
                            line-height: 50px;
                            letter-spacing: 0em;
                            text-align: center;
                            color:#121743;">
                <img src="{{ asset('images/Vector (1).svg') }}">
                @lang('file.Find out what')<span
                    style="color: #DF8317; font-family: Cairo;font-family: Cairo;
                                font-size: 35px;
                                font-weight: 667;
                                line-height: 50px;
                                letter-spacing: 0em;
                                text-align: center;
                                ">
                    @lang('file.our customers think')</span>
            </div>
        </div>

        @if (app()->getLocale() == 'ar')
            <div class="row d-flex justify-content-center">
                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel" style="height:auto">

                    <div class="d-flex justify-content-between">
                        <span id="arrow" class="d-flex justify-content-center" style="margin-top:9rem !important;"
                            data-target="#carouselExampleIndicators3" data-slide="prev">
                            <img src="{{ asset('images/arrow_left.png') }}" width="43px" height="43px"
                                alt="Previous" style="transform: scaleX(-1);">
                        </span>
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <div class="card"
                                    style="width: 100%;
                                    height:100%;
                                    border:#F8F8F8;
                                    border-radius: 12px;background-color: #F8F8F8">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center ">
                                            <p class=" card-text text-center"
                                                style="font-family: Poppins;
                                            font-size: 20px;
                                            border:#F8F8F8;
                                            font-weight: 400;
                                            line-height: 32px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            color:#637381;
                                            ">
                                                من أفضل الشركات اللي اتعملت معاهم قمة في الانضباط والتمييز والمتابعة انصح اي
                                                شخص
                                                محتاج يبدأ في شركته الخاصة وما عنده خطة موضحة يتواصل معاهم وهما بيساعده في
                                                تحقيق
                                                اي
                                                شئ وجعل المستحيل ممكن
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <p
                                                style="font-family: Cairo;
                                                font-size: 30px;
                                                font-weight: 600;
                                                line-height: 56px;
                                                letter-spacing: 0em;
                                                text-align: center;
                                                color:#222751;
                                                ">
                                                طلال بن سلمان
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <p
                                                style="font-family: Cairo;
                                                font-size: 20px;
                                                font-weight: 500;
                                                line-height: 37px;
                                                letter-spacing: 0em;
                                                text-align: center;

                                                color:#F0A202;
                                                ">
                                                مؤسس شركة
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex-justify-content-center">
                                    <img src="{{ asset('images/Group 1.svg') }}" alt="Previous" style="width: 200px">
                                </div>
                            </div>
                            {{-- <div class="carousel-item  ">
                                <div class="card"
                                    style="width: 100%;
                                    height:100%;
                                    border:#F8F8F8;
                                    border-radius: 12px;background-color: #F8F8F8">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center ">
                                            <p class=" card-text text-center"
                                                style="font-family: Poppins;
                                            font-size: 20px;
                                            border:#F8F8F8;
                                            font-weight: 400;
                                            line-height: 32px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            color:#637381;
                                            ">
                                                من أفضل الشركات اللي اتعملت معاهم قمة في الانضباط والتمييز والمتابعة انصح اي
                                                شخص
                                                محتاج يبدأ في شركته الخاصة وما عنده خطة موضحة يتواصل معاهم وهما بيساعده في
                                                تحقيق
                                                اي
                                                شئ وجعل المستحيل ممكن
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <p
                                                style="font-family: Cairo;
                                                font-size: 30px;
                                                font-weight: 600;
                                                line-height: 56px;
                                                letter-spacing: 0em;
                                                text-align: center;
                                                color:#222751;
                                                ">
                                                طلال بن سلمان
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <p
                                                style="font-family: Cairo;
                                                font-size: 20px;
                                                font-weight: 500;
                                                line-height: 37px;
                                                letter-spacing: 0em;
                                                text-align: center;

                                                color:#F0A202;
                                                ">
                                                مؤسس شركة
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex-justify-content-center">
                                    <img src="{{ asset('images/Group 1.svg') }}" alt="Previous" style="width: 200px">
                                </div>
                            </div>
                            <div class="carousel-item  ">
                                <div class="card"
                                    style="width: 100%;
                                    height:100%;
                                    border:#F8F8F8;
                                    border-radius: 12px;background-color: #F8F8F8">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center ">
                                            <p class=" card-text text-center"
                                                style="font-family: Poppins;
                                            font-size: 20px;
                                            border:#F8F8F8;
                                            font-weight: 400;
                                            line-height: 32px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            color:#637381;
                                            ">
                                                من أفضل الشركات اللي اتعملت معاهم قمة في الانضباط والتمييز والمتابعة انصح اي
                                                شخص
                                                محتاج يبدأ في شركته الخاصة وما عنده خطة موضحة يتواصل معاهم وهما بيساعده في
                                                تحقيق
                                                اي
                                                شئ وجعل المستحيل ممكن
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <p
                                                style="font-family: Cairo;
                                                font-size: 30px;
                                                font-weight: 600;
                                                line-height: 56px;
                                                letter-spacing: 0em;
                                                text-align: center;
                                                color:#222751;
                                                ">
                                                طلال بن سلمان
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <p
                                                style="font-family: Cairo;
                                                font-size: 20px;
                                                font-weight: 500;
                                                line-height: 37px;
                                                letter-spacing: 0em;
                                                text-align: center;

                                                color:#F0A202;
                                                ">
                                                مؤسس شركة
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex-justify-content-center">
                                    <img src="{{ asset('images/Group 1.svg') }}" alt="Previous" style="width: 200px">
                                </div>
                            </div> --}}
                        </div>
                        <span class="d-flex justify-content-center mb-4" style="margin-bottom:2rem !important;"
                            data-target="#carouselExampleIndicators3" data-slide="prev">
                            <img src="{{ asset('images/left.svg') }}" alt="Previous">
                        </span>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        @else
            <div class="row d-flex justify-content-center">
                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel" style="height:auto">

                    <div class="pl-5 d-flex justify-content-between" style="padding-left: 5rem !important;">
                        <span class="d-flex justify-content-center mb-4 pr-2" style="margin-bottom:2rem !important;"
                            data-target="#carouselExampleIndicators3" data-slide="prev">
                            <img src="{{ asset('images/left.svg') }}" alt="Previous">
                        </span>
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <div class="card"
                                    style="width: 100%;
                                    height:100%;
                                    border:#F8F8F8;
                                    border-radius: 12px;background-color: #F8F8F8">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center ">
                                            <p class=" card-text text-center"
                                                style="font-family: Poppins;
                                            font-size: 20px;
                                            border:#F8F8F8;
                                            font-weight: 400;
                                            line-height: 32px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            color:#637381;
                                            ">
                                                من أفضل الشركات اللي اتعملت معاهم قمة في الانضباط والتمييز والمتابعة انصح اي
                                                شخص
                                                محتاج يبدأ في شركته الخاصة وما عنده خطة موضحة يتواصل معاهم وهما بيساعده في
                                                تحقيق
                                                اي
                                                شئ وجعل المستحيل ممكن
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <p
                                                style="font-family: Cairo;
                                                font-size: 30px;
                                                font-weight: 600;
                                                line-height: 56px;
                                                letter-spacing: 0em;
                                                text-align: center;
                                                color:#222751;
                                                ">
                                                طلال بن سلمان
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <p
                                                style="font-family: Cairo;
                                                font-size: 20px;
                                                font-weight: 500;
                                                line-height: 37px;
                                                letter-spacing: 0em;
                                                text-align: center;

                                                color:#F0A202;
                                                ">
                                                مؤسس شركة
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex-justify-content-center">
                                    <img src="{{ asset('images/Group 1.svg') }}" alt="Previous" style="width: 200px">
                                </div>
                            </div>
                            <div class="carousel-item  ">
                                <div class="card"
                                    style="width: 100%;
                                    height:100%;
                                    border:#F8F8F8;
                                    border-radius: 12px;background-color: #F8F8F8">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center ">
                                            <p class=" card-text text-center"
                                                style="font-family: Poppins;
                                            font-size: 20px;
                                            border:#F8F8F8;
                                            font-weight: 400;
                                            line-height: 32px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            color:#637381;
                                            ">
                                                من أفضل الشركات اللي اتعملت معاهم قمة في الانضباط والتمييز والمتابعة انصح اي
                                                شخص
                                                محتاج يبدأ في شركته الخاصة وما عنده خطة موضحة يتواصل معاهم وهما بيساعده في
                                                تحقيق
                                                اي
                                                شئ وجعل المستحيل ممكن
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <p
                                                style="font-family: Cairo;
                                                font-size: 30px;
                                                font-weight: 600;
                                                line-height: 56px;
                                                letter-spacing: 0em;
                                                text-align: center;
                                                color:#222751;
                                                ">
                                                طلال بن سلمان
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <p
                                                style="font-family: Cairo;
                                                font-size: 20px;
                                                font-weight: 500;
                                                line-height: 37px;
                                                letter-spacing: 0em;
                                                text-align: center;

                                                color:#F0A202;
                                                ">
                                                مؤسس شركة
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex-justify-content-center">
                                    <img src="{{ asset('images/Group 1.svg') }}" alt="Previous" style="width: 200px">
                                </div>
                            </div>
                            <div class="carousel-item  ">
                                <div class="card"
                                    style="width: 100%;
                                    height:100%;
                                    border:#F8F8F8;
                                    border-radius: 12px;background-color: #F8F8F8">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center ">
                                            <p class=" card-text text-center"
                                                style="font-family: Poppins;
                                            font-size: 20px;
                                            border:#F8F8F8;
                                            font-weight: 400;
                                            line-height: 32px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            color:#637381;
                                            ">
                                                من أفضل الشركات اللي اتعملت معاهم قمة في الانضباط والتمييز والمتابعة انصح اي
                                                شخص
                                                محتاج يبدأ في شركته الخاصة وما عنده خطة موضحة يتواصل معاهم وهما بيساعده في
                                                تحقيق
                                                اي
                                                شئ وجعل المستحيل ممكن
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <p
                                                style="font-family: Cairo;
                                                font-size: 30px;
                                                font-weight: 600;
                                                line-height: 56px;
                                                letter-spacing: 0em;
                                                text-align: center;
                                                color:#222751;
                                                ">
                                                طلال بن سلمان
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-center mt-4">
                                            <p
                                                style="font-family: Cairo;
                                                font-size: 20px;
                                                font-weight: 500;
                                                line-height: 37px;
                                                letter-spacing: 0em;
                                                text-align: center;

                                                color:#F0A202;
                                                ">
                                                مؤسس شركة
                                            </p>
                                        </div>
                                    </div>

                                </div>
                                <div class="d-flex-justify-content-center">
                                    <img src="{{ asset('images/Group 1.svg') }}" alt="Previous"
                                        style="width: 200px">
                                </div>
                            </div>
                        </div>
                        <span class="pl-2" style="margin-top:7rem !important;"
                            data-target="#carouselExampleIndicators3" data-slide="next">
                            <img src="{{ asset('images/right.svg') }}" alt="Next" class="next">
                        </span>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        @endif
    </section>

    <script>
        function updateCounter(targetNumber, counterSelector) {
            let currentNumber = 0;
            const counterElement = document.querySelector(counterSelector);

            const interval = setInterval(function() {
                currentNumber++;
                counterElement.textContent = '+ ' + currentNumber;

                if (currentNumber === targetNumber) {
                    clearInterval(interval);
                }
            }, 20);
        }

        function startCounters() {
            updateCounter(350, '.counter1');
            updateCounter(200, '.counter2');
            updateCounter(20, '.counter3');
            updateCounter(90, '.counter4');
        }

        // Call the function to start the counters when the document is ready
        document.addEventListener('DOMContentLoaded', startCounters);

        // Update counters every 5 seconds
        setInterval(startCounters, 10000);
    </script>
    <style>
        .he {
            flex-wrap: nowrap;
            overflow-x: scroll;
            scrollbar-width: thin;
            scrollbar-color: #f9f8f8 transparent;
            max-width: 150%;

        }

        .col-md-3 a:hover {
            color: blue;
        }

        .col-md-3 a {
            color: #000000;
            ;
        }
    </style>


@endsection
