<div class="team-section spad" id="features">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
			<h2>{{$cont->projects_title}}</h2>
			</div>
			<div class="row">
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($left as $item)
					<div class="icon-box light left">
						<div class="service-text">
							<h2>{{$item->title}}</h2>
							<p>{{$item->description}}</p>
						</div>
						<div class="icon">
							<i class="{{$item->icon->code}}"></i>
						</div>
					</div>
					@endforeach
				</div>
				<!-- Devices -->
				<div class="col-md-4 col-sm-4 devices">
					<div class="text-center">
						<img src="img/device.png" alt="">
					</div>
				</div>
				<!-- feature item -->
				<div class="col-md-4 col-sm-4 features">
					@foreach ($right as $item)
					<div class="icon-box light">
						<div class="icon">
							<i class="{{$item->icon->code}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$item->title}} </h2>
							<p>{{$item->description}}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<div class="text-center mt100">
			<a href="{{route('services')}}" class="site-btn">Browse</a>
			</div>
		</div>
	</div>