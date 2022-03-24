
@extends('layout.frontend.main')


@section('title', 'Amar Asom')
@section('content')

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                    <div class="article-content">
                        @if(!empty($posts->image))
                        <div class="article-image">
                            <img src="{{asset('uploads/posts/'.$posts->image)}}" alt="image">
                        </div>
                        @endif
                        <div class="entry-meta">
                            <ul>
                                <li><span>Published Date:</span> <a href="#">{{ $posts->published_date }}</a></li>
                                {{-- <li><span>Published Date:</span> <a href="#">{{ date('j F, Y', strtotime($posts->published_date)) }}</a></li> --}}
                                {{-- <li><span>Posted By:</span> <a href="#">John Anderson</a></li> --}}
                            </ul>
                        </div>
                        <h3 class="mb-3">{{$posts->title}}</h3>

                        <p>{!! $posts->story !!}</p>
                        @if(!empty($posts->video_link))
                            <a href="{{$posts->video_link}}" target="_blank">Read Full Story>></a>
                        @endif
                    </div>

                    <div class="article-footer">
                        <div class="article-tags">
                            <span><i class='bx1 bx-share-alt'></i></span>

                            <a href="#">Share</a>
                        </div>

                        <div class="article-share">
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx1 bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx1 bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx1 bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx1 bxl-pinterest-alt'></i>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            @include('layout/frontend/right-panel')
        </div>
    </div>
</section>
<!-- End Blog Details Area -->

@stop