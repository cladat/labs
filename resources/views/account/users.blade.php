@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>All users</h1>
@stop

@section('content')

<table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Role</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($users as $user)
                  
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->role->name}}</td>
            {{-- <td><a class="btn btn-warning" href="{{route('user.show',['id'=>$user->id])}}">show</a>
            </td> --}}
            <td> 
                {{-- @can('update', $item) --}}
                  <a href="{{route('users.edit', ['id'=>$user->id])}}" class="btn btn-warning">edit</a>
                {{-- @endcan  --}}
              </td>
            <td> 
              <form action="{{route('users.destroy', ['id'=>$user->id])}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger">delete</button>
              </form> 
              
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

@stop