@extends('layout.frontend.main')


@section('title', 'LensOnNews')
@section('content')


 <!-- wrapper  -->	
 <div id="wrapper">
                <!-- dashbard-menu-wrap -->	
                <div class="dashbard-menu-overlay"></div>
                <div class="dashbard-menu-wrap">
                    <div class="dashbard-menu-close"><i class="fal fa-times"></i></div>
                    <div class="dashbard-menu-container">
                        <!-- user-profile-menu-->
                        <div class="user-profile-menu">
                            <h3>Main</h3>
                            <ul class="no-list-style">
                                <li><a href="/mydashboard"><i class="fal fa-chart-line"></i>Dashboard</a></li>
                                <li><a href="/editprofile"><i class="fal fa-user-edit"></i> My Profile</a></li>
                                
                            </ul>
                        </div>
                        <!-- user-profile-menu end-->
                        <!-- user-profile-menu-->
                        <div class="user-profile-menu">
                            <h3>Hectar</h3>
                            <ul class="no-list-style">
                                <li><a href="/quotes" class="user-profile-act"><i class="fal fa-th-list"></i> My Quotes  </a></li>
                                <li><a href="/orders"> <i class="fal fa-calendar-check"></i> My Orders <span>2</span></a></li>
                            </ul>
                        </div>
                        <!-- user-profile-menu end--> 
                    </div>
                    <div class="dashbard-menu-footer">© Hectar 2022 .  All rights reserved.</div>
                </div>
                <!-- dashbard-menu-wrap end  -->		
                <div class="dashboard-content">
                    <div class="dashboard-menu-btn color-bg"><span><i class="fas fa-bars"></i></span>Dasboard Menu</div>
                    <div class="container dasboard-container">
                        <!-- dashboard-title -->	
                        <div class="dashboard-title fl-wrap">
                            <div class="dashboard-title-item"><span>My Quotes</span></div>
                            
                            					
                        </div>
                        <!-- dashboard-title end -->		
                        <div class="dasboard-wrapper fl-wrap">
                            <div class="dasboard-listing-box fl-wrap">
                                <div class="dasboard-opt sl-opt fl-wrap">
                                    <div class="dashboard-search-listing">
                                        <input type="text" onclick="this.select()" placeholder="Search" value="">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                    <a href="#" class="gradient-bg dashboard-addnew_btn">Get a quote<i class="fal fa-plus"></i></a>	
                                    <!-- price-opt-->
                                    <div class="price-opt">
                                        <span class="price-opt-title">Sort   by:</span>
                                        <div class="listsearch-input-item">
                                            <select data-placeholder="Lastes" class="chosen-select no-search-select" style="display: none;">
                                                <option>Lastes</option>
                                                <option>Oldes</option>
                                                <option>Average rating</option>
                                                <option>Name: A-Z</option>
                                                <option>Name: Z-A</option>
                                            </select><div class="nice-select chosen-select no-search-select" tabindex="0" style="display: none;"><span class="current">Lastest</span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"><li data-value="Lastes" class="option selected">Lastes</li><li data-value="Oldes" class="option">Oldes</li><li data-value="Average rating" class="option">Average rating</li><li data-value="Name: A-Z" class="option">Name: A-Z</li><li data-value="Name: Z-A" class="option">Name: Z-A</li></ul></div><div class="nice-select chosen-select no-search-select" tabindex="0"><span class="current"></span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"></ul></div>
                                        </div>
                                    </div>
                                    <!-- price-opt end-->
                                </div>
                                <!-- dashboard-listings-wrap-->
                                <div class="dashboard-listings-wrap fl-wrap">
                                    <div class="row">
                                        												
                                        <!-- dashboard-listings-item-->
                                        <div class="col-md-6">
                                            <div class="dashboard-listings-item fl-wrap">
                                                <div class="dashboard-listings-item_img">
                                                    <div class="bg-wrap">
                                                        <div class="bg  " data-bg="images/all/1.jpg" style="background-image: url(&quot;images/all/1.jpg&quot;);"></div>
                                                    </div>
                                                    <div class="overlay"></div>
                                                    <a href="#" class="color-bg">View</a>
                                                </div>
                                                <div class="dashboard-listings-item_content">
                                                    <h4><a href="#">Red Dried Peppers</a></h4>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-globe"></i> <span> Sannam 337, Stemless, Deluxe</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-location"></i> <span> Sri Lanka | COL</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-backpack"></i> <span> PP bag 1 KG</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-box"></i> <span> 40ft x 1</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-money-bill"></i> <span style="font-size:160%">CIF Cost - $ 1050.00</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="dashboard-listings-item_opt">
                                                        <span class="viewed-counter"><i class="fas fa-eye"></i>25/04/2022 </span>
                                                        <ul>
                                                            <li><a href="#" class="tolt" data-microtip-position="top-left" data-tooltip="Update Quote"><i class="fad fa-redo-alt"></i></a></li>
                                                            <li><a href="#" class="tolt" data-microtip-position="top-left" data-tooltip="Delete"><i class="far fa-trash-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- dashboard-listings-item end--> 	
                                         <!-- dashboard-listings-item-->
                                         <div class="col-md-6">
                                            <div class="dashboard-listings-item fl-wrap">
                                                <div class="dashboard-listings-item_img">
                                                    <div class="bg-wrap">
                                                        <div class="bg  " data-bg="images/all/1.jpg" style="background-image: url(&quot;images/all/1.jpg&quot;);"></div>
                                                    </div>
                                                    <div class="overlay"></div>
                                                    <a href="#" class="color-bg">View</a>
                                                </div>
                                                <div class="dashboard-listings-item_content">
                                                    <h4><a href="#">Red Dried Peppers</a></h4>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-globe"></i> <span> Sannam 337, Stemless, Deluxe</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-location"></i> <span> Sri Lanka | COL</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-backpack"></i> <span> PP bag 1 KG</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-box"></i> <span> 40ft x 1</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-money-bill"></i> <span style="font-size:160%">CIF Cost - $ 1050.00</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="dashboard-listings-item_opt">
                                                        <span class="viewed-counter"><i class="fas fa-eye"></i>24/04/2022 </span>
                                                        <ul>
                                                            <li><a href="#" class="tolt" data-microtip-position="top-left" data-tooltip="Update Quote"><i class="fad fa-redo-alt"></i></a></li>
                                                            <li><a href="#" class="tolt" data-microtip-position="top-left" data-tooltip="Delete"><i class="far fa-trash-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- dashboard-listings-item end--> 
                                         <!-- dashboard-listings-item-->
                                         <div class="col-md-6">
                                            <div class="dashboard-listings-item fl-wrap">
                                                <div class="dashboard-listings-item_img">
                                                    <div class="bg-wrap">
                                                        <div class="bg  " data-bg="images/all/1.jpg" style="background-image: url(&quot;images/all/1.jpg&quot;);"></div>
                                                    </div>
                                                    <div class="overlay"></div>
                                                    <a href="#" class="color-bg">View</a>
                                                </div>
                                                <div class="dashboard-listings-item_content">
                                                    <h4><a href="#">Red Dried Peppers</a></h4>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-globe"></i> <span> Sannam 337, Stemless, Deluxe</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-location"></i> <span> Sri Lanka | COL</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-backpack"></i> <span> PP bag 1 KG</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-box"></i> <span> 40ft x 1</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="geodir-category-location">
                                                        <a href="#"><i class="fas fa-money-bill"></i> <span style="font-size:160%">CIF Cost - $ 1050.00</span></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="dashboard-listings-item_opt">
                                                        <span class="viewed-counter"><i class="fas fa-eye"></i>23/04/2022 </span>
                                                        <ul>
                                                            
                                                            <li><a href="#" class="tolt" data-microtip-position="top-left" data-tooltip="Update Quote"><i class="fad fa-redo-alt"></i></a></li>
                                                            <li><a href="#" class="tolt" data-microtip-position="top-left" data-tooltip="Delete"><i class="far fa-trash-alt"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- dashboard-listings-item end--> 											
                                    </div>
                                </div>
                                <!-- dashboard-listings-wrap end-->
                            </div>
                            <!-- pagination-->
                            <div class="pagination float-pagination">
                                <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                <a href="#">1</a>
                                <a href="#" class="current-page">2</a>
                                
                                <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <!-- pagination end-->	
                        </div>
                    </div>
                
                   	
                </div>	
                <div class="dashbard-bg gray-bg"></div>
            </div>
 <!-- wrapper end -->


@stop