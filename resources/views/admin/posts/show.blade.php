@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">{{ __('post.title') }}</div>
                        <div class="col-md-6">@markdown{!! $post->title !!}@endmarkdown</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('post.content') }}</div>
                        <div class="col-md-6">@markdown{!! $post->content !!}@endmarkdown</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('post.createby') }}</div>
                        <div class="col-md-6">{{ $post->user_id }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
