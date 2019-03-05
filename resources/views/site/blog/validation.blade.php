@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@stop

@section('content')

    <h2>Comments</h2>
    <table class="table" >
      <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Comment</th>
              <th>Validation</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              
          @foreach ($coms as $item)
          <td>{{$item->name}}</td>
          <td>{{$item->email}}</td>
          <td>{{$item->subject}}</td>
          <td>{{$item->message}}</td>
          <td>
                  @can('admin')
                      <form action="{{route('validation.update', ['validation'=>$item->id])}}" method="POST">
                          @method('PUT')
                          @csrf
                          <button class="btn btn-success">validate</button> 
                      </form>
                  @endcan
              </td>
          </tr>
          @endforeach
  
      </tbody>
  </table>

      <h2>Articles</h2>
      <div class="card-columns">
            @foreach ($articles as $article)  
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{Storage::disk('image')->url($article->image)}}" style="width:300px" alt="Card image cap">
                <div class="card-body">
                        <h3 class="card-title">{{$article->title}} </h3>
                        <h5 class="text-primary">{{$article->category->name}} </h5>
                        <h5 class="text-success">{{$article->profil->name}} </h5>
                      
                        @foreach ($article->tags as $tag)
                          <span class="text-warning">- {{$tag->name}}</span>
                        @endforeach
                  
                        <h6 class="text-secondary">Creation: {{$article->day}} {{$article->year}} </h6>
                        <p class="card-text bg-light">{!!($article->text)!!} </p>
                        <p class="card-text bg-secondary text-light">{{$article->comms}}</p>
                        
                        <div class="butts">
                            @can('admin')
                                <form action="{{route('comment.update', ['comment'=>$article->id])}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button class="btn btn-success">validate</button> 
                                </form>
                            @endcan
                        </div>
                </div>
              </div>
            
              @endforeach
            </div>

@stop 