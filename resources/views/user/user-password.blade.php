@extends('layouts.homepage')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2 offset-1 left-section mt-5 border-right">
            <h6><a href="{{ route('users.edit', ['id' => $user->id]) }}" class="text-decoration-none font-weight-bold text-info">{{ __('user-info.account') }}</a></h6>
            <h6><a href="{{ route('passwords.edit', ['id' => $user->id]) }}" class="text-decoration-none font-weight-bold text-info">{{ __('user-info.password') }}</a></h6>
        </div>
        <div class="col-sm-8 offset-1 right-section mt-5">
            <form method="POST" action="{{ route('passwords.change', ['id' => $user->id]) }}">
                @csrf
                {{ method_field('PUT') }}
                @if (session('err'))
                    <div class="alert alert-danger">{{ session('err') }}</div>
                @endif
                @if (session('msg'))
                    <div class="alert alert-success">{{ session('msg') }}</div>
                @endif
                <div class="col-s12 edit-password mt-2">
                    <div class="form-group">
                        <label for="old_password" class="font-weight-bold">{{ __('user-password.old_password') }}</label>
                        <input type="password" name="old_password" class="form-control" id="old_password" required="">
                        @error('old_password')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="font-weight-bold">{{ __('user-password.new_password') }}</label>
                        <input type="password" name="password" class="form-control" id="password" required="">@error('password')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="font-weight-bold">{{ __('user-password.confirm_password') }}</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required="">
                        @error('password_confirmation')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success rounded-pill font-weight-bold"><i
                            class="far fa-save pr-2"></i>{{ __('user-password.save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
