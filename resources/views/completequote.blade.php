@extends('layout.frontend.main')


@section('title', 'LensOnNews')
@section('content')


<!-- wrapper  -->
<div id="wrapper" STYLE="PADDING-TOP:0PX">
  <!-- content -->
  <div class="content">
    <!--  section  -->


    <!-- section -->
    <section class="gray-bg small-padding" style="padding-top: 0px;">
      <div class="container">
        <div class="row">
          <!-- services-item -->
          <div class="col-md-5" style="background: #fff;margin-top: 40px;border-radius: 4px;padding:0px 20px;">

            <DIV class="content">
            <div style="text-align:left"><img src="/assetfront/home-images/cif-logo.png" class="respimg" alt="" style="height: 60px;margin-right:20px;margin-top:50px;width:auto"></div>
<div class="list-single-main-item-title " style="padding: 10px 20px 0px 20px !important;
    margin-bottom: 0px !important;">
<h3>Your Personal CIF Quote</h3>
<p style="margin-top:10px">Hectar CIF Quote includes product price, packaging cost, loadability cost, freight cost and/or any other charges applicable, we got you covered. Confirm quote to get a callback from our representative. </p>

</div>
              
          <form name="cif_quote" method="post" action="/completequote-steptwo">
            {{-- <form name="cif_quote" method="post" action="/completequote"> --}}
              {{-- <form name="cif_quote"> --}}
            @csrf
              <div class="container">
                <div class="payment">

                  <div class="pb-5" style="text-align:left;">
                    <label class="select-label cif-label">Select Variant :</label>
                    @foreach($variants as $variant)
						        <input class="checkbox-tools" type="radio" name="variant" id="{{$variant->id}}" value="{{$variant->id}}" >
						          <label class="for-checkbox-tools" for="{{$variant->id}}">
                        {{$variant->name}}
						          </label>
                  @endforeach  
					      </div> 

                {{-- <div class="pb-5" style="text-align:left;">
                  <label class="select-label cif-label">Select Type :</label>
                  @foreach($types as $type)
                  <input class="checkbox-tools" type="radio" name="type" id="21" value="{{$type->id}}" >
                    <label class="for-checkbox-tools" for="21">
                      {{$type->title}}
                    </label>
                @endforeach  
              </div>  --}}

              <div class="pb-5" style="text-align:left;">
                <label class="select-label cif-label">Select Packaging :</label>
                @foreach($packagings as $packaging)
                <input class="checkbox-tools packaging" type="radio" name="packaging" id="{{$packaging->id}}" value="{{$packaging->id}}" >
                  <label class="for-checkbox-tools" for="{{$packaging->id}}">
                    {{$packaging->name}}
                  </label>
              @endforeach  
            </div> 
                 
                {{-- <div class="pb-5" style="text-align:left;">
                    <label class="select-label cif-label">Volume/Loadability :</label>
						        <input class="checkbox-tools" type="radio" name="volume" id="23" selected >
						          <label class="for-checkbox-tools" for="23">
                        {{$get_freight->container}}
						          </label>
                  
					      </div>  --}}
                <input type="hidden" name="cantainer" value="{{$get_freight->container}}">
                <input type="hidden" name="prod_id" value="{{$prod_id}}">
                <input type="hidden" name="freight_id" value="{{$freight_id}}">
                <input type="hidden" name="loadability" value="{{$freight_id}}">
                  <div class="payment__info">
                    <div class="payment__cc">
                      <div class="payment__title">
                        Destination information
                      </div>
                     
                        <div class="form__cc">
                          <div class="row" style="padding:0;margin:0">

                            <div class="field ">
                              <div class="title">Country Name
                              </div>
                              <select class="input ddl">
                                <option selected value="{{$get_freight->countries->id}}">{{$get_freight->countries->name}}</option>

                              </select>
                              <input type="hidden" name="country" value="{{$get_freight->countries->id}}">
                            </div>
                            <div class="field ">
                              <div class="title">Port Name
                              </div>
                              <select name="port" class="input ddl">
                                <option>Select Port</option>
                                <option selected value="{{$get_freight->ports->id}}">{{$get_freight->ports->name}}</option>

                              </select>
                            </div>
                          </div>


                        </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="actions">

                  {{-- <a href="#" class="btn btn1 float-btn small-btn orange-bg" id="cifb">Calculate CIF Quote
                    <i class="icon icon-arrow-right-circle"></i>
                  </a> --}}

                  <button type="submit" href="#" class="btn btn1 float-btn small-btn orange-bg" id="cifbb">Calculate CIF Quote
                    <i class="icon icon-arrow-right-circle"></i>
                  </button>
                  <a href="#" class="backBtn" id="cal">Go Back to product page</a>

                  

                </div>

              </div>
      </form>
            </DIV>

           

          </div>
          <!-- services-item  end-->
          <div class="col-md-6 col-md-offset-1" >

