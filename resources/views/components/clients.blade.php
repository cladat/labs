<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
					<h2>{{$cont->clients_title}}</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						
						@foreach ($clients as $client)
								
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
							<p>{{$client->testimony}}</p>
							<div class="client-info">
								<div class="avatar">
									<img src="{{Storage::disk('image')->url($client->image)}}" alt="">
								</div>
								<div class="client-name">
								<h2>{{$client->name}}</h2>
								<p>{{$client->job}}</p>
								</div>
							</div>
						</div>

						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>