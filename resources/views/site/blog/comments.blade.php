@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>All comments</h1>
@stop

@section('content')

<table class="table" >
    <thead>
        <tr>
            <th scope="col">#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Comment</th>
            <th>Manage (admin only)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            
        @foreach ($coms as $item)
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->subject}}</td>
        <td>{{$item->message}}</td>
        <td>
            @can('admin')
                <form action="{{route('commentval.destroy', ['commentval'=>$item->id])}}" method="POST">
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