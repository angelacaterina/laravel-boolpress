@extends('layout.app')

@section('title')
    Articles Show
@endsection

@section('header')
    @include('layout.header')
@endsection


@section('main')
    <main class="container">
        <h1>Name: {{$category->genre}}</h1>
        <h2>Over 18: {{$category->over_18}}</h2>
    </main>
@endsection