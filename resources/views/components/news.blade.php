<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				@if (session('alert'))
					<div class="col alert alert-success">
							{{ session('alert') }}
					</div>
				@endif
			</div>

			<div class="row">
					<div class="col-md-3">
						<h2>Newsletter</h2>
					</div>
					<div class="col-md-9">
						@if($errors->has('email'))
							<div class="text-danger">{{$errors->first('email')}} </div>
						@endif
						<form action="{{route('newsletter.store')}}" method="POST" class="nl-form">
							@csrf
							<input type="text" placeholder="Your e-mail here" name="email">
							<button type="submit" class="site-btn btn-2">Newsletter</button>
						</form>
					</div>	
			</div>

		</div>
	</div>