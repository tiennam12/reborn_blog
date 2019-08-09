@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number">{{ $users }}</span>
            </div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Posts</span>
                <span class="info-box-number">{{ $posts }}</span>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-pricetag-outline"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Tags</span>
                <span class="info-box-number">{{ $tags }}</span>
            </div>
        </div>
    </div>
    
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-comments-o"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Comment</span>
                <span class="info-box-number">{{ $comments }}</span>
            </div>
        </div>
    </div>
</div>
@stop
