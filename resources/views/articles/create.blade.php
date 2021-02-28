@extends('layout.app')

@section('title')
    Articles Create
@endsection

@section('header')
    @include('layout.header')
@endsection


@section('main')
    <h1>Create a new Article</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('articles.store')}}" method="post">
        @csrf
        {{-- title --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title')}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- subtitle --}}
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input class="form-control" type="text" name="subtitle" id="subtitle" value="{{ old('subtitle')}}">
        </div>
        @error('subtitle')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- body --}}
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" rows="3"> {{ old('body')}}</textarea>
        </div>
        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- author --}}
        <div class="form-group">
            <label for="author">Author</label>
            <input class="form-control" type="text" name="author" id="author" value="{{ old('author')}}">
        </div>
        @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- category --}}
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id}}">{{ $category->genre}}</option>
                @endforeach
            </select>
        </div>
        @error('category')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- tag --}}
        <div class="form-group">
            <label for="tags">Tags</label>
            <select class="form-control" name="tags[]" id="tags" multiple>
                {{-- @if ($tags) --}}
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id}}">{{ $tag->name}}</option>
                    @endforeach
                {{-- @endif --}}
            </select>
        </div>
        @error('tags')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection