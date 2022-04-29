<!-- footer -->	
<footer class="main-footer fl-wrap">
    <div class="footer-inner fl-wrap">
        <div class="container">
            <div class="row">
                <!-- footer widget-->
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <div class="footer-widget-logo fl-wrap">
                            <img src="assetfront/images/logo.png" alt="">
                        </div>
                        <p>Hectar offers the quickest solution available to discover everyday prices and shortest transit for Agri Commodities purchases.</p>
                        <div class="fw_hours fl-wrap">
                            <span>Get quote in <strong> 30 secs</strong></span>
                            <span><strong> 100%</strong> Genuine products</span>
                            <span>Track shipment in<strong> Realtime</strong></span>
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
                            <li><a href="/about">About Hectar</a></li>
                            <li><a href="/contacts" id="demo01">Contacts</a></li>
                            <li><a href="/help">Help Center</a></li>
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
                            <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank">contact@hectar.global</a></li>
                            <li> <span><i class="fal fa-map-marker"></i> Address :</span><a href="#" target="_blank">Chennai, India</a></li>
                            <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#">+91(783)807838</a></li>
                        </ul>
                        <div class="footer-social fl-wrap">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer widget end-->   
                <!-- footer widget-->
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <div class="footer-widget-title fl-wrap">
                            <h4>Hectar.global</h4>
                        </div>
                        <p>We ensure absolute certainty on the quality of your purchase by defining objective rules for Quality and grading of all our products.</p>
                        
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
	
</div>
<!-- Main end -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/assetfront/home-images/mbac-1.0.js"></script>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" type="text/css">

<script src="{{asset('assetfront/js/animatedModal.min.js')}}"></script>
  
<script>
$(document).ready(function(){
    $("#demo01").animatedModal();
    $('.mbac-wrap').mbac({
        width: 690,
        height: 460
    });
});
</script>

 <!--DEMO01-->

<link rel="stylesheet" href="/assetfront/home-images/mbac.css">
<script type="text/javascript">
$(document).ready( function() {


    $("#default_option").click(function(){
  $(this).parent().toggleClass("active");
})

$("#select_ul li").click(function(){
  var currentele = $(this).html();
  $("#default_option li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");
});

$("#default_option1").click(function(){
  $(this).parent().toggleClass("active");
})

$("#select_ul1 li").click(function(){
  var currentele = $(this).html();
  $("#default_option1 li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");
});

$("#default_option2").click(function(){
  $(this).parent().toggleClass("active");
})

$("#select_ul2 li").click(function(){
  var currentele = $(this).html();
  $("#default_option2 li").html(currentele);
  $(this).parents(".select_wrap").removeClass("active");
});

    $( "#country" ).change(function() {

       // alert("dadads");
        var id = this.value;
        
        //var token = $('input[name="_token"]').val();

        $.ajax({
          url:"{{ route('ajaxdata.get_ports') }}",
          method:'post',
          dataType: 'json',
          data:{id:id, _token: '{{csrf_token()}}'},
          success:function(result)
          {
            //console.log(result);
            $("#port").html(result);
          }
        });
       

       // alert(country_id);
    });
    $(".select-product").select2({
    placeholder: "Select Product",
    allowClear: true,
    
});

});
  </script>

