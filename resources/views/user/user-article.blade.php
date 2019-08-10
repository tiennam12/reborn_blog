@extends('layouts.homepage')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2 mt-5">
            <div class="info col-sm-12">
                <img src="{{ asset('images/profile.png')}}" alt="" width="130" height="130"
                    class="rounded-circle text-center mb-2">
                <h5 class="text-center font-weight-bold text-info">{{ auth()->user()->fullname }}</h5>
                <div class="col-sm-4 border-right"></div>
                <div class="col-sm-4 border-right"></div>
                <div class="col-sm-4 border-right"></div>
            </div>
        </div>
        <div class="col-sm-9 mt-5 ml-2">
            <div class="row">
                <div class="col-sm-1">
                    <a href="#"><img src="{{ asset('images/profile.png') }}" alt="" class="rounded-circle" width="50px"
                            height="50px"></a>
                </div>
                {{-- End author info --}}
                {{-- Content --}}
                <div class="col-sm-11">
                    <h5 class="card-title font-weight-bold text-info">Special title here!
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                    </h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                    </p>
                    <footer class="blockquote-footer"><a href="#" class="mr-1 text-info">Author Post
                            here!</a>Someone
                        famous</footer>
                </div>
                <div class="col-sm-12 border-bottom mt-2 mb-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <a href="#"><img src="{{ asset('images/profile.png') }}" alt="" class="rounded-circle" width="50px"
                            height="50px"></a>
                </div>
                {{-- End author info --}}
                {{-- Content --}}
                <div class="col-sm-11">
                    <h5 class="card-title font-weight-bold text-info">Special title here!
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                    </h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                    </p>
                    <footer class="blockquote-footer"><a href="#" class="mr-1 text-info">Author Post
                            here!</a>Someone
                        famous</footer>
                </div>
                <div class="col-sm-12 border-bottom mt-2 mb-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <a href="#"><img src="{{ asset('images/profile.png') }}" alt="" class="rounded-circle" width="50px"
                            height="50px"></a>
                </div>
                {{-- End author info --}}
                {{-- Content --}}
                <div class="col-sm-11">
                    <h5 class="card-title font-weight-bold text-info">Special title here!
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                    </h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                    </p>
                    <footer class="blockquote-footer"><a href="#" class="mr-1 text-info">Author Post
                            here!</a>Someone
                        famous</footer>
                </div>
                <div class="col-sm-12 border-bottom mt-2 mb-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <a href="#"><img src="{{ asset('images/profile.png') }}" alt="" class="rounded-circle" width="50px"
                            height="50px"></a>
                </div>
                {{-- End author info --}}
                {{-- Content --}}
                <div class="col-sm-11">
                    <h5 class="card-title font-weight-bold text-info">Special title here!
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                    </h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                    </p>
                    <footer class="blockquote-footer"><a href="#" class="mr-1 text-info">Author Post
                            here!</a>Someone
                        famous</footer>
                </div>
                <div class="col-sm-12 border-bottom mt-2 mb-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <a href="#"><img src="{{ asset('images/profile.png') }}" alt="" class="rounded-circle" width="50px"
                            height="50px"></a>
                </div>
                {{-- End author info --}}
                {{-- Content --}}
                <div class="col-sm-11">
                    <h5 class="card-title font-weight-bold text-info">Special title here!
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                        <a href="#"><span class="badge badge-light">Tag here!</span></a>
                    </h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.
                    </p>
                    <footer class="blockquote-footer"><a href="#" class="mr-1 text-info">Author Post
                            here!</a>Someone
                        famous</footer>
                </div>
                <div class="col-sm-12 border-bottom mt-2 mb-2"></div>
            </div>
        </div>
    </div>
</div>
@endsection
