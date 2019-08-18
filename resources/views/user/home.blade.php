@extends('layouts.homepage')

@section('content')
<div class="container">
    <div class="row">
        {{-- Start Article --}}
        <div class="col-sm-9 mt-5">
            <div class="card bg-white border-light">
                <div class="card-header bg-white">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                {{ __('home.good_article') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                {{ __('home.new_article') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    @foreach($posts as $post)
                    <div class="row mb-5">
                        {{-- author-info --}}
                        <div class="col-sm-1">
                            @if ($post->user->image)
                                <a href="#"><img src="{{ asset('images/'. $post->user->image) }}" alt="" class="rounded-circle" width="50px" height="50px"></a>
                            @else
                                <a href="#"><img src="{{ asset('images/profile.png') }}" alt="" class="rounded-circle" width="50px" height="50px"></a>
                            @endif
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
                            <footer class="blockquote-footer"><a href="{{ route('authors.show', ['id' => $post->user->id]) }}" class="mr-1 text-info">{{ $post->user->fullname }}</a>{{ $post->created_at }}</footer>
                        </div>
                        {{-- End content --}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- End Article --}}
        {{-- Start Right Article --}}
        <div class="col-sm-3 mt-5">
            @auth
            <div class="user-info">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card border-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-2 ml-0 mr-1">
                                        <img src="{{ showAvatar(auth()->user()->provider) }}" alt="" width="80px" height="80px" class="rounded-circle">
                                    </div>
                                    <div class="col-sm-9 ml-3">
                                        <h5 class="card-title ml-4"><a href="#"
                                                class="text-decoration-none font-weight-bold text-info">{{ auth()->user()->fullname }}</a></h5>
                                        <h6 class="card-text ml-4">
                                            <a href="" class="text-decoration-none text-info">1 </a>
                                            {{ __('home.post') }}<br>
                                            <a href="" class="text-decoration-none text-info">2 </a>{{ __('home.follow') }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 border-bottom"></div>
                </div>
            </div>
            @endauth
            <div class="hot-tags">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card border-white">
                            <div class="card-body">
                                <h6 class="card-title font-italic">
                                    <i class="fas fa-tags fa-sm mr-2 text-danger"></i> {{ __('home.hot_tag') }} </h6>
                                <h6 class="card-text">
                                    <a href="#"><span class="badge badge-light">Tag here 9</span></a>
                                    <a href="#"><span class="badge badge-light">Tag here 10</span></a>
                                    <a href="#"><span class="badge badge-light">Tag here 12</span></a>
                                    <a href="#"><span class="badge badge-light">Tag here 14</span></a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 border-bottom"></div>
                </div>
            </div>
            <div class="hot-authors">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card border-white">
                            <div class="card-body">
                                <h6 class="card-title font-italic">
                                    <i class="fas fa-trophy mr-2 text-warning"></i> {{ __('home.hot_author') }} </h6>
                                <div class="card-text mb-1">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a href="#"><img src="{{ asset('images/profile.png') }}" alt=""
                                                    class="rounded-circle" width="20px" height="20px"></a>
                                        </div>
                                        <div class="col-sm-10">
                                            <a href="#" class="text-decoration-none text-info">Username here!</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-text mb-1">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a href="#"><img src="{{ asset('images/profile.png') }}" alt=""
                                                    class="rounded-circle" width="20px" height="20px"></a>
                                        </div>
                                        <div class="col-sm-10">
                                            <a href="#" class="text-decoration-none text-info">Username here!</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-text mb-1">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <a href="#"><img src="{{ asset('images/profile.png') }}" alt=""
                                                    class="rounded-circle" width="20px" height="20px"></a>
                                        </div>
                                        <div class="col-sm-10">
                                            <a href="#" class="text-decoration-none text-info">Username here!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 border border-bottom"></div>
                </div>
            </div>
        </div>
        {{-- End Right Article --}}
    </div>
</div>
@endsection
