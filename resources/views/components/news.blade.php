<div class="newsletter-section spad">
		<div class="container">
			<div class="row">
				
				<div class="col-md-3">
					<h2>Newsletter</h2>
				</div>
				<div class="col-md-9">
						@if (session('alert'))
						<div class="alert alert-success">
								{{ session('alert') }}
						</div>
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