@extends('layout.app')

@section('title')
    Articles Edit
@endsection

@section('header')
    @include('layout.header')
@endsection


@section('main')
    <h1>Edit {{$article->title}}</h1>
    <form action="{{route('articles.update', ['article'=>$article->id])}}" method="post">
        @csrf
        @method('PUT')

        {{-- title --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$article->title}}">
        </div>
        {{-- @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}

        {{-- subtitle --}}
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input class="form-control" type="text" name="subtitle" id="subtitle" value="{{$article->subtitle}}">
        </div>
        {{-- @error('subtitle')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}

        {{-- body --}}
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3">{{$article->body}}</textarea>
        </div>
        {{-- @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}

        {{-- author --}}
        <div class="form-group">
            <label for="author">Author</label>
            <input class="form-control" type="text" name="author" id="author" value="{{$article->author}}">
        </div>
        {{-- @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   
@endsection