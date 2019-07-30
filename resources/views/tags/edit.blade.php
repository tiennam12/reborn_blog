@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('tag.edit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tags.update', ['tag' => $tag->id]) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('tag.name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" value="{{ old('name', $tag->name) }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required autofocus>
                                @error('name')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('tag.description') }}</label>
                            <div class="col-md-6">
                                <input id="description" type="text" value="{{ old('description', $tag->description) }}" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" required autofocus>
                                @error('description')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('message.update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
