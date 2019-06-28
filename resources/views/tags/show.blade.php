@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('message.tags') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">{{ __('message.name') }}</div>
                        <div class="col-md-6">{{ $tag->name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('message.description') }}</div>
                        <div class="col-md-6">{{ $tag->description }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('message.createby') }}</div>
                        <div class="col-md-6">{{ $tag->user_id }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
