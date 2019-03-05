<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="{{$cont->carousel_logo}}" alt="">
				<img src="{{Storage::disk('image')->url($cont->carousel_logo)}}" alt="">
				<p>{{$cont->carousel_text}}</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
		@foreach ($carou as $item)
			<div class="item  hero-item" data-bg="{{Storage::disk('image')->url($item->photo)}}"></div>
		@endforeach
		</div>
	</div>