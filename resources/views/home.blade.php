@extends('layout.app')

@section('title')
    Boolpress
@endsection

@section('main')
    <main id="main_content">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Laravel Boolpress
                </div>

                <div class="links">
                    {{-- PAGE --}}
                    <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="{{ Route::currentRouteName() === 'about' ? 'active' : '' }}">About</a>
                    <a href="{{ route('blog') }}" class="{{ Route::currentRouteName() === 'blog' ? 'active' : '' }}">Blog</a>

                    {{-- RESOURCE --}}
                    <a href="{{ route('articles.index') }}" class="{{ Route::currentRouteName() === 'articles.index' ? 'active' : '' }}">Articles</a>
                    <a href="{{ route('categories.index') }}" class="{{ Route::currentRouteName() === 'categories.index' ? 'active' : '' }}">Categories</a>
                    <a href="{{ route('tags.index') }}" class="{{ Route::currentRouteName() === 'tags.index' ? 'active' : '' }}">Tags</a>

                    {{-- API --}}
                    <a href="{{ route('articles_api') }}" class="{{ Route::currentRouteName() === 'articles_api' ? 'active2' : '' }}">Articles API</a>
                    <a href="{{ route('categories_api') }}" class="{{ Route::currentRouteName() === 'categories_api' ? 'active2' : '' }}">Categories API</a>
                    <a href="{{ route('tags_api') }}" class="{{ Route::currentRouteName() === 'tags_api' ? 'active2' : '' }}">Tags API</a>
                </div>
            </div>
        </div>
    </main>
@endsection