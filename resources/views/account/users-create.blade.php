@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create user</h1>
@stop

@section('content')

<form action="{{route('users.store')}} " method="POST" enctype="multipart/form-data">

    @csrf
    
        <div class="form-group">
          <label for="">Email</label>
          @if($errors->has('email'))
          @foreach($errors->get('email') as $error)
            <div class="text-danger">{{$errors->first('email')}} </div>
          @endforeach 
        @endif
          <input type="text"
          class="form-control {{$errors->has('email') ? 'border-danger':''}}" name="email" id="">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="text"
                class="form-control" name="password" id="">
            </div>
            <div class="form-group">
              <label for="">Role</label>
              <select name="role_id">
                @foreach ($collection as $item)
              <option value="{{$item->id}}"> {{$item->name}} </option>
                @endforeach 
                </select>
            </div>
            
              <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Job</label>
                    <input type="text" name="job" id="" class="form-control" placeholder="" aria-describedby="helpId">
                  </div>
                <div class="form-group">
                    <label for="">Photo</label>
                    <input type="file" name="image" id="">
                  </div>
    
        <button type="submit" class="btn btn-success"> create </button>
    
    </form>

@stop