<div class="content quo1">
<div class="details shadow">
                <div class="details__item" STYLE="TEXT-ALIGN:LEFT">

                  <div class="item__image">
                    <img class="iphone" src="assetfront/home-images/dry-chilli.png" alt="">
                  </div>
                  <div class="item__details">
                    <div class="item__title">
                      Red Dry Chilli
                    </div>
                    <div class="item__price">
                      Sannam 334
                    </div>
                    <div class="item__quantity">
                      Hectar Certified
                    </div>
                    <div class="item__description">
                      <ul style="">
                        <li>Place order in less than 30 sec.</li>
                        <li>Compare different qualities & prices</li>
                        <li>Package your product as you like</li>
                        <li>Real-time video updates from warehouse </li>
                        <li>Track your freight online with ease</li>
                      </ul>

                    </div>

                  </div>
                </div>

              </div>
              <div class="discount"></div>
</div>

<div class="content quo2" style="display:none">
<div class="details shadow">
                <div class="details__item" STYLE="TEXT-ALIGN:LEFT">

                  <div class="item__image">
                    <img class="iphone" src="assetfront/home-images/dry-chilli.png" alt="">
                  </div>
                  <div class="item__details">
                    <div class="item__title">
                      Red Dry Chilli
                    </div>
                    <div class="item__price">
                      Sannam 334
                    </div>
                    <div class="item__quantity">
                      Hectar Certified
                    </div>
                    <div class="item__description">
                      <ul style="">
                        <li>Place order in less than 30 sec.</li>
                        <li>Compare different qualities & prices</li>
                        <li>Package your product as you like</li>
                        <li>Real-time video updates from warehouse </li>
                        <li>Track your freight online with ease</li>
                      </ul>

                    </div>

                  </div>
                </div>

              </div>
              <div class="discount"></div>
   <div class="quote">
   <div class="table">

    <form name="medium_cif_quote" method="get" action="/orderplace">
      @csrf
    <details class="card1">
      <summary class="property lightblue">
        <span class="eyebrow">Medium Quality</span>
        ${{$medium_CIF_cost}}.00 <span>per MT</span>
      </summary>
     
      <p class="rent">Mandi Price : $ {{$medium_mandi_price}} per MT</p>
      
      <div class="priceTable">
        <div class="qty">Feature name</div><div class="price">1%</div>
        <div class="qty">Feature name</div><div class="price">1%</div>
        <div class="qty">Feature name</div><div class="price">1%</div>
        <div class="qty">Feature name</div><div class="price">1%</div>
      </div>
      <p class="hotel">Includes :</p>
      <p class="mortgage">Packaging Cost</p>
      <p class="houses">Freight Cost</p>
      <p class="hotelCost">Loadability Cost</p>
      <input type="hidden" name="CIF_cost" value="{{$medium_CIF_cost}}">
      <input type="hidden" name="quality" value="3">
      <input type="hidden" name="variant_id" value="{{$variant_id}}">
      <input type="hidden" name="country_id" value="{{$country_id}}">
      <input type="hidden" name="lodability" value="{{$container}}">
      <input type="hidden" name="packaging_id" value="{{$packaging_id}}">
      <input type="hidden" name="product_id" value="{{$product_id}}">
      <input type="hidden" name="port_id" value="{{$port_id}}">
      <button type="submit" style="    padding: 10px 0px;
    font-weight: 600;
    color: orange;
    text-decoration: underline;
    text-transform: uppercase;
    cursor: pointer;
    font-size: 20px;">Place Order</button>
      <p class="disclaimer">hectar message comes here<br/>&copy;2022, hectar.global</p>
    </details>
  </form>

  <form name="best_cif_quote" method="get" action="/orderplace">
    @csrf

    <details class="card1">
      <summary class="property lightblue">
      <span class="eyebrow">Best Quality</span>
        ${{$best_CIF_cost}}.00 <span>per MT</span>
      </summary>
      <p class="rent">Mandi Price : ${{$best_mandi_price}} per MT</p>
      <div class="priceTable">
        <div class="qty">Feature name</div><div class="price">1%</div>
        <div class="qty">Feature name</div><div class="price">1%</div>
        <div class="qty">Feature name</div><div class="price">1%</div>
        <div class="qty">Feature name</div><div class="price">1%</div>
      </div>
      <p class="hotel">Includes :</p>
      <p class="mortgage">Packaging Cost</p>
      <p class="houses">Freight Cost</p>
      <p class="hotelCost">Loadability Cost</p>
      <input type="hidden" name="CIF_cost" value="{{$best_CIF_cost}}">
      <input type="hidden" name="quality" value="5">
      <input type="hidden" name="variant_id" value="{{$variant_id}}">
      <input type="hidden" name="country_id" value="{{$country_id}}">
      <input type="hidden" name="lodability" value="{{$container}}">
      <input type="hidden" name="packaging_id" value="{{$packaging_id}}">
      <input type="hidden" name="product_id" value="{{$product_id}}">
      <input type="hidden" name="port_id" value="{{$port_id}}">
      <button type="submit" href="#" style="    padding: 10px 0px;
    font-weight: 600;
    color: orange;
    text-decoration: underline;
    text-transform: uppercase;
    cursor: pointer;
    font-size: 20px;">Place Order</button>
      <p class="disclaimer">hectar message comes here<br/>&copy;2022, hectar.global</p>
    </details>
  </form>

  <form name="delux_cif_quote" method="get" action="/orderplace">
    @csrf
    <details class="card1">
      <summary class="property lightblue">
      <span class="eyebrow">Deluxe Quality</span>
        ${{$deluxe_CIF_cost}}.00 <span>per MT</span>
      </summary>
      <p class="rent">Mandi Price : ${{$delux_mandi_price}} per MT</p>
      <div class="priceTable">
        <div class="qty">Feature name</div><div class="price">1%</div>
        <div class="qty">Feature name</div><div class="price">1%</div>
        <div class="qty">Feature name</div><div class="price">1%</div>
        <div class="qty">Feature name</div><div class="price">1%</div>
      </div>
      <p class="hotel">Includes :</p>
      <p class="mortgage">Packaging Cost</p>
      <p class="houses">Freight Cost</p>
      <p class="hotelCost">Loadability Cost</p>
      <input type="hidden" name="CIF_cost" value="{{$deluxe_CIF_cost}}">
      <input type="hidden" name="quality" value="4">
      <input type="hidden" name="variant_id" value="{{$variant_id}}">
      <input type="hidden" name="country_id" value="{{$country_id}}">
      <input type="hidden" name="lodability" value="{{$container}}">
      <input type="hidden" name="packaging_id" value="{{$packaging_id}}">
      <input type="hidden" name="product_id" value="{{$product_id}}">
      <input type="hidden" name="port_id" value="{{$port_id}}">
      <button type="submit" href="#" style="    padding: 10px 0px;
    font-weight: 600;
    color: orange;
    text-decoration: underline;
    text-transform: uppercase;
    cursor: pointer;
    font-size: 20px;">Place Order</button>
      <p class="disclaimer">hectar message comes here<br/>&copy;2022, hectar.global</p>
    </details>
  </form>

