@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('posts.posts') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">{{ __('posts.title') }}</div>
                        <div class="col-md-6">@markdown{!! $post->title !!}@endmarkdown</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('posts.content') }}</div>
                        <div class="col-md-6">@markdown{!! $post->content !!}@endmarkdown</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('posts.createby') }}</div>
                        <div class="col-md-6">{{ $post->user_id }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
