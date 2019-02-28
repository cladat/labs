@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>All projects</h1>
@stop

@section('content')

<div class="card-columns">
        @foreach ($projects as $proj)  
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{Storage::disk('image')->url($proj->image)}}" style="width:300px" alt="Card image cap">
            <div class="card-body">
                    <h5 class="card-title">{{$proj->title}} </h5>
                    <p class="card-text">{{$proj->description}} </p>
                    <i class="{{$proj->icon->code}}" style="font-size:50px"></i>
                    <div class="butts">
                    @can('admin')
                    <a href="{{route('project.edit',['id'=>$proj->id])}} " class="btn btn-primary">edit</a>
                    @endcan 
                    @can('admin')
                    <form action="{{route('project.destroy', ['id'=>$proj->id])}}" method="POST">
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