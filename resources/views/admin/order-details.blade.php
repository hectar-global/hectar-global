

@extends('layout.admin.admin-main-home')


@section('title', 'Hectar')

<?php
use Carbon\Carbon;
?>



@section('content')


  
    
<div class="projects-section">
      <div class="projects-section-header">
        <p>Order Details</p>
        <p class="time"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Upload Offline Order</button></p>
      </div>
      {{-- <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-number">0.0</span>
            <span class="status-type">Total Orders</span>
          </div>
          <div class="item-status">
            <span class="status-number">24</span>
            <span class="status-type">Inactive</span>
          </div>
          
        </div>
      
      </div> --}}
      <div class="project-boxes">
      <div class="card">
            {{-- <div class="card-header">
              <h3 class="card-title">View Variant</h3>
            </div> --}}
            <div id="status" class="alert alert-success" style="display: none;"></div>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
            <!-- /.card-header -->
            <div class="card-body p-0">
                <ul class="nav nav-tabs" id="tabs" role="tablist">
                    <li class="active" style="margin-right: 10px;">
                        <button class="nav-link" data-toggle="tab" href="#red" role="tab" type="button">Order Details</button>

                    </li>
                    <li style="margin-right: 10px;">
                        <button class="nav-link" data-toggle="tab" href="#orange" role="tab" type="button">Customer Information</button>
                    </li>
                    <li style="margin-right: 10px;">
                        <button class="nav-link" data-toggle="tab" href="#yellow" role="tab" type="button">Order status</button>
                    </li>

                    {{-- <li style="margin-right: 10px;">
                        <button class="nav-link" data-toggle="tab" href="#green" role="tab" type="button">Green</button>
                    </li>
                    <li style="margin-right: 10px;">
                        <button class="nav-link" data-toggle="tab" href="#blue" role="tab" type="button">Blue</button>
                    </li> --}}
                    
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="red">
                        <p class="status-type" style="padding-top: 20px; font-weight:bold">Order Id: {{$order->id}}</p>
                        <p style="font-weight: bold;">Title: {{$order->product->name}}</p>
                        
                    </div>

                    <div class="tab-pane" id="orange">
                        <p style="font-weight: bold; padding-top: 20px;">Customer Name: {{$order->user->name}}</p>
                        {{-- <p>orange orange orange orange orange</p> --}}
                    </div>

                    <?php
                          switch($order->status) {
                          case ($order->status==2): // $x == ($x > 5)
                              $update_status="3";
                              $update_status_name="Goods Ready";
                              break;
                          case ($order->status==3): // $x == ($x <= 5)
                            $update_status="4";
                            $update_status_name="Quality Inspections";
                              break;
                          case ($order->status==4): // $x == ($x <= 5)
                                $update_status="5";
                                $update_status_name="Loading";
                              break;
                          case ($order->status==5): // $x == ($x <= 5)
                                $update_status="6";
                                $update_status_name="Shipped";
                              break;
                          default:
                          $update_status="1";
                          $update_status_name="Confirmed";
                              break;
                      }

                     
                      ?>

                   

                    <div class="tab-pane" id="yellow">
                      @if($update_status=="2")
                        <p class="status-type" style="padding-top: 20px; font-weight:bold">next: Goods Ready </p>
                      @endif
                      @if($update_status=="3")
                        <p class="status-type" style="padding-top: 20px; font-weight:bold">next: Goods Ready => Quality Inspection</p>
                      @endif
                      @if($update_status=="4")
                        <p class="status-type" style="padding-top: 20px; font-weight:bold">next: Goods Ready => Quality Inspection</p>
                      @endif
                      @if($update_status=="5")
                        <p class="status-type" style="padding-top: 20px; font-weight:bold">next: Goods Ready => Quality Inspection => Loading => Shipped</p>
                      @endif
                        {{-- <p style="font-weight: bold;">Update status: Goods Ready</p> --}}
                        {{-- <p style="font-weight: bold;">Update status</p> --}}
                        <div>
                            <form method="post" action="{{url('/update-order-details-status/'.request()->route()->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <span style="font-weight:bold;">Update status: {{$update_status_name}}</span>
                                  <input type="hidden" name="order_status" value="{{$update_status}}">
                                    {{-- <select name="order_status" id="" class="form-control select2" style="width: 300px">
                                        <option>-- Select --</option>
                                        
                                        <option value="2"  {{ 2 == $update_status ? 'selected="selected"' : '' }}>Create order/Confirmed</option>
                                        <option value="3"  {{ 3 == $update_status ? 'selected="selected"' : '' }}>Goods Ready</option>
                                        <option value="4"  {{ 4 == $update_status ? 'selected="selected"' : '' }}>Quality Inspections</option>
                                        <option value="5"  {{ 5 == $update_status ? 'selected="selected"' : '' }}>Loading</option>
                                        <option value="6"  {{ 6 == $update_status ? 'selected="selected"' : '' }}>Shipped</option>
                                         
                                    </select> --}}
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea3">Message</label>
                                    <textarea class="form-control" id="msg" name="msg" rows="7" style="width: 50%"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="formFileLg" class="form-label">Upload Files</label>
                                    <input type="file" class="form-control" id="documents" name="documents[]" multiple="true"  />
                                </div>
                                <input type="hidden" name="product_id" value="{{$order->product_id}}">
                                <button type="submit" class="btn btn-success">Update status</button>
                            </form>

                          {{-- Lopp area start --}}
                        <p>Order current status</p>
                        <p style="font-weight: bold;">Stage-1 : Confirmed</p>
                          @foreach($order->ordersstatus as $orderstatus)
                          <?php
                          switch($orderstatus->status) {
                          case ($orderstatus->status==2): // $x == ($x > 5)
                              $order_status="Stage-1 : Confirmed";
                              break;
                          case ($orderstatus->status==3): // $x == ($x <= 5)
                              $order_status="Stage-2 : Goods Ready";
                              break;
                          case ($orderstatus->status==4): // $x == ($x <= 5)
                              $order_status="Stage-3 : Quality Inspections";
                              break;
                          default:
                          $order_status="Confirmed";
                              break;
                      }

                      $images = explode(", ", $orderstatus->image);
                      ?>
                           
                            <div>
                                <p style="font-weight: bold;">{{$order_status}}</p>
                                <p>
                                  @if($orderstatus->image)
                                  <?php
                                    foreach($images as $image) {
                                    ?>
                                        <div><a href="{{asset('uploads/posts/'.$image)}}" target="_blank">{{$image}}</a></div>
                                   <?php     
                                    }
                                  ?>
                                  @endif
                                </p>
                                {{-- <p style="font-weight: bold;">Your order has been confirmed, Expected delivery date is</p> --}}
                            </div>
                            
                          @endforeach

                          {{-- @foreach($order->ordersstatus as $orderstatus)  
                            @if($orderstatus->status==3)
                            <div>
                                <p style="font-weight: bold;">Current status: Goods Ready</p>
                                <p style="font-weight: bold;">Confirmed</p>
                                <p style="font-weight: bold;">Your order has been confirmed, Expected delivery date is</p>
                            </div>
                            @endif
                          @endforeach

                          @foreach($order->ordersstatus as $orderstatus) 
                            @if($orderstatus->status==4)
                            <div>
                                <p style="font-weight: bold;">Current status: Quality Inspections</p>
                                <p style="font-weight: bold;">Goods Ready</p>
                                <p style="font-weight: bold;">Confirmed</p>
                                <p style="font-weight: bold;">Your order has been confirmed, Expected delivery date is</p>
                            </div>
                            @endif

                          @endforeach --}}
                            {{-- Lopp area end --}}

                        </div>
                    </div>

                    {{-- <div class="tab-pane" id="green">
                        <h1>Green</h1>
                        <p>green green green green green</p>
                    </div>
                    <div class="tab-pane" id="blue">
                        <h1>Blue</h1>
                        <p>blue blue blue blue blue</p>
                    </div> --}}
                  </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
    </div><!-- /.container-fluid -->
    
  </div>



 
