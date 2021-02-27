@extends('layout.app')

@section('title')
    Articles Table
@endsection

@section('header')
    @include('layout.header')
@endsection


@section('main')
    <h1>Articles Admin</h1>
    <a href="{{route('articles.create')}}" class="btn btn-dark text-white">Create a new article</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>subtitle</th>
                <th>body</th>
                <th>author</th>
                <th>category</th>
                {{-- <th>tag</th> --}}
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->title}}</td>
                <td>{{$value->subtitle}}</td>
                <td>{{$value->body}}</td>
                <td>{{$value->author}}</td>
                <td>{{$value->category['genre']}}</td>
                {{-- <td>{{$value->tag['name']}}</td> --}}
                <td>
                    <a href="{{route('articles.show', ['article'=>$value->id])}}" class="btn btn-primary">View</a>
                    <a href="{{route('articles.edit', ['article'=>$value->id])}}" class="btn btn-warning">Edit</a>
                    <!-- MODO 1: Eliminazione istantanea del Post -->
                    {{-- <form action="{{ route('articles.destroy', ['article'=> $value->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form> --}}

                    <!-- MODO 2: Eliminazine con conferma del Post -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#destroy-{{$value->id}}">
                    Delete
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="destroy-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="article-destroy-{{$value->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Post {{$value->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    sei sicuro? 
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{ route('articles.destroy', ['article'=> $value->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection