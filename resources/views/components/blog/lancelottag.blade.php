<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
					@foreach ($articles as $article)
							
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="img/blog/blog-3.jpg" alt="">
							<div class="post-date">
								<h2>03</h2>
								<h3>Nov 2017</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title"> {{$article->title}} </h2>
							<div class="post-meta">
								<a href="">{{$article->profil->name}}</a>
								@foreach ($article->tags as $tag)
											<a href="">{{$tag->name}},</a>
                @endforeach
								<a href="">2 Comments</a>
							</div>
							<p> {!! str_limit($article->text, 100)!!}</p>
							<a href="blog-post.html" class="read-more">Read More</a>
						</div>
					</div>

					@endforeach

					<!-- Pagination -->
					{{-- <div class="page-pagination">
							{!! $articles->links();!!}
					</div> --}}

				</div>

				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($categories as $item)
							<li><a href="#">{{$item->name}} </a></li>
							@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Instagram</h2>
						<ul class="instagram">
							@foreach ($insta as $item)
							<li><img src="{{$item->pic}} " alt=""></li>
							@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
							@foreach ($tags as $tag)
							<li><a href="{{route('blog.show', ['id'=>$tag->id])}}">{{$tag->name}} </a></li>
							@endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Quote</h2>
						<div class="quote">
							<span class="quotation">‘​‌‘​‌</span>
							<p>Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique. Sed lacinia turpis at ultricies vestibulum.</p>
						</div>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Add</h2>
						<div class="add">
							<a href=""><img src="img/add.jpg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>