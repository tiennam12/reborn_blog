@extends('adminlte::page')

@section('content')
@section('css')
<link href="{{ asset('css/jquery.dataTables.css') }}" rel="stylesheet">
@endsection
<meta name="csrf-token" content="{{ csrf_token() }}">
<table id="datatables" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>{{ __('user-info.user_name') }}</th>
            <th>{{ __('user-info.nick_name') }}</th>
            <th>Email</th>
            <th>Start date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->fullname }}</td>
            <td>{{ $user->nickname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable();
    });
</script>
<script src="{{ asset('js/jquery.dataTables.js') }}"></script>
@endsection
