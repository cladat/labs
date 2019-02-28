@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit project</h1>
@stop

@section('content')

<div class="row">
  <div class="col-6 form">
      <form action="{{route('project.update', ['id'=>$project->id])}} " method="POST" enctype="multipart/form-data">

          @method('PUT')
          @csrf
  
          <div class="form-group">
              <label for="">Title</label>
              <input type="text" name="title" value="{{$project->title}} " class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Description</label>
              <input type="text" name="description" value="{{$project->description}} " class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Icon code</label>
              <input type="text" name="icon_id" value="{{$project->icon_id}} " class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Photo</label>
              <input type="file" name="image" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
        
            <button class="btn btn-success" type="submit">update</button>
        
        </form>
  </div>

  <div class="col-6 iconlist">
      <h2>Icons code</h2>
      <ul style="list-style-type: none">
      @foreach ($icon as $i)
      <li><i class="{{$i->code}}" style="font-size:30px"> - {{$i->id}} </i></li>
      @endforeach
      </ul>
</div>
</div>

@stop