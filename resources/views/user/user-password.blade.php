@extends('layouts.homepage')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2 offset-1 left-section mt-5 border-right">
            <h6><a href="#" class="text-decoration-none font-weight-bold text-info">Account</a></h6>
            <h6><a href="#" class="text-decoration-none font-weight-bold text-info">Password</a></h6>
        </div>
        <div class="col-sm-8 offset-1 right-section mt-5">
            <form>
                @csrf
                <div class="col-s12 edit-password mt-2">
                    <div class="form-group">
                        <label for="old-password" class="font-weight-bold">{{ __('user-password.old_password') }}</label>
                        <input type="password" class="form-control" id="old-password">
                    </div>
                    <div class="form-group">
                        <label for="password" class="font-weight-bold">{{ __('user-password.new_password') }}</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="font-weight-bold">{{ __('user-password.confirm_password') }}</label>
                        <input type="password" class="form-control" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-success rounded-pill font-weight-bold"><i
                            class="far fa-save pr-2"></i>{{ __('user-password.save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
