@extends('layout.app')

@section('title')
    Tag Table
@endsection

@section('header')
    @include('layout.header')
@endsection


@section('main')
    <h1>Tags Admin</h1>
    <a href="{{route('tags.create')}}" class="btn btn-dark text-white">Create a new tag</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>views</th>
                <th>topic</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tags as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->views}}</td>
                <td>{{$value->topic}}</td>
                <td>
                    <a href="{{route('tags.show', ['tag'=>$value->id])}}" class="btn btn-primary">View</a>
                    <a href="{{route('tags.edit', ['tag'=>$value->id])}}" class="btn btn-warning">Edit</a>
                    <!-- MODO 1: Eliminazione istantanea del Post -->
                    {{-- <form action="{{ route('tags.destroy', ['tag'=> $value->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form> --}}

                    <!-- MODO 2: Eliminazine con conferma del tag -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#destroy-{{$value->id}}">
                    Delete
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="destroy-{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="tag-destroy-{{$value->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Tag {{$value->name}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    sei sicuro? 
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{ route('tags.destroy', ['tag'=> $value->id]) }}" method="post">
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