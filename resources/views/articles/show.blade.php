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
        <p>Category: {{$article->category ? $article->category->genre : 'N/A'}}</p>
        <div class="tags">
            Tags: 
            @if (count($article->tags) > 0)
                @foreach ($article->tags as $tag)
                    <span>{{ $tag->name }}</span>
                @endforeach
            @else
                <span>N/A</span>
            @endif
        </div>
    </main>
@endsection