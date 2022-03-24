@extends('layout.frontend.main')


@section('title', 'LensOnNews')
@section('content')

<section class="blog-details-area pt-70">
	
	<div class="container">
		
		<div class="row pt-mo">
			<div class="col-lg-8 pbm-50">

				{{-- Top news area start --}}
				@if(!empty($posts_top))
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<div class="row">
							
							<div class="col-lg-6">
								<div class="editor-blog">
									<a href="{{URL::to('/detail-news/'.$posts_top->id)}}">
										<img src="{{asset('uploads/posts/'.$posts_top->image)}}" alt="Image" style="width: 400px; height:300px;">
									</a>
								</div>
							</div>

							<div class="col-lg-6 cont">
								<div class="editor-blog">
									<a href="{{URL::to('/detail-news/'.$posts_top->id)}}">
										<h2 class="head_txt">{{$posts_top->title}}</h2>
									</a>
								</div>
								<div>
									<p>{!! Str::limit($posts_top->story, 800) !!}</p>
									<p style="color:#e62525">@if (!empty($posts_top->author)){{$posts_top->author}}, @endif {{$posts_top->source}}</p>
								</div>
							</div>

						</div>
					  </div>

					  @foreach($posts_lead as $rows)
					  <div class="carousel-item">
						<div class="row">
							
							<div class="col-lg-6">
								<div class="editor-blog">
									<a href="{{URL::to('/detail-news/'.$rows->id)}}">
										<img src="{{asset('uploads/posts/'.$rows->image)}}" alt="Image" style="width: 400px; height:300px;">
									</a>
								</div>
							</div>

							<div class="col-lg-6 cont">
								<div class="editor-blog">
									<a href="{{URL::to('/detail-news/'.$rows->id)}}">
										<h2 class="head_txt">{{$rows->title}}</h2>
									</a>
								</div>
								<div>
								<p>{{Str::limit($rows->story, 200) }}</p>
								</div>
							</div>

						</div>
					  </div>
					  @endforeach


					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
				  </div>
				@endif

				{{-- Ads area start --}}
				
				{{-- <div class="full-width-ads" style="margin: 50px 0 50px 0">
					<div class="container">
						<div class="copy-right">
							<p>Advertisement</p>
						</div>
					</div>
				</div> --}}
				
				<!-- Start Latest Project Area -->
		<section class="latest-project-area pt-70">
			<div class="container">
				<div class="row">

					{{-- Top Story --}}
					<div class="col-lg-12">
						<div class="section-title" style="text-align: left">
							<a href="{{URL::to('/news/6')}}"><h2>Top Story</h2></a>
						</div>
							<div class="single-featured">
								@foreach($post_topstory as $rows_topstory)
								<div class="featured-content">
									
									<div>
										<a href="{{URL::to('/detail-news/'.$rows_topstory->id)}}">
											<span style="color: #000; font-size:16px;">{{$rows_topstory->title}}</span> -
										</a>
										
										@if(!empty($rows_topstory->author))
										<span style="font-size:12px; color:rgb(214, 55, 55);">{{$rows_topstory->author}},</span>
										@endif
										<span style="font-size: 12px; color:rgb(214, 55, 55);">
											{{$rows_topstory->source}}
										</span>
									</div>
									
								</div>
								@endforeach
							</div>
					</div>
				</div>


				{{-- National--}}
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title" style="text-align: left">
							<a href="{{URL::to('/news/13')}}"><h2>National</h2></a>
						</div>
							<div class="single-featured">
								@foreach($post_national as $rows_national)
								<div class="featured-content">
									
	
									<div>
										<a href="{{URL::to('/detail-news/'.$rows_national->id)}}">
											<span style="color: #000; font-size:16px;">{{$rows_national->title}}</span> -
										</a>
										
										@if(!empty($rows_national->author))
										<span style="font-size:12px; color:rgb(214, 55, 55);">{{$rows_national->author}},</span>
										@endif
										<span style="font-size: 12px; color:rgb(214, 55, 55);">
											{{$rows_national->source}}
										</span>
									</div>


								</div>
								@endforeach
							</div>
					</div>
				</div>

					{{-- Opinion/Commentary --}}
				<div class="row">	
					<div class="col-lg-12">
						<div class="section-title">
							<a href="{{URL::to('/news/8')}}"><h2>Opinion / Commentary</h2></a>
						</div>
							<div class="single-featured">
								@foreach($post_opinion as $rows)
								<div class="featured-content">

									<div>
										<a href="{{URL::to('/detail-news/'.$rows->id)}}">
											<span style="color: #000; font-size:16px;">{{$rows->title}}</span> -
										</a>
										
										@if(!empty($rows->author))
										<span style="font-size:12px; color:rgb(214, 55, 55);">{{$rows->author}},</span>
										@endif
										<span style="font-size: 12px; color:rgb(214, 55, 55);">
											{{$rows->source}}
										</span>
									</div>
								
								</div>
								@endforeach
							

							</div>
					</div>
				</div>	


					

					{{-- Politics/Nation --}}
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title" style="text-align: left">
							<a href="{{URL::to('/news/9')}}"><h2>Politics / Nation</h2></a>
						</div>
							<div class="single-featured">
								@foreach($post_politics as $rows_pol)
								<div class="featured-content">
									
									<div>
										<a href="{{URL::to('/detail-news/'.$rows_pol->id)}}">
											<span style="color: #000; font-size:16px;">{{$rows_pol->title}}</span> -
										</a>
										
										@if(!empty($rows_pol->author))
										<span style="font-size:12px; color:rgb(214, 55, 55);">{{$rows_pol->author}},</span>
										@endif
										<span style="font-size: 12px; color:rgb(214, 55, 55);">
											{{$rows_pol->source}}
										</span>
									</div>
									
								</div>
								@endforeach
							</div>
					</div>
				</div>

					{{-- Internantional --}}
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title" style="text-align: left">
							<a href="{{URL::to('/news/18')}}"><h2>Courts</h2></a>
						</div>
							<div class="single-featured">
								@foreach($post_court as $rows_courts)
								<div class="featured-content">
									
									<div>
										<a href="{{URL::to('/detail-news/'.$rows_courts->id)}}">
											<span style="color: #000; font-size:16px;">{{$rows_courts->title}}</span> -
										</a>
										
										@if(!empty($rows_courts->author))
										<span style="font-size:12px; color:rgb(214, 55, 55);">{{$rows_courts->author}},</span>
										@endif
										<span style="font-size: 12px; color:rgb(214, 55, 55);">
											{{$rows_courts->source}}
										</span>
									</div>
									
								</div>
								@endforeach
							</div>
					</div>
				</div>


					{{-- Business Economics --}}
					<div class="row">
					<div class="col-lg-12">
						<div class="section-title" style="text-align: left">
							<a href="{{URL::to('/news/10')}}"><h2>Business Economics</h2></a>
						</div>
							<div class="single-featured">
								@foreach($post_buseco as $rows_buseco)
								<div class="featured-content">
									
									<div>
										<a href="{{URL::to('/detail-news/'.$rows_buseco->id)}}">
											<span style="color: #000; font-size:16px;">{{$rows_buseco->title}}</span> -
										</a>
										
										@if(!empty($rows_buseco->author))
										<span style="font-size:12px; color:rgb(214, 55, 55);">{{$rows_buseco->author}},</span>
										@endif
										<span style="font-size: 12px; color:rgb(214, 55, 55);">
											{{$rows_buseco->source}}
										</span>
									</div>
									
								</div>
								@endforeach
							</div>
					</div>
				</div>


					{{-- Business --}}
					<div class="row">
					<div class="col-lg-12">
						<div class="section-title" style="text-align: left">
							<a href="{{URL::to('/news/14')}}"><h2>Business</h2></a>
						</div>
							<div class="single-featured">
								@foreach($post_business as $rows_business)
								<div class="featured-content">
									
									<div>
										<a href="{{URL::to('/detail-news/'.$rows_business->id)}}">
											<span style="color: #000; font-size:16px;">{{$rows_business->title}}</span> -
										</a>
										
										@if(!empty($rows_business->author))
										<span style="font-size:12px; color:rgb(214, 55, 55);">{{$rows_business->author}},</span>
										@endif
										<span style="font-size: 12px; color:rgb(214, 55, 55);">
											{{$rows_business->source}}
										</span>
									</div>
									
								</div>
								@endforeach
							</div>
					</div>
				</div>


					{{-- The Neighbourhood/World --}}
					<div class="row">
					<div class="col-lg-12">
						<div class="section-title" style="text-align: left">
							<a href="{{URL::to('/news/11')}}"><h2>The Neighbourhood</h2></a>
						</div>
							<div class="single-featured">
								@foreach($post_neighbour as $rows_neighbour)
								<div class="featured-content">
									
									<div>
										<a href="{{URL::to('/detail-news/'.$rows_neighbour->id)}}">
											<span style="color: #000; font-size:16px;">{{$rows_neighbour->title}}</span> -
										</a>
										
										@if(!empty($rows_neighbour->author))
										<span style="font-size:12px; color:rgb(214, 55, 55);">{{$rows_neighbour->author}},</span>
										@endif
										<span style="font-size: 12px; color:rgb(214, 55, 55);">
											{{$rows_neighbour->source}}
										</span>
									</div>

								</div>
								@endforeach
							</div>
					</div>
				</div>


					{{-- International --}}
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title" style="text-align: left">
							<a href="{{URL::to('/news/16')}}"><h2>International</h2></a>
						</div>
							<div class="single-featured">
								@foreach($post_int as $rows_int)
								<div class="featured-content">
									
									<div>
										<a href="{{URL::to('/detail-news/'.$rows_int->id)}}">
											<span style="color: #000; font-size:16px;">{{$rows_int->title}}</span> -
										</a>
										
										@if(!empty($rows_int->author))
										<span style="font-size:12px; color:rgb(214, 55, 55);">{{$rows_int->author}},</span>
										@endif
										<span style="font-size: 12px; color:rgb(214, 55, 55);">
											{{$rows_int->source}}
										</span>
									</div>

								</div>
								@endforeach
							</div>
					</div>
				</div>

			</div>
		</section>
		<!-- End Latest Project Area -->

			   


				


				


				





			</div>


			@include('layout/frontend/right-panel')
		</div>
	</div>
</section>



@stop