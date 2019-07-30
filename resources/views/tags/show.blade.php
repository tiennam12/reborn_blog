@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('tag.tags') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">{{ __('tag.name') }}</div>
                        <div class="col-md-6">{{ $tag->name }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('tag.description') }}</div>
                        <div class="col-md-6">{{ $tag->description }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">{{ __('tag.createby') }}</div>
                        <div class="col-md-6">{{ $tag->user_id }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
