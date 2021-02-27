@extends('layout.app')

@section('title')
    Tags Show
@endsection

@section('header')
    @include('layout.header')
@endsection


@section('main')
    <main class="container">
        <h1>{{$tag->name}}</h1>
        <p>Views :{{$tag->views}}</p>
        <p>Topic: {{$tag->topic}}</p>
    </main>
@endsection