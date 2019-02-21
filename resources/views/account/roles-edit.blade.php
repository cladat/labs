@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit role</h1>
@stop

@section('content')

<form action="{{route('roles.update', ['id'=>$role->id])}} " method="POST">
    @method('PUT')
    @csrf
  
      <div class="form-group">
      <label for="">Name</label>
      @if($errors->has('name'))
      @foreach($errors->get('name') as $error)
        <div class="text-danger">{{$errors->first('name')}} </div>
      @endforeach 
    @endif
      <input type="text"
          class="form-control" name="name" value="{{old('name', $role->name)}}" id="">
      </div>
  
      <button type="submit" class="btn btn-success"> edit </button>
  
  </form>

@stop