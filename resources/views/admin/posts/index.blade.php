@extends('adminlte::page')

@section('content')
@section('css')
<link href="{{ asset('css/jquery.dataTables.css') }}" rel="stylesheet">
@endsection
<meta name="csrf-token" content="{{ csrf_token() }}">
<table id="datatables" class="table table-striped table-bordered" style="width:100%">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">{{ __('post.title') }}</th>
        <th scope='col'>{{ __('post.createby') }}</th>
        <th scope='col'>{{ __('post.action') }}</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr class="row_{{ $post->id }}">
            <th scope="row">{{ $post->id }}</th>
                <td>
                    <a href="/admin/posts/{{ $post->id }}">{{ $post->title }}</a>
                </td>
                <td>
                    <a href="/users/{{ $post->user_id }}">{{ $post->user_id }}</a>
                </td>
                <td>
                    <a href="#" id="btn-del-post" class="btn btn-info btn-del-post" role="button" data-post-id="{{ $post->id }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="row mt-5">
    <div class="col text-center">
        <div class="row justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable();
    });
</script>
<script src="{{ asset('js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('js/delete_post.js') }}"></script>
@endsection
