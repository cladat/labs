@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

<a class="btn btn-primary" href="{{route('content.edit',['id'=>$content->id])}}" role="button">edit site content</a>

<h1>Homepage</h1>
<div class="list-group">
  <div class="list-group-item">
    <h5> <strong> Carousel Title</strong></h5>
    <p>{{$content->carousel_text}}</p>
  </div>
</div>
<div class="list-group">
    <div class="list-group-item">
      <h5> <strong> Carousel Logo</strong></h5>
    <img src="{{Storage::disk('image')->url($content->carousel_logo)}}" style="width:150px">
    </div>
  </div>
<div class="list-group">
      <div class="list-group-item">
        <h5> <strong> Projects Title</strong></h5>
        <p>{{$content->projects_title}}</p>
      </div>
    </div>
    <div class="list-group">
        <div class="list-group-item">
          <h5> <strong> Projects Text (left paragraph)</strong></h5>
          <p>{{$content->projects_text1}}</p>
        </div>
      </div>
      <div class="list-group">
          <div class="list-group-item">
            <h5> <strong> Projects Text (right paragraph)</strong></h5>
            <p>{{$content->projects_text2}}</p>
          </div>
        </div>
        <div class="list-group">
            <div class="list-group-item">
              <h5> <strong> Clients Title</strong></h5>
              <p>{{$content->clients_title}}</p>
            </div>
          </div>
          <div class="list-group">
            <div class="list-group-item">
              <h5> <strong> Team Title</strong></h5>
              <p>{{$content->team_title}}</p>
            </div>
          </div>
<h1>Services section</h1>
          <div class="list-group">
              <div class="list-group-item">
                <h5> <strong> Services Title</strong></h5>
                <p>{{$content->services_title}}</p>
              </div>
         </div>
<div class="list-group">
    <div class="list-group-item">
      <h5> <strong>Service Page: title 1</strong></h5>
      <p>{{$content->page_services_title1}}</p>
    </div>
</div>
<div class="list-group">
    <div class="list-group-item">
      <h5> <strong>Service Page: title 2</strong></h5>
      <p>{{$content->page_services_title2}}</p>
    </div>
</div>
<h1>Contact section</h1>
<div class="list-group">
    <div class="list-group-item">
      <h5> <strong>Contact title</strong></h5>
      <p>{{$content->contact_title}}</p>
    </div>
</div>
<div class="list-group">
    <div class="list-group-item">
      <h5> <strong>Contact Description</strong></h5>
      <p>{{$content->contact_description}}</p>
    </div>
</div>
<div class="list-group">
    <div class="list-group-item">
      <h5> <strong>Contact Company</strong></h5>
      <p>{{$content->contact_company}}</p>
    </div>
</div>
<div class="list-group">
    <div class="list-group-item">
      <h5> <strong>Contact address</strong></h5>
      <p>{{$content->contact_address}}</p>
    </div>
</div>
<div class="list-group">
    <div class="list-group-item">
      <h5> <strong>Contact phone</strong></h5>
      <p>{{$content->contact_phone}}</p>
    </div>
</div>
<div class="list-group">
    <div class="list-group-item">
      <h5> <strong>Contact email</strong></h5>
      <p>{{$content->contact_email}}</p>
    </div>
</div>

@stop