@extends('layouts.app')

@section('content')
    <div class="container mb-4">
        <div class="input-group d-flex justify-content-center">
            <div class="form-outline" data-mdb-input-init style="width: 50%;">
                <input type="search" id="searchByCertificateNo" class="form-control" placeholder="@lang('file.Search by serial number')"
                    onkeypress="searchOnEnter(event)" />
            </div>
            <button type="button" class="btn" data-mdb-ripple-init="" onclick="searchByCertificateNo()">
                <img src="{{ asset('images/search.gif') }}" style="width: 27px; height:23px;">
            </button>
        </div>
    </div>
    <div class="container d-flex justify-content-center" style="margin-bottom: -200px;">
        <div class="card d-flex justify-content-center"
            style="width: 70%;
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
                                <h2 class="mb-5"
                                    style="color: #DF8317;font-family: Cairo;
                                            font-size: 25px;
                                            font-weight: 667;
                                            line-height: 50px;
                                            letter-spacing: 0em;">
                                    @lang('file.Client Registration') <img src="{{ asset('images/Vector (1).svg') }}"></h2>
                            </div>

                            <form action="{{ route('client.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="serial_id" id="serial_id">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder='@lang('file.Trainee name')' readonly>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder='@lang('file.E-mail')'>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="degree" id="degree" class="form-control"
                                            placeholder='@lang('file.degree')'>
                                        @if ($errors->has('degree'))
                                            <span class="text-danger">{{ $errors->first('degree') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="tel" name="phone" id="phone" class="form-control"
                                            placeholder='@lang('file.Phone')'>
                                        @if ($errors->has('phone'))
                                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="country" id="country" class="form-control"
                                            placeholder='@lang('file.Country')' readonly>
                                        @if ($errors->has('country'))
                                            <span class="text-danger">{{ $errors->first('country') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <div class="input-group">
                                            <input type="password" name="password" id="password" class="form-control "
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
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <input type="password" name="password_confirmation" id="password_confirmation"
                                                class="form-control" placeholder='@lang('file.Confirm Password')'>
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-12 text-center mt-4 mb-4">
                                    <button type="submit"
                                        style="background-color: #121743; border-radius:20px;font-family: Cairo;"
                                        class="btn btn-secondary btn-block">
                                        @lang('file.Register')
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
                                <h2 class="mb-5"
                                    style="color: #DF8317;font-family: Cairo;
                                            font-size: 25px;
                                            font-weight: 667;
                                            line-height: 50px;
                                            letter-spacing: 0em;">
                                    <img src="{{ asset('images/Vector (1).svg') }}">
                                    @lang('file.Client Registration')
                                </h2>
                            </div>
                            <form action="{{ route('client.store') }}" method="POST">
                                @csrf
                                <div class="form-row ">
                                    <input type="hidden" name="serial_id" id="serial_id">

                                    <div class="form-group col-md-6 text-right">
                                        <input type="email" name="email" id="email"
                                            class="form-control text-right" placeholder='@lang('file.E-mail')'>
                                        @if ($errors->has('email'))
                                            <span class="text-danger text-right">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 text-right">
                                        <input type="text" name="name" id="name"
                                            class="form-control text-right" placeholder='@lang('file.Trainee name')' readonly>
                                        @if ($errors->has('name'))
                                            <span class="text-danger text-right">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-row mt-3">

                                    <div class="form-group col-md-6 text-right">
                                        <input type="tel" name="phone" id="phone"
                                            class="form-control text-right" placeholder='@lang('file.Phone')'>
                                        @if ($errors->has('phone'))
                                            <span class="text-danger text-right">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6 text-right">
                                        <input type="text" name="degree" id="degree"
                                            class="form-control text-right" placeholder='@lang('file.degree')'>
                                        @if ($errors->has('degree'))
                                            <span class="text-danger text-right">{{ $errors->first('degree') }}</span>
                                        @endif
                                    </div>

                                </div>
                                <div class="form-row mt-3 d-flex justify-content-end">
                                    <div class="form-group col-md-6 text-right ">
                                        <input type="text" name="country" id="country"
                                            class="form-control text-right " placeholder='@lang('file.Country')' readonly>
                                        @if ($errors->has('country'))
                                            <span class="text-danger text-right ">{{ $errors->first('country') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-6 text-right">
                                        <div class="input-group">
                                            <input type="password" name="password" id="password"
                                                class="form-control text-right" placeholder='@lang('file.Password')'>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="togglePassword">
                                                    <i class="fas fa-eye"></i>
                                                </span>
                                            </div>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="text-danger text-right">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                </div>
                                <div class="form-row mt-3 d-flex justify-content-end">

                                    <div class="form-group col-md-6 text-right">
                                        <div class="input-group">
                                            <input type="password" name="password_confirmation"
                                                id="password_confirmation" class="form-control text-right"
                                                placeholder='@lang('file.Confirm Password')'>
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                            <span
                                                class="text-danger text-right">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>

                                </div>
                                <div class="col-md-12 text-center mt-4 mb-4">
                                    <button type="submit"
                                        style="background-color: #121743; border-radius:20px;font-family: Cairo;"
                                        class="btn btn-secondary btn-block">
                                        @lang('file.Register')
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script>
        function searchOnEnter(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                searchByCertificateNo();
            }
        }

        function searchByCertificateNo() {
            const certificateNo = document.getElementById('searchByCertificateNo').value;
            if (certificateNo) {
                fetch(`{{ route('certificate.search') }}?certificate_no=${certificateNo}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById('name').value = data.data.trainee_Name;
                            document.getElementById('country').value = data.data.country;
                            document.getElementById('serial_id').value = data.data.certificate_No;
                        } else {
                            alert(data.message);
                        }
                    })
                    .catch(error => console.error('Error:', error));
            }
        }
    </script>
@endsection
