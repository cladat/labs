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
        @if($errors->has('name'))
	      <div  class="text-danger">{{$errors->first('name')}}</div>
        @endif
        <input type="text" name="name" value="{{$profil->name}} " class="form-control" placeholder="" aria-describedby="helpId">
      </div>
      <div class="form-group">
          <label for="">Job</label>
          @if($errors->has('job'))
	      <div  class="text-danger">{{$errors->first('job')}}</div>
        @endif
          <input type="text" name="job" value="{{$profil->job}} " class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Image URL</label>
            <input type="file" name="image" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
      
          <button class="btn btn-success" type="submit">update</button>
      
      </form>

@stop