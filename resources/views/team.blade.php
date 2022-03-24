

@extends('layout.frontend.main')


@section('main-container')

<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">



					<div class="fancy-title title-border">
						<h3>Our Team</h3>
					</div>

					<div class="row col-mb-50 mb-0">
                        @foreach ( $posts_team as $team_result )
						<div class="col-lg-3 col-md-6">
                           
							<div class="team">
								<div class="team-image">
									<img src="{{asset('uploads/posts/'.$team_result->image)}}" style="height:300px; width:250px;" alt="John Doe">
								</div>
								<div class="team-desc">
									<div class="team-title"><h4>{{$team_result->title}}</h4><span>{{$team_result->story}}</span></div>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
								</div>
							</div>
						</div>
                        @endforeach

					</div>

					{{-- <div class="fancy-title title-border">
						<h3>List Layout</h3>
					</div>

					<div class="row col-mb-50 mb-0">

						<div class="col-lg-6">

							<div class="team team-list row align-items-center">
								<div class="team-image col-sm-6">
									<img src="images/team/3.jpg" alt="John Doe">
								</div>
								<div class="team-desc col-sm-6">
									<div class="team-title"><h4>John Doe</h4><span>CEO</span></div>
									<div class="team-content">
										<p>Carbon emissions reductions giving, legitimize amplify non-partisan Aga Khan. Policy dialogue assessment expert free-speech cornerstone disruptor freedom. Cesar Chavez empower.</p>
									</div>
									<a href="#" class="social-icon si-rounded si-small si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
								</div>
							</div>

						</div>

						<div class="col-lg-6">

							<div class="team team-list row align-items-center">
								<div class="team-image col-sm-6">
									<img src="images/team/4.jpg" alt="Nix Maxwell">
								</div>
								<div class="team-desc col-sm-6">
									<div class="team-title"><h4>Nix Maxwell</h4><span>Support</span></div>
									<div class="team-content">
										<p>Eradicate invest honesty human rights accessibility theory of social change. Diversity experience in the field compassion, inspire breakthroughs planned giving.</p>
									</div>
									<a href="#" class="social-icon si-rounded si-small si-forrst">
										<i class="icon-forrst"></i>
										<i class="icon-forrst"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-skype">
										<i class="icon-skype"></i>
										<i class="icon-skype"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-flickr">
										<i class="icon-flickr"></i>
										<i class="icon-flickr"></i>
									</a>
								</div>
							</div>

						</div>

					</div> --}}



					<div class="clear"></div>


				</div>
			</div>
		</section><!-- #content end -->

@endsection