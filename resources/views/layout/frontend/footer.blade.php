<!-- footer -->	
<footer class="main-footer fl-wrap">
    <div class="footer-inner fl-wrap">
        <div class="container">
            <div class="row">
                <!-- footer widget-->
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <div class="footer-widget-logo fl-wrap">
                            <img src="images/logo.png" alt="">
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                        <div class="fw_hours fl-wrap">
                            <span>Monday - Friday:<strong> 8am - 6pm</strong></span>
                            <span>Saturday - Sunday:<strong> 9am - 3pm</strong></span>
                        </div>
                    </div>
                </div>
                <!-- footer widget end-->
                <!-- footer widget-->
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <div class="footer-widget-title fl-wrap">
                            <h4>Helpful links</h4>
                        </div>
                        <ul class="footer-list fl-wrap">
                            <li><a href="about.html">About Our Company</a></li>
                            <li><a href="blog.html">Our last News</a></li>
                            <li><a href="pricing.html">Pricing Plans</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="help.html">Help Center</a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer widget end--> 
                <!-- footer widget-->
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <div class="footer-widget-title fl-wrap">
                            <h4>Contacts Info</h4>
                        </div>
                        <ul  class="footer-contacts fl-wrap">
                            <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                            <li> <span><i class="fal fa-map-marker"></i> Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                            <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#">+7(111)123456789</a></li>
                        </ul>
                        <div class="footer-social fl-wrap">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer widget end-->   
                <!-- footer widget-->
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <div class="footer-widget-title fl-wrap">
                            <h4>Download our apps</h4>
                        </div>
                        <p>Start working with Hectar that can provide everything you need </p>
                        <div class="api-links fl-wrap">
                            <a href="#" class="api-btn color-bg"><i class="fab fa-apple"></i> App Store</a>  
                            <a href="#" class="api-btn color-bg"><i class="fab fa-google-play"></i> Play Market</a>
                        </div>
                    </div>
                </div>
                <!-- footer widget end-->                                     
            </div>
        </div>
    </div>
    <!--sub-footer-->
    <div class="sub-footer gray-bg fl-wrap">
        <div class="container">
            <div class="copyright"> &#169; Hectar 2022 .  All rights reserved.</div>
            <div class="subfooter-nav">
                <ul class="no-list-style">
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--sub-footer end -->                     
</footer>
<!-- footer end -->
</div>
<!-- wrapper end -->
<!--register form -->
<div class="main-register-wrap modal">
<div class="reg-overlay"></div>
<div class="main-register-holder tabs-act">
    <div class="main-register-wrapper modal_main fl-wrap">
        <div class="main-register-header color-bg">
            <div class="main-register-logo fl-wrap">
                <img src="images/white-logo.png" alt="">
            </div>
            <div class="main-register-bg">
                <div class="mrb_pin"></div>
                <div class="mrb_pin mrb_pin2"></div>
            </div>
            <div class="mrb_dec"></div>
            <div class="mrb_dec mrb_dec2"></div>
        </div>
        <div class="main-register">
            <div class="close-reg"><i class="fal fa-times"></i></div>
            <ul class="tabs-menu fl-wrap no-list-style">
                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
            </ul>
            <!--tabs -->                       
            <div class="tabs-container">
                <div class="tab">
                    <!--tab -->
                    <div id="tab-1" class="tab-content first-tab">
                        <div class="custom-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <label>Username or Email Address  * <span class="dec-icon"><i class="fal fa-user"></i></span></label>
                                <input name="email" type="text"  placeholder="Your Name or Mail"  value="" required>
                                <div class="pass-input-wrap fl-wrap">
                                    <label >Password  * <span class="dec-icon"><i class="fal fa-key"></i></span></label>
                                    <input name="password" placeholder="Your Password" type="password"  autocomplete="off" value="" required>
                                    <span class="eye"><i class="fal fa-eye"></i> </span>
                                </div>
                                <div class="lost_password">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                                <div class="filter-tags">
                                    <input id="check-a3" type="checkbox" name="check">
                                    <label for="check-a3">Remember me</label>
                                </div>
                                <div class="clearfix"></div>
                                <button type="submit"  class="log_btn color-bg"> LogIn </button>
                            </form>
                        </div>
                    </div>
                    <!--tab end -->
                    <!--tab -->
                    <div class="tab">
                        <div id="tab-2" class="tab-content">
                            <div class="custom-form">
                                <form action="signup" method="POST"   name="registerform" class="main-register-form" id="main-register-form2">
                                    @csrf
                                    <label >Full Name  * <span class="dec-icon"><i class="fal fa-user"></i></span></label>
                                    <input type="text" name="name" type="text" placeholder="Your Name" value="" required>
                                    {{-- <span style="color: red;">@error('name'){{@'Name is required'}}@enderror</span> --}}
                                    <label >Company Name  * <span class="dec-icon"><i class="fal fa-user"></i></span></label>
                                    <input name="company" type="text" placeholder="Company Name" value="" required>
                                    <label>Email Address  * <span class="dec-icon"><i class="fal fa-envelope"></i></span></label>
                                    <input name="email" type="text"  placeholder="Your Mail" value="" required>
                                    <div class="pass-input-wrap fl-wrap">
                                    <label >Password  * <span class="dec-icon"><i class="fal fa-key"></i></span></label>
                                    <input name="password" type="password" placeholder="Your Password"  autocomplete="off" value="" required>
                                    <span class="eye"><i class="fal fa-eye"></i> </span>
                                    </div>
                                    <div class="filter-tags ft-list">
                                        <input id="check-a2" type="checkbox" name="check" required>
                                        <label for="check-a2">I agree to the <a href="#">Privacy Policy</a> and <a href="#">Terms and Conditions</a></label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <button type="submit" class="log_btn color-bg"> Register </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--tab end -->
                </div>
                <!--tabs end -->
                
            </div>
        </div>
    </div>
</div>
</div>
<!--register form end -->

<a class="to-top color-bg"><i class="fas fa-caret-up"></i></a>   
<!--map-modal -->
<div class="map-modal-wrap">
<div class="map-modal-wrap-overlay"></div>
<div class="map-modal-item">
    <div class="map-modal-container fl-wrap">
        <h3> <span>Listing Title </span></h3>
        <div class="map-modal-close"><i class="far fa-times"></i></div>
        <div class="map-modal fl-wrap">
            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
            <div class="scrollContorl"></div>
        </div>
    </div>
</div>
</div>
<!--map-modal end --> 			
</div>
<!-- Main end -->
