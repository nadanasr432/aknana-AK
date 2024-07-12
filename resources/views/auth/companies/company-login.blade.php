@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-bottom: -200px;">
        <div class="card d-flex justify-content-center"
            style="width: 50%;
            height: 100%;
            border-radius: 25px;
            border: 2px solid #FFFFFF;
            background: #FFFFFF;
            box-shadow: 0px 0px 10px #d8dee4;">

            @if (app()->getLocale() == 'ar')
                <div class="card-body">
                    <div class="row">
                        <!-- Company Registration Form -->
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                <h2 class="mb-5" style="color: #DF8317;font-family: Cairo;
                                            font-size: 25px;
                                            font-weight: 667;
                                            line-height: 50px;
                                            letter-spacing: 0em;">@lang('file.Company Login') <img
                                        src="{{ asset('images/Vector (1).svg') }}"></h2>
                            </div>
                            <form action="{{ route('company.store.login') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder='@lang('file.E-mail')'>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                </div>
                                <div class="form-row mt-3">
                                     <div class="form-group col-md-12">
                                        <div class="input-group">
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder='@lang('file.Password')'>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="togglePassword">
                                                    <i class="fas fa-eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-4 mb-4">
                                    <button type="submit" style="background-color: #121743; border-radius:20px;font-family: Cairo;"
                                        class="btn btn-secondary btn-block">
                                        @lang('file.login')
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <div class="card-body">
                    <div class="row">
                        <!-- Company Registration Form -->
                        <div class="col-md-12">
                            <div class="d-flex justify-content-center">
                                <h2 class="mb-5" style="color: #DF8317;font-family: Cairo;
                                            font-size: 25px;
                                            font-weight: 667;
                                            line-height: 50px;
                                            letter-spacing: 0em;"><img src="{{ asset('images/Vector (1).svg') }}">
                                    @lang('file.Company Login') </h2>
                            </div>
                            <form action="{{ route('company.store.login') }}" method="POST">
                                @csrf
                                <div class="form-row d-flex justify-content-end">
                                    <div class="form-group col-md-12 text-right">
                                        <input type="email" name="email" id="email" class="form-control text-right"
                                            placeholder='@lang('file.E-mail')'>
                                        @if ($errors->has('email'))
                                            <span class="text-danger text-right">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row mt-3 d-flex justify-content-end">
                                    <div class="form-group col-md-12 text-right">
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="togglePassword">
                                                    <i class="fas fa-eye"></i>
                                                </span>
                                            </div>
                                            <input type="password" name="password" id="password"
                                                class="form-control text-right" placeholder='@lang('file.Password')'>

                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="text-danger text-right">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-4 mb-4">
                                    <button type="submit" style="background-color: #121743; border-radius:20px;font-family: Cairo;"
                                        class="btn btn-secondary btn-block">
                                        @lang('file.login')
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
