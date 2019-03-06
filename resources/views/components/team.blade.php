<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
			<h2>{{$cont->team_title}}</h2>
			</div>
			<div class="row">
				<!-- single member -->

				@foreach ($profils as $item)
				<div class="col-sm-4">
					<div class="member">
						<img src="{{$item->image}}" alt="" style="width:300px">
						<img src="{{Storage::disk('image')->url($item->image)}}" alt="" style="width:300px">
						<h2>{{$item->name}}</h2>
						<h3>{{$item->job}}</h3>
					</div>
				</div>
				@endforeach

				@foreach ($admin as $item)
				<div class="col-sm-4">
						<div class="member">
							<img src="{{$item->image}}" alt="" style="width:300px">
							<img src="{{Storage::disk('image')->url($item->image)}}" alt="" style="width:300px">
							<h2>{{$item->name}}</h2>
							<h3>{{$item->job}}</h3>
						</div>
					</div>
					@endforeach 

				@foreach ($profilss as $item)
				<div class="col-sm-4">
					<div class="member">
						<img src="{{$item->image}}" alt="" style="width:300px">
						<img src="{{Storage::disk('image')->url($item->image)}}" alt="" style="width:300px">
						<h2>{{$item->name}}</h2>
						<h3>{{$item->job}}</h3>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>