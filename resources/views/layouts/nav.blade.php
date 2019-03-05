<header class="header-section">
  <div class="logo">
    <img src="{{asset('img/logo.png')}}" alt=""><!-- Logo -->
  </div>
  <!-- Navigation -->
  <div class="responsive"><i class="fa fa-bars"></i></div>
  <nav>
    <ul class="menu-list">
      <li class="active"><a href="{{route('/')}}">Home</a></li>
      <li><a href="{{route('services')}}">Services</a></li>
    <li><a href="{{route('blog')}}">Blog</a></li>
      <li><a href="{{route('contact.index')}}">Contact</a></li>
      <li><a href="{{route('elements')}}">Elements</a></li>
    </ul>
  </nav>
</header>