@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>All services</h1>
@stop

@section('content')

<div class="card-columns">
    @foreach ($services as $ser)  
        <div class="card" style="width: 18rem;">
            <i class="{{$ser->icon->code}}" style="font-size:50px"></i>
            <div class="card-body">
                <h5 class="card-title">{{$ser->title}} </h5>
                <p class="card-text">{{$ser->description}} </p>
                <div class="butts">
                    @can('admin')
                    <a href="{{route('service.edit',['id'=>$ser->id])}} " class="btn btn-primary">edit</a>
                    @endcan 
                    @can('admin')
                    <form action="{{route('service.destroy', ['id'=>$ser->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">delete</button>
                      </form> 
                    @endcan
                    </div>
            </div>
          </div>
        
          @endforeach
        </div>

@stop