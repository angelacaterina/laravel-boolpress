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
                    <a href="{{ route('home') }}" class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a>
                    <!-- <a href="{{ route('blog') }}">Blog</a>
                    <a href="{{ route('about') }}">About</a> -->
                    <a href="{{ route('articles') }}" class="{{ Route::currentRouteName() === 'articles' ? 'active' : '' }}">Articles API</a>
                    <a href="{{ route('categories') }}" class="{{ Route::currentRouteName() === 'categories' ? 'active' : '' }}">Categories API</a>
                    <a href="{{ route('tags') }}" class="{{ Route::currentRouteName() === 'home' ? 'tags' : '' }}">Tags API</a>
                </div>
            </div>
        </div>
    </main>
@endsection