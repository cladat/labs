@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Roles</h1>
@stop

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Name</th>
      </tr>
    </thead>
    
    <tbody>
    <tr>  
    @foreach ($roles as $role)
        
    <th scope="row"> {{$role->id}} </th>
    <td>{{$role->name}}</td>
    <td> 
      <a href="{{route('roles.edit', ['id'=>$role->id])}}" class="btn btn-warning">edit</a>
    </td>
    <td> 
        <form action="{{route('roles.destroy',['id'=>$role->id])}} " method="POST">
          @method('DELETE')
          @csrf
            <button class="btn btn-danger"> delete </button>
        </form>
     </td>

    </tr>
    @endforeach
    </tbody>
</table>

@stop