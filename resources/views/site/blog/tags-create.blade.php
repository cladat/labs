@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Add new tag</h1>
@stop

@section('content')

<form action="{{route('tag.store')}} " method="POST">

        @csrf
            <div class="form-group">
                <label for="">Tag's name</label>
                @if($errors->has('name'))
	      <div  class="text-danger">{{$errors->first('name')}}</div>
            @endif
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
                <button type="submit" class="btn btn-success"> create </button>
            
            
        </form>

@stop