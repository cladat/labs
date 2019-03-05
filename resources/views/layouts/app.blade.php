<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}} "/>
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}} "/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}} "/>
    <link rel="stylesheet" href="{{asset('css/style.css')}} "/>
    
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    
</head>
<body>
    <!-- Page Preloder -->
	{{-- <div id="preloder">
        <div class="loader">
            <img src="{{asset('img/logo.png')}}" alt="">
            <h2>Loading.....</h2>
        </div>
    </div> --}}
    @include('layouts.nav')
    
    @yield('content')
    
    @include('layouts.footer')
    

    <script src="{{asset('js/jquery-2.1.4.min.js')}} "></script>
	<script src="{{asset('js/bootstrap.min.js')}} "></script>
	<script src="{{asset('js/magnific-popup.min.js')}} "></script>
	<script src="{{asset('js/owl.carousel.min.js')}} "></script>
<script src="{{asset('js/circle-progress.min.js')}}"></script>
    <script src="{{asset('js/main.js')}} "></script>
    
</body>
</html>
