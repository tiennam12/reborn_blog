@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('message.posts') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">{{ __('message.title') }}</div>
                        <div class="col-md-6">@markdown{!! $post->title !!}@endmarkdown</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('message.content') }}</div>
                        <div class="col-md-6">@markdown{!! $post->content !!}@endmarkdown</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('message.createby') }}</div>
                        <div class="col-md-6">{{ $post->user_id }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
