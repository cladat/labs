@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit tag</h1>
@stop

@section('content')

<form action="{{route('tag.update', ['id'=>$tag->id])}} " method="POST">

    @method('PUT')
    @csrf
  
  <div class="form-group">
      <label for="">Name</label>
      @if($errors->has('name'))
	      <div  class="text-danger">{{$errors->first('name')}}</div>
            @endif
      <input type="text" name="name" value="{{$tag->name}} " class="form-control" placeholder="" aria-describedby="helpId">
  </div>

  <button class="btn btn-success" type="submit">update</button>
  
</form>

@stop