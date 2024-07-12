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
                <form action="{{ route('client.update', $client->id) }}" method="POST" id="editProfileForm">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label  for="name">@lang('file.Name')</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $client->name }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">@lang('file.Email')</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ $client->email }}">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="phone">@lang('file.Phone')</label>
                        <input type="text" name="phone" id="phone" class="form-control"
                            value="{{ $client->phone }}">
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="country">@lang('file.Country')</label>
                        <input type="text" name="country" id="country" class="form-control"
                            value="{{ $client->country }}">
                        @if ($errors->has('country'))
                            <span class="text-danger">{{ $errors->first('country') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="degree">@lang('file.degree')</label>
                        <input type="text" name="degree" id="degree" class="form-control"
                            value="{{ $client->degree }}">
                        @if ($errors->has('degree'))
                            <span class="text-danger">{{ $errors->first('degree') }}</span>
                        @endif
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary text-white">@lang('file.Update')</button>
                    </div>
                </form>

                <!-- Change Password Form -->
                <form action="{{ route('client.changePassword', $client->id) }}" method="POST" id="changePasswordForm"
                    class="mt-4">
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
                <form action="{{ route('client.update', $client->id) }}" method="POST" id="editProfileForm">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label class="text-right" for="name">@lang('file.Name')</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $client->name }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="text-right" for="email">@lang('file.Email')</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ $client->email }}">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="text-right" for="phone">@lang('file.Phone')</label>
                        <input type="text" name="phone" id="phone" class="form-control"
                            value="{{ $client->phone }}">
                        @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="text-right" for="country">@lang('file.Country')</label>
                        <input type="text" name="country" id="country" class="form-control"
                            value="{{ $client->country }}">
                        @if ($errors->has('country'))
                            <span class="text-danger">{{ $errors->first('country') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label class="text-right" for="degree">@lang('file.degree')</label>
                        <input type="text" name="degree" id="degree" class="form-control"
                            value="{{ $client->degree }}">
                        @if ($errors->has('degree'))
                            <span class="text-danger">{{ $errors->first('degree') }}</span>
                        @endif
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary text-white">@lang('file.Update')</button>
                    </div>
                </form>

                <!-- Change Password Form -->
                <form action="{{ route('client.changePassword', $client->id) }}" method="POST" id="changePasswordForm"
                    class="mt-4">
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
