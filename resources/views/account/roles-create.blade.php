@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create role</h1>
@stop

@section('content')

<form action="{{route('roles.store')}} " method="POST">

    @csrf
    
        <div class="form-group">
        <label for="">Name</label>
        @if($errors->has('name'))
          @foreach($errors->get('name') as $error)
             <div class="text-danger"> {{$errors->first('name')}} </div>
          @endforeach 
        @endif
        <input type="text"
            class="form-control" name="name" id="">
        </div>
    
        <button type="submit" class="btn btn-success"> create </button>
    
    </form>
@stop