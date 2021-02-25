@extends('layout.app')

@section('title')
    Articles Show
@endsection

@section('header')
    @include('layout.header')
@endsection


@section('main')
    <main class="container">
        <h1>{{$article->title}}</h1>
        <h2>{{$article->subitle}}</h2>
        <p>{{$article->body}}</p>
        <p>Author: {{$article->author}}</p>
        <p>Category: {{$article->category}}</p>
    </main>
@endsection