@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>All articles</h1>
@stop

@section('content')

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
              
                    <h6 class="text-secondary">Creation: {{$article->created_at}} </h6>
                    <p class="card-text">{!!($article->text)!!} </p>
                    
                    <div class="butts">
                    @can('update', $article, Article::class)
                    <a href="{{route('article.edit',['id'=>$article->id])}} " class="btn btn-primary">edit</a>
                    @endcan 

                    @can('update', $article, Article::class)
                    <form action="{{route('article.destroy', ['id'=>$article->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">delete</button>
                      </form> 
                    @endcan
                    </div>
            </div>
          </div>
        
          @endforeach
        </div>

@stop