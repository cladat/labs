@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Add new testimonial</h1>
@stop

@section('content')

<form action="{{route('testistore',['client'=>$client->id])}} " method="POST" enctype="multipart/form-data">

    @csrf
    
    <div class="form-group">
      <label for="">Text</label>
      @if($errors->has('text'))
	      <div  class="text-danger">{{$errors->first('text')}}</div>
      @endif
      <input type="text" name="text" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
                  
    <button type="submit" class="btn btn-success"> create </button>
    
</form>

@stop