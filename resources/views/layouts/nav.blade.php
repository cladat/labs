<header class="header-section">
  <div class="logo">
    <img src="{{asset('img/logo.png')}}" alt=""><!-- Logo -->
  </div>
  <!-- Navigation -->
  <div class="responsive"><i class="fa fa-bars"></i></div>
  <nav>
    <ul class="menu-list">
      <li class="@if (Route::is('/')) {{'active'}} @endif"><a href="{{route('/')}}">Home</a></li>
      <li class="@if (Route::is('services')) {{'active'}} @endif"><a href="{{route('services')}}">Services</a></li>
    <li class="@if (Route::is('blog' . '*')) {{'active'}} @endif"><a href="{{route('blog')}}">Blog</a></li>
      <li class="@if (Route::is('contact.index')) {{'active'}} @endif"><a href="{{route('contact.index')}}">Contact</a></li>
    </ul>
  </nav>
</header>