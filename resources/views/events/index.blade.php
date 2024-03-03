@extends('layouts.app')
@section('content')
    <div class="container ">
        <div class="d-flex justify-content-end text-right mb-4">
            <div class="center mt-2 "
                style="font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: right; color:#121743;">

                <img src="{{ asset('images/Vector (1).svg') }}">
                كل <span
                    style="color: #DF8317; font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: right;">
                    الفعاليات
                </span>
            </div>

        </div>
        <div>
            <div class="row mb-5  justify-content-between">
                @foreach ($events as $event)
                    <div class="col-md-4 pr-3 mt-4">

                        <img src="{{ asset('storage/' . $event->media->first()->file_path) }}"
                            style="width: 350px;height:258px" alt="First Image">

                        <div class="d-flex justify-content-center mt-2"
                            style="font-family: Cairo;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 34px;
                            letter-spacing: 0em;
                            text-align: center;
                            color:#000000;
                            ">
                            {{ $event->title }} </div>
                        <div class="d-flex
                                justify-content-center pr-1"
                            style="font-family: Cairo;
                                font-size: 16px;
                                font-weight: 400;
                                line-height: 25px;
                                letter-spacing: 0em;
                                text-align: center;
                                ">
                            {{ $event->text }}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
