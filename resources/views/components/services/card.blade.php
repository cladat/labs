<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				@foreach ($projects as $proj)

				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
						<img src="{{Storage::disk('image')->url($proj->image)}}" alt="">
						</div>
						<div class="card-text">
						<h2>{{$proj->title}}</h2>
						<p>{{$proj->description}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>