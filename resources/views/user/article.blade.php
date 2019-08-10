@extends('layouts.homepage')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-9 mt-5 left-article">
            <div class="card border-light main-article overflow-hidden">
                <div class="card-body">
                    <div class="cart-title mb-4">
                        <h4 class="font-weight-bold mb-4 h3 text-info">@markdown{!! $post->title !!}@endmarkdown</h4>
                        <h5 class="mb-4"><a href="#" class="mr-2"><span class="badge badge-light">Tag here!</span></a>
                            <a href="#" class="mr-2"><span class="badge badge-light">Tag here!</span></a>
                            <a href="#" class="mr-2"><span class="badge badge-light">Tag here!</span></a>
                        </h5>
                        <footer class="blockquote-footer"><a href="#"><img src="{{ showAvatar($post->user->provider) }}" alt="" class="rounded-circle mr-2" width="20px" height="20px">{{ $post->user->fullname }}</a>
                        </footer>
                    </div>
                    <p class="card-text">
                        @markdown
                            {!! $post->content !!}
                        @endmarkdown
                    </p>
                </div>
            </div>

            <div class="comment col-sm-13">
                        <div class="card mt-1 border-white">
                            <div class="card-body comment-component">
                                @foreach ($post->comments as $comment)
                                    <div class="row comment-item">
                                        <div class="col-sm-1">
                                            <img src="{{ showAvatar($comment->user->provider) }}" alt="" class="rounded-circle mr-2" width="50px" height="50px">
                                        </div>
                                        <div class="col-sm-11">
                                            <div class="card-title text-info">
                                                <a href="#" class="user_comment">{{ $comment->user->fullname }}</a>
                                                <p class="time_created">{{ $comment->user->created_at }}</p>
                                            </div>
                                            <div class="card-text">
                                                <p>{!! $comment->content !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    <form action="{{ route('comments.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <textarea class="form-control" name="content" id="content" rows="3" required=""></textarea>
                            <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">
                            <button type="submit" class="btn btn-info mt-1" id="comment" style="display: none;">Comment</button>
                        </div>
                    </form>
            </div>
        </div>
        <div class="col-sm-3 mt-5 right-article">
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
                        <a href="#"><img src="{{ showAvatar($post->user->provider) }}" alt="" class="rounded-circle mr-2"
                                width="70px" height="70px"></a>
                    </div>
                    <div class="col-sm-8 offset-sm-2 article-author">
                        <a href="#" class="font-weight-bold text-info text-decoration-none h5">{{ $post->user->fullname }}</a>
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

@section('script')
    <script>
        var imagePath = "{{ imagePath() }}";
    </script>
    <script type="text/javascript" src="{!! asset('js/show_comment.js') !!}"></script>
@endsection
