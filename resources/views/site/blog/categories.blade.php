@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>All categories</h1>
@stop

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Category's name</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($categories as $category)
        <th scope="row">{{$category->id}}</th>
                <td> {{$category->name}} </td>
                <td> 
                    @can('admin')
                        <a href="{{route('category.edit', ['id'=>$category->id])}}" class="btn btn-warning">edit</a>
                    @endcan 
                </td>
                <td> 
                    @can('admin')
                      <form action="{{route('category.destroy', ['id'=>$category->id])}}" method="POST">
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