</div>
   </div>

</div>
</div>
        </div>

        <div class="clearfix"></div>


        <!--box-widget-->

        <!--box-widget end -->
      </div>
    </section>
    <!-- section end-->
  </div>
  <!-- content end -->

</div>
<!-- wrapper end -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <script>
  $(document).ready(function() {
    $(".checkbox-tools").click(function(){
         var variantid = $(this).val();
        // $("#cifb").click(function(){
         alert(variantid);
        var testObject = { 'variant_id': variantid};
        localStorage.setItem('testObject', JSON.stringify(testObject));
        var retrievedObject = JSON.parse(localStorage.getItem('testObject'));
        console.log('retrievedObject: ', retrievedObject);
    //});
  });
 
}); 
</script> --}}

<script type="text/javascript">
  $(document).ready(function(){

    // $("#cifb").submit(function(){

    //   alert("fdsfs");

    //   var dataString = $(this).serialize();
     

    // });
  
          // $('.select2').change(function(){
          // var status = $(this).val();
          // var product = $(this).attr('id');
          // //alert(category);
          // $.ajaxSetup({
          // headers: {
          //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          //     }
          // });
      
          // $.ajax({
          //         type: "POST",
          //         url: "/update-product-status",
          //         data: {status_val : status, product_id: product},
          //         beforeSend: function() {
          //             $(".loader").show();
          //         },
          //         success: function(data) {
          //             $('#status').css("display", "block");
          //             $('#status').text(data['status']);
                  
          //         },
          //         complete: function(){
          //             $('.loader').hide();
          //         },
          //     }); 
          // });
  
         
  
  });
  
  </script>
@stop


