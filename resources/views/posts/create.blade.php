@extends('layouts.posts')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" id="upload_form" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                    <table class="table">
                        <tr>
                            <td width="40%" align="left"><label>Select File for Upload</label></td>
                            <td width="30"><input type="file" name="select_file" id="select_file" /></td>
                            <td width="30%" align="left"><input type="submit" name="upload" id="upload" class="btn btn-primary" value="Upload"></td>
                        </tr>
                        <tr>
                            <td width="40%" align="right"></td>
                            <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                            <td width="30%" align="left"></td>
                        </tr>
                    </table>
                    <br/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('post.title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" required>
                                @error('title')
                                    <span>{{ $posts }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('post.content') }}</label>
                            <textarea name="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" id="content"></textarea>
                            <script>
                                var simplemde = new SimpleMDE({ element: $("#content")[0] });
                                    simplemde.value();
                            </script>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {!! Form::label('tag', 'Tags', ['class' => 'control-label']) !!}
                                <button type="button" class="btn btn-primary btn-xs" id="selectbtn-tag">{{ __('tag.select_all') }}
                                </button>
                                <button type="button" class="btn btn-primary btn-xs" id="deselectbtn-tag">{{ __('tag.deselect_all') }}
                                </button>
                                {!! Form::select('tag[]', $tags, old('tag'), ['class' => 'form-control select2', 'multiple' => 'multiple', 'id' => 'selectall-tag' ]) !!}
                                <p class="help-block"></p>
                                @if($errors->has('tag'))
                                    <p class="help-block">
                                        {{ $errors->first('tag') }}
                                    </p>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('post.create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#selectbtn-tag").click(function() {
        $("#selectall-tag > option").prop("selected","selected");
        $("#selectall-tag").trigger("change");
    });
    $("#deselectbtn-tag").click(function() {
        $("#selectall-tag > option").prop("selected","");
        $("#selectall-tag").trigger("change");
    });

    $(document).ready(function () {
        $('.select2').select2();
    });
</script>

<script>
$(document).ready(function() {
    
    $('#upload_form').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url:"{{ route('ajaxupload.action') }}",
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(data) {
                const pos = simplemde.codemirror.getCursor();
                    simplemde.codemirror.replaceRange('![]('+(data.image_path)+')', pos);
            }
        })
    });

});
</script>
@endsection
