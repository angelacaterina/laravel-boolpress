@extends('layout.app')

@section('title')
    Category Edit
@endsection

@section('header')
    @include('layout.header')
@endsection


@section('main')
    <h1>Edit {{$category->title}}</h1>
    <form action="{{route('categories.update', ['category'=>$category->id])}}" method="post">
        @csrf
        @method('PUT')

        {{-- title --}}
        <div class="form-group">
            <label for="genre">Genre</label>
            <input class="form-control" type="text" name="genre" id="genre" value="{{$category->genre}}">
        </div>
        @error('genre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- subtitle --}}
        <div class="form-group">
            <label for="over_18">Over 18</label>
            <input class="form-control" type="text" name="over_18" id="over_18" value="{{$category->over_18}}">
        </div>
        @error('over_18')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   
@endsection