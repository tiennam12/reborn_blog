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
                <div class="card-header">{{ __('tag.list') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">{{ __('tag.name') }}</th>
                            <th scope="col">{{ __('tag.description') }}</th>
                            <th scope='col'>{{ __('tag.createby') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr class="row_{{ $tag->id }}">
                                <th scope="row">{{ $tag->id }}</th>
                                    <td>
                                        <a href="/tags/{{ $tag->id }}">{{ $tag->name }}</a>
                                    </td>
                                    <td>{{ $tag->description }}</td>
                                    <td>
                                        <a href="/users/{{ $tag->user_id }}">{{ $tag->user_id }}</a>
                                    </td>
                                    <td>
                                        <a href="tags/{{ $tag->id }}/edit" class="btn btn-info" role="button">Edit</a>
                                        <a href="#" id="btn-del-tag" class="btn btn-info btn-del-tag" role="button" data-tag-id="{{ $tag->id }}">Delete</a>
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

@section('js')
    <script src="{{ asset('js/delete_tag.js') }}"></script>
@endsection
