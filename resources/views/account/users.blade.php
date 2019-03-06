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
            <th scope="col">Role</th>
            <th scope="col">Nb of Articles</th>
            <th scope="col">Articles list</th>
            <th scope="col">Manage</th>
            {{-- <th scope="col">Nb of articles</th> --}}
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($users as $item)
                  
            <th scope="row">{{$item->id}}</th>
            <td class="{{$item->status===0 ? 'text-light':''}}">{{$item->email}}</td>
            <td class="{{$item->status===0 ? 'text-light':''}}">{{$item->role->name}}</td>
            <td class="{{$item->status===0 ? 'text-light':''}}">{{$item->articles->count()}} </td>
            <td class="{{$item->status===0 ? 'text-light':''}}">
              @foreach ($item->articles as $art)
              - "{{$art->title}}" 
              @endforeach
            </td>
            
            <td> 
                @can('update', $item)
                  <a href="{{route('users.edit', ['id'=>$item->id])}}" class="btn btn-warning">edit</a>
                @endcan 
            </td>
            <td>
              @can('admin')
              <form action="{{route('users.destroy', ['user'=>$item->id])}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger">delete</button>
                </form> 
                @endcan
              </td>
              <td>
              @can('admin')
                @if ($item->status===1)
                <a href="{{route('users.block',['id'=>$item->id])}} " class="btn btn-dark">block</a>
                @else
                <a href="{{route('users.deblock',['id'=>$item->id])}} " class="btn btn-success">deblock</a>
                @endif
              @endcan
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>

@stop