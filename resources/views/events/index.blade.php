@extends('layouts.app')
@section('content')
    <div class="container ">
        @if (app()->getLocale() == 'ar')
            <div class="d-flex justify-content-start text-left mb-4">
                @foreach ($temp_events as $template)
                    <div class="text mt-2 "
                        style="font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align:left; color:#121743;">
                        @php
                            $phrase = $template->getTranslation('main_title', 'en');
                            $words = explode(' ', $phrase);
                            $last_word = array_pop($words);
                            $last_word_clean = rtrim($last_word, '?!.,;:');
                            $phrase_without_last = implode(' ', $words);
                        @endphp

                        {{ $phrase_without_last }}
                        <span style="color: #DF8317;">{{ $last_word_clean }}</span>
                        <img src="{{ asset('images/Vector (1).svg') }}">
                    </div>
                @endforeach

            </div>
            <div>
                <div class="row mb-5  justify-content-between">
                    @foreach ($events as $event)
                        @if ($event->status == 'approved')
                            <div class="col-md-4 pr-3 mt-4">

                                <img src="{{ asset('storage/' . $event->media->first()->file_path) }}"
                                    style="width: 100%;height:258px" alt="First Image">

                                <div class="d-flex justify-content-center mt-2"
                                    style="font-family: Cairo;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 34px;
                            letter-spacing: 0em;
                            text-align: center;
                            color:#000000;
                            ">
                                    {{ $event->getTranslation('title', 'en') }} </div>
                                <div href="javascript:void(0);"
                                    onclick="openEventModal('{{ $event->getTranslation('title', 'en') }}', '{{ $event->getTranslation('text', 'en') }}')">
                                    <div class="d-flex justify-content-center pr-1"
                                        style="font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 25px; letter-spacing: 0em; text-align: center;">
                                        <div class="event-text" style="max-height: 80px; overflow: hidden;">
                                            {{ $event->getTranslation('text', 'en') }}
                                        </div>

                                    </div>
                                    @if (strlen($event->getTranslation('text', 'en')) > 80)
                                        <a class="btn show-more-btn" style="color: #DF8317;" onclick="toggleEventText(this)">Show More..</a>
                                    @endif
                                    <script>
                                        function toggleEventText(button) {
                                            var eventText = button.previousElementSibling;
                                            if (eventText.style.maxHeight === 'none') {
                                                eventText.style.maxHeight = '80px'; 
                                                button.innerText = 'Show More';
                                            }
                                        }

                                        function openEventModal(title, text) {
                                            var modalTitle = document.getElementById('modalTitle');
                                            var modalBody = document.getElementById('modalBody');
                                            modalTitle.innerHTML = title;
                                            modalBody.innerHTML = text;
                                            $('#eventModal').modal('show');
                                        }
                                    </script>
                                </div>


                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
    </div>
@else
    <div class="d-flex justify-content-end text-right mb-4">
        @foreach ($temp_events as $template)
            <div class="center mt-2 "
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
                <span style="color: #DF8317;">{{ $last_word_clean }}</span>
            </div>
        @endforeach
    </div>

    <div>
        <div class="row mb-5  justify-content-between">
            @foreach ($events as $event)
                @if ($event->status == 'approved')
                    <div class="col-md-4 pr-3 mt-4">

                        <img src="{{ asset('storage/' . $event->media->first()->file_path) }}"
                            style="width: 100%;height:258px" alt="First Image">

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
                        <div href="javascript:void(0);"
                            onclick="openEventModal('{{ $event->getTranslation('title', 'ar') }}', '{{ $event->getTranslation('text', 'ar') }}')">
                            <div class="d-flex justify-content-center pr-1"
                                style="font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 25px; letter-spacing: 0em; text-align: center;">
                                <div class="event-text" style="max-height: 80px; overflow: hidden;">
                                    {{ $event->getTranslation('text', 'ar') }}
                                </div>

                            </div>
                            @if (strlen($event->getTranslation('text', 'ar')) > 80)
                                <a class="btn show-more-btn" style="color: #DF8317;" onclick="toggleEventText(this)">...@lang('file.know_more')</a>
                            @endif
                        </div>

                        <script>
                            function toggleEventText(button) {
                                var eventText = button.previousElementSibling.previousElementSibling;
                                if (eventText.style.maxHeight === 'none' || !eventText.style.maxHeight) {
                                    eventText.style.maxHeight = '80px';
                                    button.innerText = 'Show More';
                                }
                            }

                            function openEventModal(title, text) {
                                var modalTitle = document.getElementById('modalTitle');
                                var modalBody = document.getElementById('modalBody');
                                modalTitle.innerHTML = title;
                                modalBody.innerHTML = text;
                                $('#eventModal').modal('show');
                            }
                        </script>

                    </div>
                @endif
            @endforeach
        </div>

    </div>
    @endif

    </div>
    <x-modal_events :events="$events" />


@endsection
