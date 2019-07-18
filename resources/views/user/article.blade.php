@extends('layouts.homepage')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-9 mt-5">
            <div class="card border-light">
                <div class="card-body">
                    <div class="cart-title mb-4">
                        <h4 class="font-weight-bold mb-4 h3 text-info">Title Article here!!</h4>
                        <h5 class="mb-4"><a href="#" class="mr-2"><span class="badge badge-light">Tag here!</span></a>
                            <a href="#" class="mr-2"><span class="badge badge-light">Tag here!</span></a>
                            <a href="#" class="mr-2"><span class="badge badge-light">Tag here!</span></a>
                        </h5>
                        <footer class="blockquote-footer"><a href="#"><img src="{{ asset('image/profile.png') }}" alt=""
                                    class="rounded-circle mr-2" width="20px" height="20px"></a>Author. Time!!!
                        </footer>
                    </div>
                    <p class="card-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 mt-5">
            <div class="saved">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="row">
                            <div class="col-sm-6 border-right">
                                <h4 class="mb-0 text-info">20</h4>
                                <p>{{ __('article.saved') }}</p>
                            </div>
                            <div class="col-sm-6">
                                <h4 class="mb-0 text-info">20</h4>
                                <p>{{ __('article.comment') }}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-12">
                                <a href="#" class="text-decoration-none"><button type="button"
                                        class="btn btn-outline-info btn-block rounded-pill">{{ __('article.save') }}</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 border-top mt-5"></div>
            <div class="author-info col-sm-12 mt-3">
                <div class="row">
                    <div class="col-sm-2 image-author">
                        <a href="#"><img src="{{ asset('image/profile.png') }}" alt="" class="rounded-circle mr-2"
                                width="70px" height="70px"></a>
                    </div>
                    <div class="col-sm-8 offset-sm-2 article-author">
                        <a href="#" class="font-weight-bold text-info text-decoration-none h5">Author</a>
                        <p class=" mt-2 mb-0"><a href="#" class="text-info text-decoration-none">8 </a>{{ __('article.article') }}</p>
                        <p><a href="#" class="text-info text-decoration-none">8 </a>{{ __('article.follow') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 border-top mt-1"></div>
        </div>
    </div>
</div>
@endsection
