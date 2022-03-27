@extends('layout.frontend.main')


@section('title', 'Hector Customer Login')
@section('content')

              <!-- wrapper  -->	
            <div id="wrapper">
                <!-- content -->	
                <div class="content">
                    <!--  section  -->
                    <section class="hero-section hero-section_dec" data-scrollax-parent="true">
                        <div class="bg-wrap">
                            <div class="bg par-elem "  data-bg="assetfront/images/bg/hero.gif" data-scrollax="properties: { translateY: '30%' }"></div>
                        </div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="hero-title hero-title_small">
                                <h4>Calculate CIF cost in 30 Sec.</h4>
                                <h2>Buy agro commodities online<br>with confidence.
                                </h2>
                            </div>
                            <div class="main-search-input-wrap">
                                <div class="main-search-input fl-wrap">
                                    
                                    
                                    <div class="main-search-input-item">
                                        <select data-placeholder="Select Product"  class="chosen-select" >
                                            <option value="-1">What are you looking for?</option>
                                            <option>GR11 Non-Basmati Rice</option>
                                            <option>Pusa Basmati Rice </option>
                                            <option>Coriander Seeds</option>
                                            <option>Red Onion</option>
                                            <option>Groundnuts</option>
                                            <option>S31 Sugar</option>
                                            
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
                                            <option>20ft Container</option>
                                            <option>40ft Container</option>
                                            <option>40ft Reefer Container</option>
                                        </select>
                                    </div>
                                    <button class="main-search-button orange-bg" onclick="window.location.href='#'">  Get CIF Quote <i class="far fa-search"></i> </button>
                                </div>
                            </div>
                            <div class="hero-notifer fl-wrap">Need more search options? <a href="/products-list">Explore Products</a> </div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/1.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Choose the right product</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> Each product listed is carefully procured by the Hectar team, Maintaining highest level of quality by passing through standard quality grading processes.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->			
                                
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/2.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Pick the correct variant</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/3.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Grading & Sorting</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/3.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Title about packaging</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/4.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Title about freight</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/5.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Some title CIF Quote</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/6.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Calculate CIF Quote</div>
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
                                        <a href="#" class="gallery-filter" data-filter=".cat_1"> <span>Fruits & Vegetables</span></a>
                                        <a href="#" class="gallery-filter" data-filter=".cat_2"> <span>Pulses & Nuts</span></a>
                                        <a href="#" class="gallery-filter" data-filter=".cat_3"> <span>Rice</span></a>
                                        <a href="#" class="gallery-filter" data-filter=".cat_4"> <span>Spices</span></a>
                                        <a href="#" class="gallery-filter" data-filter=".cat_5"> <span>Sugar</span></a>
                                       
                                        
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
                                                    <img src="assetfront/images/home-page/feature-product/sugar.png" alt="">
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="geodir-category-location">
                                                    <a href="#" class="single-map-item tolt" ><i class="fas fa-map-marker-alt"></i> <span>  India</span></a>
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
                                                        
                                                        <li><i class="fal fa-cube"></i><span>Sugar</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                                <h3 class="title-sin_item"><a href="#">Sugar S110</a></h3>
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
                                                    <img src="assetfront/images/home-page/feature-product/vegetables.png" alt="">
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="geodir-category-location">
                                                    <a href="#" class="single-map-item tolt"><i class="fas fa-map-marker-alt"></i> <span>  India</span></a>
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
                                                        
                                                        <li><i class="fal fa-cube"></i><span>Fruits & Vegetables</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                                <h3 class="title-sin_item"><a href="#">Red Onions</a></h3>
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
                                 <div class="gallery-item cat_4">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img fl-wrap">
                                                <a href="#" class="geodir-category-img_item">
                                                    <img src="assetfront/images/home-page/feature-product/rice.png" alt="">
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="geodir-category-location">
                                                    <a href="#" class="single-map-item tolt" ><i class="fas fa-map-marker-alt"></i> <span>  India</span></a>
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
                                                        
                                                        <li><i class="fal fa-cube"></i><span>Rice</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                                <h3 class="title-sin_item"><a href="#">Basmati Rice - Pusa</a></h3>
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
                                                    <img src="assetfront/images/home-page/feature-product/rice.png" alt="">
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="geodir-category-location">
                                                    <a href="#" class="single-map-item tolt" ><i class="fas fa-map-marker-alt"></i> <span>  India</span></a>
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
                                                        
                                                        <li><i class="fal fa-cube"></i><span>Spices</span></li>
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
                                                    <img src="assetfront/images/home-page/feature-product/sugar.png" alt="">
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="geodir-category-location">
                                                    <a href="#" class="single-map-item tolt" ><i class="fas fa-map-marker-alt"></i> <span>  India</span></a>
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
                                                        
                                                        <li><i class="fal fa-cube"></i><span>Pulses & Nuts</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                                <h3 class="title-sin_item"><a href="#">Coriander Seeds</a></h3>
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
                                            <img src="assetfront/images/home-page/stats.png" class="respimg" alt="">
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
                                                <div class="bg"  data-bg="assetfront/images/home-page/feature-product/rice.png"></div>
                                            </div>
                                            <div class="half-carousel-content">
                                                <div class="hc-counter color-bg">02 options</div>
                                                <h3><a href="#">Rice</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--slick-item end -->
                                    <!--slick-item -->
                                    <div class="slick-item">
                                        <div class="half-carousel-item fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg"  data-bg="assetfront/images/home-page/feature-product/spices.png"></div>
                                            </div>
                                            <div class="half-carousel-content">
                                                <div class="hc-counter color-bg">19 options</div>
                                                <h3><a href="#">Spices</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--slick-item end -->									
                                    <!--slick-item -->
                                    <div class="slick-item">
                                        <div class="half-carousel-item fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg"  data-bg="assetfront/images/home-page/feature-product/vegetables.png"></div>
                                            </div>
                                            <div class="half-carousel-content">
                                                <div class="hc-counter color-bg">12 options</div>
                                                <h3><a href="#">Fruits & Vegetables</a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--slick-item end -->
                                    <!--slick-item -->
                                    <div class="slick-item">
                                        <div class="half-carousel-item fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg"  data-bg="assetfront/images/home-page/feature-product/sugar.png"></div>
                                            </div>
                                            <div class="half-carousel-content">
                                                <div class="hc-counter color-bg">02 options</div>
                                                <h3><a href="#">
                                                    Sugar
                                                </a></h3>
                                                <p>Constant care and attention to the patients makes good record</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--slick-item end -->	
                                    <!--slick-item -->
                                    <div class="slick-item">
                                        <div class="half-carousel-item fl-wrap">
                                            <div class="bg-wrap bg-parallax-wrap-gradien">
                                                <div class="bg"  data-bg="assetfront/images/home-page/feature-product/pulses.png"></div>
                                            </div>
                                            <div class="half-carousel-content">
                                                <div class="hc-counter color-bg">02 options</div>
                                                <h3><a href="#">
                                                    Pulses & Nuts
                                                </a></h3>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/1.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Choose the right product</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> Each product listed is carefully procured by the Hectar team, Maintaining highest level of quality by passing through standard quality grading processes.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->			
                                
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/2.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Pick the correct variant</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/3.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Grading & Sorting</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/3.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Title about packaging</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/4.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Title about freight</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/5.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Some title CIF Quote</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/6.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Calculate CIF Quote</div>
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
                                        <h6>Orders Delivered</h6>
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
                                        <h6>Revenue Numbers</h6>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/1.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Choose the right product</div>
                                        </div>
                                        <div class="text-carousel-content fl-wrap">
                                            <p> Each product listed is carefully procured by the Hectar team, Maintaining highest level of quality by passing through standard quality grading processes.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--slick-item end -->			
                                
                                <!--slick-item -->
                                <div class="slick-item">
                                    <div class="text-carousel-item fl-wrap">
                                        <div class="text-carousel-item-header fl-wrap">
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/2.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Pick the correct variant</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/3.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Grading & Sorting</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/3.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Title about packaging</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/4.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Title about freight</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/5.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Some title CIF Quote</div>
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
                                            <div class="popup-avatar"><img src="assetfront/images/home-page/feature/6.png" alt=""></div>
                                            <div class="review-owner fl-wrap">Calculate CIF Quote</div>
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        //alert("fsdfsd");
        // $("#cust-modal-open").click();
       // $('#cust-modal-open').trigger('click');
       $('.modal , .reg-overlay').fadeIn(200);  // these are from script.js
        $(".modal_main").addClass("vis_mr");
        $("html, body").addClass("hid-body");
    });
</script>