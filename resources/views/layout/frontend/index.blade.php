@extends('layout.frontend.main')



@section('main-container')
@include('layout.frontend.slider')
<section id="content">
    <div class="content-wrap">

        <div class="promo promo-light promo-full bottommargin-lg header-stick border-top-0 p-5">
            <div class="container clearfix">
                <div class="row align-items-center">
                    <div class="col-12 col-lg" style="text-align: center;">
                        <h3>Our <span>Strengths</span></h3>
                        <span>Multi-faceted team with its ability to innovate, its capability to collect data across India and its ever evolving data quality improvement systems are at the core of the strengths of the Polls Map.</span>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="container clearfix">

            <div class="row col-mb-50">
                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                        <div class="fbox-icon">
                            <a href="#"><img src="{{asset('assetfront/images/icons/png/group.png')}}"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Team<!-- <span class="subtitle">Start your Own Shop today</span> --></h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                        <div class="fbox-icon">
                            <a href="#"><img src="assetfront/images/icons/png/innovation.png"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Innovations<!-- <span class="subtitle">Credit Cards &amp; PayPal Support</span> --></h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                        <div class="fbox-icon">
                            <a href="#"><img src="assetfront/images/icons/png/skills.png"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Field Capability<!-- <span class="subtitle">Realtime Email &amp; SMS Support</span> --></h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0">
                        <div class="fbox-icon">
                            <a href="#"><img src="assetfront/images/icons/png/data-management.png"></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Data Quality Management<!-- <span class="subtitle">Upto 50% Discounts</span> --></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="line"></div>
            
        </div>

        <div class="container clearfix">

            <div class="heading-block center">
                <h3>Some of our <span>Latest</span> Works</h3>
                <span>We have worked on some Awesome Projects that are worth boasting of.</span>
            </div>

            <div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="1" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="assetfront/images/portfolio/4/1.jpg" alt="Open Imagination">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                <a href="assetfront/images/portfolio/full/1.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                        <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="assetfront/images/portfolio/4/2.jpg" alt="Locked Steel Gate">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                <a href="assetfront/images/portfolio/full/2.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                        <span><a href="#">Illustrations</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="assetfront/images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
                                <a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                        <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="#">
                            <img src="assetfront/images/portfolio/4/4.jpg" alt="Morning Dew">
                        </a>
                        <div class="bg-overlay" data-lightbox="gallery">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="assetfront/images/portfolio/full/4.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="assetfront/images/portfolio/full/4-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                        <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="assetfront/images/portfolio/4/5.jpg" alt="Console Activity">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="assetfront/images/portfolio/full/5.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Console Activity</a></h3>
                        <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="portfolio-single-gallery.html">
                            <img src="assetfront/images/portfolio/4/6.jpg" alt="Shake It!">
                        </a>
                        <div class="bg-overlay" data-lightbox="gallery">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="assetfront/images/portfolio/full/6.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                <a href="assetfront/images/portfolio/full/6-1.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                <a href="assetfront/images/portfolio/full/6-2.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                <a href="assetfront/images/portfolio/full/6-3.jpg" class="d-none" data-lightbox="gallery-item"></a>
                                <a href="portfolio-single-gallery.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                        <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="portfolio-single-video.html">
                            <img src="assetfront/images/portfolio/4/7.jpg" alt="Backpack Contents">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="https://www.youtube.com/watch?v=kuceVNBTJio" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
                        <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-image">
                        <a href="portfolio-single.html">
                            <img src="assetfront/images/portfolio/4/8.jpg" alt="Sunset Bulb Glow">
                        </a>
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                <a href="assetfront/images/portfolio/full/8.jpg" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
                        <span><a href="#">Graphics</a></span>
                    </div>
                </div>

            </div>
        </div>

        <div class="section mt-0 border-top-0">
            <div class="container clearfix">
                <div class="heading-block center m-0">
                    <h3>News Update</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row posts-md col-mb-30">

                <div class="col-lg-3 col-md-6">
                    <div class="entry">
                        <div class="entry-image">
                            <a href="#"><img src="assetfront/images/magazine/thumb/1.jpg" alt="Image"></a>
                        </div>
                        <div class="entry-title title-xs nott">
                            <h3><a href="blog-single.html">Bloomberg smart cities; change-makers economic security</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i> 13th Jun 2021</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 53</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Prevention effect, advocate dialogue rural development lifting people up community civil society. Catalyst, grantees leverage.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="entry">
                        <div class="entry-image">
                            <a href="#"><img src="assetfront/images/magazine/thumb/2.jpg" alt="Image"></a>
                        </div>
                        <div class="entry-title title-xs nott">
                            <h3><a href="blog-single.html">Medicine new approaches communities, outcomes partnership</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i> 24th Feb 2021</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 17</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Cross-agency coordination clean water rural, promising development turmoil inclusive education transformative community.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="entry">
                        <div class="entry-image">
                            <a href="#"><img src="assetfront/images/magazine/thumb/3.jpg" alt="Image"></a>
                        </div>
                        <div class="entry-title title-xs nott">
                            <h3><a href="blog-single.html">Significant altruism planned giving insurmountable challenges liberal</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i> 30th Dec 2021</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Micro-finance; vaccines peaceful contribution citizens of change generosity. Measures design thinking accelerate progress medical initiative.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="entry">
                        <div class="entry-image">
                            <a href="#"><img src="assetfront/images/magazine/thumb/4.jpg" alt="Image"></a>
                        </div>
                        <div class="entry-title title-xs nott">
                            <h3><a href="blog-single.html">Compassion conflict resolution, progressive; tackle</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i> 15th Jan 2021</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 54</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Community health workers best practices, effectiveness meaningful work The Elders fairness. Our ambitions local solutions globalization.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        
        </div>

        


        <div class="container clearfix">

            <div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6" style="padding: 20px 0;">

                <div class="oc-item"><a href="http://pollsmap.org/"><img src="{{asset('assetfront/images/clients/1.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="http://pollsmap.org/"><img src="{{asset('assetfront/images/clients/2.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="http://pollsmap.org/"><img src="{{asset('assetfront/images/clients/3.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="http://pollsmap.org/"><img src="{{asset('assetfront/images/clients/4.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="http://pollsmap.org/"><img src="{{asset('assetfront/images/clients/5.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="http://pollsmap.org/"><img src="{{asset('assetfront/images/clients/6.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="http://pollsmap.org/"><img src="{{asset('assetfront/images/clients/7.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="http://pollsmap.org/"><img src="{{asset('assetfront/images/clients/8.png')}}" alt="Clients"></a></div>
                

            </div>

        </div>

        <!-- <a href="#" class="button button-full center text-end footer-stick">
            <div class="container clearfix">
                Canvas comes with Unlimited Customizations &amp; Options. <strong>Check Out</strong> <i class="icon-caret-right" style="top:4px;"></i>
            </div>
        </a> -->

    </div>
</section>
@endsection