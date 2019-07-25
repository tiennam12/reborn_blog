@extends('layouts.homepage')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2 offset-1 left-section mt-5 border-right">
            <h6><a href="#" class="text-decoration-none font-weight-bold text-info">{{ __('user-info.account') }}</a></h6>
            <h6><a href="#" class="text-decoration-none font-weight-bold text-info active">{{ __('user-info.password') }}</a></h6>
        </div>
        <div class="col-sm-8 offset-1 right-section mt-5">
            <form>
                @csrf
                <div class="col-s12 image-user">
                    <h6 class="font-weight-bold">{{ __('user-info.image_user') }}</h6>
                    <img src="{{ showAvatar(auth()->user()->provider) }}" alt="" width="80" height="80" class="rounded-circle">
                    <div class="form-group mt-2">
                        <input type="file" class="form-control-file" id="image">
                    </div>
                </div>
                <div class="col-s12 edit-info mt-2">
                    <div class="form-group">
                        <label for="fullname" class="font-weight-bold">{{ __('user-info.user_name') }}</label>
                        <input type="text" class="form-control" id="fullname" placeholder="" value="{{ auth()->user()->fullname }}">
                    </div>
                    <div class="form-group">
                        <label for="nickname" class="font-weight-bold">{{ __('user-info.nick_name') }}</label>
                        <input type="text" class="form-control" id="nickname" placeholder="" value="{{ auth()->user()->nickname }}">
                    </div>
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">{{ __('user-info.email') }}</label>
                        <input type="email" class="form-control" id="email" placeholder="" value="{{ auth()->user()->email }}">
                    </div>
                    <button type="submit" class="btn btn-info rounded-pill font-weight-bold"><i
                            class="far fa-save pr-2"></i>{{ __('user-info.save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
