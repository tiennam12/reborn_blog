@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-header">{{ __('message.list') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">{{ __('message.title') }}</th>
                            <th scope="col">{{ __('message.content') }}</th>
                            <th scope='col'>{{ __('message.createby') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr class="row_{{ $post->id }}">
                                <th scope="row">{{ $post->id }}</th>
                                    <td>
                                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                                    </td>
                                    <td>{{ $post->content }}</td>
                                    <td>
                                        <a href="/users/{{ $post->user_id }}">{{ $post->user_id }}</a>
                                    </td>
                                    <td>
                                        <a href="posts/{{ $post->id }}/edit" class="btn btn-info" role="button">Edit</a>
                                        <a href="#" id="btn-del-post" class="btn btn-info btn-del-post" role="button" data-post-id="{{ $post->id }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

    <script src="{{ asset('js/delete_post.js') }}"></script>
