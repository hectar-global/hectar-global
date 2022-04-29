@extends('layout.frontend.main')


@section('title', 'hectarhome')
@section('content')

              <!-- wrapper  -->	
            <div id="wrapper" style="padding-top:0px;margin-top:-70px;">
                <!-- content -->	
                <div class="content">
                    <!--  section  -->
                    <section class="hero-section hidden-section" style="padding:0">
                        <div class="media-container bg-parallax-wrap-gradien">
                            <div class="video-container" style="width: 1903px; height: 1070.44px;">
                                <video autoplay="" loop="" muted="" class="bgvid">
                                    <source src="/assetfront/home-images/2.mp4" type="video/mp4">  
                                </video>
                            </div>
                            <!--
                                Vimeo code
                                
                                 <div  class="background-vimeo" data-vim="97871257"> </div> -->
                            <!--
                                Youtube code
                                
                                 <div  class="background-youtube-wrapper" data-vid="Hg5iNVSp2z8" data-mv="1"> </div> -->
                        </div>
                        <div class="container" style="padding-top: 160px;
    padding-bottom: 80px">
                            <div class="hero-title hero-title_center">
                                <h4>A single platform for everything from procurement to deliver</h4>
                                <h2>Buy <span class="underline--magical">agro commodities</span> online <br>
                        with <span class="underline--magical">confidence</span>.
                                </h2>
                            </div>

                            <div style="width: 50%;
    margin: 0 auto;margin-top:20px">
    <form name="cif_quote" method="post" action="/completequote">
        @csrf
        <div  style="width: 50%;
    float:left">
        <div class="autoComplete_wrapper">
            {{-- <input id="product" type="search" dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off" style="border-right: 1px solid #d3d3d3 !important;"> --}}
            <select name="prod_name" class="cs-select cs-skin-elastic" id="country">
                <option value="" disabled selected>Select Product</option>
                @foreach($products as $product)
                    <option data-class="20ft" value="{{ $product->id}}" >{{ $product->name}}</option>
                @endforeach     
            </select>
        </div>    


</div>
        <div style="width: 50%;
    float:left"><select name="loadability" class="cs-select cs-skin-elastic" id="loadability">
					<option value="" disabled selected>Select Loadability</option>
                    @foreach($products as $product)
                        @foreach($product->freight as $freight)
					        <option value="{{ $freight->id}}" data-class="20ft">{{ $freight->container}}</option>
                        @endforeach
                    @endforeach
				</select></div>
        <div style="width: 50%;
    float:left"><div class="autoComplete_wrapper">
        {{-- <input id="location" type="search" dir="ltr" spellcheck=false autocorrect="off" autocomplete="off" autocapitalize="off" style="border-radius:0px 0px 0px 4px  !important;border-top: 1px solid #d3d3d3 !important;"> --}}
        <select name="country" class="cs-select cs-skin-elastic" id="country">
            <option value="" disabled selected>Select Country</option>
           
                @foreach($countries as $country)
                   
                        <option value="{{ $country->id}}" data-class="20ft">{{ $country->name}}</option>
                    
                @endforeach
        
            
        </select>
    </div> </div>
        <button style="width: 50%;
    float:left;
    font-size: 20px;
    font-weight: 500;
    background-color: #FE5B3D;
    padding: 13px 0px;
    color: #fff;border-radius:0px 0px 4px 0px;cursor:pointer;" type="submit"><span id="cif_quote">Get CIF Quote</span></button>
    </form>    

</div>
                            <div class="hero-notifer hn_center fl-wrap">Pick from 100+ different products and variants options<a href="/products-list">View all products</a></div>
                            <div class="scroll-down-wrap sdw_center">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                            </div>
                        </div>
                    </section>

                     <!-- section -->
                     <section class=" small-padding" style="padding-top: 60px !important;">
                    <div class="container">
                        <div class="row">
                            <!-- services-item -->
                            <div class="col-md-3">
                                <div class="services-item fl-wrap blue-color">
                                    <span><img src="/assetfront/images/home-page/home-1.png" style="width:85%"/></span>
                                    <h4>Pick your product  100+ options<span>01</span></h4>
                                    <p>We ensure absolute certainty on the quality of your purchase by defining objective rules for Quality and grading of all our products.</p>
                                </div>
                            </div>
                            <!-- services-item  end-->
                            <!-- services-item -->
                            <div class="col-md-3">
                                <div class="services-item fl-wrap">
                                <span><img src="/assetfront/images/home-page/home-2.png" style="width:85%"/></span>
                                    <h4>Get Instant <br>Prices
                                        <span>02</span></h4>
                                    <p>Let us know your quantity requirements, packaging preferences and your end destination. We will generate your quote within seconds.
                                    </p>
                                </div>
                            </div>
                            <!-- services-item  end-->
                            <!-- services-item -->
                            <div class="col-md-3">
                                <div class="services-item fl-wrap">
                                <span><img src="/assetfront/images/home-page/home-3.png" style="width:85%"/></span>
                                    <h4>Access all Documents from Dashboard<span>03</span></h4>
                                    <p>We are making the Export documentation clutter free - Access photos/videos from loading, inspection certificates, shipment documents from a single dashboard.</p>
                                </div>
                            </div>
                            <!-- services-item  end-->
                            <!-- services-item -->
                            <div class="col-md-3">
                                <div class="services-item fl-wrap">
                                <span><img src="/assetfront/images/home-page/home-4.png" style="width:85%"/></span>
                                    <h4>Real time Freight Tracking
                                        <span>04</span></h4>
                                    <p>We provide live tracking of ongoing orders, giving you immediate notifications when a shipment passes a milestone.</p>
                                </div>
                            </div>
                            <!-- services-item  end-->
                        </div>
                    </div>
                </section>
                    <!-- section end-->
                    
                    <!-- section -->
                    <section class="gray-bg">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    

                                    <div class="about-title ab-hero fl-wrap">
                                        <div class="section-title fl-wrap line">
                                        <h4 style="color:#474747">Buy agro commodities online with confidence. </h4>
                                        <h2>Trending products this week</h2>
                                    </div>
                                            
                                        </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="listing-filters gallery-filters">
                                        <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*"> <span>All Categories</span></a>
                                        <a href="#" class="gallery-filter" data-filter=".cat_1"> <span>Spices & Pulses</span></a>
                                        <a href="#" class="gallery-filter" data-filter=".cat_2"> <span>Non Basmati Rice</span></a>
                                        <a href="#" class="gallery-filter" data-filter=".cat_3"> <span>Others</span></a>
                                        
                                       
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <!-- grid-item-holder-->	
                            <div class="grid-item-holder gallery-items gisp fl-wrap">
                                <!-- gallery-item-->
                                <div class="gallery-item cat_3">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img fl-wrap">
                                                <a href="#" class="geodir-category-img_item">
                                                    <img src="assetfront/home-images/sugar.png" alt="">
                                                    <div class="overlay"></div>
                                                </a>
                                                <div class="geodir-category-location">
                                                    <a href="#" class="single-map-item" ><span><img src="/assetfront/images/flag/in.png" style="width:32px"/></span> <span>  India</span></a>
                                                </div>
                                                
                                                
                                                <div class="geodir-category-listing_media-list">
                                                    <span><i class="fas fa-camera"></i> 8</span>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <div class="geodir-category-content-details">
                                                    <ul>
                                                        
                                                        <li><i class="fal fa-seedling"></i><span>Sugar</span></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="geodir-category-content_price" style="font-size: 200%;
    margin-top: 5px;
    padding-top: 0px">Sugar S110</div>
                                                <div class="clearfix"></div>
                                                <ul class="list-single-opt_header_cat">
                                                    <li><a href="#" class="cat-opt color-bg" style="float:left">S110</a></li>
                                                </ul>
                                                
                                                <div class="geodir-category-content_price" style="float:right;font-size: 14px;
    font-weight: 600;
    font-family: arvo;
    margin-top: 5px;"><small>~</small>$ 6,000.00 per MT</div>
                                                <div class="clearfix"></div>
                                                <div class=
                                                "exp-delivery">Expected delivery by Mon, 04/04 </div>
                                               
                                               
                                                
                                                <div class="geodir-category-footer fl-wrap">
                                                    <div class="btn small-btn color-bg">Get Quote</div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->															
                                </div>
                                <!-- gallery-item end--> 														
                                
                            </div>
                            <!-- grid-item-holder-->	
                            <div style="float:right"><a href="/products-list" class="btn float-btn small-btn orange-bg" style="font-size: 16px;
    padding: 16px 34px;">Explore All Products &rarr;</a></div>
                        </div>
                    </section>
                    <!-- section end-->	
                    <!-- section -->
                    <section style="padding-bottom:0px">
                        <div class="container">
                            <!--about-wrap -->
                            <div class="about-wrap">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="about-title ab-hero fl-wrap">
                                        <div class="section-title fl-wrap line">
                                        <h4 style="color:#474747">By Providing unprecedented efficiency in procurement</h4>
                                        <h2>Empowering the Global Food Value Chain</h2>
                                    </div>
                                            
                                        </div>
                                        <div class="services-opions fl-wrap">
                                            <ul>
                                                <li>
                                                <i class="fas fa-seedling"></i>
                                                    <h4>Manufacturers & Food Processors</h4>
                                                    <p>Hectar offers the quickest solution available to discover everyday prices and shortest transit for Agri Commodities purchases. This allows our customers to forecast orders easily and never again be bottlenecked by input materials. 
</p>
                                                </li>
                                                <li>
                                                <i class="fas fa-store"></i>
                                                    <h4>Retail Chains</h4>
                                                    <p>We provide our customers with the ability to customize packaging at source, creating deep value and cost cutting. And with an integrated fulfilment process, we provide full traceability of the products and its freshness. 
</p>
                                                </li>
                                                <li>
                                                <i class="fas fa-briefcase"></i>
                                                    <h4>Wholesalers & Govt Tenders</h4>
                                                    <p>Our systems enable our customers to manage a large order book within a matter of seconds by allowing a birds eye view of every order that is on the pipeline. </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-6">
                                        <div class="about-img fl-wrap">
                                            <img src="assetfront/home-images/homepage.gif" style="filter: hue-rotate(52deg);" class="respimg" alt="">
                                            <div class="about-img-hotifer color-bg">
                                                <p>Let's rethink global food supply chain</p>
                                                <h4>100% Genuine Products</h4>
                                                <h5>Best Quote Guarantee</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- about-wrap end  -->							
                        </div>


 
                            
                            
                        <div class="container" style="margin-top:120px">

                        
                        <img src="assetfront/home-images/certified.png" class="respimg" alt="" style="    position: absolute;
    width: 180px;
    top: -60%;
    right: 0%;">
                        <div class="about-title ab-hero fl-wrap">
                                        <div class="section-title fl-wrap line" style="margin-bottom:10px;">
                                        <h4 style="color:#474747">Check Quality/Grading parameters and compare to find the best product variant to match your need.</h4>
                                        <h2>Why Choose Hectar?</h2>
                                        <p style="width:66%">We uses the machine learning systems and realtime inputs from our ground staff to make the quality of your produce better and the process faster. So, you make profit-maximizing decisions. Every day. For every commodity.</p>
                                    </div>
                                            
                                        </div>

</div>
         

<div class="container" style="padding:0px;    margin-top: 20px;">
                        <div class="about-title ab-hero fl-wrap" style="width:40%">
                                        <div class="section-title fl-wrap" style="margin-bottom:10px;padding-top:80px">
                                        <div><p class="ribbon">
  <span class="text"><strong class="bold">Hectar Product Guarantee</strong></span>
</p></div>
                                        
                                    <h2 style="font-size: 24px;
    font-weight: 600;
    color: #212121;
    font-family: jost;">Know your product</h2>
                                    <p style="width:80%;
    font-size: 16px;
    line-height: 28px;
    margin-top: 20px;">We uses the machine learning systems and realtime inputs from our ground staff to make the quality of your produce better and the process faster. So, you make profit-maximizing decisions. Every day. For every commodity.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                          
                                          <div class="clearfix"></div>
                                        </div>
                        
                        

                      <div style="width:60%;padding:20px;float:left">
                      <div class="sample-p">
                                              <span><img src="/assetfront/home-images/chickpeas.png" style="width: 100px;float: left;margin-right: 20px;border-radius: 4px;"></span><div style="font-size: 16px;line-height: 28px;text-align:left;font-weight:700">Chickpeas L 550</div><p>Mature around 136-140 days after transplanting. These chickpeas have bold seeds and are salmon white in color.</p>
                                          </div>  
                        <div class="clearfix"></div>


                        <div class="card">
		<div class="card--image">
			<img src="assetfront/home-images/11.png" alt="image">
		</div>
		<div class="card--info info--1">
			<span class="info--text">Seed Weight<br>40-50gms</span>
			<div class="icon">
<i class="fa fa-info" style="color: #fff;"></i>

        </div>
			<div class="info--image">
				<img src="assetfront/home-images/11.png" alt="info image">
			</div>
		</div>
		<div class="card--info info--2">
			<span class="info--text">Released<br>2022</span>
			<div class="icon">
<i class="fa fa-info" style="color: #fff;"></i>

        </div>
			<div class="info--image">
				<img src="assetfront/home-images/11.png" alt="info image">
			</div>
		</div>
	</div>
</div>
<hr style="opacity:.2;margin:40px 0px">
</div>

<div class="clearfix"></div>

                        <div class="container" style="padding:0px;    margin-top: 40px;">
                        <div class="about-title ab-hero fl-wrap" style="width:40%">
                                        <div class="section-title fl-wrap" style="margin-bottom:10px;padding-top:120px">
                                        <div><p class="ribbon">
  <span class="text"><strong class="bold">Hectar Compare</strong></span>
</p></div>
                                    
<h2 style="font-size: 24px;
    font-weight: 600;
    color: #212121;
    font-family: jost;">Hectar Grading & Quality</h2>
                                    <p style="width:80%;
    font-size: 16px;
    line-height: 28px;
    margin-top: 20px;">We uses the machine learning systems and realtime inputs from our ground staff to make the quality of your produce better and the process faster. So, you make profit-maximizing decisions. Every day. For every commodity.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    
                                        </div>
                        
                        

                      <div style="width:60%;overflow-x:Scroll;padding:20px">
                        <div class="clearfix"></div>
                        <div class="sample-p">
                                              <span><img src="/assetfront/home-images/dry-chilli.png" style="width: 100px;float: left;margin-right: 20px;border-radius: 4px;"></span><div style="font-size: 16px;line-height: 28px;text-align:left;font-weight:700">Dry Chilli - Sannam</div><p>Mature around 136-140 days after transplanting. These chickpeas have bold seeds and are salmon white in color.</p>
                                          </div>
                                          <div class="clearfix"></div>

                        <div class="compare-table-container hth-table-wrapper" style="box-shadow:0px 0px 24px rgb(0 0 0 / 6%);" >
        <div class="white-overlay">
            <a data-role="scroll-to-next" href="#"></a>
        </div>
        <div class="hth-table-holder" data-role="scroll-hold">
            <div class="scroll-hold" style="padding: 0px 20px;">
                <table class="compare-black-table compare-us-table hth-table">
                    <tbody class="t-body">
                        <tr>
                            <td class="labels_col" style="width:320px"><b>Quality</b></td>
                            <td class="large-text"><b>Deluxe</b></td>
                            <td class="large-text"><b>Best</b></td>
                            <td class="large-text"><b>Medium</b></td>
                            
                        </tr>
                        <tr>
                            <td class="labels_col" style="width:320px"><b>Hectar Grade</b></td>
                            <td class="large-text" style="border-right:none"><img src="/assetfront/home-images/a.png" style="height:70px"/> </td>
                            <td class="large-text" style="border-right:none"><img src="/assetfront/home-images/b.png" style="height:70px"/></td>
                            <td class="large-text" style="border-right:none"><img src="/assetfront/home-images/c.png" style="height:70px"/></td>
                            
                        </tr>
                        <tr>
                            <td class="labels_col">
                                <div class="tooltip_hold">
                                Style
                                    <div class="tooltip">
                                        <p>Style used in the process of drying the chillies.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="large-text">Dried</td>
                            <td class="large-text">Dried</td>
                            <td class="large-text">Dried</td>
                        </tr>
                        <tr>
                            <td class="labels_col">
                                <div class="tooltip_hold">
                                Hotness
                                    <div class="tooltip">
                                        <p>The Scoville scale is a measurement of the pungency (spiciness or "heat") of chili peppers, as recorded in Scoville Heat Units (SHU), based on the concentration of capsaicinoids, among which capsaicin is the predominant component.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="w500"><span>25000 to 30000 SHU</span></td>
                            <td class="w500"><span>30000 to 33000 SHU</span></td>
                            <td class="w500" ><span>33000 to 35000 SHU</span></td>
                        </tr>
                        <tr>
                            <td class="labels_col">
                                <div class="tooltip_hold">
                                Moisture
                                    <div class="tooltip">
                                        <p>Moisture content in the product.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="w500" ><span> 6% Max</span></td>
                            <td class="w500" ><span></span>8% Max</td>
                            <td class="w500" ><span>10% Max</span></td>
                        </tr>
                        <tr>
                            <td class="labels_col">
                                <div class="tooltip_hold">
                                Foreign Matter
                                    <div class="tooltip">
                                        <p>Total amount of foreign matter present in the product.</p>
                                    </div>
                                </div>
                            </td>
                            <td class="w500" ><span> 5% Max</span></td>
                            <td class="w500" ><span></span>5% Max</td>
                            <td class="w500" ><span>3% Max</span></td>
                        </tr>
                        <tr>
                            <td class="labels_col">
                                <div class="tooltip_hold">
                                Length
                                    <div class="tooltip">
                                        <p>Average length of product</p>
                                    </div>
                                </div>
                            </td>
                            <td class="w500" ><span>8 to 11cm</span></td>
                            <td class="w500" ><span></span>8 to 11cm</td>
                            <td class="w500" ><span>8 to 11cm</span></td>
                        </tr>
                        <tr>
                            <td class="labels_col">
                                <div class="tooltip_hold">
                                Loose seeds
                                    <div class="tooltip">
                                        <p>Total % of loose seeds</p>
                                    </div>
                                </div>
                            </td>
                            <td class="w500" ><span> 5% Max</span></td>
                            <td class="w500" ><span></span>5% Max</td>
                            <td class="w500" ><span>3% Max</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

                        </div>
                        <hr style="opacity:.2;margin:40px 0px">
                    </div>
                        

                    
                    
                        </div>
                        <div class="clearfix"></div>
                    
                        <div class="container" style="padding:0px;    margin-top: 40px;">
                        <div class="about-title ab-hero fl-wrap" style="width:40%">
                                        <div class="section-title fl-wrap" style="margin-bottom:10px;padding-top:120px">
                                        <div><p class="ribbon">
  <span class="text"><strong class="bold">Hectar Intelligence</strong></span>
</p></div>
                                    
<h2 style="font-size: 24px;
    font-weight: 600;
    color: #212121;
    font-family: jost;">Hectar Intelligence</h2>
                                    <p style="width:80%;
    font-size: 16px;
    line-height: 28px;
    margin-top: 20px;">We uses the machine learning systems and realtime inputs from our ground staff to make the quality of your produce better and the process faster. So, you make profit-maximizing decisions. Every day. For every commodity.</p>
                                    </div>
                                    <div class="clearfix"></div>
                                    
                                        </div>
                        
                        

                      <div style="width:60%;overflow-x:Scroll;padding:20px">
                        <div class="clearfix"></div>
                        <div class="sample-p">
                                              <span><img src="/assetfront/home-images/coriander-seeds.png" style="width: 100px;float: left;margin-right: 20px;border-radius: 4px;"></span><div style="font-size: 16px;line-height: 28px;text-align:left;font-weight:700">Coriander Seeds</div><p>Mature around 136-140 days after transplanting. These chickpeas have bold seeds and are salmon white in color.</p>
                                          </div>
                                          <div class="clearfix"></div>
                                
                                          <div class="rtl-slider-flex">
	<div class="rtl-slider">
	  <div class="rtl-slider-slide" style="background-image: url('assetfront/home-images/c11.png');">
	  </div>
	  <div class="rtl-slider-slide" style="background-image: url('assetfront/home-images/c2.png');">
	  </div>
	  <div class="rtl-slider-slide" style="background-image: url('assetfront/home-images/c3.png');">
	  </div>
      <div class="rtl-slider-slide" style="background-image: url('assetfront/home-images/c4.png');">
	  </div>
	</div>
	<div class="rtl-slider-nav">
		<div class="rtl-slider-slide" style="background-image: url('assetfront/home-images/c1.png');">
	  </div>
	  <div class="rtl-slider-slide" style="background-image: url('assetfront/home-images/c21.png');">
	  </div>
	  <div class="rtl-slider-slide" style="background-image: url('assetfront/home-images/c31.png');">
	  </div>
      <div class="rtl-slider-slide" style="background-image: url('assetfront/home-images/c41.png');">
	  </div>
	</div>
	<span class="thumb-prev"><i class="fa fa-angle-up fa-lg"></i></span>
	<span class="thumb-next"><i class="fa fa-angle-down fa-lg"></i><span>
</div>
        
                        </div>
                        <hr style="opacity:.2;margin:40px 0px">
                    </div>
                       </div>

                    
                    </section>
                    <!-- section end-->	
                   	
                  
                <!-- content end -->
                <div class=" fl-wrap gray-bg" style="padding: 80px 0px;"> 
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="list-single-main-container">
                                <!--   list-single-main-item -->
                                <div class="list-single-main-item fl-wrap" id="faq1">
                                    <div class="list-single-main-item-title big-lsmt fl-wrap">
                                        <h3>FAQ's</h3>
                                    </div>
                                    <!--   accordion-lite -->
                                    <div class="accordion-lite-container fl-wrap">
                                        <div class="accordion-lite-header fl-wrap">How do you ensure quality of the products?<i class="fas fa-plus"></i></div>
                                        <div class="accordion-lite_content fl-wrap">
                                            <p>Our teams at the source establish and monitor our benchmarks for quality of our products. We then have independent quality auditors who assess every single shipment.</p>
                                        </div>
                                    </div>
                                    <!--   accordion-lite end -->
                                    <!--   accordion-lite -->
                                    <div class="accordion-lite-container fl-wrap">
                                        <div class="accordion-lite-header fl-wrap">Can I order samples?<i class="fas fa-plus"></i></div>
                                        <div class="accordion-lite_content fl-wrap">
                                            <p>Yes, in fact, we encourage our customers to get samples across variants of a product before placing an order. We believe in a collaborative effort to match the right grade of products requested by our customers. This has enabled us to forge long term partnerships with retailers, food processers and wholesalers around the world. Contact us to order your samples.

</p>
                                        </div>
                                    </div>
                                    <!--   accordion-lite end -->
                                    <!--   accordion-lite -->
                                    <div class="accordion-lite-container fl-wrap">
                                        <div class="accordion-lite-header fl-wrap">Who handles the transactions?

<i class="fas fa-plus"></i></div>
                                        <div class="accordion-lite_content fl-wrap">
                                            <p>As soon as you register on HECTAR, you are assigned a dedicated account manager who liaises with our team of experienced product buyers, logistics and packaging professionals to ensure smooth and transparent order processing.  

</p>
                                        </div>
                                    </div>
                                    <!--   accordion-lite end -->
                                     <!--   accordion-lite -->
                                     <div class="accordion-lite-container fl-wrap">
                                        <div class="accordion-lite-header fl-wrap">What is the minimum order quantity?



<i class="fas fa-plus"></i></div>
                                        <div class="accordion-lite_content fl-wrap">
                                            <p>We work on container loads. While in some cases we do fulfill customer requests to mix 2-3 products to make a container, we generally prefer shipping a single product in each container.

 

</p>
                                        </div>
                                    </div>
                                    <!--   accordion-lite end -->
                                     <!--   accordion-lite -->
                                     <div class="accordion-lite-container fl-wrap">
                                        <div class="accordion-lite-header fl-wrap">Do you supply only Indian agro products?



<i class="fas fa-plus"></i></div>
                                        <div class="accordion-lite_content fl-wrap">
                                            <p>Presently we are working only with farmers, FPOs and millers across 12 states in India. By the end of 2022, we will be taking our proprietary technology and quality audit methods to Sri Lanka, Malaysia, Vietnam and Indonesia. At this stage, for the products not in our portfolio yet, please feel free to submit an enquiry and we will definitely check how we can support. 

  

</p>
                                        </div>
                                    </div>
                                    <!--   accordion-lite end -->
                                </div>
                                <!--   list-single-main-item end -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>	
{{-- <button class="modal-open" id="btn2" type="">Click</button> --}}


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
{{-- <script>

        var button = document.getElementById('sign-in');
        setInterval(function(){
            button.click();
        },1000);
   
</script> --}}

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
@stop
