@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>All tags</h1>
@stop

@section('content')

<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th>Tag's name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            @foreach ($tags as $tag)
            <th scope="row">{{$tag->id}}</th>
                    <td> {{$tag->name}} </td>
                    <td> 
                        @can('admin')
                            <a href="{{route('tag.edit', ['id'=>$tag->id])}}" class="btn btn-warning">edit</a>
                        @endcan 
                    </td>
                    <td> 
                        @can('admin')
                          <form action="{{route('tag.destroy', ['id'=>$tag->id])}}" method="POST">
                              @method('DELETE')
                              @csrf
                              <button class="btn btn-danger">delete</button>
                            </form> 
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop