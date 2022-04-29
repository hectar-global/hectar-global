@extends('layout.frontend.main')


@section('title', 'LensOnNews')
@section('content')


 <!-- wrapper  -->	
 <div id="wrapper" style="padding-top:0px">
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
               
               
                <div class="like-btn"><i class="fas fa-weight"></i>Not Sure? Request Callback!!</div>
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
                                <div class="col-md-3"><a href="#gallery">
                                    <img src="{{asset('uploads/posts/'.$product->image)}}" alt="" style="width: 100%;
    border-radius: 4px;    box-shadow: 0 5px 5px rgb(0 0 0 / 5%);
    border: 1px solid #eee;padding:12px">    </a>
                                </div>
                                    <div class="col-md-6" style="margin-top:30px">
                                        <h1>{{$product->name}} <span class="verified-badge tolt" data-microtip-position="bottom"  data-tooltip="Verified"><i class="fas fa-check"></i></span></h1>
                                        <div class="geodir-category-location fl-wrap">
                                            <a href="#"><i class="fas fa-caret-circle-right"></i>  {{$product->category?$product->category->name:""}}</a> 
                                            <a href="#"><i class="fas fa-typewriter"></i>  {{$all_types?$all_types:""}}</a> 
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <a class="host-avatar-wrap" href="#">
                                        <span>Origin: India</span>
                                        <img src="{{asset('assetfront/images/flag/in.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="list-single-header-footer fl-wrap" style="color: #212121;
    font-weight: 700;">
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
<div class="list-single-opt_header fl-wrap" style="margin-top: 20px;margin-left: 0px;">






</div>
<!--  list-single-opt_header end -->
<!-- section -->
<section class="gray-bg very-small-padding ">

                 

                        <div class="container" style="background:#fff;width:100%;padding: 20px; border:1px solid #f2f2f2;box-shadow:0px 0px 24px rgb(0 0 0 / 6%);    height: 540px;overflow-y: scroll;border-radius:4px;">
                      
                        <div><img src="/assetfront/home-images/hectar-quality.png" class="respimg" alt="" style="width: 80px;margin-right:20px;float:left"/></div>
<div class="list-single-main-item-title " style="">
<h3>Hectar Quality Guarantee</h3>
<p style="margin-top:10px">Select variant to learn more:</p>

<div class="containera">
	<div class="tabsa">
    @if($product->variant)
@foreach($product->variant as $variant)
<input type="radio" id="{{$variant->name}}" name="tabsa" />
		<label class="taba" for="{{$variant->name}}">{{$variant->name}}</label>
    @endforeach
@endif
		
		<span class="glidera"></span>
	</div>
</div>
</div>
                        

                      <div>
                        

                        <div class="compare-table-container hth-table-wrapper" >
        <div class="white-overlay">
            <a data-role="scroll-to-next" href="#"></a>
        </div>
        <div class="hth-table-holder" data-role="scroll-hold">
            <div class="scroll-hold">
                <table class="compare-black-table compare-us-table hth-table">
                    <tbody class="t-body">
                        <tr>
                            <td class="labels_col" style="width:320px"><b>Quality</b></td>
                            <td class="large-text"><b>Deluxe</b></td>
                            <td class="large-text"><b>Best</b></td>
                            <td class="large-text"><b>Medium Best</b></td>
                            <td class="large-text"><b>Medium</b></td>
                            
                        </tr>
                        <tr>
                            <td class="labels_col">
                                <div class="tooltip_hold">
                                    Status
                                    <div class="tooltip">
                                        <p>In Stock</p>
                                    </div>
                                </div>
                            </td>
                            <td class="large-text"><span class="yes"></span></td>
                            <td class="large-text"><span class="yes"></span></td>
                            <td class="large-text"><span class="yes"></span></td>
                            <td class="large-text"><span class="yes"></span></td>
                        </tr>
                        <tr>
                            <td class="labels_col">
                                <div class="tooltip_hold">
                                Age
                                    <div class="tooltip">
                                        <p>Storage is based on the latest SSD and set up in a redundant RAID 10 configuration. With this set up you will never have to worry about failed hard drives and data loss</p>
                                    </div>
                                </div>
                            </td>
                            <td class="w500"><span> &gt;=3 months</span></td>
                            <td class="w500"><span>0-6 months</span></td>
                            <td class="w500" ><span>0-12 months</span></td>
                            <td class="w500" ><span>0-18 months</span></td>
                        </tr>
                        <tr>
                            <td class="labels_col">
                                <div class="tooltip_hold">
                                    Average length
                                    <div class="tooltip">
                                        <p>Storage is based on the latest SSD and set up in a redundant RAID 10 configuration. With this set up you will never have to worry about failed hard drives and data loss</p>
                                    </div>
                                </div>
                            </td>
                            <td class="w500" ><span> 60-80 mm</span></td>
                            <td class="w500" ><span></span>80-100 mm</td>
                            <td class="w500" ><span>100-120 mm</span></td>
                            <td class="w500" ><span>120-140 mm</span></td>
                        </tr>
                        <tr>
                            <td class="labels_col">
                                <div class="tooltip_hold">
                                Loose Seed
                                    <div class="tooltip">
                                        <p>Storage is based on the latest SSD and set up in a redundant RAID 10 configuration. With this set up you will never have to worry about failed hard drives and data loss</p>
                                    </div>
                                </div>
                            </td>
                            <td class="w500"  ><span> 10%</span></td>
                            <td class="w500" ><span></span>8%</td>
                            <td class="w500" ><span>6%</span></td>
                            <td class="w500" ><span>5%</span></td>
                        </tr>
                        <tr>
                            <td class="labels_col">
                                <div class="tooltip_hold">
                                Color
