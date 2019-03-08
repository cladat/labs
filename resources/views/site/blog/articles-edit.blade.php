@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Edit article</h1>
@stop

@section('content')

<form action="{{route('article.update', ['id'=>$article->id])}} " method="POST" enctype="multipart/form-data">

        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="">Title</label>
            @if($errors->has('title'))
	          <div  class="text-danger">{{$errors->first('title')}}</div>
            @endif
            <input type="text" name="title" value="{{$article->title}} " class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="">Text</label>
            @if($errors->has('text'))
	      <div  class="text-danger">{{$errors->first('text')}}</div>
            @endif
          <textarea name="text"  id="summary-ckeditor">{!! old('text', $article->text)!!}</textarea>
            <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
            <script>
             CKEDITOR.replace( 'summary-ckeditor' );
            </script>
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
          <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <label for="">Author comment</label>
            <input type="text" name="comms" value="{{$article->comms}}" id="" class="form-control" placeholder="" aria-describedby="helpId">
          </div>
      
          <button class="btn btn-success" type="submit">update</button>
      
      </form>

@stop