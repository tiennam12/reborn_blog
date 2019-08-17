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
        <th scope="col">{{ __('tag.name') }}</th>
        <th scope="col">{{ __('tag.description') }}</th>
        <th scope='col'>{{ __('tag.createby') }}</th>
        <th scope='col'>{{ __('tag.action') }}</th>
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
                    <a href="#" id="btn-del-tag" class="btn btn-info btn-del-tag" role="button" data-tag-id="{{ $tag->id }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('js')
<script src="{{ asset('js/jquery.dataTables.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable();
    });
</script>

<script src="{{ asset('js/delete_tag.js') }}"></script>
@endsection

