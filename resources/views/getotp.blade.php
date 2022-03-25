@extends('layout.frontend.main-otp')


@section('title', 'LensOnNews')
@section('content')

                	
            <!-- wrapper  -->	
            <div id="wrapper">
                <!-- content -->	
                <div class="content">
                    <!--  section  -->
                    <section class="hero-section hero-section_dec" data-scrollax-parent="true">
                        <div class="bg-wrap">
                            <div class="bg par-elem "  data-bg="{{asset('assetfront/images/bg/1.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
                        </div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="hero-title hero-title_small">
                                <h4>Buy agro commodities online with confidence.</h4>
                                <h2>Calculate CIF cost<br>
                                    in 30 Sec.
                                </h2>
                            </div>
                            <div class="main-search-input-wrap">
                                <div class="main-search-input fl-wrap">
                                    
                                    
                                    <div class="main-search-input-item">
                                        <select data-placeholder="Select Product"  class="chosen-select" >
                                            <option>What are you looking for?</option>
                                            <option>Red Dried Peppers</option>
                                            <option>Sugar</option>
                                            <option>Coriander Seeds</option>
                                            
                                        </select>
                                    </div>

                                    <div class="main-search-input-item">
                                        <select data-placeholder="Enter Destination"  class="chosen-select no-search-select" >
                                            <option>Select Destination</option>
                                            <option>Sri Lanka</option>
                                            <option>Singapore</option>
                                            <option>Thailand</option>
                                        </select>
                                    </div>
                                    
                                    <div class="main-search-input-item">
                                        <select data-placeholder="Loadability"  class="chosen-select no-search-select" >
                                            <option>Select Container Type</option>
                                            <option>40ft | 14 MT</option>
                                            <option>80ft | 24 MT</option>
                                            <option>85ft | 24 MT</option>
                                        </select>
                                    </div>
                                    <button class="main-search-button color-bg" onclick="window.location.href='listing.html'">  Get CIF Quote <i class="far fa-search"></i> </button>
                                </div>
                            </div>
                            <div class="hero-notifer fl-wrap">Need more search options? <a href="listing.html">Explore Products</a> </div>
                            <div class="scroll-down-wrap">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                                <span>Why Hectar? Scroll Down To Learn More</span>
                            </div>
                        </div>
                    </section>
                    <!--  section  end-->

                     <!-- section -->
                     <section class="gray-bg ">
                       
                        <div class="testimonials-slider-wrap">
                            <div class="testimonials-slider">
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->			
                                
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->		

                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->		

                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->		

                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->		
                                							
                            </div>
                        </div>
                    </section>
                    <!-- section end-->
                    
                    <!-- section -->
                    <section class="gray-bg small-padding">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="section-title fl-wrap">
                                        <h4>Browse Hot Offers</h4>
                                        <h2>Explore Products</h2>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="listing-filters gallery-filters">
                                        <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*"> <span>All Categories</span></a>
                                        <a href="#" class="gallery-filter" data-filter=".cat_1"> <span>Herbs & Spice</span></a>
                                        <a href="#" class="gallery-filter" data-filter=".cat_2"> <span>Fresh Fruits</span></a>
                                        <a href="#" class="gallery-filter" data-filter=".cat_3"> <span>Grains</span></a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <!-- grid-item-holder-->	
                            <div class="grid-item-holder gallery-items gisp fl-wrap">
                                <!-- gallery-item-->
                                <div class="gallery-item cat_1">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img fl-wrap">
                                                <a href="#" class="geodir-category-img_item">
                                                    <img src="{{asset('assetfront/images/all/1.jpg')}}" alt="">
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="geodir-category-location">
                                                    <a href="#" class="single-map-item tolt" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"   data-microtip-position="top-left" data-tooltip="more info"><i class="fas fa-map-marker-alt"></i> <span>  India</span></a>
                                                </div>
                                                <ul class="list-single-opt_header_cat">
                                                    <li><a href="#" class="cat-opt blue-bg">variant 1</a></li>
                                                    <li><a href="#" class="cat-opt color-bg">variant 2</a></li>
                                                </ul>
                                                
                                                <div class="geodir-category-listing_media-list">
                                                    <span><i class="fas fa-camera"></i> 8</span>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <div class="geodir-category-content-details">
                                                    <ul>
                                                        
                                                        <li><i class="fal fa-cube"></i><span>Herbs & Spices</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                                <h3 class="title-sin_item"><a href="listing-single.html">Red Dried Peppers</a></h3>
                                                <div class="geodir-category-content_price"><small>~</small>$ 600,000.00 per MT</div>
                                               
                                                
                                                <div class="geodir-category-footer fl-wrap">
                                                    <div class="cf_btn">Get Quote</div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->															
                                </div>
                                <!-- gallery-item end--> 
                                <!-- gallery-item-->
                                <div class="gallery-item cat_3">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img fl-wrap">
                                                <a href="#" class="geodir-category-img_item">
                                                    <img src="{{asset('assetfront/images/all/1.jpg')}}" alt="">
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="geodir-category-location">
                                                    <a href="#" class="single-map-item tolt" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"   data-microtip-position="top-left" data-tooltip="more info"><i class="fas fa-map-marker-alt"></i> <span>  India</span></a>
                                                </div>
                                                <ul class="list-single-opt_header_cat">
                                                    <li><a href="#" class="cat-opt blue-bg">variant 1</a></li>
                                                    <li><a href="#" class="cat-opt color-bg">variant 2</a></li>
                                                </ul>
                                                
                                                <div class="geodir-category-listing_media-list">
                                                    <span><i class="fas fa-camera"></i> 8</span>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <div class="geodir-category-content-details">
                                                    <ul>
                                                        
                                                        <li><i class="fal fa-cube"></i><span>Herbs & Spices</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                                <h3 class="title-sin_item"><a href="listing-single.html">Red Dried Peppers</a></h3>
                                                <div class="geodir-category-content_price"><small>~</small>$ 600,000.00 per MT</div>
                                               
                                                
                                                <div class="geodir-category-footer fl-wrap">
                                                    <div class="cf_btn">Get Quote</div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->															
                                </div>
                                <!-- gallery-item end-->
                                
                                 <!-- gallery-item-->
                                 <div class="gallery-item cat_1">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img fl-wrap">
                                                <a href="#" class="geodir-category-img_item">
                                                    <img src="{{asset('assetfront/images/all/1.jpg')}}" alt="">
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="geodir-category-location">
                                                    <a href="#" class="single-map-item tolt" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"   data-microtip-position="top-left" data-tooltip="more info"><i class="fas fa-map-marker-alt"></i> <span>  India</span></a>
                                                </div>
                                                <ul class="list-single-opt_header_cat">
                                                    <li><a href="#" class="cat-opt blue-bg">variant 1</a></li>
                                                    <li><a href="#" class="cat-opt color-bg">variant 2</a></li>
                                                </ul>
                                                
                                                <div class="geodir-category-listing_media-list">
                                                    <span><i class="fas fa-camera"></i> 8</span>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <div class="geodir-category-content-details">
                                                    <ul>
                                                        
                                                        <li><i class="fal fa-cube"></i><span>Herbs & Spices</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                                <h3 class="title-sin_item"><a href="listing-single.html">Red Dried Peppers</a></h3>
                                                <div class="geodir-category-content_price"><small>~</small>$ 600,000.00 per MT</div>
                                               
                                                
                                                <div class="geodir-category-footer fl-wrap">
                                                    <div class="cf_btn">Get Quote</div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->															
                                </div>
                                <!-- gallery-item end-->

                                 <!-- gallery-item-->
                                 <div class="gallery-item cat_2">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img fl-wrap">
                                                <a href="#" class="geodir-category-img_item">
                                                    <img src="{{asset('assetfront/images/all/1.jpg')}}" alt="">
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="geodir-category-location">
                                                    <a href="#" class="single-map-item tolt" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"   data-microtip-position="top-left" data-tooltip="more info"><i class="fas fa-map-marker-alt"></i> <span>  India</span></a>
                                                </div>
                                                <ul class="list-single-opt_header_cat">
                                                    <li><a href="#" class="cat-opt blue-bg">variant 1</a></li>
                                                    <li><a href="#" class="cat-opt color-bg">variant 2</a></li>
                                                </ul>
                                                
                                                <div class="geodir-category-listing_media-list">
                                                    <span><i class="fas fa-camera"></i> 8</span>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <div class="geodir-category-content-details">
                                                    <ul>
                                                        
                                                        <li><i class="fal fa-cube"></i><span>Herbs & Spices</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                                <h3 class="title-sin_item"><a href="listing-single.html">Red Dried Peppers</a></h3>
                                                <div class="geodir-category-content_price"><small>~</small>$ 600,000.00 per MT</div>
                                               
                                                
                                                <div class="geodir-category-footer fl-wrap">
                                                    <div class="cf_btn">Get Quote</div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->															
                                </div>
                                <!-- gallery-item end-->

                                 <!-- gallery-item-->
                                 <div class="gallery-item cat_3">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img fl-wrap">
                                                <a href="#" class="geodir-category-img_item">
                                                    <img src="{{asset('assetfront/images/all/1.jpg')}}" alt="">
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="geodir-category-location">
                                                    <a href="#" class="single-map-item tolt" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"   data-microtip-position="top-left" data-tooltip="more info"><i class="fas fa-map-marker-alt"></i> <span>  India</span></a>
                                                </div>
                                                <ul class="list-single-opt_header_cat">
                                                    <li><a href="#" class="cat-opt blue-bg">variant 1</a></li>
                                                    <li><a href="#" class="cat-opt color-bg">variant 2</a></li>
                                                </ul>
                                                
                                                <div class="geodir-category-listing_media-list">
                                                    <span><i class="fas fa-camera"></i> 8</span>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <div class="geodir-category-content-details">
                                                    <ul>
                                                        
                                                        <li><i class="fal fa-cube"></i><span>Herbs & Spices</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                                <h3 class="title-sin_item"><a href="listing-single.html">Red Dried Peppers</a></h3>
                                                <div class="geodir-category-content_price"><small>~</small>$ 600,000.00 per MT</div>
                                               
                                                
                                                <div class="geodir-category-footer fl-wrap">
                                                    <div class="cf_btn">Get Quote</div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->															
                                </div>
                                <!-- gallery-item end-->
                            </div>
                            <!-- grid-item-holder-->	
                            <a href="#" class="btn float-btn small-btn color-bg">View All Products</a>
                        </div>
                    </section>
                    <!-- section end-->	
                    <!-- section -->
                    <section>
                        <div class="container">
                            <!--about-wrap -->
                            <div class="about-wrap">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="about-title ab-hero fl-wrap">
                                            <h2>Why Choose Our Products </h2>
                                            <h4>Check video presentation to find   out more about us .</h4>
                                        </div>
                                        <div class="services-opions fl-wrap">
                                            <ul>
                                                <li>
                                                    <i class="fal fa-headset"></i>
                                                    <h4>24 Hours Support  </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                </li>
                                                <li>
                                                    <i class="fal fa-users-cog"></i>
                                                    <h4>Grading & Certifications</h4>
                                                    <p>Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Curabitur convallis fringilla diam sed aliquam. </p>
                                                </li>
                                                <li>
                                                    <i class="fal fa-phone-laptop"></i>
                                                    <h4>Realtime Tracking & Updates</h4>
                                                    <p>Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa.</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">
                                        <div class="about-img fl-wrap">
                                            <img src="{{asset('assetfront/images/all/1.jpg')}}" class="respimg" alt="">
                                            <div class="about-img-hotifer color-bg">
                                                <p>100 +</p>
                                                <h4>ORDERS</h4>
                                                <h5>DELIVERED</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- about-wrap end  -->							
                        </div>
                    </section>
                    <!-- section end-->	
                    <!-- section  -->
                    <section class="hidden-section no-padding-section">
                        <div class="half-carousel-wrap">
                            <div class="half-carousel-title color-bg">
                                <div class="half-carousel-title-item fl-wrap">
                                    <h2>Explore Categories</h2>
                                    <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
                                </div>
                                <div class="pwh_bg"></div>
                            </div>
                            <div class="half-carousel-conatiner">
                                <div class="half-carousel fl-wrap full-height">
                                    <!--slick-item -->
                                    <div class="slick-item">
                                        <div class="half-carousel-item fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg"  data-bg="{{asset('assetfront/images/bg/long/1.jpg')}}"></div>
                                            </div>
                                            <div class="half-carousel-content">
                                                <div class="hc-counter color-bg">26 variants</div>
                                                <h3><a href="#">Herbs & Spices</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--slick-item end -->
                                    <!--slick-item -->
                                    <div class="slick-item">
                                        <div class="half-carousel-item fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg"  data-bg="{{asset('assetfront/images/bg/long/1.jpg')}}"></div>
                                            </div>
                                            <div class="half-carousel-content">
                                                <div class="hc-counter color-bg">89 variants</div>
                                                <h3><a href="#">Grains</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--slick-item end -->									
                                    <!--slick-item -->
                                    <div class="slick-item">
                                        <div class="half-carousel-item fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg"  data-bg="{{asset('assetfront/images/bg/long/1.jpg')}}"></div>
                                            </div>
                                            <div class="half-carousel-content">
                                                <div class="hc-counter color-bg">102 variants</div>
                                                <h3><a href="#">Fresh Fruit</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--slick-item end -->
                                    <!--slick-item -->
                                    <div class="slick-item">
                                        <div class="half-carousel-item fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg"  data-bg="{{asset('assetfront/images/bg/long/1.jpg')}}"></div>
                                            </div>
                                            <div class="half-carousel-content">
                                                <div class="hc-counter color-bg">51 varitants</div>
                                                <h3><a href="#">Fresh Vegetables</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--slick-item end -->									
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--section end-->  	
                     <!-- section -->
                     <section class="gray-bg ">
                       
                        <div class="testimonials-slider-wrap">
                            <div class="testimonials-slider">
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->			
                                
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->		

                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->		

                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->		

                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->		
                                							
                            </div>
                        </div>
                    </section>
                    <!-- section end-->				
                   			
                    <!-- section -->
                    <section class="color-bg small-padding">
                        <div class="container">
                            <div class="main-facts fl-wrap">
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="578">0</div>
                                            </div>
                                        </div>
                                        <h6>Agents and Agencys</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="12168">0</div>
                                            </div>
                                        </div>
                                        <h6>Happy Customers Every Year</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="2172">0</div>
                                            </div>
                                        </div>
                                        <h6>Won Awards</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                                <!-- inline-facts  -->
                                <div class="inline-facts-wrap">
                                    <div class="inline-facts">
                                        <div class="milestone-counter">
                                            <div class="stats animaper">
                                                <div class="num" data-content="0" data-num="732">0</div>
                                            </div>
                                        </div>
                                        <h6>New Listing Every Week</h6>
                                    </div>
                                </div>
                                <!-- inline-facts end -->
                            </div>
                        </div>
                        <div class="svg-bg">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%"
                                height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
                                <defs>
                                    <lineargradient id="bg">
                                        <stop offset="0%" style="stop-color:rgba(255, 255, 255, 0.6)"></stop>
                                        <stop offset="50%" style="stop-color:rgba(255, 255, 255, 0.1)"></stop>
                                        <stop offset="100%" style="stop-color:rgba(255, 255, 255, 0.6)"></stop>
                                    </lineargradient>
                                    <path id="wave" stroke="url(#bg)" fill="none" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
                                        s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
                                </defs>
                                <g>
                                    <use xlink:href="#wave">
                                        <animatetransform attributeName="transform" attributeType="XML" type="translate" dur="10s" calcMode="spline"
                                            values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                                            repeatCount="indefinite" />
                                    </use>
                                    <use xlink:href="#wave">
                                        <animatetransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline"
                                            values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                                            repeatCount="indefinite" />
                                    </use>
                                    <use xlink:href="#wave">
                                        <animatetransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline"
                                            values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                                            repeatCount="indefinite" />
                                    </use>
                                    <use xlink:href="#wave">
                                        <animatetransform attributeName="transform" attributeType="XML" type="translate" dur="12s" calcMode="spline" values="0 240;140 200;0 230"
                                            keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
                                    </use>
                                </g>
                            </svg>
                        </div>
                    </section>
                    <!-- section end-->	 
                    <!-- section -->
                    <section class="gray-bg ">
                       
                        <div class="testimonials-slider-wrap">
                            <div class="testimonials-slider">
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->			
                                
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->		

                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->		

                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->		

                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""></div>
                                            <div class="review-owner fl-wrap">200+ product 
                                                options available</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->		
                                							
                            </div>
                        </div>
                    </section>
                    <!-- section end-->	
                   
                </div>
                <!-- content end -->	
                <!-- subscribe-wrap -->	
                <div class="subscribe-wrap fl-wrap">
                    <div class="container">
                        <div class="subscribe-container fl-wrap color-bg">
                            <div class="pwh_bg"></div>
                            <div class="mrb_dec mrb_dec3"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="subscribe-header">
                                        <h4>newsletter</h4>
                                        <h3>Sign up for newsletter and get latest news and update</h3>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-5">
                                    <div class="footer-widget fl-wrap">
                                        <div class="subscribe-widget fl-wrap">
                                            <div class="subcribe-form">
                                                <form id="subscribe">
                                                    <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="Enter Your Email" spellcheck="false" type="text">
                                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">  Subscribe</button>
                                                    <label for="subscribe-email" class="subscribe-message"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- subscribe-wrap end -->	
            
@stop

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
{{-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}

<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal show" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title">OTP sent to your email please verify</h4>
        </div>
        <div class="modal-body">
            <form action="{{url('/verifyotp')}}" method="POST" name="addProduct" id="addProduct" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                      <label>Enter OTP</label>
                      <input type="text" class="form-control" value="{{old('otp')}}" name="otp" id="otp" aria-describedby="potpHelp" placeholder="OTP" class="form-control {{($errors->any() && $errors->first('otp')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('otp'){{@'OTP is required'}}@enderror</span>
                     {{-- <input type="hidden" name="uid" value="{{$user_id}}"> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-12">
                  <button type="submit" class="btn btn-success">Verify</button>
                </div>
                
              </div>
        </form>
        {{-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
      
    </div>
  </div>
  
</div>

<script>
$(".close").click(function(){
            $("#myModal").modal("hide");
            //alert("sadasd");
        });
</script>

{{-- <script type="text/javascript">
    $(document).ready(function(){
        $(".modal-open").trigger('click');
       //alert("Testing");
    });
    </script> --}}
    {{-- <script type="text/javascript">
        $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script> --}}


