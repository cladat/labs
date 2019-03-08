@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit testimonial</h1>
@stop

@section('content')

<form action="{{route('testiupdate', ['testimonial'=>$testimonial->id])}} " method="POST" enctype="multipart/form-data">

@method('PUT')
@csrf

<div class="form-group">
    <label for="">Text</label>
    @if($errors->has('text'))
        <div  class="text-danger">{{$errors->first('text')}}</div>
    @endif
    <input type="text" name="text" value="{{$testimonial->text}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<button class="btn btn-success" type="submit">update</button>
      
</form>

@stop