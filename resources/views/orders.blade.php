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
                                <li><a href="/quotes"><i class="fal fa-th-list"></i> My Quotes  </a></li>
                                <li><a href="/orders" class="user-profile-act"> <i class="fal fa-calendar-check"></i> My Orders <span>2</span></a></li>
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
                            <div class="dasboard-widget-title fl-wrap">
                                <h5><i class="fal fa-comments-alt"></i>My Orders <span> ( +3 New ) </span></h5>
                                <a href="#" class="mark-btn  tolt" data-microtip-position="bottom" data-tooltip="Mark all as read"><i class="far fa-comment-alt-check"></i> </a>
                            </div>
                            <div class="dasboard-widget-box fl-wrap">
                                <div class="dasboard-opt fl-wrap">
                                    <!-- price-opt-->
                                    <div class="price-opt">
                                        <span class="price-opt-title">Sort   by:</span>
                                        <div class="listsearch-input-item">
                                            <select data-placeholder="Lastes" class="chosen-select no-search-select" style="display: none;">
                                                <option>Lastes</option>
                                                <option>Oldes</option>
                                            </select><div class="nice-select chosen-select no-search-select" tabindex="0" style="display: none;"><span class="current">Lastes</span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"><li data-value="Lastes" class="option selected">Lastes</li><li data-value="Oldes" class="option">Oldes</li></ul></div><div class="nice-select chosen-select no-search-select" tabindex="0"><span class="current"></span><div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search..."></div><ul class="list"></ul></div>
                                        </div>
                                    </div>
                                    <!-- price-opt end-->
                                </div>
                                <div class="row">
                                    <!-- bookings-item -->  
                                    <div class="col-md-6">
                                        <div class="bookings-item fl-wrap">
                                            <div class="bookings-item-header fl-wrap">
                                                <img src="/assetfront/home-images/dry-chilli.png" alt="">
                                                <h4>For <a href="/orderdetails" target="_blank">Red Dried Peppers</a></h4>
                                                <span class="new-bookmark">Order Confirmed</span>
                                            </div>
                                            <div class="bookings-item-content fl-wrap">
                                                <ul>
                                                    <li>Name: <span>Andy Smith | Comapny name comes here</span></li>
                                                    <li>Contact: <span>+7(123)987654 | email@domain.com</span></li>
                                                    <li>Destination: <span>Sri Lanka | COL</span></li>
                                                </ul>
                                               
                                            </div>
                                            <div class="bookings-item-content fl-wrap">
                                                <ul>
                                                    <li>Variant: <span>Sannam 337</span></li>
                                                    <li>Type/Quality: <span>Stemless / Deluxe</span></li>
                                                    <li>Volume: <span>20ft x 1</span></li>
                                                    <li>Packaging: <span>PP Bags 1 KG</span></li>
                                                </ul>
                                               
                                            </div>
                                            <div class="bookings-item-footer fl-wrap">
                                                <span class="message-date">12 December 2020</span>
                                                <ul>
                                                    <li><a href="#" class="tolt" data-microtip-position="top-left" data-tooltip="View Details"><i class="far fa-info-circle"></i></a></li>
                                                    <li><a href="#" class="tolt" data-microtip-position="top-left" data-tooltip="Contact Support"><i class="far fa-phone"></i></a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--bookings-item end--> 													
                                </div>
                            </div>
                            <!-- pagination-->
                            <div class="pagination float-pagination">
                                <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                <a href="#">1</a>
                                <a href="#" class="current-page">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                            </div>
                            <!-- pagination end-->	
                        </div>
                    </div>
                    <!--
                    <!-- dashboard-footer ---->
                    <div class="dashboard-footer">
                        <div class="dashboard-footer-links fl-wrap">
                            <span>Helpfull Links:</span>
                            <ul>
                                <li><a href="about.html">About  </a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="pricing.html">Pricing Plans</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="help.html">Help Center</a></li>
                            </ul>
                        </div>
                        <a href="#main" class="dashbord-totop  custom-scroll-link"><i class="fas fa-caret-up"></i></a>
                    </div>
                    <!-- dashboard-footer end -->				
                </div>	
                <div class="dashbard-bg gray-bg"></div>
            </div>
 <!-- wrapper end -->


@stop