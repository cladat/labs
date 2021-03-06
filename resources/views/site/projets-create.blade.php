@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create project</h1>
@stop

@section('content')
<div class="row">
    <div class="col-6 form">
            <form action="{{route('project.store')}} " method="POST" enctype="multipart/form-data">

                @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        @if($errors->has('title'))
	                        <div  class="text-danger">{{$errors->first('title')}}</div>
                        @endif
                        <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        @if($errors->has('description'))
	                        <div  class="text-danger">{{$errors->first('description')}}</div>
                        @endif
                        <input type="text" name="description" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Photo</label>
                        @if($errors->has('image'))
	                        <div  class="text-danger">{{$errors->first('image')}}</div>
                        @endif
                        <input type="file" name="image" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Icon</label>
                        @if($errors->has('icon_id'))
	                        <div  class="text-danger">{{$errors->first('icon_id')}}</div>
                        @endif
                        <input type="text" name="icon_id" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    
                    <button type="submit" class="btn btn-success"> create </button>
                    
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