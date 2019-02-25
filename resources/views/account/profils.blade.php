@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>All profiles</h1>
@stop

@section('content')

<div class="card-columns">
        @foreach ($users as $user)  
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{Storage::disk('image')->url($profils[$user->id-1]->image)}}" style="width:300px" alt="Card image cap">
            <div class="card-body">
                    <h5 class="card-title">{{$profils[$user->id-1]->nom}} </h5>
                    <p class="card-text">{{$profils[$user->id-1]->prenom}} </p>
                    <p class="card-text">{{$user->role->name}} </p>
                    <p class="card-text"> </p>
                    <a href="{{route('profils.edit',['id'=>$user->id])}} " class="btn btn-primary">edit</a>
            </div>
          </div>
        
          @endforeach
        </div>

@stop