@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create category</h1>
@stop

@section('content')

<form action="{{route('category.store')}} " method="POST">

@csrf
    <div class="form-group">
        <label for="">Category's name</label>
        @if($errors->has('name'))
	      <div  class="text-danger">{{$errors->first('name')}}</div>
        @endif
        <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
    </div>
        <button type="submit" class="btn btn-success"> create </button>
    
    
</form>

@stop