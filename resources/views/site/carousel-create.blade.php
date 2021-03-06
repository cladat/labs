@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Add picture to carousel</h1>
@stop

@section('content')

<form action="{{route('carousel.store')}} " method="POST" enctype="multipart/form-data">

    @csrf
      <div class="form-group">
        @if($errors->has('photo'))
	      <div  class="text-danger">{{$errors->first('photo')}}</div>
      @endif
        <input type="file" name="photo" id="">
      </div>
    
      <button type="submit" class="btn btn-success"> submit </button>
    
    </form>

@stop