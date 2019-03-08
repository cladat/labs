<div class="services-card-section spad">
		<div class="container">
			<div class="row">
				<!-- Single Card -->
				@foreach ($card as $proj)

				<div class="col-md-4 col-sm-6">
					<div class="sv-card">
						<div class="card-img">
						<img src="{{Storage::disk('image')->url($proj->image)}}" alt="" style="height:300px;">
						</div>
						<div class="card-text">
						<h2>{{$proj->title}}</h2>
						<p style="height:100px;">{!!str_limit($proj->description, 50)!!}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>