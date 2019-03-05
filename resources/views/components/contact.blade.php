<div class="contact-section spad fix">
		<div class="container">
			<div class="row">
				<!-- contact info -->
				<div class="col-md-5 col-md-offset-1 contact-info col-push">
					<div class="section-title left">
						<h2>{{$cont->contact_title}}</h2>
					</div>
					<p>{{$cont->contact_description}}</p>
					<h3 class="mt60">{{$cont->contact_company}}</h3>
					<p class="con-item">{{$cont->contact_address}}</p>
				<p class="con-item">{{$cont->contact_phone}}</p>
					<p class="con-item">{{$cont->contact_email}}</p>
				</div>
				<!-- contact form -->
				
				<div class="col-md-6 col-pull">
					@if (session('alert'))
						<div class="alert alert-success">
							{{ session('alert') }}
						</div>
					@endif
					<form action="{{route('contact.store')}}" method="POST" class="form-class" id="con_form">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								@if($errors->has('name'))
									<div class="text-danger">{{$errors->first('name')}} </div>
								@endif
								<input type="text" name="name" placeholder="Your name" value="{{old('name')}}">
							</div>
							<div class="col-sm-6">
									@if($errors->has('email'))
									<div class="text-danger">{{$errors->first('email')}} </div>
								@endif
								<input type="text" name="email" placeholder="Your email" value="{{old('email')}}">
							</div>
							<div class="col-sm-12">
								@if($errors->has('subject'))
									<div class="text-danger">{{$errors->first('subject')}} </div>
								@endif
								<input type="text" name="subject" placeholder="Subject" value="{{old('subject')}}">
								@if($errors->has('message'))
									<div class="text-danger">{{$errors->first('message')}} </div>
								@endif
								<textarea name="message" placeholder="Message">{{old('message')}} </textarea>
								<button type="submit" class="site-btn">send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>