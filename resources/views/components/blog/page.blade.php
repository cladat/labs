<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
					@foreach ($articles as $article)
							
					<div class="post-item">
						<div class="post-thumbnail">
							<img src="{{Storage::disk('image')->url($article->image)}}" alt="">
							<div class="post-date">
								<h2>{{$article->day}}</h2>
								<h3>{{$article->year}}</h3>
							</div>
						</div>
						<div class="post-content">
							<h2 class="post-title"> {{$article->title}} </h2>
							<div class="post-meta">
								<a href="">{{$article->profil->name}}</a>
								@foreach ($article->tags as $tag)
									<a href="">{{$tag->name}},</a>
                @endforeach
								<a href="">{{count($article->comments->where('validate', 1))}} Comments</a>
							</div>
							<p> {!! str_limit($article->text, 150)!!}</p>
							<a href="{{route('blog.read', ['id'=>$article->id])}}" class="read-more">Read More</a>
						</div>
					</div>

					@endforeach

					<!-- Pagination -->
					<div class="page-pagination">
							{{$articles->links()}}
					</div>

				</div>

				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
						<form action="{{route('search')}}" class="search-form" method="POST">
							@csrf
							<input type="text" placeholder="Search" name="inputsearcher">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
							@foreach ($categories as $cat)
							<li><a href="{{route('blog.showcat', ['id'=>$cat->id])}} ">{{$cat->name}} </a></li>
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