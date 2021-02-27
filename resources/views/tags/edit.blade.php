@extends('layout.app')

@section('title')
    Tags Edit
@endsection

@section('header')
    @include('layout.header')
@endsection


@section('main')
    <h1>Edit {{$tag->name}}</h1>
    <form action="{{route('tags.update', ['tag'=>$tag->id])}}" method="post">
        @csrf
        @method('PUT')

        {{-- name --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="name" id="name" value="{{$tag->name}}">
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- views --}}
        <div class="form-group">
            <label for="views">views</label>
            <input class="form-control" type="text" name="views" id="views" value="{{$tag->views}}">
        </div>
        @error('views')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- topic --}}
        <div class="form-group">
            <label for="topic">Topic</label>
            <input class="form-control" type="text" name="topic" id="topic" value="{{$tag->topic}}">
        </div>
        @error('topic')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   
@endsection