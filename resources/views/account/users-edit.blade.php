@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit user</h1>
@stop

@section('content')

<form action="{{route('users.update', ['id'=>$user->id])}} " method="POST">

    @method('PUT')
    @csrf
  
  {{-- EMAIL field --}}
  <div class="form-group">
      <label for="">Email</label>
      @if($errors->has('email'))
      @foreach($errors->get('email') as $error)
        <div class="text-danger">{{$errors->first('email')}} </div>
      @endforeach 
    @endif
  
      <input type="text" name="email"  value="{{old('email', $user->email)}} " class="form-control {{$errors->has('email') ? 'border-danger':''}}" placeholder="" aria-describedby="helpId">
    </div>
  
    {{-- PASSWORD field --}}
    <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" value="{{$user->password}} " class="form-control" placeholder="" aria-describedby="helpId">
      </div>
  
      {{-- ROLE field --}}
      <div class="form-group">
          <label for="">Role</label>
          <select name="role_id">
            @foreach ($collection as $item)
          <option value="{{$item->id}}"> {{$item->name}} </option>
            @endforeach 
            </select>
        </div>
  
      <button class="btn btn-success" type="submit">update</button>
  
  </form>
@stop