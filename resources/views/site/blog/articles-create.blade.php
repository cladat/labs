@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Create article</h1>
@stop

@section('content')

<form action="{{route('article.store')}} " method="POST" enctype="multipart/form-data">

    @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Texte</label>
            <textarea name="text" id="summary-ckeditor" cols="30" rows="10"></textarea>
            <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
            <script>
             CKEDITOR.replace( 'summary-ckeditor' );
            </script>
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" id="">
        </div>
        <div class="form-group">
            <label for="">Category</label>
           <select name="category_id" id="">
               @foreach ($cats as $cat)
               <option value="{{$cat->id}}">{{$cat->name}}</option>
               @endforeach
           </select>
        </div>
        <div class="form-group">
            <label for=""><strong>Tags</strong></label>
            @foreach ($tags as $tag)
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="{{$tag->id}}" name="tag_id[]">
                <label class="form-check-label" for="inlineCheckbox1">{{$tag->name}}</label>
            </div>
            @endforeach
        </div>
        
        <button type="submit" class="btn btn-success"> create </button>
        
    </form>

@stop