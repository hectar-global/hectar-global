@extends('layout.frontend.main')


@section('title', 'LensOnNews')
@section('content')


<!-- wrapper  -->	
<div id="wrapper">
    <!-- content -->	
    <div class="content">
       
        
        <!-- col-list-wrap -->
        <section class="gray-bg small-padding ">
            <div class="container">
                <div class="mob-nav-content-btn  color-bg show-list-wrap-search ntm fl-wrap">Show  Filters</div>
                <!-- list-searh-input-wrap-->
                <div class="list-searh-input-wrap box_list-searh-input-wrap lws_mobile fl-wrap">
                    <div class="list-searh-input-wrap-title fl-wrap"><i class="far fa-sliders-h"></i><span>Explore Products</span></div>
                    <div class="custom-form fl-wrap">
                        <div class="row">
                            <!-- listsearch-input-item -->
                            <div class="col-sm-6">
                                <div class="listsearch-input-item  ">
                                    <input type="text"   placeholder="Search product name here" value=""/>
                                </div>
                            </div>
                            <!-- listsearch-input-item -->
                            <!-- listsearch-input-item -->
                            <div class="col-sm-3">
                                <div class="listsearch-input-item">
                                    <select data-placeholder="Status" class="chosen-select on-radius no-search-select" >
                                        <option>Any Category</option>
                                        <option>Fresh Fruits</option>
                                        <option>Fresh Vegetables</option>
                                    </select>
                                </div>
                            </div>
                            <!-- listsearch-input-item -->								
                            <!-- listsearch-input-item -->
                            <div class="col-sm-3">
                                <div class="listsearch-input-item">
                                    <a href="#" class="btn color-bg fw-btn float-btn small-btn">Search</a>										
                                </div>
                            </div>
                            <!-- listsearch-input-item --> 						
                        </div>
                       
                        
                    </div>
                    
                </div>
                <!-- list-searh-input-wrap end-->							
                <!-- listing-item-wrap-->
                <div class="listing-item-container three-columns-grid  box-list_ic fl-wrap">

                     <!-- listing-item -->
                     <?php
                        $gallery_count = 0;
                     ?>
                     @foreach($products as $product)

                     <?php
                        $gallery_count+= count($product->gallery);
                     ?>
                     <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img fl-wrap">
                                <a href="{{url('/product-details/'.$product->id) }}" class="geodir-category-img_item" target="_blank">
                                    <img src="{{asset('uploads/posts/'.$product->image)}}" alt="">
                                    <div class="overlay"></div>
                                </a>
                                <div class="geodir-category-location">
                                    <a href="#" class="single-map-item tolt" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"   data-microtip-position="top-left" data-tooltip="more info"><i class="fas fa-map-marker-alt"></i> <span>  {{$product->country}}</span></a>
                                </div>
                                <ul class="list-single-opt_header_cat">
                                    <li><a href="#" class="cat-opt blue-bg">variant 1</a></li>
                                    <li><a href="#" class="cat-opt color-bg">variant 2</a></li>
                                </ul>
                                
                                <div class="geodir-category-listing_media-list">
                                    <span><i class="fas fa-camera"></i> {{$gallery_count}}</span>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap">
                                <div class="geodir-category-content-details">
                                    <ul>
                                        
                                        <li><i class="fal fa-cube"></i><span>{{$product->category?$product->category->name:""}}</span></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <h3 class="title-sin_item"><a href="listing-single.html">{{$product->name}}</a></h3>
                                <div class="geodir-category-content_price"><small>~</small>$ {{$product->price?$product->price:"00.00"}} 
                                    
                                    per <?php

                                    foreach($product->packaging as $results)
                                        {
                                            echo $results->unit.', ';
                                        }

                                    ?>
                                
                                </div>
                               
                                
                                <div class="geodir-category-footer fl-wrap">
                                    <div class="cf_btn">Get Quote</div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end-->
                    
                    @endforeach
                </div>
                <!-- listing-item-wrap end-->
               
                <!-- pagination-->
                
                {{-- <div class="pagination">
                    <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                    <a href="#" >1</a>
                    <a href="#" class="current-page">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                </div> --}}
                <!-- pagination end-->
                
                   {{$products->links()}}
				
            </div>
            
        </section>
        <div class="limit-box fl-wrap"></div>
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