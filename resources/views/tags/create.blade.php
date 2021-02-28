@extends('layout.app')

@section('title')
    Tags Create
@endsection

@section('header')
    @include('layout.header')
@endsection


@section('main')
    <h1>Create a new Tag</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('tags.store')}}" method="post">
        @csrf
        {{-- name --}}
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="{{ old('name')}}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- views --}}
        <div class="form-group">
            <label for="views">Views</label>
            <input class="form-control" type="text" name="views" id="views" value="{{ old('views')}}">
        </div>
        @error('views')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- topic --}}
        <div class="form-group">
            <label for="topic">Topic</label>
            <input class="form-control" type="text" name="topic" id="topic" value="{{ old('topic')}}">
        </div>
        @error('topic')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection