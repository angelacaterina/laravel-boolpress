@extends('layout.app')

@section('title')
    Category Table
@endsection

@section('header')
    @include('layout.header')
@endsection


@section('main')
    <h1>Categories Admin</h1>
    <a href="{{route('categories.create')}}" class="btn btn-dark text-white">Create a new category</a>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>genre</th>
                <th>over_18</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->genre}}</td>
                <td>{{$value->over_18}}</td>
                <td>
                    <a href="{{route('categories.show', ['category'=>$value->id])}}" class="btn btn-primary">View</a>
                    <a href="{{route('categories.edit', ['category'=>$value->id])}}" class="btn btn-warning">Edit</a>
                    <!-- MODO 1: Eliminazione istantanea del Post -->
                    {{-- <form action="{{ route('categories.destroy', ['category'=> $value->id]) }}" method="post">
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
                                    <h5 class="modal-title">Delete Category: {{$value->genre}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    sei sicuro? 
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form action="{{ route('categories.destroy', ['category'=> $value->id]) }}" method="post">
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