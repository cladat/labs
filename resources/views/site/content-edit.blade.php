@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

<form action="{{route('content.update',['id'=>$content->id])}}" method="POST" enctype="multipart/form-data">

@method('PUT')
@csrf

<h2>Homepage</h2>
<div class="form-group">
    <label for="">Carousel Title</label>
    @if($errors->has('carousel_text'))
	<div  class="text-danger">{{$errors->first('carousel_text')}} </div>
    @endif
    <input type="text" name="carousel_text" value="{{$content->carousel_text}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Carousel Logo</label>
    @if($errors->has('carousel_logo'))
	<div  class="text-danger">{{$errors->first('carousel_logo')}} </div>
    @endif
<input type="file" name="carousel_logo" class="form-control" placeholder="" aria-describedby="helpId">
  </div>
<div class="form-group">
    <label for="">Projects Title</label>
    @if($errors->has('projects_title'))
	<div  class="text-danger">{{$errors->first('projects_title')}} </div>
    @endif
    <input type="text" name="projects_title" value="{{$content->projects_title}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Projects Text (left paragraph)</label>
    @if($errors->has('projects_text1'))
	<div  class="text-danger">{{$errors->first('projects_text1')}} </div>
    @endif
    <input type="text" name="projects_text1" value="{{$content->projects_text1}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Projects Text (right paragraph)</label>
    @if($errors->has('projects_text2'))
	<div  class="text-danger">{{$errors->first('projects_text2')}} </div>
    @endif
    <input type="text" name="projects_text2" value="{{$content->projects_text2}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Project video (url)</label>
    @if($errors->has('video'))
	<div  class="text-danger">{{$errors->first('video')}} </div>
    @endif
<input type="url" name="video" value="{{$content->video}}" class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Clients title</label>
    @if($errors->has('clients_title'))
	<div  class="text-danger">{{$errors->first('clients_title')}} </div>
    @endif
    <input type="text" name="clients_title" value="{{$content->clients_title}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Team Title</label>
    @if($errors->has('team_title'))
	<div  class="text-danger">{{$errors->first('team_title')}} </div>
    @endif
    <input type="text" name="team_title" value="{{$content->team_title}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<h2>Services section</h2>
<div class="form-group">
    <label for="">Services Title</label>
    @if($errors->has('services_title'))
	<div  class="text-danger">{{$errors->first('services_title')}} </div>
    @endif
    <input type="text" name="services_title" value="{{$content->services_title}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Services Page: title 1</label>
    @if($errors->has('page_services_title1'))
	<div  class="text-danger">{{$errors->first('page_services_title1')}} </div>
    @endif
    <input type="text" name="page_services_title1" value="{{$content->page_services_title1}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Services Page: title 2</label>
    @if($errors->has('page_services_title2'))
	<div  class="text-danger">{{$errors->first('page_services_title2')}} </div>
    @endif
    <input type="text" name="page_services_title2" value="{{$content->page_services_title2}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<h2>Contact Section</h2>
<div class="form-group">
    <label for="">Contact Title</label>
    @if($errors->has('contact_title'))
	<div  class="text-danger">{{$errors->first('contact_title')}} </div>
    @endif
    <input type="text" name="contact_title" value="{{$content->contact_title}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Contact Description</label>
    @if($errors->has('contact_description'))
	<div  class="text-danger">{{$errors->first('contact_description')}} </div>
    @endif
    <input type="text" name="contact_description" value="{{$content->contact_description}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Contact Company</label>
    @if($errors->has('contact_company'))
	<div  class="text-danger">{{$errors->first('contact_company')}} </div>
    @endif
    <input type="text" name="contact_company" value="{{$content->contact_company}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Contact address</label>
    @if($errors->has('contact_address'))
	<div  class="text-danger">{{$errors->first('contact_address')}} </div>
    @endif
    <input type="text" name="contact_address" value="{{$content->contact_address}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Contact Phone</label>
    @if($errors->has('contact_phone'))
	<div  class="text-danger">{{$errors->first('contact_phone')}} </div>
    @endif
    <input type="text" name="contact_phone" value="{{$content->contact_phone}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>
<div class="form-group">
    <label for="">Contact email</label>
    @if($errors->has('contact_email'))
	<div  class="text-danger">{{$errors->first('contact_email')}} </div>
    @endif
    <input type="text" name="contact_email" value="{{$content->contact_email}} " class="form-control" placeholder="" aria-describedby="helpId">
</div>

<button class="btn btn-success" type="submit">update</button>

</form>

@stop 