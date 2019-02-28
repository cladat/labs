@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>All profiles</h1>
@stop

@section('content')

<div class="card-columns">
        @foreach ($users as $item)  
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{Storage::disk('image')->url($profils[$item->id-1]->image)}}" style="width:300px" alt="Card image cap">
            <div class="card-body">
                    <h5 class="card-title">{{$profils[$item->id-1]->name}} </h5>
                    <p class="card-text">{{$item->role->name}} </p>
                    <p class="card-text"> </p>
                    @can('update', $item)
                    <a href="{{route('profils.edit',['id'=>$item->id])}} " class="btn btn-primary">edit</a>
                    @endcan 
            </div>
          </div>
        
          @endforeach
        </div>

@stop