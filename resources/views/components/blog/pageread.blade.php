<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
          <div class="single-post">
              <div class="post-thumbnail">
                <img src="{{Storage::disk('image')->url($article->image)}}" alt="">
                <div class="post-date">
                    <h2>{{$article->day}}</h2>
                    <h3>{{$article->year}}</h3>
                </div>
              </div>
              <div class="post-content">
                <h2 class="post-title">{{$article->title}}</h2>
                <div class="post-meta">
                  <a href="">{{$article->profil->name}}</a>
                  @foreach ($article->tags as $tag)
									<a href="">{{$tag->name}}</a>
                  @endforeach
                  <a href="">{{$cmpt}} Comments</a>
                </div>
                <p> {!!($article->text)!!} </p>
              </div>
              <!-- Post Author -->
              <div class="author">
                <div class="avatar">
                  <img src="{{$article->profil->image}}" alt="" style="width:300px">
                  <img src="{{Storage::disk('image')->url($article->profil->image)}}" alt="" style="width:300px">
                </div>
                <div class="author-info">
                  <h2>{{$article->profil->name}}, <span>Author</span></h2>
                  <p> {{$article->comms}} </p>
                </div>
              </div>
              <!-- Post Comments -->
              <div class="comments">
                <h2>Comments ({{$cmpt}})</h2>
                <ul class="comment-list">
                @foreach ($comments as $item)
                  @if ($item->validate == 1)
                  <li>
                    <div class="avatar">
                      <img src="{{asset('/img/avatar/02.jpg')}}" alt="">
                    </div>
                    <div class="commetn-text">
                      <h3>{{$item->name}} | {{$item->day}} {{$item->year}} | Reply</h3>
                      <p>{{$item->message}} </p>
                    </div>
                  </li>
                  @endif
                @endforeach
                </ul>
              </div>
              <!-- Comment Form -->
              @if (session('alert'))
                <div class="alert alert-success">
                    {{ session('alert') }}
                </div>
              @endif
              <div class="row">
                <div class="col-md-9 comment-from">
                  <h2>Leave a comment</h2>
                  <form action="{{route('comment.store', ['article'=>$article->id])}} " method="POST" class="form-class">
                    @csrf

                    <div class="row">
                      <div class="col-sm-6">
                        @if($errors->has('name'))
	                        <div  class="text-danger">{{$errors->first('name')}}</div>
                        @endif
                      <input type="text" name="name" placeholder="Your name" value="{{old('name')}}">
                      </div>
                      <div class="col-sm-6">
                        @if($errors->has('email'))
	                        <div  class="text-danger">{{$errors->first('email')}}</div>
                        @endif
                        <input type="text" name="email" placeholder="Your email" value="{{old('email')}}">
                      </div>
                      <div class="col-sm-12">
                        @if($errors->has('subject'))
	                        <div  class="text-danger">{{$errors->first('subject')}}</div>
                        @endif
                        <input type="text" name="subject" placeholder="Subject" value="{{old('subject')}}">
                        @if($errors->has('message'))
	                        <div  class="text-danger">{{$errors->first('message')}}</div>
                        @endif
                        <textarea name="message" placeholder="Message">{{old('message')}}</textarea>
                      <input type="hidden" name="article_id" value="{{$article->id}}">
                        <button type="submit" class="site-btn">send</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

				</div>

				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					{{-- <div class="widget-item">
						<form action="#" class="search-form">
							<input type="text" placeholder="Search">
							<button class="search-btn"><i class="flaticon-026-search"></i></button>
						</form>
					</div> --}}
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
							@foreach ($tags as $item)
							<li><a href="{{route('blog.show', ['id'=>$item->id])}}">{{$item->name}} </a></li>
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