@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')
<a class="btn btn-warning" href="{{route('article.index')}} ">back to all articles</a>
<h1>{{$article->title}}</h1>
<h6>{{$article->day}} {{$article->year}} </h6>
<img src="{{Storage::disk('image')->url($article->image)}}" width="700">
<p>{!!($article->text)!!} </p>
<p><strong>Author: </strong>{{$article->profil->name}}</p>
<p><strong>Category: </strong>{{$article->category->name}}</p>
<span><strong>Tags: </strong></span>
@foreach ($article->tags as $tag)
    <span>{{$tag->name}},</span>
@endforeach

@stop