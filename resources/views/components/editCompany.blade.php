<!-- Modal -->
@if (app()->getLocale() == 'ar')
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">@lang('file.Edit Profile')</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
                </div>
                <div class="modal-body">
                    <!-- Edit Profile Form -->
                    <form action="{{ route('company.update', $company->id) }}" method="POST" id="editProfileForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">@lang('file.Name')</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $company->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">@lang('file.Email')</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ $company->email }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="phone">@lang('file.Phone')</label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                value="{{ $company->phone }}">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="type_of_company">@lang('file.Type of Company')</label>
                            <input type="text" name="type_of_company" id="type_of_company" class="form-control"
                                value="{{ $company->type_of_company }}">
                            @if ($errors->has('type_of_company'))
                                <span class="text-danger">{{ $errors->first('type_of_company') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="address">@lang('file.Address')</label>
                            <input type="text" name="address" id="address" class="form-control"
                                value="{{ $company->address }}">
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="logo">@lang('file.Logo')</label>
                             @if ($company->media && $company->media->where('type', 'logo')->first())
                                <img src="{{ asset('storage/' . $company->media->where('type', 'logo')->first()->file_path) }}"
                                    class="img-fluid rounded-circle" alt="Company Logo">
                            @else
                                <img src="{{ asset('images/default-profile.png') }}" class="img-fluid rounded-circle"
                                    alt="Default Profile Picture">
                            @endif
                            <input type="file" name="logo" id="logo" class="form-control">
                            @if ($errors->has('logo'))
                                <span class="text-danger">{{ $errors->first('logo') }}</span>
                            @endif
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary text-white">@lang('file.Update')</button>
                        </div>
                    </form>

                    <!-- Change Password Form -->
                    <form action="{{ route('company.changePassword', $company->id) }}" method="POST"
                        id="changePasswordForm" class="mt-4">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="password">@lang('file.New Password')</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">@lang('file.Confirm Password')</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control">
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-secondary">@lang('file.Change Password')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@else
    <!-- Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel"
        aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">@lang('file.Edit Profile')</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
                </div>
                <div class="modal-body">
                    <!-- Edit Profile Form -->
                    <form action="{{ route('company.update', $company->id) }}" method="POST" id="editProfileForm" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="text-right" for="name">@lang('file.Name')</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $company->name }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-right" for="email">@lang('file.Email')</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ $company->email }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-right" for="phone">@lang('file.Phone')</label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                value="{{ $company->phone }}">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-right" for="type_of_company">@lang('file.Type of Company')</label>
                            <input type="text" name="type_of_company" id="type_of_company" class="form-control"
                                value="{{ $company->type_of_company }}">
                            @if ($errors->has('type_of_company'))
                                <span class="text-danger">{{ $errors->first('type_of_company') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-right" for="address">@lang('file.Address')</label>
                            <input type="text" name="address" id="address" class="form-control"
                                value="{{ $company->address }}">
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            @if ($company->media && $company->media->where('type', 'logo')->first())
                                <img src="{{ asset('storage/' . $company->media->where('type', 'logo')->first()->file_path) }}"
                                    class="img-fluid rounded-circle" alt="Company Logo">
                            @else
                                <img src="{{ asset('images/default-profile.png') }}" class="img-fluid rounded-circle"
                                    alt="Default Profile Picture">
                            @endif
                            <label class="text-right" for="logo">@lang('file.Logo')</label>
                            <input type="file" name="logo" id="logo" class="form-control text-right">
                            @if ($errors->has('logo'))
                                <span class="text-danger">{{ $errors->first('logo') }}</span>
                            @endif
                        </div>


                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary text-white">@lang('file.Update')</button>
                        </div>
                    </form>

                    <!-- Change Password Form -->
                    <form action="{{ route('company.changePassword', $company->id) }}" method="POST"
                        id="changePasswordForm" class="mt-4">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="text-right" for="password">@lang('file.New Password')</label>
                            <input type="password" name="password" id="password" class="form-control">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="text-right" for="password_confirmation">@lang('file.Confirm Password')</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control">
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-secondary">@lang('file.Change Password')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
<style>
    .text-right {
        text-align: right;
        display: block;
    }
</style>
