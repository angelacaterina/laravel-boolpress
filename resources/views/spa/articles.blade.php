@extends('layout.app')

@section('title')
    Articles Api
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('main')
    <main id="main_content_articles" class="full-height">
        <h1>All articles from the api</h1>
        <div id="app">
            <article-component></article-component>
        </div>
    </main>
@endsection