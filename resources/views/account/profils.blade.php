@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>All profiles</h1>
@stop

@section('content')

<div class="card-columns">
        @foreach ($profils as $item)  
        <div class="card" style="width: 18rem;">
                <img src="{{$item->image}}" alt="">
            <img class="card-img-top" src="{{Storage::disk('image')->url($item->image)}}">
            <div class="card-body">
                    <h5 class="card-title">{{$item->name}} </h5>
                    {{-- <p class="card-text">Role: {{$item->role->name}} </p> --}}
                    <p class="card-text">Job: {{$item->job}} </p>
                    <p class="card-text"> </p>
                    @can('update', $item)
                    <a href="{{route('profils.edit',['id'=>$item->id])}} " class="btn btn-primary">edit</a>
                    @endcan 
            </div>
          </div>
        
          @endforeach
        </div>

@stop