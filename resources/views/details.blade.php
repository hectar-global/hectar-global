@extends('layout.frontend.main')


@section('content')

<section id="page-title">

    <div class="container clearfix">
      <h1>{{ $posts->title }}</h1>
    </div>

</section><!-- #page-title end -->

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row gutter-40 col-mb-80">
                <!-- Post Content
                ============================================= -->
                <div class="postcontent col-lg-9">
                    <div class="single-post mb-0">

                        <!-- Single Post
                        ============================================= -->
                        <div class="entry clearfix">

                            <!-- Entry Title
                            ============================================= -->
                            {{-- <div class="entry-title">
                                <h2>{{ $posts->title }}</h2>
                            </div> --}}
                            <!-- .entry-title end -->
                            

                            <!-- Entry Image
                            ============================================= -->
                            {{-- <div class="entry-image">
                                <a href="#"><img src="images/blog/full/1.jpg" alt="Blog Single"></a>
                            </div> --}}
                            <!-- .entry-image end -->

                            <!-- Entry Content
                            ============================================= -->
                            <div class="entry-content mt-0">

                                {!! $posts->story !!}

                                
                                <!-- Post Single - Content End -->
                               

                                <div class="clear"></div>

                                <!-- Post Single - Share
                                ============================================= -->
                                
                            </div>
                        </div><!-- .entry end -->

                        <!-- Post Navigation
                        ============================================= -->

                    </div>

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->

                <div class="sidebar col-lg-3">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget clearfix">

                            <div class="tabs mb-0 clearfix" id="sidebar-tabs">

                                <ul class="tab-nav clearfix">
                                    <li><a href="#tabs-1">Popular</a></li>
                                    <li><a href="#tabs-2">Recent</a></li>
                                    <li><a href="#tabs-3"><i class="icon-comments-alt me-0"></i></a></li>
                                </ul>

                                <div class="tab-container">

                                    <div class="tab-content clearfix" id="tabs-1">
                                        <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="icon-comments-alt"></i> 35 Comments</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="icon-comments-alt"></i> 24 Comments</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li><i class="icon-comments-alt"></i> 19 Comments</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content clearfix" id="tabs-2">
                                        <div class="posts-sm row col-mb-30" id="recent-post-list-sidebar">
                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/magazine/small/1.jpg" alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/magazine/small/2.jpg" alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/magazine/small/3.jpg" alt="Image"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <div class="entry-title">
                                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                        </div>
                                                        <div class="entry-meta">
                                                            <ul>
                                                                <li>10th July 2021</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content clearfix" id="tabs-3">
                                        <div class="posts-sm row col-mb-30" id="recent-comments-list-sidebar">
                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/icons/avatar.jpg" alt="User Avatar"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/icons/avatar.jpg" alt="User Avatar"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="entry col-12">
                                                <div class="grid-inner row g-0">
                                                    <div class="col-auto">
                                                        <div class="entry-image">
                                                            <a href="#"><img class="rounded-circle" src="images/icons/avatar.jpg" alt="User Avatar"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-3">
                                                        <strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="widget clearfix">

                            <h4>Portfolio Carousel</h4>
                            <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

                                <div class="oc-item">
                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                                    <a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc text-center pb-0">
                                            <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                            <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="oc-item">
                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="images/portfolio/4/1.jpg" alt="Open Imagination">
                                            </a>
                                            <div class="bg-overlay">
                                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                                    <a href="images/blog/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                                </div>
                                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc text-center pb-0">
                                            <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                            <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>
                </div><!-- .sidebar end -->
               
                <!-- .sidebar end -->
            </div>

        </div>
    </div>
</section><!-- #content end -->

@endsection