Consistency
                                    <div class="tooltip">
                                        <p>Storage is based on the latest SSD and set up in a redundant RAID 10 configuration. With this set up you will never have to worry about failed hard drives and data loss</p>
                                    </div>
                                </div>
                            </td>
                            <td class="w500" ><span>Bright Red</span></td>
                            <td class="w500" ><span></span>red</td>
                            <td class="w500" ><span>orange</span></td>
                            <td class="w500" ><span>yellow</span></td>
                        </tr>
                        <tr>
                            <td class="labels_col" c><b>Hectar Grade</b></td>
                            <td class="large-text" style="border-right:none"><img src="/assetfront/home-images/a.png" style="height:100px"/> </td>
                            <td class="large-text" style="border-right:none"><img src="/assetfront/home-images/b.png" style="height:100px"/></td>
                            <td class="large-text" style="border-right:none"><img src="/assetfront/home-images/c.png" style="height:100px"/></td>
                            <td class="large-text" style="border-right:none"><img src="/assetfront/home-images/d.png" style="height:100px"/></td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

                        </div>

                    </div>

<div class="list-single-facts fl-wrap">
<!-- inline-facts -->
<div class="inline-facts-wrap" >
<div class="inline-facts" STYLE="padding: 0 10PX;">
    <i class="fal fa-certificate"></i>
    <h6>Quality Control</h6>
    <span>Quality control involves testing units and determining if they are within the specifications for the final product.</span>
</div>
</div>
<!-- inline-facts end -->
<!-- inline-facts  -->
<div class="inline-facts-wrap" >
<div class="inline-facts" STYLE="padding: 0 10PX;">
    <i class="fal fa-allergies"></i>
    <h6>Grading & Sorting</h6>
    <span>Sorting is a separation based on a individual physical properties of raw materials such as weight, size, shape, density, photometric property, etc.</span>
</div>
</div>
<!-- inline-facts end -->
<!-- inline-facts -->
<div class="inline-facts-wrap">
<div class="inline-facts" STYLE="padding:0 10PX;">
    <i class="fal fa-backpack"></i>
    <h6>Packaging Options</h6>
    <span>Packaging is the science, art and technology of enclosing or protecting products for distribution, storage, sale, and use.</span>
</div>
</div>
<!-- inline-facts end -->
<!-- inline-facts -->
<div class="inline-facts-wrap" >
<div class="inline-facts" STYLE="padding: 0 10PX;">
    <i class="fal fa-ship"></i>
    <h6>Freight Tracking</h6>
    <span> We use api and 3rd party integration to automatically identify and track the location of your shipment in real time</span>
</div>
</div>
<!-- inline-facts end -->                                                                        
</div>
</section>

<!-- section end-->
                            
                            <div class="list-single-main-container fl-wrap">
                                <!--   list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="sec3">
                                <div><img src="/assetfront/home-images/hectar-variant.png" class="respimg" alt="" style="width: 80px;margin-right:20px;float:left"/></div>
