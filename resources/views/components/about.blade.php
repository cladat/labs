<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach ($projects as $proj)
							
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
							<i class="{{$proj->icon->code}}"></i>
							</div>
						<h2>{{$proj->title}}</h2>
						<p>{!! str_limit($proj->description, 120)!!}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>{{$cont->projects_title}}</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
					<p>{{$cont->projects_text1}}</p>
					</div>
					<div class="col-md-6">
						<p>{{$cont->projects_text2}}</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="" class="site-btn">Browse</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
						<a href="{{$cont->video}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>