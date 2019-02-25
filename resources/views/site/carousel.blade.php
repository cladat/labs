@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Carousel pictures</h1>
@stop

@section('content')

<div class="card-columns">
@foreach ($carou as $item)  
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{Storage::disk('image')->url($item->photo)}}" style="width:300px" alt="Card image cap">
    <div class="card-body">
      <form action="{{route('carousel.destroy', ['id'=>$item->id])}}" method="POST">
      @method('DELETE')
      @csrf
      <button class="btn btn-danger" type="submit">delete</button>
      </form>
    </div>
  </div>

  @endforeach
</div>

@stop