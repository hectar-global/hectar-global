@extends('layout.frontend.main')


@section('title', 'LensOnNews')
@section('content')


 <!-- wrapper  -->	
 <div id="wrapper">
    <!-- content -->	
    <div class="content">
        
        
        <div class="row">
            <div class="col-md-12" >

            <div id="invoiceholder">

  <div id="headerimage"></div>
  <div id="invoice" class="effect2">
    
    <div id="invoice-top">
      <div class="logo"></div>
      <div class="info">
        <h2>Hectar Global</h2>
        <p> contact@hectar.global </br>
            +91 783807838
        </p>
      </div><!--End Info-->
      <div class="title">
        <h1>Quote #1069</h1>
        <p>Issued: Apr 27, 2022</br>
           
        </p>
      </div><!--End Title-->
    </div><!--End InvoiceTop-->


    
    <div id="invoice-mid">
      
      <div class="clientlogo"></div>
      <div class="info" style="text-align:left">
        <h2>Srinath Srinivasan</h2>
        <p>Centum International Pte.</br>
           9717 094931</br>
           srinath.srinivasan@gmail.com</br>
      </div>

      <div id="project" style="text-align:right">
        <h2>Important information</h2>
        <p style="text-align:right">Proin cursus, dui non tincidunt elementum, tortor ex feugiat enim, at elementum enim quam vel purus. Curabitur semper malesuada urna ut suscipit.</p>
      </div>   

    </div><!--End Invoice Mid-->
    
    <div id="invoice-bot">
      
      <div id="table">
        <table>
          <tr class="tabletitle">
            <td class="item"><h2>Product Details and CIF Cost</h2></td>
            <td class="subtotal"><h2></h2></td>
          </tr>
          
          <tr class="service">
            <td class="tableitem"><p class="itemtext">Variant</p></td>
            
            <td class="tableitem"><p class="itemtext">Sannam 337</p></td>
          </tr>
          
          <tr class="service">
            <td class="tableitem"><p class="itemtext">Type</p></td>
           
            <td class="tableitem"><p class="itemtext">Stemless</p></td>
          </tr>
          
          <tr class="service">
            <td class="tableitem"><p class="itemtext">Quality</p></td>
            
            <td class="tableitem"><p class="itemtext">Deluxe</p></td>
          </tr>
          
          <tr class="service">
            <td class="tableitem"><p class="itemtext">Packaging</p></td>
            
            <td class="tableitem"><p class="itemtext">1KG Jute Bag</p></td>
          </tr>
          
          <tr class="service">
            <td class="tableitem"><p class="itemtext">Loadability</p></td>
            
            <td class="tableitem"><p class="itemtext">40ft x 2 | 28 MT</p></td>
          </tr>
          
          <tr class="service">
            <td class="tableitem"><p class="itemtext">Exchange rate</p></td>
            <td class="tableitem"><p class="itemtext">75</p></td>
          </tr>
          
            
          <tr class="tabletitle">
            
            <td class="Rate"><h2>Total CIF Cost</h2></td>
            <td class="payment" style="font-size: 24px;
    font-weight: 500;"><h2>$3,644.25</h2></td>
          </tr>
          
        </table>
      </div><!--End Table-->
      
    

      
      <div id="legalcopy">
        <p class="legal"><strong>Thank you for your Interest!</strong>  This quote is valid for 48hrs; please snd your order confirmation for earliest delivery. 
        </p>
      </div>
      <a href="#" class="btn  color-bg float-btn" style="font-size:16px">Send Order for Confirmation</a>
      
      
    </div><!--End InvoiceBot-->
  </div><!--End Invoice-->
