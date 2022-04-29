@extends('layout.frontend.main')


@section('title', 'LensOnNews')
@section('content')


<!-- wrapper  -->	
<div id="wrapper" style="padding-top:0px">
    <!-- content -->	
    <div class="content">
       
        
        <!-- col-list-wrap -->
        <section class="gray-bg small-padding ">
            <div class="container">
                <div class="mob-nav-content-btn  color-bg show-list-wrap-search ntm fl-wrap">Show  Filters</div>
                <!-- list-searh-input-wrap-->
                <div class="list-searh-input-wrap box_list-searh-input-wrap lws_mobile fl-wrap">
                    <div class="list-searh-input-wrap-title fl-wrap"><i class="far fa-sliders-h"></i><span>Hectar Procurement Guarantee!! Explore product</span></div>
                    <div class="custom-form fl-wrap">
                        <div class="row">
                            <!-- listsearch-input-item -->
                            <div class="col-sm-6 ">
                                <div class="listsearch-input-item  ">
                                    <input type="text"   placeholder="Enter product name here" value=""/>
                                </div>
                            </div>
                            <!-- listsearch-input-item -->
                            <!-- listsearch-input-item -->
                            
                            <!-- listsearch-input-item -->								
                            <!-- listsearch-input-item -->
                            <div class="col-sm-3">
                                <div class="listsearch-input-item">
                                    <a href="#" class="btn color-bg fw-btn float-btn small-btn">Search Product</a>										
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
<!-- grid-item-holder-->	
<div class="grid-item-holder gallery-items gisp fl-wrap">
<?php
   $gallery_count = 0;
?>
@foreach($products as $product)

<?php
   $gallery_count+= count($product->gallery);
?>
    <!-- gallery-item-->
    <div class="gallery-item cat_4">
        <!-- listing-item -->
        <div class="listing-item">
            <article class="geodir-category-listing fl-wrap">
                <div class="geodir-category-img fl-wrap">
                    <a href="{{url('/product-details/'.$product->id) }}" class="geodir-category-img_item">
                        <img src="{{asset('uploads/posts/'.$product->image)}}" alt="">
                        <div class="overlay"></div>
                    </a>
                    <div class="geodir-category-location" >

                    <span style="color: #fff;
    font-size: 14px;
    font-weight: 400;"><img src="/assetfront/images/flag/in.png" style="width:32px"/>  {{$product->country}}</span>
                    </div>
                    
                    
                    <div class="geodir-category-listing_media-list">
                        <span><i class="fas fa-camera"></i> {{$gallery_count}}</span>
                    </div>
                </div>
                <div class="geodir-category-content fl-wrap">
                    <div class="geodir-category-content-details">
                        <ul style="margin-top:10px;">
                            
                            <li><i class="fal fa-seedling"></i><span>{{$product->category?$product->category->name:""}}</span></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>

                    <div class="geodir-category-content_price" style="font-size: 200%;
    margin-top: 5px;
    padding-top: 0px">{{$product->name}}</div>
                                                <div class="clearfix"></div>
                                                <ul class="list-single-opt_header_cat">
                                                    <li><a href="#" class="cat-opt color-bg" style="float:left">variant_name()</a></li>
                                                </ul>
                                                
                                                <div class="geodir-category-content_price" style="float:right;font-size: 14px;
    font-weight: 600;
    font-family: arvo;
    margin-top: 5px;"><small>~</small>{{$product->price?$product->price:"price on request"}}
                    <?php

foreach($product->packaging as $results)
    {
        echo $results->unit.'. ';
    }

?></div><div class="clearfix"></div>






                    
                <div class=
                                                "exp-delivery">Expected delivery by Mon, 04/04 </div>
                    
                   
                   
                    
                    <div class="geodir-category-footer fl-wrap">
                        <div class="btn small-btn orange-bg"><a href="{{url('/product-details/'.$product->id) }}" style="color: #fff;
    font-size: 16px;
    font-weight: 600;">View More</a></div>
                    </div>
                </div>
            </article>
        </div>
        <!-- listing-item end-->															
    </div>
    <!-- gallery-item end--> 														
    

@endforeach

</div>
<!-- grid-item-holder-->
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


@stop