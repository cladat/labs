@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit testimonial</h1>
@stop

@section('content')

<form action="{{route('testimonial.update', ['id'=>$->id])}} " method="POST" enctype="multipart/form-data">

@method('PUT')
@csrf

<div class="form-group">
    <label for="">Text</label>
    <input type="text" name="text" value="{{$->name}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<button class="btn btn-success" type="submit">update</button>
      
</form>

@stop