@endsection

<script src="//code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js" type="text/javascript"></script>

  
<script type="text/javascript"> 
    jQuery(document).ready(function ($) { 
        $('#tabs').tab(); 
    }); 
</script>


{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

<script type="text/javascript">
// $(document).ready(function(){


//         $('.select2').change(function(){
//         var status = $(this).val();
//       //  var prod_id = $(this).attr('id');
//         var orderid = $(this).attr('id');
//        // alert(order_id);
//         $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         });
    
//         $.ajax({
//                 type: "POST",
//                 // url: "/update-product-status",
//                 url: "/update-quote-status",
//                 data: {status_val : status, order_id: orderid},
//                 beforeSend: function() {
//                     $(".loader").show();
//                 },
//                 success: function(data) {
//                     $('#status').css("display", "block");
//                     $('#status').text(data['status']);
                
//                 },
//                 complete: function(){
//                     $('.loader').hide();
//                 },
//             }); 
//         });

       

// });

</script>

<script type="text/javascript">

    function deleteCategory(id){
      if(confirm('Are you sure you want to delete?')){
        window.location.href='{{url('/product-delete/')}}/'+id;
      }
    }
  
  
  </script>


 {{-- MODAL Edit AREA START --}}

 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
  
        </div>
        <div class="modal-body">
          
            <form action="{{url('/add-product')}}" method="POST" name="addProduct" id="addProduct" enctype="multipart/form-data">
                @csrf
          <!-- SELECT2 EXAMPLE -->
          <div>

            <!-- /.card-header -->
            <div>
              <div class="row">

                <div class="col-sm-12">
                    <div class="form-group">
                        <input type="file" class="image-input" name="image" id="image">
                        <label class="image-label" for="image">Choose file</label>
                    </div>
                </div>
    
                <div class="col-sm-12">
                    <div class="form-group">
                      <label>Product Name</label>
                      <input type="text" class="form-control" value="{{old('name')}}" name="name" id="name" aria-describedby="pnameHelp" placeholder="Product Name" class="form-control {{($errors->any() && $errors->first('name')) ? 'is-invalid' : ''}}">
                     <span style="color: red;">@error('name'){{@'Product name is required'}}@enderror</span>
                    </div>
                </div>
                  <!-- /.col -->
    
                
                <!-- /.col -->
    
                
                
              </div>
              <!-- /.row -->
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
              </div>
              
            </div>
            <!-- /.card-body -->
            
          </div>
          <!-- /.card -->
            </form>
    </div>
  </div>
  </div>
  </div>
  
  

  <?php if(count($errors)>0) : ?>
    <script>
        $( document ).ready(function() {
            $('#myModal').modal('show');
        });
    </script>
    
   
  <?php endif ?>

