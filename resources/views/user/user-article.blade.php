@extends('layouts.homepage')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2 mt-5">
            <div class="info col-sm-12">
                <img src="{{ asset('images/' . auth()->user()->image) }}" alt="" width="130" height="130"
                    class="rounded-circle text-center mb-2">
                <h5 class="text-center font-weight-bold text-info">{{ auth()->user()->fullname }}</h5>
                <div class="col-sm-4 border-right"></div>
                <div class="col-sm-4 border-right"></div>
                <div class="col-sm-4 border-right"></div>
            </div>
        </div>
        <div class="col-sm-9 mt-5 ml-2">
            @foreach ($posts as $post)
            <div class="row">
                <div class="col-sm-1">
                    <a href="#"><img src="{{ asset('images/' . $post->user->image) }}" alt="" class="rounded-circle" width="50px"
                            height="50px"></a>
                </div>
                {{-- End author info --}}
                {{-- Content --}}
                <div class="col-sm-11">
                    <h5 class="card-title"><a href="{{ route('posts.show', ['id' => $post->id]) }}" class="text-decoration-none  font-weight-bold text-info">{{ $post->title }}</a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                    </h5>
                    <p class="card-text">
                        @markdown{!! substr($post->content, 0, 250) !!}{{ ' ...' }}@endmarkdown
                    </p>
                    <footer class="blockquote-footer"><a href="#" class="mr-1 text-info">{{ $post->user->fullname }}</a>{{ $post->created_at }}</footer>
                </div>
                <div class="col-sm-12 border-bottom mt-2 mb-2"></div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
