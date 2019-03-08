@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>All clients</h1>
@stop

@section('content')

<div class="card-columns">
        @foreach ($clients as $client)  
        <div class="card" style="width: 18rem;">
            <img src="{{$client->image}}" alt="">
            <img class="card-img-top" src="{{Storage::disk('image')->url($client->image)}}" style="width:300px" alt="Card image cap">
            <div class="card-body">
                    <h5 class="card-title">{{$client->name}} </h5>
                    <h6 class="card-text">{{$client->job}} </h6>
                    @can('admin')
                    <a href="{{route('client.edit',['id'=>$client->id])}} " class="btn btn-primary">edit</a>
                    @endcan 
                    @can('admin')
                    <form action="{{route('client.destroy', ['id'=>$client->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">delete</button>
                      </form> 
                    @endcan
            </div>

            {{-- testimonials of that client --}}

            <div class="card-body bg-warning">
            <h4>Testimonial(s)</h4>
            <a href="{{route('testimonial.create',['client'=>$client->id])}} " class="btn btn-dark">create new testimonial</a>
            <hr>
            @foreach ($client->testimonials as $item)
            <p>" {{$item->text}} "</p>
            {{-- buttons to edit and delete each testimonial --}}
            {{-- @can('admin')
              <a href="{{route('testimonial.edit',['id'=>$item->id])}}" class="btn btn-primary">edit</a>
            @endcan 
            @can('admin')
            <form action="{{route('testimonial.destroy', ['id'=>$item->id])}}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">delete</button>
            </form> 
            @endcan --}}
            <hr>
            @endforeach
            </div>

          </div>
        
          @endforeach
        </div>

@stop
