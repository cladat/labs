@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Add new client</h1>
@stop

@section('content')

<form action="{{route('client.store')}} " method="POST" enctype="multipart/form-data">

    @csrf
    
            <div class="form-group">
                <label for="">Name</label>
                @if($errors->has('name'))
	      <div  class="text-danger">{{$errors->first('name')}}</div>
        @endif
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
              </div>
              <div class="form-group">
                  <label for="">Job</label>
                  @if($errors->has('job'))
	      <div  class="text-danger">{{$errors->first('job')}}</div>
        @endif
                  <input type="text" name="job" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Photo</label>
                    @if($errors->has('image'))
	      <div  class="text-danger">{{$errors->first('image')}}</div>
        @endif
                    <input type="file" name="image" id="">
                  </div>
                  
        <button type="submit" class="btn btn-success"> create </button>
    
    </form>

@stop