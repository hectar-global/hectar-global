@extends('layout.frontend.main')


@section('title', 'LensOnNews')
@section('content')


 <!-- wrapper  -->	
 <div id="wrapper">
    <!-- content -->	
    <div class="content">
        <div class="breadcrumbs fw-breadcrumbs top-smpar smpar fl-wrap">
            <div class="container">
                <div class="breadcrumbs-list">
                    <a href="#">Home</a><a href="#">Products</a><span>{{$product->name}}</span>
                </div>
                <div class="show-more-snopt smact"><i class="fal fa-ellipsis-v"></i></div>
                <div class="show-more-snopt-tooltip">
                    <a href="#sec15" class="custom-scroll-link"> <i class="fas fa-comment-alt"></i> Contact Support</a>
                    <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                </div>
               
               
                <div class="like-btn"><i class="fas fa-weight"></i>Mandi Price List</div>
            </div>
        </div>
        <div class="gray-bg small-padding fl-wrap ">
            <div class="container">
                <div class="row">
                    <!--  listing-single content -->
                    <div class="col-md-8">
                        <div class=" fl-wrap">
                            <!--  list-single-header-item-->
                            
                            <div class="list-single-header-item  fl-wrap  " id="sec1">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h1>{{$product->name}} <span class="verified-badge tolt" data-microtip-position="bottom"  data-tooltip="Verified"><i class="fas fa-check"></i></span></h1>
                                        <div class="geodir-category-location fl-wrap">
                                            <a href="#"><i class="fas fa-caret-circle-right"></i>  {{$product->category?$product->category->name:""}}</a> 
                                            <a href="#"><i class="fas fa-typewriter"></i>  {{$all_types?$all_types:""}}</a> 
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="host-avatar-wrap" href="#">
                                        <span>Origin: India</span>
                                        <img src="{{asset('assetfront/images/flag/in.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="list-single-header-footer fl-wrap">
                                    <div class="list-single-header-price" data-propertyprise="50500"><strong>Price starts:</strong><span>$</span>{{$product->price?$product->price:"00.00"}} <small>
                                        per 
                                        <?php

                                    foreach($product->packaging as $results)
                                        {
                                            echo $results->unit.', ';
                                        }

                                    ?>
                                    </small></div>
                                    <div class="list-single-stats">
                                        <ul class="no-list-style" style="text-align: right;">
                                            <li><span class="viewed-counter"><i class="fas fa-alarm-clock"></i>Estimate Date of Delivery: <br>{{$delivryDateTime?$delivryDateTime:""}} </span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
<!--  list-single-opt_header-->
<div class="list-single-opt_header fl-wrap" style="margin-top: 32px;margin-left: 32px;">
<div class="list-single-main-item-title ">
<h3>Hectar Grading & Sorting</h3>
</div>
<ul class="list-single-opt_header_cat">
<li><strong>Explore Varaints:</strong> </li>
@if($product->variant)
@foreach($product->variant as $variant)
    <li><a href="#" class="cat-opt my-gray-bg">{{$variant->name}}</a></li>
@endforeach
@endif
</ul>

</div>
<!--  list-single-opt_header end -->
<!-- section -->
<section class="gray-bg very-small-padding ">

<div class="container" style="display: {{$all_qalities?"block":"none"}};">
<div class="compare-container fl-wrap">
<div class="compare-counter"><span>Quality</span> Available</div>
<div class="compare-header">
    <ul>
        <li>Age</li>
        <li>Average Length</li>
        <li>Color</li>
        <li>Moisture Content</li>
        <li>Loose Seeds</li>
        <li>Price per MT</li>
        <li>Hectar Grade</li>
        <li>&nbsp;</li>
    </ul>
</div>
<div class="compare-slider fl-wrap">
    <!-- slick-slide-item -->
    @foreach($product->quality as $result)
    <div class="slick-slide-item">
        <div class="compare-column">
            <div class="compare-link fl-wrap">
                <div class="compare-link-meia fl-wrap">
                    <div class="bg par-elem "  data-bg="{{asset('uploads/posts/'.$product->image)}}"></div>
                </div>
                <h4><a href="#">{{$result->title}}</a></h4>
            </div>
            <div class="compare-content">
                <ul>
                    <li> < 3 months</li>
                    <li>80mm+</li>
                    <li>Bright Red</li>
                    <li>12-14%</li>
                    <li>2-4%</li>
                    <li>10</li>
                    <li>A</li>
                    <li>cta</li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
    <!-- slick-slide-item end-->
    								
   
</div>
</div>
</div>

{{-- available quality end --}}

