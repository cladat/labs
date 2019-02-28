@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit client</h1>
@stop

@section('content')

<form action="{{route('client.update', ['id'=>$client->id])}} " method="POST" enctype="multipart/form-data">

        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" value="{{$client->name}} " class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="">Job</label>
            <input type="text" name="job" value="{{$client->job}} " class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="">Testimony</label>
            <input type="text" name="testimony" value="{{$client->testimony}} " class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="">Photo</label>
            <input type="file" name="image" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
      
          <button class="btn btn-success" type="submit">update</button>
      
      </form>

@stop