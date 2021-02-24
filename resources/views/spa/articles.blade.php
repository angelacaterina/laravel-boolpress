@extends('layout.app')

@section('title')
    Articles Api
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('main')
    <main id="main_content_articles">
        <h1>All articles from the api</h1>

        <div id="app">
            <div class="container">
                <div class="row justify-content-center">

                    <article-component></article-component>
            
                    <category-component></category-component>

                </div>
            </div>
        </div>
    </main>
@endsection