<div class="list-single-main-item-title " style="">
<h3>Variant options available</h3>
<p style="margin-top:10px">We ensure absolute certainty on the quality of your purchase by defining objective rules for Quality and grading of all our products.</p>

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
                                
                                                                        
                                <!-- list-single-main-item -->
                                <div class="list-single-main-item fl-wrap">
                                    <div class="list-single-main-item-title">
                                    <div><img src="/assetfront/home-images/hectar-packaging.png" class="respimg" alt="" style="width: 80px;margin-right:20px;float:left"/></div>
<div class="list-single-main-item-title " style="">
<h3>Packaging options available</h3>
<p style="margin-top:10px">Packaging is the science, art and technology of enclosing or protecting products for distribution, storage, sale, and use. We make sure to deliver in the best packaging available</p>

</div>
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
                            <div class="box-widget-title fl-wrap">
                            <div><img src="/assetfront/home-images/hectar-certified.png" class="respimg" alt="" style="width: 80px;margin-right:20px;float:left"/></div>
<div class="list-single-main-item-title " style="">
<h3>Hectar Certification</h3>
<p style="margin-top:10px">Packaging is the science, art and technology of enclosing or protecting products for distribution, storage, sale, and use. We make sure to deliver in the best packaging available</p>

</div>
                            </div>
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
                                 

                            <div class="list-single-main-media fl-wrap" id="gallery">
                                <div class="list-single-main-item-title " style="margin-top: 32px;margin-left: 32px;">
                                <div><img src="/assetfront/home-images/hectar-gallery.png" class="respimg" alt="" style="width: 80px;margin-right:20px;float:left"/></div>
<div class="list-single-main-item-title " style="">
<h3>Hectar Gallery</h3>
<p style="margin-top:10px">Explore product images</p>

</div>
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
                            </div>
                            
                        </div>
                    </div>
                    <!-- listing-single content end-->
                     
                    <!-- sidebar -->
                    <div class="col-md-4">
                        <!--box-widget-->
                        <div class="box-widget fl-wrap hidden-section" >
                            <div class="box-widget-content fl-wrap box-widget-fixed-init" >
                                <div class="reset-action">
                                    <div class="color-form-title fl-wrap">
                                        <h4>Calculate CIF Quote</h4>
                                        <p>only takes 30 secs.</p>
                                    </div>

	


                                    <!-- form action - {{url('/calculate-quote/'.request()->route()->prod_id)}} -->
                                    <form method=""  action="/completequote" name="mortgage-form">
                                        @csrf
                                        <div class="fl-wrap">
                                        <div class="section over-hide z-bigger">
		<input class="checkbox" type="checkbox" name="general" id="general">
		<div class=" over-hide z-bigger">
			<div class="pb-5">
				<div class=" justify-content-center pb-5" style="text-align:left;">
					<div class="pb-5">
                    <label class="select-label cif-label">Variant name :</label>
                    @foreach($product->variant as $variant)
						<input class="checkbox-tools" type="radio" name="variant" id="variant-{{$variant->id}}" >
						<label class="for-checkbox-tools" for="variant-{{$variant->id}}">
                        {{$variant->name}}
						</label>
                        @endforeach 
					</div>              </div>

                    <div class="pb-5" style="text-align:left;">
                    <label class="select-label cif-label">Product type :</label>
                    @foreach($product->type as $type)
						<input class="checkbox-tools" type="radio" name="type" id="type-{{$type->id}}" >
						<label class="for-checkbox-tools" for="type-{{$type->id}}">
                        {{$type->title}}
						</label>
                        @endforeach 
					</div> 
                    <div class="pb-5" style="text-align:left;">
                    <label class="select-label cif-label">Quality :</label>
                    @foreach($product->quality as $quality)
						<input class="checkbox-tools" type="radio" name="quality" id="{{$quality->id}}" >
						<label class="for-checkbox-tools" for="{{$quality->id}}">
                        {{$quality->title}}
						</label>
                        @endforeach 
					</div> 
                    <div class="pb-5" style="text-align:left;">
                    <label class="select-label cif-label">Packaging :</label>
                    @foreach($product->packaging as $packaging)
						<input class="checkbox-tools" type="radio" name="packaging" id="packaging-{{$packaging->id}}" >
						<label class="for-checkbox-tools" for="packaging-{{$packaging->id}}">
                        {{$packaging->name}}
						</label>
                        @endforeach 
					</div> 
                
                
                
                
                </div>
                                        <div class="clearfix"></div>
                                        
                                        <button type="submit" id="sbt" class="btn btn1 float-btn small-btn orange-bg"  style="color: #fff;
    font-size: 16px;">Calculate CIF Quote</button>
                                        
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
                                                    </div>
    
@stop