<div class="list-single-facts fl-wrap">
<!-- inline-facts -->
<div class="inline-facts-wrap">
<div class="inline-facts">
    <i class="fal fa-certificate"></i>
    <h6>Quality Control</h6>
    <span>test</span>
</div>
</div>
<!-- inline-facts end -->
<!-- inline-facts  -->
<div class="inline-facts-wrap">
<div class="inline-facts">
    <i class="fal fa-allergies"></i>
    <h6>Grading & Sorting</h6>
    <span>test</span>
</div>
</div>
<!-- inline-facts end -->
<!-- inline-facts -->
<div class="inline-facts-wrap">
<div class="inline-facts">
    <i class="fal fa-backpack"></i>
    <h6>Packaging Options</h6>
    <span>test</span>
</div>
</div>
<!-- inline-facts end -->
<!-- inline-facts -->
<div class="inline-facts-wrap">
<div class="inline-facts">
    <i class="fal fa-ship"></i>
    <h6>Freight Tracking</h6>
    <span>test</span>
</div>
</div>
<!-- inline-facts end -->                                                                        
</div>
</section>

<!-- section end-->
                            
                            <div class="list-single-main-container fl-wrap">
                                <!--   list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec3">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>Available Variants</h3>
                                    </div>
                                    <!--   rooms-container -->
                                    <div class="rooms-container fl-wrap">
                                        <!--  rooms-item -->
                                      <?php
                                        if(!empty($product->variant)){

                                            foreach($product->variant as $variant_result)
                                            {

                                            
                                        
                                      ?>
                                        <div class="rooms-item fl-wrap">
                                            <div class="rooms-media">
                                                <img src="{{asset('assetfront/images/products/01.jpg')}}" alt="">
                                                <div class="dynamic-gal more-photos-button color-bg" data-dynamicPath="{{$variant_images}}"><i class="fas fa-camera"></i> <span>{{$variant_image_count}}</span>  </div>
                                            </div>
                                            <div class="rooms-details">
                                                <div class="rooms-details-header fl-wrap">
                                                    <span class="rooms-area">~ {{$product->price?$product->price:"00.00"}}<strong> / mt</strong></span>
                                                    <h3>{{$variant_result->name}}</h3>
                                                    <h5>Type: <span>{{$all_types?$all_types:""}}</span></h5>
                                                    <h5>Quality: <span>{{$all_qalities?$all_qalities:""}}</span></h5>
                                                </div>
                                                <p>{{$variant_result->variant_description}}</p>
                                               
                                            </div>
                                        </div>
                                        <?php
                                                }
                                            }else{
                                        ?>

                                        <div class="rooms-item fl-wrap">
                                            <div class="rooms-media">
                                                <img src="{{asset('assetfront/images/products/01.jpg')}}" alt="">
                                                <div class="dynamic-gal more-photos-button color-bg" data-dynamicPath="[{'src': 'images//products/01.jpg'}, {'src': 'images/products/02.jpg'},{'src': 'images/products/03.jpg'}]"><i class="fas fa-camera"></i> <span>{{$variant_image_count}}</span>  </div>
                                            </div>
                                            <div class="rooms-details">
                                                <div class="rooms-details-header fl-wrap">
                                                    <span class="rooms-area">~ {{$product->price?$product->price:"00.00"}}<strong> / mt</strong></span>
                                                    <h3>Variant name</h3>
                                                    <h5>Type: <span>{{$all_types}}</span></h5>
                                                    <h5>Quality: <span>Medium, Medium-Best, Best, Deluxe</span></h5>
                                                </div>
                                                <p>Variant Description</p>
                                            
                                            </div>
                                        </div>
                                        <!--  rooms-item end -->
                                    <?php } ?>
                                                                                
                                    </div>
                                    <!--   rooms-container end -->
                                </div>
                                <!-- list-single-main-item end -->	
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title">
                                        <h3>About Product</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <p>{{$product->details?$product->details->product_description:""}}</p>
                                        {{-- <a href="#" class="btn float-btn color-bg">read more</a> --}}
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->  
                                
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title">
                                        <h3>Farming & Production</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <p></p>
                                        {{-- <a href="#" class="btn float-btn color-bg">read more</a> --}}
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->  

                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec2">
                                    <div class="list-single-main-item-title">
                                        <h3>Details</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="details-list">
                                            <ul>
                                                <li><span>Property Id:</span>{{$product->id}}</li>

                                                <li><span>Container Size:</span>
                                                    <?php
                                                    if($product->freight)
                                                    {
                                                        foreach($product->freight as $results)
                                                        {
                                                            echo $results->container.',';
                                                        }
                                                    }else {
                                                        echo "";
                                                    }
                                                        
                                                        
                                                    ?>
                                                
                                                </li>
                                                <li><span>Variants:</span>3</li>
                                                <li><span>Type:</span>{{$type_count}}</li>
                                                <li><span>Quality:</span>{{$quality_count}}</li>
                                                <li><span>Category:</span>{{$product->category?$product->category->name:""}}</li>
                                                <li><span>Origin:</span>{{$product->country?$product->country:""}}</li>
                                                <li><span>Price starts:</span>$ {{$product->price?$product->price:"00.00"}}</li>
                                                <li><span>Packaging options:</span>
                                                    <?php
                                                        if($product->packaging){
                                                            $pack_options = count($product->packaging);
                                                        }else {
                                                            $pack_options = "Not available";
                                                        }
                                                    ?>
                                                    {{$pack_options}}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->  
                                                                        
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title">
                                        <h3>Packaging Options</h3>
                                    </div>
                                    <div class="accordion">

                                    <?php
                                        foreach ($product->packaging as $result) {

                                        ?>
                                        <a class="toggle act-accordion" href="#"> {{$result->name}} <strong>{{$result->volume}} {{$result->unit}}</strong> <span></span>  </a>
                                        <div class="accordion-inner visible">
                                            <img src="images/plans/1.jpg" alt="">
                                            <p>{{$result->description}}</p>
                                        </div>
                                    <?php } ?>
                                    </div>
                                     <!--box-widget-->
                        <div class="box-widget fl-wrap small-padding">
                            <div class="box-widget-title fl-wrap">Certification Documents</div>
                            <div class="box-widget-content fl-wrap">
                                <div class="bwc_download-list">
                                    @foreach($product->certificate as $results)
                                        <a href="{{ asset('storage/app/public/uploads/posts/'.$results->documents) }}" download><span><i class="fal fa-file-pdf"></i></span>{{$results->title}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!--box-widget end -->
                                </div>
                                <!-- list-single-main-item end --> 
                                 

                            <div class="list-single-main-media fl-wrap">
                                <div class="list-single-main-item-title " style="margin-top: 32px;margin-left: 32px;">
                                    <h3>Gallery</h3>
                                </div>
                                <div class="single-slider-wrapper carousel-wrap fl-wrap">
                                    <div class="slider-for fl-wrap carousel lightgallery"  >
                                        <!--  slick-slide-item -->
                                        @foreach($product->gallery as $result)
                                        <div class="slick-slide-item">
                                            <div class="box-item">
                                                <a href="#" class="gal-link popup-image"><i class="fal fa-search"  ></i></a>
                                                <img src="{{asset('uploads/gallery/'.$result->name)}}" alt="">
                                            </div>
                                        </div>
                                        @endforeach
                                        <!--  slick-slide-item end -->
                                    </div>
                                    <div class="swiper-button-prev ssw-btn"><i class="fas fa-caret-left"></i></div>
                                    <div class="swiper-button-next ssw-btn"><i class="fas fa-caret-right"></i></div>
                                </div>
                                <div class="single-slider-wrapper fl-wrap">
                                    <div class="slider-nav fl-wrap">
                                    @foreach($product->gallery as $result)
                                        <div class="slick-slide-item"><img src="{{asset('uploads/gallery/'.$result->name)}}" alt=""></div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>                                            
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec4">
                                    <div class="list-single-main-item-title">
                                        <h3>Product Video</h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="video-box fl-wrap">
                                            <img src="{{asset('assetfront/images/all/1.jpg')}}" class="respimg" alt="">
                                            <a class="video-box-btn image-popup color-bg" href="https://vimeo.com/158059890"><i class="fas fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->                                             
                                                                         
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec6">
                                    <div class="list-single-main-item-title">
                                        <h3>Reviews <span>2</span></h3>
                                    </div>
                                    <div class="list-single-main-item_content fl-wrap">
                                        <div class="reviews-comments-wrap fl-wrap">
                                            <div class="review-total">
                                                <span class="review-number blue-bg">4.0</span>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"><span class="re_stars-title">Good</span></div>
                                            </div>
                                            <!-- reviews-comments-item -->  
                                            <div class="reviews-comments-item">
                                                <div class="review-comments-avatar">
                                                    <img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""> 
                                                </div>
                                                <div class="reviews-comments-item-text smpar">
                                                    <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                                                    <div class="show-more-snopt-tooltip bxwt">
                                                        <a href="#"> <i class="fas fa-reply"></i> Reply</a>
                                                        <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                                                    </div>
                                                    <h4><a href="#">Liza Rose</a></h4>
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="3"><span class="re_stars-title">Average</span></div>
                                                    <div class="clearfix"></div>
                                                    <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                                    <div class="reviews-comments-item-date"><span class="reviews-comments-item-date-item"><i class="far fa-calendar-check"></i>12 April 2018</span><a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>  Helpful Review  <span>6</span> </a></div>
                                                </div>
                                            </div>
                                            <!--reviews-comments-item end--> 
                                            <!-- reviews-comments-item -->  
                                            <div class="reviews-comments-item">
                                                <div class="review-comments-avatar">
                                                    <img src="{{asset('assetfront/images/avatar/1.jpg')}}" alt=""> 
                                                </div>
                                                <div class="reviews-comments-item-text smpar">
                                                    <div class="box-widget-menu-btn smact"><i class="far fa-ellipsis-h"></i></div>
                                                    <div class="show-more-snopt-tooltip bxwt">
                                                        <a href="#"> <i class="fas fa-reply"></i> Reply</a>
                                                        <a href="#"> <i class="fas fa-exclamation-triangle"></i> Report </a>
                                                    </div>
                                                    <h4><a href="#">Adam Koncy</a></h4>
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span class="re_stars-title">Excellent</span></div>
                                                    <div class="clearfix"></div>
                                                    <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                                    <div class="reviews-comments-item-date"><span class="reviews-comments-item-date-item"><i class="far fa-calendar-check"></i>03 December 2017</span><a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i>  Helpful Review  <span>2</span> </a></div>
                                                </div>
                                            </div>
                                            <!--reviews-comments-item end-->                                                                  
                                        </div>
                                    </div>
                                </div>
                                <!-- list-single-main-item end -->                                             
                                                                          
                            </div>
                        </div>
                    </div>
                    <!-- listing-single content end-->
                    <!-- sidebar -->
                    <div class="col-md-4">
                        <!--box-widget-->
                        <div class="box-widget fl-wrap hidden-section" >
                            <div class="box-widget-content fl-wrap color-bg box-widget-fixed-init">
                                <div class="color-form reset-action">
                                    <div class="color-form-title fl-wrap">
                                        <h4>Calculate CIF Quote</h4>
                                        <p>only takes 30 secs.</p>
                                    </div>
                                    <form method="post"  action="{{url('/calculate-quote/'.request()->route()->prod_id)}}" name="mortgage-form">
                                        @csrf
                                        <div class="fl-wrap">
                                            <label for="amt">Select Variant </label>   
                                            <select name="variant" data-placeholder="" class="chosen-select on-radius no-search-select" style="margin-bottom:8px;" >
                                            @foreach($product->variant as $variant)
                                                <option value="{{$variant->id}}">{{$variant->name}}</option>
                                            
                                            @endforeach  
                                                
                                            </select>  
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Select Type  </label>
                                            <select name ="type" data-placeholder="" class="chosen-select on-radius no-search-select" >
                                                @foreach($product->type as $type)
                                                    <option value="{{$type->id}}">{{$type->title}}</option>
                                                @endforeach
                                            </select> 
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Select Quality  </label>
                                                <select name="quality" data-placeholder="" class="chosen-select on-radius no-search-select" >
                                                @foreach($product->quality as $quality)
                                                    <option value="{{$quality->id}}">{{$quality->title}}</option>
                                                @endforeach 
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <label>Select Packaging preference: </label>
                                                <div class=" add-list-tags fl-wrap">
                                                    <!-- Checkboxes -->
                                                    <ul class="fl-wrap filter-tags no-list-style ds-tg">
                                                        @foreach($product->packaging as $packaging)
                                                        <li>
                                                            <input id="check-aaa5" type="checkbox" name="packaging" checked="" value="{{$packaging->id}}">
                                                            <label for="check-aaa5" style="margin: -15px 0px; padding-left:10px; padding-right:10px;"> {{$packaging->name}}</label>
                                                        </li>
                                                    @endforeach
                                                        
                                                    </ul>
                                                    <!-- Checkboxes end -->												
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                        
                                        <div class="reset-form reset-btn"> <i class="far fa-sync-alt"></i> Reset Form</div>
                                        <button type="submit" id="sbt" class="color2-bg">Calculate CIF Quote</button>
                                        <div class="monterage-title fl-wrap">
                                            <h5>Price Mandi:</h5>
                                            <input type="text" id="pmt" name="mPmt" value="0"> 
                                            <div class="monterage-title-item">$<span></span></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--box-widget end -->  
                                                    
                    </div>
                    <!--  sidebar end-->                            
                </div>
                <div class="fl-wrap limit-box"></div>
                
            </div>
        </div>
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



