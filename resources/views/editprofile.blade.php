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
                                <li><a href="/editprofile" class="user-profile-act"><i class="fal fa-user-edit"></i> My Profile</a></li>
                                
                            </ul>
                        </div>
                        <!-- user-profile-menu end-->
                        <!-- user-profile-menu-->
                        <div class="user-profile-menu">
                            <h3>Hectar</h3>
                            <ul class="no-list-style">
                                <li><a href="/quotes"><i class="fal fa-th-list"></i> My Quotes  </a></li>
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
                            <div class="dashboard-title-item"><span>My Profile</span></div>
                            
                            					
                        </div>
                        <!-- dashboard-title end -->		
                        <div class="dasboard-wrapper fl-wrap no-pag">
                            <div class="row">
                                <div class="col-md-7">
                                    
                                    
                                    <div class="dasboard-widget-title fl-wrap">
                                        <h5><i class="fas fa-key"></i>Personal Info</h5>
                                    </div>
                                    <div class="dasboard-widget-box fl-wrap">
                                        <div class="custom-form">
                                            <label>Your Name <span class="dec-icon"><i class="far fa-user"></i></span></label>
                                            <input type="text" placeholder="Srinath Srinivasan" value="">
                                            <label>Company Name <span class="dec-icon"><i class="fas fa-user"></i></span></label>
                                            <input type="text" placeholder="Hectar Global" value="">
                                            <label>Email Address <span class="dec-icon"><i class="far fa-envelope"></i></span></label>
                                            <input type="text" placeholder="hectar.global@gmail.com" value="">	
                                            <label>Phone<span class="dec-icon"><i class="far fa-phone"></i> </span></label>
                                            <input type="text" placeholder="+91 783802838" value="">	
                                            									
                                            <button class="btn    color-bg  float-btn">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="dasboard-widget-title dbt-mm fl-wrap">
                                        <h5><i class="fas fa-key"></i>Change Password</h5>
                                    </div>
                                    <div class="dasboard-widget-box fl-wrap">
                                        <div class="custom-form">
                                            <div class="pass-input-wrap fl-wrap">
                                                <label>Current Password<span class="dec-icon"><i class="far fa-lock-open-alt"></i></span></label>
                                                <input type="password" class="pass-input" placeholder="" value="">
                                                <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                                            </div>
                                            <div class="pass-input-wrap fl-wrap">
                                                <label>New Password<span class="dec-icon"><i class="far fa-lock-alt"></i></span></label>
                                                <input type="password" class="pass-input" placeholder="" value="">
                                                <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                                            </div>
                                            <div class="pass-input-wrap fl-wrap">
                                                <label>Confirm New Password<span class="dec-icon"><i class="far fa-shield-check"></i> </span></label>
                                                <input type="password" class="pass-input" placeholder="" value="">
                                                <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                                            </div>
                                            <button class="btn    color-bg  float-btn">Save Changes</button>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--				
                </div>	
                <div class="dashbard-bg gray-bg"></div>
            </div>
 <!-- wrapper end -->


@stop