</div><!-- End Invoice Holder-->
            </div>
        </div>
        
 <div class="container">
                        <div class="row">
                            <!-- services-item -->
                            <div class="col-md-3">
                                <div class="services-item fl-wrap blue-color">
                                    <i class="fal fa-leaf"></i>
                                    <h4>Pick your product  100+ options<span>01</span></h4>
                                    <p>We ensure absolute certainty on the quality of your purchase by defining objective rules for Quality and grading of all our products.</p>
                                </div>
                            </div>
                            <!-- services-item  end-->
                            <!-- services-item -->
                            <div class="col-md-3">
                                <div class="services-item fl-wrap">
                                    <i class="fal fa-dollar-sign"></i>
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
                                    <i class="fal fa-phone-laptop"></i>
                                    <h4>Access all Documents from Dashboard<span>03</span></h4>
                                    <p>We are making the Export documentation clutter free - Access photos/videos from loading, inspection certificates, shipment documents from a single dashboard.</p>
                                </div>
                            </div>
                            <!-- services-item  end-->
                            <!-- services-item -->
                            <div class="col-md-3">
                                <div class="services-item fl-wrap">
                                    <i class="fal fa-ship"></i>
                                    <h4>Real time Freight Tracking
                                        <span>04</span></h4>
                                    <p>We provide live tracking of ongoing orders, giving you immediate notifications when a shipment passes a milestone.</p>
                                </div>
                            </div>
                            <!-- services-item  end-->
                        </div>
                    </div>
    </div>
    
    <!-- content end -->
 </div>
 <!-- wrapper end -->
<style type="text/css">

#invoiceholder{
  width:100%;
  hieght: 100%;
  padding-top: 50px;
}
#headerimage{
  z-index:-1;
  position:relative;
  top: -50px;
  height: 350px;
  background-image: url('https://images.pexels.com/photos/906494/pexels-photo-906494.jpeg?cs=srgb&dl=pexels-chanaka-906494.jpg&fm=jpg');

  -webkit-box-shadow:inset 0 2px 4px rgba(0,0,0,.15), inset 0 -2px 4px rgba(0,0,0,.15);
	-moz-box-shadow:inset 0 2px 4px rgba(0,0,0,.15), inset 0 -2px 4px rgba(0,0,0,.15);
	box-shadow:inset 0 2px 4px rgba(0,0,0,.15), inset 0 -2px 4px rgba(0,0,0,.15);
  overflow:hidden;
  background-attachment: fixed;
  background-size: 1920px 80%;
  background-position: 50% -90%;
}
#invoice{
  position: relative;
  top: -290px;
  margin: 0 auto;
  width: 700px;
  background: #FFF;
}

[id*='invoice-']{ /* Targets all id with 'col-' */
  border-bottom: 1px solid #EEE;
  padding: 30px;
}

#invoice-top{min-height: 120px;}
#invoice-mid{min-height: 120px;}
#invoice-bot{ min-height: 250px;}

.logo{
  float: left;
	height: 60px;
	width: 60px;
	background: url("{{asset('assetfront/images/logo.png')}}") no-repeat;
	background-size:cover;
}

.info{
  display: block;
  float:left;
  margin-left: 20px;
}
.title{
  float: right;
}
.title p{text-align: right;}
#project{margin-left: 52%;}
table{
  width: 100%;
  border-collapse: collapse;
}
td{
  padding: 5px 0 5px 15px;
  border: 1px solid #EEE
}
.tabletitle{
  padding: 5px;
  background: #EEE;
}
.service{border: 1px solid #EEE;}
.item{width: 50%;}
.itemtext{font-size: .9em;}

#legalcopy{
  margin-top: 30px;
}
form{
  float:right;
  margin-top: 30px;
  text-align: right;
}


.effect2
{
  position: relative;
}
.effect2:before, .effect2:after
{
  z-index: -1;
  position: absolute;
  content: "";
  bottom: 15px;
  left: 10px;
  width: 50%;
  top: 80%;
  max-width:300px;
  background: #777;
  -webkit-box-shadow: 0 15px 10px #777;
  -moz-box-shadow: 0 15px 10px #777;
  box-shadow: 0 15px 10px #777;
  -webkit-transform: rotate(-3deg);
  -moz-transform: rotate(-3deg);
  -o-transform: rotate(-3deg);
  -ms-transform: rotate(-3deg);
  transform: rotate(-3deg);
}
.effect2:after
{
  -webkit-transform: rotate(3deg);
  -moz-transform: rotate(3deg);
  -o-transform: rotate(3deg);
  -ms-transform: rotate(3deg);
  transform: rotate(3deg);
  right: 10px;
  left: auto;
}



.legal{
  width:70%;
}
</style>
@stop