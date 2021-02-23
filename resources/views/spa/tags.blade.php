@extends('layout.app')

@section('title')
    Tags Api
@endsection

@section('header')
    @include('layout.header')
@endsection

@section('main')
    <main id="main_content_categories" class="full-height">
        <h1>All tags from the api</h1>
        <div id="app">
            <tag-component></tag-component>
        </div>
    </main>
@endsection