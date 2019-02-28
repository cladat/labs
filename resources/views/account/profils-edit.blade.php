@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit profile</h1>
@stop

@section('content')

<form action="{{route('profils.update', ['id'=>$profil->id])}} " method="POST" enctype="multipart/form-data">

        @method('PUT')
        @csrf
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" value="{{$profil->name}} " class="form-control" placeholder="" aria-describedby="helpId">
      </div>
        <div class="form-group">
            <label for="">Image URL</label>
            <input type="file" name="image" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
      
          <button class="btn btn-success" type="submit">update</button>
      
      </form>

@stop