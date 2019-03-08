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