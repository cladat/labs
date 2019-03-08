@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="display-1">Welcome {{$user->role->name}}!</h1>
@stop

@section('content')

@can('admin')
<hr>
    @if ($art == 0 && $com == 0)
        <h4 class="display-5">You don't have anything to validate today !</h4>
    @endif
    <div class="row">
        @if ($art > 0)
            <div class="col">
                <h4> You have <span class="badge badge-danger"> {{$art}}</span> @if ($art == 1)
                    article
                @endif  
                @if ($art > 1)
                    articles
                @endif  waiting for validation ! </h4>
            </div>
        @endif
        @if ($com > 0)
            <div class="col">
                <h4> You have <span class="badge badge-warning"> {{$com}}</span> @if ($com == 1)
                    comment
                @endif  
                @if ($com > 1)
                    comments
                @endif waiting for validation ! </h4>
            </div>
        @endif
    </div>

@endcan

@stop