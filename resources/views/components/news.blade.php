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
						<form action="{{route('newsletter.store')}}" method="POST" class="nl-form">
							@csrf
							<input type="text" placeholder="Your e-mail here" name="mail">
							<button type="submit" class="site-btn btn-2">submit</button>
						</form>
						@if($errors->has('mail'))
						<div class="text-danger">{{$errors->first('mail')}} </div>
						@endif
					</div>	
			</div>

		</div>
	</div>